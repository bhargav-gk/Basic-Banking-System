<?php 
    $curPage="viewuser";
    $title="User";

    //sleep(1);
include('inc/headerview.php') ?>

<style>
    #frm{
        width:500px;
    }
    table{
        border-collapse:collapse;
        padding:5px;
        width:100%;
        color:grey;
        font-family:monospace;
        font-size:20px;
        text-align:center;
        
    }
    th{
        background-color:grey;
        color:white;
    }
    tr: nth-child(even) {background-color:#f2f2f2}
</style>        
        <br><br>
<!-- ######################################################################################################-->
      <!--Main Transfer Contents -->
      <div class="container">
            
            <?php
            include('inc/connect.php');
            $iid=$_GET['id'];
            $sql="select * from users where id=$iid";
            $result=$conn->query($sql);
            $idname="";

                if($result->num_rows >0){
                    echo "<table border=1><tr><th>AccNo</th><th>Name</th><th>Balance</th></tr>";
                    //Output data of each row
                    while($row=$result->fetch_assoc()){
                        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["balance"]."</td></tr>";
                        if($row['id']==$iid){
                            $idname=$row['name'];
                        }
                    }
                    echo "</table>";
                }else{
                    echo "0 results";
                }

                $conn->close();

            ?>
        
    <hr>
    <div class="container bg-light">
        <h3>Transfer Money To:</h3><br>
        <div class="container shadow p-5" id="frm">
    <h3>Tranferring Form</h3>

    <div class="container border bg-light py-3 my-3" > 

    <form action="payreceipt.php" method="post">
    <div class="form-group">
            <label for="sender">Sender[AccNo]</label>
            <input type="number" class="form-control" id="sender" 
            name="sender"  value='0<?php echo $iid;?>' readonly>
            <!-- placeholder=<php echo $idname;?> -->
        </div>
    <div class="form-group">
            <label for="receiver">Receiver</label>
            <select name="receiver" class="form-control" id="receiver" placeholder="name of the account holder">
                <option  value="null" readonly>Select the Name of the account holder</option>
                <?php        
                include('inc/connect.php');
                $sql="select * from users";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                    if($row['id']==$iid){continue;}
                ?>
                <option value=<?php echo $row['name']; ?> ><?php echo $row['name']; ?>
                </option>
                <?php } ?>
            </select>

            <!--<input type="text" class="form-control" id="receiver" name="receiver" placeholder="name of the account holder">-->
        </div>
        <div class="form-group">
            <label for="amount">Enter the Amount</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="amount to be transfered">
        </div>
                
       <button type="submit" class="btn btn-success"><i class="fa fa-telegram large"></i> Send Amount</button>
</form>

</div>

</div>
<br>
<br>

    <!-- Php code for Transferring...-->


    <br>


<!-- ######################################################################################################-->
    <!--End of Main Transfer Contents -->
        <?php include('inc/footer.php'); ?>


<!--
    <a href="transactions.php"><button type="button" 
    class="btn btn-secondary btn-lg btn-block">View All Transactions</button></a>
    <br><br><br>
        -->
      
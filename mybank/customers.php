<?php 
    $curPage="Customers";
    $title="Customers";

//sleep(1);
include('inc/header.php') ?>

<style type="text/css">
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

        <!-- Main contents of Customers.php-->
<!-- ######################################################################################################-->

<div class="container">
        <h3>Our Valuable Customers</h3>



        <div class="display_table border">
            <div class="center_div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>AccNo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Balance Amount</th>

                                <th colspan="2">Operation</th>

                            </tr>
                        </thead>
                        <tbody>
                </div>            
    
        
    <?php
        include('inc/connect.php');
        $selectquery="select * from users";
        $result=mysqli_query($conn,$selectquery);
        $numofrows=mysqli_num_rows($result);

        while($res= mysqli_fetch_array($result))
        {
            ?>
            <tr>
                <td><?php echo $res['id'] ?></td>
                <td><?php echo $res['name'] ?></td>
                <td><?php echo $res['email'] ?></td>
                <td><?php echo $res['balance'] ?></td>
                <td><a href="viewusernpay.php?id=<?php echo $res['id']; ?>" >
                <i class="fa fa-credit-card-alt " aria-hidden="true" style="color:black;"> Transact</i>
                </a></td>
            </tr>
            <?php
        }
        ?>

    </tbody>
    </table>
    </div>
    </div>
    </div>







 <!--######################################################################################################-->   
    
 
    </div>
    <br><br><br>
    <?php include('inc/footer.php'); ?>
<!--######################################################################################################-->
<!--
<table class="table">
    <thead>
        <tr>
            <th>Row</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Clark</td>
            <td>Kent</td>
            <td>clarkkent@mail.com</td>
        </tr>
        <tr>
            <td>2</td>
            <td>John</td>
            <td>Carter</td>
            <td>johncarter@mail.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Peter</td>
            <td>Parker</td>
            <td>peterparker@mail.com</td>
        </tr>            
    </tbody>
</table>

   

$sql="select id,firstname,lastname from MyGuests";
$result=$conn->query($sql);

if($result->num_rows >0){
    echo "<table border=1><tr><th>ID</th><th>Name</th><th>Transfer</th></tr>";
    //Output data of each row
    //while($row=$result->fetch_assoc()){
        //echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td>
        //<td><a href='viewuser.php?id=<php echo \'ff\'?<button>Transfer</button></a></td></tr>";

    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td>";
        echo "<td><a href='viewuser.php'><button>Transfer</button></a></td></tr>";
    }
 
    echo "</table>";
    $pp=isset($row['id']) ? count($row['id']): 0;
    echo "$pp";
    echo "<br><br><br>";
}else{
    echo "0 results";
}

$conn->close();

?>
*/
 -->
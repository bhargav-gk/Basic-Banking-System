<?php
$title="Transactions";

//sleep(1);
include('inc/headertr.php');
?>

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

<div class="container bg-light p-3 shadow-lg">
    <br>
        <h3>Transaction History</h3>



        <div class="display_table border">
            <div class="center_div">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>TiD</th>
                                <th>Sender</th>
                                <th>Receiver</th>
                                <th>Amount</th>
                                <th>TimeStamp</th>

                                

                            </tr>
                        </thead>
                        <tbody>
                </div>            
    
        
    <?php
        include('inc/connect.php');
        $selectquery="select * from transactions";
        $result=mysqli_query($conn,$selectquery);
        $numofrows=mysqli_num_rows($result);

        while($res= mysqli_fetch_array($result))
        {
            ?>
            <tr>
                <td><?php echo $res['tid'] ?></td>
                <td><?php echo $res['sender'] ?></td>
                <td><?php echo $res['receiver'] ?></td>
                <td><?php echo $res['amount'] ?></td>
                <td><?php echo $res['tdatetime'] ?></td>
                
            </tr>
            <?php
        }
        ?>

    </tbody>
    </table>
    </div>
</div>
</div>

<?php
include('inc/footer.php');
?>
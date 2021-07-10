<?php 
$title="PayReceipt";
include('inc/headerview.php'); 

?>
<style>
    #frm{
        width:500px;
    }
</style>
   
        <div class="container bg-light">
            <br><br><br>
<?php
include('inc/connect.php');

//if($_SERVER['REQUEST_METHOD']=='$_POST')
//if(isset($_POST['submit'])){

        $receivername=$_REQUEST['receiver'];
        $amount=$_REQUEST['amount'];
        //$sender=$iid;
        $sender=$_REQUEST['sender'];
        //echo $receivername,$amount,$sender ;
        
        $senderquery="select * from users where id='$sender'";
        $senderdata=mysqli_query($conn,$senderquery);

        if(!$senderdata){
            printf("Error :%s\n",mysqli_error($conn));
            echo "Error01";
        }
        $senderarr=mysqli_fetch_array($senderdata);
        $sendername=$senderarr['name'];
        //receiver query
        $receiverquery="select * from users where name='$receivername'";
        $receiverdata=mysqli_query($conn,$receiverquery);

        if(!$receiverdata){
            printf("Error :%s\n",mysqli_error($conn));
            echo "Error02";
        }
        $receiverarr=mysqli_fetch_array($receiverdata);
        $receiver=$receiverarr['id'];
        //echo $receiver;

        if($senderarr['balance'] >= $amount){            
            $decrease_sender=$senderarr['balance'] - $amount;
            $increase_receiver=$receiverarr['balance'] + $amount;

            $squery="update users set balance=$decrease_sender where id=$sender";
            $rquery="update users set balance=$increase_receiver where id=$receiver";
            $ress=mysqli_query($conn,$squery);
            $resr=mysqli_query($conn,$rquery);

            /*if(mysqli_query($conn,$squery)==TRUE){
                
            }else{
                echo "<br>error in resS<br>".mysqli_error($conn);
            }
            if(mysqli_query($conn,$rquery)==TRUE){
                $resr=mysqli_query($conn,$rquery);
            }else{
                echo "<br>error in resR<br>".mysqli_error($conn);
            }*/

            if($ress && $resr){      ?>
            <div class="container" id='frm'>
                <div class="card border shadow p-3 justify-content-center text-align-left" style="width: 400px;">                   
                <div class="card-body">
                <h3 class="card-title">Receipt </h3><br>
                    <h4>Sender  : <?php  echo $sendername; ?></h4>
                    <h4>Receiver : <?php  echo $receivername; ?></h4>
                    <h4>Amount : <?php  echo $amount; ?></h4>
                <!--<a href="#" class="btn btn-primary">View Profile</a> -->
            </div>

    </div>
    </div><br><br>
            


            <?php
                //inserting the values into Transactions table
                $stmt=$conn->prepare("insert into transactions (sender,receiver,amount) values (?,?,?)");
                $stmt->bind_param("ssi",$sendername,$receivername,$amount);
                $stmt->execute();                         

                echo '<div class="container  border shadow py-3" id="frm">
                <div class="alert alert-success alert-dismissable fade show" role="alert">
                            <strong>Payment Successful</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>  
                           </div> ';
                          
                echo '<br>';
                echo '<a href="transactions.php"><button type="button" class="btn btn-success " >
                <strong>Transaction History</strong>                            
                </button>                   
                </a>
                </div> ';
            }                          
            else{               
                echo '
                <div class="alert alert-danger alert-dismissable fade show" role="alert">
                            <strong>Transaction Failed !</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>  
                           </div> ';
            }
        }     
        else{
            echo mysqli_error($conn);
        }           
   
?>
<br><br><br>

</div>
</body>
</html>

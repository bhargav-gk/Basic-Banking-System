<?php 
    $curPage="createAcc";
    $title="JoinUs";

    //sleep(1);
include('inc/header.php') ?>
<style>
    #frm{
        width:500px;
    }
</style>

    <div class="container bg-light p-3">
        
    <br>
    <h4>Become a Member</h4>

    <div class="container border bg-light p-5 shadow" id="frm">
    <form action="createAcc.php" method="post">
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                </div>
            </div>
<br>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                </div>
            </div>
<br>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-outline-success"><i class="fa fa-thumbs-up"></i>  Join </button>
                </div>

            </div>

    </form>
            <?php

            if($_SERVER['REQUEST_METHOD']=='POST'){
                $name=$_POST['username'];
                $email=$_POST['email'];
                $balance=10000;
            
               
            include('inc/connect.php');

                    $stmt=$conn->prepare("insert into users(name,email,balance) values (?,?,?)");
                    $stmt->bind_param("ssi",$name,$email,$balance);
                    if($stmt->execute()==TRUE){
                    echo '<div class="alert alert-success alert-dismissable fade show" role="alert">
                    <strong>Welcome On-Board</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>                    
                    </div>';
                    echo '<br>';
                    echo '<a href="index.php"><div class="alert alert-success" role="alert">
                    <strong>HomePage</strong> 
                    <button type="button" class="btn" >                   
                    </button>                   
                    </div></a> ';
                    }
                    $stmt->close();
                    $conn->close();
                }
               ?> 
               


    </div>
    <br><br><br>
 </div>






    <?php include('inc/footer.php'); ?>
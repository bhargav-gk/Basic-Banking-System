<?php 
    $curPage="index";
    $title="";


include('inc/header.php') ?>


<!-- ######################################################################################################-->
<!--Main -->
       <div class="container bg-light">
           <div class="container bg-light p-3 my-3">
        <h2>Welcome To MYBANK Banking Co.  <i class="fa fa-institution"></i></h2>
        <p>Start your transactions by Signing up to our Bank.  We keep your assets safe and protected 
            with utmost care and delight.</p>
            </div><br>
            <h3>Available Operations :</h3><br>
                <div class="row">
                <div class="col">
                    <div class="card text-white bg-secondary mb-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa fa-user-circle"></i> SignUp</h5>
                            <p class="card-text">Create your Account.</p>
                            <br>
                            <a href="createAcc.php" class="btn btn-success"><i class="fa fa-user-circle"></i> Create Account</a>
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-secondary mb-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa fa-eye"></i> View Customers</h5>
                            <p class="card-text">View and Transact with all our Customers.</p>
                            <br>
                            <a href="customers.php" class="btn btn-success"><i class="fa fa-user-circle"></i> View Customers</a>
                            <br><br>
                        </div>
                    </div>
                </div>
                <br>
                


       </div><BR></BR>
       <h3>Available Currencies :</h3><br>
                <div class="col">
                    <div class="card text-white bg-secondary mb-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa fa-btc"></i> Digital</h5>
                            <p><i class="fa fa-btc"></i> . BITCOIN .  
                            <i class="fa fa-viacoin"></i> .  VIACOIN .
                            <i class="fa fa-rouble"></i>    .
                            <i class="fa fa-cc-visa"></i>  .    .
                            <i class="fa fa-paypal"></i>   .    .
                            <i class="fa fa-cc-paypal"></i>
                            
                        
                        
                        
                        </p>
        
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-secondary mb-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa fa-money"></i> Cash Type</h5>
                            <p>
                            <i class="fa fa-inr"></i>  . INR .
                            <i class="fa fa-usd"></i>  . USD  .
                            <i class="fa fa-euro"></i> . EURO  . 
                            <i class="fa fa-shekel"></i> . SHEKEL  . 
                            <i class="fa fa-yen"></i>  .  YEN .
                            <i class="fa fa-won"></i>  .  WON . </p>
                            <br><br>
                        </div>
                    </div>
                </div>

<br><br><br>

<!-- ######################################################################################################-->
<!--Footer-->
<?php include('inc/footer.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MYBANK Bank <?php echo $title; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<!-- ######################################################################################################-->
<body>
    
    <!--Header-->
        <nav class="navbar navbar-expand-md navbar-light bg-secondary shadow">
            <a href="#" class="navbar-brand">
                <img src="pixs/mybank1.png" height="100" width="200" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <p class="navbar-toggler-icon"></p>
            </button>
        
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <div class="navbar-nav align-right">
                    <a href="index.php" class="nav-item nav-link text-white"><i class="fa fa-home"></i> Home</a>
                    <a href="customers.php" class="nav-item nav-link text-white"><i class="fa fa-database"></i> Our Customers</a>
                    <a href="createAcc.php" class="nav-item nav-link text-white"> SignUp</a>
                    <a href="#ftr" class="nav-item nav-link text-white"><i class="fa fa-address-card"></i> Contact</a>           
                </div>               
            </div>
        </nav>


 <!-- Testing template
<php
    $curPage="TestHF";
    $title="Testhf";


include('inc/header.php') ?>

<div class="container">
 <php echo "$curPage"; ?>
 <h2>Jai Sri Ram .</h2>
</div>
<php include('inc/footer.php') ?>       

-->
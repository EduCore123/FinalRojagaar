<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rojagaar Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

  <?php $_SESSION['currentPage'] = 'index'; ?>
  <?php include'header.php';?>
  <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">

        <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php"><?php echo $lang['home'] ?><i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['login'] ?></span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['login'] ?></h1>
        </div>
      </div>
    </div>
  </div>

  <section>
    <div class="ftco-section contact-section bg-light">
     <div class="container">

      <h2><?php echo $lang['loginform'] ?></h2>


      <form action="log.php" method="POST">
        <?php
        if(isset($_SESSION["msg"])) {
          ?>
          <div class="text text-center text-danger"><?php  echo $_SESSION["msg"]; ?></div>
          <?php
          unset($_SESSION["msg"]);
        }
        ?>
        <div class="form-group">
          <label for="mobileno"><?php echo $lang['mobileno'] ?>:</label>
          <input type="text" class="form-control" id="mobileno" placeholder="<?php echo $lang['mobileno'] ?>"
          value="<?php if($_COOKIE['mobileno']) { echo $_COOKIE['mobileno']; } ?>" name="mobileno">
        </div>

        <div userotp="<?= $_COOKIE['otp'] ?>" class="form-group <?=  isset($_COOKIE['otp']) ? '' : 'd-none'; ?>">
          <label for="verifyotp">Enter OTP:</label>
          <input type="text" class="form-control" id="verifyotp" placeholder="Enter the OTP" value="" name="verifyotp">
        </div>


       <input type="submit" value="<?php echo $lang['login'] ?>" name="submit" class="btn btn-primary" >
       <button type="reset" class="btn btn-primary"><?php echo $lang['reset'] ?></button>
       <br>
       <p class="text-dark"><?php echo $lang['notregister'] ?>
       <a href="register.php">&nbsp;<?php echo $lang['click'] ?></a> </p>
       <br>
     </form>
   </div>
 </div>
</section>
<?php include'footer.php'; ?>
</body>
</html>


<?php
include('connect.php');
    session_start();
    // echo "SESSION::: <pre>"; print_r($_SESSION);die;
?>

 <!DOCTYPE html>
<html>
  <head>
    <title>Rojagaar Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
 <body>
  <?php $_SESSION['currentPage'] = 'profile'; ?>
  <?php include'header.php'; ?>
  <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="home.php"><?php echo $lang['home'] ?> <i class="ion-ios-arrow-forward"></i></a></span> </p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['profile'] ?></h1>

          </div>
        </div>
      </div>
    </div>
    <section>
        <div class="ftco-section contact-section bg-light">
     <div class="container">
  <h2><?php echo $lang['edit'] ?></h2>
                <?php
                if(isset($_SESSION["msg"])) {
                ?>
                <div class="text text-center text-success"><?php  echo $_SESSION["msg"]; ?></div>
                <?php
                unset($_SESSION["msg"]);
                }
                ?>

   <form method="post" action="updateprofile.php">
                <?php
                if(isset($_SESSION["msg"])) {
                ?>
                <div class="text text-center text-success"><?php  echo $_SESSION["msg"]; ?></div>
                <?php
                unset($_SESSION["msg"]);
                }
                ?>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>" id="">
        <div class='form-group'>
            <label><?php echo $lang['firstname'] ?></label>
            <input name='firstname' value="<?php echo $_SESSION['Firstname'];?>"  id='firstname' class='form-control' type='text' placeholder='<?php echo $lang['firstname'] ?>' required>
        </div>
        <div class='form-group'>
            <label for='lastname'><?php echo $lang['lastname'] ?></label>
            <input name='lastname' value="<?php echo $_SESSION['lastname'];?>" id='lastname' class='form-control' type='text' placeholder='<?php echo $lang['lastname'] ?>' required>
        </div>
        <div class='form-group'>
            <label for='address'><?php echo $lang['address'] ?></label>
            <input value="<?php echo $_SESSION['address'];?>" name='address' id='address' class=' form-control' rows='5' placeholder='<?php echo $lang['address'] ?>'>
        </div>
         <div class='form-group'>
            <label for='village'><?php echo $lang['village1'] ?></label>
            <input value="<?php echo $_SESSION['village'];?>" name='village' id='village' class=' form-control' rows='5' placeholder='<?php echo $lang['village1'] ?>'>
        </div>
         <div class='form-group'>
            <label for='taluka'><?php echo $lang['taluka1'] ?></label>
            <input value="<?php echo $_SESSION['taluka'];?>" name='taluka' id='taluka' class=' form-control' rows='5' placeholder='<?php echo $lang['taluka1'] ?>'>
        </div>
         <div class='form-group'>
            <label for='district'><?php echo $lang['district1'] ?></label>
            <input value="<?php echo $_SESSION['district'];?>" name='district' id='district' class=' form-control' rows='5' placeholder='<?php echo $lang['district1'] ?>'>
        </div>
         <div class='form-group'>
            <label for='state'><?php echo $lang['state1'] ?></label>
            <input value="<?php echo $_SESSION['state'];?>" name='state' id='state' class=' form-control' rows='5' placeholder='<?php echo $lang['state1'] ?>'>
        </div>
         <div class='form-group'>
            <label for='username'><?php echo $lang['username'] ?></label>
            <input name='username' id='username'  value="<?php echo $_SESSION['username'];?>"  class='form-control' type='text' placeholder='<?php echo $lang['username'] ?>' readonly>
        </div>
        <div class='form-group'>
            <label for='gender'><?php echo $lang['gender'] ?></label>
            <input name='gender' id='gender'  value="<?php echo $_SESSION['gender'];?>"  class='form-control' type='text' placeholder='<?php echo $lang['gender'] ?>' readonly>
        </div>
         <div class='form-group'>
            <label for='address'><?php echo $lang['email'] ?></label>
            <input value="<?php echo $_SESSION['email'];?>" name='email' id='email' class=' form-control' rows='5' placeholder='<?php echo $lang['email'] ?>'readonly>
        </div>
        <div class='form-group'>
            <label for='mobile'><?php echo $lang['mobileno'] ?></label>
            <input name='mobile' maxlength="10" id='mobile'  value="<?php echo $_SESSION['mobile'];?>"  class='form-control' type='text'  placeholder='<?php echo $lang['mobileno'] ?>' required>
        </div>
         <div class='form-group'>
            <label for='type'><?php echo $lang['type'] ?></label>
            <input name='type' id='type'  value="<?php echo $_SESSION['type'];?>"  class='form-control' type='text' placeholder='<?php echo $lang['type'] ?>' readonly>
        </div>

        <div class='form-group'>
            <input type="submit"  value="<?php echo $lang['edit'] ?>" class="btn btn-success">
            <a href="changepassword.php"> <input value="<?php echo $lang['resetpassword'] ?>" class="btn btn-success"></a>
        </div>
</div>
</form>
</div>
</div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>

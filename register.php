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

 <body><!-- onload="createCaptcha()" -->


  <?php include 'register_data.php';?>
      <?php $_SESSION['currentPage'] = 'register'; ?>
  <?php include'header.php'; ?>
    <?php include'regmail.php'; ?>
  <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <h3><p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php"><?php echo $lang['login'] ?><i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['regi'] ?></span></p></h3>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['register'] ?></h1>

          </div>
        </div>
      </div>
    </div>
    <section>
        <div class="ftco-section contact-section bg-light">
     <div class="container">


  <h2><?php echo $lang['register'] ?></h2>


    <form action="#" method="POST">
        <h5 class="text text-center text-success"><?= $msg; ?></h5>
      <div class="form-group">
       <label for="fname"><?php echo $lang['firstname'] ?>:<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="fname" placeholder="<?php echo $lang['firstname'] ?>" name="firstname" value="<?= $userData['firstname'] ? $userData['firstname'] : '' ?>" required>
      <span class="error text-danger"><?php echo $firstnameErr; ?></span>
    </div>

    <div class="form-group">
      <label for="lname"><?php echo $lang['lastname'] ?>:<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="lname" placeholder="<?php echo $lang['lastname'] ?>" name="lastname" value="<?= $userData['lastname'] ? $userData['lastname'] : '' ?>" required><span class="error text-danger"><?php echo $lastnameErr; ?></span>
    </div>

      <div class="form-group">
      <label for="address"><?php echo $lang['address1'] ?>:<span class="text-danger">*</span></label>
      <input type="address" class="form-control" id="add" placeholder="<?php echo $lang['address'] ?>" name="address" value="<?= $userData['address'] ? $userData['address'] : '' ?>" required>
    </div>
      <div class="form-group">
      <label for="lname"><?php echo $lang['village1'] ?>:<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="village" placeholder="<?php echo $lang['village1'] ?>" name="village" value="<?= $userData['village'] ? $userData['village'] : '' ?>"><span class="error text-danger">
    </div>  <div class="form-group">
      <label for="lname"><?php echo $lang['taluka1'] ?>:<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="taluka" placeholder="<?php echo $lang['taluka1'] ?>" name="taluka" value="<?= $userData['taluka'] ? $userData['taluka'] : '' ?>"><span class="error text-danger">
    </div>  <div class="form-group">
      <label for="lname"><?php echo $lang['district1'] ?>:<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="district" placeholder="<?php echo $lang['district1'] ?>" name="district" value="<?= $userData['district'] ? $userData['district'] : '' ?>"><span class="error text-danger">
    </div>
      <div class="form-group">
      <label for="lname"><?php echo $lang['state1'] ?>:<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="state" placeholder="<?php echo $lang['state1'] ?>" name="state" value="<?= $userData['state'] ? $userData['state'] : '' ?>"><span class="error text-danger">
    </div>
      <div class="form-group">
      <label for="email"><?php echo $lang['email'] ?>:<span class="text-danger">*</span></label>
      <input type="email" class="form-control" id="email" placeholder="<?php echo $lang['email'] ?>" name="email" value="<?= $userData['email'] ? $userData['email'] : '' ?>" required>
      <span class="error text-danger"><?php echo $emailErr; ?></span>
    </div>
         <div class="form-group">
      <label for="name"><?php echo $lang['username'] ?>:<span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="username" placeholder="<?php echo $lang['username'] ?>" name="username" value="<?= $userData['username'] ? $userData['username'] : '' ?>"required>
      <span class="error text-danger"><?php echo $usernameErr; ?></span>
    </div>
       <div class="form-group">
      <label for="gender"><?php echo $lang['gender'] ?>:</label>
     <div class="form-check">
      <label class="form-check-label" for="radio1"  >
        <input type="radio" class="form-check-input" id="radio1" name="opt" value="male" checked><?php echo $lang['male'] ?>
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio2" >
        <input type="radio" class="form-check-input" id="radio2" name="opt" value="female"><?php echo $lang['female'] ?>
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label" for="radio3" >
        <input type="radio" class="form-check-input"  id="radio3" name="opt" value="other" ><?php echo $lang['other'] ?>
      </label>
    </div>
               <div class="form-group">
      <label for="mno"> <?php echo $lang['mobileno'] ?>:<span class="text-danger">*</span></label>
      <input type="text" maxlength="10" title="Please enter exactly 10 digits" class="form-control" id="mno" placeholder=" <?php echo $lang['mobileno'] ?>" name="mobile" value="<?= $userData['mobile'] ? $userData['mobile'] : '' ?>" required><span class="error text-danger"><?php echo $mobileErr; ?></span>
    </div>



  <br>
      <input type="submit" value="<?php echo $lang['signup'] ?>" name="submit" class="btn btn-primary" >
       <button type="reset" class="btn btn-primary"><?php echo $lang['reset'] ?></button>
    </div>

            </form>

</div>
</div>
</div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>

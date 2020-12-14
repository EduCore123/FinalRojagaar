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
  <?php $_SESSION['currentPage'] = 'dashboard'; ?>
  <?php include'header.php';?>
  <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true"> <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true"> <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
          <br>
          <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['tagline2'] ?></p>
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['tagline'] ?> </h1>
          <h1  data-scrollax="properties: { translateY: '30%', opacity: 1.8 }"><?php echo $lang['tagline1'] ?></h1>

          <!-- //todo -->

          <!-- //todo -->

        </div>
      </div>
    </div>
  </div>

</div>
</div>
<div class="row pt-5">
    <div class="col-xs-12 col-md-6 pt-4 text-center border-right border-bottom">
      <img src="assets/images/Farms/F1.jpg" width="150" height="100"  alt=""><br>
     <a href="applyjob.php"> <button class="btn btn-primary zoom"><?= $lang['wantjob'] ?></button></a><br>
      <h3><?= $lang['dash1'] ?></h3><br>
    </div>
    <div class="col-xs-12 col-md-6 pt-4 text-center border-bottom">
      <img src="assets/images/Farms/F2.jpg"width="150" height="100" alt=""><br>
     <a href="postjob.php"> <button class="btn btn-primary zoom"><?= $lang['postjob'] ?></button></a><br>
      <h3><?= $lang['dash2'] ?></h3><br>
    </div>
    <div class="col-xs-12 col-md-6 pt-4 text-center border-right border-bottom">
      <img src="assets/images/Farms/F3.jpg" width="150" height="100"  alt=""><br>
     <a href="searchrojagaar.php"> <button class="btn btn-primary zoom"><?= $lang['find1'] ?></button></a><br>
      <h3><?= $lang['dash3'] ?></h3><br>
    </div>
    <div class="col-xs-12 col-md-6 pt-4 text-center border-bottom">
      <img src="assets/images/Farms/F4.jpg" width="150" height="100"  alt=""><br>
     <a href="searchmajur.php"> <button class="btn btn-primary zoom"><?= $lang['find2'] ?></button></a><br>
      <h3><?= $lang['dash4'] ?></h3><br>
    </div>
    <div class="col-xs-12 col-md-6 pt-4 text-center border-right border-bottom">
      <img src="assets/images/Farms/F5.jpg" width="150" height="100"  alt=""><br>
     <a href="jobs1.php"> <button class="btn btn-primary zoom"><?= $lang['response'] ?></button></a><br>
      <h3><?= $lang['dash5'] ?></h3><br>
    </div>
   <!--  <div class="col-xs-12 col-md-6 pt-4 text-center border-bottom">
      <img src="assets/images/Farms/F6.jpg" width="250" height="250" alt=""><br>
     <a href="blog.php"> <button class="btn btn-primary zoom"><?= $lang['blog'] ?></button></a><br>
      <h3><?= $lang['blog'] ?></h3><br>
    </div> -->
    <div class="col-xs-12 col-md-6 pt-4 text-center border-right border-bottom">
      <img src="assets/images/Farms/F7.jpg" width="150" height="100"   alt=""><br>
     <a href="response1.php"> <button class="btn btn-primary zoom"><?= $lang['jobapplication'] ?></button></a><br>
      <h3><?= $lang['dash7'] ?></h3><br>
    </div>
  </div>
<?php include'footer.php' ?>
</body>
</html>

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
    <?php $_SESSION['currentPage'] = 'questions'; ?>
  <?php include 'header.php'; ?>
   <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F20.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="home.php"><?php echo $lang['home'] ?><i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['about'] ?></span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '20%', opacity: 1.4 }"><?php echo $lang['frequentlyaskedque'] ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url('assets/images/Farms/F13.jpg');"></div>
        <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h3 class="mb-4"><span><?php echo $lang['frequentlyaskedque'] ?></span></h3>
        </div>
        <div>
                <p><?php echo $lang['questions1'] ?></p>
                <p><?php echo $lang['questions2'] ?></p>
                <p><?php echo $lang['questions3'] ?></p>
                <p><?php echo $lang['questions4'] ?></p>
                <p><?php echo $lang['questions5'] ?></p>


            </div>
        </div>
    </section>

  <?php include 'footer.php'; ?>
</body>
</html>

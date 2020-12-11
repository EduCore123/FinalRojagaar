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
  <?php $_SESSION['currentPage'] = 'contact'; ?>


  <?php include 'header.php'; ?>
   <?php include 'contact1.php'; ?>
<div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F22.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
      <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
       <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php"><?php echo $lang['login'] ?><i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['contact'] ?></span></p>
       <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['contactus'] ?></h1>

     </div>
   </div>
 </div>
</div>


<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h3"><?php echo $lang['contactinfo'] ?></h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3">
        <p><span><?php echo $lang['address'] ?>:</span><a href="#"><?php echo $lang['add1'] ?></a></p>
      </div>
      <div class="col-md-3">
        <p><span><?php echo $lang['mobileno'] ?>:</span> <a href="tel://1234567920"><?php echo $lang['contact1'] ?></a></p>
      </div>
      <div class="col-md-3">
        <p><span><?php echo $lang['email'] ?>:</span> <a href="mailto:info@yoursite.com">info@rojagaar.in</a></p>
      </div>
      <div class="col-md-3">
        <p><span><?php echo $lang['website'] ?>:</span> <a href="#">rojagaar.in</a></p>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-12 order-md-last d-flex">

        <form action="#" method="POST" class="bg-white p-5 contact-form">
          <div class="form-group">
            <h5 class="text text-center text-success"><?= $msg; ?></h5>
            <h2 class="text-center"><?php echo $lang['contactus'] ?></h2>
            <input type="text" class="form-control" name="name" placeholder="<?php echo $lang['fullname'] ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="<?php echo $lang['email'] ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="<?php echo $lang['subject'] ?>">
          </div>
          <div class="form-group">
            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="<?php echo $lang['msg'] ?>"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="<?php echo $lang['sendmsg'] ?>" name="submit" class="btn btn-primary py-3 px-5">
          </div>
        </form>

      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>




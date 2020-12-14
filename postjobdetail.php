<?php
include('connect.php');
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rojagaar Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
 <body>
    <?php $_SESSION['currentPage'] = 'postjobdetail'; ?>
  <?php include 'header.php'; ?>
  <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="dashboard.php"><?php echo $lang['home'] ?>     <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['job'] ?></span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['appliedjobs'] ?>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading"><?php echo $lang['recentlyadd'] ?></span>
            <h2 class="mb-4"><span><?php echo $lang['postedjob'] ?></span></h2>
          </div>
        </div>
        <div class="row">
                <?php
                if(isset($_SESSION["msg"])) {
                ?>
                <div class="text text-center text-success"><?php  echo $_SESSION["msg"]; ?></div>
                <?php
                unset($_SESSION["msg"]);
                }
                ?>
          <?php foreach($arrResult as $record): ?>
          <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 col-md-10">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3"><?= $record['jobkey'] ?></h2>
                  <span><?= $record['jobdate'] ?></span>
                </div>
                <BR>
                <div class="job-post-item-body d-block d-md-flex">
      <!--             <div class="col-4 pl-0"> <label><?php echo $lang['jobdesc'] ?>:</label><sp style="color: black"an><?= $record['jobdesc'] ?></span></div> -->



                  <div class="col-3 pl-0"> <label><?php echo $lang['jobby'] ?>:&nbsp;</label><span style="color: black"><?= $record['jobby'] ?></span></div>
                   <div class="col-3 pl-0"> <label><?php echo $lang['mobileno'] ?>:&nbsp;&nbsp;</label><span  style="color: black"><?= $record['mob'] ?></span></div>
                   <div class="col-5 pl-0"> <label ><?php echo $lang['jobadd'] ?>:&nbsp;</label><span style="color: black"><?= $record['jobvillage'] ?>,<?= $record['jobtaluka'] ?>,<?= $record['jobdistrict'] ?>,<?= $record['jobstate'] ?></span></div>
                </div>
              </div>

              <div class="ml-auto d-flex col-md-1.5">
                <a href="apply.php?jobkey=<?= $record['jobkey']  ?>" class="btn btn-primary py-2 mr-1"><?php echo $lang['response'] ?></a>
                <a href="deletejob.php?job_id=<?= $record['job_id']  ?>" title="Delete job" class="delete btn btn-danger  py-2 mr-1 btn-sm fa fa-trash-alt" ></a>
               <!--  <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                  <span class="icon-heart"></span>
                </a> -->
              </div>
            </div>
          </div><!-- end -->

          <?php endforeach; ?>

        </div>

      </div>
    </section>

<?php include 'footer.php'; ?>
</body>
</html>

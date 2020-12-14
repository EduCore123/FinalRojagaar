<?php
session_start()
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Rojagaar Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
  <?php $_SESSION['currentPage'] = 'postjob'; ?>
    <?php include'header.php'; ?>
    <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="dashboard.php"><?php echo $lang['home'] ?> <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['postjob'] ?></span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['postjob'] ?></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12">

           <form method="POST" action="insert.php" class="p-5 bg-white">
               <?php
                if(isset($_SESSION["message"])) {
                ?>
                <div class="text text-center text-success"><?php  echo $_SESSION["message"]; ?></div>
                <?php
                unset($_SESSION["message"]);
                }
                ?>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <h5 class="text text-center text-success"><?= $msg; ?></h5>
                  <label class="font-weight-bold" ><?php echo $lang['jobtitle'] ?></label>
                   <div class="select-wrap">

                                 <select name="select" id="" class="form-control">
                                    <option value="<?php echo $lang['s1'] ?>"><?php echo $lang['s1'] ?></option>
                                    <option value="<?php echo $lang['s2'] ?>"><?php echo $lang['s2'] ?></option>
                                    <option value="<?php echo $lang['s3'] ?>"><?php echo $lang['s3'] ?></option>
                                    <option value="<?php echo $lang['s4'] ?>"><?php echo $lang['s4'] ?></option>
                                    <option value="<?php echo $lang['s5'] ?>"><?php echo $lang['s5'] ?></option>
                                    <option value="<?php echo $lang['s5'] ?>"><?php echo $lang['other'] ?></option>
                                  </select>
                                </div>

                </div>
              </div>

               <div class="row form-group ">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" ><?php echo $lang['village'] ?></label>
                  <input type="text" id="jobvillage" name="jobvillage"  class="form-control" placeholder=" " required="">
                   <span class="error text-danger"><?php echo $jobvillageErr; ?></span>
                </div>
              </div>
               <div class="row form-group ">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" ><?php echo $lang['taluka'] ?></label>
                  <input type="text" id="jobtaluka" name="jobtaluka"  class="form-control" placeholder=" " required="">
                   <span class="error text-danger"><?php echo $jobtalukaErr; ?></span>
                </div>
              </div>
               <div class="row form-group ">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" ><?php echo $lang['district'] ?></label>
                  <input type="text" id="jobdistrict" name="jobdistrict"  class="form-control" placeholder=" " required="">
                   <span class="error text-danger"><?php echo $jobdistrictErr; ?></span>
                </div>
              </div>
               <div class="row form-group ">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['state'] ?></label>
                  <input type="text" id="jobstate" name="jobstate"  class="form-control" placeholder=" " required="">
                   <span class="error text-danger"><?php echo $jobstateErr; ?></span>
                </div>
              </div>

             <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['mobno'] ?></label>
                  <input type="text" id="mob"  maxlength="10"  name="mob" class="form-control" placeholder="" required="">
                   <span class="error text-danger"><?php echo $mobErr; ?></span>

                </div>
              </div>

              <div class="row form-group ">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['postby'] ?></label>
                  <input type="text" id="jobby" value="<?php echo $_SESSION['username'];?>" name="jobby"  class="form-control" placeholder=" " readonly>
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="fullname"><?php echo $lang['jobdes'] ?></label>
                  <textarea name="jobdesc" class="form-control" id="jobdesc" cols="30" rows="5" required=""></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="<?php echo $lang['post'] ?>" name="submit" class="btn btn-primary  py-2 px-5">
                    <input type="reset" value="<?php echo $lang['reset'] ?>" class="btn btn-primary  py-2 px-5">
                </div>
              </div>
</form>
</div>
</div>
</div></div>
  <?php include'footer.php'; ?>
  </body>
  </html>

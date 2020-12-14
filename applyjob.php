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
        <?php $_SESSION['currentPage'] = 'applyjob'; ?>
     <?php include'header.php'; ?>
      <?php include'ajob.php'; ?>
    <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="dashboard.php"><?php echo $lang['home'] ?> <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['jobapplication'] ?> </span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['jobapplication'] ?></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

           <form method="POST" enctype="multipart/form-data" action="#" class="p-5 bg-white">
            <h5 class="text text-center text-success"><?= $msg; ?></h5>
             <div class="row form-group mb-4"  >
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="skills"><?php echo $lang['skills'] ?></label>
                  <input type="text" id="skills" name="skills" value="<?php echo $_SESSION['skills'];?>" class="form-control" placeholder="<?php echo $lang['skills'] ?>" required>
                </div>
              </div>
               <div class="form-group">
        <label  class="font-weight-bold" for="gender"><?php echo $lang['requirement'] ?>:</label>
       <div class="form-check">
     
        <label class="form-check-label" for="radio1"  >
        <input type="radio" class="form-check-input" id="radio1" name="opt" value="individual" checked><?php echo $lang['individual'] ?>
      </label>
      </div>
      <div class="form-check">
        <label class="form-check-label" for="radio2" >
        <input type="radio" class="form-check-input" id="radio2" name="opt" value="group"><?php echo $lang['group'] ?>
        </label>
          </div>
    
           

            <div class="row form-group mb-4" >
                <div class="col-md-4 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="avlfrm"><?php echo $lang['nom'] ?></label>
                  <input type="number" id="nom" name="nom" value="<?php echo $_SESSION['nom'];?>" class="form-control" placeholder="<?php echo $lang['nom'] ?>" onchange="sum()" required>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="till"><?php echo $lang['nof'] ?></label>
                  <input type="number" id="nof" name="nof" value="<?php echo $_SESSION['nof'];?>" class="form-control" placeholder="<?php echo $lang['nof'] ?>" onchange="sum()" required>
                </div>
                 <div class="col-md-4 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="total"><?php echo $lang['total'] ?></label>
                  <input type="number" id="total" name="total" class="form-control" placeholder="<?php echo $lang['total'] ?>" required>
                </div>
               
              </div>
</div>


               <div class="row form-group mb-4" >
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="avlfrm"><?php echo $lang['avlfrm'] ?></label>
                  <input type="date" id="avlfrm" name="avlfrm" value="<?php echo $_SESSION['avlfrm'];?>" class="form-control" placeholder="<?php echo $lang['avlfrm'] ?>" required>
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="till"><?php echo $lang['till'] ?></label>
                  <input type="date" id="till" name="till" value="<?php echo $_SESSION['till'];?>" class="form-control" placeholder="<?php echo $lang['till'] ?>" required>
                </div>
              </div>



              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['yourname'] ?></label>
                  <input type="text" id="name" name="name" value="<?php echo $_SESSION['Firstname'];?> <?php echo $_SESSION['lastname'];?>" class="form-control" placeholder="<?php echo $lang['fullname'] ?>">
                    <span class="error text-danger"><?php echo $nameErr; ?></span>
                </div>
              </div>

               <div class="row form-group mb-4" >
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="village"><?php echo $lang['village'] ?></label>
                  <input type="text" id="village" name="village" value="<?php echo $_SESSION['village'];?>" class="form-control" placeholder="<?php echo $lang['village'] ?>">
                </div>
              </div>

 <div class="row form-group mb-4"  >
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['taluka'] ?></label>
                  <input type="text" id="taluka" name="taluka" value="<?php echo $_SESSION['taluka'];?>" class="form-control" placeholder="<?php echo $lang['taluka'] ?>">
                </div>
              </div>

 <div class="row form-group mb-4" >
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="district"><?php echo $lang['district'] ?></label>
                  <input type="text" id="district" name="district" value="<?php echo $_SESSION['district'];?>" class="form-control" placeholder="<?php echo $lang['district'] ?>">
                </div>
              </div>

 <div class="row form-group mb-4" >
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="state"><?php echo $lang['state'] ?></label>
                  <input type="text" id="state" name="state" value="<?php echo $_SESSION['state'];?>" class="form-control" placeholder="<?php echo $lang['state'] ?>">
                </div>
              </div>


                   <div class="row form-group mb-4" >
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="job"><?php echo $lang['jobname'] ?></label>
                 <input type="text" id="job" name="job"  class="form-control" value="<?php echo $_GET['jobkey'] ?>" readonly>
                </div>
              </div>

                <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['email'] ?></label>
                  <input type="email" id="email" name="email" class="form-control" value="<?php echo $_SESSION['email'];?>" placeholder="<?php echo $lang['youremail'] ?>">
                    <span class="error text-danger"><?php echo $emailErr; ?></span>
                <input type="text" id="job_id" name="job_id" hidden="true" class="form-control" value="<?php echo $_GET['job_id'] ?>">
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['mobileno'] ?></label>
                  <input type="text" id="phn" name="phn" class="form-control" value="<?php echo $_SESSION['mobile'];?>" placeholder="<?php echo $lang['phone'] ?>">
                   <span class="error text-danger"><?php echo $phnErr; ?></span>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="<?php echo $lang['submit'] ?>" name="submit" class="btn btn-primary  py-2 px-5">
                    <input type="reset" value="<?php echo $lang['reset'] ?>" class="btn btn-primary  py-2 px-5">
                </div>
              </div>
              <div>
                <br>
                 <a href="jobs.php"><?php echo $lang['backjob'] ?></a> </p>
              </div>
</form>
</div>
</div>
</div></div>
  <?php include'footer.php'; ?>
  </body>
  </html>
   <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        function sum() {
            var txtFirstNo = document.getElementById('nom').value;
            var txtSecondNo = document.getElementById('nof').value;
            var result = parseInt(txtFirstNo) + parseInt(txtSecondNo);
            if (!isNaN(result)) {
                document.getElementById('total').value = result;
            }
        }
    </script>

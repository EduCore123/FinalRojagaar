<?php
session_start();
require_once("connect.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Rojagaar Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <input type="text" name="gender" value="<?= $_SESSION['gender'] ?>" hidden>
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

 <div class="form-group" name="groupselection">
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
  <div class="col-md-12 mb-3 mb-md-0">

                </div>

                <div class="col-md-4 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="avlfrm"><?php echo $lang['nom'] ?></label>
                  <input type="number" id="nom" name="nom" class="form-control" placeholder="<?php echo $lang['nom'] ?>" onchange="sum()" value="<?=(($_SESSION['gender'] == 'male') ? '1' : '0') ?>" disabled required>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="till"><?php echo $lang['nof'] ?></label>
                  <input type="number" id="nof" name="nof" class="form-control" placeholder="<?php echo $lang['nof'] ?>" onchange="sum()" value="<?= (($_SESSION['gender'] == 'female') ? '1' : '0') ?>" disabled required>
                </div>
                 <div class="col-md-4 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="total"><?php echo $lang['total'] ?></label>
                  <input type="text" id="total" name="total"  value="1" class="form-control" disabled placeholder="<?php echo $lang['total'] ?>">
                </div>
              </div>



               <div class="row form-group mb-4" >
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="avlfrm"><?php echo $lang['rqdfrm'] ?></label>
                  <input type="date" id="rqdfrm" name="rqdfrm" value="<?php echo $_SESSION['rqdfrm'];?>" class="form-control" placeholder="<?php echo $lang['rqdfrm'] ?>">
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="till"><?php echo $lang['till'] ?></label>
                  <input type="date" id="till" name="till" value="<?php echo $_SESSION['till'];?>" class="form-control" placeholder="<?php echo $lang['till'] ?>">
                </div>
              </div>

                <div class="row form-group ">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"><?php echo $lang['state'] ?></label>
                   <select onChange="getdistrict(this.value);"   id="state" name="jobstate"  class="form-control" >
                    <option value="">select</option>
                                  <?php $query =mysqli_query($conn,"SELECT * FROM state");
                             while($row=mysqli_fetch_array($query))
                          { ?>
                      <option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
                            <?php
                            }
                            ?>
                    </select>
                   <span class="error text-danger"><?php echo $jobstateErr; ?></span>
                </div>
              </div>

              <div class="row form-group ">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" ><?php echo $lang['district'] ?></label>

                  <select  name="jobdistrict" id="district-list" class="form-control">
                  <option value="">Select</option>
                  </select>
                   <span class="error text-danger"><?php echo $jobdistrictErr; ?></span>
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
                  <label class="font-weight-bold" ><?php echo $lang['village'] ?></label>
                  <input type="text" id="jobvillage" name="jobvillage"  class="form-control" placeholder=" " required="">
                   <span class="error text-danger"><?php echo $jobvillageErr; ?></span>
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

        $('body').on('change', 'input[type="radio"][name="opt"]', function () {
          let selectedOption = $('input[type="radio"][name="opt"]:checked').val();
          if(selectedOption == 'individual') {

            if($("input[name='gender']").prop('value') == 'male') {
              $("input#nom").prop("value", 1);
              $("input#nof").prop("value", 0);

            } else {
              $("input#nof").prop("value", 1);
              $("input#nom").prop("value", 0);
            }

            $("input#total").prop("value", 1);
            $("input#nom").prop("disabled", true);
            $("input#nof").prop("disabled", true);
          } else {
            $("input#nom").prop("value", 0);
            $("input#nof").prop("value", 0);
            $("input#total").prop("value", 0);
            $("input#nom").prop("disabled", false);
            $("input#nof").prop("disabled", false);
          }
        });
        $('form').submit(function(e) {
            $('input[disabled]').each(function(e) {
                $(this).removeAttr('disabled');
            })
        });

    </script>

      <script>
function getdistrict(val) {
  $.ajax({
  type: "POST",
  url: "dropdown.php",
  data:'state_id='+val,
  success: function(data){
    $("#district-list").html(data);
  }
  });
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>

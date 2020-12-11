<?php
session_start();
  if(!empty($_POST["forgot-password"])){
     include('connect.php');
    $condition = "";
    if(!empty($_POST["user-login-name"]))
      $condition = " username = '" . $_POST["user-login-name"] . "'";
    if(!empty($_POST["user-email"])) {
      if(!empty($condition)) {
        $condition = " and ";
      }
      $condition = " email = '" . $_POST["user-email"] . "'";
    }

    if(!empty($condition)) {
      $condition = " where " . $condition;
    }

    $sql = "Select * from register" . $condition;
    $result = mysqli_query($conn,$sql);
    $User = mysqli_fetch_array($result);

    if(!empty($User)) {
      require_once("forgot-password-recovery-mail.php");
    } else {
      $error_message = 'No User Found';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rojagaar Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>

  <?php include 'header.php'; ?>
  <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">

        <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="main.php"><?php echo $lang['home'] ?> <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $lang['login'] ?></span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['forgot'] ?></h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Content -->
  <section>
    <div class="ftco-section contact-section bg-light">
      <div class="container">
        <h2><?php echo $lang['forgot'] ?></h2>
       <?php if(!empty($success_message)) { ?>
  <div  class="text text-center text-success"><?php echo $success_message; ?></div>
  <?php } ?>

  <div  class="text text-center text-danger" id="validation-message">
    <?php if(!empty($error_message)) { ?>
  <?php echo $error_message; ?>
  <?php } ?>
  </div>

       <form name="frmForgot" id="frmForgot" method="post" action="#" onSubmit="return validate_forgot();">
          <div class="form-group">
            <label for="username"><?php echo $lang['username'] ?>:</label>
           <input type="text"   class="form-control"name="user-login-name" id="user-login-name" method="post" onSubmit="return validate_forgot();">
          </div>
          <div class="form-group">
            <label for="email"><?php echo $lang['email'] ?>:</label>
           <input type="text"  class="form-control" name="user-email" id="user-email" method="post" onSubmit="return validate_forgot();">
          </div>

         <input type="submit" name="forgot-password" id="forgot-password" value="<?php echo $lang['submit'] ?>"  class="btn btn-primary">
          <button type="reset" class="btn btn-primary"><?php echo $lang['reset'] ?></button>
          <br>
          <br>
          <a href="index.php"><?php echo $lang['backlog'] ?></a> </p>
        </form>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
 <script>
function validate_forgot() {
  if((document.getElementById("user-login-name").value == "") && (document.getElementById("user-email").value == "")) {
    document.getElementById("validation-message").innerHTML = "Login name or Email is required!"
    return false;
  }
  return true
}
</script>
</body>

</html>

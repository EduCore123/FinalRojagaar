<?php 
session_start();
     include('connect.php');

  if (isset($_POST['submit'])) {
      
        $username = $_POST['username'];
        $oldpassword = md5($_POST['opwd']);
        $newpassword = md5($_POST['npwd']);
        $confirmpassword = md5($_POST['cpwd']);
        
        //check pass against db
        
        
        $sql= mysqli_query($conn,"SELECT password FROM register where password='$oldpassword' && username='$username'");
    
    $num = mysqli_fetch_array($sql); 
  if ($num > 0) {
    $conn = mysqli_query($conn, "update register set password='$newpassword' where username='$username'");
    $msg1= "Password Changed Successfully !!";
  } else {
    $msg1 = "Old Password not match !!";
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
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['resetpassword'] ?></h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Content -->
  <section>
    <div class="ftco-section contact-section bg-light">
      <div class="container">
        <h2><?php echo $lang['changepassword'] ?></h2>
         <h5 class="text text-center text-success"><?= $msg1; ?></h5>
        <form name="chngpwd" action="#" method="post" onSubmit="return valid();">
          <div class="form-group">
            <label for="username"><?php echo $lang['username'] ?>:</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="form-group">
            <label for="pwd"><?php echo $lang['opassword'] ?>:</label>
            <input type="password" class="form-control" id="opwd"  name="opwd">
          </div>
          <div class="form-group">
            <label for="pwd"><?php echo $lang['npassword'] ?>:</label>
            <input type="password" class="form-control" id="npwd"  name="npwd">
          </div>
          <div class="form-group">
            <label for="pwd"><?php echo $lang['cpassword'] ?>:</label>
            <input type="password" class="form-control" id="cpwd" name="cpwd">
          </div>
          <div class="form-group form-check">

         </div>
          <input type="submit" name="submit" class="btn btn-primary" value="<?php echo $lang['changepassword'] ?>">
          <button type="reset" class="btn btn-primary"><?php echo $lang['reset'] ?></button>
          <br>
          <br>
          <a href="index.php"><?php echo $lang['backprofile'] ?></a> </p>
        </form>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
  <script type="text/javascript">
    function valid() {
      if (document.chngpwd.opwd.value == "") {
        alert("Old Password Filed is Empty !!");
        document.chngpwd.opwd.focus();
        return false;
      } else if (document.chngpwd.npwd.value == "") {
        alert("New Password Filed is Empty !!");
        document.chngpwd.npwd.focus();
        return false;
      } else if (document.chngpwd.cpwd.value == "") {
        alert("Confirm Password Filed is Empty !!");
        document.chngpwd.cpwd.focus();
        return false;
      } else if (document.chngpwd.npwd.value != document.chngpwd.cpwd.value) {
        alert("Password and Confirm Password Field do not match  !!");
        document.chngpwd.cpwd.focus();
        return false;
      }
      return true;
    }
  </script>
</body>

</html>
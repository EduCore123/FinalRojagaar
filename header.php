<?php
error_reporting(0);
session_start();
include"config.php";
?>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
       <img src="assets/images/Farms/logo.jpg" alt="logo" width="47" height="60">&nbsp;&nbsp;
           <a class="navbar-brand" href="index.php"><span><?php echo $lang['title'] ?></a></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">

   <?php if ( !$_SESSION['logged_in']) : ?>
                <li class="nav-item"><a href="index.php" class="nav-link"> <?php echo $lang['login'] ?>  </a></li>
            <li class="nav-item"><a href="about.php" class="nav-link"> <?php echo $lang['about'] ?>  </a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link"> <?php echo $lang['contact'] ?></a></li>

            <?php endif; ?>



            <?php if ( $_SESSION['logged_in']) : ?>

                 <li class="nav-item "><a href="dashboard.php" class="nav-link"> <?php echo $lang['home'] ?></a></li>
            <li class="nav-item"><a href="about.php" class="nav-link"> <?php echo $lang['about'] ?>  </a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link"> <?php echo $lang['contact'] ?></a></li>
            <li class="nav-item cta mr-md-2"><a href="jobs.php" class="nav-link"> <?php echo $lang['wantjob'] ?>  </a></li>

            <li class="nav-item cta mr-md-2"><a href="postjob.php" class="nav-link"> <?php echo $lang['postjob'] ?>  </a></li>

                <li class="nav-item cta mr-md-2"><a href="jobs1.php" class="nav-link"> <?php echo $lang['appliedjobs'] ?>  </a></li>

            <li class="nav-item cta mr-md-2"><a href="profile.php" class="nav-link"><?php echo $_SESSION['Firstname'];?>
                </a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link"><?php echo $lang['logout'] ?>  </a></li>
            <?php endif; ?>
          <div>
          <a href="<?= $_SESSION['currentPage']?>.php?lang=en" class="<?= $_SESSION['lang'] == 'en' ? 'active-menu' : '' ?>">English</a>
            |
          <a href="<?= $_SESSION['currentPage']?>.php?lang=mar" class="<?= $_SESSION['lang'] == 'mar' ? 'active-menu' : '' ?>">मराठी</a>
          |
            <a href="<?= $_SESSION['currentPage']?>.php?lang=hindi" class="<?= $_SESSION['lang'] == 'hindi' ? 'active-menu' : '' ?>">
हिंदी</a>
          <br>
    </div>
 </ul>

        </div>
      </div>

    </nav>


<style>
  .active-menu {
    color: orange;
  }
</style>

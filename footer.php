<?php include 'references.php';  ?>
<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?php echo $lang['about'] ?></h2>
              <p><?php echo $lang['aboutfooter'] ?></p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?php echo $lang['employers'] ?></h2>
              <ul class="list-unstyled">

                <li><a href="register.php" class="py-2 d-block"><?php echo $lang['register'] ?></a></li>

                 <?php if ($_SESSION['type'] == "admin") : ?>
                <li><a href="postjob.php" class="py-2 d-block"><?php echo $lang['postjob'] ?></a></li>
                 <?php endif; ?>
                <li><a href="blog1.php" class="py-2 d-block"><?php echo $lang['blog'] ?></a></li>
                <li><a href="questions.php" class="py-2 d-block"><?php echo $lang['faq'] ?></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2"><?php echo $lang['workers'] ?></h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block"><?php echo $lang['hiw'] ?></a></li>

                <li><a href="home.php"  class="py-2 d-block"><?php echo $lang['jobsearch'] ?></a></li>
                <li><a href="home.php" class="py-2 d-block"><?php echo $lang['es'] ?></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><?php echo $lang['hq'] ?></h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $lang['add1'] ?></span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo $lang['contact1'] ?></span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@rojagaar.in </span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Designed And Developed By Educore Infotech 2020</p>
          </div>
        </div>
      </div>
    </footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


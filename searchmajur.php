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
      <?php $_SESSION['currentPage'] = 'home'; ?>
    <?php include'header.php';?>
   <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/Farms/F2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true"> <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true"> <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
            <br>
    <p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['tagline2'] ?></p>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lang['tagline'] ?> </h1>
            <h1  data-scrollax="properties: { translateY: '30%', opacity: 1.8 }"><?php echo $lang['tagline1'] ?></h1>

            <div class="ftco-search">
              <div class="row">
                <div class="col-md-12 nav-link-wrap">
                  <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><?php echo $lang['find2'] ?></a>

                 
                  </div>
                </div>
                <div class="col-md-12 tab-wrap">

                  <div class="tab-content p-4" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                      <form method="post" class="search-job" action="search.php">
                        <div class="row">

                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="search" id="" class="form-control">
                                   <option value="<?php echo $lang['s1'] ?>"><?php echo $lang['s1'] ?></option>
                                    <option value="<?php echo $lang['s2'] ?>"><?php echo $lang['s2'] ?></option>
                                    <option value="<?php echo $lang['s3'] ?>"><?php echo $lang['s3'] ?></option>
                                    <option value="<?php echo $lang['s4'] ?>"><?php echo $lang['s4'] ?></option>
                                    <option value="<?php echo $lang['s5'] ?>"><?php echo $lang['s5'] ?></option>
                                     <option value="<?php echo $lang['other'] ?>"><?php echo $lang['other'] ?></option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
                                <input type="text" name="location" class="form-control" value="" placeholder="<?php echo $lang['location'] ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <input type="submit" name="submit" value="<?php echo $lang['search'] ?>" class="form-control btn btn-primary">
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                      <form action="search1.php" method="post" class="search-job">
                        <div class="row">

                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="search1" id="" class="form-control">
                                    <option value="<?php echo $lang['s1'] ?>"><?php echo $lang['s1'] ?></option>
                                    <option value="<?php echo $lang['s2'] ?>"><?php echo $lang['s2'] ?></option>
                                    <option value="<?php echo $lang['s3'] ?>"><?php echo $lang['s3'] ?></option>
                                    <option value="<?php echo $lang['s4'] ?>"><?php echo $lang['s4'] ?></option>
                                    <option value="<?php echo $lang['s5'] ?>"><?php echo $lang['s5'] ?></option>
                                     <option value="<?php echo $lang['other'] ?>"><?php echo $lang['other'] ?></option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-map-marker"></span></div>
                                <input type="text" class="form-control" name="location1"  value="" placeholder="<?php echo $lang['location'] ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <input type="submit" name="submit1" value="<?php echo $lang['search'] ?>" class="form-control btn btn-primary">
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
</div>
 </div>
</div>
 <?php include'footer.php' ?>
</body>
    </html>

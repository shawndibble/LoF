<?php
  $page = 'Options';
  $pageDescription = '';

  //Check what info we have already
  $name     = isset($_POST['pack']) ? $_POST['pack'] : '';
  $name     = isset($_POST['name']) ? $_POST['name'] : '';
  $email    = isset($_POST['email']) ? $_POST['email'] : '';
  $phone   = isset($_POST['phone']) ? $_POST['phone'] : '';
  $subject  = isset($_POST['location']) ? $_POST['location'] : '';
  $comments = isset($_POST['start']) ? $_POST['start'] : '';
  $verify   = isset($_POST['end']) ? $_POST['end'] : '';

  require('header.php');
?>

<section id="page-header" class="section background">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>OPTIONS</h3>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="section clearfix">
    <div class="container">
        <div class="row">
            <div id="fullwidth" class="col-sm-12">
                <div class="row">
                  <div class="col-md-9 col-sm-9 col-xs-12" id="content">

                    <!-- START CONTENT -->
                    <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="post-wrapper clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="hotel-single.html"><img src="upload/hotel_01.png" alt="" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="hotel-single.html" title="">VALLE AURINA</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$500</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                            </div><!-- end hotel-wrapper -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="post-wrapper clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="hotel-single.html"><img src="upload/hotel_02.png" alt="" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="hotel-single.html" title="">PRINCIPE FORTE DEI</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$225</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                            </div><!-- end hotel-wrapper -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="post-wrapper clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="hotel-single.html"><img src="upload/hotel_03.png" alt="" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="hotel-single.html" title="">VOGLAUER QUADRO</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$225</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                            </div><!-- end hotel-wrapper -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="post-wrapper clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="hotel-single.html"><img src="upload/hotel_04.png" alt="" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="hotel-single.html" title="">HOTEL DELUXE AURINA</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$980</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                            </div><!-- end hotel-wrapper -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="post-wrapper clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="hotel-single.html"><img src="upload/hotel_05.png" alt="" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="hotel-single.html" title="">PRINCIPE HOTEL DA</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$225</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                            </div><!-- end hotel-wrapper -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="post-wrapper clearfix">
                            <div class="hotel-wrapper">
                                <div class="post-media">
                                    <a href="hotel-single.html"><img src="upload/hotel_06.png" alt="" class="img-responsive"></a>
                                </div><!-- end media -->
                                <div class="post-title clearfix">
                                    <div class="pull-left">
                                        <h5><a href="hotel-single.html" title="">SAMANDARO QUADRO</a></h5>
                                    </div><!-- end left -->
                                    <div class="pull-right">
                                        <h6>$225</h6>
                                    </div><!-- end left -->
                                </div><!-- end title -->
                            </div><!-- end hotel-wrapper -->
                        </div><!-- end post-wrapper -->
                    </div><!-- end col -->


                  </div><!-- end row -->
                </div>
              <!-- END CONTENT -->
              <div id="sidebar" class="col-md-3 col-sm-3 col-xs-12">
                  <div class="widget clearfix">
                      <div class="widget-title">
                          <h3>CUSTOM PACK</h3>
                      </div><!-- end title -->
                      <div class="listwidget">
                          <ul>
                              <li><a href="#">Blog</a></li>
                              <li><a href="#">Blog Post Types</a></li>
                              <li><a href="#">Delicious</a></li>
                              <li><a href="#">Discover</a></li>
                              <li><a href="#">Drink</a></li>
                              <li><a href="#">Events</a></li>
                              <li><a href="#">Food</a></li>
                          </ul>
                      </div><!-- end listwidget -->
                  </div><!-- end widget -->
                </div>
              </div>


            </div><!-- end fullwidth -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<?php require('footer.php') ?>

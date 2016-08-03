<?php
  $page = 'Success';
  $pageDescription = '';

  require('header.php');
?>

    <section id="page-header" class="section background">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>SUCCESSFUL BOOKING</h3>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">

                    <!-- START CONTENT -->
                    <div class="row">
                        <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                            <div class="post-wrapper text-center clearfix">
                                <div class="successful">
                                    <img src="images/successful.png" alt="">
                                </div>
                                <p>Thank you very much for booking. You will be receiving a followup e-mail within next 48 hours.</p><br>
                                <a href="index.php" class="btn btn-primary btn-normal btn-lg">RETURN HOME</a>
                            </div><!-- end post-wrapper -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <!-- END CONTENT -->

                </div><!-- end fullwidth -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

<?php require('footer.php') ?>

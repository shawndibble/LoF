<?php
  $page = '404';
  $pageDescription = '';
  require('header.php');
?>

    <section id="page-header" class="section background">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="c1 breadcrumb text-left">
                    </ul>
                    <h3>404 - Not Found</h3>
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
                            <div class="post-wrapper notfound text-center clearfix">
                                <h1>404</h1>
                                <h2>OOPS! - PAGE NOT FOUND</h2>
                                <p>We’re really sorry! Something went wrong trying to display the page, Please try one of these instead</p>
                                <a href="index.php" class="btn btn-primary btn-normal btn-lg">BACK TO HOMEPAGE</a>
                            </div><!-- end post-wrapper -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <!-- END CONTENT -->

                </div><!-- end fullwidth -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

<?php require('footer.php') ?>

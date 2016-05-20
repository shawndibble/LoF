<?php
  $page = "Contact";
  $pageDescription = "";

  //BEGIN CONTACT FORM PROCESSING


  //END CONTACT FORM PROCESSING

  require('header.php');
?>
    <section id="page-header" class="section background">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Contact Us</h3>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <div class="map">
        <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d220481.1891359314!2d-97.85227835312502!3d30.293532673688627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1463680360120" height="430"></iframe>
    </div>

    <section class="section clearfix">
        <div class="container">
            <div class="row">
                <div id="fullwidth" class="col-sm-12">

                    <!-- START CONTENT -->
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <h5>Contact Info</h5>
                            <div class="contact-info">
                            <ul>
                                <li><i class="icon-phone"></i> <strong>Phone:</strong> (512) 769-0163</li>
                                <li><i class="icon-mail"></i> <strong>Email:</strong> <a href="mailto:legionoffoam@gmail.com">legionoffoam@gmail.com</a></li>
                                <li><i class="icon-link"></i> <strong>Links: </strong> <a href="#">Yelp</a> | <a href="">Facebook</a> | <a href="">Twitter</a></li>
                            </ul>
                            </div>
                        </div><!-- end col -->

                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <h5>Contact Form</h5>
                            <div id="contact_form" class="contact_form">
                                <div id="message"></div>
                                <form id="contactform" class="row" action="process-contact.php" name="contactform" method="post">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name *">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email *">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="8" placeholder="Messages goes here.."></textarea>
                                    <button type="submit" value="SEND" id="submit" class="pull-right btn btn-primary btn-lg border-radius">SUBMIT</button>
                                    </div>
                                </form>
                            </div><!-- end contact-form -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <!-- END CONTENT -->

                </div><!-- end fullwidth -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

<?php require('footer.php') ?>

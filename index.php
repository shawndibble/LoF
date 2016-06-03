<?php
  $page = 'Home';
  $pageDescription = '';

  require("header.php");

  $party = "
  <h1>Party Pack</h1>
  <ul>
    <li>20 Assorted Weapons</li>
    <li>10 Inflatable Barriers</li>
    <li>9 Inflatable X's</li>
    <li>20 Safety Glasses</li>
    <li>320 Darts</li>
    <li>1 Black (Adult) or Grey (Youth) T-Shirt</li>
    <li>20 Stickers</li>
    <li>20 Camo Helmets</li>
  </ul>
  <p></p>
  <h2>$270 &plus; $40 Deposit</h2>";

  $sample = "
    <h1>Sample Pack</h1>
    <ul>
      <li>18 Assorted Weapons</li>
      <li>10 Inflatable Barriers</li>
      <li>9 Inflatable X's</li>
      <li>18 Safety Glasses</li>
      <li>250 Darts</li>
      <li>1 Black (Adult) or Grey (Youth) T-Shirt</li>
      <li>1 Sticker</li>
    </ul>
    <p></p>
    <h2>$220 &plus; $40 Deposit</h2>";

  $relay = "
    <h1>Relay Pack</h1>
    <ul>
      <li>16 Assorted Weapons</li>
      <li>10 Inflatable Barriers</li>
      <li>9 Inflatable X's</li>
      <li>16 Safety Glasses</li>
      <li>230 Darts</li>
      <li>1 Black (Adult) or Grey (Youth) T-Shirt</li>
      <li>1 Sticker</li>
    </ul>
    <p></p>
    <h2>$210 &plus; $40 Deposit</h2>";

  $pistol = "
    <h1>Pistol Pack</h1>
    <ul>
      <li>20 Mixed Pistols</li>
      <li>10 Inflatable Barriers</li>
      <li>9 Inflatable X's</li>
      <li>20 Safety Glasses</li>
      <li>200 Darts</li>
      <li>1 Black (Adult) or Grey (Youth) T-Shirt</li>
      <li>1 Sticker</li>
    </ul>
    <p></p>
    <h2>$200 &plus; $40 Deposit</h2>";

  $water = "
    <h1>Water Pack</h1>
    <ul>
      <li>20 Assorted Water Guns</li>
      <li>10 Inflatable Barriers</li>
      <li>10 Inflatable X's</li>
    </ul>
    <p></p>
    <h2>$100 &plus; $40 Deposit</h2>";

  $custom = "
    <h1>Custom Pack</h1>
    <p>Custom Packs are built based on what weapons and items you pick on the next page.</p>
    <p>All packs can be customized, however this one will not utilize the pre-built templates.</p>
    <p></p>
    <h2>Cost Varies &plus; $40 Deposit</h2>";
?>

    <section class="section fullscreen background parallax" style="background-image:url('upload/parallax_04.jpg');" data-img-width="1920" data-img-height="1133" data-diff="100">
        <div class="container">
            <div class="row homeform">
                <div class="col-md-5 col-xs-12">
                    <div class="home-form" id="booking-form">
                      <h6>ARE YOU READY FOR A NERF<sup>&reg;</sup> FIGHT?</h6>
                      <form class="bookform form-inline row" method="post">
                          <div class="form-group btm-margin-30 col-md-12 col-sm-12 col-xs-12">
                              <div class="dropdown">
                                  <select class="selectpicker" id="pack" data-style="btn-white">
                                      <option value="party_pack">Party Pack</option>
                                      <option value="sample_pack">Sample Pack</option>
                                      <option value="relay_pack">Relay Pack</option>
                                      <option value="pistol_pack">Pistol Pack</option>
                                      <option value="water_pack">Water Pack</option>
                                      <option value="custom_pack">Custom Pack</option>
                                  </select>
                              </div>
                          </div>
                          <div class="hidden-md hidden-lg">
                              <div class="home-message pack-description">
                                <div class="party_pack"><?= $party ?></div>
                                <div class="hidden sample_pack"><?= $sample ?></div>
                                <div class="hidden relay_pack"><?= $relay ?></div>
                                <div class="hidden pistol_pack"><?= $pistol ?></div>
                                <div class="hidden water_pack"><?= $water ?></div>
                                <div class="hidden custom_pack"><?= $custom ?></div>
                              </div><!-- end homemessage -->
                          </div><!-- end col -->
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                              <input type="text" class="form-control" id="name" placeholder="Name" required="true">
                            </div>
                          </div>
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                              <input type="text" class="form-control" id="email" placeholder="Email" required="true">
                            </div>
                          </div>
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                              <input type="text" class="form-control" id="phone" placeholder="Phone">
                            </div>
                          </div>
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                              <input type="text" class="form-control" id="location" placeholder="Location" required="true">
                            </div>
                          </div>
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                              <div class="input-group">
                                  <input type="text" class="form-control datetimepicker" id="start" placeholder="Event Start" required="true">
                              </div>
                          </div>
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                              <div class="input-group">
                                  <input type="text" class="form-control datetimepicker" id="end" placeholder="Event End" required="true">
                              </div>
                          </div>
                          <div class="form-group col-md-8 col-sm-12 col-xs-12">
                              <button type="submit" class="btn btn-primary btn-block" id="home-book-button"><i class="icon-calendar"></i> BOOK NOW</button>
                          </div>
                          <div class="form-group col-md-4 col-sm-12 col-xs-12">
                              <button type="submit" class="btn btn-default btn-block" id="custom-button">CUSTOM</button>
                          </div>
                      </form>
                    </div><!-- end homeform -->
                </div><!-- end col -->

                <div class="col-md-7 col-xs-12 hidden-sm hidden-xs">
                    <div class="home-message pack-description">
                      <div class="party_pack"><?= $party ?></div>
                      <div class="hidden sample_pack"><?= $sample ?></div>
                      <div class="hidden relay_pack"><?= $relay ?></div>
                      <div class="hidden pistol_pack"><?= $pistol ?></div>
                      <div class="hidden water_pack"><?= $water ?></div>
                      <div class="hidden custom_pack"><?= $custom ?></div>
                    </div><!-- end homemessage -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix">
        <div class="container">
            <div class="hotel-title">
                <h4>Our Packs</h4>
            </div><!-- end hotel-title -->

            <div class="row">
                <div class="col-md-6">
                    <div class="mini-desti row">
                        <div class="col-sm-4">
                            <img src="upload/party-pack.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>PARTY PACK</h6>
                                </div>
                                <div class="pull-right">
                                    <h6>$270</h6>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mini-desti-desc">
                                    <p>Description of this pack to put here. Something to distinguish from the other packs.</p>
                                </div>
                                <div class="pull-right">
                                  <a href="#booking-form" data-val="party_pack" class="book-now btn btn-primary btn-sm">Book Now</a>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row">
                        <div class="col-sm-4">
                            <img src="upload/sample-pack.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>SAMPLE PACK</h6>
                                </div>
                                <div class="pull-right">
                                    <h6>$220</h6>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mini-desti-desc">
                                    <p>Description of this pack to put here. Something to distinguish from the other packs.</p>
                                </div>
                                <div class="pull-right">
                                  <a href="#booking-form" data-val="sample_pack" class="book-now btn btn-primary btn-sm">Book Now</a>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row noborder">
                        <div class="col-sm-4">
                            <img src="upload/relay-pack.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>RELAY PACK</h6>
                                </div>
                                <div class="pull-right">
                                    <h6>$210</h6>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mini-desti-desc">
                                    <p>Description of this pack to put here. Something to distinguish from the other packs.</p>
                                </div>
                                <div class="pull-right">
                                  <a href="#booking-form" data-val="relay_pack" class="book-now btn btn-primary btn-sm">Book Now</a>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="mini-desti row">
                        <div class="col-sm-4">
                            <img src="upload/pistol-pack.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>PISTOL PACK</h6>
                                </div>
                                <div class="pull-right">
                                    <h6>$200</h6>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mini-desti-desc">
                                    <p>Description of this pack to put here. Something to distinguish from the other packs.</p>
                                </div>
                                <div class="pull-right">
                                  <a href="#booking-form" data-val="pistol_pack" class="book-now btn btn-primary btn-sm">Book Now</a>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row">
                        <div class="col-sm-4">
                            <img src="upload/water-pack.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>WATER PACK</h6>
                                </div>
                                <div class="pull-right">
                                    <h6>$100</h6>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mini-desti-desc">
                                    <p>Description of this pack to put here. Something to distinguish from the other packs.</p>
                                </div>
                                <div class="pull-right">
                                  <a href="#booking-form" data-val="water_pack" class="book-now btn btn-primary btn-sm">Book Now</a>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row noborder">
                        <div class="col-sm-4">
                            <img src="upload/party-pack.jpg" alt="" class="img-responsive">
                        </div><!-- end col -->
                        <div class="col-sm-8">
                            <div class="mini-desti-title">
                                <div class="pull-left">
                                    <h6>CUSTOM PACK</h6>
                                </div>
                                <div class="pull-right">
                                    <h6>$$</h6>
                                </div>
                                <div class="clearfix"></div>
                                <div class="mini-desti-desc">
                                    <p>Description of this pack to put here. Something to distinguish from the other packs.</p>
                                </div>
                                <div class="pull-right">
                                  <a href="#booking-form" data-val="custom_pack" class="book-now btn btn-primary btn-sm">Book Now</a>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section fullscreen background parallax" style="background-image:url('upload/parallax_03.jpg');" data-img-width="1280" data-img-height="600" data-diff="10">
        <div class="container">
            <div id="testimonials">
                <div class="testi-item home-message text-center">
                    <div class="hotel-title text-center">
                        <h3>THEY GO ABOVE AND BEYOND</h3>
                        <hr>
                        <p>Our elementary school partnered with L.O.F. for our school Carnival, &amp; we could not have been more satisfied with the results. The LOF team was extremely professional, detailed, and made sure the kids had a blast, even Hook'em got involved! If you want an activity that the kids will love and is provided by a company that goes above and beyond to make it special and fun, then I recommend Legion of Foam. </p>
                        <h6>- ROBERT R. / BARRON ELEMENTARY PTO PRESIDENT -</h6>
                    </div>
                </div><!-- end testi-item -->

                <div class="testi-item home-message text-center">
                    <div class="hotel-title text-center">
                        <h3>THANKS YOU TRIPS! THIS IS AMAZING TRAVEL!</h3>
                        <hr>
                        <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo<br>
                            travel, expedia, priceline, hotels.com, travelocity, kayak, orbitz, etc. This guys can’t be wrong.<br>
                            You should definitely give it a shot :)</p>
                        <h6>- DAVID / CEO AGODA -</h6>
                    </div>
                </div><!-- end testi-item -->
            </div><!-- end testimonials -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="nopadding clearfix">
        <div class="owl-fullwidth">
            <div class="owl-item-full">
                <img src="upload/home_mini_slider_04.jpg" alt="">
            </div>
            <div class="owl-item-full">
                <img src="upload/home_mini_slider_03.jpg" alt="">
            </div>
            <div class="owl-item-full">
                <img src="upload/home_mini_slider_02.jpg" alt="">
            </div>
            <div class="owl-item-full">
                <img src="upload/home_mini_slider_01.jpg" alt="">
            </div>
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section clearfix section-bottom">
        <div class="container">
            <div class="hotel-title">
                <h3>OUR SERVICES</h3>
                <hr class="left">
            </div><!-- end hotel-title -->
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="service-style row">
                        <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                            <i class="icon-hotel16"></i>
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5>HOTEL ONLINE BOOKING SERVICE</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-style row">
                        <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                            <i class="icon-airplane51"></i>
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5>BOOK CHEAP FLIGHTS ONLINE</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div><!-- end service -->
                </div>

                <div class="col-md-6 col-sm-12">

                    <div class="service-style row">
                        <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                            <i class="icon-sedan3"></i>
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5>TAXI CAB BOOKING HOTLINES</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div><!-- end service -->

                    <div class="service-style row">
                        <div class="icon-container border-radius col-md-3 col-sm-3 col-xs-3">
                            <i class="icon-location38"></i>
                        </div>
                        <div class="col-md-9 col-xs-9 col-sm-9">
                        <h5>TOUR GUIDE &amp; PRIVATE GUIDED TOURS</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut dignissimos ea est, impedit incidunt, laboriosam maxime molestias numquam odio officiis. Ab aut dignissimos ea est, impedit incidunt.</p>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section id="call-to-action" class="section fullscreen background parallax" style="background-image:url('upload/parallax_05.jpg');" data-img-width="1921" data-img-height="665" data-diff="20">
        <div class="container">
            <div class="home-message text-center">
                <h1>CREATE AN<br>UNFORGETABLE EVENT</h1>
                <p>Some call to action text to convice the user to click the button and book.</p>
                <a href="#booking-form" class="btn btn-primary btn-lg border-radius">BOOK NOW</a>
            </div><!-- end homemessage -->
        </div><!-- end container -->
    </section><!-- end section -->

    <article class="map-section">
        <div id="map"></div>
    </article><!-- end section -->

<?php require('footer.php'); ?>

<?php
  $page = 'Home';
  $pageDescription = '';

  require("header.php");
?>

    <section class="section fullscreen background parallax" style="background-image:url('upload/parallax_04.jpg');" data-img-width="1920" data-img-height="1133" data-diff="100">
        <div class="container">
            <div class="row homeform">
                <div class="col-md-5 col-xs-12">
                    <div class="home-form" id="booking-form">
                      <h6>ARE YOU READY FOR A NERF<sup>&reg;</sup> FIGHT?</h6>
                      <form class="bookform form-inline row">
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
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Phone">
                            </div>
                          </div>
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Location">
                            </div>
                          </div>
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                              <div class="input-group">
                                  <input type="text" class="form-control datetimepicker" placeholder="Event Start">
                              </div>
                          </div>
                          <div class="form-group btm-margin-30 col-md-6 col-sm-6 col-xs-12">
                              <div class="input-group">
                                  <input type="text" class="form-control datetimepicker" placeholder="Event End">
                              </div>
                          </div>
                          <div class="form-group col-md-8 col-sm-12 col-xs-12">
                              <button type="submit" class="btn btn-primary btn-block"><i class="icon-search"></i> BOOK NOW</button>
                          </div>
                          <div class="form-group col-md-4 col-sm-12 col-xs-12">
                              <button type="submit" class="btn btn-default btn-block">CUSTOM</button>
                          </div>
                      </form>
                    </div><!-- end homeform -->
                </div><!-- end col -->

                <div class="col-md-7 col-xs-12">
                    <div class="home-message">
                      <div id="party_pack">
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
                        <h2>$270 &plus; $40 Deposit</h2>
                      </div>

                      <div class="hidden" id="sample_pack">
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
                        <h2>$220 &plus; $40 Deposit</h2>
                      </div>

                      <div class="hidden" id="relay_pack">
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
                        <h2>$210 &plus; $40 Deposit</h2>
                      </div>

                      <div class="hidden" id="pistol_pack">
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
                        <h2>$200 &plus; $40 Deposit</h2>
                      </div>

                      <div class="hidden" id="water_pack">
                        <h1>Water Pack</h1>
                        <ul>
                          <li>20 Assorted Water Guns</li>
                          <li>10 Inflatable Barriers</li>
                          <li>10 Inflatable X's</li>
                        </ul>
                        <p></p>
                        <h2>$100 &plus; $40 Deposit</h2>
                      </div>

                      <div class="hidden" id="custom_pack">
                        <h1>Custom Pack</h1>
                        <p>Custom Packs are built based on what weapons and items you pick on the next page.</p>
                        <p>All packs can be customized, however this one will not utilize the pre-built templates.</p>
                        <p></p>
                        <h2>Cost Varies &plus; $40 Deposit</h2>
                      </div>
                    </div><!-- end homemessage -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->


<!-- CLIENT SECTION
    <section class="little-padding section section-light clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
                </div><!-- end col --
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_02.png" alt="" class="img-responsive"></a>
                </div><!-- end col --
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_03.png" alt="" class="img-responsive"></a>
                </div><!-- end col --
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_04.png" alt="" class="img-responsive"></a>
                </div><!-- end col --
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
                </div><!-- end col --
                <div class="col-md-2 col-xs-6">
                    <a href="#"><img src="upload/client_02.png" alt="" class="img-responsive"></a>
                </div><!-- end col --
            </div><!-- end row --
        </div><!-- end container --
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
                            <img src="upload/mini_desti_01.jpg" alt="" class="img-responsive">
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
                                  <button href="#" id="book-party" class="btn btn-primary btn-sm">Book Now</button>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row">
                        <div class="col-sm-4">
                            <img src="upload/mini_desti_02.jpg" alt="" class="img-responsive">
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
                                  <button href="#" id="book-sample" class="btn btn-primary btn-sm">Book Now</button>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row noborder">
                        <div class="col-sm-4">
                            <img src="upload/mini_desti_03.jpg" alt="" class="img-responsive">
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
                                  <button href="#" id="book-relay" class="btn btn-primary btn-sm">Book Now</button>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="mini-desti row">
                        <div class="col-sm-4">
                            <img src="upload/mini_desti_04.jpg" alt="" class="img-responsive">
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
                                  <button href="#" id="book-pistol" class="btn btn-primary btn-sm">Book Now</button>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row">
                        <div class="col-sm-4">
                            <img src="upload/mini_desti_05.jpg" alt="" class="img-responsive">
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
                                  <button href="#" id="book-water" class="btn btn-primary btn-sm">Book Now</button>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->

                    <div class="mini-desti row noborder">
                        <div class="col-sm-4">
                            <img src="upload/mini_desti_06.jpg" alt="" class="img-responsive">
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
                                  <button href="#" id="book-custom" class="btn btn-primary btn-sm">Book Now</button>
                                </div>
                            </div><!-- end title -->
                        </div><!-- end col -->
                    </div><!-- end mini-desti -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section fullscreen background parallax" style="background-image:url('upload/parallax_03.jpg');" data-img-width="1920" data-img-height="586" data-diff="10">
        <div class="container">
            <div id="testimonials">
                <div class="testi-item">
                    <div class="hotel-title text-center">
                        <h3>THE TRIPS SAVED MY LIFE!</h3>
                        <hr>
                        <p>Template based on deep research on the most popular travel booking websites such as booking.com, tripadvisor, yahoo<br>
                            travel, expedia, priceline, hotels.com, travelocity, kayak, orbitz, etc. This guys can’t be wrong.<br>
                            You should definitely give it a shot :)</p>
                        <h6>- DAVID / CEO AGODA -</h6>
                    </div>
                </div><!-- end testi-item -->

                <div class="testi-item">
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

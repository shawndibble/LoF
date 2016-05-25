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

                          <div class="panel panel-primary">
                              <div class="panel-heading">
                                  <div class="panel-title">
                                      <a class="accordion-toggle" data-toggle="collapse" href="#collapseOne">
                                          <h3>Packs</h3>
                                      </a>
                                  </div>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse">
                                  <div class="panel-body">

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/party-pack.jpg" alt="Party Pack" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Party</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$270</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/sample-pack.jpg" alt="Sample Pack" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Sample</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$220</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/relay-pack.jpg" alt="Relay Pack" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Relay</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$210</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/pistol-pack.jpg" alt="Pistol Pack" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Pistol</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$200</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/water-pack.jpg" alt="Water Pack" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Water</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$100</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                  </div>
                              </div> <!-- end panel-collapse -->
                          </div> <!-- end panel -->

                          <div class="panel panel-primary">
                              <div class="panel-heading">
                                  <div class="panel-title">
                                      <a class="accordion-toggle" data-toggle="collapse" href="#collapseTwo">
                                          <h3>Automatic and Semi-Auto Guns</h3>
                                      </a>
                                  </div>
                              </div>
                              <div id="collapseTwo" class="panel-collapse collapse in">
                                  <div class="panel-body">

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/RhinoFire.jpg" alt="" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Rhino Fire</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$20</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Vulcan.jpg" alt="" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Vulcan</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$14</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Rapidstrike.jpg" alt="Rapidstrike" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Rapidstrike</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$12</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Stampede.jpg" alt="Stampede" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Stampede</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$11</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Swarmfire.jpg" alt="Swarmfire" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Swarmfire</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$11</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Powerbelle.jpg" alt="Powerbelle" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Powerbelle</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$11</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Rayven.jpg" alt="Rayven" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Rayven</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$10</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Hailfire.jpg" alt="Hail-Fire" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Hail-Fire</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$10</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Stryfe.jpg" alt="Stryfe" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Stryfe</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$10</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Barricade.jpg" alt="Barricade" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Barricade</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                  </div>
                              </div> <!-- end panel-collapse -->
                          </div> <!-- end panel -->

                          <div class="panel panel-primary">
                              <div class="panel-heading">
                                  <div class="panel-title">
                                      <a class="accordion-toggle" data-toggle="collapse" href="#collapseThree">
                                          <h3>Multi-pump Pistols</h3>
                                      </a>
                                  </div>
                              </div>
                              <div id="collapseThree" class="panel-collapse collapse">
                                  <div class="panel-body">

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Magstrike.png" alt="Magstrike" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Magstrike</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$10</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Rapidfire.jpg" alt="Rapidfire" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Rapidfire</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Hornet.jpg" alt="Hornet" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Hornet</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                  </div>
                              </div> <!-- end panel-collapse -->
                          </div> <!-- end panel -->

                          <div class="panel panel-primary">
                              <div class="panel-heading">
                                  <div class="panel-title">
                                      <a class="accordion-toggle" data-toggle="collapse" href="#collapseFour">
                                          <h3>Single Pump Pistols</h3>
                                      </a>
                                  </div>
                              </div>
                              <div id="collapseFour" class="panel-collapse collapse">
                                  <div class="panel-body">

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Doominator.jpg" alt="Doominator" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Doominator</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$11</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/BarrelBreak.png" alt="Barrel Break" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Barrel Break</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$10</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/flipfury.jpg" alt="Flipfury" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Flipfury</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$10</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Roughcut.jpg" alt="RoughCut" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">RoughCut</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$10</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Crossfire.jpg" alt="Crossfire" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Crossfire</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Longshot.jpg" alt="Longshot" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Longshot</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Splitstrike.jpg" alt="Splitstrike" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Splitstrike</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Recon.jpg" alt="Recon" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Recon</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Raider.jpg" alt="Raider" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Raider</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Deploy.jpg" alt="Deploy" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Deploy</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/AlphaTrooper.jpg" alt="Alpha Trooper" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Alpha Trooper</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Hyperfire.jpg" alt="Hyperfire" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Hyperfire</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Furyfire.jpg" alt="Furyfire" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Furyfire</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$8</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Hammershot.jpg" alt="Hammershot" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Hammershot</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$7</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Spectre.jpg" alt="Spectre" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Spectre</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$7</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Firefly.jpg" alt="Firefly" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Firefly</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$7</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/snapfire.jpg" alt="SnapFire" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">SnapFire</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$7</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Maverick.jpg" alt="Maverick" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Maverick</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$6</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Strongarm.jpg" alt="Strongarm" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Strongarm</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$6</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Sharpfire.jpg" alt="Sharpfire" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Sharpfire</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$6</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Spylight.jpg" alt="Spylight" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Spylight</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$6</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Doublestrike.jpg" alt="Doublestrike" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Doublestrike</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$5</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Firestrike.jpg" alt="Firestrike" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Firestrike</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$5</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/NiteFinder.jpg" alt="Nite Finder" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Nite Finder</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$5</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Element.jpg" alt="Element" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Element</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$5</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/switchshot.jpg" alt="Switch Shot" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Switch Shot</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$5</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Sidestrike.jpg" alt="Sidestrike" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Sidestrike</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$5</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Scout.jpg" alt="Scout" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Scout</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$5</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/SharpShot.jpg" alt="Sharp Shot" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Sharp Shot</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$5</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Stormfire.JPG" alt="Stormfire" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Stormfire</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$5</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/TechTarget.jpg" alt="Tech Target" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Tech Target</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$5</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Strikefire.jpg" alt="Strikefire" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Strikefire</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$4</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Reflex.jpg" alt="Reflex" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Reflex</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$3</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Triad.jpg" alt="Triad" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Triad</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$3</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/SneakAttacker.jpg" alt="Sneak Attacker" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Sneak Attacker</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$3</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/jolt.jpg" alt="Jolt" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Jolt</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$2</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                  </div>
                              </div> <!-- end panel-collapse -->
                          </div> <!-- end panel -->


                          <div class="panel panel-primary">
                              <div class="panel-heading">
                                  <div class="panel-title">
                                      <a class="accordion-toggle" data-toggle="collapse" href="#collapseFive">
                                          <h3>Add-ons</h3>
                                      </a>
                                  </div>
                              </div>
                              <div id="collapseFive" class="panel-collapse collapse">
                                  <div class="panel-body">

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/AdultShirt.jpg" alt="Adult Shirt" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Adult Shirt</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$20</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/YouthShirt.jpg" alt="Youth Shirt" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Youth Shirt</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$15</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Clips.JPG" alt="Clips" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Clips</h5>
                                          <div class="pull-right">
                                              <select>
                                                <option value="6">6</option>
                                                <option value="12">12</option>
                                                <option value="18">18</option>
                                              </select>
                                              <button class="btn btn-sm btn-primary"><span>Add</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Drums.jpg" alt="Drums" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Drums</h5>
                                          <div class="pull-right">
                                              <select>
                                                <option value="18">18</option>
                                                <option value="25">25</option>
                                                <option value="35">35</option>
                                              </select>
                                              <button class="btn btn-sm btn-primary"><span>Add</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/darts.jpg" alt="10 Darts" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">10 Darts</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$1.50</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Scopes.jpg" alt="Scopes" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Scopes</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$.50</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/Barriers.jpg" alt="10 Inflatibles" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">10 Inflatables</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>$50</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                      <div class="post-media">
                                        <img src="upload/glasses.jpg" alt="Eye Protection" class="img-responsive">
                                      </div><!-- end media -->
                                      <div class="post-title clearfix">
                                          <h5 class="pull-left">Eye Protection</h5>
                                          <div class="pull-right">
                                              <button class="btn btn-sm btn-primary"><span>Free</span></button>
                                          </div><!-- end left -->
                                      </div><!-- end title -->
                                    </div><!-- end col -->

                                  </div>
                              </div> <!-- end panel-collapse -->
                          </div> <!-- end panel -->

            </div><!-- end fullwidth -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<?php require('footer.php') ?>

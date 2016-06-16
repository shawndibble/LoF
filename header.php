<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?= $pageDescription ?>">
    <meta name="author" content="">

    <title><?= $page ?> | Legion of Foam</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jquery.datetimepicker.min.css" rel="stylesheet">
    <!-- Default Styles -->
    <link href="style.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link href="rs-plugin/css/settings.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="loader">
    <div class="loader-container">
        <h3 class="loader-back-text"><img src="images/loader.gif" alt="" class="loader"></h3>
    </div>
</div>

<div id="wrapper">

    <?php if($page == 'Home') { ?>
    <div class="topbar">
        <div class="container">
            <div class="pull-left">
                <ul class="topbar-drops list-inline">
                    <li><i class="icon-telephone5"></i> (512) 769-0163</li>
                    <li><i class="icon-mail"></i> legionoffoam@gmail.com</li>
                </ul><!-- end list-style -->
            </div><!-- end left -->
            <div class="pull-right">
                <ul class="topbar-social list-inline">
                    <li><a href="https://twitter.com/LegionOfFoam"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/legionoffoam"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="http://www.yelp.com/biz/legion-of-foam-pflugerville"><i class="fa fa-yelp" aria-hidden="true"></i></a></li>
                </ul><!-- end list-style -->
            </div><!-- end right -->
        </div><!-- end container -->
    </div><!-- end topbar -->

    <?php } ?>

    <header class="header <?php if($page == 'Home') { echo 'fixedheader nobg'; } ?>">
        <div class="menu-container">
            <div class="container">
                <div class="menu-wrapper">
                    <nav id="navigation" class="navbar" role="navigation">
                        <div class="navbar-inner">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="icon-menu27"></i>
                                </button>
                                <a id="brand" class="clearfix navbar-brand" href="index.html"><img src="images/wlogo.png" alt="Legion of Foam"></a>
                            </div><!-- end navbar-header -->
                            <div id="navbar-collapse" class="navbar-right navbar-collapse collapse clearfix">
                                <ul class="nav navbar-nav yamm">
                                    <li><a href="index.php" <?php if ($page == 'Home') echo "class='active'"; ?> >HOME</a></li>
                                    <li><a href="options.php" <?php if ($page == 'Options') echo "class='active'"; ?>>OPTIONS</a></li>
                                    <li><a href="faqs.php" <?php if ($page == 'FAQs') echo "class='active'"; ?>>FAQS</a></li>
                                    <li><a href="contact.php" <?php if ($page == 'Contact') echo "class='active'"; ?>>CONTACT</a></li>
                                </ul><!-- end navbar-right -->
                            </div><!-- end navbar-callopse -->
                        </div><!-- end navbar-inner -->
                    </nav><!-- end navigation -->
                </div><!-- menu wrapper -->
            </div><!-- end container -->
        </div><!-- end menu-container -->
    </header><!-- end header -->

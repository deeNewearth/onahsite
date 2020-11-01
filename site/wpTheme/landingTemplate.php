<?php /* Template Name: Landing Page Template */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_bloginfo( 'template_directory' );?>/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_bloginfo( 'template_directory' );?>/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo( 'template_directory' );?>/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_bloginfo( 'template_directory' );?>/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo( 'template_directory' );?>/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_bloginfo( 'template_directory' );?>/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_bloginfo( 'template_directory' );?>/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_bloginfo( 'template_directory' );?>/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo( 'template_directory' );?>/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_bloginfo( 'template_directory' );?>/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_bloginfo( 'template_directory' );?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_bloginfo( 'template_directory' );?>/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_bloginfo( 'template_directory' );?>/images/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_bloginfo( 'template_directory' );?>/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_bloginfo( 'template_directory' );?>/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


	<link href="<?php echo get_bloginfo( 'template_directory' );?>/dist/main.css" rel="stylesheet"/>
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"-->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

<nav class="sitenav navbar navbar-expand-xl navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerMainMenu" 
                        aria-controls="navbarTogglerMainMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerMainMenu">
    
    <a class="navbar-brand" href="#"></a>
    
    <ul class="navbar-nav mr-auto mt-2 mt-xl-0">
      <!--li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li-->
    </ul>

    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="#">ABOUT</a></li>
        <li class="nav-item"><a class="nav-link" href="#">SOLUTIONS</a></li>
        <li class="nav-item"><a class="nav-link" href="#">PARTNERS</a></li>
        <li class="nav-item"><a class="nav-link" href="#">NEWS</a></li>
        <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
    </ul>

    <!--form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form-->
  </div>
</nav>



<div class="main">
    
    <div class="top">

        <div class="row">
            <div class="rpm col-md-6">
                
                <div class=col-content>
                    <div class="info-content">
                        <div class="info-data">
                            <h2>MAKING STRIDES <br> WITH REMOTE CARE</h2>
                            <hr/>
                            <p>PVH remote patient monitoring sanctions
                            providers and the patients they care for</p>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg btnrounded">LEARN MORE ABOUT RPM</button>
                    </div>
                </div>
                
            </div>
            <div class="safety col-md-6">
                
                <div class=col-content>
                    <div class="info-content">
                        <div class="info-data">
                            <h2>LIVE SAFELY WITH <br> TRANSITIONAL CARE</h2>
                            <hr/>
                            <p>Care Co-ordination help in uplifting the quality of 
                            life, health and independence for individuals</p>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg btnrounded">LEARN MORE ABOUT SAFETY</button>
                    </div>
                </div>

                
            </div>
        </div>

        
    </div> 

    <div class="siteDescription notFullWidth"> 
            <p>
                Premier Virtual Health is a leading provider of Remote Patient Monitoring and Transitional Care
                services. We offer Virtual healthcare services for the growing elderly population by providing
                smart, innovative services to our healthcare professionals to support and sustain a healthier,
                more independent ageing population. Our aim is to work together in assisting our seniors regain
                their health and independence while streamling healthcare processes for the care providers.
            </p>
    </div>

    <div class ="row moreInfo mainSection notFullWidth">
            <div class="col-md-4 text-center">
                <h2>REMOTE CARING </h2>
                <a href="#">Remote Patient Monitoring </a><br/>
                <a href="#"> Solutions with device images</a>
            </div>
            <div class="col-md-4 text-center">
                <h2>PERSONAL SAFETY</h2>
                <a href="#">Transitional / Post Acute Care </a><br/>
                <a href="#">Care Co - ordination Overview</a>
            </div>
            <div class="col-md-4 text-center">
                <h2>FURTHER MORE </h2>
                <a href="#">Additional Resources </a><br/>
                <a href="#">Demo</a>
            </div>
    </div>


    <div class ="notFullWidth partners mainSection">
        <div class="row">
            <div class="col-md-4 linedHeader"> <p>OUR PARTNERS</p></div>
            <div class="col-md-4 color1"><p>Clients</p></div>
            <div class="col-md-4 color2"><p>Monitoring</p></div>
        </div>
        <div class="row">
            <div class="col-md-4 color3"><p>VSD</p></div>
            <div class="col-md-4 color4"><p>Logistics</p></div>
            <div class="col-md-4 color5"><p>Technology</p></div>
        </div>
    </div>


    <div class ="footer mainSection">
        <div class="contacts"></div>

        <div class="row mylinks">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <h3>ABOUT</h3>
                <ul>
                    <li>About us</li>
                    <li>Our Executive Team</li>
                    <li>Advisory Board</li>
                    <li>Premier Virtual Health Program</li>
                    <li>Contact Us</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>REMOTE CARE SOLUTIONS</h3>
                <ul>
                    <li>Solutions Overview</li>
                    <li>Remotecare</li>
                    <li>Request Demo</li>
                </ul>

                <h3>PERSONAL SAFETY</h3>
                <ul>
                    <li>Monitoring centers</li>
                    <li>Personal Safety overview</li>
                </ul>

            </div>
            <div class="col-md-7"></div>
        </div>
    </div>


    <!--div class="container_gone">
        
        

        


        <div class="row partners">
        </div>
        <div class="row">
        </div>
        <div class="stories">
            <div class="row">
                <div class="img col=md-4">
                <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/dsBuffer.png" >
                </div>
                <div class="alert col=md-4">
                    <h2>Quoted by Red Alert</h2>
                </div>
                <div class="cs col=md-4">
                    <u><h2>CUSTOMER STORIES</h2></u>
                </div>
            </div>
            <div class="data"> 
            <div class="data1">
                <p>
                    "First Alert Medical Pendant has integrated Anelto products into
our program. I am beyond pleased with the sales, service and quality
of equipment! After looking at their equipment, the decision was easy.
The best feature is that the Premier Virtual Health unit lets caregivers
leave messages and reminders...""
                </p>
            </div>
            </div>
        </div>
    </div>
    <div class="contact"></div>
    <div class="footer">
        <div class="row">
            <div class="col-md-3">
                
            </div>
            <div class="col-md-3"></div>
        </div>
    </div-->
    
</div>



  <script src="<?php echo get_bloginfo( 'template_directory' );?>/dist/main.js" ></script>

  </body>
</html>



   

	
        
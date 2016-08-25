<?php 
error_reporting(E_ALL);
include_once"confirm.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
if(!empty($_POST['name'])&&!empty($_POST['address'])&&!empty($_POST['phone'])&&!empty($_POST['email'])
&&!empty($_POST['subject'])&&!empty($_POST['message'])){
$message = wordwrap($message,70);	
	
    //send the email
mail('contact@dachisolutions.com',$_POST['subject'],$_POST['message'],"From:{$_POST['email']}");
    $_POST=array();
if(mail('contact@dachisolutions.com',$_POST['subject'],$_POST['message'],"From:{$_POST['email']}")){
header('location:index.php?msg=1#contact');
   }else{header('location:index.php?msg=2#contact');}
}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:url"           content="http://dachisolutions.com/" />
	<meta property="og:type"          content="website design" />
	<meta property="og:title"         content="Dachisolutions | Nigeria's finest website design and brand strategy company " />
	<meta property="og:description"   content="Nigeria's website design company" />
	<meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
   <link rel="shortcut icon" href="/aickondigitech/aickondigitech_img/ds-fav.ico" type="image/x-icon" />
   
    <title>Dachi Solutions | Nigeria's finest website design and brand strategy company </title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap-responsive.css">
     <!--Page CSS-->
     <link href="aickon.css" rel="stylesheet" type="text/css">
 
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
   
	<script src="bootstrap/js/holder/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
 
 
    <!-- Custom styles for this template -->
    <link href="bootstrap/css/carousel.css" rel="stylesheet">
   <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

  </head>
<!-- NAVBAR
================================================== -->
  <body style="overflow-x: hidden;">
  
 
<script>
<!--facebook like plugin code -->
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
 
 <!--Twitter plugin code -->
 <script>
 !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
 </script>      
 
    <header class="navbar" role="navigation" style="margin-bottom:18px; margin-top:-5px;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
        <a name="home"></a>
           <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#first" id="button">
                   <span class="sr-only">Toggle navigation</span>
                   <span>Menu</span>

             </button>

 <div class=" navbar-brand" id="company_logo" title="dachisolutions"><a href="#"><img src="/aickondigitech/aickondigitech_img/logodach.jpg" width="137" height="58" alt="logo"></a></div>
          </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="navbar-collapse collapse" id="first">
                <ul class="nav navbar-nav navbar-right" id="style">
                 <li><a href="#home"><span style="color:#999;">Home</span></a></li>
                 <li><a href="#about us"><span style="color:#999;">About</span></a></li>
                 <li><a href="#services"><span style="color:#999;">Services</span></a></li>
                 <li><a href="#contact"><span style="color:#999;">Contact</span></a></li>
 <li><a href="#"><img src="/aickondigitech/aickondigitech_img/phone.png" width="25" height="25" alt="">&nbsp;<span style="color:#F60; font-weight:600">+2348034772507</span></a></li>

             </ul>
          </div>
          
      </div>
 
 </header>  
    
    
  
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="aickondigitech_img/web1.png" alt="">
        
          
         <div class="container">
          <div class="carousel-caption" >
            <h1 style="text-shadow: 2px 2px #000; font-weight:600;">Website Design</h1>
     <p class="lead" style="text-shadow: 2px 2px #000; font-weight:400;">The Internet has changed the way business is done. A professionally designed website is the wing for your business to soar and a gateway to new business opportunities.</p>
<a class="btn btn-lg" href="#contact" role="button" id="button">Get In Touch</a>

              

            </div>
          </div>

        </div>
        <div class="item">
           <img src="aickondigitech_img/imgbrand.png" alt="">
             <div class="container">
            <div class="carousel-caption">
              <h1 style="text-shadow: 2px 2px #000; font-weight:600;">Creative Branding</h1>
              <p class="lead" style="text-shadow: 2px 2px #000; font-weight:400;">Creating a unique position in the market place involves the careful selection of target market and establishing clear differential advantages in the minds of customers. This is achieved through creative branding. </p>
   <a class="btn btn-lg" href="#contact" role="button" id="button">Get In Touch</a>

  
            </div>
          </div>
        </div>
        <div class="item">
    <img src="aickondigitech_img/managed.png" alt="">
                  <div class="container">
            <div class="carousel-caption">
              <h1 style="text-shadow: 2px 2px #000; font-weight:600;">Managed Services</h1>
 <p class="lead" style="text-shadow: 2px 2px #000; font-weight:400;">Technology should enable your business objectives, not limit them. Our suite of managed IT services, alongside our top-flight professional services, are tailored to the needs of evolving businesses.​​</p>
  <a class="btn btn-lg" href="#contact" role="button" id="button">Get In Touch</a>


 
            </div>
          </div>
        </div>
        
      </div>
      
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row featurette">
       <a name="services"></a>
        <p style="font-size:40px; font-weight:600; text-align:center;">The Best Quality Work and Service</p>
         </div>
     <div class="col-md-12">
       <div class="col-md-1"></div>
     <div class="col-md-10">
     <p style=" text-align:center;font-size:23px; margin-bottom:20px;">We create exceptional and brilliant websites and brands for small to mid-sized enterprises. We merge creativity and uniqueness with our technical expertise to build first-class products for you and your business</p></div>
        <div class="col-md-1"></div>


     
     </div>
      <h1 class="text-info" style="text-align:center; margin-bottom:30px; font-size:36px; font-weight:600;">What We Offer</h1>
      <div class="row">
        <div class="col-lg-4">
        
 <img class="img-circle" style="width:150px; height:150px;" src="aickondigitech_img/web_design_icon.png" alt="Generic placeholder image" width="140" height="140">
          <h3 class="text-default" style="padding-left:8px; font-weight:600; color:#108C9F;">Website Design</h3>
 <p>We create brilliant websites that are distinguished from the pack; Dynamic websites, Presentation websites, Content Management Systems, E-commerce portals,and Search Engine Optimized experiences.</p>
        </div><!--/.col-lg-4 -->
        <div class="col-lg-4">
        <img class="img-circle" style="width:150px; height:150px;" src="aickondigitech_img/branding_icon.png"  alt="Generic placeholder image" width="140" height="140">
        <h3 class="text-default" style="padding-left:8px; font-weight:600; color:#48172c;">Creative Branding & Print</h3>
          <p>We create compelling brand strategies and adorable print designs for Nigeria's finest clients. Brand Elements include: Brand thinking and Strategy, Positioning, Brand Manuals, Logos, Digital Stationary, Event Branding, etc.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
  <img class="img-circle" style="width:150px; height:150px; " src="aickondigitech_img/social.png"alt="Generic placeholder image" width="140" height="140"></span>
          <h3 class="text-default" style="padding-left:8px;font-weight:600; color:#55ACEE;">Managed Services</h3>
          <p>We provide I.T managed services; I.T user support, Website updates and management, Social media marketing, Facility management, Online business consultancy and much more.</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
       </div>

      <!-- START THE FEATURETTES -->
      <div class="container-fluid" style="background-color:#FFF; margin-top:40px;">
      
           
      <div class="row featurette">
        <div class="col-lg-12" style="background-color:#3E4095;">
          <a name="about us"></a>
         <p style="font-size:40px; font-weight:600; text-align:center; color:#FFF;text-shadow: 2px 2px #000;">Your Web Solution Providers</p>
         </div>
         <div class="col-md-1"></div>
         <div class="col-md-10">
         </div>
     <div class="col-md-12">
       <div class="col-md-1"></div>
     <div class="col-md-10">
     <p style=" text-align:center;font-size:23px; margin-top:8px;">We are an Enugu-based Website design and Media services Company. We serve clients in Enugu and the surrounding areas, including Anambra,Imo,Ebonyi,Akwa-Ibom,Abia, and Nigeria at large.</p></div>
        <div class="col-md-1"></div>
        </div>
        
        <div class="col-md-12">
        <h1 class="text-info" style="text-align:center;font-size:36px; font-weight:600;">Get To Know Us</h1>
     
      
   <div class="col-lg-1"></div>
     <div class="col-lg-10" style="margin-top:20px;">    
<p style="font-size:17px;"><span><strong> Dachi solutions</strong></span> is an experienced and passionate group of web designers, developers, brand strategists and social media experts.We have great passion for business strategy using the web and other related approach towards maximizing you and your business prospects. We are not just a name but a concept        "Dachii", which stands for creativity, innovation and uniqueness, in a street parlance.</p>
<p style="font-size:17px;">We develop a unique approach in tackling your business battles towards producing the desired result.  <br>For us it’s all about clear, usable design and using the most up-to-date web technologies to create great user experiences. </p>
<p style="font-size:17px; margin-bottom:70px;">Our customer service experience is second to non. We take pride in our prompt response to your calls and mails and we are ever ready to discuss with you on how to put you and your business on the global map.</p>
        </div>
             <div class="col-lg-1"></div>
         </div>
        
      </div>


      <div class="col-md-1"></div>
         <div class="col-md-10">
             <hr class="featurette-divider" style="display:none;"></div>
    </div>
      <div class="row featurette">
      <div class="container-fluid" style="background-color:#F8F8F8;">
        <div class="col-lg-12" style="background-color:#3E4095; margin-top:5px;">
          <a name="contact"></a>
 <p style="font-size:40px; font-weight:600; text-align:center; color:#FFF; text-shadow: 2px 2px #000;">We'd Love to Hear from You</p>
         </div>
        <div class="container-fluid" style="background-color:#F8F8F8;">

     <div class="col-md-12">
       <div class="col-md-1"></div>
       <div class="col-md-10">

     <p style=" text-align:center;font-size:23px; margin-top:8px;">We pride ourselves on swift communication and prompt responses. Let us know what you're thinking and how we can help you.</p></div>
       <div class="col-md-1"></div>


     
     </div>
        <div class="col-md-12">
      
      <h1 class="text-info" style="text-align:center;font-size:36px; font-weight:600;">Contact Us</h1>
         
         <div class="container" style="margin-top:60px;">
		<div class="row">
			<div class="col-sm-8 blog-main">
				<div class="blog-post">
					<div class="row">
						<div class="col-sm-12">
							<div class="list-group">
							  <span class="list-group-item">
				<p style="font-size:18px;">Planning a project you'd like us to discuss? Have enquires on our services? Send us an email on <a href="mailto:contact@dachisolutions.com">contact@dachisolutions.com</a> and be rest assured to get a prompt response within the shortest time frame.
			  </p>
<p style="font-size:18px;"><strong>Don't hesitate to call us on</strong> <label><small style="color:#F5822E;"> +234 (0)80 347 72507</small></label> </p>
							  </span>
							</div>
						</div>
					</div>
			<div class="row list-group-item" style="margin:0px; margin-bottom:20px;">
   
   <?php if(isset($_GET['msg'])){?><div class="alert alert-info fade in" role="alert"><?php echo $error_msg[$msg];?></div>
   <?php }?>
						<h3 style="margin-bottom:20px;">How can we help?</h3>
						<div class="col-sm-12" id="style">
							<form method="post" name="Mail_Form">
								<div class="col-sm-6" style="margin:0px;">
									<div class="form-group">
										<label for="y-name">Your Name</label>
			<input type="text" class="form-control none-rounded" name="name" placeholder="Name (Required)" required/>
									</div>
									<div class="form-group">
										<label for="e-mail">Address</label>
						<input type="text" class="form-control none-rounded" name="address" placeholder="Address" required />
									</div>
									<div class="form-group">
										<label for="e-mail">Phone Number</label>
						<input type="text" class="form-control none-rounded" name="phone" placeholder="Phone Number" required />
									</div>
									<div class="form-group">
										<label for="e-mail">Your Email Address</label>
					<input type="text" class="form-control none-rounded" name="email" placeholder="Email (Required)" required />
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="subject">Subject</label>
						<input type="text" class="form-control none-rounded" name="subject" placeholder="Subject" required />
									</div>
									<div class="form-group" style="margin-top:25px;">
										<label for="message">Enter your message</label>
		<textarea class="form-control none-rounded" rows="7" name="message" placeholder="Your Message Here" required></textarea>
									</div>
								</div>
							
								<div class="col-sm-12">
									<div class="pager pull-right">
	<button type="submit" class="btn btn-md" name="Submit" id="button">Send Message</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div><!-- /.blog-post -->
				
			</div>
			<div class="col-sm-4 blog-sidebar" id="style">
				<div class="sidebar-module sidebar-module-inset">
					<div class="list-group">
						<a class="list-group-item active" style="background-color:#3E4095;">
						<h4 class="list-group-item-heading"><b>Get In Touch With Us</b></h4>
						</a>
						<a class="list-group-item list-group-item-default">
							<address>
							  <strong>Suit 2, Ist Floor, Chidebe Plaza </strong><br>
							  By Agric Bank Bustop, Independence Layout<br>
							  Enugu, Nigeria. <br>
							  <abbr title="Phone" style="color:#F5822E;">Phone:</abbr> +234 (0)80 3477-2507<br>
							  <abbr title="Email" style="color:#F5822E;">Email:</abbr> contact@dachisolutions.com<br><br>
                              <strong>*Visits by appointments only.</strong>
							</address>
						</a>
					</div>
					<div class="list-group">
						<a class="list-group-item active" style="background-color:#3E4095;">
						<h4 class="list-group-item-heading"><b> Follow Us On Social Media</b></h4>
						</a>
						<div class="list-group-item list-group-item-default">
							<div class="pager">
							  <div class="media inner pull-left">
							    <div class="media-object innerAll">
							      <div class="media inner pull-left">
							        <div class="media-object innerAll pull-left">
	  <a href="https://facebook.com/dachisolutions1/"><img  src="aickondigitech_img/fb-icon.png" width="50"></a>
						            </div>
       <div class="media-object innerAll pull-left"> 
  <a href="https://twitter.com/dachisolutions"><img src="aickondigitech_img/tw-icon.png" width="50"></a> </div>
							    <div class="media-object innerAll pull-left">
<a href="https://plus.google.com/116742338664203207214"><img src="aickondigitech_img/gplus.png" width="50"></a>
						            </div>
						          </div>
							    </div>
							  </div>
							</div>
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        
        </div>

        
      </div>
      
      </div>
      <div class="col-md-12">
      <div class="col-md-1"></div>
       <div class="col-md-10" style="padding-top:35px;">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
     
       <footer>
 
      <div class="text-center" id="style" style="font-size:15px;">  Copyright &copy; 2016 dachisolutions.com. | All Rights Reserved. </div>
    
       </ul>
      
      </footer>
     </div>
<div class="col-md-1"></div>
</div>
   </div><!-- /.container -->
 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/holder/jquery.min.js"></script>
    <!--script>window.jQuery || document.write('<script src="bootstrap/js/holder/jquery.min.js"></script>')</script-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/holder/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html>
<script language="JavaScript">
var i = 0;
var path = new Array();
path[0] = "Images/banner.jpg";
path[1] = "Images/focus.jpg";
path[2] = "Images/innovate.jpg";

function swapImage()
{
   document.slide.src = path[i];
   if(i < path.length - 1) i++; else i = 0;
   setTimeout("swapImage()",1000);
}
window.onload=swapImage;
</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="sliderengine/jquery.js"></script><script type="text/javascript" src="sliderengine/jquery.hislider.js"></script>
<title>Project DBMS</title>
 <!--<style>
        body{ 
            text-align: center;
        }
        
        #slideshow{
            margin:0 auto;
            width:900px;
            height:280px;
            overflow: hidden;
            position: relative;
        }

        #slideshow ul{
            list-style: none;
            margin:0;
            padding:0;
            position: absolute;
			 }

        #slideshow li{
            float:left;
        }

        #slideshow a:hover{
            background: rgba(0,0,0,0.8);
            border-color: #000;
        }

        #slideshow a:active{
            background: #990;
        }

        .slideshow-prev, .slideshow-next{
            position: absolute;
            top:180px;
            font-size: 30px;
            text-decoration: none;
            color:#fff;
			 background: rgba(0,0,0,0.5);
            padding: 5px;
            z-index:2;
        }
        
        .slideshow-prev{
            left:0px;
            border-left: 3px solid #fff;
        }

         .slideshow-next{
            right:0px;
            border-right: 3px solid #fff;
        }

    </style>-->
 <script>
    function substitute() {
      //var myValue = document.getElementsByClassName("login-input");
	  //var myv=myValue[0].value;
	  //var myv2=myValue[1].value;
         //if ((myv.length == 0)||(myv2.length==0)) {
        //window.alert('Please enter the details completely!');
	     //return;
		 //}
		 var x=document.forms["myform"]["phpro_username"].value;
		 var y=document.forms["myform"]["phpro_password"].value;
	      if(x==null || x=="" || y==null || y==""){
	       alert("BOTH DETAILS ARE REQUIRED");
		   return false;
		   }else{return true;}
    }
  </script>
  <!--<script>
  var imagecount=1;
  var total=2;
  function slide(x){
    var Image = document.getElementsById("pop");
	imagecount = imagecount + x;
	if(imagecount > total){imagecount = 1;}
	if(imagecount < 1){imagecount = total;}
	Image.src = "img/img"+ imagecount + ".jpg";
  }
  window.setInterval(function slide(x){
    var Image = document.getElementsById("pop");
	imagecount = imagecount + x;
	if(imagecount > total){imagecount = 1;}
	if(imagecount < 1){imagecount = total;}
	Image.src = "img/img"+ imagecount + ".jpg";
  },5000);
  </script>-->
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'/>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body onload="alert('Hello JIIT!')">
 <div class="main-baaner">
       <!--<a href="#" class="slideshow-prev">&laquo;</a> 
       <ul>
            <li><img src="banner.jpg" alt="photo1" /></li>
            <li><img src="innovate.jpg" alt="photo2" /></li>
            <li><img src="focus.jpg" alt="photo3" /></li>
       </ul>
        <a href="#" class="slideshow-next">&raquo;</a> 

    </div>
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
    <script>

        //an image width in pixels 
        var imageWidth = 900;
    

        //DOM and all content is loaded 
        $(window).ready(function() {
            
            var currentImage = 0;

            //set image count 
            var allImages = $('#slideshow li img').length;
            
            //setup slideshow frame width
            $('#slideshow ul').width(allImages*imageWidth);

			 //attach click event to slideshow buttons
            $('.slideshow-next').click(function(){
                
                //increase image counter
                currentImage++;
                //if we are at the end let set it to 0
                if(currentImage>=allImages) currentImage = 0;
                //calcualte and set position
                setFramePosition(currentImage);

            });

            $('.slideshow-prev').click(function(){
                
                //decrease image counter
                currentImage--;
                //if we are at the end let set it to 0
                if(currentImage<0) currentImage = allImages-1;
                //calcualte and set position
                setFramePosition(currentImage);

            });
			 });

        //calculate the slideshow frame position and animate it to the new position
        function setFramePosition(pos){
            
            //calculate position
            var px = imageWidth*pos*-1;
            //set ul left position
            $('#slideshow ul').animate({
                left: px
            }, 300);
        }

    </script>-->
<div class="wrapper">
  <div class="logo-menu-container">
    <div class="logo">|| AGORAS ||</div>
    <div class="menu">
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href=#bottom>About</a></li>
        <li><a href="#">Solutions</a></li>
        <li><a href="#"><span>Services</span></a></li>
        <li><a href="index1.html">Categories</a></li>
        <li class="nobg"><a href="https://www.google.co.in/maps/place/Jaypee+Institute+of+Information+Technology">Contact</a></li>
      </ul>
    </div>
  </div>
  <div class="searchform-container">
    <div class="searchform-content">AN OPEN SPACE FOR THINKING AND DISCUSSIONS</div>
    <div class="search">
      <div class="search-input">
        <input type="text" name="search" class="search-input-textfield" />
      </div>
      <div class="search-icon"><a href="#"><img src="images/search-icon.png" alt="search" /></a></div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="page">
    <div class="main-banner"><img name="slide"  src="images/banner.jpg" width="900"  height="280" alt="banner" id="pop"/></div>

	<div class="clear"></div>
    <div class="left-column">
      <div class="dark-panel">
        <div class="dark-panel-top"></div>
        <div class="dark-panel-center">
		<form method="post" action="login_submit.php" name="myform" id="login_form">
          <ul>
            <li>
              <h1>REGISTER HERE</h1>
            </li>
            <li>
              <p>IF YOU ARE A REGULAR USER THAN ENTER USERNAME AND PASSWORD</p>
            </li>
			 <li class="username">
              <input name="phpro_username"  id="phpro_username" type="text" class="login-input" value="" maxlength="20"/>
            </li>
            <li class="password">
              <input name="phpro_password" type="password" id="phpro_password" class="login-input" value="" maxlength="20"/>
            </li>
            <li class="button" onclick="return substitute()"><a href="index1.html" >Submit</a></li>
            <br>
			<div class="button"><a href="reg.html" >SignUp</a></div>
          </ul>
		  </form>
        </div>
        <div class="dark-panel-bottom"></div>
      </div>
      <div class="light-panel">
        <div class="light-panel-top"></div>
        <div class="light-panel-center">
          <h1>Suggested For You</h1>
          <ul>
            <li><a href="index1.html">+ Politics Spices</a></li>
            <li><a href="index1.html">+ Science and Technology</a></li>
            <li><a href="index1.html">+ Sports</a></li>
            <li><a href="index1.html">+ Latest Movies</a></li>
            <li><a href="index1.html">+ Rise of Information Technology</a></li>
          </ul>
        </div>
        <div class="light-panel-bottom"></div>
      </div>
      <div class="dark-panel">
        <div class="dark-panel-top"></div>
        <div class="dark-panel-center">
          <ul>
            <li>
              <h1>TRENDING</h1>
            </li>
            <li class="date">07-06-2015</li>
            <li class="news">U.S. Beats Japan in Women's World Cup </li>
            <li class="date">06-07-2015</li>
            <li class="news">Millions Exposed by Computer Hacking Linked to China <br />Canada Hosts the 2015 FIFA Women's World Cup</li>
            <li class="date">06-08-2015</li>
            <li class="news-no-border">The Immigration Crisis Intensifies<br />
              Iraq Prime Minister Calls for Overhaul of Government</li>
          </ul>
        </div>
        <div class="dark-panel-bottom"></div>
      </div>
    </div>
    
      <div class="right-column-content">
        <div class="right-column-content-heading">
          <h1>ADMINSTRATION</h1>
          <h2>All the problems are solved here.If you have any problem about any content on this site contact us.</h2>
        </div>
        <div class="right-column-content-content">
          <p>SHIVAN TRIVEDI</p> 
    	  <p> ADMIN NO 1</p>
		  <p> CO-FOUNDER,AGORAS.</p> 
		  
        </div>
        <div class="right-column-content-img-right"> <img src="images/IMG_201.jpg" alt="banner" /> </div>
        <div class="clear right-cloumn-content-border"></div>
        <div class="right-column-content-content">
          <p>ANUBHAV KUMAR SINGH </p> 
		  <p>  ADMIN NO 2</p>
		  <p> CO-FOUNDER,AGORAS.</p> 
	 </div>
		<div class="right-column-content-img-right"> <img src="images/IMG_202.jpg" alt="banner" /> </div>
        <div class="clear right-cloumn-content-border"></div>
        <div class="right-column-content-content">
          <p> JHARNA BARNAWALA  </p> 
		  <p>ADMIN NO 3</p>
		  <p>CO-FOUNDER,AGORAS.</p>
		  </p>
         </div>
		<div class="right-column-content-img-right"> <img src="images/IMG_204.jpg" alt="banner" /> </div>
        <div class="clear right-cloumn-content-border"></div>
        <div class="right-column-content-content">
          <p>HARSH SINGH CHAUHAN</p> 
		  <p> ADMIN NO 4</p>
		  <p>CO-FOUNDER,AGORAS.</p>
         </div>
        <div class="right-column-content-img-right right-column-content-img-right-margin-bottom-none"> <img src="images/IMG_203.jpg" alt="banner" /> </div>
      </div>
    </div>
  </div>
</div>
<div class="footer-wrapper">
  <div class="footer-top"></div>
  <div class="footer-center">
    <div class="footer-content-left">
      <h1>TERMS AND CONDITIONS</h1>
      <h2>Please read the given instructions carefully before using this platform !!!!!</h2>
      <p>You can choose any topic from the category list and can give your views on it.You can also upvote and downvote the content respectively.</p>
      <p>We all request you to please do not use that kind of words which are against anyone , if this activity is performed than your account will be removed by the admins and no requests will be accepted.</p>
    </div>
    <div class="footer-content-right">
      <h1>HARSH SINGH CHAUHAN</h1>
      <h2>Managing Director</h2>
      <p>You can send your doubts,queries and suggestions at given email-id and you can also contact at given number.</p>
      <h3>Email: info@fadoohackers.com</h3>
      <h3>Phone: (800) 555-0000</h3>
    </div>
  </div>
  <div class="footer-bottom"></div>
</div>
<div class="clear"></div>
<div class="copyrights">Copyright(c)and Design by AGORAS Technical Team.
  <div class="copyrights-bottom"></div>
</div>
</body>
</html>

	 <!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<script src="myScript.js" type="text/javascript"></script>
	<title>The Golden Brown</title>
<style>
	.divii{
	display:inline;
	}
	
	.blackbar{
	background-color:black;
	color:white;
	height:55px;
	width:100%;
	}
	#blackbar-items{
	padding:10px;
	border-right:1px solid grey;
	}
	a:hover{
	color:#e6b800;;
	text-decoration:none;
	}
	#blackbar-items:hover{
	background-color:#e6b800;
	transition:1s;
	}
	
	#dropdownitems:hover{
	background-color:#EDA010;
	}
	
	
	.col-md-3{
  display: inline-block;
  margin-left:-4px;
}
.col-md-3 img{
  width:100%;
  height:auto;
}
body .carousel-indicators li{
  background-color:#e6b800;
}

}
body .no-padding{
  padding-left: 0;
  padding-right: 0;
}

#prosli{
margin-right:30%;
}
	
	h3.h3{text-align:center;margin:1em;text-transform:capitalize;font-size:1.7em;}


.product-grid{font-family:Raleway,sans-serif;text-align:center;padding:0 0 72px;border:1px solid rgba(0,0,0,.1);overflow:hidden;position:relative;z-index:1}
.product-grid .product-image{position:relative;transition:all .3s ease 0s}
.product-grid .product-image a{display:block}
.product-grid .product-image img{width:100%;height:auto}
.product-grid .pic-1{opacity:1;transition:all .3s ease-out 0s}
.product-grid:hover .pic-1{opacity:1}
.product-grid .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .3s ease-out 0s}
.product-grid:hover .pic-2{opacity:1}
.product-grid .social{width:150px;padding:0;margin:0;list-style:none;opacity:0;transform:translateY(-50%) translateX(-50%);position:absolute;top:60%;left:50%;z-index:1;transition:all .3s ease 0s}
.product-grid:hover .social{opacity:1;top:50%}
.product-grid .social li{display:inline-block}
.product-grid .social li a{color:#fff;background-color:#333;font-size:16px;line-height:40px;text-align:center;height:40px;width:40px;margin:0 2px;display:block;position:relative;transition:all .3s ease-in-out}
.product-grid .social li a:hover{color:#fff;background-color:#ef5777}
.product-grid .social li a:after,.product-grid .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
.product-grid .social li a:hover:after,.product-grid .social li a:hover:before{opacity:1}
.product-grid .product-discount-label,.product-grid .product-new-label{color:#fff;background-color:#ef5777;font-size:12px;text-transform:uppercase;padding:2px 7px;display:block;position:absolute;top:10px;left:0}
.product-grid .product-discount-label{background-color:#333;left:auto;right:0}
.product-grid .rating{color:#FFD200;font-size:12px;padding:12px 0 0;margin:0;list-style:none;position:relative;z-index:-1}
.product-grid .rating li.disable{color:rgba(0,0,0,.2)}
.product-grid .product-content{background-color:#fff;text-align:center;padding:12px 0;margin:0 auto;position:absolute;left:0;right:0;bottom:-27px;z-index:1;transition:all .3s}
.product-grid:hover .product-content{bottom:0}
.product-grid .title{font-size:13px;font-weight:400;letter-spacing:.5px;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid .title a{color:#828282}
.product-grid .title a:hover,.product-grid:hover .title a{color:#ef5777}
.product-grid .price{color:#333;font-size:17px;font-family:Montserrat,sans-serif;font-weight:700;letter-spacing:.6px;margin-bottom:8px;text-align:center;transition:all .3s}
.product-grid .price span{color:#999;font-size:13px;font-weight:400;text-decoration:line-through;margin-left:3px;display:inline-block}
.product-grid .add-to-cart{color:#000;font-size:13px;font-weight:600}
@media only screen and (max-width:990px){.product-grid{margin-bottom:30px}
}
.text-block{


  position: absolute;
  top: 1%;
  left: 2.5%;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;


}

.text-block2{


  position:absolute;
  top: 1%;
  left: 28.7%;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;


}

.text-block .text-block-tooltip1{
display:none;
}
.text-block:hover .text-block-tooltip1{
display:inline;
}

.text-block2 .text-block-tooltip2{
display:none;
}
.text-block2:hover .text-block-tooltip2{
display:inline;
}



#vl {
  border-left: 1px solid grey;
  
  margin-top:3.5%;
  position:relative;
}

</style>





<script>
<!--SCRIPT FOR LOCATION SELECTION -->


$(document).ready(function(){
    $("select.location").change(function(){
        var selectedLocation = $(this).children("option:selected").val();
        
		var loc=selectedLocation.toString();
		if(loc=='Select Location')
		{
			location.href='index.html';
		}
		else if(loc=='Delhi')
		{	alert("You have selected the location - " + selectedLocation);
			
			$("#roww1").css("display","none");
			$("#roww3").css("display","none");
			$("#roww4").css("display","none");
			
			
		}
		else if(loc=='Chandigarh')
		{
			
			alert("You have selected the location - " + selectedLocation);
			$("#roww2").css("display","none");
			$("#roww3").css("display","none");
			
		}
		else if(loc=='NCR')
		{	
			alert("You have selected the location - " + selectedLocation);
			$("#roww1").css("display","none");
			$("#roww2").css("display","none");
			$("#roww4").css("display","none");
		
		}
		document.getElementById("loca").innerHTML="<button class='btn btn-warning' style='padding:4%;'>More Products in "+loc+"</button>";
    });
});

$(document).ready(function() {
    // Cache selectors for faster performance.
    var $window = $(window),
        $mainMenuBar = $('#mainMenuBar'),
        $mainMenuBarAnchor = $('#mainMenuBarAnchor');

    // Run this on scroll events.
    $window.scroll(function() {
        var window_top = $window.scrollTop();
        var div_top = $mainMenuBarAnchor.offset().top;
        if (window_top > div_top) {
            // Make the div sticky.
            $mainMenuBar.addClass('stick');
            $mainMenuBarAnchor.height($mainMenuBar.height());
        }
        else {
            // Unstick the div.
            $mainMenuBar.removeClass('stick');
            $mainMenuBarAnchor.height(0);
        }
    });
});

</script>
</head>

<body onload="checkUserName()">

<!--HEADER SECTION -->

<div class="container">
	<div class="row" style="border:1px solid lightgrey;padding:1%;">
		<div class="col" ><a href="#" style="color:black;"><img src="images/phone-icon.png" style="height:20px;width:20px"> <i>Get the App</i></a></div>
		<div class="col"></div>
		<div class="col"><div class="top-social">
                        <a href="#" style="color:black;"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> &nbsp; <a href="#" style="color:black;"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        
                         &nbsp; <a href="#" style="color:black;"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                         &nbsp; <a href="#" style="color:black;"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
						</div>
		</div>
		<div class="col"><a href="#" style="color:black;"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Order Now</a></div>
		<div> <i class="fa fa-map-marker" aria-hidden="true"></i> <select class="location"><option>Select Location</option><option>Delhi</option><option>NCR</option><option>Chandigarh</option></select></div>	
		</div>
	<div class="row" >
		<!--LOGO-->  <div class="col" ><a href="#"><img src="images/try1.jpg" style="width:350px;"></a></div>
		
		<!--SEARCH BAR--> <div class="col-6" style="width:900px;">
									<div class="divii">
									<BR>
									<input type="text"  id="usr" class="name="username"  placeholder="  Search for Bakers,Bakeries Or Food ...!"  style="width:420px;height:38px;border-style:3px;border-radius:3px;">   &nbsp;
									</div><button class="btn btn-warning" style="margin-bottom:1%;">Search </button></div>
								
				<div class="col-sm-2" style="margin-top:2.5%;" id="userInfo"><center>
				
<?php

include 'database.php';

	 
	 $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']); 
	 
	 $sql = "SELECT name from UserInfo WHERE email='$email' and password = MD5('$password') ";
	 
	 $result = mysqli_query($conn,$sql);
	 $row = $result->fetch_assoc();
	 if ($result->num_rows > 0){
	     print " <div class='dropdown'>
  <button type='button' class='btn btn-warning dropdown-toggle' data-toggle='dropdown'>
    <i class='fa fa-user' aria-hidden='true'></i> Welcome {$row['name']}
  </button>
  <div class='dropdown-menu'>
    <a class='dropdown-item' href='#'>My Profile</a>
    <a class='dropdown-item' href='#'>My Orders</a>
    <a class='dropdown-item' href='#'>Track Orders</a>
    <a class='dropdown-item' href='index.html'>Logout</a>
  </div>
</div>  ";
	 }
	 else{
	    echo("<script>location.href = 'loginFailed.php';</script>");
  
exit; 
	 }

?>
	 </center></div>
								
		</div>
		
		
		
	</div>
	

<br>
<div class="blackbar" >
	<div class="container">
		<div class="row" id="rownav">
			<div class="col-md" style="border-right:1px solid grey;">
				<nav class="navbar navbar-expand-sm bg-extradark" style="color:white;" id="blacknav">
			<ul class="navbar-nav">
				<li class="nav-item dropdown" id="blacknav"><a class="nav-link dropdown-toggle" href="#" id="blacknav" data-toggle="dropdown" style="color:white;"><i class="fa fa-bars" aria-hidden="true"></i> &nbsp;All Departments </a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#" id="dropdownitems"> &nbsp;<i class="fa fa-birthday-cake" aria-hidden="true"></i> Cakes</a>
					<a class="dropdown-item" href="#" id="dropdownitems"> &nbsp;<i class="fa fa-bullseye" aria-hidden="true"></i> Cookies</a>
					<a class="dropdown-item" href="#" id="dropdownitems"><img src="images/dessert.png" style="height:20px;width:20px;"> Pasteries</a>
					<a class="dropdown-item" href="#" id="dropdownitems"><img src="images/tart.jfif" style="height:20px;width:20px;"> Tarts</a>
					<a class="dropdown-item" href="#" id="dropdownitems"><img src="images/muffin.jfif" style="height:20px;width:20px;"> Muffin and Cupcakes</a>
					<a class="dropdown-item" href="#" id="dropdownitems"><i class="fa fa-lemon-o" aria-hidden="true"></i> Pies</a>
					<a class="dropdown-item" href="#" id="dropdownitems"><i class="fa fa-cutlery" aria-hidden="true"></i> Others</a>
				</div>
				</li>
				</ul>
			</div>
			<div class="col-md" id="blackbar-items" style="background-color:#e6b800;"><a href="index.html" style="color:white;"><center>HOME</center></a></div>
			<div class="col-md" id="blackbar-items"><a href="#" style="color:white;"><center><abbr  title="Order your cake by just uploading a picture !" style="text-decoration:none;">Customized Cake ?</abbr></center></a></div>
			<div class="col-md" id="blackbar-items"><a href="#" style="color:white;"><center><abbr  title="If you are a Baker and want to be a part of TGB." style="text-decoration:none;"> Bakers Point</center></a></div>
			<div class="col-md" id="blackbar-items"><a href="#" style="color:white;"><center><i class="fa fa-shopping-basket" aria-hidden="true"></i> SHOP</center></a></div>
			<div class="col-md" id="blackbar-items"><a href="#" style="color:white;"><center>CONTACT</center></a></div>
	</div>
	</div>


</div>
</div>
<!--SLIDER 1300x500 -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/goldenbrown.jpg" alt="Second slide">
    </div>
	<div class="carousel-item ">
      <img class="d-block w-100" src="http://nikbakers.com/images/home-banner-3.jpg">
    </div>
	<div class="carousel-item">
      <img class="d-block w-100" src="images/customslide.png" alt="Fifth slide">
    </div>
	 <div class="carousel-item">
      <a href="http://thegoldenbrown.ga/customCake.php#gsc.tab=0"><img class="d-block w-100" src="images/slide4.jpg" alt="Third slide"></a>
    </div>
	
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





<div class="container"  id="roww1">
    <h3 class="h3"><a href="#" style="color:black;">From Baker's Street ( Chandigarh ) </a></h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/bf2.jpg">
                        <img class="pic-2" src="products/bf1.jfif">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Now at</span>
                    <span class="product-discount-label">20% less</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Black Forest chocolate cake half Kg</a></h3>
                    <div class="price">₹569
                        <span>₹699</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/pine1.jpg">
                        <img class="pic-2" src="products/pine2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Now at</span>
                    <span class="product-discount-label">15% less</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Pineapple Cake 1 Kg</a></h3>
                    <div class="price">₹1100
                        <span>₹1400</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/vani1.jpg">
                        <img class="pic-2" src="products/vani2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Now at</span>
                    <span class="product-discount-label">20% less</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">vanilla Cake 2 Kg</a></h3>
                    <div class="price">₹2500
                        <span>₹3000</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/kb10.jpg">
                        <img class="pic-2" src="products/kb11.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Anzac Nutty Cookies 1Kg</a></h3>
                    <div class="price">₹1300
                      
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container"  id="roww2">
    <h3 class="h3"><a href="#" style="color:black;">Khalsa Bakers ( Delhi ) </a></h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/kb1.jpg">
                        <img class="pic-2" src="products/kb2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Now at</span>
                    <span class="product-discount-label">10% less</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Puffed Sweet Biscuits 1/2 Kg</a></h3>
                    <div class="price">₹700
                        <span>₹770</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/kb3.jpg">
                        <img class="pic-2" src="products/kb4.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Now at</span>
                    <span class="product-discount-label">15% less</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Karachi Special Biscuits 1Kg</a></h3>
                    <div class="price">₹1100
                        <span>₹1200</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/kb7.jpg">
                        <img class="pic-2" src="products/kb8.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Now at</span>
                    <span class="product-discount-label">30% less</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Classic Dark Chocolate Cake 1/2 Kg</a></h3>
                    <div class="price">₹2100
                        <span>₹3000</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/straw.jpg">
                        <img class="pic-2" src="products/straw2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Strawberry cake 1 kg</a></h3>
                    <div class="price">₹1300
                        <span>₹1500</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<!--BANNER-->

<div>
	<img class="img-responsive" src="banner created.png" alt="About us!" style="width:100%;height:auto;"> 
</div>

<!--Banner ends-->
<br>
<div class="container-fluid" style="background-color:#17202A;">
<div class="container" style="background-color:#17202A;color:white;">
	<div class="row">
	<div class="col" ><center><button class=" btn btn-warning" style="padding:10%;"><abbr  title="Order your cake by just uploading a picture !" style="text-decoration:none;">Customized/personal Cake</abbr></button></center></div>
	<div class="col"><button class="btn" style="padding:10%;color:white; "><a href="instructions.html">Read ( How to get your customized cake )</a></button></div>
</div>
</div>
</div>

<hr>
<!-- Products After CustomizedCake option --> 

<div class="container"  id="roww3">
    <h3 class="h3"><a href="#" style="color:black;">KA Eclairs & Kafe ( Sector-18 NOIDA ) </a></h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/black forest.jpg">
                        <img class="pic-2" src="products/black forest2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Now at</span>
                    <span class="product-discount-label">10% less</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Black Forest chocolate cake 1 Kg</a></h3>
                    <div class="price">₹1800
                        <span>2000</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/rainbow1.jpg">
                        <img class="pic-2" src="products/rainbow2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Vanilla Rainbow Cake 2 KG</a></h3>
                    <div class="price">₹3500
                        
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/choco muffin2.jpg">
                        <img class="pic-2" src="products/choco muffin2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Now at</span>
                    <span class="product-discount-label">20% less</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Chocolate Muffins (20 Pcs)</a></h3>
                    <div class="price">₹600
                        <span>₹700</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/choco tart1.jpg">
                        <img class="pic-2" src="products/choco tart2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Chocolate Caramel Tarts (20 Pcs)</a></h3>
                    <div class="price">₹800
                      
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<!-- ADS SECTION -->

<div class="container" style="position:relative;">
	<div class="row">
		<div class="col sm-6">
			<a href="https://spotify.com" target="_blank"><img src="ad banners/spotify2.jpg" class="img-responsive" style="height:99%;width:130%;">
			<div class="text-block"><h6>Ad : Learn More!</h6><span class="text-block-tooltip1" onclick="adfunction()">Why this ad ?</span></div>
			</a>
			</div>
		<div class="col sm-6" >
		<a href="https://www.spotify.com" target="_blank"><img src="ad banners/spotify.png" style="height:99%;width:70%;margin-left:27.5%;" class="img-responsive">
		<div class="text-block2"><h6>Ad : Learn More!</h6><span class="text-block-tooltip2" onclick="adfunction()">Why this ad ?</span></div>
		</a>
		</div>
	</div>
</div>
<hr>
<div class="container-fluid" style="background-color:#17202A;">
<div class="container">
	<div class="row">
		<div class="col" id="loca" style="margin-left:40%;"></div>
	</div>
</div>
</div>

<hr>

<div class="container"  id="roww4">
    <h3 class="h3"><a href="#" style="color:black;">Nik Bakers ( Chandigarh ) </a></h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/black forest.jpg">
                        <img class="pic-2" src="products/black forest2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Now at</span>
                    <span class="product-discount-label">10% less</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Black Forest chocolate cake 1 Kg</a></h3>
                    <div class="price">₹1800
                        <span>2000</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/vanillapuff.jpg">
                        <img class="pic-2" src="products/strawberrypuff.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Vanilla Cream Puff Pastry 10 Pcs</a></h3>
                    <div class="price">₹499
                        
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/strawberrypuff.jpg">
                        <img class="pic-2" src="products/vanillapuff.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Now at</span>
                    <span class="product-discount-label">20% less</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Strawberry Puff Pastry 10 Pcs</a></h3>
                    <div class="price">₹600
                        <span>₹700</span>
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="products/choco tart1.jpg">
                        <img class="pic-2" src="products/choco tart2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><a href="#">Chocolate Caramel Tarts (20 Pcs)</a></h3>
                    <div class="price">₹800
                      
                    </div>
                    <a class="add-to-cart" href="">+ Add To Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<!--Bottom Banner -->

<div >
	<img src="images/bottombanner.png" style="width:100%;">

</div>
<br>
<br>

<!--BOTTOM IMAGE GALLERY -->

<div class="container">
	<div class="row">
		<div class="col-md-3"><img src="images/image gallery bottom/one.jpg" class="img-thumbnail"></div>
		<div class="col-md-3"><img src="images/image gallery bottom/two.jpg" class="img-thumbnail"></div>
		<div class="col-md-3"><img src="images/image gallery bottom/three.jpg" class="img-thumbnail"></div>
		<div class="col-md-3"><img src="images/image gallery bottom/four.jpg" class="img-thumbnail"></div>
		
		
	</div>


</div>

<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-3"><img src="images/image gallery bottom/five.jpg" class="img-thumbnail"></div>
		<div class="col-md-3"><img src="images/image gallery bottom/six.jpg" class="img-thumbnail"></div>
		<div class="col-md-3"><img src="images/image gallery bottom/seven.jpg" class="img-thumbnail"></div>
		<div class="col-md-3"><img src="images/image gallery bottom/eight.jpg" class="img-thumbnail"></div>
		
		
	</div>


</div>

<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-3"><img src="images/image gallery bottom/nine.jpg" class="img-thumbnail"></div>
		<div class="col-md-3"><img src="images/image gallery bottom/ten.jpg" class="img-thumbnail"></div>
		<div class="col-md-3"><img src="images/image gallery bottom/eleven.jpg" class="img-thumbnail"></div>
		<div class="col-md-3"><img src="images/image gallery bottom/twelve.jpg" class="img-thumbnail"></div>
		
		
	</div>


</div>

<br>
<br>

<!--FOOTER SECTION -->
<footer style="background-color:black;height:100%px;">

<div style="background-color:black;color:white;" class="container-fluid">
	<div class="container" style="background-color:black;color:white;" >
		<div class="row">
			<div class="col"><span style="color:lightgrey;font-size:80%;position:absolute;margin-top:15%">THE GOLDEN BROWN</div>
			<div class="col"><span style="color:lightgrey;font-size:80%;position:absolute;margin-top:15%">HELP</div>
			<div class="col"><span style="color:lightgrey;font-size:80%;position:absolute;margin-top:15%">POLICY</div>
			<div class="col"><span style="color:lightgrey;font-size:80%;position:absolute;margin-top:15%">SOCIAL</div>
			<div class="col" id="vl" style="font-size:90%;color:lightgrey">Mail Us:</div>
		</div>
		
		<div class="row">
			<div class="col" style="font-size:80%;">Contact Us</div>
			<div class="col" style="font-size:80%;">Payments</div>
			<div class="col"style="font-size:80%;">Terms Of Use</div>
			<div class="col" style="font-size:80%;">Facebook</div>
			<div class="col" style="font-size:80%;">info@thegoldenbrown.com</div>
		</div>
	
		
		<div class="row">
			<div class="col" style="font-size:80%;">About Us</div>
			<div class="col" style="font-size:80%;">Delivery</div>
			<div class="col"style="font-size:80%;">Security</div>
			<div class="col" style="font-size:80%;">Twitter</div>
			<div class="col" style="font-size:80%;">info@tgb.com</div>
		</div>
		
		<div class="row">
			<div class="col" style="font-size:80%;">Careers</div>
			<div class="col"style="font-size:80%;">Cancellation</div>
			<div class="col" style="font-size:80%;">Privacy</div>
			<div class="col" style="font-size:80%;">YouTube</div>
			<div class="col"></div>
		</div>
		
		<div class="row">
			<div class="col" style="font-size:80%;">TGB Stories</div>
			<div class="col"style="font-size:80%;">FAQ</div>
			<div class="col" style="font-size:80%;">Sitemap</div>
			<div class="col" style="font-size:80%;">Instagram</div>
			<div class="col"></div>
		</div>
		<div class="row">
			<div class="col" style="font-size:80%;">Press</div>
			<div class="col"style="font-size:80%;">Report Infringement</div>
			<div class="col" style="font-size:80%;">EPR Complaince</div>
			<div class="col" style="font-size:80%;"></div>
			<div class="col"></div>
		</div>
		
		<div class="row">
			<div class="col" style="font-size:80%;"></div>
			<div class="col"style="font-size:80%;"></div>
			<div class="col" style="font-size:80%;">In News</div>
			<div class="col" style="font-size:80%;"></div>
			<div class="col"></div>
		</div>
		
	</div>
	
	<hr style="border-top: 1px solid white;">
	
	<div class="container">
	<br>
	
		<div class="row">
			<div class="col-sm-2"><img src="briefcase.png" style="margin-bottom:5%;"></i> &nbsp;&nbsp;Sell on TGB</div>
			<div class="col-sm-2"><img src="ad.png" style="margin-bottom:5%;"> &nbsp;&nbsp; Advertise</div>
			<div class="col-sm-2"><img src="gift.png" style="margin-bottom:5%;"> &nbsp;&nbsp; Gift Cards</div>
			<div class="col-sm-2"><img src="help.png" style="margin-bottom:5%;"> &nbsp;&nbsp; Help Center</div>
			<div class="col-sm-4">©2020 thegoldenbrown.com     <img src="https://img1a.flixcart.com/www/linchpin/fk-cp-zion/img/payment-method_2dd397.svg"></div>
			
	
	
	
	
		</div>
		<br>
	<br>
	</div>
	
</div>




</footer>

<!--#e6b800;-->

</body>

</html>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Grocery Shoppy an Ecommerce Category Bootstrap Responsive Web Template | Typography :: w3layouts</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="<?php echo base_url("css/bootstrap.css") ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url("css/style.css") ?>" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url("css/font-awesome.css") ?>" rel="stylesheet">
	<!--pop-up-box-->
	<link href="<?php echo base_url("css/popuo-box.css") ?>" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("css/jquery-ui1.css") ?>">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<style type="text/css">
	td{
		text-align: center;
	}
	th{
		text-align: center;
		color: white;
	}
</style>

<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p>Febry Triyadi</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="index.html">
						<span>A</span>potik
						<span>O</span>nline
						<img src="images/logo2.png" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				
				<!-- //header lists -->
				<!-- search -->
				
				<!-- //search -->
				<!-- Teks bergerak -->
			<div style="text-align: center; font-size: 50px; font-family: Comic Sans MS, cursive, sans-serif;color: orange">
				<script language="JavaScript">
    				var text="Welcome to Admin Apotik Online";
    				var delay=30;
    				var currentChar=1;
   					var destination="[none]";
    				function type(){
    				//if (document.all)
    				{
    				var dest=document.getElementById(destination);
    				if (dest)// && dest.innerHTML)
    				{
    					dest.innerHTML=text.substr(0, currentChar)+"<blink>_</blink>";
    					currentChar++;
    				if (currentChar>text.length){
    					currentChar=1;
    					setTimeout("type()", 3000);
    				}else{
    					setTimeout("type()", delay);
    				}
    				}
    				}
    				}
    				function startTyping(textParam, delayParam, destinationParam){
    					text=textParam;
    					delay=delayParam;
    					currentChar=1;
    					destination=destinationParam;
    					type();
    				}
    			</script>
    		<b><div id="textDestination"></div></b>
    		<script language="JavaScript">
    			javascript:startTyping(text, 50, "textDestination");
    		</script>
    		</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- Button trigger modal(shop-locator) -->
	<!-- //shop locator (popup) -->
	<!-- signin Model -->
	<!-- Modal1 -->
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<!-- //navigation -->
	<!-- banner-2 -->
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="<?php echo base_url("C_admin/data_obat") ?>">Home</a>
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_admin/data_obat") ?>">Daftar Obat</a>
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_admin/tambahobat") ?>">Pengadaan Obat</a>
						<i>|</i>
					</li>
					<li>
						Daftar Pemesanan
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_admin/laporan") ?>">Laporan</a>
						<i>|</i>
					</li>
					<li>
						<a href="<?php echo base_url("C_admin/data_komplain") ?>">Daftar Komplain</a>
						<i>|</i>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<div class="container" style="background-image: ">
		<div class="bs-docs-example">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>ID pesanan</th>
				<th>Nama pembeli</th>
				<th>Nama obat</th>
				<th>Jumlah</th>
				<th>Total Harga</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<tr>	
				<td>PSN1</td>
				<td>Febry</td>
				<td>Panadol</td>
				<td>5</td>
				<td>Rp 25.000</td>
				<td>On Proses</td>
				<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit"><i class="glyphicon glyphicon-pencil"></i></button>
                	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-trash"></i></button></td>
			</tr>
			<tr>
				<td>PSN2</td>
				<td>Linggis</td>
				<td>Amoxilin</td>
				<td>5</td>
				<td>Rp 15.000</td>
				<td>Delived</td>
				<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-trash"></i></button></td>
			</tr>
			<tr>
				<td>PSN3</td>
				<td>Nisrina</td>
				<td>Promag</td>
				<td>5</td>
				<td>Rp 35.000</td>
				<td>Done</td>
				<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-trash"></i></button></td>
			</tr>
			<tr>
				<td>PSN4</td>
				<td>Beta</td>
				<td>Panadol</td>
				<td>10</td>
				<td>Rp 50.000</td>
				<td>Done</td>
				<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-trash"></i></button></td>
			</tr>
			<tr>
				<td>PSN5</td>
				<td>Gita</td>
				<td>Promag</td>
				<td>1</td>
				<td>Rp 7.000</td>
				<td>On Proses</td>
				<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-trash"></i></button></td>
			</tr>
			</tbody>
		</table>
		<div id="edit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Edit Transaksi</h4>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="http://localhost/care1/C_transaksi/proses_update_pesanan">
                        <input type="hidden" name="pesanan_id" value="<?php echo $key->pesanan_id; ?>">
                        <div class="col-md-8">
                        <center>
                            <select class="form-control" name="proses">
                                <option value="On Proses">On Proses</option>
                                <option value="Delived">Delived</option>
                                <option value="Done">Done</option>
                            </select>
                        </center>
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="http://localhost/care1/C_transaksi/proses_delete_pesanan">
                        <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
                        <input type="hidden" name="pesanan_id" class="form-control" value=<?php echo "'".$key->pesanan_id."'"; ?>>
                        <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		</div>
	</div>
	<br>
	<br>
	<div class="type">
		<div class="container">
			<h3 class="tittle-w3l">Data Pemesanan
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
		</div>
		
	</div>
	<!-- copyright -->
	<footer>
	<div class="copy-right">
		<div class="container">
			<p>Copyright © 2018 Apotik Online. All rights reserved
			</p>
		</div>
	</div>
	</footer>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>
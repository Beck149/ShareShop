<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js" integrity="sha512-pBoUgBw+mK85IYWlMTSeBQ0Djx3u23anXFNQfBiIm2D8MbVT9lr+IxUccP8AMMQ6LCvgnlhUCK3ZCThaBCr8Ng==" crossorigin="anonymous"></script>
<link href="<?=$logo?>" rel="icon">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kanit&family=Poppins:wght@800&family=Prompt:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="//kit-pro.fontawesome.com/releases/v5.13.0/css/pro.min.css">
<!-- css -->
<link rel="stylesheet" type="text/css" href="/assete/css/style.css?_=5f222122b462b2">
<link rel="stylesheet" type="text/css" href="/assete/css/all-web.css?_=2f42511221b1e">
<link rel="stylesheet" type="text/css" href="/assete/css/bootstrap.min.css">
<!-- css -->
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="/assete/js/web.js?_=5f11312222b2e"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<div id="fb-root"></div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.5/sweetalert2.min.css" integrity="sha256-1mciy4fJXvhqkSOwLvtpsTeBJ02AgAcmNYTzRMrzloU=" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.28.5/sweetalert2.all.min.js" integrity="sha256-8wto0QRDpHJWujPs2SQ3X45VnIv9VpULlzMjqDXFRpI=" crossorigin="anonymous"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v9.0" nonce="2zwEjvde"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php
function profire(){
	$class = new shopweb;
	$tprofire = $class->profire();
	$row = $tprofire->fetch();
	echo $row['profire'];
}

function point(){
	$class = new shopweb;
	$tprofire = $class->profire();
	$row = $tprofire->fetch();
	echo $row['point'];
}

function date_(){
	$class = new shopweb;
	$tprofire = $class->profire();
	$row = $tprofire->fetch();
	echo $row['date'];
}

$bt_rg = "";
$l_rg = "";
$f_t = "";

if (isset($_SESSION['username'])) {
	$bt_rg = "ไปหน้าร้านค้า";
	$l_rg = "shop";
	$f_t = "fixed-top";
}else{
	$bt_rg = "สมัครสมาชิก";
	$l_rg = "register";
}

?>

<style type="text/css">
	::-webkit-scrollbar {
		width: 6px;
		background-color: #f5f5f5;
		border-radius: 12px;
	}
	::-webkit-scrollbar-thumb {
		background-color: #403838;
		border-radius: 12px;
	}
	::-webkit-scrollbar-thumb:hover {
		background: #211d1d;
		border-radius: 12px;
	}
	<?php if (isset($_SESSION['username'])) { ?>
		.top-body {
			padding-top: 90px;
		}

		@media (max-width: 991px){
			.manu-nav {
				top: 40;
			}
		}
	<?php } else { ?>
		@media (max-width: 991px){
			.manu-nav {
				top: 120;
			}
		}
	<?php } ?>
</style>
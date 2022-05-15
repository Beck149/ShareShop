<?php if ($_SESSION['status'] !== "admin") {
	echo "ควย";
}else{ ?> 
	<html>
	<head>
		<?php 
		function inc($page){
			include 'system/config.php';
			include '_backend_/'.$page.'.php';
		}
		?>
		<style type="text/css">
			.sdsdsd {
				overflow-x: auto;
			}
		</style>
	</head>
	<body>
		<nav class="nav-admin">
			<div class="text-light">
				<div class="d-flex">
					<a href="javascript:void(0);" class="icon-resadmin mx-3" onclick="showdtad()">
						<i class="fa fa-bars res-i"></i>
					</a>
					<h3 class="pt-1">
						เมนูจัดการหลังบ้าน
					</h3>
				</div>
				<ul class="ul-navadmin" id="manu-ad">
					<li>
						<a href="?p=main">หน้าหลัก</a>
					</li>
					<li>
						<a href="?p=editfontend">จัดการหน้าเว็บ</a>
					</li>
					<li>
						<a href="?p=showproduct">จัดการสินค้า</a>
					</li>
					<li>
						<a href="?p=showuser">จัดการผู้ใช้</a>
					</li>
				</ul>
			</div>
		</nav>
		<div style="background: #f7f7f7 ;width: 100%;height: auto;padding: 50px;">
			<h1 class="text-white1" align="center">ระบบหลังเว็บ</h1>
		</div>
		<div class="container" >

			<?php


			if (empty($_GET['p'])) {
				inc("main");
			} else {
				$p = $_GET['p'];
				if ($p == "main") {
					inc("main");
				} elseif ($p == "editfontend") {
					inc("editfontend");
				} elseif ($p == "showuser") {
					inc("showuser");
				} elseif ($p == "edituser") {
					inc("edituser");
				} elseif ($p == "showproduct") {
					inc("showproduct");
				} elseif ($p == "editproduct") {
					inc("editproduct");
				} elseif ($p == "addproduct") {
					inc("addproduct");
				} elseif ($p == "showstock") {
					inc("showstock");
				} elseif ($p == "editstock") {
					inc("editstock");
				} elseif ($p == "addstock") {
					inc("addstock");
				} else {
					inc("main");
				}
			}

			

			?>
		</div>
		<script type="text/javascript">
			function showdtad() {
				var show = document.getElementById("manu-ad");
				if (show.style.display === "block") {
					show.style.display = "none";
				} else {
					show.style.display = "block";
				}
			}
		</script>
	</body>
	</html>

	<?php } ?>
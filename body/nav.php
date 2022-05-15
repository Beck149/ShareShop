<?php if (!isset($_SESSION['username'])) {  ?>
	<div style="background: #fff;">
		<div class="navbar-top" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
			<ul class="ultop-nav container">
				<li class="ul-li">
					<a class="link-t" href="register"><i class="fad fa-user-plus"></i> สมัครสมาชิก</a>
				</li>
				<li class="ul-li">
					<a class="link-t" href="login"><i class="fad fa-sign-in-alt"></i> เข้าสู่ระบบ</a>
				</li>
			</ul>
		</div>
	</div>
<?php }?>
<nav class="navbar-manu  <?=$f_t?>" id="nav-m">
	<div class="container">
		<a href="">
			<img src="<?=$logo?>" class="logo" data-aos="flip-right"
			data-aos-easing="ease-out-cubic"
			data-aos-duration="1200">
		</a>
		<a href="javascript:void(0);" class="icon-res" onclick="navRes()">
			<i class="fa fa-bars res-i"></i>
		</a>
		<?php if(isset($_SESSION['username'])){ ?>
			<li class="nav-profire-rp mt-4">
				<a class="nav-link-rp dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">
				<img src="https://minotar.net/avatar/<?php profire()?>" class="rounded-circle z-depth-0"
				alt="avatar image" height="35">
			</a>
			<div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
			aria-labelledby="navbarDropdownMenuLink-55" style="border: 1px solid #878787;">
			<?php if ($_SESSION['status'] == 'admin') { ?>
				<a class="dropdown-item" href="./backend" style="background: #fa3116; border: 4px solid #fff; border-radius: 8px;"><i class="fas fa-tachometer-alt"></i> หลังร้าน</a>
				<hr>
			<?php } ?>
			<p class="dropdown-set" style="margin-top: 1px;"><i class="fas fa-user"></i> ชื่อผู้ใช้ | <?=$_SESSION['username']?></p>
			<p class="dropdown-set"><i class="fas fa-coins"></i> <?=point()?> บาท</p>
			<hr>
			<a class="dropdown-item" href="profire"><i class="fad fa-user-circle"></i> ข้อมูลสมาชิก</a>
			<a class="dropdown-item logout"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
		</div>
	</li>
<?php } ?>
<ul class="manu-nav" id="manu-nav">
	<li class="de-nav">
		<a class="c-nav" href="home">หน้าแรก</a>
	</li>
	<li class="de-nav">
		<a class="c-nav" href="shop">ร้านค้า</a>
	</li>
	<li class="de-nav">
		<a class="c-nav" href="topup">เติมเงิน</a>
	</li>
	<li class="de-nav">
		<a class="c-nav" href="help">ช่วยเหลือ</a>
	</li>
	<li class="de-nav">
		<a class="c-nav" href="#about_us">เกี่ยวกับเรา</a>
	</li>
	<?php if(isset($_SESSION['username'])){ ?>
		<li class="nav-profire">
			<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
			aria-haspopup="true" aria-expanded="false">
			<img src="https://minotar.net/avatar/<?php profire()?>" class="rounded-circle z-depth-0"
			alt="avatar image" height="35">
		</a>
		<div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
		aria-labelledby="navbarDropdownMenuLink-55" style="border: 1px solid #878787;">
		<?php if ($_SESSION['status'] == "admin") { ?>
			<a class="dropdown-item" href="backend" style="background: #fa3116; border: 4px solid #fff; border-radius: 8px;"><i class="fas fa-tachometer-alt"></i> หลังร้าน</a>
			<hr>
		<?php } ?>
		<p class="dropdown-set" href="editname" style="margin-top: 1px;"><i class="fas fa-user"></i> ชื่อผู้ใช้ : <?=$_SESSION['username']?></p>
		<p class="dropdown-set"><i class="fas fa-coins"></i> <?=point()?> บาท</p>
		<hr>
		<a class="dropdown-item" href="profire"><i class="fad fa-user-circle"></i> ข้อมูลสมาชิก</a>
		<a class="dropdown-item logout"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
	</div>
</li>
        <script>
        	function Testfornot() {
			if (!("Notification" in window)) {
				alert("This browser does not support desktop notification");
			}
			else if (Notification.permission === "granted") {
				var notification = new Notification("คุณได้เปิดการแจ้งเตือนแล้ว !");
			}
			else if (Notification.permission !== "denied") {
				Notification.requestPermission(function(permission) {
					if (permission === "granted") {
						var notification = new Notification("คุณได้เปิดการแจ้งเตือนแล้ว !");
					}
				});
			}
		}
        </script>
<!--li class="de-nav">
	<button class="btn btn-danger waves-effect waves-light" onclick="notifyMe()"><i class="fas fa-bell text-white"></i> เปิดการแจ้งเตือน!</button>
</li-->
<?php } ?>

</ul>
</div>
</nav>
<script type="text/javascript">
	window.onscroll = function() {navSticky()};

	var navbar = document.getElementById("nav-m");
	var sticky = navbar.offsetTop;

	function navSticky() {

		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
	}

	function navRes() {
		var x = document.getElementById("manu-nav");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}
	}

	$(".logout").click(function(){
		Swal.fire({
			title: 'คุณแน่ใจมั้ย?',
			text: "คุณต้องการที่จะออกจากระบบจริงๆหรอ!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#00C851',
			cancelButtonColor: '#d33',
			cancelButtonText: 'ไม่',
			confirmButtonText: 'ใช่'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url:"system/data/logout.php",
					success:function(data){
						Swal.fire({
							text: 'ออกจากระบบสำเร็จ',
							type: 'success',
							timer: 2500, 
							confirmButtonColor: '#00C851',
							confirmButtonText: 'ตกลง'
						}).then((result)=>{
							window.location.href="./home";
						});
					}
				});
			}
		})
	});

</script>
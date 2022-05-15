<div class="bg-top-sh" style="background-image: url(assete/img/bg.png);">
	<div class="container text-center text-white">
		<h1 style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 10px #000;">REGISTER</h1>
		<p style="text-shadow: 2px 2px 10px #000;"><a class="text-light" href="home">หน้าแรก</a> <i class="fas fa-chevron-right text-white"></i> <?=$title?></p>
	</div>
</div>
<div class="register-all mt-5 container">
	<div class="method-reg">
		<div align="center">
			<div>
				<h4 style="margin-bottom: 25px;">วิธีการสมัคร <i class="fad fa-question"></i></h4>
			</div>
			<p class="text-danger">* กรุณาอ่านก่อนทำการสมัครสมาชิก เพื่อไม่ให้เกิดความสับสน</p>
			<div style="text-align: left;">
				<p>1. Username กรุณาใช้ภาษาอังกฤษเท่านั้น</p>
				<p>2. กรุณาใช้ email จริง หากลืมรหัสผ่านจะสามารถกู้ได้</p>
				<p>3. กรุณาใช้ Password 6 ตัวขึ้นไป</p>
				<p>4. กรุณากรอกให้ครบทุกช่อง</p>
			</div>
		</div>
	</div>
	<div class="register-mu" align="center">
		<div>
			<h3 style="margin-bottom: 25px;"><i class="fas fa-user-plus"></i> สมัครสมาชิก</h3>
		</div>
		<div class="input-ue">
			<label for="txt_username"><h5>ชื่อผู้ใช้</h5></label>
			<input class="form-control" type="text" name="txt_username" id="txt_username" placeholder="Username">
		</div>
		<div class="input-ue">
			<label for="txt_email"><h5>อีเมล</h5></label>
			<input class="form-control" type="email" name="txt_email" id="txt_email" placeholder="Email">
		</div>
		<div class="row">
			<div class="input-p">
				<label for="txt_password"><h5>รหัสผ่าน</h5></label>
				<input class="form-control" type="password" name="txt_password" id="txt_password" placeholder="Password">
			</div>
			<div class="input-p">
				<label for="re_password"><h5>ยืนยันรหัสผ่าน</h5></label>
				<input class="form-control" type="password" name="re_password" id="re_password" placeholder="Confirm Password">
			</div>
			<div class="g-recaptcha" data-sitekey="คีย์ฝั่ง client"></div>
		</div>
		<div class="pt-4">
			<button class="btn-reg" name="register" id="register">สมัครสมาชิก</button>
			<p class="pt-4">หากมีบัญชีแล้ว? <a href="./login">เข้าสู่ระบบ</a></p>
		</div>
	</div>	
</div>
<script type="text/javascript">
	$("#register").click(function(){
		var username = $("#txt_username").val();
		var email = $("#txt_email").val();
		var password = $("#txt_password").val();
		var repassword = $("#re_password").val();
		$.ajax({
			type:"POST",
			url:"system/data/register.php",
			data:{
				username:username,
				email:email,
				password:password,
				repassword:repassword,
			},success:function(data){
				if (data == "success") {
					Swal.fire({
						title: 'สำเร็จ',
						text: 'สมัครสมาชิกเสร็จสิ้น',
						type: 'success',
					}).then((result)=>{
						window.location.href="./login";
					});
				}else{
					Swal.fire({
						title: 'ผิดพลาด',
						text: data,
						type: 'error',
					});
				}
			}
		});
	});
</script>
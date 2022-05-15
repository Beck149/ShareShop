<div class="bg-top-sh" style="background-image: url(assete/img/bg.png);">
  <div class="container text-center text-white">
    <h1 style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 10px #000;">Sign In</h1>
    <p style="text-shadow: 2px 2px 10px #000;"><a class="text-light" href="home">หน้าแรก</a> <i class="fas fa-chevron-right text-white"></i> <?=$title?></p>
  </div>
</div>
<div class="login-all container mt-5">
	<div class="method-log">
		<div align="center">
			<div class="login-mu">
				<h3 style="margin-bottom: 25px;"><i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ</h3>
			</div>
			<div class="input-user">
				<label for="email_or_user"><h5>ชื่อผู้ใช้ หรือ อีเมล</h5></label>
				<input type="text" name="email_or_user" class="form-control" id="email_or_user" placeholder="Username or Email">
			</div>
			<div class="input-pass">
				<label for="password"><h5>รหัสผ่าน</h5></label>
  
				<input type="password" name="password" class="form-control password" id="password" placeholder="Password">
			</div>
			<div class="pt-4">
			<button class="btn-log" name="login" id="btn_login">เข้าสู่ระบบ</button>
			<p class="pt-4">หากยังไม่มีบัญชี? <a href="./register">สมัครสมาชิก</a></p>
		</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#btn_login").click(function() {
    var user_email = $("#email_or_user").val();
    var pass = $("#password").val();
    $.ajax({
      type:"POST",
      url:"system/data/login.php",
      data:{
        user_email:user_email,
        pass:pass,
      },success:function(data) {
        if(data == "success"){
          Swal.fire({
            title: 'สำเร็จ',
            text: 'ล็อกอินเสร็จสิ้น',
            type: 'success',
          }).then((result)=>{
            window.location.href="profire";
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
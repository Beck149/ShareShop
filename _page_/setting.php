<div class="container">
	<div class="card-setting mt-5">
		<h3 class="title-seting"><i class="fas fa-users-cog"></i> ตั้งค่าความเป็นส่วนตัว</h3>
		<div class="dt-setting">
			<div class="show-user">
				<h4 class="title-user"><i class="fad fa-user-cog"></i> แก้ไขข้อมูลผู้ใช้</h4>
				<div class="input-np">
					<label for="user-edit">แก้ไขชื่อผู้ใช้</label>
					<input type="text" name="user-edit" value="<?=$_SESSION['username']?>" class="form-control user-change" placeholder="Username">
				</div>
				<div class="input-np-df">
					<div class="input-np mt-0">
						<label for="profire-edit">โปรไฟล์</label>
						<input type="text" name="profire-edit" value="<?php profire()?>" class="form-control" placeholder="Profire" disabled>
					</div>
					<div class="input-np mt-0">
						<label for="status-edit">สถานะ</label>
						<input type="text" name="status-edit" value="<?php if ($_SESSION['status'] == "gnr") { ?>General<?php } elseif ($_SESSION['status'] == "vip") { ?>Vip<?php } elseif ($_SESSION['status'] == "admin") { ?>Admin<?php } else { echo "WTFFF!!"; }?>" class="form-control" placeholder="Status" disabled>
					</div>
				</div>
				<div class="input-np mt-0">
					<label for="pass-edit">รหัสผ่านเพื่อยืนยัน</label>
					<input type="password" name="pass-edit" class="form-control pass-change" placeholder="Password">
				</div>
				<div align="center">
					<button class="btn btn-success change_user" id="change_user">ยืนยันการเปลี่ยนแปลง</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#new_pass").click(function() {
		var password = $("#password").val();
		var new_pass = $("#new_password").val();
		var cf_new_pass = $("#confirm_new_password").val();
		$.ajax({
			type:"POST",
			url:"system/data/changepassword.php",
			data:{
				password:password,
				new_pass:new_pass,
				cf_new_pass:cf_new_pass,
			},success:function(data) {
				if (data == "success") {
					Swal.fire({
						title: 'สำเร็จ',
						text: 'เปลี่ยนรหัสผ่านเรียบร้อย',
						type: 'success',
					}).then((result)=>{
						window.location.href="./login";
					});
				} else {
					Swal.fire({
						title: 'ผิดพลาด',
						text: data,
						type: 'error',
					});
				}
			}
		});
	})

	$(".change_user").click(function() {
		var user_c = $(".user-change").val();
		var pass_c = $(".pass-change").val();

		$.ajax({
			type:"POST",
			url:"system/data/changeusername.php",
			data:{
				user_c:user_c,
				pass_c:pass_c,
			},success:function(data) {
				if (data == "success") {
					Swal.fire({
						title: 'สำเร็จ',
						text: 'แก้ไขข้อมูลผู้ใช้เรียบร้อย',
						type: 'success',
					}).then((result)=>{
						window.location.href="./login";
					});
				} else {
					Swal.fire({
						title: 'ผิดพลาด',
						text: data,
						type: 'error',
					});
				}
			}
		})
	})
</script>
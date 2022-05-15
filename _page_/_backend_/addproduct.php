<?php 

function select($value){
	$class = new shopweb;
	$se = $class->product();
	$row = $se->fetch();

	if ($row['pattern'] == $value) {
		echo "selected";
	} else {
		echo "";
	}
}

?>
<div class="card mt-5">
	<div class="card-header bg-dark"></div>
	<h2 class="m-2 text-center">เพิ่มการ์ดสินค้า</h2>
	<hr class="mt-0">
	<div class="container">
		<div class="form-group">
			<label>ชื่อสินค้า</label>
			<input type="text" id="Name" class="form-control" placeholder="ลงชื่อสินค้า" required="" autofocus="">
		</div>
		<div class="form-group">
			<label>ราคาสินค้า</label>
			<input type="number" min="1" id="Price" class="form-control" placeholder="ลงราคาสินค้า" required="">
		</div>
		<div class="form-group">
			<label>คำอธิบายสินค้า</label>
			<textarea type="text" id="Desc" class="form-control" placeholder="ลงคำอธิบายสินค้า" required=""></textarea>
		</div>
		<div class="form-group">
			<label>URL รูปภาพสินค้า</label>
			<input type="text" id="Img" class="form-control" placeholder="ลง URL รูปภาพสินค้า" required="">
		</div>
		<div class="form-group">
			<label>รูปแบบสินค้า</label>
			<br>
			<select class="form-control mt-3" id="pattern" required="">
				<option value="normaltext" <?php select('normaltext') ?>>· ข้อความธรรมดา · (เหมาะสำหรับการส่ง URL หรือข้อความต่างๆ)</option>
				<option value="code" <?php select('code') ?>>· Gift Code / Redeem Code · (เหมาะสำหรับคีย์เกมทั่วๆไป)</option>
				<option value="eml:psw" <?php select('eml:psw') ?>>· Email:Password · (เหมาะสำหรับ Account บนเว็บส่วนใหญ่)</option>
				<option value="usr:psw" <?php select('usr:psw') ?>>· Username:Password · (เหมาะสำหรับ Platform เกมต่างๆเช่น Steam, Garena)</option>
				<option value="usr:eml:psw" <?php select('usr:eml:psw') ?>>· Username:Email:Password · (เหมาะสำหรับ ID Minecraft Migrate)</option>
				<option value="eml:psw:prf:pin" <?php select('eml:psw:prf:pin') ?>>· Email:Password:Profile:Pin · (เหมาะสำหรับ Netflix)</option>
			</select>
		</div>
		<button class="btn btn-success" onclick="addstock()">ยืนยันการเพิ่มการ์ดสินค้า</button>
	</div>
</div>
<script type="text/javascript">
	function addstock() {
		var name = $("#Name").val();
		var price = $("#Price").val();
		var detail = $("#Desc").val();
		var img = $("#Img").val();
		var pattern = $("#pattern").val();
		$.ajax({
			type:"POST",
			url:"system/data/addproduct.php",
			data:{
				name:name,
				price:price,
				detail:detail,
				img:img,
				pattern:pattern,
			},success:function(data){
				if (data=="success") {
					Swal.fire({
						text: 'เพิ่มการ์ดสินค้าสำเร็จ!',
						type: 'success',
						confirmButtonColor: '#00C851',
						confirmButtonText: 'ตกลง',
						timer: 2500
					}).then((result)=>{
						window.location.href="?p=showproduct";
					});
				}else{
					Swal.fire({
						title: 'ผิดผลาด',
						text: data,
						type: 'error',
						confirmButtonColor: '#00C851',
						confirmButtonText: 'ตกลง',
						timer: 3500
					})
				}
			}
		});
	}
</script>
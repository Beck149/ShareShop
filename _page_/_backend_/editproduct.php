<?php 
if (empty($_GET['id'])) {
	echo "<h1 align='center'>ไม่พบสินค้านี้</h1>";
} else {

	$class = new shopweb;
	$se = $class->selectproduct($_GET['id']);
	$row = $se->fetch();
	$st = $class->showstock($row['id']);
	$stock = $st->fetchColumn();


	$product_img = $row['image'];
	if ($product_img == "") {
		$product_img = "";
	} else {
		$product_img;
	}

	function select($value){
		$class = new shopweb;
		$se = $class->selectproduct($_GET['id']);
		$row = $se->fetch();

		if ($row['pattern'] == $value) {
			echo "selected";
		} else {
			echo "";
		}
	}

	?>
	<div class="card mt-5">
		<div>
			<h2 class="p-3 m-0 " align="center">แก้ไขสินค้า ID : <?=$row['id']?></h2>
			<hr class="m-0">
		</div>
		<div>
			<div class="grid-pded">
				<div class="my-auto" align="center" >
					<img src="<?=$product_img?>" style="height: 500px;width: 500px;border: 2px solid #010101;border-radius: 5px;align-items: center;">
				</div>
				<div class="mx-3">
					<div class="text-left my-5">
						<h4>ชื่อสินค้า</h4>
						<input type="text" name="" placeholder="" value="<?=$row['name']?>" class="form-control" id="name"><br>
						<h4>รูปสินค้า</h4>
						<input type="text" name="" placeholder="" value="<?=$product_img?>" class="form-control" id="pdimg"><br>
						<h4>รายละเอียด</h4>
						<textarea type="text" class="form-control" placeholder="" rows="5" required="" id="myTextarea"><?=$row['detail']?></textarea><br>
						<h4>ราคา</h4>
						<input type="number" min="1" class="form-control" value="<?=$row['price']?>" id="price"><br>
						<h4>จำนวนสินค้า</h4>
						<div class="d-flex">
							<input type="number" class="form-control rounded-0" value="<?=$stock?>" disabled>
							<a href="?p=showstock&id=<?=$row['id']?>" class="btn btn-dark w-25 m-0 rounded-0"><i class="text-white fad fa-cogs"></i></a>
						</div>
						<br>	
						<h4>รูปแบบสินค้า</h4>
						<select class="form-control mt-3" id="pattern" required="">
							<option value="normaltext" <?php select('normaltext') ?>>· ข้อความธรรมดา · (เหมาะสำหรับการส่ง URL หรือข้อความต่างๆ)</option>
							<option value="code" <?php select('code') ?>>· Gift Code / Redeem Code · (เหมาะสำหรับคีย์เกมทั่วๆไป)</option>
							<option value="eml:psw" <?php select('eml:psw') ?>>· Email:Password · (เหมาะสำหรับ Account บนเว็บส่วนใหญ่)</option>
							<option value="usr:psw" <?php select('usr:psw') ?>>· Username:Password · (เหมาะสำหรับ Platform เกมต่างๆเช่น Steam, Garena)</option>
							<option value="usr:eml:psw" <?php select('usr:eml:psw') ?>>· Username:Email:Password · (เหมาะสำหรับ ID Minecraft Migrate)</option>
							<option value="eml:psw:prf:pin" <?php select('eml:psw:prf:pin') ?>>· Email:Password:Profile:Pin · (เหมาะสำหรับ Netflix)</option>
						</select>
					</div>
					<div class="btn-group w-100" role="group">
						<button type="button" class="btn btn-success" onclick="con_editpd(<?=$row['id']?>)">ยืนยันการเปลี่ยนแปลง</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<script type="text/javascript">
	function con_editpd(id) {
		var name = $("#name").val();
		var img = $("#pdimg").val();
		var detail = $("#myTextarea").val();
		var price = $("#price").val();
		var pattern = $("#pattern").val();

		$.ajax({
			type:'POST',
			url:'system/data/editproduct.php',
			data:{
				id:id,
				name:name,
				img:img,
				detail:detail,
				price:price,
				pattern:pattern,
			},success:function(data) {
				if (data == "success") {
					Swal.fire({
						title: 'สำเร็จ',
						text: 'แก้ไขสินค้าที่' + id + 'เรียบร้อย',
						type: 'success',
					}).then((result)=>{
						window.location.href="?p=showproduct";
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
	}
</script>
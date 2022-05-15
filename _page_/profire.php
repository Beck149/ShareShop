<?php 
$class = new shopweb;
$num = $class->countmyproduct();
$numpd = $num->fetchColumn();
?>
<div class="bg-top-sh" style="background-image: url(assete/img/bg.png);">
	<div class="container text-center text-white">
		<h1 style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 10px #000;">MY HOME</h1>
		<p style="text-shadow: 2px 2px 10px #000;"><a class="text-light" href="home">หน้าแรก</a> <i class="fas fa-chevron-right text-white"></i> <?=$title?></p>
	</div>
</div>
<?php if (isset($_GET['NewProduct'])) { ?>
	<div class="container">
		<div class="alert alert-dismissible bg-danger text-white mt-5">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong><i class="fad fa-exclamation-triangle"></i> แจ้งเตือน !!! </strong>คุณได้ทำการซื้อสินค้ามาใหม่ <a class="text-white" href="#history"><u style=" font-weight: 600;">เช็คสินค้า</u></a>

		</div>
	</div>
<?php } ?>
<div class="container">
	<div class="card mt-5">
	<div class="card-header bg-dark"></div>
	<h2 align="center" style="padding: 10px;"><i class="fad fa-user-circle"></i> ข้อมูลสมาชิก</h2>
	<hr class="mt-0">
	<div class="card-gird">
		<div class="card-profire">
			<a class="edit-prodit" href="./editimageprofire"><i class="fas fa-edit"></i> แก้ไขโปรไฟล์</a>
			<img src="https://minotar.net/avatar/<?php profire()?>" class="img-profire">
		</div>
		<div class="detail-profire">
			<p class="f-profire pl-4"> ชื่อผู้ใช้ : <?=$_SESSION['username']?></p>
			<p class="f-profire pl-4"> สถานะ : <?php if ($_SESSION['status'] == "gnr") { ?>
				ผู้ใช้งานทั่วไป
			<?php } elseif ($_SESSION['status'] == "admin") { ?>
				ผู้ดูแลระบบ
			<?php } else { echo "WTFFF!!"; }?>

		</p>
		<p class="f-profire pl-4"> ยอดเงิน : <?=point()?> บาท</p>
		<p class="f-profire pl-4"> รูปโปรไฟล์ : <?=profire()?></p>
		<p class="f-profire pl-4"> วัน - เวลา เริ่มใช้งาน : <?=date_()?></p>
		<input type="text" name="" value="dewfwefewf" style="display: none;">
		<a class="f-profire-st" href="./setting"><i class="fas fa-cog"></i> ความเป็นส่วนตัว</a>	
	</div>
</div>
<?php 
$stock = $class->myshop();
$result = $stock->fetchAll();
$i = 1;

?>
<div id="history"></div>
<div style="padding: 20px; padding-top: 0px;">
	<div class="box-mh">
		<h4 class="m-0 mt-2" align="left"><i class="fas fa-history"></i> ประวัติการทำรายการ</h4>
		<hr class="mb-0">
		<p class="m-0 text-right">จำนวนการซื้อทั้งหมด : <?=$numpd?> ชิ้น</p>
		<div class="table-responsive" style="overflow-y: scroll;height: 200px;">
			<table class="w-100 text-center">
				<tr>
					<th>ที่</th><th>รายการ</th><th>จำนวน</th><th>ข้อความ</th><th>เวลา</th>
				</tr>
				<?php if ($numpd == 0) { ?>
					<td colspan="5">
						<h5 class="m-0">ไม่มีประวัติการซื้อสินค้า</h5>
					</td>
				<?php } else {
					foreach ($result as $row) {
						$qProductMeta = $class->dsdsd($row['type']);
						$resultProductMeta = $qProductMeta->fetchAll();
						foreach($resultProductMeta as $data)
						{
							$product_name = $data['name'];
							$product_price = $data['price'] . " บาท";
						}
						?>
						<tr>
							<td><?=$i?></td><td><?=$product_name?></td><td><?=$product_price	?></td><td style="text-align:left;"> <?=$row['contents']?> </td><td><?=$row['date']?></td>
						</tr>
						<?php
						$i++;
					} 
				}
				?>
			</table>
		</div>
	</div>
</div>
</div>
</div>
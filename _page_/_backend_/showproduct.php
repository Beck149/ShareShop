<?php
$class = new shopweb;
$q = $class->product();
$result = $q->fetchAll();
$showt = $class->countproduct();
$count = $showt->fetchColumn();
?>
<div class="card mt-5">
	<div class="card-header bg-dark"></div>
	<div class="m-2 d-flex border-bottom-2">
		<h2 class="my-auto"><i class="fad fa-shopping-cart"></i> จัดการสินค้า</h2>
		<p class="pl-3 my-auto">จำนวนสินค้าทั้งหมด : <?php echo $count; ?></p>
		<div class="ml-auto mr-3">
			<a class="btn btn-dark" href="?p=addproduct"><i class="fas fa-plus text-white"></i></a>
		</div>
	</div>
	<hr class="m-0">
	<div>
		
		<h4 class="float-right mr-3 mb-5"></h4>	
	</div>
	<div class="container" align="center">	
		<?php 
		
		foreach($result as $row){
			$product_img = $row['image'];
			if ($product_img == "") {
				$product_img = "";
			} else {
				$product_img;
			}
			$st = $class->showstock($row['id']);
			$stock = $st->fetchColumn();
			?>
			<div class="grid-pded">
				<div class="m-2">
					<img src="<?=$product_img?>" class="img-pded">
				</div>
				<div class="mx-3">
					<h3>สินค้า ID : <?=$row['id']?></h3>
					<div class="text-left my-5">
						<h3>ชื่อสินค้า : <?=$row['name']?></h3>
						<hr>
						<h5>รายละเอียด </h5>
						<p class="text-muted"><?=$row['detail']?></p>
						<hr>
						<h5>ราคา : <?=$row['price']?></h5>
						<h5>จำนวนสินค้า : <?=$stock?></h5>
						<hr>
						<h5>รูปแบบสินค้า : <?php if ($row['pattern'] == 'normaltext') {
							echo "· ข้อความธรรมดา · (เหมาะสำหรับการส่ง URL หรือข้อความต่างๆ)";
						} elseif ($row['pattern'] == 'code') {
							echo "· Gift Code / Redeem Code · (เหมาะสำหรับคีย์เกมทั่วๆไป)";
						} elseif ($row['pattern'] == 'eml:psw') {
							echo "· Email:Password · (เหมาะสำหรับ Account บนเว็บส่วนใหญ่)";
						} elseif ($row['pattern'] == 'usr:psw') {
							echo "· Username:Password · (เหมาะสำหรับ Platform เกมต่างๆเช่น Steam, Garena)";
						} elseif ($row['pattern'] == 'usr:eml:psw') {
							echo "· Username:Email:Password · (เหมาะสำหรับ ID Minecraft Migrate)";
						} elseif ($row['pattern'] == 'eml:psw:prf:pin') {
							echo "· Email:Password:Profile:Pin · (เหมาะสำหรับ Netflix)";
						} ?>
					</h5>
					<hr>
				</div>
				<div class="btn-group w-100" role="group">
					<a href="?p=editproduct&id=<?=$row['id']?>" type="button" class="btn btn-warning" onclick=""><i class="fad fa-cogs"></i></a>
					<button type="button" class="btn btn-danger" onclick="deleteproduct(<?=$row['id']?>)"><i class="fad fa-trash"></i></button>
				</div>
			</div>
		</div>
		<hr>
		<!--<button class="btn btn-success rounded-0 text-white"><i class="fad fa-check-circle"></i> ดูสินค้าทั้งหมด...</button>	-->
		<?php 
	}
	?>
</div>
</div>

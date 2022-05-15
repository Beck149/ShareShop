<div class="bg-top-sh" style="background-image: url(assete/img/bg.png);">
	<div class="container text-center text-white">
		<h1 style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 10px #000;">SHOP</h1>
		<p style="text-shadow: 2px 2px 10px #000;"><a class="text-light" href="home">หน้าแรก</a> <i class="fas fa-chevron-right text-white"></i> <?=$title?></p>
	</div>
</div>

	<div class="container">
		<div class="alert alert-dismissible bg-danger text-white mt-5">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong><i class="fad fa-exclamation-triangle"></i> แจ้งเตือน !!! </strong>ราคาสินค้าเปลี่ยนได้ตลอดเวลา

		</div>
		<!--div class="alert alert-dismissible bg-danger text-white mt-5">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong><i class="fad fa-exclamation-triangle"></i> แจ้งเตือน !!! </strong>โปรดอ่านรายละเอียดให้ครบก่อนสั่งซื้อ

		</div-->
	</div>

<section>
	<div class="py-4 container">
		<div class="shop-all">
			<?php 
			$class = new shopweb;
			$q = $class->product();
			$result = $q->fetchAll();

			foreach($result as $row) {
				$product_id = $row['id'];
				$product_name = $row['name'];
				$product_img = $row['image'];
				$product_price = $row['price'];
				$product_detail = $row['detail'];
				$stock_price = $product_price ." ฿";
				$button_text = '??';
				$stock_text = '??';
				$showt = $class->showstock($product_id);
				$result = $showt->fetchColumn();
				if ($result > 0) {
					$stock_text = "<p class='ml-auto'>".$result." ชิ้น</p>";
				}else{
					$stock_text ="<p class='ml-auto text-danger'>ไม่มีสินค้าในสต็อค</p>";
				}
				if ($product_img == "") {
					$product_img = "";
				} else {
					$product_img;
				}

				echo <<<EOD

				<div class="card-shop">
				<div class="img-shop">
				<img src="$product_img">
				</div>
				<div class="text-card-shop">
				<h5 class="text-center" style="margin: 10px;margin-top: 0px;">$product_name</h5>
				<hr class="grey">
				<div class="text-group mx-2">
				<p>$stock_price</p>
				$stock_text</p>
				</div>
				<div class="d-flex">
				<a href="product?product=$product_id"><button class="btn btn-block btn-danger show-dtpd"><i class="fas fa-shopping-cart text-white"></i> สั่งซื้อสินค้า</button></a>
				</div>
				</div>
				</div>

EOD;
			}
			?>
		</div>
	</div>
</section>
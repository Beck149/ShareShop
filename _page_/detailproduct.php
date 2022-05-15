<div class="bg-top-sh" style="background-image: url(/assete/img/bg.png);">
	<div class="container text-center text-white">
		<h1 style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 10px #000;">PRODUCT</h1>
		<p style="text-shadow: 2px 2px 10px #000;"><a class="text-light" href="home">หน้าแรก</a> <i class="fas fa-chevron-right text-white"></i> <?=$title?> 
	</p>
</div>
</div>
<div class="container">
	<div class="card-pd-set">
		<div class="card w-100">
			<div class="card-body">
				<?php 
				if (empty($_GET['product'])) {
					echo "<h3 align='center'>ไม่พบสินค้านี้</h3>";
				}else{
					$class = new shopweb;
					$show = $class->modal_purchase($_GET['product']);
					if ($show->rowCount() > 0) {
						$result = $show->fetchAll();
						foreach($result as $row){
							$product_id = $row['id'];
							$product_name = $row['name'];
							$product_desc = $row['detail'];
							$product_img = $row['image'];
							$product_price = $row['price'];
							$product_patt = $row['pattern'];
							$sdsd = $class->showstock($product_id);
							$result = $sdsd->fetchColumn();
							if ($result > 0) {
								$stock_text = $result." ชิ้น";
							}else{
								$stock_text ="ไม่มีสินค้าในสต็อค";
							}
							if ($product_img == "") {
								$product_img = "/assete/img/noitem.jpg";
							} else {
								$product_img;
							}
							echo <<<EOD

							<div class="product-grid">
							<img src="$product_img" class="img-pd" height="">
							<div class="d-block pl-4 pt-5">
							<h3>$product_name</h3>
							<hr class="text-dark">
							<h5 class="mt-3">ราคา : $product_price</h5>
							<h5 class="mt-3">จำนวนสินค้า : $stock_text</h5>
							<hr>
							<h5 class="mt-3">รายละเอียดสินค้า</h5>
							<p class="text-muted">$product_desc</p>
							<hr>
							<button type="button" class="btn btn-dark w-100" onclick="ProcessPurchase($product_id)">ชื้อสินค้า</button>
							</div>
EOD;

						}
					}else{
						echo "<h1 align='center'>ไม่พบสินค้านี้</h1>";
					}
				}

				?>
			</div>
		</div>
	</div>
</div>	
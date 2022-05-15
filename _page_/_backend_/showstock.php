<?php 
if (isset($_GET['b'])) { ?>
	<div class="card mt-5">
		<div class="card-header bg-dark"></div>
		<div class="d-flex my-2">
			<h2 class="ml-4 mb-0 my-auto">จัดการสต๊อก : ทั้งหมด</h2>	
		</div>
		<hr class="mt-0">
		<div class="ml-auto d-flex mr-3">
			<a href="?p=showstock&id=<?=$_GET['b']?>" class="switch mx-2">
				<input type="checkbox" checked="">
				<span class="slider round"></span>
			</a>
			<h5>โชว์สต๊อกสินค้าทั้งหมด</h5>
		</div>
		<div class="mx-5">
			<div class="sdsdsd">
				<table id="stock" class="display" style="width: 100%;">
					<thead class="thead-dark">
						<tr align="center" >
							<th scope="col">เลขสต๊อกที่</th>
							<th scope="col">ประเภท (ID)</th>
							<th scope="col">ชื่อผู้สั่งซื้อ</th>
							<th scope="col">วันที่ถูกซื้อ</th>
							<th scope="col">จัดการ</th>
						</tr>
					</thead>
					<?php 
					$class = new shopweb;
					$stock = $class->selectstock();
					$result = $stock->fetchAll();
					foreach ($result as $row) {
						$qProductMeta = $class->dsdsd($row['type']);
						$resultProductMeta = $qProductMeta->fetchAll();
						foreach($resultProductMeta as $data)
						{
							$product_name = $data['name'];
						}

						if (empty($row['owner'])) {
							$row['owner'] = 'ไม่มีเจ้าของ';
						}
						if (empty($row['date'])) {
							$row['date'] = 'ยังไม่ถูกซื้อ';
						}
						echo '<tr align="center"><th scope="row">'.$row['id'].'</th><td>'.$product_name.' ('.$row['type'].')' .'</td><td>'.$row['owner'].'</td><td>'.$row['date'].'</td><td><a class="btn btn-sm btn-block btn-danger" href="?p=editstock&id='.$row['id'].'">Edit/Delete</a></td></tr>';
					}
					?>
				</table>
			</div>
		</div>
		<hr>
	</div>
</div>
<?php } else if (empty($_GET['id'])) {
	echo "<h1 align='center'>ไม่มีสต๊อกนี้</h1>";
}else{?>
	<div class="card mt-5">
		<div class="card-header bg-dark"></div>
		<div class="d-flex">
			<h2 class="ml-4 mb-0 my-auto">จัดการสต๊อก ID : <?=$_GET['id']?></h2>
			<div class="ml-auto mr-3">
				<a href="?p=addstock&type=<?=$_GET['id']?>" class="btn btn-dark"><i class="fas fa-plus text-white"></i></a>
			</div>
		</div>
		<hr class="mt-0">
		<div class="ml-auto d-flex mr-3">
			<a href="?p=showstock&b=<?=$_GET['id']?>" class="switch mx-2">
				<input type="checkbox">
				<span class="slider round"></span>
			</a>
			<h5>โชว์สต๊อกสินค้าทั้งหมด</h5>
		</div>
		<div class="mx-5">
			<div class="sdsdsd">
				<table id="stock" class="display" style="width: 100%;">
					<thead class="thead-dark">
						<tr align="center" >
							<th scope="col">เลขสต๊อกที่</th>
							<th scope="col">ประเภท</th>
							<th scope="col">ชื่อผู้สั่งซื้อ</th>
							<th scope="col">วันที่ถูกซื้อ</th>
							<th scope="col">จัดการ</th>
						</tr>
					</thead>
					<?php 
					$class = new shopweb;
					$stock = $class->selectstockid($_GET['id']);
					$result = $stock->fetchAll();
					foreach ($result as $row) {
						$qProductMeta = $class->dsdsd($row['type']);
						$resultProductMeta = $qProductMeta->fetchAll();
						foreach($resultProductMeta as $data)
						{
							$product_name = $data['name'];
						}

						if (empty($row['owner'])) {
							$row['owner'] = 'ไม่มีเจ้าของ';
						}
						if (empty($row['date'])) {
							$row['date'] = 'ยังไม่ถูกซื้อ';
						}
						echo '<tr align="center"><th scope="row">'.$row['id'].'</th><td>'.$product_name.'</td><td>'.$row['owner'].'</td><td>'.$row['date'].'</td><td><a class="btn btn-sm btn-block btn-danger" href="?p=editstock&id='.$row['id'].'">Edit/Delete</a></td></tr>';
					}
					?>
				</table>
			</div>
		</div>
		<hr>
	</div>
</div>
<?php } ?>

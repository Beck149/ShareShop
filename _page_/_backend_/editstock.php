<?php
if (empty($_GET['id'])) {
	echo "<h2 align='center'>ไม่พบสต๊อกนี้</h2>";
} else {
	$class = new shopweb;
	$stock = $class->shopshowid($_GET['id']);
	$result = $stock->fetchAll();
	?>
	<div class="card mt-5">		<div class="card-header bg-dark"></div>
	<h2 class="m-0" align="center">แก้ไขสต๊อก ID : <?=$_GET['id']?></h2>
	<hr class="mt-0">
	<div class="form-group">
		<?php 
		foreach ($result as $row) {
			$qProductMeta = $class->dsdsd($row['type']);
			$resultProductMeta = $qProductMeta->fetchAll();
			foreach($resultProductMeta as $data)
			{
				$product_name = $data['name'];
			}

			$status = "";

			if (empty($row['owner'])) {
				$row['owner'] = 'ไม่มีเจ้าของ';
			} else {
				$status = "<h5 class='text-danger text-center'>* สินค้าชิ้นนี้มีเจ้าของแล้ว หากจะลบข้อมูลการซื้อของผู้ใช้จะหาย!!</h5>";
			}

			if (empty($row['date'])) {
				$row['date'] = 'ยังไม่ถูกซื้อ';
			}
			?>
			<div class="form-group">
				<div class="container">
					<?=$status?>
					<label>ชื่อ</label>
					<input type="" name="" value="<?=$product_name?>" class="form-control" disabled><br>
					<label>สินค้า</label>
					<textarea id="content" type="text" class="form-control" rows="4"><?=$row['contents']?></textarea><br>
					<label>เจ้าของ</label>
					<input type="" name="" value="<?=$row['owner']?>" class="form-control" disabled><br>
					<label>เวลา</label>
					<input type="" name="" value="<?=$row['date']?>" class="form-control" disabled><br>
					<div class="d-flex ">
						<button class="btn btn-success" onclick="editstock(<?=$row['id']?>)"><i class="fas fa-check-circle text-white"></i> ยืนยันการแก้ไข</button>
						<button class="btn btn-danger" onclick="deletestock(<?=$row['id']?>)"><i class="fad fa-trash"></i> ลบสินค้าชิ้นนี้</button>
					</div>
				</div>
			</div>
		<?php }
	} ?>
</div>
</div>
<script type="text/javascript">

	function editstock(id) {
		var content = $("#content").val();

		$.ajax({
			type:'POST',
			url:'system/data/editstock.php',
			data:{
				id:id,
				content:content,
			},success:function(data) {
				if (data == "success") {
					Swal.fire({
						title: 'สำเร็จ',
						text: 'แก้ไขสต๊อกที่ ' + id + ' เรียบร้อย',
						type: 'success',
					}).then((result)=>{
						window.location.href="?p=showstock&id=" + <?=$row['type']?>;
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

	function deletestock(id) {
		Swal.fire({
			title: 'คุณแน่ใจมั้ย?',
			text: 'คุณต้องการลบสต๊อกที่ '+ id + ' ใช่มั้ย!',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#00C851',
			cancelButtonColor: '#d33',
			cancelButtonText: 'ไม่',
			confirmButtonText: 'ใช่'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					type:'POST',
					url:"../system/data/deletestock.php",
					data:{
						id:id,
					},success:function(data){
						if (data == "success") {
							Swal.fire({
								text: 'ลบสต๊อกที่ '+ id + ' สำเร็จ',
								type: 'success',
								timer: 2500, 
								confirmButtonColor: '#00C851',
								confirmButtonText: 'ตกลง'
							}).then((result)=>{
								window.location.href="?p=showstock&id=" + <?=$row['type']?>;
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
			}
		});
	}
</script>



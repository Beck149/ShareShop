<?php 
if (empty($_GET['type'])) {
	echo "<h1 align='center'>ไม่พบสินค้า</h1>";
}else {
	$class = new shopweb;
	$stock = $class->selectstock();
	$result = $stock->fetch();
	$qProductMeta = $class->dsdsd($_GET['type']);
	$resultProductMeta = $qProductMeta->fetch();
	?>
	<div class="card mt-5">
		<div class="card-header bg-dark"></div>
		<h2 class="mt-2" align="center">เพิ่มสต๊อกสินค้า : <?=$resultProductMeta['name']?></h2>
		<hr class="mt-0">
		<div class="container">
			<label></label>
			<textarea id="inputItemData" placeholder="ลงสินค้าที่ต้องการจะส่งให้กับลูกค้า..." class="form-control" rows="5"></textarea>
			<label class="mt-2 text-muted">รู้หรือไม่! ท่านสามารถเพิ่มสต๊อคหลายๆชิ้นได้โดยการพิมพ์ว่า &lt;batch&gt; ไว้ในบรรทัดแรก และบรรทัดที่เหลือให้ใส่ข้อมูลที่จะส่งให้ลูกค้า <a href="#" onclick="$('#inputItemData').val('<batch>\n' + $('#inputItemData').val()); $('#inputItemData').focus();">ตัวอย่าง</a></label>
				<button class="btn btn-success btn-block" onclick="addstock(<?=$_GET['type']?>)">เพิ่มสต๊อก</button>
			</div>
			<hr>
		</div>
	<?php } ?>
	<script type="text/javascript">
		function addstock(id) {
			var inputItemData = $("#inputItemData").val();
			$.ajax({
				type:"POST",
				url:"../system/data/addstock.php",
				data:{
					id:id,
					inputItemData:inputItemData,
				},success:function(data){
					if (data=="success") {
						Swal.fire({
							text: 'เพิ่มสต๊อกสำเร็จ!',
							type: 'success',
							confirmButtonColor: '#00C851',
							confirmButtonText: 'ตกลง',
							timer: 2500
						}).then((result)=>{
							window.location.href="?p=editproduct&id=" + id;
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
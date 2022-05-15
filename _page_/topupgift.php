<div class="bg-top-sh" style="background-image: url(assete/img/bg.png);">
	<div class="container text-center text-white">
		<h1 style="font-family: 'Poppins', sans-serif; color:#000;">TOPUP</h1>
		<p style="text-shadow: 2px 2px 10px #000;"><a class="text-light" href="home">หน้าแรก</a> <i class="fas fa-chevron-right text-white"></i> <?=$title?></p>
	</div>
</div>
<div class="container mt-5">
	<div class="card set-lo" style="height: auto;">
		<div class="container p-5">
			<h1 class="mb-5" align="center"><i class="fad fa-donate"></i> เติมเงิน</h1>
			<div class="form-group" style="margin-bottom: 0px;">
				<label for="topup">ช่องทางการชำระเงิน</label>
				<a onclick="topup()">
					<div class="card-header ch-topup w-100" id="topup" style="padding: 0px;">
						<div class="select-topup">
							<img src="/assete/img/angpao.png" class="img-topup">
							<h5 class="t-set">True Wallet Gift</h5>
							<p class="t-set">เติมเงินผ่านอั่งเปาแอปทรูมันนี่วอเล็ต</p>
						</div>
					</div>
				</a>
			</div>
			<div class="topup-detail " id="topup-detail">
				<div class="op-topup">
					<a href="../topup/truewalletgift" class="detail-topup">
						<img src="/assete/img/angpao.png" class="img-topup">
						<h5 class="t-set">True Wallet Gift</h5>
						<p class="t-set">เติมเงินผ่านอั่งเปาแอปทรูมันนี่วอเล็ต</p>
					</a>
				</div>
			</div>
			<div class="mt-2">
				<div class="bg-topupgift topup-grid text-dark">
					<img src="/assete/img/angpao2.png" class="img-gift mt-3 mb-3 mx-auto">
					<div class="d-block text-left ml-5"> 
						<h2 class="mt-3 text-white">ระบบเติมเงิน True Wallet อั่งเปา</h2>
						<p>ระบบเติมเงินอัตโนมัติ</p>
						<p class="">เติมเงิน 24 ชั่วโมง รวดเร็ว</p>
						<label class="lb-ip mt-3 "><h4>กรอกลิ้งอั่งเปา</h4></label><br>
						<input type="text" id="topupgift" class="form-control w-75"placeholder="วางลิ้งอั่งเปาที่นี่..."><br>
						<button class="btn btn-danger" style="width: 70%;" id="topupclick">ส่งลิ้งในการเติมเงิน</button>
					</div>
				</div>
				<button class="btn btn-dark w-100 m-0" style="border-radius: 0px;" data-toggle="modal" data-target="#howtotopup">ตัวอย่างและขั้นตอน</button>
			</div>
		</div>
	</div>
</div>


<div class="modal" id="howtotopup">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><i class="fas fa-exclamation-circle"></i> ขั้นตอนการใช้งาน</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="clearfix"></div>
					<div class="col-12 col-lg-6 mt-3 mb-2 text-center">
						<p class="">1 . เปิดแอพทรูมันนี่วอลเล็ท และกด ดูทั้งหมด</p>
						<img src="https://media.discordapp.net/attachments/852846716939927562/876665737421410374/unknown.png" alt="ขั้นตอน 1 เปิดแอพทรูมันนี่วอลเล็ท" style="width: 350px;border: 1px solid #ddd;">
					</div>
					<div class="col-12 col-lg-6 mt-3 mb-2 text-center">
						<p class="">2 . และเลื่อนลงมาและจะเจอ ส่งซองของขวัญ</p>
						<img src="https://media.discordapp.net/attachments/852846716939927562/876665838730629170/unknown.png" alt="ขั้นตอน 2 กดส่งซองของขวัญ" style="width: 350px;border: 1px solid #ddd;">
					</div>
					<div class="col-12 col-lg-6 mt-3 mb-2 text-center">
						<p class="">3 . กรอกจำนวนเงิน และ เลือกตามตัวอย่าง</p>
						<img src="https://media.discordapp.net/attachments/852846716939927562/876666166351892510/unknown.png" alt="ขั้นตอน 3 ช่อง 1 กรอกจำนวนเงิน" style="width: 350px;border: 1px solid #ddd;">
					</div>
					<div class="col-12 col-lg-6 mt-3 mb-2 text-center">
						<p class="">4 . กดปุ่มยืนยัน</p>
						<img src="https://media.discordapp.net/attachments/852846716939927562/876666277677105162/unknown.png" alt="ขั้นตอน 4 กดปุ่มยืนยัน" style="width: 350px;border: 1px solid #ddd;">
					</div>
					<div class="col-12 col-lg-6 mt-3 mb-2 text-center">
						<p class="">5 . กดคักลอกลิ้งมาใส่ที่หน้าเว็บและกดเติมเงิน</p>
						<img src="https://media.discordapp.net/attachments/852846716939927562/876666363781980160/unknown.png" alt="ขั้นตอน 5 กดคักลอกลิ้งมาใส่ที่หน้าเว็บและกดเติมเงิน" style="width: 350px;border: 1px solid #ddd;">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-block" data-dismiss="modal">ปิด</button>
			</div>

		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	$("#topupclick").click(function() {
		var topupgift = $("#topupgift").val();
		var phone = "<?php echo $num_phone ?>";

		$.ajax({
			type:'POST',
			url:'../system/data/topupgift.php',
			data:{
				topupgift:topupgift,
				phone:phone,
			},success:function(data) {
				var obj = JSON.parse(data);
				//console.log(obj);
				if (obj.status == "success") {
					Swal.fire({
						title: 'สำเร็จ',
						text: obj.info + obj.amount_baht,
						type: 'success',
					}).then((result)=>{
						window.location.href="../home";
					});
				}else{
					Swal.fire({
						title: 'ผิดพลาด',
						text: obj.info,
						type: 'error',
					});
				}
			}
		});
	});
</script>
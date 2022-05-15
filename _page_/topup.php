<div class="bg-top-sh" style="background-image: url(assete/img/bg.png);">
	<div class="container text-center text-white">
		<h1 style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 10px #000;">TOPUP</h1>
		<p style="text-shadow: 2px 2px 10px #000;"><a class="text-light" href="home">หน้าแรก</a> <i class="fas fa-chevron-right text-white"></i> <?=$title?></p>
	</div>
</div>
<div class="container mt-5">
	<div class="card set-lo" style="height: 600px;">
		<div class="container p-5">
			<h1 class="mb-5" align="center"><i class="fad fa-donate"></i> เติมเงิน</h1>
			<div class="form-group" style="margin-bottom: 0px;">
				<label for="topup">ช่องทางการชำระเงิน</label>
				<a onclick="settopup()">
					<div class="card-header ch-topup w-100" id="topup">
						<p style="text-align: left;margin: 0px;font-weight: bold;">โปรดเลือกช่องทางการชำระเงิน</p>
						<span class="ar-down-topup">
							<i class="fas fa-sort-down" id="ar-set"></i>
						</span>
					</div>
				</a>
			</div>
			<div class="topup-detail" id="topup-detail">
				<div class="op-topup">
					<a href="../topup/truewalletgift" class="detail-topup">
						<img src="/assete/img/angpao.png" class="img-topup">
						<h5 class="t-set">True Wallet Gift</h5>
						<p class="t-set">เติมเงินผ่านอั่งเปาแอปทรูมันนี่วอเล็ต</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
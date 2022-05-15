<?php 
$class = new shopweb;
$counter = $class->counter();
$user = $class->countuser();
$users = $user->fetchColumn();
$npro = $class->shownumproduct();
$npros = $npro->fetchColumn();
$dsd = $class->sum_history_topup();
$sumt = $dsd->fetchColumn();

if ($sumt == "") {
	$sumt = "0";
}else{
	$sumt;
}
?>
<style type="text/css">
	.card {
		margin-bottom: 10px;
	}
</style>
<div class="card mt-5">
	<div class="card-header bg-dark"></div>
	<h2 class="mt-2 ml-3"><i class="fad fa-ballot"></i> จัดการแดรชบอร์ด</h2>
	<hr class="m-0">
	<div class="px-5 pb-5 pt-2">
		<div class="set-grid-fn">
			<div>
				<div class="card" align="center">
				<button onclick="notifyMe()">แจ้งเตือน!</button>
					<div class="card-header bg-dark"></div>
					<h4 class="m-0 mt-3" style="font-weight: 600;"><i class="fad fa-chart-line"></i> จำนวนผู้เข้าชมเว็บ</h4>
					<div class="px-3 pb-3">
						<hr class="">
						<div class="row">
							<div class="col">วันนี้</div>
							<div class="col"><?=$counter['today']?> คน</div>
						</div>
						<hr class="">
						<div class="row">
							<div class="col">เมื่อวานนี้</div>
							<div class="col"><?=$counter['yesterday']?> ครั้ง</div>
						</div>
						<hr class="">
						<div class="row">
							<div class="col">เดือนนี้</div>
							<div class="col"><?=$counter['Tmonth']?> ครั้ง</div>
						</div>
						<hr class="">
						<div class="row">
							<div class="col">เดือนที่แล้ว</div>
							<div class="col"><?=$counter['Lmonth']?> ครั้ง</div>
						</div>
						<hr class="">
						<div class="row">
							<div class="col">ทั้งหมด</div>
							<div class="col"><?=$counter['All']?> ครั้ง</div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div class="card">
					<div class="card-header bg-dark"></div>
					<h4 class="mt-3" align="center" style="font-weight: 600;"><i class="fad fa-users"></i> จำนวนสมาชิก</h4>
					<div class="px-2 text-center">
						<hr class="m-0">
						<h1><?=$users?> ผู้ใช้</h1>
					</div>
					<a href="?p=showuser">
						<div class="card-footer p-0 text-center text-grey">
							<p class="m-0">แสดงทั้งหมด <i class="fad fa-caret-circle-down"></i></p>
						</div>
					</a>
				</div>
				<div class="card">
					<div class="card-header bg-dark"></div>
					<h4 class="mt-3" align="center" style="font-weight: 600;"><i class="fad fa-wallet"></i> รายได้ทั้งหมด</h4>
					<div class="px-2 text-center">
						<hr class="m-0">
						<h1><?=$sumt?></h1>
					</div>
				</div>
				<div class="card">
					<div class="card-header bg-dark"></div>
					<h4 class="mt-3" align="center" style="font-weight: 600;"><i class="fad fa-shopping-basket"></i> สินค้าทั้งหมด</h4>
					<div class="px-2 text-center">
						<hr class="m-0">
						<h1><?=$npros?> ชิ้น</h1>
					</div>
					<a href="?p=showproduct">
						<div class="card-footer p-0 text-center text-grey">
							<p class="m-0">แสดงทั้งหมด <i class="fad fa-caret-circle-down"></i></p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
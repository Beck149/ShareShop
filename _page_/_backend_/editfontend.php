<div class="card mt-5">
	<div class="card-header bg-dark"></div>
	<div class="d-flex">	
		<h1 class="ml-2 py-2"><i class="fas fa-bookmark"></i> แก้ไขหน้าเว็บ</h1>
		<small class="ml-2 my-auto">| อัพเดทล่าสุดเมื่อ : <?=$date?></small>
	</div>
	<hr class="m-0">
	<div class="set-grid-fn p-5">
		<div class="card pt-2 pl-5 pr-5 pb-5">
			<h2>Logo website</h2>
			<hr>
			<img src="<?=$logo?>" class="mx-auto mt-3" height="200">
			<label for="logoweb" class="mt-4"><h4 class="m-0">กรอกลิ้งรูปภาพ</h4 class="m-0"></label>
				<input type="text" value="<?=$logo?>" placeholder="Url รูป หรือ ตำแหน่งรูป" class="form-control" id="logoweb">
				<button class="btn btn-outline-dark m-0 mt-2 w-75 mx-auto p-0 p-2" onclick="logo()"><h5 class="m-0">เปลี่ยนรูปภาพ</h5></button>
			</div>
			<div class="card pt-2 pl-5 pr-5 pb-5">
				<h2>Fanpage Facebook</h2>
				<hr>
				<div align="center" class="fb-page my-auto" data-href="<?=$fb_page?>" data-tabs="timeline" data-width="300" data-height="70" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="<?=$fb_page?>" class="fb-xfbml-parse-ignore"><a href="<?=$fb_page?>"><?=$namepage?></a></blockquote></div>
				<label for="fb_page" class="mt-4"><h4 class="m-0">กรอกลิ้งเพจเฟซบุ้ค</h4 class="m-0"></label>
					<input type="text" value="" placeholder="ลิ้ง Fanpage Facebook" class="form-control" id="fb_page">
					<button class="btn btn-outline-dark m-0 mt-2 w-75 mx-auto p-0 p-2"><h5 class="m-0" onclick="fanpage()">ยืนยันลิ้ง</h5></button>
				</div>
				<div class="card pt-2 pl-5 pr-5 pb-5">
					<h2>ชื่อเว็บไซต์</h2>
					<hr>
					<label for="nameweb" class="mt-4"><h4 class="m-0">กรอกชื่อเว็บไซต์</h4 class="m-0"></label>
						<input type="text" value="<?=$name?>" placeholder="ชื่อเว็บไซต์" class="form-control" id="nameweb">
						<button class="btn btn-outline-dark m-0 mt-2 w-75 mx-auto p-0 p-2"><h5 class="m-0" onclick="nameweb()">ยืนยันชื่อนี้</h5></button>
					</div>
					<div class="card pt-2 pl-5 pr-5 pb-5">
						<h2>เบอร์มือถือ (เชื่อมกับ Wallet)</h2>
						<hr>
						<label for="phone" class="mt-4"><h4 class="m-0">กรอกเบอร์มือถือ</h4 class="m-0"></label>
							<input type="text" value="<?=$num_phone?>" placeholder="เบอร์มือถือ" class="form-control" id="phone">
							<button class="btn btn-outline-dark m-0 mt-2 w-75 mx-auto p-0 p-2"><h5 class="m-0" onclick="phone_num()">ยืนยันเบอร์นี้</h5></button>
						</div>
						<div class="card pt-2 pl-5 pr-5 pb-5">
							<h2>Email</h2>
							<hr>
							<label for="email" class="mt-4"><h4 class="m-0">กรอก Email</h4 class="m-0"></label>
								<input type="text" value="<?=$email?>" placeholder="Email" class="form-control" id="email">
								<button class="btn btn-outline-dark m-0 mt-2 w-75 mx-auto p-0 p-2"><h5 class="m-0" onclick="email()">ยืนยัน Email</h5></button>
							</div>
							<div class="card pt-2 pl-5 pr-5 pb-5">
								<h2>Line</h2>
								<hr>
								<label for="" class="mt-4"><h4 class="m-0">กรอก @Line</h4 class="m-0"></label>
									<input type="text" value="<?=$line?>" placeholder="@Line" class="form-control" id="line">
									<button class="btn btn-outline-dark m-0 mt-2 w-75 mx-auto p-0 p-2"><h5 class="m-0" onclick="line()">ยืนยัน Line</h5></button>
								</div>
							</div>
						</div>
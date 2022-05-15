function settopup() {
	topup();
	arrow();
}

function topup() {
	var y = document.getElementById("topup-detail");
	if (y.style.display === "block") {
		y.style.display = "none";
	} else {
		y.style.display = "block";
	}
}

function arrow() {
	var x = document.getElementById("topup-detail");
	var element = document.getElementById("ar-set");
	if (x.style.display === "block") {
		element.classList.remove("fa-sort-down");
		element.classList.add("fa-sort-up");
	} else {
		element.classList.remove("fa-sort-up");
		element.classList.add("fa-sort-down");
	}
}

function ProcessPurchase(id) {
	Swal.fire({
		title: 'แน่ใจหรือไม่',
		text: "หากท่านซื้อสินค้าผิดทางเราจะไม่รับผิดชอบใดๆทั้งสิ้น",
		type: 'question',
		showCancelButton: true,
		confirmButtonColor: '#00C851',
		cancelButtonColor: '#d33',
		confirmButtonText: 'ดำเนินการต่อ',
		cancelButtonText: 'ยกเลิก',
		reverseButtons: false,
		allowEscapeKey: false,
		allowEnterKey: false,
		allowOutsideClick: false
	}).then((result) => {
		if (result.value) {
			swal({
				title: 'Processing', 
				text: 'กำลังทำรายการโปรดรอสักครู่...',
				type: 'info',
				showCancelButton: false,
				showConfirmButton: false,
				allowOutsideClick: false,
				allowEscapeKey: false,
				onOpen: () => {
					$.ajax({
						type:"POST",
						url:"system/data/buyproduct.php",
						data:{
							id:id,
						},
					}).done(function(obj){
							//console.log(obj);
							if (obj == 'success') {
								Swal.fire({
									title: 'สำเร็จ!', 
									text: 'ซื้อสินค้าสำเร็จ', 
									type: 'success',
									cancelButtonColor: '#d33',
									confirmButtonColor: '#00C851',
									timer: 1500,
									showCancelButton: false,
									showConfirmButton: false,
									allowOutsideClick: false,
									allowEscapeKey: false
								}).then(
								function() {  window.location.href = './profire?NewProduct'; });
							}else{
								Swal.fire({
									title: 'Error!', 
									text: obj, 
									type: 'error',
									confirmButtonColor: '#00C851',
									timer: 1500,
									showCancelButton: false,
									showConfirmButton: false,
									allowOutsideClick: false,
									allowEscapeKey: false
								})
							}
						}).fail(function(obj){
							console.log(obj);
						});
					}
				});
		} else if (result.dismiss === swal.DismissReason.cancel) {
			swal.close();
		}
	})
}

function logo() {
	var logo = $("#logoweb").val();

	$.ajax({
		type:'POST',
		url:'system/data/editlogo.php',
		data:{
			logo:logo,
		},success:function(data) {
			if (data == "success") {
				Swal.fire({
					title: 'สำเร็จ',
					text: 'เปลี่ยนโลโก้เรียบร้อย',
					type: 'success',
				}).then((result)=>{
					window.location.href="?p=editfontend";
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

function fanpage() {
	var fb_page = $("#fb_page").val();

	$.ajax({
		type:'POST',
		url:'system/data/editfb_page.php',
		data:{
			fb_page:fb_page,
		},success:function(data) {
			if (data == "success") {
				Swal.fire({
					title: 'สำเร็จ',
					text: 'เปลี่ยนเพจเรียบร้อย',
					type: 'success',
				}).then((result)=>{
					window.location.href="?p=editfontend";
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

function nameweb() {
	var nameweb = $("#nameweb").val();

	$.ajax({
		type:'POST',
		url:'system/data/editnameweb.php',
		data:{
			nameweb:nameweb,
		},success:function(data) {
			if (data == "success") {
				Swal.fire({
					title: 'สำเร็จ',
					text: 'เปลี่ยนชื่อเว็บเรียบร้อย',
					type: 'success',
				}).then((result)=>{
					window.location.href="?p=editfontend";
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

function phone_num() {
	var phone = $("#phone").val();

	$.ajax({
		type:'POST',
		url:'system/data/editphone.php',
		data:{
			phone: phone,
		},success:function(data) {
			if (data == "success") {
				Swal.fire({
					title: 'สำเร็จ',
					text: 'เปลี่ยนเบอร์เรียบร้อย',
					type: 'success',
				}).then((result)=>{
					window.location.href="?p=editfontend";
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

function email() {
	var email = $("#email").val();

	$.ajax({
		type:'POST',
		url:'system/data/editemail.php',
		data:{
			email:email,
		},success:function(data) {
			if (data == "success") {
				Swal.fire({
					title: 'สำเร็จ',
					text: 'เปลี่ยนอีเมลเรียบร้อย',
					type: 'success',
				}).then((result)=>{
					window.location.href="?p=editfontend";
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

function line() {
	var line = $("#line").val();

	$.ajax({
		type:'POST',
		url:'system/data/editline.php',
		data:{
			line:line,
		},success:function(data) {
			if (data == "success") {
				Swal.fire({
					title: 'สำเร็จ',
					text: 'เปลี่ยน@ไลน์เรียบร้อย',
					type: 'success',
				}).then((result)=>{
					window.location.href="?p=editfontend";
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

function showprofire() {
	Swal.fire({
		html: '<h3>รูปโปรไฟล์</h3>' +
		'<div class="text-left">' +
		'<label>1) clone1018</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/clone1018" height="150"><br>' +
		'<label>2) LukeHandle</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/LukeHandle" height="150"><br>' +
		'<label>3) lukegb</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/lukegb" height="150"><br>' +
		'<label>4) citricsquid</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/citricsquid" height="150"><br>' +
		'<label>5) KamaIN</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/KamaIN" height="150"><br>' +
		'<label>6) Notch</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/Notch" height="150"><br>' +
		'<label>7) Banxsi</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/Banxsi" height="150"><br>' +
		'<label>8) externo6</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/externo6" height="150"><br>' +
		'<label>9) drupal</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/drupal" height="150"><br>' +
		'<label>10) ez</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/ez" height="150"><br>' +
		'<label>11) clone</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/clone" height="150"><br>' +
		'<label>12) Steve</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/Steve" height="150"><br>' +
		'<label>13) pig</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/pig" height="150"><br>' +
		'<label>14) connor4312</label>' +
		'<img class="p-4" src="https://minotar.net/avatar/connor4312" height="150"><br>' +
		'</div>'
		
	});
}

function deleteproduct(id) {
	Swal.fire({
		title: 'คุณแน่ใจมั้ย?',
		text: 'คุณต้องการลบสินค้า ID : '+ id + ' ใช่มั้ย!',
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#00C851',
		cancelButtonColor: '#d33',
		cancelButtonText: 'ไม่',
		confirmButtonText: 'ใช่'
	}).then((result) => {
		if (result.value) {
			$.ajax({
				type:'POST',
				url:"../system/data/deleteproduct.php",
				data:{
					id:id,
				},success:function(data){
					if (data == "success") {
						Swal.fire({
							text: 'ลบสินค้า ID : '+ id + ' สำเร็จ',
							type: 'success',
							timer: 2500, 
							confirmButtonColor: '#00C851',
							confirmButtonText: 'ตกลง'
						}).then((result)=>{
							window.location.href="?p=showproduct";
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

function example_topup() {
	Swal.fire({
		html: '<h3>ตัวอย่างและขั้นตอน</h3>' +
		'<hr>' +
		'<div class="exp-tp">' +
		'<li>1. เข้าแอพ <b>TrueMoney Wallet</b> แล้วเลื่อนลงไปล่างสุด </li>' +
		'<img src="/assete/img/noitem.jpg" class="img-auto-set">' +
		'<li>2. มองหาหมวด <b> บัตรเติมเงิน &amp; ของขวัญ </b> กดเข้าไปที่ <b> ส่งซองของขวัญ </b></li>' +
		'<img src="/assete/img/noitem.jpg" class="img-auto-set">' +
		'<li>3. ใส่<b> จำนวนเงิน </b>ที่ต้องการเติมในช่อง<b> ยอดที่ต้องการใส่ซอง </b></li>' +
		'<img src="/assete/img/noitem.jpg" class="img-auto-set">' +
		'<li>4. กรอก<b> จำนวนคนที่รับซอง </b>เป็น <b> 1 </b> คน</li>' +
		'<img src="/assete/img/noitem.jpg" class="img-auto-set">' +
		'<li>5. กดปุ่ม <b> "สร้างซองมูลค่ารวม XXXX บาท" </b></li>' +
		'<img src="/assete/img/noitem.jpg" class="img-auto-set">' +
		'<li><li>6. จากนั้น <b> Coppy Link </b> มาใส่ในช่องเติมเงินบนเว็บเรา</li>' +
		'<img src="/assete/img/noitem.jpg" class="img-auto-set">' +
		'<div class="mt-5">' +
		'</div>' +
		'</div>'
	});
}

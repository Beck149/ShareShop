<div class="card mt-5">
	<div class="card-body">
		<h3 class="modal-title text-center">จัดการสมาชิก</h3>
		<hr class="mb-2">
		<div class="modal-body">
			<div class="sdsdsd">
				<table id="stock" class="display" style="width: 100%;">
					<thead class="thead-dark">
						<tr align="center" >
							<th scope="col">ที่</th>
							<th scope="col">ชื่อผู้ใช้</th>
							<th scope="col">อีเมล</th>
							<th scope="col">พ้อย</th>
							<th scope="col">โปรไฟล์</th>
							<th scope="col">สถานะ</th>
							<th scope="col">แก้ไข</th>
						</tr>
					</thead>
					<?php 
					$class = new shopweb;
					$dsd = $class->selectuser();
					$result = $dsd->fetchAll();
					foreach($result as $row){
						if($row['status'] == "admin"){
							$rank = "แอดมิน";
						}elseif($row['status'] == "gnr"){
							$rank = "ผู้ใช้ธรรมดา";
						}
						
						echo '<tr class="text-center"><th scope="row">'.$row['id'].'</th><td>'.$row['username'].'</td><td>'.$row['email'].'</td><td>'.$row['point'].'</td><td><img src="https://minotar.net/avatar/'.$row['profire'].'" height="45"></td><td>'.$rank.'</td><td><a class="btn btn-sm btn-block btn-danger" href="?p=edituser&id='.$row['id'].'">Edit/Delete</a></td></tr>';
					}
					?>
				</table>
			</div>
		</div>
	</div>
</div>
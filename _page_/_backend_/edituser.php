<?php 
if (isset($_GET['id'])) {
  $class = new shopweb;
  $dsd = $class->editselectuser($_GET['id']);
  $row = $dsd->fetch();
  ?>
  <div class="card mt-5">
    <div class="container">
      <div class="p-5" align ="center">
        <h3>แก้ไข ID : <?=$row['id']?></h3>
        <hr>
      </div>
      <div class="gird-edus">
        <div>
          <div class="form-group">
            <label>ชื่อ</label>
            <input type="text" value="<?=$row['username']?>" class="form-control" id="username" required="" autofocus="" disabled>
          </div>
          <div class="form-group">
            <label>อีเมล</label>
            <input type="text" value="<?=$row['email']?>" id="email" class="form-control" required="" disabled>
          </div>
          <div class="form-group">
            <label>พ้อย</label>
            <input type="number" min="1" value="<?=$row['point']?>" id="point" class="form-control" required="">
          </div>
          <div class="form-group">
            <label>สถานะ</label>
            <select class="form-control" id="status" required="">
             <option value="none" disabled="">โปรดเลือกสถานะ</option>
             <option value="admin" <?php if ($row['status'] == "admin") {echo "selected";} ?>>แอดมิน</option>
             <option value="gnr" <?php if ($row['status'] == "gnr") {echo "selected";} ?>>ผู้ใช้ธรรมดา</option>
           </select>
         </div>
       </div>
       <div class="">
        <label><h3>โปรไฟล์</h3></label>
        <img src="https://minotar.net/avatar/<?=$row['profire']?>" class="img-profire">
        <select class="form-control mt-3" id="profire" required="">
         <option value="none" disabled="">โปรดเลือกโปรไฟล์</option>
         <option value="clone1018" <?php if ($row['profire'] == "clone1018") {echo "selected";} ?>>clone1018</option>
         <option value="LukeHandle" <?php if ($row['profire'] == "LukeHandle") {echo "selected";} ?>>LukeHandle</option>
         <option value="connor4312" <?php if ($row['profire'] == "connor4312") {echo "selected";} ?>>connor4312 </option>
         <option value="lukegb"<?php if ($row['profire'] == "lukegb") {echo "selected";} ?>>lukegb</option>
         <option value="citricsquid" <?php if ($row['profire'] == "citricsquid") {echo "selected";} ?>>citricsquid</option>
         <option value="KamaIN" <?php if ($row['profire'] == "KamaIN") {echo "selected";} ?>>KamaIN</option>
         <option value="Notch" <?php if ($row['profire'] == "Notch") {echo "selected";} ?>>Notch</option>
         <option value="Banxsi" <?php if ($row['profire'] == "Banxsi") {echo "selected";} ?>>Banxsi</option>
         <option value="externo6" <?php if ($row['profire'] == "externo6") {echo "selected";} ?>>externo6</option>
         <option value="drupal" <?php if ($row['profire'] == "drupal") {echo "selected";} ?>>drupal</option>
         <option value="ez" <?php if ($row['profire'] == "ez") {echo "selected";} ?>>ez</option>
         <option value="clone" <?php if ($row['profire'] == "clone") {echo "selected";} ?>>clone</option>
         <option value="Steve" <?php if ($row['profire'] == "Steve") {echo "selected";} ?>>Steve</option>
         <option value="pig" <?php if ($row['profire'] == "pig ") {echo "selected";} ?>>pig</option>
       </select>
       <div class="d-flex">
        <p class="text-danger mt-2">* หากไม่รู้รูปโปรไฟล์ *</p>
        <button class="btn btn-sm btn-dark w-25" onclick="showprofire()">รูปโปรไฟล์</button>
      </div>
    </div>
  </div>
  <hr>
  <div class="d-flex">
    <button type="button" class="btn btn-success" onclick="saveedituser(<?=$row['id']?>)"><i class="fas fa-check-circle"></i> บันทึก</button>
    <button type="button" class="btn btn-danger" onclick="deleteuser(<?=$row['id']?>)"><i class="fas fa-trash-alt"></i> ลบ</button>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
  function saveedituser(id) {
    var user = $("#username").val();
    var email = $("#email").val();
    var point = $("#point").val();
    var status = $("#status").val();
    var imgprofire = $("#profire").val();

    $.ajax({
      type:'POST',
      url:'../system/data/edituser.php',
      data:{
        id:id,
        user:user,
        email:email,
        point:point,
        status:status,
        imgprofire:imgprofire,
      },success:function(data) {
        if (data == "success") {
          Swal.fire({
            title: 'สำเร็จ',
            text: 'อัพเดตผู้ใช้ที่ ' + id + ' เรียบร้อย',
            type: 'success',
          }).then((result)=>{
            window.location.href="?p=showuser";
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

  function deleteuser(id) {
    Swal.fire({
      title: 'คุณแน่ใจมั้ย?',
      text: 'คุณต้องการลบผู้ใช้ '+ id + ' ใช่มั้ย!',
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
          url:"../system/data/deleteuser.php",
          data:{
            id:id,
          },success:function(data){
            if (data == "success") {
              Swal.fire({
                text: 'ลบผู้ใช้ '+ id + ' สำเร็จ',
                type: 'success',
                timer: 2500, 
                confirmButtonColor: '#00C851',
                confirmButtonText: 'ตกลง'
              }).then((result)=>{
                window.location.href="?p=showuser";
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
<?php } else { echo "<h1 align='center'>ไม่พบผู้ใช้</h1>"; } ?>

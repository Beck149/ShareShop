<div class="bg-top-sh" style="background-image: url(assete/img/bg.png);">
  <div class="container text-center text-white">
    <h1 style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 10px #000;">EDIT IMG PROFIRE</h1>
    <p style="text-shadow: 2px 2px 10px #000;"><a class="text-light" href="home">หน้าแรก</a> <i class="fas fa-chevron-right text-white"></i> <?=$title?></p>
  </div>
</div>

<div class="container mt-5">
  <div class="card-ed-profire">
    <h5 class="text-ed"><i class="far fa-portrait"></i> เลือกรูปภาพ</h5>
    <input type="hidden" class="inputprofire" name="lname" disabled>
    <div class="img-ed" align ="center">

      <div class="px-2 py-2 ">
        <input type="image" src="https://minotar.net/avatar/Steve" alt="Submit"
        height="120" value="Steve" id="Steve">
        <p>Steve</p>
      </div>
      <div class="px-2 py-2">
        <input type="image" src="https://minotar.net/avatar/lukegb" alt="Submit" height="120" value="lukegb" id="lukegb">
        <p>Alex</p>
      </div>
      <div class="px-2 py-2">
        <input type="image" src="https://minotar.net/avatar/Notch" alt="Submit" height="120" value="Notch" id="Notch">
        <p>Notch</p>
      </div>
      <div class="px-2 py-2">
        <input type="image" src="https://minotar.net/avatar/Banxsi" alt="Submit" height="120" value="Banxsi" id="Banxsi">
        <p>Banxsi</p>
      </div>
	  
      <div class="px-2 py-2">
        <input type="image" src="https://minotar.net/avatar/hitorikungz" alt="Submit"
        height="120" value="hitorikungz" id="hitorikungz">
        <p>HitoriKungZ</p>
      </div>
	  
      <div class="px-2 py-2">
        <input type="image" src="https://minotar.net/avatar/Poom_P5channel1" alt="Submit"
        height="120" value="Poom_P5channel1" id="Poom_P5channel1">
        <p>Poom_P5channel1</p>
      </div>
	  
      <div class="px-2 py-2">
        <input type="image" src="https://minotar.net/avatar/Sarunkorn" alt="Submit"
        height="120" value="Sarunkorn" id="Sarunkorn">
        <p>Sarunkorn</p>
      </div>
	  
      <div class="px-2 py-2">
        <input type="image" src="https://minotar.net/avatar/Meaookung_144" alt="Submit"
        height="120" value="Meaookung_144" id="Meaookung_144">
        <p>Meaookung_144</p>
      </div>
	  
      <div class="px-2 py-2">
        <input type="image" src="https://minotar.net/avatar/<?=$_SESSION['username']?>" alt="Submit"
        height="120" value="<?=$_SESSION['username']?>" id="<?=$_SESSION['username']?>">
        <p>Your Profile</p>
      </div>

    </div>

    <div style="border-top: 2px solid #000;" align="center">
      <button class="cf-img btn-success inputprofire" id="imgedit">ยืนยันรูปภาพ</button>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function() {
    $("input[type='image']").click(function(){
      var val = $(this).val();
      $("input[name='lname']").val(val);
    });
  });

  $("#imgedit").click(function(){
    Swal.fire ({
      title: 'คุณแน่ใจมั้ย?',
      text: 'คุณต้องการเปลี่ยนรูปโปรเป็นไฟล์ใช่มั้ย',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#00C851',
      cancelButtonColor: '#d33',
      cancelButtonText: 'ไม่',
      confirmButtonText: 'ใช่'
    }).then((result) => {
      if (result.value) {
        var input = $(".inputprofire").val();
        $.ajax({
          type:'POST',
          url:"system/data/changeprofire.php",
          data:{
            input:input,
          },success:function(data){
            if (data == "success") {
              Swal.fire({
                text: 'เปลี่ยนรูปโปรไฟล์แล้ว',
                type: 'success',
                timer: 2500, 
                confirmButtonColor: '#00C851',
                confirmButtonText: 'ตกลง'
              }).then((result)=>{
                window.location.href="./profire";
              });
            } else {
              Swal.fire({
               text: data,
               type: 'error',
             });
            }
          }
        });
      }
    })
  });
</script>
<div class="bg-top-sh" style="background-image: url(assete/img/bg.png);">
  <div class="container text-center text-white">
    <h1 style="font-family: 'Poppins', sans-serif; text-shadow: 2px 2px 10px #000;">HELP</h1>
    <p style="text-shadow: 2px 2px 10px #000;"><a class="text-light" href="home">หน้าแรก</a> <i class="fas fa-chevron-right text-white"></i> <?=$title?></p>
  </div>
</div>
<div class="container mt-5">

  <div class="faq-box">
    <p class="accordion"><i class="far fa-question-circle" style="color: #262626;"></i> NFA SFA MFA คืออะไร ?</p>
    <div class="panel">
      <br><p>
	  NFA คือ ไอดีที่ไม่สามารถเปลี่ยนข้อมูลได้ทุกอย่าง<br>
	  SFA คือ ไอดีที่เปลี่ยนได้ทุกอย่างยกเว้นอีเมล<br>
	  MFA คือ ไอดีที่สามารถเปลียนได้ทุกอย่าง และสามารถเข้าถึงอีเมลของไอดีนั้นๆได้<br>
      </p>
    </div>
  </div>

  <div class="faq-box">
    <p class="accordion"><i class="far fa-question-circle" style="color: #262626;"></i> ชำระเงินผ่านทางไหนได้บ้าง ?</p>
    <div class="panel">
      <br><p>
	  ทางทรูมันนี่วอเล็ตเท่านั้น กับ paypal
      </p>
    </div>
  </div>

  <!--<div class="faq-box">
    <p class="accordion"><i class="far fa-question-circle"></i> test</p>
    <div class="panel">
      <br><p>
        test
      </p><br>
    </div>
  </div>-->

</div>
<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active-h");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
    });
  }
</script>

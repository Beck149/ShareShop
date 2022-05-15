
</div>
<div class="nav-foot" id="about_us">
	<div class="set-grid container">
		<div class="detail-foot">
			<img src="<?=$logo?>" class="m-4" height="60">
			<p>© 2022 Copyright All Right Reserved Website By SHERESHOP.</p>
			<p style="font-family: 'Prompt', sans-serif;">เว็บไซต์จำหน่ายแอพพรีเมี่ยม</p>
			<p class="text-success" style="font-family: 'Prompt', sans-serif;">
				ระบบอัตโนมัติ 24 ชม.
			</p>
		</div>
		<div class="mt-5">
			<h5>Contact</h5>
			<p style="font-family: 'Prompt', sans-serif;">โทรศัพท์ : <a href="tel:<?=$num_phone?>"><?=$num_phone?></a></p>
		</div>
		<div class="mt-5">
			<h5>Fanpage Facebook</h5>
			<div class="fb-page" data-href="<?=$fb_page?>" data-tabs="timeline" data-width="300" data-height="70" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="<?=$fb_page?>" class="fb-xfbml-parse-ignore"><a href="<?=$fb_page?>"><?=$namepage?></a></blockquote></div>
		</div>
	</div>
</div>
<div class="foot-bar">
	<div class="container">
		<p class="text-white">By SHERESHOP </p>
	</div>
</div>
<script>
	AOS.init();
</script>
<script src='//www.google.com/recaptcha/api.js'></script>

<!-- Messenger ปลั๊กอินแชท Code -->
    <div id="fb-root"></div>

    <!-- Your ปลั๊กอินแชท code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "111866090494315");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>

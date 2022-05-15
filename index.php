<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<?php 

include 'system/system.php';
include 'system/router/router.php';

$class = new shopweb;
$showt = $class->counter();
?>
        <script>
        	function notifyMe() {
			if (!("Notification" in window)) {
				alert("This browser does not support desktop notification");
			}
			else if (Notification.permission === "granted") {
				var notification = new Notification("ทดสอบ โปรดจงแคปหน้าจอไว้ซะ คุณจะได้รับ 5 พ้อย !");
			}
			else if (Notification.permission !== "denied") {
				Notification.requestPermission(function(permission) {
					if (permission === "granted") {
						var notification = new Notification("ทดสอบ โปรดจงแคปหน้าจอไว้ซะ คุณจะได้รับ 5 พ้อย !");
					}
				});
			}
		}
        </script>
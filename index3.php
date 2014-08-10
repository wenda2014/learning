<style>
*{
	margin:0;
	padding:0;
}

#footer{
	background-color:#212121;
	position:fixed;
	width:100%;
	height:70px;
	bottom:0;
	left:0;
}
.tri{
	border-color:transparent transparent #212121;
	border-style:solid;
	border-width:20px 17px;
	height:0;
	left:50%;
	margin:-40px 0 0 -400px;
	position:absolute;
	top:0;
	width:0;
}


</style>

<!DOCTYPE html> 
<html>
<head>
<title>Redirect</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="" />

</head>
<script type="text/JavaScript">
<!--
function eventualRedirect(redirectTo, timeoutPeriod) {
setTimeout("location.href = redirectTo;",timeoutPeriod);
}
// -->
</script>
 
<script type="text/JavaScript">
<!--
setTimeout("location.href = 'index2.php';",7000);
-->
</script>
 
<body style="background-image:url(images9.jpg)">
<br>
<br><br><br>
<center>
<h1>Welcome To Learning Apps.......</h1>
<img src="Gambar SD/imagesCARBPLEC.jpg" width="200" height="200">
<h1>Tunggu
<script type="text/javascript">
 
// KONFIGURASI
var menit = 1; // Lamanya hitung mundur (dalam menit)
var detik =7; // Detik standar (jangan diubah kecuali Anda tahu yang Anda lakukan)
var penghitung_detik = detik; // Set variabel detik yang lain untuk dimanipulasi
 
// HITUNG MUNDUR
penghitung_detik = 0;
function hitung_mundur() {
penghitung_detik--; // Setiap siklus 1 detik mengurangi nilainya 1 poin
if (penghitung_detik == -1) { // Deteksi detik ketika nilainya "0"
menit--; // Setiap siklus 1 menit mengurangi nilainya 1 poin
penghitung_detik = detik; // Me-reset detik untuk memulai hitung mundur menit yang baru
if (menit <= -1) { // Hitung mundur selesai
menit = 0;penghitung_detik = 0; // Menset menit dan detik ke "0"
clearTimeout(penghitung); // Stop hitung mundur
}
}
if (document.getElementById) {
document.getElementById("hitung_mundur_tampil").innerHTML=penghitung_detik; // Memasukkan nilai variabel menit dan detik untuk ditampilkan
}
penghitung=setTimeout("hitung_mundur()", 1000); // Set siklus penghitungan mundur (standar: 1 detik)
}
 
// INISIALISASI
if (document.all||document.getElementById)
document.write(' <b id="hitung_mundur_tampil">'+penghitung_detik+' </b>'); // Format tampilan hitung mundur di antarmuka
hitung_mundur();
</script> Detik </h1>
<br><br>
<br><br>
<div id="footer">
  <div class="tri"></div>
	<h4 align="center"><font color="#FFFFFF">Aplikasi Pembelajaran</font></h4>
    <h4 align="center"><font color="#FFFFFF"> <span class="copyright">Nora Gutama</span></font></h4>
</div>
</body>
</html>
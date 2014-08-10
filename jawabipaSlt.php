<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<div data-role="page" id="" >
	<div data-role="header" data-theme="b">
 <a data-role="button" href="Soal_Ipa.php" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a>
 </head><br /><br /><br /><br />
<body>
<?
$soal1=$_POST["soal1"]; 
$soal2=$_POST["soal2"];
$soal3=$_POST["soal3"];
$soal4=$_POST["soal4"];
$soal5=$_POST["soal5"];
$soal6=$_POST["soal6"];
$soal7=$_POST["soal7"];
$soal8=$_POST["soal8"];
$soal9=$_POST["soal9"];
$soal10=$_POST["soal10"];
$soal11=$_POST["soal11"]; 
$soal12=$_POST["soal12"];
$soal13=$_POST["soal13"];
$soal14=$_POST["soal14"];
$soal15=$_POST["soal15"];
$soal16=$_POST["soal16"];
$soal17=$_POST["soal17"];
$soal18=$_POST["soal18"];
$soal19=$_POST["soal19"];
$soal20=$_POST["soal20"];
$nilai=0; //variabel nilai untuk menampung nilai

if ($soal1=="B"){
    echo "No. 1 benar  (jawaban Parasitisme)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 1 salah!!<br/> ";
    }
   
if ($soal2=="B"){
    echo "No. 2 benar  (jawaban Cahaya dan Panas )<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 2 salah!!<br/> ";
    }

if ($soal3=="C"){
    echo "No. 3 benar   (jawaban Pohon jagung->Burung->Ular->Elang)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 3 salah!!<br/> ";
    }
   
if ($soal4=="A"){
    echo "No. 4 benar  (jawaban Jarak)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 4 salah!!<br/> ";
    }

if ($soal5=="C"){
    echo "No. 5 benar  (jawaban Terkecil dan tercepat revolusinya)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 5 salah!!<br/> ";
    }  
	
if ($soal6=="B"){
    echo "No. 6 benar  (jawaban Bahan baku semen)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 6 salah!!<br/> ";
    }	
	
if ($soal7=="B"){
    echo "No. 7 benar  (jawaban  Kayu)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 7 salah!!<br/> ";
    }	
	
if ($soal8=="C"){
    echo "No. 8 benar  (jawaban Belerang, Gipsum, dan Asbes)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 8 salah!!<br/> ";
    }	
	
if ($soal9=="A"){
    echo "No. 9 benar  (jawaban Yupiter)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 9 salah!!<br/> ";
    }
	
if ($soal10=="C"){
    echo "No. 10 benar  (jawaban Energi Potensial)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 10 salah!!<br/> ";
    }
	
if ($soal11=="B"){
    echo "No. 11 benar  (jawaban Mengurangi penguapan saat musim panas)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 11 salah!!<br/> ";
    }	
	
if ($soal12=="A"){
    echo "No. 12 benar  (jawaban Diuraikan)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 12 salah!!<br/> ";
    }	
	
if ($soal13=="C"){
    echo "No. 13 benar  (jawaban Pupil)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 13 salah!!<br/> ";
    }	
	
if ($soal14=="A"){
    echo "No. 14 benar  (jawaban Jaringan Epidermis)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 14 salah!!<br/> ";
    }	

if ($soal15=="C"){
    echo "No. 15 benar  (jawaban Tanah Gambut)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 15 salah!!<br/> ";
    }
	
if ($soal16=="A"){
    echo "No. 16 benar  (jawaban Uap air, es batu, dan besi)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 16 salah!!<br/> ";
    }	
	
if ($soal17=="B"){
    echo "No. 17 benar  (jawaban Pemakaian pupuk urea yang berlebihan)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 17 salah!!<br/> ";
    }
	
if ($soal18=="B"){
    echo "No. 18 benar  (jawaban Kulitnya)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 18 salah!!<br/> ";
    }
	
if ($soal19=="A"){
    echo "No. 19 benar  (jawaban Kapas dan kepompong ulat sutra)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 19 salah!!<br/> ";
    }		
if ($soal20=="C"){
    echo "No. 20 benar  (jawaban Membantu daya tahan tubuh)<br/>";
    $nilai=$nilai+5;
    }else{
    echo "No. 20 salah!!<br/> ";
    }
	
echo "Nilai total anda adalah" .$nilai;
?> <br />
<img src="Gambar SD/scorer.png" width="170" height="170" />
</div>
</body>
</html>
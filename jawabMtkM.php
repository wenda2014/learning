<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<div data-role="page" id="" >
	<div data-role="header" data-theme="b">
 <a data-role="button" href="Soal_mtk.php" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a>
 </head><br/><br /><br /><br />
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
$nilai=0; //variabel nilai untuk menampung nilai

if ($soal1=="C"){
    echo "No. 1 benar (jawab 50)<br/>";
    $nilai=$nilai+10;
    }else{
    echo "No. 1 salah!!<br/> ";
    }
   
if ($soal2=="A"){
    echo "No. 2 benar (jawaban Ribuan)<br/>";
    $nilai=$nilai+10;
    }else{
    echo "No. 2 salah!!<br/> ";
    }

if ($soal3=="C"){
    echo "No. 3 benar (jawaban 24)<br/>";
    $nilai=$nilai+10;
    }else{
    echo "No. 3 salah!!<br/> ";
    }
   
if ($soal4=="B"){
    echo "No. 4 benar (jawaban Belah Ketupat)<br/>";
    $nilai=$nilai+10;
    }else{
    echo "No. 4 salah!!<br/> ";
    }

if ($soal5=="B"){
    echo "No. 5 benar (jawaban 100)<br/>";
    $nilai=$nilai+10;
    }else{
    echo "No. 5 salah!!<br/> ";
    }  
	
if ($soal6=="A"){
    echo "No. 6 benar (jawaban 1.000)<br/>";
    $nilai=$nilai+10;
    }else{
    echo "No. 6 salah!!<br/> ";
    }	
	
if ($soal7=="A"){
    echo "No. 7 benar (jawaban 2)<br/>";
    $nilai=$nilai+10;
    }else{
    echo "No. 7 salah!!<br/> ";
    }	
	
if ($soal8=="B"){
    echo "No. 8 benar (jawaban 1)<br/>";
    $nilai=$nilai+10;
    }else{
    echo "No. 8 salah!!<br/> ";
    }	
	
if ($soal9=="C"){
    echo "No. 9 benar (jawaban 1)<br/>";
    $nilai=$nilai+10;
    }else{
    echo "No. 9 salah!!<br/> ";
    }
	
if ($soal10=="B"){
    echo "No. 10 benar (jawaban 11)<br/>";
    $nilai=$nilai+10;
    }else{
    echo "No. 10 salah!!<br/> ";
    }	

echo "Nilai total anda adalah".$nilai;
?> <br />
<img src="Gambar SD/scorer.png" width="170" height="170" />
</div>
</body>
</html>
<!DOCTYPE html> 
<html>
<head> 
<meta charset="utf-8">
<title>jQuery Mobile Web App</title>
<link href="jquery-mobile/jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="jquery-mobile/jquery.mobile.structure-1.0.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
body {
}
body,td,th {
	color: #000;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: small;
}
</style>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body> 

<div data-role="page" style="background-image:url(Walpaper/wlpr2.jpg); font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif; text-align: left;">
<div data-role="header" data-theme="b">
    <a data-role="button" href="Soal_Ipa.php" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a><br>
    	<h1 align="justify">Mudah</h1>
</div>

<form id="form1" name="form1" method="post" action="jawabipaM.php">
<b>1. Hewan apakah yang bisa mengubah warna tubuhnya sesuai lingkungan ?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal1" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left">Katak</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal1" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Bungklon</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal1" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Komodo</th>
  </tr>
</table>
<!-------------------------------------------------->
<b>2. Suatu penyesuian diri makhluk hidup dengan lingkungan untuk pempertahankan hidupnya disebut ?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal2" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Berkembang biak</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal2" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Revolusi</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal2" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Adaptasi</th>
  </tr>
</table>
<!-------------------------------------------->
<b>3. Planet yang paling dekat dengan matahari....?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal3" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Markurius</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal3" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Bumi</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal3" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Mars</th>
  </tr>
</table>
<!----------------------------------------------->
<b>4. Sebutkan alat indra manusia....?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal4" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Kaki,Kepala,Tangan,Hidung,Mata</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal4" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Mata,Lidah,Telinga,Hidung,Kulit</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal4" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Mata,Kaki,Rambut,Hidung,Kulit</th>
  </tr>
</table>
<!----------------------------------------------->
<b>5. Hewan pemakan tumbuhan....?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal5" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Karnivora</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal5" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Herbivora</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal5" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Omnivora</th>
  </tr>
</table>
<!----------------------------------------------->
<b>6. Sebutkan alat pernapasan manusia....?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal6" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Hidung,Tenggorokan,Paru-paru</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal6" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Hidung,Mulut,Paru-paru</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal6" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Mulut,Tenggorokan,Paru-paru</th>
  </tr>
</table>
<!----------------------------------------------->
<b>7. Perubahan wujud dari padat menjadi cair....?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal7" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Menguap</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal7" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Mengembun</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal7" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Mencair</th>
  </tr>
</table>
<!----------------------------------------------->
<b>8. Kemampuan untuk melakukan usaha....?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal8" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Energi</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal8" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Gaya</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal8" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Gerak</th>
  </tr>
</table>
<!----------------------------------------------->
<b>9. Tarikan atau dorongan disebut....?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal9" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Gerak</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal9" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Energi</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal9" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Gaya</th>
  </tr>
</table>
<!---------------------------------------------->
<b>10. Bebek dan Angsa memiliki kaki yang berselaput digunakan untuk ?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal10" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Memangsa hewan lain </th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal10" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Berenang di air</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal10" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Terbang di udara</th>
  </tr>
</table>
<!------------------------------------------------>
<table width="200" border="0">
  <tr>
    <th scope="col"><input name="submit" type="submit" value="Hasil" data-theme="b" /></th>
    <th scope="col"><input name="reset" type="reset" value="reset" data-theme="b" /></th>
  </tr>
</table>

</form>


</div>

</div>

</body>
</html>
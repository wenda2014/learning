<!DOCTYPE html> 
<html>
<head> 
<meta charset="utf-8">
<title>jQuery Mobile Web App</title>
<link href="jquery-mobile  /jquery.mobile.theme-1.0.min.css" rel="stylesheet" type="text/css"/>
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

<div data-role="page" style="background-image:url(Walpaper/wlpr2.jpg)">
	<div data-role="header" data-theme="b">
    <a data-role="button" href="Soal_mtk.php" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a><br>
	<h1 align="justify">Level Sulit</h1>
</div>  
<form id="form1" name="form1" method="post" action="jawabMtkSlt.php">
<b>1. Alvin mengunjungi perpustakaan setiap 3 hari sekali dan Zury setiap 4 hari sekali. Jika tanggal 20 mei mereka mengujungi perpustakan, mereka akan ke perpustakaan secara bersamaan lagi pada tanggal...</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal1" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left">24 Mei</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal1" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">1 Juni</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal1" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">2 Juni</th>
  </tr>
</table>
<!-------------------------------------------------->
<b>2. Hasil dari 186 X 24 : 6 adalah...<br>
</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal2" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >558</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal2" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">764</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal2" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">744</th>
  </tr>
</table>
<!-------------------------------------------->
<b>3. Arjuna memiliki tanah berbentuk persegi panjang.Keliling tanah tersebut 112 m. Jika perbandingan panjang dan lebar tanah 4 : 3 maka, panjang tanah tersebut adalah...</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal3" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >32 m</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal3" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">24 m</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal3" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">47 m</th>
  </tr>
</table>
<!----------------------------------------------->
<b>4. Sinta mempunyai bunga mawar 54 tangkai dan bunga aster 72 tangkai. Bunga tersebut dimasukan ke dalam vas bunga dengan jumlah dan jenis yang sama. Berapa vas bunga terbanyak yaang dibutuhkan Sinta ?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal4" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >18</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal4" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">24</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal4" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">12</th>
  </tr>
</table>
<!----------------------------------------------->
<b>5. Umur adik Budi sekarang 2 tahun, 5 bulan. Dia muali dapat berjalan sejak usia 13 bulan. Jadi adik budi sudah bisa berjalan selama...</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal5" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >17 bulan</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal5" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">15 bulan</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal5" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">16 bulan</th>
  </tr>
</table>
<!----------------------------------------------->
<b>6. Data nilai siswa kelas 6 sebagai berikut!<br><table width="129" border="1">
  <tr>
    <th width="58" scope="col">Banyak Siswa</th>
    <th width="55" scope="col">Jumlah Nilai</th>
  </tr>
  <tr>
    <th>2<br>2<br>3<br>3<br>5</th>
    <td>10<br>9<br>8<br>7<br>6</td>
  </tr>
</table>
Berapa rata-rata nilai siswa kelas 6 tersebut ?</b><br>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal6" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >7</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal6" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">7.5</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal6" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">8</th>
  </tr>
</table>
<!----------------------------------------------->
<b>7. Kebun Pak Hadi berukuran panjang 12 m dan lebar 6m, berapakah keliling dari kebun pak Hadi...</b>
<table width="300" border="0">
<tr>
    <th width="37" scope="col" align="left"><input name="soal7" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >40 m</th>
  </tr>
  
<tr>
    <th scope="col" align="left"><input name="soal7" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">37 m</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal7" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">36 m</th>
  </tr>
</table>
<!----------------------------------------------->
<b>8. Bangun yang terbentuk bila keempat titik (3,-1);(1,2);(-3,2) dan (-3,-1) dihubungkan adalah....</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal8" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Trapesium</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal8" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Persegi Panjang</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal8" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Jajargenjang</th>
  </tr>
</table>
<!----------------------------------------------->
<b>9. Banyak simetri lipat pada bangun dalam gambar ini adalah!<br>
<img src="Image_Matematika/belahketupat.jpg" width="150" height="120"></b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal9" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >1</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal9" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">4</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal9" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">2</th>
  </tr>
</table>
<!---------------------------------------------->
<b>10. Hasil dari 100 : 20 + 95 adalah....</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal10" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >100</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal10" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">95</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal10" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">105</th>
  </tr>
</table>
<b>11. 10 dm + 6 hm=......m. </b>
<table width="300" border="0">
  <tr>
    <th width="29" scope="col" align="left"><input name="soal11" type="radio" value="A"/></th>
    <th width="10" scope="col"></th>
    <th width="277" scope="col" align="left">71</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal11" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">61</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal11" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">51</th>
  </tr>
</table>
<!-------------------------------------------------->
<b>12. Hanung mengendarai mobil dengan kecepatan rata-rata 60 km/jam. Ia menempuh jarak 360 km.Apabila ia sampai pukul 05.00 WIB maka ia akan sampai di tempat tujuan pada pukul..... <br>
</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal12" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >11.00 WIB</th>
  </tr>
  
<tr>
    <th scope="col" align="left"><input name="soal12" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">10.00 WIB</th>
  </tr>
  
 <tr>
   <th scope="col" align="left"><input name="soal12" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">12.00 WIB</th>
  </tr>
</table>
<!-------------------------------------------->
<b>13. Lambang bilangan asli XLVIII adalah...</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal13" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >50</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal13" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">49</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal13" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">48</th>
  </tr>
</table>
<!----------------------------------------------->
<b>14. Berikut ini sifat balok, kecuali...</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal14" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Mempunyai 6 sisi</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal14" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Mempunyai 12 Rusuk</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal14" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">Semua sisi sama besar</th>
  </tr>
</table>
<!----------------------------------------------->
<b>15. Di ruang perpustakaan terdapat 12 almari baru. Tiap almari akan diisi 150 buku oleh 9 siswa.<br>
Berapa buku yang dimasukan oleh masing-masing siswa ?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal15" type="radio" value="A"></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >200 buku</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal15" type="radio" value="B"></th>
    <th scope="col"></th>
    <th scope="col" align="left">150 buku</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal15" type="radio" value="C"></th>
    <th scope="col"></th>
    <th scope="col" align="left">171 buku</th>
  </tr>
</table>
<!----------------------------------------------->
<b>16. Uang Ani 12% lebih bnyak dari uang Budi. Jika uang Budi Rp.12</b>
.000,00, berapa uang Ani ?
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal16" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Rp.2.400,00</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal16" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">RP.14.400,00</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal16" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">RP.10.000,00</th>
  </tr>besar
</table>
<!----------------------------------------------->
<b>17. Sebuah bus kota berangkat dari kota A pukul 05.30 dan tiba dikota B pukul 11.00. Jika jarak kota A dan kota B 330 km, kecepatan rata-rata bus tersebut adalah...</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal17" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >60 km/jam</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal17" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">55 km/jam</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal17" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">50 km/jam</th>
  </tr>
</table>
<!----------------------------------------------->
<b>18. Seorang pemborong mendapat pekerjaan pengaspalan jalan sepanjang 13,5 km. Minggu pertama berhasil menyelesaikan 48 hm, minggu kedua 5.426 m. Berapa meter panjang pengaspalan jalan yang belumdiselesaikan ?</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal18" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >2.327 m</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal18" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">3.273 m</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal18" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">3.373 m</th>
  </tr>
</table>
<!----------------------------------------------->
<b>19. Faktor Persekutuan Terbesar (FPB) dari 42, 98, dan 70 adalah...</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal19" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >24</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal19" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">21</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal19" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">14</th>
  </tr>
</table>
<!---------------------------------------------->
<b>20. Perhatikan Gambar dibawah ini !<br>
<table width="200" border="0">
  <tr>
    <th scope="col"><img src="Image_Matematika/Jaring tabung.jpg" width="82" height="98">
</th>
  </tr>
</table>
 Pada gambar diatas merupakan jaring-jaring bangun...
</b>
<table width="300" border="0">
  <tr>
    <th width="37" scope="col" align="left"><input name="soal20" type="radio" value="A"/></th>
    <th width="1" scope="col"></th>
    <th width="233" scope="col" align="left" >Tabung</th>
  </tr>
  <tr>
    <th scope="col" align="left"><input name="soal20" type="radio" value="B"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Kubus</th>
  </tr>
  <tr>
   <th scope="col" align="left"><input name="soal20" type="radio" value="C"/></th>
    <th scope="col"></th>
    <th scope="col" align="left">Limas</th>
  </tr>
</table>

<table width="300" border="0">
  <tr>
    <th scope="col"><input name="submit" type="submit" value="Hasil" data-theme="b" /></th>
    <th scope="col"><input name="reset" type="reset" value="reset" data-theme="b" /></th>
  </tr>
</table>

</form>
</div>
</body>
</html>
<!DOCTYPE html> 
<html>
<head> 
<meta charset="utf-8">
<title>jQuery Mobile Web App</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<div data-role="page" id="page">
	<div data-role="header" data-theme="b">
    <a data-role="button" href="index.php" data-corners="false" onclick="return confirm('Apakah Anda yakin akan keluar?')"><img src="Icon2/error.gif" width="15" height="15"><br>Keluar</a>
		
		<h1 data-theme="b" >Learning Aplication</h1>
        <h1>Menu Utama</h1>
	</div>
	<div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: x-small;">	
                 <div class="pt-menu">
                 
                               
                        <a data-theme="b" data-corners="false" data-role="button" href="#materi">
                            <img src="Icon2/designbump.png" width="50" height="50"alt="rss" style="display: block; margin: 0 auto">
                            Materi</a>
         
                        <a data-theme="b" data-corners="false" data-role="button" href="#soal">
                            <img src="Icon2/livejournal.png" width="50" height="50"alt="rss" style="display: block; margin: 0 auto">
                            latihan Soal</a>

                        <a data-theme="b" data-corners="false" data-role="button" href="bantuan.php">
                        <img src="Icon2/reddit.png" width="50" height="50" alt="rss" style="display: block; margin: 0 auto">Bantuan</a>

                        <a data-theme="b" data-corners="false" data-role="button" href="Profile.php">
                            <img src="Icon2/profile.png" width="50" height="50" alt="mail" style="display: block; margin: 0 auto">Tentang</a>
 
                       
                    </div>    
                    </div>  
                          
      <div data-role="footer" data-theme="b">
        <h2>Learning Is Fun </h2>
                <p align="center"><marquee>Copy@Right2014</marquee></p>
            </div>    
    </div> 
        
<!-----------------Menu Materi----------------->
<div data-role="page" id="materi">
	<div  data-theme="b"  data-role="header">
     <a data-role="button" href="#page" data-icon="home" data-corners="false">Home</a>
		<h1>Materi</h1>
	</div>
    <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;">
    	<div data-role="content" >	
       	<br>
        
         <a data-theme="b" data-corners="false" data-role="button" href="#babipa">
                            IPA</a><br><br>
          <a data-theme="b" data-corners="false" data-role="button" href="#babmtk">
                            Matematika</a><br><br>                  
         <a data-theme="b" data-corners="false" data-role="button" href="#menubhs">
                            B.Indonesia</a><br><br><br><br><br><br><br><br><br><br>
        	         
               
            </div>
          	</div>
<div data-role="footer" data-theme="b">
		<h4>Rajin Pangkal Pandai</h4><br>
        </div>
	</div>
</div>

<!----------------Latihan Soal----------------->
<div data-role="page" id="soal">
	<div  data-theme="b"  data-role="header">
     <a data-role="button" href="#page" data-icon="home" data-corners="false">Home</a>
		<h1>Latihan Soal</h1>
	</div>
    <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;">
    	<div data-role="content" >	
       	<br>
        
         <a data-theme="b" data-corners="false" data-role="button" href="Soal_Ipa.php">
                            IPA</a><br><br>
          <a data-theme="b" data-corners="false" data-role="button" href="Soal_mtk.php">
                            Matematika</a><br><br>                  
         <a data-theme="b" data-corners="false" data-role="button" href="Soal_Bindonesia.php">
                            B.Indonesia</a><br><br><br><br><br><br><br><br><br><br>
        	                   
            </div>
          	</div>
<div data-role="footer" data-theme="b">
		<h4>Rajin Pangkal Pandai</h4><br>
        </div>
	</div>
</div>


<!--------Bab IPA---------->
<div data-role="page" id="babipa" >
	<div data-role="header" data-theme="b">
   <a data-role="button" href="#materi" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a>
		<h1>Enjoy with</h1>
       <h1>IPA</h1>
        </div>
        <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;">	
	<div data-role="content" >	
		     <ul data-role="listview">
        <br><br><br><br><br><br><br>
		  <li data-theme="b" ><a href="#Ipa1">Bab1</a></li><br>
          <li  data-theme="b"><a href="#Ipa2">Bab2</a></li>
<br><br><br><br><br><br><br><br><br><br><br>
			 </ul>		
  </div>
    </div>
    	<div data-role="footer" data-theme="b">
		<h4></h4>
	</div>
	</div>
</div>

<!------------Bab1------------------------->
<div data-role="page" id="Ipa1">
	<div data-role="header" data-theme="b">
    <a data-role="button" href="#babipa" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a><br>
		<h1>Ayo Kita Belajar</h1>
        <h1>IPA</h1>
	</div>
    <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;">
	<div data-role="content">	
		<ul data-role="listview"><br>
			<li data-theme="b" ><a href="bab1p1.php"> Makhluk Hidup</a></li><br>            
            <li data-theme="b"><a href="bab1p2.php">Perkembang Biakan</a></li><br>
			<li data-theme="b"><a href="bab1p3.php">Saling Ketergantungan</a></li><br>
            <li data-theme="b"><a href="bab1p4.php">Adaptasi</a></li><br>
             <li data-theme="b"><a href="bab1p5.php">Alat Indra Manusia</a></li><br>
             <li data-theme="b"><a href="bab1p6.php">Alat Pernafasan & Pencernaan manusia</a></li><br><br><br>
		</ul>
        </div>	
	</div>
    <div data-role="footer" data-theme="b">
		<h4>Play, Learning Grow ToGether</h4><br>
	</div>
    
	</div>
</div>
<!-------------------------------------------->

<!---------------Bab2--------------------->
<div data-role="page" id="Ipa2">
	<div data-role="header" data-theme="b">
    <a data-role="button" href="#babipa" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a><br>
		<h1>Ayo Kita Belajar</h1>
        <h1>IPA</h1>
	</div>
     <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;">	<br><br>
	<div data-role="content">	
		<ul data-role="listview">
			<li data-theme="b" ><a href="bab2p1.php">Sifat Benda & Perubahannya</a></li><br>
            
            <li data-theme="b"><a href="bab2p2.php">Gaya dan Gerak</a></li><br>
            <li data-theme="b" ><a href="bab2p3.php">Energi dan Perubahannya</a></li><br>
			<li data-theme="b"><a href="bab2p4.php">Sumber Daya Alam</a></li><br>
            <li data-theme="b"><a href="bab2p5.php">Sistem Tata Surya</a></li><br><br><br><br><br>
           </ul>
           </div>  	
	</div>
    <div data-role="footer" data-theme="b">
		<h4>Rajin Pangkal Pandai</h4><br>
	</div>
    	
	</div>
</div>
<!--------------------------------------------->

<!--------------------Bab MTK------------------>
<div data-role="page" id="babmtk">
	<div data-role="header" data-theme="b">
    <a data-role="button" href="#materi" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a><br>
    <h1>Learning is Enjoy</h1>
        <h1>Matematika</h1>
         </div>
        <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;">	
	<div data-role="content" >	
		<ul data-role="listview"><br><br><br><br><br><br><br>
		  <li data-theme="b" ><a href="#Bab1">Bab1</a></li><br>
          <li  data-theme="b"><a href="#Bab2">Bab2</a></li><br><br><br><br><br><br><br><br><br><br><br>
			 </ul>		
  </div>
    </div>
    	<div data-role="footer" data-theme="b">
		<h4></h4>
	</div>
	</div>
</div>
               
<!------------------Menu MTK Bab1---------------->
<div data-role="page" id="Bab1">
	<div data-role="header" data-theme="b">
    <a data-role="button" href="#babmtk" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a><br>
		<h1>Learning is Enjoy</h1>
        <h1>Matematika</h1>
	</div>
    <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;"><br>
	<div data-role="content">	
		<ul data-role="listview">
		  <li data-theme="b" ><a href="bab1m1.php">Operasi Hitung Bilangan Cacah & Bulat</a></li><br>
            <li data-theme="b" ><a href="bab1m2.php">Operasi Hitung Bilangan Pecahan</a></li><br>
             <li data-theme="b" ><a href="bab1m3.php">KPK,FPB & Angka Romawi</a></li><br>
             <li data-theme="b" ><a href="bab1m4.php">Satuan Pengukuran</a></li><br>
              <li data-theme="b" ><a href="bab1m5.php">Jaring-jaring Bangun Ruang & Statistika</a></li><br>
             </ul><br><br><br><br><br><br>                
	  </div>	
  </div>
    
    	<div data-role="footer" data-theme="b">
		<h4>Belajar Dan Belajar</h4><br>
	</div>
	</div>
</div>
<!------------------------------------------------>

<!-------------------Menu MTK Bab2--------------->
<div data-role="page" id="Bab2">
	<div data-role="header" data-theme="b">
    <a data-role="button" href="#babmtk" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a><br>
		<h1>Learning Is Fun</h1>
        <h1>Matematika</h1>
	</div>
    <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;">	
	<div data-role="content"><br><br>
		<ul data-role="listview">
		  <li data-theme="b" ><a href="bab2m1.php">Bangun Datar Segitiga</a></li><br>
          <li data-theme="b" ><a href="bab2m2.php">Bangun Datar Segiempat</a></li><br>
          <li data-theme="b" ><a href="bab2m3.php">Bangun Datar Lingkaran</a></li><br>
            <li data-theme="b" ><a href="bab2m4.php">Bangun Ruang Kubus & Balok</a></li><br>
             <li data-theme="b" ><a href="bab2m5.php">Bangun Ruang Prisma & Limas</a></li><br>
            <li data-theme="b" ><a href="bab2m6.php">Bangun Ruang Tabung Kerucut</a></li><br><br><br>
			
	  </ul>	
      </div>	
      </div>
        <div data-role="footer" data-theme="b">
		<h4>Play, Learning Grow ToGether</h4>
		</div>	   
	</div>
    </div>
<!------------------------------------------------>
<!-----------------Menu B.Indonesia--------------->
<div data-role="page" id="menubhs">
	<div data-role="header" data-theme="b">
 <a data-role="button" href="#materi" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a><br>   
		<h1>Learning Is Fun</h1>
        <h1>Bahasa Indonesia</h1>
	</div>
	 <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;">
    	<div data-role="content">	
       	<br><br><br><br><br>
        	<ul data-role="listview">
			<li data-theme="b" ><a href="#babst">Bab 1</a></li><br>
            <li data-theme="b" ><a href="#babdua">Bab 2</a></li><br>
           
     </ul><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
    <div data-role="footer" data-theme="b">
		<h4></h4><br>
	</div>	
                  
	</div>
</div>
<!------------------------------------------->
<!-----------------BAB1 Indonesia---------->
<div data-role="page" id="babst">
	<div data-role="header" data-theme="b">
    <a data-role="button" href="#menubhs" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a><br>
		<h1>Learning is Enjoy</h1>
        <h1>B.Indonesia</h1>
	</div>
    <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;"><br><br>
	<div data-role="content">	
    		<ul data-role="listview">
		  <li data-theme="b" ><a href="bab1b1.php">Memahami teks bacaan</a></li><br>
            <li data-theme="b" ><a href="bab1b2.php">Memahami teks Drama</a></li><br>
            	<li data-theme="b" ><a href="bab1b3.php">Puisi & Pantun</a></li><br>
                <li data-theme="b" ><a href="bab1b4.php">Memahami Makna,Kata sulit & Antonim</a></li><br><br><br><br><br><br><br><br>
               		
	  </ul>		
      
  </div>
    </div>
    	<div data-role="footer" data-theme="b">
		<h4>Rajin Pangkal Pandai</h4><br>
	</div>
	</div>
    </div>	
<!------------------------------------------------>

<!-----------BAB2 Indonesia-------------------->
<div data-role="page" id="babdua">
	<div data-role="header" data-theme="b">
    <a data-role="button" href="#menubhs" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a><br>
		<h1>Learning is Enjoy</h1>
        <h1>B.Indonesia</h1>
	</div>
    <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;"><br><br>
	<div data-role="content">	
    		<ul data-role="listview">
		  <li data-theme="b" ><a href="bab2b1.php">Pribahasa & Ungkapan</a></li><br>
            <li data-theme="b" ><a href="bab2b2.php">Memahami Cuplikan Laporan</a></li><br>
            	<li data-theme="b" ><a href="bab2b3.php">Paragraf</a></li><br>
                <li data-theme="b" ><a href="bab2b4.php">Surat</a></li>
                <br><br><br><br><br><br><br><br>
                		
	  </ul>		
  </div>
    </div>
    	<div data-role="footer" data-theme="b">
		<h4>Play, Learning Grow ToGether</h4><br>
	</div>
	</div>
    </div>	
<!------------------------------------------------>

 </div>
 </div>
</body>
</html>
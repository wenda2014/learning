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
<div data-role="page" id="Soal_IPA" >
	      <div data-role="header" data-theme="b">
   <a data-role="button" href="#soal" data-transition="pop" data-icon="arrow-l" data-corners="false">Back</a>             <h1>Latihan Soal</h1>
   		<h1>Bahasa Indonesia</h1>
          </div>
     <div data-role="content" style="background-image: url(Walpaper/images3.jpg); font-size: small;">
     	
	        <div data-role="content" >	
		<ul data-role="listview"><br><br><br><br><br><br><br>
		  <li data-theme="b" ><a href="SBindo_M.php">Mudah</a></li><br>
          <li  data-theme="b"><a href="SBindo_Sed.php">Sedang</a></li><br>
          <li  data-theme="b"><a href="SBindo_Slt.php">Sulit</a></li>
          
<br><br><br><br><br><br><br><br>
			 </ul>		
           
             </div>
    </div>
    
    	 <div data-role="footer" data-theme="b">
		<h4>Latihan Soal Siapa Takut</h4>
	     </div>	
</div>
</body>
</html>
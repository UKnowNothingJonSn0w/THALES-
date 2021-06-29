<!DOCTYPE HTML>

<html lang="en">
<head>
<meta charset="utf-8"/>
<title> THALES </title>
<meta name="author" content="Oliwia Wojcieszak"/>
<meta http-equiv="X-UA-Compatible"content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="style.css" type="text/css"/> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<header>
 <form name="form" method = "post" action="upload.php" enctype="multipart/form-data" >
<input type="file" name = "my_file" /> <br></br>
<input type="submit" name="submit" value="Upload"/>
</form>
</header>
<div class="logo">
 <img src="logo.png" id="logo" width="900" height="550" ></>
 </div> 
 <div class="searchbox">
  <input onkeyup="filter()" type="text" id="value" placeholder="Which file are you looking for ?">
 </div>
 <div class="filelist">
<?php
$katalog   = './Pliki';
$pliki = scandir($katalog);
echo '<ul>';
foreach($pliki as $plik) {
    if($plik!="." && $plik!="..") echo '<li> 
	<a href="./Pliki/'.$plik.'">'.$plik.'</a></li>';
}
echo '</ul>';
?>
</div>
 <script type="text/javascript">
  function filter() {

    var value,a,li,i;

    value = document.getElementById("value").value.toUpperCase();
    li = document.getElementsByTagName("li");

    for(i=0;i<li.length;i++){
      a = li[i].getElementsByTagName("a");
      if (a[0].innerHTML.toUpperCase().indexOf(value) > -1) {
        li[i].style.display = "flex";
      }else{
        li[i].style.display = "none";
      }
    }

  }
</script>
 </body>
 </html>
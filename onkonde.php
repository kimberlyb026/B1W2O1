<?php

 session_start();




?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="paniek.css">
<link href="https://fonts.googleapis.com/css?family=Sonsie+One&display=swap" rel="stylesheet">
<title>paniek</title>
</head>
<h1>mad libs</h1>

  <nav>
    <ul>
          <li><a href="paniek.html">Er heerst paniek...</a></li>
          <li><a href="onkonde.html">onkonde</a></li>
         
        
    </ul>



  </nav>

<div class="grid-container">
	   <div id= "verhaal1">
  <h2>Onkonde</h2>
<div id= verhaal>
<p> Er zijn veel mensen die niet kunnen <?= $_POST['vraag1']?>. Neem nou <?= $_POST['vraag2']?>. Zelfs met de hulp van een <?= $_POST['vraag3']?> of zelfs <?= $_POST['vraag4']?> kan <?= $_POST['vraag2']?> niet <?= $_POST['vraag1']?>. Dat heeft niet te maken met een gebrek aan <?= $_POST['vraag5']?>, maar met een te veel aan <?= $_POST['vraag6']?>. Teveel <?= $_POST['vraag6']?> leidt tot <?= $_POST['vraag7']?> en dat is niet goed als je wilt <?= $_POST['vraag1']?>. Helaas voor <?= $_POST['vraag2']?>

</p>
</div>
<div class="footer">
	<footer>
  <p>deze website is gemaakt door: Kimberly van Berkum</p>
  </footer>
</div>
</div>




</body>
</html>


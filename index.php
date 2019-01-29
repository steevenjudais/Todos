<?php
	$texte;
	if (isset($_GET['name']) ? $_GET['name'] : NULL) {
		$texte = "Vous avez saisi : ". $_GET['name'];
	} else {
		$texte = "Vous n'avez rien saisi";
	}
?>
<html>
   <body>
   <p><h1>Message</h1></p>
   <br>
   <?php echo $texte ?>
   <div>
      <br>
      <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "GET">
         <input type = "text" name = "name"/>
         <input type = "submit"/>
      </form>
   </div>
   </body>
</html>

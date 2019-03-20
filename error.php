<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Error: <?php echo http_response_code();?> - Steve's HTML Minecraft Template</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/credits.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body class="creditsScroll">
<main class="middle">
  
<img alt="Minecraft" id="credits-logo" src="img/minecraft.png" />
	<p class="heading">============<br><span>Error: <?php echo http_response_code();?></span><br>============</p>
  <p>There was an error while accessing the Webpage at <wbr><?php echo $_SERVER['HTTP_HOST'] . "<wbr>" . $_SERVER['REQUEST_URI']?></p>
</main>
<footer> <span class="left">Template made by <a class="bold" href="https://github.com/Steve-Tech">Steve</a>.</span> <span class="right">This site is not an official Minecraft product, nor is it approved by or associated with Mojang.</span> </footer>
</body>
</html>

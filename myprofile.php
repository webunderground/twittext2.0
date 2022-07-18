<?php
	require_once('common.php');
	checkUser();
?>
<?php
  require_once 'config.php';
  
  require_once 'functions.php';
   
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Twitter Clone - Final</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
	<link rel="icon" href="images/twitter.png">
	 <style> 
textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
 border-radius: 150px;
  

}
input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
 border-radius: 150px;
  

}
</style>
  </head>
  <body>
  <div class="post__body">
          <div class="post__header">
            <div class="post__headerText">
              	 <div class="sidebarOption active">
     <span class="material-icons"> cruelty_free </span>
	 <h2>Twittext</h2>
	 </div>

            </div>
            <div class="post__headerDescription">
              <p>Defender y respetar la voz del usuario.</p>
            </div>
          </div>
		   <div class="sidebarOption active">
        <span class="material-icons"> home </span>
         <a href="index.php" style=" text-decoration: none;"><h2>Home</h2></a>
      </div>
		   <div class="sidebarOption">
        <span class="material-icons"> account_circle </span>
        <a href="myprofile.php" style=" text-decoration: none;"> <h2>Change Avatar</h2></a>
      </div>

        <div class="post__avatar">
		<span class="material-icons"> account_circle</span> 
		<?php echo $_SESSION['userName']; ?>       
          <img src="<?php echo $_SESSION['userName']; ?>.jpg" alt="" />

         
        </div>


<p> su avatar con su nombre de usuario con la extención .jpg		
		<br>
		
	<?php

if (isset($_FILES['imagen'])){
	
	//Comprobamos si el fichero es una imagen
	if ($_FILES['imagen']['type']=='image/png' || $_FILES['imagen']['type']=='image/jpeg'){
	
	//Subimos el fichero al servidor
	move_uploaded_file($_FILES["imagen"]["tmp_name"], $_FILES["imagen"]["name"]);
	$validar=true;
	}
	else $validar=false;
	
	
}

?>
<form method="post" action="?" enctype="multipart/form-data">
<input type="file" name="imagen" value=""><br>

<button  type="submit" class="tweetBox__tweetButton" type="submit" value="Subir Imagen">Subir Imagen</button>
</form>


<?php if (isset($_FILES['imagen']) && $validar==true){ ?>
<h1><?php echo $_FILES["imagen"]["name"] ?></h1>
<img src="<?php echo $_FILES["imagen"]["name"] ?>">
<?php } else if (isset($_FILES['imagen']) && $validar==false) echo 'El fichero no es una imagen';?>

    <div class="widgets__widgetContainer">
	<blockquote class="twitter-tweet">
	
<hr>
     



	
	
	
	
	
	
	
	
	</blockquote>
</div>
 </body>
</html>

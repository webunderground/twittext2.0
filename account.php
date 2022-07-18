
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
	  <div class="sidebarOption">
        <span class="material-icons"> settings </span>
        <a href="settings.php" style=" text-decoration: none;"><h2>settings</h2>
      </div>
	 
<h2> <span class="material-icons"> account_circle</span> 	 <?php echo $_SESSION['userName']; ?></h2><br>
 <div class="post__avatar">
          <img src="<?php echo $_SESSION['userName']; ?>.jpg" alt="" />
        </div>

	
	<?php date_default_timezone_set('America/Bogota');
    //preguntamos la zona horaria
    $zonahoraria = date_default_timezone_get();
    setlocale(LC_ALL,"es_ES");
     echo date('d F Y ' );?>
<hr>
     <p><H1>Profile</H1></p><br> 
<form action="envprofile.php" method="post">     
            <input type="hidden" size="20" name="usuario"  value="<?php echo $_SESSION['userName']; ?>" />		  
             <label>Nombre </label><br>
			 <input type="text" size="20" name="name" />		  
              <label>Email</label><br>  
			<input name="email" type="text" size="42" />	
			  <label>web</label><br>  
			<input name="web" type="text" size="42" />	
			<label>Description</label><br>  
	
		   <textarea  name="text" cols="40" rows="6" aria-required="true" placeholder="descripcion?" /></textarea><br>
		  
		    <button type="submit" class="tweetBox__tweetButton" name="enviar">Tweet</butto




	
	
	
	
	
	
	
	
	
</div>
 </body>
</html>

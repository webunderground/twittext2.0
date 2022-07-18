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
		<link rel="icon" href="images/cruelty_free.png">

  </head>
  <body>
    <!-- sidebar starts -->
    <div class="sidebar">
     	 <div class="sidebarOption active">
     <span class="material-icons"> cruelty_free </span>
	 <h2>Twittext</h2>
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
        <span class="material-icons"> account_box </span>
        <a href="account.php" style=" text-decoration: none;"> <h2>Account</h2></a>
      </div>


      <div class="sidebarOption">
        <span class="material-icons"> backup </span>
        <a href="Upload.php" style=" text-decoration: none;"> <h2>Upload</h2></a>
      </div>

      

      <div class="sidebarOption">
        <span class="material-icons"> perm_identity </span>
         <a href="aedit.php" style=" text-decoration: none;"> <h2> Edit Profile</h2></a>
      </div>

      <div class="sidebarOption">
        <span class="material-icons"> settings </span>
        <h2>settings</h2>
      </div>
      
	   <div class="sidebarOption">
        <span class="material-icons"> logout </span>
        <a href="logout.php" style=" text-decoration: none;"><h2>logout</h2></a>
      </div>
	  
	  
    </div>
    <!-- sidebar ends -->

    <!-- feed starts -->
    <div class="feed">
      <div class="feed__header">
        <h2>Home</h2>
      </div>

      
        <div class="post__avatar">
<img src="<?php echo $_SESSION['userName']; ?>.jpg"  alt="Avatar"/>        
<?php echo $_SESSION['userName']; ?>        

        </div>

        <div class="post__body">
          <div class="post__header">
            <div class="post__headerText">
              <h3>
                
                <span class="post__headerSpecial"
                  ><span class="material-icons post__badge"> verified </span>@<?php echo htmlspecialchars($_SESSION["username"]); ?></span
                >
              </h3>
            </div>
            <div class="post__headerDescription">
              <div class="widgets__widgetContainer">
	<blockquote class="twitter-tweet">
     
              <?php 
  // Se conecta al SGBD 
  $user=$_SESSION["username"]; 
  if(!($conexion = mysql_connect("localhost", "root", "lolita1873"))) 
    die("Error: No se pudo conectar");
 
  // Selecciona la base de datos 
  if(!mysql_select_db("tw", $conexion)) 
    die("Error: No existe la base de datos");
 
  // Sentencia SQL: muestra todo el contenido de la tabla "books" 
  $sentencia = "SELECT * FROM profile ORDER BY name DESC"; 
  // Ejecuta la sentencia SQL 
  $resultado = mysql_query($sentencia, $conexion); 
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");

 echo "";
  while($fila = mysql_fetch_assoc($resultado)) 
  { 
   echo "<div >";
   echo"<span class='material-icons'> account_circle</span> ";
 echo"</div><label>user:</label>";
	  	  	  

  echo "<a href='user.php?tag=" . $fila['usuario'] . "'>" . $fila['usuario'] . "</a><br/>";
 
  
       
   echo "<div class='comment'><p>";
     echo"<label>nombre:</label>";
	 echo $fila['name'] . '</p><br/>';
     echo"<label>description:</label><br><p>";
	echo $fila['text'] . '</p><br/>';
	 echo"<label>email:</label>";
	   echo "<label></label><a href='" . $fila['web'] . "'>" . $fila['web'] . "</a><br/> <div class='tiempo'>" . $fila['inserdate'] . "</div>";
	 
	 echo "<label>web:</label><a href='" . $fila['email'] . "'>" . $fila['email'] . "</a><br/> <div class='tiempo'>" . $fila['inserdate'] . "</div>";
   echo "</div>";
   echo "<div class='post__footer'>
            <span class='material-icons'> repeat </span>
            <span class='material-icons'> favorite_border </span>
            <span class='material-icons'> publish </span>
         </div><hr>";
  } 
 echo "</div></div>";
  // Libera la memoria del resultado
  mysql_free_result($resultado);
  
  // Cierra la conexión con la base de datos 
  mysql_close($conexion); 
?> </blockquote>
            </div>
          </div>
          
        
         
          </div>
        </div>
     </div>
      <!-- post ends -->
	 
    <!-- feed ends -->

    <!-- widgets starts -->
    <div class="widgets">
      <div class="widgets__input">
        <span class="material-icons widgets__searchIcon"> search </span>
        <input type="text" placeholder="Search Twitter" />
      </div>





      <div class="widgets__widgetContainer">
        <h2>What's happening?</h2>
      
	  	  <a class="twitter-timeline" href="https://twitter.com/robotsoftware?ref_src=twsrc%5Etfw">Tweets by robotsoftware</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
    <!-- widgets ends -->
  </body>
</html>

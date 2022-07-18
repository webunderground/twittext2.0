<?php
	require_once('common.php');
	checkUser();
?>
<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clone-tw</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
	 <style> 
textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
 border-radius: 150px;
  

}
</style>
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
       <a href="index.php" style=" text-decoration: none;">  <h2>Home</h2>
      </div>

      <div class="sidebarOption">
        <span class="material-icons"> search </span>
      <a href="search.php" style=" text-decoration: none;">   <h2>Explore</h2></a>
      </div>
      <div class="sidebarOption">
        <span class="material-icons"> perm_identity </span>
       <a href="user.php?tag=<?php echo $_SESSION['userName']; ?>" style=" text-decoration: none;">  <h2>Profile</h2></a>
      </div>
      <div class="sidebarOption">
        <span class="material-icons"> notifications_none </span>
        <a href="notifications.php" style=" text-decoration: none;"> <h2>Notifications</h2></a>
      </div>

      <div class="sidebarOption">
        <span class="material-icons"> mail_outline </span>
       <a href="messages.php" style=" text-decoration: none;">   <h2>Messages</h2></a>
      </div>

      <div class="sidebarOption">
        <span class="material-icons"> monochrome_photos </span>
              <a href="photos.php" style=" text-decoration: none;"> <h2>Photos</h2></a>
      </div>

      <div class="sidebarOption">
        <span class="material-icons"> settings </span>
             <a href="settings.php" style=" text-decoration: none;">  <h2>settings</h2></a>
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

      <!-- tweetbox starts -->
      <div class="tweetBox">
	  	  <h2   <span class="material-icons"> account_circle</span> 	  <?php echo htmlspecialchars($_SESSION["username"]); ?></h2><br>
      </div>
	  
        <div class="post__avatar">
<img src="<?php echo $_SESSION['userName']; ?>.jpg"  alt="Avatar"/>        
<?php echo $_SESSION['userName']; ?>        

        </div>


    <div class="widgets__widgetContainer">
	<blockquote class="twitter-tweet">
 <?php  
 //hashtag.php  
 if(isset($_GET["tag"]))  
 {  
      $tag = preg_replace("#[^a-zA-Z0-9_]#", '', $_GET["tag"]);  
      echo '<h1>' . $tag . '</h1>';  
      $connect = mysqli_connect("localhost", "root", "lolita1873", "tw");  
      $query = "SELECT * FROM messages1 where usuario LIKE '%".$tag."%'";  
      $result = mysqli_query($connect, $query);  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                echo '<p>'.$row["blog_title"].'</p><hr>';
                			
           }  
      }  
      else  
      {  
           echo '<p>No Data Found</p>';  
      }  
 }  
 ?>
  <?php 
  // Se conecta al SGBD 
  $user=$_SESSION["username"]; 
  if(!($conexion = mysql_connect("localhost", "root", "lolita1873"))) 
    die("Error: No se pudo conectar");
 $user=$_SESSION['username'] ;
  // Selecciona la base de datos 
  if(!mysql_select_db("tw", $conexion)) 
    die("Error: No existe la base de datos");
 
  // Sentencia SQL: muestra todo el contenido de la tabla "books" 
  $sentencia = "SELECT * FROM messages1 where usuario LIKE '%".$tag."%'"; 
  // Ejecuta la sentencia SQL 
  $resultado = mysql_query($sentencia, $conexion); 
  if(!$resultado) 
    die("Error: no se pudo realizar la consulta");

 echo "";
  while($fila = mysql_fetch_assoc($resultado)) 
  { 
  
 echo"<div id='container'>";
echo "<span class='material-icons'> account_circle</span>";  
       echo  $fila['usuario'] .'<br>';
	   echo  $fila['time'] .'<br>';
   echo"<h2>"; 
echo"<span class='material-icons'> filter_list</span> ";	     
   
    echo  $fila['message'] .'<br>';	 
  
     
   
	
   echo "</p><hr></div>";
  } 
 echo "</div></div>";
  // Libera la memoria del resultado
  mysql_free_result($resultado);
  
  // Cierra la conexión con la base de datos 
  mysql_close($conexion); 
?> 
              
 
	</<blockquote>
	
	
	
	
	</div>
            </div>
          </div>
          <img
            src="https://www.focus2move.com/wp-content/uploads/2020/01/Tesla-Roadster-2020-1024-03.jpg"
            alt=""
          />
          
        </div>
      </div>
      <!-- post ends -->

      <!-- post starts -->
      
      <!-- post ends -->
    </div>
    <!-- feed ends -->

    <!-- widgets starts -->
    <div class="widgets">
      <div class="widgets__input">
       
        <form action="search.php" method="get">
          <input type="text" name="tag" placeholder="Search" />
          <button type="submit"><i class="material-icons">search</i></button>
        </form>
      </div>

      <div class="widgets__widgetContainer">
        <h2>What's happening?</h2>
        <blockquote class="twitter-tweet">
          <p lang="en" dir="ltr">
            Sunsets don&#39;t get much better than this one over
            <a href="https://twitter.com/GrandTetonNPS?ref_src=twsrc%5Etfw">@GrandTetonNPS</a>.
            <a href="https://twitter.com/hashtag/nature?src=hash&amp;ref_src=twsrc%5Etfw"
              >#nature</a
            >
            <a href="https://twitter.com/hashtag/sunset?src=hash&amp;ref_src=twsrc%5Etfw"
              >#sunset</a
            >
            <a href="http://t.co/YuKy2rcjyU">pic.twitter.com/YuKy2rcjyU</a>
          </p>
          &mdash; US Department of the Interior (@Interior)
          <a href="https://twitter.com/Interior/status/463440424141459456?ref_src=twsrc%5Etfw"
            >May 5, 2014</a
          >
        </blockquote>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
    <!-- widgets ends -->
  </body>
</html>
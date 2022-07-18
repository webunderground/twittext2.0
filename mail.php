<?php
	require_once('common.php');
	checkUser();
?>

<?php

if(isset($_POST['msg']) && $_POST['msg'] != '') 
{
  
  require_once 'config.php';
  
  require_once 'arroba.php';
  
  $usuario = $_SESSION['userName'];  
 
  $message = strip_tags(trim($_POST['msg']));
  //get hashtag from message
   
  $hashtag = gethashtags($message);
 
  
  //insert into database
  //insert into wall table
	 $query = mysql_query("INSERT INTO `mail` ( `usuario`,`message`, `hashtag`) VALUES ( '$usuario', '$message', '$hashtag')") or die(mysql_error());
	 $ins_id = mysql_insert_id();
?>

<div class="msg_body" id="<?php echo $ins_id;?>">
<div class="msg_img" id=" <?php echo $_SESSION['userName']; ?> 
</div> 
<div class="msg_text">
<?php echo convert_hastangs($message); ?>

<div class="time">5 seconds ago</div> 
</div> 
</div>
<?php 
mysql_close();
}
?>
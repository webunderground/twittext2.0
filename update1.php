<?php
	require_once('common.php');
	checkUser();
?>
<?php
if(isset($_POST['msg']) && $_POST['msg'] != '') 
{
  require_once 'config.php';
  require_once 'functions.php';
  $message = strip_tags(trim($_POST['msg']));
  //get hashtag from message
  $user= $_SESSION['userName'];
  $usuario= $user;
  $hashtag = gethashtags($message);
  
  //insert into database
  //insert into wall table
	 $query = mysql_query("INSERT INTO `messages1` ( `usuario`,`message`, `hashtag`) VALUES ( '$usuario','$message', '$hashtag')") or die(mysql_error());
	 $ins_id = mysql_insert_id();
?>
<div class="msg_body" id="<?php echo $ins_id;?>">
<div class="msg_img"><?php echo $row['usuario'];?></div>
</div> 
<div class="msg_text">
<?php echo convert_links($message); ?>
<div class="time">5 seconds ago</div> 
</div> 
</div>
<?php 
mysql_close();
}
?>
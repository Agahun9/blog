<?php
include "../head.php";
if($_SESSION["verify"]==1){
?>
include "../classes/SqlService.php";
$edit=new SqlService();
$id=$_GET["ID"];
$r = mysqli_fetch_object($edit->zapytanie("select * from artykuly where ID=$id"));
?>
<!DOCTYPE html>
<html>
<head>
  <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=o1xy7w8xmrq8di2zzjz0mki50kaao74bgcesy0qdlxfz3swl"></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
</head>
<body>
<h1>Add your article</h1>
  <form method="POST" action="admincontroller.php"> 
    <input type="hidden" name="ID" value=<?php echo $r->ID;?></input>
    <textarea name="title" Placeholder="Title" required><?php echo $r->tytul; ?></textarea><br>
    <textarea name="shortdesc" Placeholder="Short description" rows="10" cols="50" required><?php echo $r->shortart; ?></textarea><br>
    <input type="text" name="image" Placeholder="image" value=<?php echo $r->zdj; ?> required></input> URL<br>
    <textarea id="mytextarea" name="article" required><?php echo $r->artykul; ?></textarea>
    <input type="submit" value="edit" name="editarticle">
  </form>
</body>
</html>


<?php
}
else{
  print "proszę się zalogować";
}
?>
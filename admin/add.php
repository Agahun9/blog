<?php
include "../head.php";
if($_SESSION["verify"]==1){
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
    <textarea name="title" Placeholder="Title" required></textarea><br>
    <textarea name="shortdesc" Placeholder="Short description" rows="10" cols="50" required></textarea><br>
    <input type="text" name="image" Placeholder="image"  required></input> URL<br>
    <textarea id="mytextarea" name="article" required>Hello, World!</textarea>
    <input type="submit" value="add" name="add">
  </form>
</body>
</html>


<?php
}
else{
  print "proszę się zalogować";
}
?>
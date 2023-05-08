<?php
if(isset($_POST['submit'])){
  if(isset($_FILES['img'])){
    print_r($_FILES['img']);
    $file_name = $_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $file_type = $_FILES['img']['type'];
    $file_size = $_FILES['img']['size'];
    $avaliable_ext= array('png', 'jpeg', 'jpg');
    $ext = strtolower(end(explode('.', $file_name)));
    if(!in_array($ext, $avaliable_ext)) $error ='invalid extention';
    if(!$error){
      move_uploaded_file($tmp_name, $file_name);
      echo "Done";
    }
    else echo $error;
}}
?>

<html>
<form method='post' enctype='multipart/form-data'>
  <table>
    <tr>
     <td>Image:</td><td> <input type='file' name='img'></td>
    </tr>
    <tr>
      <td>
        <input type='submit' name='submit'>
      </td>
    </tr>
  </table>

</form>
</html>
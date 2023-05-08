<?php
require('functions.php');
if(isset($_POST['show'])){
  $fname = check($_POST['fname']);
  $lname = check($_POST['lname']);
  $uname = check($_POST['uname']);
  $pass = check($_POST['pass']);
  $email = check($_POST['email']);
  $phone = check($_POST['phone']);
  $link = 'http://'.check($_POST['link']);
  $comments = check($_POST['comments']);
  $gender = $_POST['gender'];
  /*
    fname, lname => required, alpha, <15
    uname => required, alpha and numbers, <15
    pass => reuqired, alpha and numbers, >=6, <=20, hashing
    phone => reuired, numbers, 14 digits
    email => required, email
    link => required, url
    comments => no validations
   */
  $errors = array();
  if(!$fname || !ctype_alpha($fname) || strlen($fnamae) > 15)
      $errors['fname'] ='Invalid First Name';
  if(!$lname || !ctype_alpha($lname) || strlen($lnamae) > 15)
      $errors['lname'] = 'Invalid Last Name';
  if(!$uname || !ctype_alnum($uname) || strlen($name)>15)
      $errors['uname'] = 'Invalid Username';
  if(!$pass || !ctype_alnum($pass) || strlen($pass) < 6 || strlen($pass)>20)
      $errors['pass'] = 'Invalid Password';
  if(!$errors['pass']) 
      $pass = md5($pass);
  if(!$phone || !ctype_digit($phone) || strlen($phone) != 11 )
      $errors['phone'] = 'Invalid Phone Number';
  if(!$email || !filter_var($email, FILTER_VALIDATE_EMAIL))
      $errors['email'] = 'Invalid Email';
  if(!$link || !filter_var($link, FILTER_VALIDATE_URL))
      $errors['link'] = 'Invalid URL';
  if(!$gender)
      $errors['gender'] = 'Please Choose Your Gender';
  else $gender = $_POST['gender'];
  if(isset($_FILES['img'])){
    $img_name = $_FILES['img']['name'];
    $img_size = $_FILES['img']['size'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $img_ext = strtolower(end(explode('.',$img_name)));
    $avl_ext = array('jpg', 'png');
    if($img_size>2097152) $errors[image_up]='too large image<br>';
    if(!in_array($img_ext, $avl_ext)) $errors[image_up].='Invalid Extention';
    if(empty($errors[image_up])) {
      move_uploaded_file($img_tmp, $uname.'.'.$img_ext);
    }
  }
 
};


?>

<html>
  <body>
    <form method='post' enctype='multipart/form-data' action='output.php'>
      <table>
        <tr>
          <td>First name:</td>
            <td>
              <input type='text' name='fname' >
              <?php echo $errors['fname'] ?>
            </td>
        </tr>
        <tr>
          <td>Last name:</td>
          <td>
            <input type='text' name='lname'>
            <?php echo $errors['lname'] ?>
          </td>
            
        </tr>
        <tr>
          <td>Username:</td>
            <td>
              <input type='text' name='uname'>
              <?php echo $errors['uname'] ?>
          </td>
        </tr>
        <tr>
          <td>Email:</td>
          <td>
             <input name='email'>
             <?php echo $errors['email'] ?>
          </td>
        </tr>     
        <tr>
          <td>Password:</td>
          <td>
            <input type='password' name='pass'>
            <?php echo $errors['pass'] ?>
          </td>
        </tr>
        <tr?>
          <td>Phone number:</td>
          <td>
              <input type='text' name='phone'>
              <?php echo $errors['phone'] ?>
          </td>
        </tr>
        <tr>
          <td>Web site:</td>
          <td>
              <input name='link'>
          <?php echo $errors['link'] ?>
          </td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>
            <input type='radio' value='Male' name='gender'> Male 
            <input type='radio' value='Female' name='gender'> Female
            <?php echo "  ".$errors['gender']; ?>
          </td>
        </tr>
        <tr>
          <td>Comments:</td>
          <td><textarea cols=30 rows=4 name='comments'></textarea></td>
        </tr>
        <tr>
          <td>Image:</td>
          <td>
            <input type='file' name='img'>
            <?php echo $errors['image_up'] ?>
          </td>
        </tr>
        <tr>
          <td><input type='submit' name='show' value='Show'>
          <input type='reset'></td>
        </tr>
      </table>
    </form>
  </body>



</html>
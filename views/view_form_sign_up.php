<form  class="form_sign_up" action="../controller/controller_sign_up.php" method="post">

  <input required type="text" name="lastname" value="" placeholder="lastname">
  <br>
  <input required type="text" name="firstname" value="" placeholder="firstname">
  <br>
  <input required type="text" name="username" value="" placeholder="username">
  <br>
  <input required type="email" name="email" value="" placeholder="email">
  <br>
  <input required type="password" name="password" value="" placeholder="password">
  <br>
  <input required type="password" name="retape_password" value="" placeholder="retape your password">
  <br>
  <input class="btn-sign" type="submit" name="sign_up" value="Sign Up">

</form>

<?php


// if (isset($_POST['password']) && isset($_POST['retape_password']) && $password != $retape_password) {
//   echo "wrong password";
// }
//
// if (isset($_POST['username'])) {
//   if ($username.length<4) {
//     echo "your username must have at least 4 characters";
//   }
//   elseif ($username.length>20) {
//     echo "your username can't have more than 20 characters";
//   }
// }
// if (isset($_POST['password'])) {
//   if ($password.length<6) {
//     echo "your password must have at least 6 characters";
//   }
// }
 ?>

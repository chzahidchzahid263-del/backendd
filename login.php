<?php
include("../config/db.php");

if(isset($_POST['login'])){
    if($_POST['username']=="admin" && $_POST['password']=="1234"){
        $_SESSION['admin']="loggedin";
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid Login";
    }
}
?>
<form method="post">
<input name="username" placeholder="Username">
<input name="password" type="password" placeholder="Password">
<button name="login">Login</button>
<?php if(isset($error)) echo $error; ?>
</form>

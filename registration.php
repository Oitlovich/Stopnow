<?
$firstname = filter_var(trim($_POST['fname-reg']), FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lname-reg']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email-reg']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login-reg']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password-reg']), FILTER_SANITIZE_STRING);
$password_repeat = filter_var(trim($_POST['password-repeat']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'autorization');

$result1 = $mysql->query("SELECT * FROM reg WHERE login = '$login'");
$user1 = $result1->fetch_assoc();

if($password == $password_repeat && strlen($login) >= 6 && strlen($password) >= 3 && strlen($password_repeat) >= 3){
    if(!empty($user1)) 
    {
        $mysql->close();
        header('Location: pages/login-used.php');
    }
    else {
        $mysql->query("INSERT INTO reg ( `firstname`, `lastname`, `email`, login, password) VALUES('$firstname', '$lastname', '$email', '$login', '$password')");
        $mysql->close();
        
        header('Location: pages/signin_yep.php');
    }
}
else{
    header('Location: pages/pass_bruh.php');
}

?>
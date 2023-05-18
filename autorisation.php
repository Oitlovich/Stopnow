<?

$login = filter_var(trim($_POST['login-log']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password-log']), FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'Autorization');

$result1 = $mysql->query("SELECT * FROM `reg` WHERE `login`= '$login' AND `password`= '$password';");
$user1 = $result1->fetch_assoc();
$mysql->close();

if(!empty($user1)) 
    {
        header('Location: pages/inside.php');
    }
else{
    header('Location: pages/not_inside.php');
}
?>
процесс, в ходе которого одни участники проекта передают другим какую-либо информацию, связанную с достижением целей проекта. Участники коммуникации обмениваются информацией, при этом цель коммуникации — добиться от принимающей стороны точного понимания отправленного сообщения.
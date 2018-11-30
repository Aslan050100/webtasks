<?php
    session_start();
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'mysite';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if (isset($_POST['name'])) {
        $login = $_POST['name'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM adniministrator WHERE username='$login' AND pass='$pass'";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['login'] = $login;
            $_SESSION['admin'] = $row['admin'];
        }
        header('location: ../week11/task3.php');
    }
?>
<form action="task3.php" method="post">
    <input type="text" name="name">
    <input type="password" name="pass">
    <input type="submit">
</form>
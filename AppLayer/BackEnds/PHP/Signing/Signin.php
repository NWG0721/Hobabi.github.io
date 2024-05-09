<?php
$validation = array('UserNameValid' => '', 'PassWordValid' => '');
if (isset($_POST["submit"])) {
    if ($_POST['UserName']) {
        $validation['UserNameValid' ] = 'UserName is not valid';
        exit();
    }
    if ($_POST['PassWord']) {
        $validation['PassWordValid' ] = 'Password is incorrect';
        exit();
    }
    else 
    {

        include("./../../../../DataLayer/DataBase/Services/UsersRepository.php");

    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signing in to a HoBaBi</title>
    <link rel="stylesheet" href="../../../Styles/src/output.css">
</head>

<body>
    <div class="isolate "></div>
    <form action="signing.php" method="post">

        <label for="UserName">نام کاربری شوما</label>
        <input type="text" name="UserName" id="UserName">
        <div class="text-red-600 text-center"><?php echo("<p>".$validation['UserNameValid']."</p>");?></div>
        <label for="PassWord">رمز ورود</label>
        <input type="password" name="PassWord" id="PassWord">
        <div class="text-red-600 text-center"><?php echo("<p>".$validation['PassWordValid']."</p>");?></div>
        <input type="submit" name="submit" id="submit" value="حله">
    </form>
</body>

</html>
<?php

include ("C:\\xampp\htdocs\Hobabi\DataLayer\UsersRepository.php");

$validation = array('UserNameValid' => '', 'PassWordValid' => '');
if (isset($_POST["submit"])) {

    if (!isset($_POST['UserName']) || empty($_POST['UserName'])) {
        $validation['UserNameValid'] = 'UserName is empty';
    }

    if (!isset($_POST['PassWord']) || empty($_POST['PassWord'])) {
        $validation['PassWordValid'] = 'Password is empty';
    } else {

        $userName = htmlspecialchars($_POST['UserName']);
        $passWord = htmlspecialchars($_POST['PassWord']);
        $db = new UsersRepository();
        echo ("<script> alert($userName and $passWord);</script>");
        if ($db->userChecker($userName, $passWord)) {
            echo ("<script> window.location.replace('./../AdminPanel/AdminPanel.php');</script>");
        } else {
            $validation['UserNameValid'] = 'UserName is not valid';
            $validation['PassWordValid'] = 'Password is incorrect';
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-white" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signing in to a HoBaBi</title>
    <link rel="stylesheet" href="../../../Styles/src/output.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body class="h-full bg-cover dir-rtl bg-cyan-200">

    <div class="flex min-h-screen flex-col justify-center px-4 py-5 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-50 w-auto" src="./../../../Pictures/Exporteds/MainPage/Logos/BigLogo1-1.png"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">کیستی ای مهمان

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6" action="#" method="POST">
                        <div>
                            <label for="UserName" class="block text-sm font-medium leading-6 text-gray-900">اسمت
                                چیه</label>
                            <div class="mt-2">
                                <input id="UserName" name="UserName" type="UserName" autocomplete="UserName" required
                                    placeholder="رمزت"
                                    class="block w-full rounded-md border-2 py-1.5 px-2 text-center text-cyan-600 shadow-lg ring-2 ring-inset ring-cyan-900 placeholder:text-sky-300 placeholder:text-center focus:ring-3 focus:ring-inset focus:ring-sky-600 sm:text-lg sm:leading-6">
                            </div>
                        </div>
                        <div class="text-red-400"><?php echo ("<p>" . $validation['UserNameValid'] . "</p>"); ?></div>

                        <div>
                            <div class="flex items-center justify-center">
                                <label for="PassWord" class="block text-sm font-medium leading-6 text-gray-900">رمزتم
                                    جسارتا بزن</label>
                            </div>
                            <div class="mt-2">
                                <input id="PassWord" name="PassWord" type="PassWord" autocomplete="current-PassWord"
                                    required placeholder="اسمت"
                                    class="block w-full rounded-md border-2 py-1.5 px-2 text-center text-cyan-600 shadow-lg ring-2 ring-inset ring-cyan-900 placeholder:text-sky-300 placeholder:text-center focus:ring-3 focus:ring-inset focus:ring-sky-600 sm:text-lg sm:leading-6">
                            </div>
                        </div>
                        <div class="text-red-400"><?php echo ("<p>" . $validation['PassWordValid'] . "</p>"); ?></div>

                        <div>
                            <button type="submit" name="submit"
                                class="flex w-full justify-center border-solid border-2 border-sky-500 rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-black shadow-lg hover:bg-sky-500 hover:text-white hover:text-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">حله</button>
                        </div>
                    </form>
                </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
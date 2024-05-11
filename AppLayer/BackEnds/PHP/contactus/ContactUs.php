<?php
include ('../../../../DataLayer/MassageRepository.php');
if (isset($_POST['submit'])) {
    $massagerName = $_POST['UserName'];
    $massagerEmail = $_POST['Email'];
    $massagerMassage = $_POST['Massage'];
    $massageDate = date("Y-m-d H:i:s");
    $db = new MassageRepository();
    // echo("massagerName -> $massagerName | massagerEmail -> $massagerEmail | massagerMassage -> $massagerMassage |  massageDate -> $massageDate");
    if ($db->insertText($massagerName, $massagerEmail, $massagerMassage, $massageDate)) {
        echo ("<script>alert('Send Successfully');</script>");

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        /* Custom styles */
        .bg-c1 {
            background-color: #00FFCA;
        }

        .bg-c2 {
            background-color: #05BFDB;
        }

        .bg-c3 {
            background-color: #088395;
        }

        .bg-c4 {
            background-color: #0A4D68;
        }

        .bg-c5 {
            background-color: #FFD700;
        }

        .bg-c6 {
            background-color: #9CDBEC;
        }

        .footer-bg {
            background-color: #05BFDB;
        }
    </style>
</head>

<body class="bg-c6 min-h-screen flex items-center justify-center" dir="rtl">
    <a href=".../../../../../../index.php" class="absolute top-8 right-8 bg-white p-3 rounded-lg">بازگشت</a>
    <div class="bg-white rounded-3xl p-8 max-w-3xl w-full">
        <h1 class="text-4xl font-bold text-c4 mb-8">با ما لطفا ارتباط داشته باشید(توروخدا)</h1>
        <form action="#" method="post">
            <div class="mb-8">


                <label for="UserName" class="block text-lg font-semibold mb-2">نام</label>

                <input type="text" id="UserName" name="UserName"
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500"
                    required>
            </div>


            <div class="mb-8">

                <label for="Email" class="block text-lg font-semibold mb-2">ایمیل</label>

                <input type="email" id="Email" name="Email"
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500"
                    required>

            </div>


            <div class="mb-8">

                <label for="Massage" class="block text-lg font-semibold mb-2">پیام</label>

                <textarea id="Massage" name="Massage"
                    class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:border-blue-500"
                    rows="6" required></textarea>
            </div>
            <button type="submit" class="bg-c5 hover:bg-c4 text-white py-2 px-4 rounded-md" name="submit">ارسال</button>
        </form>
    </div>
    <!-- Footer -->
    <footer class="footer-bg py-2 text-center text-white text-sm absolute bottom-0 w-full">
        &copy; 2024 HoBaBi | تمامی حقوق محفوظ است
    </footer>
    <!-- End of Footer -->
</body>

</html>
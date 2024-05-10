<?php
include ("../../../../DataLayer/TextsRepository.php");
session_start();

if (isset($_POST['submit'])) {
    // مطمئن شوید که فایل ارسال شده است
    if(isset($_FILES["imageFile"])) {
        $db = new TextsRepository();

        $targetDirectory = "./../../../Pictures/Source/";
        $targetFile = $targetDirectory . basename($_FILES["imageFile"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // چک کردن سایز فایل
        if ($_FILES["imageFile"]["size"] > 5000000) {
            echo "متاسفانه، اندازه فایل شما بیشتر از حد مجاز است.";
        } else {
            // انتقال فایل به مسیر نهایی
            if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $targetFile)) {
                echo "فایل " . htmlspecialchars(basename($_FILES["imageFile"]["name"])) . " با موفقیت آپلود شد.";

                $title = $_POST['title'];
                $textArea = $_POST['texts'];
                $published = $_POST['status'];
                $usrID = $_POST['userId'];
                $pic = $targetFile;
                $type = $_POST['type'];

                $db->insertText($title, $pic, $textArea, $usrID, $published, $type);
            } else {
                echo "متاسفانه، مشکلی در آپلود فایل شما رخ داده است.";
                echo ("<script> window.location.replace('../AdminPanel/AdminPanel.php');</script>");
            }
        }
    } else {
        echo "فایلی انتخاب نشده است.";
    }
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100" dir="rtl">
<form action="#" method="post" enctype="multipart/form-data">

    <nav class="bg-gray-800 p-4 text-white fixed w-full top-0 z-10">
        <div class="flex justify-between items-center">
            <div>
                <span class="text-xl font-bold">تکست ادیتور حبابی</span>
            </div>
            <div class="flex items-center space-x-4">

                <select class="bg-white rounded-md py-2 px-4 text-black ml-4" required name="status">
                    <option value="69">عمومی</option>
                    <option value="45">خصوصی</option>
                </select>
                <select class="bg-white rounded-md py-2 px-4 text-black ml-4" required name="type">
                    <option value="1">سینما و تئاتر</option>
                    <option value="2">موسیقی و هنر</option>
                    <option value="3">علم و اکتشافات فضایی</option>
                    <option value="4">طراحی و معماری</option>
                    <option value="5">محیط زیست و حفاظت از طبیعت</option>
                    <option value="6">فرهنگ و هویت ملی</option>
                    <option value="7">مسافرت و گردشگری</option>
                    <option value="8">فناوری و تکنولوژی</option>
                    <option value="9">سلامتی و بهداشت</option>
                    <option value="10">گیم و سرگرمی</option>
                </select>
                <input type="file" name="imageFile" required>
                <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md" type="submit"
                        name="submit">ارسال
                </button>
            </div>
        </div>
    </nav>
    <div class="container mx-auto mt-16">
        <input type="text" required name="title"
               class="w-full h-16 px-4 py-2 bg-gray-100 text-lg rounded-md border border-gray-300 focus:outline-none focus:border-blue-500"
               placeholder="تیتر را وارد کنید...">
        <div class="flex items-center space-x-4 mb-4">
            <input type="number" class="hidden" value="<?php echo ($_SESSION['USER_ID']); ?>" name="userId">
        </div>
        <!-- نوشتن متن -->
        <textarea class="w-full bg-white rounded-md p-4 h-60 mb-4" required placeholder="متن را وارد کنید..."
                  name="texts"></textarea>
        <!-- دکمه ارسال -->
    </div>
</form>
<script src="../../../Javascripts/Addminpan.js"></script>
</body>
</html>

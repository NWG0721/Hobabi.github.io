<?php
include ("../../../../DataLayer/TextsRepository.php");
include ("../../../../DataLayer/TypeRepository.php");
session_start();
$id = $_GET['ID'];
$tyDB = new TypeRepository();
$db = new TextsRepository();
$currentText = $db->selectById($id);
if (isset($_POST['submit'])) {

    if (isset($_FILES["imageFile"])) {

        $targetDirectory = "./../../../Pictures/Source/";
        $targetFile = $targetDirectory . basename($_FILES["imageFile"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if ($_FILES["imageFile"]["size"] > 5000000) {
            echo "متاسفانه، اندازه فایل شما بیشتر از حد مجاز است.";
        } else {

            if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $targetFile)) {
                echo "فایل " . htmlspecialchars(basename($_FILES["imageFile"]["name"])) . " با موفقیت آپلود شد.";

                $title = $_POST['title'];
                $textArea = $_POST['texts'];
                $published = $_POST['status'];
                $usrID = $_SESSION['USER_ID'];
                $pic = $targetFile;
                $type = $_POST['type'];
                $Date = date("Y-m-d H:i:s");

                $db->updateText($id, $title, $pic, $textArea, $usrID, $published, $type, $Date);
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
    <link href="https:cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100" dir="rtl">
    <form action="#" method="post" enctype="multipart/form-data">
        <nav class="bg-gray-800 p-4 text-white fixed w-full top-0 z-10">
            <div class="flex justify-between items-center">
                <div>
                    <div class="text-xl font-bold">تکست ادیتور حبابی</div>
                </div>
                <div class="flex items-center space-x-4">
                    <select class="bg-white rounded-md py-2 px-4 text-black ml-4" required name="status">
                        <option value="69">عمومی</option>
                        <option value="45">خصوصی</option>
                    </select>
                    <select class="bg-white rounded-md py-2 px-4 text-black ml-4" required name="type">
                        <?php
                        $values = $tyDB->selectAll();
                        foreach ($values as $value) {
                            if ($value['TYP_ID'] == $currentText['WRITE_TYPE']) {
                                echo ("<option value=" . $value['TYP_ID'] . ">" . $value['TYP_NAME'] . " selected </option>");
                            } else {
                                echo ("<option value=" . $value['TYP_ID'] . ">" . $value['TYP_NAME'] . "</option>");
                            }
                        }
                        ?>
                    </select>
                    <input type="file" name="imageFile" required value="<?php echo ($currentText['WRITE_PIC']); ?>">
                    <div>
                        <a href="../AdminPanel/AdminPanel.php"
                            class="right-8 bg-white p-3 rounded-lg text-black">بازگشت</a>
                    </div>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md" type="submit"
                        name="submit">ارسال
                    </button>
                </div>
            </div>
        </nav>
        <div class="container mx-auto mt-16">
            <input type="text" required name="title" value="<?php echo ($currentText['WRITE_TITLE']); ?>"
                class="w-full h-16 px-4 py-2 bg-gray-100 text-lg rounded-md border border-gray-300 focus:outline-none focus:border-blue-500"
                placeholder="تیتر را وارد کنید...">
            <!-- دریافت USER_ID از سشن -->
            <input type="hidden" class="hidden" value="<?php echo ($_SESSION['USER_ID']); ?>" name="userId">
        </div>
        <!-- نوشتن متن -->
        <textarea class="w-full bg-white rounded-md p-4 h-60 mb-4" required placeholder="متن را وارد کنید..."
            name="texts"><?php echo ($currentText['WRITE_TEXT']); ?></textarea>
        <!-- دکمه ارسال -->
    </form>
    <script src="../../../Javascripts/Addminpan.js"></script>
</body>

</html>
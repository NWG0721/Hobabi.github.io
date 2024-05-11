<?php
include './../../../../DataLayer/TextsRepository.php';
$result;
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $db = new TextsRepository();

    $result = $db->selectById($id);

}

?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ReadOnly</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100" dir="rtl">
    <nav class="bg-gray-800 p-4 text-white fixed w-full top-0 z-10 flex justify-evenly items-center">
        <div>
            <a href="" onclick="goBack()" class="bg-white p-3 rounded-lg text-black text-left">بازگشت</a>
        </div>
        <div>
            <div class="text-xl font-bold">صفحه حبابی خوان</div>
        </div>
    </nav>

    <div class="container mx-auto mt-16">
        <div class="flex justify-around">
            <img src="<?php echo ($result['WRITE_PIC']); ?>" alt="تصویر" class="mb-4">
            <div class="flex flex-col justify-center">
                <h1 class="text-5xl font-semibold mb-4 text-center"><?php echo ($result['WRITE_TITLE']); ?></h1>
            </div>
        </div>

        <p class="bg-white p-4 border border-gray-300 shadow-md"><?php echo ($result['WRITE_TEXT']); ?></>
    </div>
</body>
<script>
    function goBack() {
        window.history.back();
    }
</script>

</html>
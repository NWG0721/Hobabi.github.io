<?php
include './../../../../DataLayer/TextsRepository.php';
include './../../../../DataLayer/ContactsRepository.php';
$db = new TextsRepository();
if (isset($_POST['Delete'])) {
    if (isset($_GET['ID'])) {
        $id = $_GET['ID'];
        $db = new TextsRepository();
        $db->deleteText($id);
        echo "<script>alert('موفقیت آمیز حذف شد!');</script>";
    } else {
        echo "<script>alert('خطا در حذف!');</script>";
    }
}
$cDB = new ContactsRepository();
$res = $cDB->select();

?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobabi Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../../Styles/src/output.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="../../../Styles/FastStyles.css">
</head>

<body dir="rtl">
    <div class="container relative max-w-full p-0 m-0 bg-cyan-200 h-screen grid grid-cols-12 grid-rows-3 ">
        <div class="col-start-1 col-end-3 bg-cyan-500 row-start-1 row-span-3 flex flex-col overflow-auto">
            <div>
                <img src="./../../../Pictures/Exporteds/MainPage/Logos/BigLogo1-1.png" alt="logo"
                    class="hover:scale-110">
            </div>
            <div class="flex justify-center text-center">
                <ul>
                    <div>
                        <div
                            class="m-15 mt-10 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300 cursor-pointer">
                            <li onclick="Writes()">صفحه کمانی</li>
                        </div>
                        <div
                            class="m-15 mt-16 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300 cursor-pointer">
                            <li onclick="">کالا ها</li>
                        </div>
                        <div
                            class="m-15 mt-16 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300 cursor-pointer">
                            <li onclick="Contacts()">موتاوا</li>
                        </div>
                        <div
                            class="m-15 mt-16 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300 cursor-pointer">
                            <li onclick="">درون جعبه</li>
                        </div>
                        <div
                            class="m-15 mt-16 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300 cursor-pointer">
                            <li onclick="">دسته بندی ها</li>
                        </div>
                        <div
                            class="m-15 mt-16 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300 cursor-pointer">
                            <li onclick="">کاربران</li>
                        </div>
                        <div
                            class="m-15 mt-16 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300 cursor-pointer">
                            <li onclick="">خروج</li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <div class="container max-w-full p-0 m-0  top-0 col-start-3 col-end-13 row-start-1 row-end-4">
            <div class="text-center text-4xl mt-20">
                <p>به صفحه کمانی خود خوش آمدید</p>
            </div>

            <div class="" id="Writes">
                <div
                    class="justify-center w-auto mx-10 bg-sky-300 mt-10 flex flex-col rounded-2xl big-W pb-10 overflow-auto ">
                    <div class="container mx-auto p-20 pt-96">
                        <div class="grid grid-cols-1 gap-4">
                            <?php
                            include './../../PHP/Carts/TextCartsAll.php';
                            ?>
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="flex justify-around text-center flex-row bg-sky-300 mt-10 mx-20 rounded-3xl ">
                        <div>
                            <li>
                                <button onclick="Redirect()"
                                    class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">افزودن</button>
                            </li>
                        </div>
                        <div>
                            <li>
                                <button onclick="Refresh()"
                                    class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">نوآوری</button>
                            </li>
                        </div>
                        <div>
                            <li>
                                <button onclick="UpDatediraction(<?php echo $id; ?>)"
                                    class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">آرایش</button>
                            </li>
                        </div>
                        <div>
                            <li>
                                <form action="#" method="Post">
                                    <button type="submit" name="Delete"
                                        class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">پاکیدن</button>
                                </form>
                            </li>
                        </div>
                    </ul>
                </div>

            </div>
            <div class="hidden" id="Contacts">
                <form action="#" method="post">
                    <div class="w-full relative">
                        <div
                            class="w-full h-[655px] left-0 top-16 absolute bg-cyan-400 rounded-[52px] border border-black">
                        </div>
                        <div
                            class="w-full h-[215px] left-0 top-[504px] absolute bg-sky-800 rounded-bl-[52px] rounded-br-[52px]">
                        </div>
                        <div
                            class="w-[246px] h-[313px] left-[38px] top-[150px] absolute bg-teal-600 rounded-[48px] flex flex-col justify-center">
                            <img src="<?php echo $res['CONTENTS_HEADPIC']; ?>" alt="">
                            <input type="file">
                        </div>
                        <div
                            class="left-[709px] top-[89px] absolute text-right text-black text-xl font-normal font-['Inter']">
                            <input id="feed1" name="feed1" type="text" required placeholder="فید 1"
                                value="<?php echo $res['CONTENTS_FEEDER1']; ?>"
                                class="block w-full rounded-md border-2 py-1.5 px-2 text-center text-cyan-600 shadow-lg ring-2 ring-inset ring-cyan-900 placeholder:text-sky-300 placeholder:text-center focus:ring-3 focus:ring-inset focus:ring-sky-600 sm:text-lg sm:leading-6">
                        </div>
                        <div
                            class="left-[709px] top-[160px] absolute text-right text-black text-xl font-normal font-['Inter']">
                            <input id="feed2" name="feed2" type="text" required placeholder="فید 2"
                                value="<?php echo $res['CONTENTS_FEEDER2']; ?>"
                                class="block w-full rounded-md border-2 py-1.5 px-2 text-center text-cyan-600 shadow-lg ring-2 ring-inset ring-cyan-900 placeholder:text-sky-300 placeholder:text-center focus:ring-3 focus:ring-inset focus:ring-sky-600 sm:text-lg sm:leading-6">
                        </div>
                        <div
                            class="left-[708px] top-[256px] absolute text-right text-black text-xl font-normal font-['Inter']">
                            <input id="feed3" name="feed3" type="text" required placeholder="فید 3"
                                value="<?php echo $res['CONTENTS_FEEDER3']; ?>"
                                class="block w-full rounded-md border-2 py-1.5 px-2 text-center text-cyan-600 shadow-lg ring-2 ring-inset ring-cyan-900 placeholder:text-sky-300 placeholder:text-center focus:ring-3 focus:ring-inset focus:ring-sky-600 sm:text-lg sm:leading-6">
                        </div>
                        <div
                            class="left-[659px] top-[515px] absolute text-right text-black text-xl font-normal font-['Inter']">
                            <input id="feed4" name="feed4" type="text" required placeholder="فید 4"
                                value="<?php echo $res['CONTENTS_FOOTER']; ?>"
                                class="block w-full rounded-md border-2 py-1.5 px-2 text-center text-cyan-600 shadow-lg ring-2 ring-inset ring-cyan-900 placeholder:text-sky-300 placeholder:text-center focus:ring-3 focus:ring-inset focus:ring-sky-600 sm:text-lg sm:leading-6">
                        </div>
                        <div
                            class="left-[226px] top-[515px] absolute text-right text-black text-xl font-normal font-['Inter']">
                            <input id="feed5" name="feed5" type="text" required placeholder="فید 5"
                                value="<?php echo $res['CONTENTS_FOOTER1']; ?>"
                                class="block w-full rounded-md border-2 py-1.5 px-2 text-center text-cyan-600 shadow-lg ring-2 ring-inset ring-cyan-900 placeholder:text-sky-300 placeholder:text-center focus:ring-3 focus:ring-inset focus:ring-sky-600 sm:text-lg sm:leading-6">
                        </div>
                        <div
                            class="left-[226px] top-[563px] absolute text-right text-black text-xl font-normal font-['Inter']">
                            <input id="feed6" name="feed6" type="text" required placeholder="فید 6"
                                value="<?php echo $res['CONTENTS_FOOTER2']; ?>"
                                class="block w-full rounded-md border-2 py-1.5 px-2 text-center text-cyan-600 shadow-lg ring-2 ring-inset ring-cyan-900 placeholder:text-sky-300 placeholder:text-center focus:ring-3 focus:ring-inset focus:ring-sky-600 sm:text-lg sm:leading-6">
                        </div>
                        <div    
                            class="left-[660px] top-[563px] absolute text-right text-black text-xl font-normal font-['Inter']">
                            <input id="feed7" name="feed7" type="text" required placeholder="فید 7"
                                value="<?php echo $res['CONTENTS_FOOTER3']; ?>"
                                class="block w-full rounded-md border-2 py-1.5 px-2 text-center text-cyan-600 shadow-lg ring-2 ring-inset ring-cyan-900 placeholder:text-sky-300 placeholder:text-center focus:ring-3 focus:ring-inset focus:ring-sky-600 sm:text-lg sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <ul class="flex justify-around text-center flex-row bg-sky-300 mt-10 mx-20 rounded-3xl ">
                            <div>
                                <li>
                                    <button type="submit" name="save-Mainpage"
                                        class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125 hover:w-64">ساوه</button>
                                </li>
                            </div>

                        </ul>
                    </div>
                </form>

            </div>
            <div class="hidden" id="Inbox">
                <div
                    class="justify-center w-auto mx-10 bg-sky-300 mt-10 flex flex-col rounded-2xl big-W pb-10 overflow-auto ">
                    <div class="container mx-auto p-20 pt-96">
                        <div class="grid grid-cols-1 gap-4">
                            <?php
                            include '../../../../DataLayer/MassageRepository.php';
                            $msgDB = new MassageRepository();
                            include '../Carts/MessageCarts.php';
                            ?>
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="flex justify-around text-center flex-row bg-sky-300 mt-10 mx-20 rounded-3xl ">
                        <div>
                            <li>
                                <button onclick="Redirect()"
                                    class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">افزودن</button>
                            </li>
                        </div>
                        <div>
                            <li>
                                <button onclick="Refresh()"
                                    class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">نوآوری</button>
                            </li>
                        </div>
                        <div>
                            <li>
                                <button onclick="UpDatediraction(<?php echo $id; ?>)"
                                    class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">آرایش</button>
                            </li>
                        </div>
                        <div>
                            <li>
                                <form action="#" method="Post">
                                    <button type="submit" name="Delete"
                                        class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">پاکیدن</button>
                                </form>
                            </li>
                        </div>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    </div>
</body>
<?php
if (isset($_POST['save-Mainpage'])) {
    $success = false;
    if (isset($_FILES["imageFile"])) {

        $targetDirectory = "./../../../Pictures/Source/";
        $targetFile = $targetDirectory . basename($_FILES["imageFile"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if ($_FILES["imageFile"]["size"] > 5000000) {
            echo "متاسفانه، اندازه فایل شما بیشتر از حد مجاز است.";
        } else {
            if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $targetFile)) {
                echo "فایل " . htmlspecialchars(basename($_FILES["imageFile"]["name"])) . " با موفقیت آپلود شد.";

                $CONTENTS_HEADPIC = $targetFile;
                $CONTENTS_FEEDER1 = $_POST['feed1'];
                $CONTENTS_FEEDER2 = $_POST['feed2'];
                $CONTENTS_FEEDER3 = $_POST['feed3'];
                $CONTENTS_FOOTER = $_POST['feed4'];
                $CONTENTS_FOOTER1 = $_POST['feed5'];
                $CONTENTS_FOOTER2 = $_POST['feed6'];
                $CONTENTS_FOOTER3 = $_POST['feed7'];

                $success = $cDB->updateContents(
                    1,
                    $CONTENTS_FOOTER,
                    $CONTENTS_FEEDER1,
                    $CONTENTS_HEADPIC,
                    $CONTENTS_FEEDER2,
                    $CONTENTS_FEEDER3,
                    $CONTENTS_FOOTER1,
                    $CONTENTS_FOOTER2,
                    $CONTENTS_FOOTER3
                );

            } else {
                echo "متاسفانه، مشکلی در آپلود فایل شما رخ داده است.";
            }
        }
    } else {
        echo "فایلی انتخاب نشده است.";
    }

    if ($success) {
        echo "<script>alert('با موفقیت به‌روزرسانی شد! ');</script>";
    } else {
        echo "<script>alert('خطا در به‌روزرسانی! $success');</script>";
    }
}
?>
<script src="../Javascripts/Addminpan.js">
    function Redirect() {
        window.location.replace("../AppWrite/AddWrite.php");
    }
    function Refresh() {
        window.location.Refresh();
    }
    function UpDateAndDelete(id) {
        window.location.replace("../AdminPanel/AdminPanel.php?ID=" + id);
    }
    function UpDatediraction(id) {
        window.location.replace("../AppWrite/EditWrite.php?ID=" + id);
    }

    let write = document.getElementById("Writes");
    let contacts = document.getElementById("Contacts");
    let Inbox = document.getElementById("Inbox");

    function Writes() {
        write.classList.toggle("visible");
        contacts.classList.add("hidden");
        Inbox.classList.add("hidden");
    }

    function Contacts() {
        contacts.classList.toggle("visible");
        write.classList.add("hidden");
        Inbox.classList.add("hidden");
    }

    function Inbox() {
        Inbox.classList.toggle("visible");
        write.classList.add("hidden");
        contacts.classList.add("hidden");
    }

</script>

</html>

<!-- 
<div class="border-gold-500 border-2 w-96 rounded-lg bg-cyan-600 row-start-1 row-end-2 relative">
    <img src="none" alt="text">
</div>
<div class="text-right text-3xl row-start-3 row-end-4 ">
    <p>SDFSFSFFSDFSFF</p>
</div> -->
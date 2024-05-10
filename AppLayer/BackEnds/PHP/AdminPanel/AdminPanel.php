<?php
include './../../../../DataLayer/TextsRepository.php';

$text = new TextsRepository();
$result = $text->selectAll();
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
    <div class="container relative max-w-full p-0 m-0 bg-cyan-200 h-screen grid grid-cols-12 grid-rows-3">
        <div class="col-start-1 col-end-3 bg-cyan-500 row-start-1 row-span-3 flex flex-col">
            <div>
                <img src="./../../../Pictures/Exporteds/MainPage/Logos/BigLogo1-1.png" alt="logo"
                    class="hover:scale-110">
            </div>
            <div class="flex justify-center text-center">
                <ul>
                    <div>
                        <div
                            class="m-15 mt-10 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300">
                            <li onclick=""><a href="">صفحه کمانی</a></li>
                        </div>
                        <div
                            class="m-15 mt-16 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300">
                            <li onclick=""><a href="">نوشته ها</a></li>
                        </div>
                        <div
                            class="m-15 mt-16 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300">
                            <li onclick=""><a href="">کالا ها</a></li>
                        </div>
                        <div
                            class="m-15 mt-16 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300">
                            <li onclick=""><a href="">کاربران</a></li>
                        </div>
                        <div
                            class="m-15 mt-16 text-xl text-amber-300 hover:text-2xl p-4 px-20 border-y-2 border-cyan-300">
                            <li onclick=""><a href="">خروج</a></li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        <div class="container max-w-full p-0 m-0  top-0 col-start-3 col-end-13 row-start-1 row-end-4">
            <div class="text-center text-4xl mt-20">
                <p>به صفحه کمانی خود خوش آمدید</p>
            </div>


            <div
                class="justify-center w-auto mx-10 bg-sky-300 mt-10 flex flex-col rounded-2xl big-W pb-10 overflow-auto ">
                <div class="container mx-auto p-20 pt-96">
                    <div class="grid grid-cols-2 gap-4">

                        <div class="bg-sky-500 rounded-xl overflow-hidden flex">
                            <div class="border-gold-500 border-2 w-96 h-96 rounded-lg bg-cyan-600 relative">
                                <img src="none" alt="text">
                            </div>
                            <div class="flex flex-col justify-center">
                                <p>Title</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed aliquid ex laborum aspernatur cum officiis deleniti placeat repudiandae optio, tempore neque ducimus magni esse reiciendis eligendi? Magni soluta ex eaque!</pe>
                            </div>
                        </div>

                        <div class="bg-sky-500 rounded-xl overflow-hidden flex">
                            <div class="border-gold-500 border-2 w-96 h-96 rounded-lg bg-cyan-600 relative">
                                <img src="none" alt="text">
                            </div>
                            <div class="flex flex-col justify-center">
                                <p>Title</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed aliquid ex laborum aspernatur cum officiis deleniti placeat repudiandae optio, tempore neque ducimus magni esse reiciendis eligendi? Magni soluta ex eaque!</pe>

                            </div>
                        </div>

                        <div class="bg-sky-500 rounded-xl overflow-hidden flex">
                            <div class="border-gold-500 border-2 w-96 h-96 rounded-lg bg-cyan-600">
                                <img src="none" alt="text">
                            </div>
                            <div class="flex flex-col justify-center">
                                <p>Title</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed aliquid ex laborum aspernatur cum officiis deleniti placeat repudiandae optio, tempore neque ducimus magni esse reiciendis eligendi? Magni soluta ex eaque!</pe>

                            </div>
                        </div>

                        <div class="bg-sky-500 rounded-xl overflow-hidden flex">
                            <div class="border-gold-500 border-2 w-96 h-96 rounded-lg bg-cyan-600">
                                <img src="none" alt="text">
                            </div>
                            <div class="flex flex-col justify-center">
                                <p>Title</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed aliquid ex laborum aspernatur cum officiis deleniti placeat repudiandae optio, tempore neque ducimus magni esse reiciendis eligendi? Magni soluta ex eaque!</pe>

                            </div>
                        </div>

                        <div class="bg-sky-500 rounded-xl overflow-hidden flex">
                            <div class="border-gold-500 border-2 w-96 h-96 rounded-lg bg-cyan-600">
                                <img src="none" alt="text">
                            </div>
                            <div class="flex flex-col justify-center">
                                <p>Title</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed aliquid ex laborum aspernatur cum officiis deleniti placeat repudiandae optio, tempore neque ducimus magni esse reiciendis eligendi? Magni soluta ex eaque!</pe>

                            </div>
                        </div>

                        <div class="bg-sky-500 rounded-xl overflow-hidden flex">
                            <div class="border-gold-500 border-2 w-96 h-96 rounded-lg bg-cyan-600">
                                <img src="none" alt="text">
                            </div>
                            <div class="flex flex-col justify-center">
                                <p>Title</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed aliquid ex laborum aspernatur cum officiis deleniti placeat repudiandae optio, tempore neque ducimus magni esse reiciendis eligendi? Magni soluta ex eaque!</pe>

                            </div>
                        </div>

                        <!-- دیگر کارت‌ها -->
                    </div>
                </div>
            </div>


            <div>
                <ul class="flex justify-around text-center flex-row bg-sky-300 mt-10 mx-20 rounded-3xl ">
                    <div>
                        <li>
                            <button onclick="Redirect()"
                                class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">Add</button>
                        </li>
                    </div>
                    <div>
                        <li>
                            <button onclick="Refresh()"
                                class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">Refresh</button>
                        </li>
                    </div>
                    <div>
                        <li>
                            <button onclick="Redirect()"
                                class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">Edit</button>
                        </li>
                    </div>
                    <div>
                        <li>
                            <button onclick="Redirect()"
                                class="bg-cyan-400 p-3 px-4 rounded-2xl shadow-lg border-cyan-700 border-2 hover:scale-125">Update</button>
                        </li>
                    </div>
                </ul>
            </div>

        </div>
    </div>
</body>
<script src="../../../Javascripts/Addminpan.js">

</script>
</html>

<!-- 
<div class="border-gold-500 border-2 w-96 rounded-lg bg-cyan-600 row-start-1 row-end-2 relative">
    <img src="none" alt="text">
</div>
<div class="text-right text-3xl row-start-3 row-end-4 ">
    <p>SDFSFSFFSDFSFF</p>
</div> -->
<?php
 include('../../../../DataLayer/TextsRepository.php/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobabi Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../../Styles/src/output.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
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
                    <div class="">

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
            <div class="justify-center w-auto mx-10 bg-sky-300 mt-10 flex flex-col rounded-xl h-96 pb-9">

                <div class="justify-center w-auto mx-10 bg-sky-500 mt-10 flex flex-col rounded-xl h-96">

                <?php 
                
                $text = new TextsRepository();

               $result =  $text->selectAll();   

                ?>

                </div>

            </div>
        </div>
    </div>

</body>

</html>
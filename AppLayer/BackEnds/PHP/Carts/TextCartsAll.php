<?php
include ('./../../../../DataLayer/UsersRepository.php');
include ('./../../../../DataLayer/TypeRepository.php');
$tB = new TypeRepository();
$ub = new UsersRepository();
$db = new TextsRepository();
$Writes = $db->selectAll();
$id;
$title;
$pic;
$text;
$author;
$status;
$type;
$date;
if (!$Writes) {
    echo ("<p class='text-center'>نوشته ای نیست</p>");
} else {
    foreach ($Writes as $Write) {
        $id = $Write['WRITE_ID'];
        $title = $Write['WRITE_TITLE'];
        $pic = $Write['WRITE_PIC'];
        $text = $Write['WRITE_TEXT'];
        $status = $Write['WRITE_STATUS'];
        if ($status == 69) {
            $status = "منتشرشده";
        } else {
            $status = "منتشرنشده";
        }
        $type = $Write['WRITE_TYPE'];
        $type = $tB->selectByTypeName($type);
        $date = $Write['WRITE_DATE'];
        $author = $ub->selectByParameters($Write['WRITE_AUTHOR']);
        // print_r($author);

        echo ("<div class='w-full h-80 relative mx-auto mt-10 pt-72'>
        <div class='w-full h-80 left-0 top-64 relative bg-teal-200 rounded-[2.313rem] '>
        
            <div class='flex flex-row jus' onclick='UpDateAndDelete($id)'>
                <div>
        
                    <img class='w-[262px] h-[258px] left-[663px] top-[7px] rounded-[31px]'
                        src='$pic' />
                </div>
                <div>
        
                    <div class='left-[500px] top-[66px] mt-6 mr-8 text-black text-4xl font-normal font-['Inter']'>
                    $title
                    </div>
                    <div
                        class='left-[38px] top-[145px] mt-6 mr-12 text-right text-black text-2xl font-normal font-['Inter']'>" . substr($text, 0, 200) . "</div>
                        <div
                        class='left-[38px] top-[145px] mt-6 mr-12 text-right text-black text-2xl font-normal font-['Inter']'><a href='../Poster/Post.php?id=" . $Write['WRITE_ID'] . "'>ادامه خواندن</a></div>
                </div>
            </div>
        
            <div
                class='w-full h-[3.313rem] left-0 top-[16.688rem] absolute bg-sky-900 rounded-bl-[2.313rem] rounded-br-[2.313rem] flex-row flex justify-around'>
                <div class='left-[383px] top-[279px] text-right text-yellow-400 text-2xl font-normal'>$date</div>
                <div class='left-[383px] top-[279px] text-right text-yellow-400 text-2xl font-normal'>" . $type['TYP_NAME'] . "</div>
                <div class='left-[805px] top-[279px] text-right text-yellow-400 text-2xl font-normal'>$status</div>
                <div class='left-[27px] top-[279px] text-right text-yellow-400 text-2xl font-normal'>" . $author[0]['USER_NAME'] . "</div>
            </div>
        </div>
        </div>");
    }

}

?>


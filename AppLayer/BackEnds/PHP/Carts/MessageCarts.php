<?php
$Writes = $Mdb->selectAll();
if (!$Writes) {
    echo ("<p class='text-center'>نوشته ای نیست</p>");

} else {
    foreach ($Writes as $Write) {
        $id = $Write['MASSAGE_ID'];
        $eMail = $Write['MASSAGER_EMAIL'];
        $author = $Write['MASSAGER_NAME'];
        $text = $Write['MASSAGER_TEXT'];
        $date = $Write['MASSAGE_DATE'];

        echo ("<div class='w-full h-80 mx-auto mt-10 pt-72'  onclick='UpDateAndDelete($id)'>
        <div class='w-full h-80 left-0 top-64 bg-teal-200 rounded-[2.313rem] '>
        
            <div class='flex flex-row'>
                <div>
        
                    <div class='left-[500px] top-[66px] mt-6 mr-8 text-black text-4xl font-normal font-['Inter']'>
                    $text
                    </div>
                </div>
            </div>
        
            <div
                class='w-full h-[3.313rem] bg-sky-900 rounded-bl-[2.313rem] rounded-br-[2.313rem] flex-row flex justify-around'>
                <div class=' text-right  text-yellow-400 text-2xl font-normal'>$date</div>
                <div class='text-right text-yellow-400 text-2xl font-normal'>$eMail</div>
                <div class=' text-right text-yellow-400 text-2xl font-normal'>$author</div>
            </div>
        </div>
        </div>");
    }

}

?>
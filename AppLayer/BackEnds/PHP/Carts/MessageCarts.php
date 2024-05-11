<?php
$Writes = $msgDB->selectAll();
if (!$Writes) {
    echo ("<p class='text-center'>نوشته ای نیست</p>");

} else {
    foreach ($Writes as $Write) {
        $eMail = $Write['MASSAGER_EMAIL'];
        $author = $Write['MASSAGER_NAME'];
        $text = $Write['MASSAGER_TEXT'];
        // print_r($author);

        echo ("<div class='w-full h-80 relative mx-auto mt-10 pt-72'>
        <div class='w-full h-80 left-0 top-64 relative bg-teal-200 rounded-[2.313rem] '>
        
            <div class='flex flex-row'>
                <div>
        
                    <div class='left-[500px] top-[66px] mt-6 mr-8 text-black text-4xl font-normal font-['Inter']'>
                    $text
                    </div>
                </div>
            </div>
        
            <div
                class='w-full h-[3.313rem] left-0 top-[16.688rem] absolute bg-sky-900 rounded-bl-[2.313rem] rounded-br-[2.313rem] flex-row flex justify-around'>
                <div class='left-[383px] top-[279px] text-right text-yellow-400 text-2xl font-normal'>$date</div>
                <div class='left-[383px] top-[279px] text-right text-yellow-400 text-2xl font-normal'>$eMail</div>
                <div class='left-[27px] top-[279px] text-right text-yellow-400 text-2xl font-normal'>$author</div>
            </div>
        </div>
        </div>");
    }

}

?>
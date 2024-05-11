<?php

include ('./DataLayer/ContactsRepository.php');

$cDB = new ContactsRepository();
$res = $cDB->select();
?>
<aside>
    <!-- ------------------------------| Random Texts Started |------------------------------ -->
    <div class="Rand-Text">
        <p id="RandText_p"></p>
    </div>
    <!-- ------------------------------| Random Texts Ended |------------------------------ -->
    <!-- ------------------------------| The Current Music Started |------------------------------ -->

    <div class="text-center flex flex-col justify-center"><p><?php echo $res['CONTENTS_FEEDER1']; ?></div>
    <div class="text-center flex flex-col justify-center"><p><?php echo $res['CONTENTS_FEEDER2']; ?></p></div>
    <div class="text-center flex flex-col justify-center"><p><?php echo $res['CONTENTS_FEEDER3']; ?></p></div>

    <!-- ------------------------------| The Current Music Ended |------------------------------ -->
</aside>
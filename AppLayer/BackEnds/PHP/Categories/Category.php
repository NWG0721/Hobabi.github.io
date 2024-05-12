<?php
include 'DataLayer/TextsRepository.php';

$db = new TextsRepository();
$date = $_GET['date'];

$articles = $db->selectByDate($date);

if (!$articles) {
    echo "مطلبی در این تاریخ یافت نشد.";
} else {
    foreach ($articles as $article) {
    }
}
?>
<?
include 'core/db.php';

$query = "SELECT * FROM news ORDER BY id DESC LIMIT 1";
$stmt = $pdo->query($query);

$lastnews = $stmt->fetchAll();

foreach ($lastnews as $data) {
?>
    <div class="news_title" style="background: url(images/<?=$data['image']?>); background-size: cover;">
        <h1><?=$data['title']?></h1>
        <?=$data['announce']?>
    </div>
<? }


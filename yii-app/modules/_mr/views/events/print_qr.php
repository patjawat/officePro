<?php
use chillerlan\QRCode\QRCode;
$data = 'https://programmerthailand.com';
$qr = new QRCode();

?>
<div style="text-align: center;">
    <h1> ลงทะเบียนเข้าประชุม</h1>
    <img src="<?=$qr->render($data);?>" style="width:600px;" />
    <h1><?=$model->title;?></h1>
</div>
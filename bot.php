<?php
function sendMessage($var) {

    $url = "https://api.telegram.org/bot1920595937:AAEg3Mkkyzw5fpiD1nMTA1yQHTb-x-qJlXg/sendMessage?parse_mode=markdown&chat_id=1987343767";
    $url = $url . '&text='.urlencode($var);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

// var yang di terima oleh form
$nama = 'randi ramli';
$email = 'randiramli@example.com';
$kelas = 'XI TEI';
$date = date('d F Y');

$var = $date. 'data kamu'.$nama.''.$email.''.$kelas.'';


sendMessage($var);

echo "<script>alert('Pesan berhasil terkirim!'); window.location.href = './';</script>";
?>
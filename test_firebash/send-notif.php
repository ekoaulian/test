<?php  
include 'koneksi.php';

$select = mysqli_query($koneksi, "SELECT token_firebase FROM tbl_global LIMIT 1");
$data = mysqli_fetch_assoc($select);

$curl = curl_init();
$auth = '';
$param['to'] = $data['token_firebase'];
$param['notification'] = [
    'title' => 'Ping!!',
    'body' => 'notif by firebash Siang Eko'
];

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($param, true),
    CURLOPT_HTTPHEADER => array(
      "Authorization: key=AAAA26ESWL0:APA91bHqnWsotok2o9itpO-NcYkwa3LRmSfPh2qSzXMKxQVqSQjsmD-OLgUSORNBUUlKbTkE76AoAICcJxO9JMPmp50vtvEioI74HbODCWCmknqSQJ67hbqxRQTdq8x3sWUkqQOtYSU4",
      "Content-Type: application/json"
    ),
));

$response = json_decode(curl_exec($curl), true);
$err = curl_error($curl);

curl_close($curl);

if ($err || empty($response)) {
    echo 'gagal';
} else {
    echo 'berhasil';
}
?>
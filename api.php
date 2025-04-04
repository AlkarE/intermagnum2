<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
header('Content-Type: application/json');
function sendPostBack($subid) {
    if ($subid){
        $newUrl = preg_replace(
            '/\/[^\/]+\.php$/',
            '/postback',
            (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
        );
        $send_get_url = 'http://91.108.190.21/6874d8b/postback?status=lead' . '&subid=' . $subid ;
    }
}
function get_ip()
{
    $value = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $value = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $value = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        $value = $_SERVER['REMOTE_ADDR'];
    }
    return $value;
}

// get cURL resource
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lllyx.ru/kellead/sender.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded',
]);
$array = [
    'first_name' => $_POST['firstname'],
    'last_name' => $_POST['lastname'],
    'password' => 'Qbwriu48',
    'email' => $_POST['email'],
    'funnel' => '33_offer',
    'aff_sub5' => $_COOKIE['_subid'] ?? null,
    'affid' => '137',
    'area_code' => $_POST['area_code'],
    'phone' => $_POST['phone'],
    'iso2' => $_POST['iso2'],
    '_ip' => get_ip(),
    'pp' => 'benito2'
];

$body = http_build_query($array);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
$response = curl_exec($ch);
curl_close($ch);

$file=fopen("kelmleads.txt","a");

fwrite($file,"Новая заявка\n");
fwrite($file,"Дата/время: ");
fwrite($file, date('d.m.Y H:i', strtotime('+3 hours')) ."\n");
fwrite($file,"ID клика: ");
fwrite($file, $array['subid'] ."\n");
fwrite($file,"Имя: ");
fwrite($file, $array['first_name'] ."\n");
fwrite($file,"Фамилия: ");
fwrite($file, $array['last_name'] ."\n");
fwrite($file,"Телефон: ");
fwrite($file, $array['area_code'] . $array['phone'] ."\n");
fwrite($file,"Почта: ");
fwrite($file, $array['email'] ."\n");
fwrite($file,"Ответ сервера: ");
fwrite($file, $response ."\n\n");
fclose($file);

$arr = json_decode($response, true);

if ($arr['success']){
    sendPostBack($array['aff_sub5']);
    setcookie('cabinet', $arr['url'], time()+60*90);
}
echo $response;

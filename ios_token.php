<?php
if($_GET) $_POST = $_GET;
function sign_creator(&$data){
    $sig = "";
    foreach($data as $key => $value){
        $sig .= "$key=$value";
    }
    $sig .= 'c1e620fa708a1d5696fb991c1bde5662';
    $sig = md5($sig);
    return $data['sig'] = $sig;
}
$data = array( 
    "api_key" => "3e7c78e35a76a9299309885393b02d97",
    "email" => $_POST['u'],
    "format" => "JSON",
    //"generate_machine_id" => "1",
    //"generate_session_cookies" => "1",
    "locale" => "en_us",
    "method" => "auth.login",
    "password" => $_POST['p'],
    "return_ssl_resources" => "0",
    "v" => "1.0"
);
sign_creator($data);
?>

<?php 
$data=file_get_contents('https://api.facebook.com/restserver.php?".Echo http_build_query($data);."');
$array = json_decode($data, true);
foreach($array['data'] as $arr){
echo '<div>'.$arr['access_token'].'</div><br/>';
 }
?>
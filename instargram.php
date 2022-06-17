<?php
//액세스 토큰 발급
$url = "https://api.instagram.com/oauth/access_token";
$post_array = array(
    'client_id'=>'Instagram 앱 ID',
    'client_secret'=>'Instagram 앱 시크릿 코드',
    'grant_type'=>'authorization_code',
    'redirect_uri'=>'유효한 OAuth 리디렉션 URI에 적었던 주소',
    'code'=>'발급받았던 인증 코드'
);
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST,true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_array);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result,true);
print_r($result);
?>
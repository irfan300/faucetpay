<?php

$payout="2.00000";
$winning_chance="47.50";

include"cfg.php";
date_default_timezone_set("Asia/Jakarta");
system("clear");
/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m"; 


system("toilet --width 70 -f pagga -F border  'DICE FAUCETPAY'");
echo $baner1 = "$putih2 =================================================================
 |$green2 #### #  # #### # #### #### ####$putih2 SHATOSHI        SERVER$green2 ONLINE$putih2 |
 |$green2 #    #  # #    # #  # #  # #  #                              $putih2 |
 |$green2 #### #  # # ## # #  # #  # #  #                              $putih2 |
 |$green2    # #  # #  # # #  # #  # #  #                              $putih2 |
 |$green2 #### #### #### # #### #  # ####$putih2 STATUS SCRIPT :$red2 V1           $putih2 |
 =================================================================\n";
echo $putih22." TANGGAL ".$green2.date("d.m.Y ").$putih2."  JAM ".$green2.date("H:i:s");
echo "\n ===============================\033[1;31m404\033[1;32m===============================";
echo $baner2 = "
$putih2 •Creator        :$green2 Kakek Sugiono
$putih2 •Support By     :$green2 Indra Yuda
$putih2 •Group Tele     :$green2 @SugionoShatoshi
$putih2 •Channel YT     :$green2 Sugiono Official
$putih2 •Donation Doge  :$red2 DFvVJc9pbty6Jrx94QuB7Da9LAsz7jnsso
$putih2 =================================================================
$red2 •JUDI MERUSAK KEIMANAN •JUDI ITU SYETAN YANG NYATA •JUDI DOSA\n";
echo $blue2." •••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••\n\n";

echo $yellow2." BTC LTC DOGE BCH DASH DGB ETH TRX\n";
echo $putih2." Masukan Curency     : ".$red2;
$coin = trim(fgets(STDIN));
echo $putih2." Masukan Bet         : ".$red2;
$bet = trim(fgets(STDIN));
echo $putih2." Target Profit       : ".$red2;
$opit = trim(fgets(STDIN));
echo $green2." [1]Hi$putih2 or$red2 [2]Low$putih2     : ".$red2;
$op = trim(fgets(STDIN));

if ($op=="1"){
$op = "🔺Hi";}else{
$op = "🔻Low";
}
$bt = "2";

echo "\n\n";

while("true"){
$ua = array(
"user-agent: Mozilla/5.0 (Linux; Android 9; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.125 Mobile Safari/537.36",
"content-type: application/x-www-form-urlencoded; charset=UTF-8",
//"cookie: __cfduid=d331721cd7e5238613e451eb8a09603c71597037692",
//cookie: _ga=GA1.2.1302324529.1597037694
//cookie: _gid=GA1.2.931433736.1598852296
//"cookie: cookieconsent_status=dismiss",
"referer: https://faucetpay.io/dice?c=8",
"referer: https://faucetpay.io/dice?c=7",
"referer: https://faucetpay.io/dice?c=6",
"referer: https://faucetpay.io/dice?c=5",
"referer: https://faucetpay.io/dice?c=4",
"referer: https://faucetpay.io/dice?c=3",
"referer: https://faucetpay.io/dice?c=2",
"referer: https://faucetpay.io/dice?c=1",
"cookie: source=".$source,
"cookie: faucetpay=".$faucetpay,
"cookie: remember_me=".$remember_me,
"cookie: session_token=".$session_token);
//cookie: _gat_gtag_UA_154633790_1=1
//"cookie: sc_is_visitor_unique=rx12149426.1598886236.324FD0DBA0164F1359CA8A46C18CD719.7.6.5.5.3.3.3.3.3");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$bet."&profit=".$bet."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($d>$opit){
echo $green2." Profit Sudah Mencapai Target...!!!\n";
break;
}else{}
if ($b==""){
break;
}

if ($d=="0"){
echo $red2." CAPTURE ULANG...!!!\n";
break;
}else{}
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$bet.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$bet.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
if ($a=="0"){
if ($G1=$bet*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data2 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G1."&profit=".$G1."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G1.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G1.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
if ($b==""){
break;
}
}else{}
if ($a=="0"){
if ($G2=$bet*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data3 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G2."&profit=".$G2."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data3);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G2.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G2.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G3=$bet*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data4 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G3."&profit=".$G3."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data4);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G3.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G3.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G4=$bet*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data5 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G4."&profit=".$G4."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data5);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G4.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G4.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G5=$bet*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data6 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G5."&profit=".$G5."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data6);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G5.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G5.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G6=$bet*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data7 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G6."&profit=".$G6."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data7);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G6.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G6.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G7=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data8 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G7."&profit=".$G7."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data8);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G7.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G7.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G8=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data9 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G8."&profit=".$G8."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data9);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G8.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G8.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G9=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data10 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G9."&profit=".$G9."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data10);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G9.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G9.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G10=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G10."&profit=".$G10."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G10.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G10.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G11=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G11."&profit=".$G11."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G11.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G11.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G12=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G12."&profit=".$G12."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G12.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G12.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G13=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G13."&profit=".$G13."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G13.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G13.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G14=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G14."&profit=".$G14."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G14.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G14.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G15=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G15."&profit=".$G15."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G15.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G15.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G16=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data2 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G16."&profit=".$G16."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G16.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G16.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G17=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data3 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G17."&profit=".$G17."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data3);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G17.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G17.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G18=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data4 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G18."&profit=".$G18."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data4);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G18.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G18.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G19=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data5 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G19."&profit=".$G19."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data5);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G19.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G19.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G20=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data6 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G20."&profit=".$G20."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data6);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G20.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G20.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G21=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data7 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G21."&profit=".$G21."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data7);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G21.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G21.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G22=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data8 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G22."&profit=".$G22."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data8);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G22.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G22.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G23=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data9 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G23."&profit=".$G23."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data9);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G23.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G23.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G24=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data10 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G24."&profit=".$G24."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data10);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G24.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G24.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G10=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G10."&profit=".$G10."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G10.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G10.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G11=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G11."&profit=".$G11."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G11.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G11.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G12=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G12."&profit=".$G12."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G12.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G12.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G13=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G13."&profit=".$G13."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G13.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G13.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G14=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G14."&profit=".$G14."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G14.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G14.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
if ($a=="0"){
if ($G15=$bet*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt*$bt);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://faucetpay.io/dice/play");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data11 = "play=true&coin=".$coin."&client_seed=null&bet_amt=".$G15."&profit=".$G15."&payout=".$payout."&winning_chance=".$winning_chance."&prediction=".$op;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data11);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$res = curl_exec($ch);
$json = json_decode($res);
$a = $json->win;
$b = $json->roll;
$c = $json->message;
$d = $json->balance;
if ($a=="1"){
echo $putih2." [\033[1;35m$op\033[1;37m]".$green2." •WIN  ".$G15.$putih2." Roll ".$green2.$b.$putih2." Balance ".$green2.$d." $coin\n";
}else{
echo $putih2." [\033[1;35m$op\033[1;37m]".$red2." •LOSE ".$G15.$putih2." Roll ".$green2.$b.$putih2." Balance ".$red2.$d." $coin\n";
}
}else{}
if ($b==""){
break;
}
}


<?php 
ob_start();
define('API_KEY','5411583087:AAEzt8OxvhGQEa_Ffm-t06w1E3lX1nvLlfU');
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){$zhrfaadd = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$zhrfaadd";
$marcus8 = file_get_contents($url); return json_decode($marcus8);}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;
$info_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo"); $info_tokens = json_decode($info_token);
$get_files = file_get_contents('ieoooo.php'); $get_done = file_get_contents('infos/explode.php');
$done = explode("\n", $get_done);
$get_id = file_get_contents('infos/info.php'); $get_ids = explode("\n", $get_id);
$from_id = $message->from->id;
mkdir("infos");
mkdir("ieoooo");
//======================================================//
$index="<html>
<meta HTTP-EQUIV='REFRESH' content='0; url=https://t.me/ZEPD8'/>
<a href='https://t.me/joinchat/ZEPD8'> رشق </a> 
<a href='https://t.me/iOm3y'>مالتي</a> 
<a href='https://t.me/ZEPD8'>ملفات خدميه  </a> 
</html>";

$ch = "@ZEPD8";//هنا تخلي معرف قناتك 
$admin = 5220076610 ;//هنا تخلي ايديك
$urls="weakubc.ml/mar";// رابط الاستضافه



$alsh = "-ZEPD8"; #معرف كروبك
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$alsh&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
عذرا 🍃 عليك اولا الاشتراك بالقناة 👇🏻
         لكي تتمكن من استخدام البوت 🐼
بعد ذلك اضغط /start مجددا ☁️
",
'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[  
[['text'=>"مساعده المطورين",'url'=>"https://t.me/joinchat/JEqlKUqjXFv0FAZw0os2CA"]],
]])]);return false;}

if($text == '/start' and !in_array($from_id, $get_ids)){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
اهلا بك في مصنع بوتات حماية .📡
- عـلـى سـورس كيو 


- كـل ماعـلـيــك الـضـغـط عـلـى ( صـنع بوت ) 😍

- اكتشف مميزات البوت وحدك 💋

معرف البوت  @music_keto_Bot
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'™ أصنع بوتك الان','callback_data'=>'addbot'],['text'=>'™ احذف بوتك الان','callback_data'=>'delete']],
[['text'=>'📡 قناة البوت 📡','url'=>'https://t.me/phprimm']],
[['text'=>'كيف اصنع بوت؟','callback_data'=>'help'],['text'=>'📮 تواصل','url'=>'https://t.me/ieoooobot']],
[['text'=>'📬 مطور البوت','url'=>'https://t.me/ieoooo']],],])]);}
if($data == 'addbot' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){file_put_contents('infos/info.php', "\n" . $chat_id2 . "\n",FILE_APPEND); bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- قم بأرسال توكن البوت يمكنك الحصول عليه من خلال @BotFather 🛠 ؛",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'↩️ - تراجع - ↪️','callback_data'=>'cancle']]]])]);}

if($data == 'addbot' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('infos/info.php', "\n" . $chat_id2 . "\n",FILE_APPEND); 
bot('editMessageText',
['chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- قم بأرسال توكن البوت يمكنك الحصول عليه من خلال @BotFather 🛠 ؛",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'↩️ - تراجع - ↪️','callback_data'=>'cancle']]]])]);}

if($data == 'addbot' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,
'text'=>"- لا يمكنك إنشاء أكثر من بوت ✖️ ؛",'show_alert'=>true]);}
if($text and in_array($from_id, $get_ids) and $info_tokens->ok == "true" ){
for($i = $mid - 3; $i < $mid; $i++){bot('deleteMessage',[
'chat_id'=>$chat_id,'message_id'=>$i]);}
$str = str_replace($from_id, '', $get_id);    
file_put_contents('infos/info.php', $str);    
file_put_contents('infos/explode.php', $from_id . "\n", FILE_APPEND);
$url_info = file_get_contents("https://api.telegram.org/bot$text/getMe");
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
- تم صنع بوت الخاص بك يمكنك ؛
- لدخول إلى البوت الخاص بك إضغط على الزر في الأسفل ⬇️ ؛ 
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏠️','callback_data'=>"home"]],
[['text'=>'🤖 إضغط هنا لدخول إلى البوت ؛','url'=>"https://t.me/$userr"]],]])]); 
bot('sendMessage',['chat_id'=>$admin,'text'=>"
 👨‍🎤 - هناك عضو صنع بوت  حمايه✔؛ 
➖➖➖
 🙎‍♂ - اسم العضو  [$name](tg://user?id=$from_id)
➖➖➖
〽️ - معرف العضو [@$username](tg://user?id=$from_id)
➖➖➖
⚜ - ايدي العضو [$from_id](tg://user?id=$from_id)

➖➖➖
🔰 - توكن البوت
 
`$text`
➖➖➖
",
'disable_web_page_preview'=>'true','parse_mode'=>"Markdown",]);
mkdir("ieoooo/$from_id");
file_put_contents("iOm3y/$from_id/info.php",$text . "\n" . $from_id);
file_put_contents("iOm3y/$from_id/bot.php", $get_files);
file_put_contents("info.txt,$from_id ."\n",FILE_APPEND);
file_put_contents("iOm3y/$from_id/chat.php", $from_id . "\n");
file_put_contents("iOm3y/$from_id/index.html","$index");
file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=$urls/ieoooo/$from_id/bot.php");}
file_put_contents("iOm3y/index.html","$index");
file_put_contents("zreaf/iOm3y/$from_id","$index");
if($text and in_array($from_id, $get_ids) and $info_tokens->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"- عذراً❗️هاذا التوكن غير صالح ⚠️ ؛",'reply_to_message_id'=>$message->message_id,'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>' - تراجع - ↪️','callback_data'=>'cancle']]]])]);} 
if($data == 'cancle' and in_array($from_id, $get_ids)){
$str = str_replace($chat_id2, "", $get_id) ;
file_put_contents('infos/info.php', $str);
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
اهلا بك في مصنع بوتات حماية .📡
- عـلـى سـورس كيتو


- كـل ماعـلـيــك الـضـغـط عـلـى ( صـنع بوت ) 😍

- اكتشف مميزات البوت وحدك 💋

معرف البوت :~@music_keto_Bot


",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'™ أصنع بوتك الان','callback_data'=>'addbot'],['text'=>'™ احذف بوتك الان','callback_data'=>'delete']],
[['text'=>'📡 قناة البوت 📡','url'=>'https://t.me/phprimm']],
[['text'=>'كيف اصنع بوت؟','callback_data'=>'help'],['text'=>'📮 تواصل','url'=>'https://t.me/iOm3y']],
[['text'=>'📬 المطور','url'=>'https://t.me/ieoooo']],],])]);}
if($data == 'home'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
اهلا بك في مصنع بوتات حماية .📡
- عـلـى سـورس كيتو 


- كـل ماعـلـيــك الـضـغـط عـلـى ( صـنع بوت ) 😍

- اكتشف مميزات البوت وحدك 💋

معرف البوت :~ @music_keto_Bot

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'™ أصنع بوتك الان','callback_data'=>'addbot'],['text'=>'™ احذف بوتك الان','callback_data'=>'delete']],
[['text'=>'📡 قناة البوت 📡','url'=>'https://t.me/phprimm']],
[['text'=>'كيف اصنع بوت؟','callback_data'=>'help'],['text'=>'📮 تواصل','url'=>'https://t.me/ieoooobot']],
[['text'=>'📬 المطور','url'=>'https://t.me/iOm3y']],
],])]);}
if($data == 'help'){
bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"
🇮🇶┋طريقة صنع بوت بالتفصيل .

سنقوم بالدخول الىBotFather وهو عبارة عن بوت الإنشاء التابع لتيلجرام لإنشاء بوت تيليجرام وذلك عن طريق المعرف الأتي ؛
@BotFather

• بعد الدخول الى البوت كالأتي ؛

- نضغط على /start لبدء انشاء البوت ، ثم ستظهر لنا واجهة البوت نقوم بالضغط على  ( /newbot  )
- بعد اختيار  ( /newbot )  والتي تقوم بدورها بالبدء بإنشاء البوت ؛
- هنا يخبرنا ان نقوم بإدخال اسم البوت قم بإختيار اسم للبوت الذي تريده مثال انا سأقوم بإختيار حسن مؤيد ومن ثم  ؛

- ارسل اليوزر ( معرف ) بدون @ وفي نهايه المعرف كلمه ( bot ) ؛
- يرسلك رساله مثل الصوره في الاعلى هذا هو التوكن يبدا من الرقم 
التوكن .

﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
•[ اي اشكال بالبوت راسل المطور](https://t.me/ieoooo)   
•[تواصل المطور ](https://t.me/ieoooobot)

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'الصفحة الرئيسية 🏠️','callback_data'=>'home']],[['text'=>'📡 - إضغط هنا وتابع جديدنا - ','url'=>'https://t.me/joinchat/AAAAAFAlmjwhQCFqVpfMbQ']],],])]);}
//========================================================================
if($data == 'delete' and in_array($chat_id2,$done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت ➺','reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'↩️ - تراجع - ', 'callback_data'=>'home'],['text'=>'✔️ - نعم بالتأكيد -','callback_data'=>'yesdel'],]]])]);}
if($data == 'yesdel' and in_array($chat_id2, $done)){bot('editMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- تم حذف البوت بنجاح ➺ ؛",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>'الصفحة الرئيسية 🏠️','callback_data'=>"home"]]]])]);
$str1 = str_replace($chat_id2, '', $get_done);
file_put_contents('infos/explode.php', $str1);
$get_token = file_get_contents("ieoooo/$chat_id2/info.php");
$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");
$json = json_decode($get_url);
$url = $json->result->url;
file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");
unlink("iOm3y/$chat_id2/bot.php");
unlink("iOm3y/$chat_id2/info.php");}
if($data == 'delete' and !in_array($chat_id2,$done)){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,'text'=>"- إصنع بوت أولاً ⚜ ؛",'show_alert'=>true]);}
echo "Errors No found";
$get_ids = file_get_contents('info.txt');
$ids = explode("\n", $get_ids);
$get_bc = file_get_contents('bc.txt');
$bc = explode("\n", $get_bc);
$count = count($ids);

//بدايه الاوامر//

$admin = "5220076610 "; #ايديك
$hassan = "5220076610 ";
$from_id = $message->from->id;
mkdir("alsh");
if(isset($message)){
$al = file_get_contents('Alsh.txt');
$alo = explode("\n",$al);
if(!in_array($from_id,$alo)){
$alsh2 = fopen("Alsh.txt", "a") or die("Unable to open file!");
fwrite($alsh2, "$from_id\n");
fclose($alsh2);}}
#الاوامر
$bot = file_get_contents("alsh/com.txt");
if($text == "/admin" and $chat_id == $admin ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
💭┊مرحبا يا {$name } 🍃
=•=•=•=•=•=•=•=•=•=•=•=•=
في لوحه الاوامر اتبع اسفل مافي الكيبورد
=•=•=•=•=•=•=•=•=•=•=•=•=
",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"اذاعه انلاين"],['text'=>"الاحصائيات"]],
[['text'=>"اذاعه رساله"],['text'=>"اذاعه توجيه"]],
]
])
]);
}

if($text == "اذاعه رساله" and $chat_id == $admin ){
file_put_contents("alsh/com.txt","send");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" ارسل رسالتك الان عزيزي 🎯. #يمكنك استخدام الماركدان ايضا",
    'parse_mode'=>'html',
  ]);
}
$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$alshh3 = fgets($ali);
if($bot == "send" and $chat_id == $admin ){
bot('sendMessage', [
'chat_id' =>$alshh3,
'text'=>$text,
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>"true"
]);
file_put_contents("alsh/com.txt","");
}
}
$alshh3 = file_get_contents("Alsh.txt");
$member_id = explode("\n",$alshh3);
$member = count($member_id) -1;
if($text == "الاحصائيات" and $chat_id == $admin ){
bot('sendmessage',[
'chat_id'=>$chat_id,
    'text'=>"
اهلا بك عزيزي المطور اليك احصائيات بوتك 

عدد اعضا البوت: $member 🎁.

عدد البوتات المصنوعه :$count ♥️.
",
  ]);
}
$vg = file_get_contents("lsh.txt");
$tx = file_get_contents("alh.txt");
if($text == "اذاعه انلاين" and $chat_id == $admin){
file_put_contents("lsh.txt","sn");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حسـننآ آلآن ارسل نص تريد نشرة ك منشور شفاف 🎁. #ملاحظه يمكنك استخدام الماركدوان ايضا",
]);
}
if($vg == "sn"){
file_put_contents("alh.txt","$text");
file_put_contents("lsh.txt","snn");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حسننا الان استخدم🎄.
text = link",
]);
}
$i=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
$rows = explode("اذاعه توجيه",$text);
foreach($rows as $row){
$j=0;
$keyboard["inline_keyboard"][$i]=[];
$bottons = explode("+",$row);
foreach($bottons as $botton){
$alsh = explode("=",$botton."=");
$Ibotton = ["text" => trim($alsh[0]), "url" => trim($alsh[1])];
$keyboard["inline_keyboard"][$i][$j] = $Ibotton;
$j++;                }                $i++;            }
$reply_markup=json_encode($keyboard);
if($vg == "snn"){
$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$alshh = fgets($ali);
bot('sendmessage',[
'chat_id'=>$alshh,
'text'=>$tx,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>($reply_markup)
]);
}
file_put_contents("lsh.txt","hi");
file_put_contents("alh.txt","");
}

if($text == "اذاعه توجيه" and $chat_id == $admin ){
file_put_contents("alsh/com.txt","fd");
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" ارسل توجيهك الان عزيزي 📌.",
    'parse_mode'=>'html',
  ]);
}
if($bot == "fd"){
$ali = fopen( "Alsh.txt", 'r');
while(!feof( $ali)){
$ali2 = fgets($ali);
bot('forwardMessage',[
 'chat_id'=>$ali2,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 file_put_contents("alsh/com.txt","");
 }
 }
<?php 

ob_start();

$API_KEY = '5454621874:AAHgdBetQFuScJxRg9xgsYeuu-9xOFQYv24';
##------------------------------##
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 function sendmessage($chat_id, $text, $model){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>$mode
 ]);
 }
 function sendphoto($chat_id, $photo, $captionl){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendaudio($chat_id, $audio, $caption, $title ,$performer){
 bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>$audio,
 'caption'=>$caption,
 'title'=>$title,
 'performer'=>$performer
 ]);
 }
 function senddocument($chat_id, $document, $caption){
 bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>$document,
 'caption'=>$caption
 ]);
 }
 function sendsticker($chat_id, $sticker){
 bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>$sticker
 ]);
 }
 function sendvideo($chat_id, $video, $caption){
 bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>$video,
 'caption'=>$caption
 ]);
 }
 function EditMessageText($chatid,$message_id,$text){
    bot('editmessagetext',[
    'chat_id'=>$chatid,
    'message_id'=>$message_id,
    'text'=>$text
    ]);
}
 function sendvoice($chat_id, $voice, $caption){
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$voice,
 'caption'=>$caption
 ]);
 }
 function sendaction($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
 ]);
 }
 function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
//====================Tikapp======================//
$update = json_decode(file_get_contents('php://input'));
include("jdf.php");
$date =  jdate('d');
$fasl =  jdate('f');
$h =  jdate('G:i:s');
$m = jdate('q');
$s = jdate('s');
$hafte = jdate('l');
$y = jdate('Y');
$l = jdate('Y/n/j');
$mo =  jdate('F');
$q =  jdate('Q');
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
$reply = $update->message->reply_to_message;
@$ali = file_get_contents("ali.txt");
@$hossein = file_get_contents("hossein.txt");
@$dataa = json_decode(file_get_contents("data.json"), true);
$tin = file_get_contents("https://Api.eliyateam.ir/old/time.php");
$timee = json_decode($tin, true);
$time = $timee["FAtime"];
$date = $timee["FAdate"];
@$year = file_get_contents("data/year.txt");
@$month = file_get_contents("data/month.txt");
@$day = file_get_contents("data/day.txt");
$ADMIN = 5059280908;
$abzar = json_encode
(['resize_keyboard' => true,
    'inline_keyboard'=>[
[['text'=>"اینستادانلودر۱⁦✴️⁩",'callback_data'=>"insta1"]],
[['text'=>"اینستادانلودر۲💫",'callback_data'=>"insta2"],
['text'=>"یوتیوب دانلودر💥",'callback_data'=>"yout"]],
[['text'=>"دریافت پروکسی⁦🕸️⁩",'callback_data'=>"proxygive"],
['text'=>"واژه یاب⁦🗞️⁩",'callback_data'=>"vajeh"]]  , 
[['text'=>"عکس زمینه⁦♨️⁩",'callback_data'=>"ax"],
['text'=>"نرخ ارز و طلا💰",'callback_data'=>"arzotala"]]  ,
[['text'=>"نرخ خودرو🚗",'callback_data'=>"khodro"],
['text'=>"نرخ موبایل📱",'callback_data'=>"mobne"]],
[['text'=>"خبرگزاری جوان💠",'callback_data'=>"khabar"],
 ['text'=>"تاریخ و زمان🕔",'callback_data'=>"zaman"]],
[['text'=>"🔄تبدیلگر🔄⁩",'callback_data'=>"tabdilgar"],
['text'=>"دانلود برنامه 📡",'callback_data'=>"apk"]],
[['text'=>"اطلاعات تولد🤰",'callback_data'=>"tavalod"],
['text'=>"فال حافظ🌟",'callback_data'=>"fal"]], [['text'=>"فیلمکده⁦📽️⁩",'callback_data'=>"filmkadeh"],
['text'=>"موزیک ویدئو🎬⁩",'callback_data'=>"moozik"]],
[['text'=>"اطلاعات فنی موبایل📵",'callback_data'=>"mobet"]],
]]);
$arzotala = json_encode(['resize_keyboard' => true, 'inline_keyboard' => [

[['text' => "نرخ طلا💰", 'callback_data' => "tala"]],
[['text' => "نرخ ارز💵", 'callback_data' => "arz"]],
]]);
$bargasht = json_encode
(['resize_keyboard' => true,
'inline_keyboard'=>[
[['text' => "بازگشت↩️", 'callback_data' => "ab"]],
]]);
//====================Tikapp======================//
if(preg_match('/^\/([Ss]tart)/',$text)){
$user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('Member.txt',$add_user);
    }
sendaction($chat_id, typing);
bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"سلام کاربر عزیز👋

به ربات خودتون خوش اومدین",
                'parse_mode'=>$mode,
      'reply_markup'=>$abzar]);
      
}

//====================Tikapp======================//
 elseif($text == "/panel" && $from_id == $ADMIN){
sendaction($chat_id, typing);
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ادمین عزیز به پنل مدیریتی ربات خودش امدید",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [
              ['text'=>"آمار"],['text'=>"پیام همگانی"]
              ],
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "آمار" && $from_id == $ADMIN){
 sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
 sendmessage($chat_id , " آمار کاربران : $member_count" , "html");
}
elseif($text == "پیام همگانی" && $from_id == $ADMIN){
    file_put_contents("ali.txt","bc");
 sendaction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام مورد نظر رو در قالب متن بفرستید:",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
   [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "bc" && $from_id == $ADMIN){
    file_put_contents("ali.txt","none");
 SendAction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام همگانی فرستاده شد.",
  ]);
 $all_member = fopen( "Member.txt", "r");
  while( !feof( $all_member)) {
    $user = fgets( $all_member);
   SendMessage($user,$text,"html");
  }
}
//====================Tikapp======================//

   elseif($data == "apk"){
   file_put_contents("ali.txt","apk");
bot('editmessagetext',[
   'chat_id'=>$chatid,
 'message_id'=>$message_id,
       'text'=>"💥 نام برنامه ی مورد نظر را ارسال کنید  : 
        
        
        
        💥
    زمان : $time
    تاریخ : $date", 'parse_mode'=>"html",'reply_markup'=>$bargasht]);}
    elseif($ali == "apk"){ 
    file_put_contents("ali.txt","No");
    file_put_contents("ali.txt","apkdan");
    
    $kama = $message->text;
    $get = file_get_contents("https://api.hajiapi.tk/bazar?type=search&q=$kama");


    $result = json_decode($get, true);
    $apk = $result['result']['1']['name'];
    $apk1 = $result['result']['1']['packageName'];
    $apk2 = $result['result']['2']['name'];
    $apk3 = $result['result']['2']['packageName'];
    $apk4 = $result['result']['3']['name'];
    $apk5 = $result['result']['3']['packageName'];
    $apk6 = $result['result']['4']['name'];
    $apk7 = $result['result']['4']['packageName'];
    $apk8 = $result['result']['5']['name'];
    $apk9 = $result['result']['5']['packageName'];
    $apk10 = $result['result']['6']['name'];
    $apk11 = $result['result']['6']['packageName'];
    $apk12 = $result['result']['7']['name'];
    $apk13 = $result['result']['7']['packageName'];
    $apk14 = $result['result']['8']['name'];
    $apk15 = $result['result']['8']['packageName'];
sendaction($chat_id,typing);
sendmessage($chat_id, "💥آیدی برنامه مورد نظر را کپی کرده و ارسال کنید💥

نام برنامه : $apk

آیدی برنامه : $apk1","html", "true" );

sendmessage($chat_id,"
نام برنامه : $apk2

آیدی برنامه : $apk3","html", "true" );

sendmessage($chat_id,"
نام برنامه : $apk4

آیدی برنامه : $apk5","html", "true" );

sendmessage($chat_id, "
نام برنامه : $apk6

آیدی برنامه : $apk7","html", "true" );

sendmessage($chat_id,"
نام برنامه : $apk8

آیدی برنامه : $apk9","html", "true" );

sendmessage($chat_id,"
نام برنامه : $apk10

آیدی برنامه : $apk11","html", "true" );

sendmessage($chat_id,"
نام برنامه : $apk12

آیدی برنامه : $apk13","html", "true" );
sendmessage($chat_id,"
نام برنامه : $apk14

آیدی برنامه : $apk15
___________________________
آیدی برنامه مورد نظر را کپی و ارسال کنید 
@SaviorisGod_bot", "html", "true" );
}
elseif($ali == "apkdan"){ 
    
   file_put_contents("ali.txt","No"); 

    $barna = $message->text;

    $get = file_get_contents("https://api.hajiapi.tk/bazar/download.php?packagename=$barna");

    $result = json_decode($get, true);

    $apn = $result['data']['packagename'];
    $apn1 = $result['data']['downloadLink'];
    $apn2 = $result['data']['appsize'];
   
$long_url = urlencode ("$apn1");

    $api_token = '540b1808cc621c989aab1863f1e178de05fb566c';

    $api_url = "https://1da.ir/api?api={$api_token}&url={$long_url}&alias=CustomAlias&format=text";
    
$abbas = @file_get_contents($api_url);
sendaction($chat_id,typing);
sendmessage($chat_id,"
 https://cafebazaar.ir

 
   💥 نام پکیج : $apn
   
   💥 حجم برنامه :$apn2
   
   ✴️ لینک دانلود  : $abbas
   
   

اکنون : $time

امروز : $date","html","true");
}


    elseif($data == "mobet"){ 
   file_put_contents("ali.txt","mobet");
bot('editmessagetext',[
   'chat_id'=>$chatid,
 'message_id'=>$message_id,
       'text'=>"💯نام مدل گوشی همراه را ارسال کنید مثال : 
       
       huawei+P30
       
       یا 
       
       
       samsung+j7",
       
           'parse_mode'=>"html",'reply_markup'=>$bargasht]);}
           
           
           
    elseif($ali == "mobet"){ 
    file_put_contents("ali.txt","No");
    file_put_contents("ali.txt","mobilebaz");
    
    
    $vita = $message->text;
    $get = file_get_contents("http://Api.eliyateam.ir/gsm.php?type=search&q=$vita");

    $result = json_decode($get, true);

    $fan = $result['Result']['1']['code'];
    $fan1 = $result['Result']['1']['image'];
    $fan2 = $result['Result']['1']['Name'];
    $fan3 = $result['Result']['2']['code'];
    $fan4 = $result['Result']['2']['image'];
    $fan5 = $result['Result']['2']['Name'];
    $fan6 = $result['Result']['3']['code'];
    $fan7 = $result['Result']['3']['image'];
    $fan8 = $result['Result']['3']['Name'];
    $fan9 = $result['Result']['4']['code'];
    $fan10 = $result['Result']['4']['image'];
    $fan11 = $result['Result']['4']['Name'];
    $fan12 = $result['Result']['5']['code'];
    $fan13 = $result['Result']['5']['image'];
    $fan14 = $result['Result']['5']['Name'];
    $fan15 = $result['Result']['6']['code'];
    $fan16 = $result['Result']['6']['image'];
    $fan17 = $result['Result']['6']['Name'];
    $fan18 = $result['Result']['7']['code'];
    $fan19 = $result['Result']['7']['image'];
    $fan20 = $result['Result']['7']['Name'];

bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$fan1",
    'caption'=>"نام : $fan2"]);



    sendmessage($chat_id, "

کد گوشی : $fan", "html", "true"
    );


bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$fan4",
    'caption'=>"نام : $fan5"]);



    sendmessage($chat_id, "

کد گوشی : $fan3", "html", "true"
    );


bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$fan7",
    'caption'=>"نام : $fan8"]);



    sendmessage($chat_id, "

کد گوشی : $fan6", "html", "true"
    );


bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$fan10",
    'caption'=>"نام : $fan11"]);



    sendmessage($chat_id, "

کد گوشی : $fan9", "html", "true"
    );


bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$fan13",
    'caption'=>"نام : $fan14"]);



    sendmessage($chat_id, "

کد گوشی : $fan12", "html", "true"
    );


bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$fan16",
    'caption'=>"نام : $fan17"]);



    sendmessage($chat_id, "

کد گوشی : $fan15", "html", "true"
    );


bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$fan19",
    'caption'=>"نام : $fan20"]);

sendmessage($chat_id, "

کد گوشی : $fan18", "html", "true");

sendmessage($chat_id,"♐ کد گوشی مورد نظر را کپی کرده و ارسال کنید ♐","html","true");}


elseif($ali == "mobilebaz"){ 
    
file_put_contents("ali.txt","No");
    
    $jira = $message->text;

    $get = file_get_contents("http://Api.eliyateam.ir/gsm.php?type=getdata&code=$jira");

    $result = json_decode($get, true);
    $go = $result['name'];
    $go1 = $result['displaysize'];
    $go2 = $result['displayres'];
    $go3 = $result['camerapixels'];
    $go4 = $result['videopixels'];
    $go5 = $result['ramsize'];
    $go6 = $result['chipset'];
    $go7 = $result['batsize'];
    $go8 = $result['battype'];
    $go9 = $result['released'];
    $go10 = $result['body'];
    $go11 = $result['os'];
    $go12 = $result['storage'];

   sendaction($chat_id,typing);
   
   bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
  
● $go ->اسم کامل موبایل

○ $go1 -> اندازه نمایشگر به اینچ

● $go2 -> پیکسل نمایشگر

○ $go3 -> کیفیت عکس

● $go4 -> کیفیت فیلم

○ $go5 -> حجم رم

● $go6 -> اطلاعات رم

○ $go7 -> مخزن باتری

● $go8->نوع باتری

○ $go9 -> تاریخ انتشار

● $go10 ->اطلاعات بدنه

○ $go11-> سیستم عامل

● $go12-> حافظه "]);
}
elseif($data == "arzotala"){
     bot('editmessagetext',[
   'chat_id'=>$chatid,
 'message_id'=>$message_id,
 'text'=>"🌟یکی از گزینه ها را انتخاب کنید 🌟",
  'parse_mode'=>"MarkDown",
      'reply_markup'=>$arzotala]);
}
elseif($data == "arz"){ 
    
    file_put_contents("data.json",json_encode($dataa));
    
$get = file_get_contents("https://api.codebazan.ir/arz/?type=arz");
$result= json_decode($get,true);
$in1=$result['Result']['0']['name'];
$in2=$result['Result']['0']['low'];
$in3=$result['Result']['0']['High'];
$in4=$result['Result']['0']['update'];

$in5=$result['Result']['1']['name'];
$in6=$result['Result']['1']['low'];
$in7=$result['Result']['1']['High'];
$in8=$result['Result']['1']['update'];

$in9=$result['Result']['2']['name'];
$in10=$result['Result']['2']['low'];
$in11=$result['Result']['2']['High'];
$in12=$result['Result']['2']['update'];

$in13=$result['Result']['3']['name'];
$in14=$result['Result']['3']['low'];
$in15=$result['Result']['3']['High'];
$in16=$result['Result']['3']['update'];

$in17=$result['Result']['4']['name'];
$in18=$result['Result']['4']['low'];
$in19=$result['Result']['4']['High'];
$in20=$result['Result']['4']['update'];

$in21=$result['Result']['5']['name'];
$in22=$result['Result']['5']['low'];
$in23=$result['Result']['5']['High'];
$in24=$result['Result']['5']['update'];

$in25=$result['Result']['6']['name'];
$in26=$result['Result']['6']['low'];
$in27=$result['Result']['6']['High'];
$in28=$result['Result']['6']['update'];

$in29=$result['Result']['7']['name'];
$in30=$result['Result']['7']['low'];
$in31=$result['Result']['7']['High'];
$in32=$result['Result']['7']['update'];

$in33=$result['Result']['15']['name'];
$in34=$result['Result']['15']['low'];
$in35=$result['Result']['15']['High'];
$in36=$result['Result']['15']['update'];

$in37=$result['Result']['31']['name'];
$in38=$result['Result']['31']['low'];
$in39=$result['Result']['31']['High'];
$in40=$result['Result']['31']['update'];
    
    bot('editmessagetext', [
 'chat_id'=>$chatid,
 'message_id'=>$message_id,
 'text'=>"🌟 

نام ارز : $in1

پایین ترین قیمت : $in2


بالاترین قیمت : $in3


تاریخ : $in4
____________________________ 


نام ارز : $in5


پایین ترین قیمت : $in6


بالاترین قیمت : $in7


تاریخ : $in8
____________________________ 


نام ارز : $in9

پایین ترین قیمت : $in10


بالاترین قیمت : $in11


تاریخ : $in12
____________________________ 


نام ارز : $in13

پایین ترین قیمت : $in14


بالاترین قیمت : $in15


تاریخ : $in16
____________________________ 


نام ارز : $in17


پایین ترین قیمت : $in18


بالاترین قیمت : $in19


تاریخ : $in20
____________________________ 


نام ارز : $in21


پایین ترین قیمت : $in22


بالاترین قیمت : $in23


تاریخ : $in24
____________________________ 


نام ارز : $in25


پایین ترین قیمت : $in26


بالاترین قیمت : $in27


تاریخ : $in28
____________________________ 


نام ارز : $in29


پایین ترین قیمت : $in30


بالاترین قیمت : $in31


تاریخ : $in32
____________________________ 

نام ارز : $in33


پایین ترین قیمت : $in34


بالاترین قیمت : $in35


تاریخ : $in36
____________________________ 


نام ارز : $in37


پایین ترین قیمت : $in38


بالاترین قیمت : $in39


تاریخ : $in40",
  'parse_mode'=>"MarkDown",
      'reply_markup'=>$bargasht]);
}

elseif($data == "tala"){ 
    
    file_put_contents("data.json",json_encode($dataa));
    
$get = file_get_contents("https://api.codebazan.ir/arz/?type=tala");
$result= json_decode($get,true);
$in1=$result['Result']['0']['name'];
$in2=$result['Result']['0']['low'];
$in3=$result['Result']['0']['High'];
$in4=$result['Result']['0']['update'];

$in5=$result['Result']['1']['name'];
$in6=$result['Result']['1']['low'];
$in7=$result['Result']['1']['High'];
$in8=$result['Result']['1']['update'];

$in9=$result['Result']['2']['name'];
$in10=$result['Result']['2']['low'];
$in11=$result['Result']['2']['High'];
$in12=$result['Result']['2']['update'];

$in13=$result['Result']['3']['name'];
$in14=$result['Result']['3']['low'];
$in15=$result['Result']['3']['High'];
$in16=$result['Result']['3']['update'];

$in17=$result['Result']['4']['name'];
$in18=$result['Result']['4']['low'];
$in19=$result['Result']['4']['High'];
$in20=$result['Result']['4']['update'];

$in21=$result['Result']['5']['name'];
$in22=$result['Result']['5']['low'];
$in23=$result['Result']['5']['High'];
$in24=$result['Result']['5']['update'];

$in25=$result['Result']['6']['name'];
$in26=$result['Result']['6']['low'];
$in27=$result['Result']['6']['High'];
$in28=$result['Result']['6']['update'];

$in29=$result['Result']['7']['name'];
$in30=$result['Result']['7']['low'];
$in31=$result['Result']['7']['High'];
$in32=$result['Result']['7']['update'];

$in33=$result['Result']['15']['name'];
$in34=$result['Result']['15']['low'];
$in35=$result['Result']['15']['High'];
$in36=$result['Result']['15']['update'];

$in37=$result['Result']['31']['name'];
$in38=$result['Result']['31']['low'];
$in39=$result['Result']['31']['High'];
$in40=$result['Result']['31']['update'];
    
    bot('editmessagetext', [
 'chat_id'=>$chatid,
 'message_id'=>$message_id,
 'text'=>"🌟 

نام  : $in1

پایین ترین قیمت : $in2


بالاترین قیمت : $in3


تاریخ : $in4
____________________________ 


نام  : $in5


پایین ترین قیمت : $in6


بالاترین قیمت : $in7


تاریخ : $in8
____________________________ 


نام  : $in9

پایین ترین قیمت : $in10


بالاترین قیمت : $in11


تاریخ : $in12
____________________________ 


نام  : $in13

پایین ترین قیمت : $in14


بالاترین قیمت : $in15


تاریخ : $in16
____________________________ 


نام  : $in17


پایین ترین قیمت : $in18


بالاترین قیمت : $in19


تاریخ : $in20
____________________________ 


نام  : $in21


پایین ترین قیمت : $in22


بالاترین قیمت : $in23


تاریخ : $in24
____________________________ 


نام  : $in25


پایین ترین قیمت : $in26


بالاترین قیمت : $in27


تاریخ : $in28
____________________________ 


نام  : $in29


پایین ترین قیمت : $in30


بالاترین قیمت : $in31


تاریخ : $in32
____________________________ 

نام  : $in33


پایین ترین قیمت : $in34


بالاترین قیمت : $in35


تاریخ : $in36
____________________________ 


نام  : $in37


پایین ترین قیمت : $in38


بالاترین قیمت : $in39


تاریخ : $in40",
  'parse_mode'=>"MarkDown",
      'reply_markup'=>$bargasht]);
}
elseif($data == "fal"){
    file_put_contents("ali.txt","none");
  $pic = "http://www.beytoote.com/images/Hafez/".rand(1, 149).".gif";
  bot('sendphoto',[
      'chat_id',$chat_id,
      'photo'=>"$pic",
      'caption'=>
   "این هم فال حافظ تقدیم ب شما 💖"]);

}

  elseif($data == "filmkadeh"){ 
      
  bot('editmessagetext' ,[
    'chat_id'=>$chatid,
    'message_id'=>$message_id,
   'text'=> "💎یکی از دو وبسرویس زیر را انتخاب کنید💎 ",'parse_mode'=>"html",'reply_markup'=>json_encode
   (['resize_keyboard'=>true,
   'inline_keyboard'=>[
  [['text'=>" 🎬 فیلمکده ۱",'callback_data'=>"filmk"]],[['text'=>"🎬 فیلمکده ۲",'callback_data'=>"filmnama"]],
  ]])
  ]);
  }
  
elseif ($data == "filmnama") {
   file_put_contents("ali.txt","filmnama");
    bot('editmessagetext' ,[
    'chat_id'=>$chatid,
    'message_id'=>$message_id,
   'text'=> "🔷نام فیلم مورد نظر را ارسال کنید همچنین میتوانید
   یک کلمه از نام فیلم مورد نظر خود را ارسال کنید
   
    مثال :spider 
    , scape🔷 ", 'parse_mode'=> "html",'reply_markup'=>$bargasht]);
} 

elseif ($ali == "filmnama") {
  file_put_contents("ali.txt","No");
  file_put_contents("ali.txt","flamingo");
  
  $sama = $message->text;

    $get = file_get_contents("https://haji-api.ir/mobomoviez?type=search&q=$sama");

    $result = json_decode($get, true);
    $film = $result['result']['1']['name'];
    $film1 = $result['result']['1']['image'];
    $film2 = $result['result']['1']['id'];
    $film3 = $result['result']['2']['name'];
    $film4 = $result['result']['2']['image'];
    $film5 = $result['result']['2']['id'];
    $film6 = $result['result']['3']['name'];
    $film7 = $result['result']['3']['image'];
    $film8 = $result['result']['3']['id'];
    $film9 = $result['result']['4']['name'];
    $film10 = $result['result']['4']['image'];
    $film11 = $result['result']['4']['id'];
    $film12 = $result['result']['5']['name'];
    $film13 = $result['result']['5']['image'];
    $film14 = $result['result']['5']['id'];
    $film15 = $result['result']['6']['name'];
    $film16 = $result['result']['6']['image'];
    $film17 = $result['result']['6']['id'];
sendaction($chat_id,typing);
    bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$film1",
    'caption'=>"$film"]);



    sendmessage($chat_id, "

ID:👉 $film2", "html", "true"
    );
    bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$film4",
    'caption'=>"$film3"]);

    sendmessage($chat_id, "


ID:👉 $film5", "html", "true"
    );
    bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$film7",
    'caption'=>"$film6"]);

    sendmessage($chat_id, "



ID:👉 $film8", "html", "true"
    );
    bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$film10",
    'caption'=>"$film9"]);

    sendmessage($chat_id, "


ID:👉 $film11", "html", "true"
    );
    bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$film13",
    'caption'=>"$film12"]);

    sendmessage($chat_id, "

ID:👉 $film14", "html", "true"
    );
    bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$film16",
    'caption'=>"$film15"]);


    sendmessage($chat_id, "

ID:👉 $film17", "html", "true"
    );
    sendmessage($chat_id, "
    💥آیدی فیلم مورد نظر رو کپی و ارسال کنید تا لینک دانلود براتون ارسال بشه💥 ", "html", "true"
    );
}
elseif( $ali == "flamingo⁩"){  
  
  file_put_contents("ali.txt","No");

    $hoss=$message->text;
    
    $get = file_get_contents("https://haji-api.ir/mobomoviez?type=get&q=$hoss");
    
 $result = json_decode($get,true);
 $ghol = $result['title'];
 $ghol1 =$result['image'];
 $ghol2 = $result['duration'];
 $ghol3 = $result['language'];
 $ghol4 = $result['date'];
$farsi=$result['score']['imdb'];
$fars1 = $result['result']['1']['link'];
$fars3 = $result['result']['1']['resolution'];
$fars5 = $result['result']['1']['play_online'];
$fars2 = $result['result']['2']['link'];
$fars6 = $result['result']['2']['resolution'];
$fars8 = $result['result']['2']['play_online'];
$fars9 = $result['result']['3']['resolution'];
$fars10 = $result['result']['3']['link'];
$fars11 = $result['result']['3']['play_online'];
$fars12 = $result['result']['4']['resolution'];
 $fars13 = $result['result']['4']['link'];
$fars14 = $result['result']['4']['play_online'];
$fars15 = $result['result']['5']['resolution'];
    $fars16 = $result['result']['5']['link'];
    $fars17 = $result['result']['5']['play_online'];
    $fars18 = $result['result']['6']['resolution'];
    $fars19 = $result['result']['6']['link'];
    $fars20 = $result['result']['6']['play_online'];
    $fars21 = $result['result']['7']['resolution'];
    $fars22 = $result['result']['7']['link'];
    $fars23 = $result['result']['7']['play_online'];
  
  sendaction($chat_id,typing);
sendmessage($chat_id,"⁦✴️⁩وبسرویس در حال جمع آوری اطلاعات است ، لطفا کمی صبر کنید .....⁦✴️⁩","html","true");

    $longurl61 = urlencode ("$fars1");
    $longurl62 = urlencode ("$fars2");
    $longurl63 = urlencode ("$fars10");
    $longurl64 = urlencode ("$fars13");
    $longurl65 = urlencode ("$fars16");
    $longurl66 = urlencode ("$fars19");
    $longurl67 = urlencode ("$fars22");
    
    $longurl1 = urlencode ("$fars5");
    
    $longurl3 = urlencode ("$fars8");
    
    $longurl5 = urlencode ("$fars11");
   
    $longurl7 = urlencode ("$fars14");
  
    $longurl9 = urlencode ("$fars17");
  
    $longurl11 = urlencode ("$fars20");
 
    $longurl13 = urlencode ("$fars23");

    $apitoken = '540b1808cc621c989aab1863f1e178de05fb566c';

   
    $apiurl61 = "https://1da.ir/api?api={$apitoken}&url={$longurl61}&alias=CustomAlias&format=text";
   
    $apiurl62 = "https://1da.ir/api?api={$apitoken}&url={$longurl62}&alias=CustomAlias&format=text";
   
    $apiurl63 = "https://1da.ir/api?api={$apitoken}&url={$longurl63}&alias=CustomAlias&format=text";
   
    $apiurl64 = "https://1da.ir/api?api={$apitoken}&url={$longurl64}&alias=CustomAlias&format=text";
   
    $apiurl65 = "https://1da.ir/api?api={$apitoken}&url={$longurl65}&alias=CustomAlias&format=text";
   
    $apiurl66 = "https://1da.ir/api?api={$apitoken}&url={$longurl66}&alias=CustomAlias&format=text";
   
    $apiurl67 = "https://1da.ir/api?api={$apitoken}&url={$longurl67}&alias=CustomAlias&format=text";
   
    $apiurl1 = "https://1da.ir/api?api={$apitoken}&url={$longurl1}&alias=CustomAlias&format=text";
   
    $apiurl3 = "https://1da.ir/api?api={$apitoken}&url={$longurl3}&alias=CustomAlias&format=text";
    
    $apiurl5 = "https://1da.ir/api?api={$apitoken}&url={$longurl5}&alias=CustomAlias&format=text";
    
    $apiurl7 = "https://1da.ir/api?api={$apitoken}&url={$longurl7}&alias=CustomAlias&format=text";
  
    $apiurl9 = "https://1da.ir/api?api={$apitoken}&url={$longurl9}&alias=CustomAlias&format=text";
    
    $apiurl11 = "https://1da.ir/api?api={$apitoken}&url={$longurl11}&alias=CustomAlias&format=text";
 
    $apiurl13 = "https://1da.ir/api?api={$apitoken}&url={$longurl13}&alias=CustomAlias&format=text";


    $amir1 = @file_get_contents($apiurl1);

    $amir3 = @file_get_contents($apiurl3);

    $amir5 = @file_get_contents($apiurl5);
    
    $amir7 = @file_get_contents($apiurl7);
   
    $amir9 = @file_get_contents($apiurl9);
    
    $amir11 = @file_get_contents($apiurl11);
   
    $amir13 = @file_get_contents($apiurl13);
    
    $amir61 = @file_get_contents($apiurl61);
    $amir62 = @file_get_contents($apiurl62);
    $amir63 = @file_get_contents($apiurl63);
    $amir64 = @file_get_contents($apiurl64);
    $amir65 = @file_get_contents($apiurl65);
    $amir66 = @file_get_contents($apiurl66);
    $amir67 = @file_get_contents($apiurl67);
    
 sendaction($chat_id,typing);
 
bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"$ghol1",
    'caption'=>"

عنوان فیلم : $ghol

مدت زمان : $ghol2

زبان فیلم : $ghol3

تاریخ اکران : $ghol4

امتیاز : $farsi"]);

sendmessage($chat_id,"
https://mobomovie2.site

کیفیت : $fars3


لینک : $amir61


  مشاهده آنلاین : $amir1

==============================

کیفیت : $fars6



لینک : $amir62


 مشاهده آنلاین : $amir3


==============================

کیفیت : $fars9



لینک : $amir63


مشاهده آنلاین : $amir5


==============================

کیفیت : $fars12



لینک : $amir64


مشاهده آنلاین : $amir7


==============================

کیفیت : $fars15



لینک : $amir65


مشاهده آنلاین : $amir9


==============================

کیفیت : $fars18



لینک : $amir66


مشاهده آنلاین : $amir11


==============================

کیفیت : $fars21



لینک : $amir67


مشاهده آنلاین :$amir13
 ------------------------------
نکته 🔔 :
   جهت دانلود فیلم ، فیلترشکن باید خاموش باشد ","html","true");

}
elseif($data == "filmk"){ 
file_put_contents("ali.txt","filmk");

bot('editmessagetext' ,[
    'chat_id'=>$chatid,
    'message_id'=>$message_id,
   'text'=> "نام فیلم مورد نظر را ارسال کنید
    بعنوان مثال : spider-man ✴️,
    
    همچنین میتوانید یک کلمه از فیلم را ارسال کنید مثال :
        
        Spider✴️", 'parse_mode'=>"html",'reply_markup'=>$bargasht]);
}
 elseif($ali == "filmk") {
file_put_contents("ali.txt","No");
file_put_contents("ali.txt","filmkade");
   
    $tik = $message->text;

    $get = file_get_contents("http://api.eliyateam.ir/dibamovie.php?type=search&q=$tik");

    $result = json_decode($get, true);
    $diba1 = $result['Result']['0']['code'];
    $diba3 = $result['Result']['0']['Name'];
    $diba5 = $result['Result']['0']['cover'];
    $diba2 = $result['Result']['1']['code'];
    $diba6 = $result['Result']['1']['Name'];
    $diba8 = $result['Result']['1']['cover'];
    $diba9 = $result['Result']['2']['Name'];
    $diba10 = $result['Result']['2']['code'];
    $diba11 = $result['Result']['2']['cover'];
    $diba12 = $result['Result']['3']['Name'];
    $diba13 = $result['Result']['3']['code'];
    $diba14 = $result['Result']['3']['cover'];
    $diba15 = $result['Result']['4']['Name'];
    $diba16 = $result['Result']['4']['code'];
    $diba17 = $result['Result']['4']['cover'];
    $diba18 = $result['Result']['5']['Name'];
    $diba19 = $result['Result']['5']['code'];
    $diba20 = $result['Result']['5']['cover'];
    $diba21 = $result['Result']['6']['Name'];
    $diba22 = $result['Result']['6']['code'];
    $diba23 = $result['Result']['6']['cover'];

sendaction($chat_id,typing);
    bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$diba5",
    'caption'=>"$diba3"]);


    sendmessage($chat_id, "

کد فیلم: $diba1", "html", "true");

bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$diba8",
    'caption'=>"$diba6"]);

sendmessage($chat_id, "

کد فیلم: $diba2", "html", "true");

 bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$diba11",
    'caption'=>"$diba9"]);

sendmessage($chat_id, "

کد فیلم: $diba10", "html", "true");

    bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$diba14",
    'caption'=>"$diba12"]);

sendmessage($chat_id, "


کد فیلم: $diba13", "html", "true");

bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$diba17",
    'caption'=>"$diba15"]);

sendmessage($chat_id, "


کد فیلم: $diba16", "html", "true");

    bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$diba20",
    'caption'=>"$diba18"]);

sendmessage($chat_id, "

کد فیلم: $diba19", "html", "true");

    bot('SendPhoto',[
    'chat_id'=>$chat_id, 
    'photo'=>"$diba23",
    'caption'=>"$diba21"]);

sendmessage($chat_id, "

کد فیلم: $diba22", "html", "true");

    sendmessage($chat_id, "💥کد  فیلم مورد نظر را کپی و ارسال کنید 💥 ", "html", "true");}
    
    elseif($ali == "filmkade"){ 
        
   file_put_contents("ali.txt","No");
 sendmessage($chat_id,"وبسرویس در حال جمع آوری اطلاعات است . لطفا کمی صبر کنید.....","html","true");
 
    $cod = $message->text;

    $get = file_get_contents("http://api.eliyateam.ir/dibamovie.php?type=getdata&code=$cod");

    $result = json_decode($get, true);
    $talab = $result['zirnevis'];
    $tal = $result['name'];
    $tal2 = $result['time'];
    $tal3 = $result['cover'];
    $tal4 = $result['creatby'];
    $talai = $result['bio'];

    $tala1 = $result['downorg']['0']['keifiat'];
    $tala2 = $result['downorg']['0']['urlorg'];
    $tala3 = $result['downorg']['0']['size'];


    $tala4 = $result['downorg']['1']['keifiat'];
    $tala5 = $result['downorg']['1']['urlorg'];
    $tala6 = $result['downorg']['1']['size'];

    $tala7 = $result['downorg']['2']['keifiat'];
    $tala8 = $result['downorg']['2']['urlorg'];
    $tala9 = $result['downorg']['2']['size'];

    $tala10 = $result['downorg']['3']['keifiat'];
    $tala11 = $result['downorg']['3']['urlorg'];
    $tala12 = $result['downorg']['3']['size'];

    $tala13 = $result['downorg']['4']['keifiat'];
    $tala14 = $result['downorg']['4']['urlorg'];
    $tala15 = $result['downorg']['4']['size'];

    $tala16 = $result['downorg']['5']['keifiat'];
    $tala17 = $result['downorg']['5']['urlorg'];
    $tala18 = $result['downorg']['5']['size'];

    $tala19 = $result['downorg']['6']['keifiat'];
    $tala20 = $result['downorg']['6']['urlorg'];
    $tala21 = $result['downorg']['6']['size'];


    $tala22 = $result['downorg']['7']['keifiat'];
    $tala23 = $result['downorg']['7']['urlorg'];
    $tala24 = $result['downorg']['7']['size'];

    $tala25 = $result['downorg']['8']['keifiat'];
    $tala26 = $result['downorg']['8']['urlorg'];
    $tala27 = $result['downorg']['8']['size'];

    $tala28 = $result['downorg']['9']['keifiat'];
    $tala29 = $result['downorg']['9']['urlorg'];
    $tala30 = $result['downorg']['9']['size'];

    $tala31 = $result['downorg']['10']['keifiat'];
    $tala32 = $result['downorg']['10']['urlorg'];
    $tala33 = $result['downorg']['10']['size'];

    $tala34 = $result['downorg']['11']['keifiat'];
    $tala35 = $result['downorg']['11']['urlorg'];
    $tala36 = $result['downorg']['11']['size'];

    $tala37 = $result['downorg']['12']['keifiat'];
    $tala38 = $result['downorg']['12']['urlorg'];
    $tala39 = $result['downorg']['12']['size'];

    $tala40 = $result['downorg']['13']['keifiat'];
    $tala41 = $result['downorg']['13']['urlorg'];
    $tala42 = $result['downorg']['13']['size'];

    $tala43 = $result['downorg']['14']['keifiat'];
    $tala44 = $result['downorg']['14']['urlorg'];
    $tala45 = $result['downorg']['14']['size'];

    $tala46 = $result['downorg']['15']['keifiat'];
    $tala47 = $result['downorg']['15']['urlorg'];
    $tala48 = $result['downorg']['15']['size'];

    $tala49 = $result['downorg']['16']['keifiat'];
    $tala50 = $result['downorg']['16']['urlorg'];
    $tala51 = $result['downorg']['16']['size'];


    $long_url = urlencode ("$tala2");
    $long_url1 = urlencode ("$tala5");
    $long_url2 = urlencode ("$tala8");
    $long_url3 = urlencode ("$tala11");
    $long_url4 = urlencode ("$tala14");
    $long_url5 = urlencode ("$tala17");
    $long_url6 = urlencode ("$tala17");
    $long_url7 = urlencode ("$tala20");
    $long_url8 = urlencode ("$tala23");
    $long_url9 = urlencode ("$tala26");
    $long_url10 = urlencode ("$tala29");
    $long_url11 = urlencode ("$tala32");
    $long_url12 = urlencode ("$tala35");
    $long_url13 = urlencode ("$tala38");
    $long_url14 = urlencode ("$tala41");
    $long_url15 = urlencode ("$tala44");
    $long_url16 = urlencode ("$tala47");


    $api_token = '540b1808cc621c989aab1863f1e178de05fb566c';

    $api_url = "https://1da.ir/api?api={$api_token}&url={$long_url}&alias=CustomAlias&format=text";
    $api_url1 = "https://1da.ir/api?api={$api_token}&url={$long_url1}&alias=CustomAlias&format=text";
    $api_url2 = "https://1da.ir/api?api={$api_token}&url={$long_url2}&alias=CustomAlias&format=text";
    $api_url3 = "https://1da.ir/api?api={$api_token}&url={$long_url3}&alias=CustomAlias&format=text";
    $api_url4 = "https://1da.ir/api?api={$api_token}&url={$long_url4}&alias=CustomAlias&format=text";
    $api_url5 = "https://1da.ir/api?api={$api_token}&url={$long_url5}&alias=CustomAlias&format=text";
    $api_url6 = "https://1da.ir/api?api={$api_token}&url={$long_url6}&alias=CustomAlias&format=text";
    $api_url7 = "https://1da.ir/api?api={$api_token}&url={$long_url7}&alias=CustomAlias&format=text";
    $api_url8 = "https://1da.ir/api?api={$api_token}&url={$long_url8}&alias=CustomAlias&format=text";
    $api_url9 = "https://1da.ir/api?api={$api_token}&url={$long_url9}&alias=CustomAlias&format=text";
    $api_url10 = "https://1da.ir/api?api={$api_token}&url={$long_url10}&alias=CustomAlias&format=text";
    $api_url11 = "https://1da.ir/api?api={$api_token}&url={$long_url11}&alias=CustomAlias&format=text";
    $api_url12 = "https://1da.ir/api?api={$api_token}&url={$long_url12}&alias=CustomAlias&format=text";
    $api_url13 = "https://1da.ir/api?api={$api_token}&url={$long_url13}&alias=CustomAlias&format=text";
    $api_url14 = "https://1da.ir/api?api={$api_token}&url={$long_url14}&alias=CustomAlias&format=text";
    $api_url15 = "https://1da.ir/api?api={$api_token}&url={$long_url15}&alias=CustomAlias&format=text";
    $api_url16 = "https://1da.ir/api?api={$api_token}&url={$long_url16}&alias=CustomAlias&format=text";

    $sadra1 = @file_get_contents($api_url);

    $sadra2 = @file_get_contents($api_url1);

    $sadra3 = @file_get_contents($api_url2);

    $sadra4 = @file_get_contents($api_url3);
    $sadra5 = @file_get_contents($api_url4);
    $sadra6 = @file_get_contents($api_url5);
    $sadra7 = @file_get_contents($api_url6);
    $sadra8 = @file_get_contents($api_url7);
    $sadra9 = @file_get_contents($api_url8);
    $sadra10 = @file_get_contents($api_url9);
    $sadra11 = @file_get_contents($api_url10);
    $sadra12 = @file_get_contents($api_url11);
    $sadra13 = @file_get_contents($api_url12);
    $sadra14 = @file_get_contents($api_url13);
    $sadra15 = @file_get_contents($api_url14);
    $sadra16 = @file_get_contents($api_url15);
    $sadra17 = @file_get_contents($api_url16);
sendaction($chat_id,typing);
sendphoto($chat_id, "$tal3", "
⚡ $tal ⚡


ساخت کشور 🛡️ : $tal4

زمان ⏲️ : $tal2

خلاصه 📝 : $talai");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
https://mobomovie2.site


کیفیت : $tala1


لینک دانلود : $sadra1


حجم : $tala3

==============================

کیفیت : $tala4


لینک دانلود : $sadra2


حجم : $tala6

==============================

کیفیت : $tala7


لینک دانلود : $sadra3


حجم : $tala9

==============================

کیفیت : $tala10


لینک دانلود : $sadra4


حجم : $tala12

==============================

کیفیت : $tala13


لینک دانلود : $sadra5


حجم : $tala15

==============================

کیفیت : $tala16


لینک دانلود : $sadra6


حجم : $tala18

==============================

کیفیت : $tala19


لینک دانلود : $sadra7


حجم : $tala21

==============================

کیفیت : $tala22


لینک دانلود : $sadra8


حجم : $tala24

==============================

کیفیت : $tala25


لینک دانلود : $sadra9


حجم : $tala27

==============================

کیفیت : $tala28


لینک دانلود : $sadra10


حجم : $tala30

==============================

کیفیت : $tala31


لینک دانلود : $sadra11


حجم : $tala33

==============================

کیفیت : $tala34


لینک دانلود : $sadra12


حجم : $tala36

==============================

کیفیت : $tala37



لینک دانلود : $sadra13


حجم : $tala39

==============================

کیفیت : $tala40


لینک دانلود : $sadra14


حجم : $tala42

==============================

کیفیت : $tala43


لینک دانلود : $sadra15


حجم : $tala45

==============================

کیفیت : $tala46


لینک دانلود :  $sadra16


حجم : $tala48

==============================

کیفیت : $tala49


لینک دانلود :  $sadra17


حجم : $tala51"]);}
    
elseif($data == "khodro"){ 
    file_put_contents("data.json",json_encode($dataa));
  $get = file_get_contents("https://api.codebazan.ir/car-price/");

    $result = json_decode($get, true);

    $ali1 = $result['Result']['0']['name'];
    $ali2 = $result['Result']['0']['moshakhasat'];
    $ali3 = $result['Result']['0']['karkhane'];
    $ali4 = $result['Result']['0']['bazar'];


    $ali5 = $result['Result']['1']['name'];
    $ali6 = $result['Result']['1']['moshakhasat'];
    $ali7 = $result['Result']['1']['karkhane'];
    $ali8 = $result['Result']['1']['bazar'];


    $ali9 = $result['Result']['2']['name'];
    $ali10 = $result['Result']['2']['moshakhasat'];
    $ali11 = $result['Result']['2']['karkhane'];
    $ali12 = $result['Result']['2']['bazar'];


    $ali13 = $result['Result']['3']['name'];
    $ali14 = $result['Result']['3']['moshakhasat'];
    $ali15 = $result['Result']['3']['karkhane'];
    $ali16 = $result['Result']['3']['bazar'];


    $ali17 = $result['Result']['4']['name'];
    $ali18 = $result['Result']['4']['moshakhasat'];
    $ali19 = $result['Result']['4']['karkhane'];
    $ali20 = $result['Result']['4']['bazar'];


    $ali21 = $result['Result']['5']['name'];
    $ali22 = $result['Result']['5']['moshakhasat'];
    $ali23 = $result['Result']['5']['karkhane'];
    $ali24 = $result['Result']['5']['bazar'];


    $ali25 = $result['Result']['6']['name'];
    $ali26 = $result['Result']['6']['moshakhasat'];
    $ali27 = $result['Result']['6']['karkhane'];
    $ali28 = $result['Result']['6']['bazar'];


    $ali29 = $result['Result']['7']['name'];
    $ali30 = $result['Result']['7']['moshakhasat'];
    $ali31 = $result['Result']['7']['karkhane'];
    $ali32 = $result['Result']['7']['bazar'];


    $ali33 = $result['Result']['8']['name'];
    $ali34 = $result['Result']['8']['moshakhasat'];
    $ali35 = $result['Result']['8']['karkhane'];
    $ali36 = $result['Result']['8']['bazar'];


    $ali37 = $result['Result']['9']['name'];
    $ali38 = $result['Result']['9']['moshakhasat'];
    $ali39 = $result['Result']['9']['karkhane'];
    $ali40 = $result['Result']['9']['bazar'];


    $ali41 = $result['Result']['10']['name'];
    $ali42 = $result['Result']['10']['moshakhasat'];
    $ali43 = $result['Result']['10']['karkhane'];
    $ali44 = $result['Result']['10']['bazar'];


    $ali45 = $result['Result']['11']['name'];
    $ali46 = $result['Result']['11']['moshakhasat'];
    $ali47 = $result['Result']['11']['karkhane'];
    $ali48 = $result['Result']['11']['bazar'];


    $ali49 = $result['Result']['12']['name'];
    $ali50 = $result['Result']['12']['moshakhasat'];
    $ali50 = $result['Result']['12']['karkhane'];
    $ali52 = $result['Result']['12']['bazar'];


    $ali53 = $result['Result']['13']['name'];
    $ali54 = $result['Result']['13']['moshakhasat'];
    $ali55 = $result['Result']['13']['karkhane'];
    $ali56 = $result['Result']['13']['bazar'];


    $ali57 = $result['Result']['14']['name'];
    $ali58 = $result['Result']['14']['moshakhasat'];
    $ali59 = $result['Result']['14']['karkhane'];
    $ali60 = $result['Result']['14']['bazar'];


    $ali61 = $result['Result']['15']['name'];
    $ali62 = $result['Result']['15']['moshakhasat'];
    $ali63 = $result['Result']['15']['karkhane'];
    $ali64 = $result['Result']['15']['bazar'];


    $ali65 = $result['Result']['16']['name'];
    $ali66 = $result['Result']['16']['moshakhasat'];
    $ali67 = $result['Result']['16']['karkhane'];
    $ali68 = $result['Result']['16']['bazar'];


    $ali69 = $result['Result']['17']['name'];
    $ali70 = $result['Result']['17']['moshakhasat'];
    $ali71 = $result['Result']['17']['karkhane'];
    $ali72 = $result['Result']['17']['bazar'];


    $ali73 = $result['Result']['18']['name'];
    $ali74 = $result['Result']['18']['moshakhasat'];
    $ali75 = $result['Result']['18']['karkhane'];
    $ali76 = $result['Result']['18']['bazar'];


    $ali77 = $result['Result']['19']['name'];
    $ali78 = $result['Result']['19']['moshakhasat'];
    $ali79 = $result['Result']['19']['karkhane'];
    $ali80 = $result['Result']['19']['bazar'];


    $ali81 = $result['Result']['20']['name'];
    $ali82 = $result['Result']['20']['moshakhasat'];
    $ali83 = $result['Result']['20']['karkhane'];
    $ali84 = $result['Result']['20']['bazar'];


    $ali85 = $result['Result']['21']['name'];
    $ali86 = $result['Result']['21']['moshakhasat'];
    $ali87 = $result['Result']['21']['karkhane'];
    $ali88 = $result['Result']['21']['bazar'];


    $ali89 = $result['Result']['22']['name'];
    $ali90 = $result['Result']['22']['moshakhasat'];
    $ali91 = $result['Result']['22']['karkhane'];
    $ali92 = $result['Result']['22']['bazar'];


    $ali93 = $result['Result']['23']['name'];
    $ali94 = $result['Result']['23']['moshakhasat'];
    $ali95 = $result['Result']['23']['karkhane'];
    $ali96 = $result['Result']['23']['bazar'];
       
    bot('editmessagetext', [
 'chat_id'=>$chatid,
 'message_id'=>$message_id,
 'text'=>"🌟 

نام : $ali1

مشخصات : $ali2

قیمت کارخانه : $ali3

قیمت بازار : $ali4
-------------------------------
نام : $ali5

مشخصات : $ali6

قیمت کارخانه : $ali7

قیمت بازار : $ali8
--------------------------------
نام : $ali9

مشخصات : $ali10

قیمت کارخانه : $ali11

قیمت بازار : $ali12
--------------------------------
نام : $ali13

مشخصات : $ali14

قیمت کارخانه : $ali15

قیمت بازار : $ali16
--------------------------------

نام : $ali17

مشخصات : $ali18

قیمت کارخانه : $ali19

قیمت بازار : $ali20
--------------------------------

نام : $ali21

مشخصات : $ali22

قیمت کارخانه : $ali23

قیمت بازار : $ali24
--------------------------------
نام : $ali25

مشخصات : $ali26

قیمت کارخانه : $ali27

قیمت بازار : $ali28
--------------------------------
نام : $ali29

مشخصات : $ali30

قیمت کارخانه : $ali31

قیمت بازار : $ali32
--------------------------------
نام : $ali33

مشخصات : $ali33

قیمت کارخانه : $ali35

قیمت بازار : $ali36
--------------------------------

نام : $ali37

مشخصات : $ali38

قیمت کارخانه : $ali39

قیمت بازار : $ali40
--------------------------------

نام : $ali41

مشخصات : $ali42

قیمت کارخانه : $ali43

قیمت بازار : $ali44
--------------------------------
نام : $ali45

مشخصات : $ali46

قیمت کارخانه : $ali47

قیمت بازار : $ali48
--------------------------------
نام : $ali49

مشخصات : $ali50

قیمت کارخانه : $ali50

قیمت بازار : $ali52
--------------------------------
نام : $ali53

مشخصات : $ali54

قیمت کارخانه : $ali55

قیمت بازار : $ali56
--------------------------------

نام : $ali57

مشخصات : $ali58

قیمت کارخانه : $ali59

قیمت بازار : $ali60
--------------------------------

نام : $ali61

مشخصات : $ali62

قیمت کارخانه : $ali63

قیمت بازار : $ali64
--------------------------------
نام : $ali65

مشخصات : $ali66

قیمت کارخانه : $ali67

قیمت بازار : $ali68
--------------------------------
نام : $ali69

مشخصات : $ali70

قیمت کارخانه : $ali71

قیمت بازار : $ali72
-------------------------------
نام : $ali73

مشخصات : $ali74

قیمت کارخانه : $ali75

قیمت بازار : $ali76
-------------------------------

نام : $ali77

مشخصات : $ali78

قیمت کارخانه : $ali79

قیمت بازار : $ali80
------------------------------

نام : $ali81

مشخصات : $ali82

قیمت کارخانه : $ali83

قیمت بازار : $ali84
-------------------------------
نام : $ali85

مشخصات : $ali86

قیمت کارخانه : $ali87

قیمت بازار : $ali88
-------------------------------
نام : $ali89

مشخصات : $ali90

قیمت کارخانه : $ali91

قیمت بازار : $ali92
------------------------------
نام : $ali93

مشخصات : $ali94

قیمت کارخانه : $ali95

قیمت بازار : $ali96
-------------------------------
اکنون : $time

امروز : $date",  'parse_mode'=>"MarkDown",
      'reply_markup'=>$bargasht]);

}
elseif ($text == "/Gmail" && $from_id == $ADMIN) {
  
    $get = json_decode(file_get_contents("https://haji-api.ir/gmail"));
    $result = objectToArrays($get);

    $mail = $result['gmail'];
    $mail1 = $result['message'];
    
     
   bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"🌟 
address: $mail
status : $mail1", 'parse_mode'=>"html",'reply_markup'=> json_encode(['keyboard' => [
        [['text' => "وارد کردن"]], 
    ], 'resize_keyboard' => true])
    ]);

} elseif($text == "وارد کردن"){
 
     
   file_put_contents("ali.txt","gmailgir");
   
   bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"جیمیل دریافتی را ارسال کنید" ]);

} elseif ($ali == "gmailgir"){ 
    
    file_put_contents("ali.txt","none");
    
    $mil = $message->text;

    $get = json_decode(file_get_contents("https://haji-api.ir/gmail?gmail=$mil"));
    $result =objectToArrays($get, true);

    $tok = $result['gmail_messages']['message1']['Message'];

    $tok1 = $result['gmail_messages']['message2']['Message'];

    $tok2 = $result['gmail_messages']['message1']['Subject'];

    $tok3 = $result['gmail_messages']['message2']['Subject'];
    $tok4 = $result['gmail_messages']['message1']['From'];

    $tok5 = $result['gmail_messages']['message2']['From'];

    $tok6 = $result['gmail_messages']['message3']['Message'];

    $tak7 = $result['message'];
    $tak8 = $result['status'];

     bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"

subject : $tok2

From : $tok4

message 1 : $tok


------------------------------

subject : $tok5

From : $tok3

message 2 : $tok1


--------------------------------
message 3 : $tok6


--------------------------------
status : $tak7

message : $tak8",'parse_mode'=>"html",'reply_markup'=> json_encode(['keyboard' => [
        [['text' => "/panel"]], 
    ], 'resize_keyboard' => true])
    ]);
}

elseif($data == "moozik"){ 
    
    file_put_contents("ali.txt","moozik");
      
   bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"🎊به موزیک ویدئوی رادیو جوان خوش آمدید 🎊

نام خواننده مورد نظر را ارسال کنید 

    مثال :
    
   behnam+bani
    
   Evan+band
    
 shadmehr+aghili", 
 'parse_mode'=>"MarkDown",
     'reply_markup'=>$bargasht]);
}
elseif($ali == "moozik"){ 
    
    file_put_contents("ali.txt","No");
    file_put_contents("ali.txt","moozikban");
    
  $tani = $message->text;
$get = file_get_contents("http://api.eliyateam.ir/rj-video.php?q=$tani");

$result = json_decode($get, true);

    $a = $result['0']['name'];
    $a1 = $result['0']['song'];
    $a2 = $result['0']['artist'];
    $a3 = $result['0']['cover'];
    $a4 = $result['0']['id'];


    $a5 = $result['1']['name'];
    $a6 = $result['1']['song'];
    $a7 = $result['1']['artist'];
    $a8 = $result['1']['cover'];
    $a9 = $result['1']['id'];



    $a10 = $result['2']['name'];
    $a11 = $result['2']['song'];
    $a12 = $result['2']['artist'];
    $a13 = $result['2']['cover'];
    $a14 = $result['2']['id'];



    $a15 = $result['3']['name'];
    $a16 = $result['3']['song'];
    $a17 = $result['3']['artist'];
    $a18 = $result['3']['cover'];
    $a19 = $result['3']['id'];



    $a20 = $result['4']['name'];
    $a21 = $result['4']['song'];
    $a22 = $result['4']['artist'];
    $a23 = $result['4']['cover'];
    $a24 = $result['4']['id'];



    $a25 = $result['5']['name'];
    $a26 = $result['5']['song'];
    $a27 = $result['5']['artist'];
    $a28 = $result['5']['cover'];
    $a29 = $result['5']['id'];



    $a30 = $result['6']['name'];
    $a31 = $result['6']['song'];
    $a32 = $result['6']['artist'];
    $a33 = $result['6']['cover'];
    $a34 = $result['6']['id'];



    $a35 = $result['7']['name'];
    $a36 = $result['7']['song'];
    $a37 = $result['7']['artist'];
    $a38 = $result['7']['cover'];
    $a39 = $result['7']['id'];


    $a40 = $result['8']['name'];
    $a41 = $result['8']['song'];
    $a42 = $result['8']['artist'];
    $a43 = $result['8']['cover'];
    $a44 = $result['8']['id'];

bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$a3",
 'caption'=>"$a 
 $a1 
 $a2"]);
  
 sendmessage($chat_id,"
 ID 👉 : $a4","html","true");
 
 
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$a8",
 'caption'=>"$a5
 $a6
 $a7"]);
  
 sendmessage($chat_id,"
 ID 👉 : $a9","html","true");
 
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$a13",
 'caption'=>"$a10
 $a11
 $a12"]);
  
 sendmessage($chat_id,"
 ID 👉 : $a14","html","true");
 
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$a18",
 'caption'=>"$a15
 $a16 
 $a17"]);
  
 sendmessage($chat_id,"
 ID 👉 : $a19","html","true");
 
 
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$a23",
 'caption'=>"$a20 
 $a21 
 $a22"]);
  
 sendmessage($chat_id,"
 ID 👉 : $a24","html","true");
 
 
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$a28",
 'caption'=>"$a25 
 $a26 
 $a27"]);
 
 sendmessage($chat_id,"
 ID 👉 : $a29","html","true");
 
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$a33",
 'caption'=>"$a30 
 $a31 
 $a32"]);
  
 sendmessage($chat_id,"
 ID 👉 : $a34","html","true");
 
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$a38",
 'caption'=>"$a35
 $a36 
 $a37"]);
  
 sendmessage($chat_id,"
 ID 👉 : $a39","html","true");
 
   bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$a43",
 'caption'=>"$a40
 $a41 
 $a42"]);
 sendmessage($chat_id,"
 ID 👉 : $a44","html","true");
 
       
 sendmessage($chat_id,"🌟 آیدی مورد نظر را کپی و ارسال کنید ", "MarkDown",
      $bargasht);
}
    elseif($ali == "moozikban"){ 
  file_put_contents("ali.txt","No");
  file_put_contents("ali.txt","moziban2");
    
    $sik = $message->text;

    $get = file_get_contents("http://Api.eliyateam.ir/rj-video.php?id=$sik");

    $result = json_decode($get, true);
    $vi1 = $result['title'];
    $vi2 = $result['link'];
    $vi3 = $result['lq_link'];
    $vi4 = $result['hq_link'];


    $vid1 = $result['related']['0']['photo'];
    $vid7 = $result['related']['0']['lq_link'];

    $vid8 = $result['related']['0']['hq_link'];
 
    $long_url = urlencode ("$vi2");
    $long_url1 = urlencode ("$vi3");
    $long_url2 = urlencode ("$vi4");
    $long_url3 = urlencode ("$vid7");
    $long_url4 = urlencode ("$vid8");
    $api_token = '540b1808cc621c989aab1863f1e178de05fb566c';

    $api_url = "https://1da.ir/api?api={$api_token}&url={$long_url}&alias=CustomAlias&format=text";
    $api_url1 = "https://1da.ir/api?api={$api_token}&url={$long_url1}&alias=CustomAlias&format=text";
    $api_url2 = "https://1da.ir/api?api={$api_token}&url={$long_url2}&alias=CustomAlias&format=text";
    $api_url3 = "https://1da.ir/api?api={$api_token}&url={$long_url3}&alias=CustomAlias&format=text";
    $api_url4 = "https://1da.ir/api?api={$api_token}&url={$long_url4}&alias=CustomAlias&format=text";

    $shahin = @file_get_contents($api_url);

    $shahin1 = @file_get_contents($api_url1);

    $shahin2 = @file_get_contents($api_url2);

    $shahin3 = @file_get_contents($api_url3);
    $shahin4 = @file_get_contents($api_url4);
       
   bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$vid1",
  'caption'=>"$vi1"]);
    
  
 sendmessage($chat_id,"🌟 
https://radiojavan.com

لینک ۱ : $shahin


لینک ۲ : $shahin1


لینک ۳ : $shahin2


لینک ۴ : $shahin3


لینک ۵ :$shahin4
-------------------------------
_________________________فیلتر شکن روشن باشد _____

https://telegram.me/SaviorisGod_bot

اکنون : $time

امروز : $date",
  "MarkDown",
  $bargasht);
}
elseif($data == "proxygive"){
    
 file_put_contents("data.json",json_encode($dataa));
 
 $get = json_decode(file_get_contents("https://api.hajiapi.tk/proxy"));
 
$result= objectToArrays($get,true);

$ser1= $result['Result']['0']['server'];
$ser2 = $result['Result']['0']['port'];
$ser3 = $result['Result']['0']['secret'];
$ser4 = $result['Result']['2']['server'];
$ser5 = $result['Result']['2']['port'];
$ser6 = $result['Result']['2']['secret'];
$ser7 = $result['Result']['3']['server'];
$ser8 = $result['Result']['3']['port'];
$ser9 = $result['Result']['3']['secret'];
$ser10 = $result['Result']['4']['server'];
$ser11 = $result['Result']['4']['port'];
$ser12 = $result['Result']['4']['secret'];
$ser13 = $result['Result']['5']['server'];
$ser14 = $result['Result']['5']['port'];
$ser15 = $result['Result']['5']['secret'];
$ser16 = $result['Result']['6']['server'];
$ser17 = $result['Result']['6']['port'];
$ser18 = $result['Result']['6']['secret'];
$ser19 = $result['Result']['7']['server'];
$ser20 = $result['Result']['7']['port'];
$ser21 = $result['Result']['7']['secret'];
$ser22 = $result['Result']['8']['server'];
$ser23 = $result['Result']['8']['port'];
$ser24 = $result['Result']['8']['secret'];
$ser25 = $result['Result']['9']['server'];
$ser26 = $result['Result']['9']['port'];
$ser27 = $result['Result']['9']['secret'];
$ser28 = $result['Result']['10']['server'];
$ser29 = $result['Result']['10']['port'];
$ser30 = $result['Result']['10']['secret'];
    
bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"🌟این لیست هر ده دقیقه به روز میشود🌟",
  'parse_mode'=>"MarkDown"
 ,'reply_markup'=>json_encode
 (['inline_keyboard'=>[
     
[['text'=>"proxy1⁩",'url'=>"https://t.me/proxy?server=$ser1&port=$ser2&secret=$ser3"]],
[['text'=>"proxy2",'url'=>"https://t.me/proxy?server=$ser4&port=$ser5&secret=$ser6"],
['text'=>"proxy3",'url'=>"https://t.me/proxy?server=$ser7&port=$ser8&secret=$ser9"]],
[['text'=>"proxy4⁩",'url'=>"https://t.me/proxy?server=$ser10&port=$ser11&secret=$ser12"],
['text'=>"proxy5⁩",'url'=>"https://t.me/proxy?server=$ser13&port=$ser14&secret=$ser15"]]  , 
[['text'=>"⁦proxy6⁩",'url'=>"https://t.me/proxy?server=$ser16&port=$ser17&secret=$ser18"],
['text'=>"proxy7",'url'=>"https://t.me/proxy?server=$ser19&port=$ser20&secret=$ser21"]],
[['text'=>"proxy8",'url'=>"https://t.me/proxy?server=$ser22&port=$ser23&secret=$ser24"],
['text'=>"proxy9",'url'=>"https://t.me/proxy?server=$ser25&port=$ser26&secret=$ser27"]],
[['text'=>"proxy10",'url'=>"https://t.me/proxy?server=$ser28&port=$ser29&secret=$ser30"]],
],'resize_keyboard'=>true
])
]);
}
elseif($data == "b"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"یه ",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"ab"]
              ]
              ]
        ])
 ]);
}
	elseif($data == "zaman"){
    
    bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"🔻تاریخ و زمان به وقت ایران🔺",
 
 'parse_mode'=>"MarkDown",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
[
['text'=>"⏳تاریخ امروز⌛️",'callback_data'=>"en"],['text'=>"$l",'callback_data'=>"bio"]
],
[
['text'=>"⏰ساعت⏰",'callback_data'=>"en"],['text'=>"$h",'callback_data'=>"bio"]
],
[
['text'=>"🍃روز هفته🍃",'callback_data'=>"en"],['text'=>"$hafte",'callback_data'=>"bio"]
],
[
['text'=>"🐻حیوان سال🐽",'callback_data'=>"en"],['text'=>"$m",'callback_data'=>"bio"]
],
[
['text'=>"🍂فصل🍁",'callback_data'=>"en"],['text'=>"$fasl",'callback_data'=>"bio"]
],
[
['text'=>"🌝ماه🌜",'callback_data'=>"en"],['text'=>"$mo",'callback_data'=>"bio"]
],
[
['text'=>"🌞روز های باقیمانده از سال🌞",'callback_data'=>"en"],['text'=>"$q",'callback_data'=>"bio"]
],
	]
	])
	]);
	}
elseif($data == "insta1"){
    file_put_contents("ali.txt","insta1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"لینک اینستاگرام بفرس",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"ab"]
              ]
              ]
        ])
 ]);
}
elseif($ali == "insta1"){
    file_put_contents("ali.txt","No");
    $alba = $message->text;
    
    $get = json_decode(file_get_contents("https://api.sssgram.com/st-tik/ins/dl?url=$alba"));
 $result = objectToArrays($get, true);
    $in6 = $result['result']['insBos'][0]['url'];
    $in7 = $result['result']['insBos'][0]['type'];
    $in8 = $result['result']['insBos'][0]['author'];

    $in10 = $result['result']['insBos'][0]['desc'];
    if ($in7 == 'mp4') {
  bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"$in6",
 'caption'=>"
 $in8


 $in10

==================
@SaviorisGod_bot"]);

 if ($in7 == 'jpg') {
  bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$in6",
 'caption'=>
  "$in8
  $in10


==================
@SaviorisGod_bot"]);
}
}
}
elseif($data == "insta2"){
    file_put_contents("ali.txt","insta2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"لینک اینستاگرام بفرس",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>$bargasht
 ]);
}
elseif($ali == "insta2"){
    file_put_contents("ali.txt","No");

$abi = $message->text;
$get = json_decode(file_get_contents("https://api.hajiapi.tk/instapost?url=$abi"));
$result = objectToArrays($get, true);
 $ala1 = $result['result']['mp4']['url']['0']['url'];
 $ala2 = $result['result']['mp4']['meta']['title'];
 $ala3 = $result['result']['mp4']['thumb'];
 $ala4 = $result['result']['MP3'];

bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$ala3",
 'caption'=>"💎 تصویر پست 💎
===================
⁦✳️⁩@SaviorisGod_bot⁦✳️⁩"]);
 bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>"$ala4",
 'caption'=>"⁦✔️⁩فایل mp3 مربوط به پست مورد نظر⁦
=================
⁦✳️⁩ @SaviorisGod_bot ✳️⁩"]);
  bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"$ala1",
 'caption'=>"

$ala2
==============
⁦✳️⁩@SaviorisGod_bot⁦ ✳️⁩"]);
}
elseif($data == "tabdilgar"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیل گر خوش امدید
 خوب من اماده هستم میخوای کدوم بخش بریم",
 'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"تبدیلگر عکس🖼",'callback_data'=>"c"],['text'=>"تبدیلگر  فیلم🎥",'callback_data'=>"d"]],
 [['text'=>"تبدیلگر  آهنگ🎧",'callback_data'=>"e"],['text'=>"تبدیلگر  متن📠",'callback_data'=>"g"]]]])
 ]);
}
elseif($data == "ab"){
    bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
    'text' =>"سلام کاربر عزیز👋

به ربات خودتون خوش اومدین",
  'parse_mode'=>$mode,
 'reply_markup'=>$abzar]);
      
}
elseif($data == "back"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیل گر خوش امدید

 خوب من اماده هستم میخوای کدوم بخش بریم",
 'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"تبدیلگر عکس🖼",'callback_data'=>"c"],['text'=>"تبدیلگر  فیلم🎥",'callback_data'=>"d"]
              ],
              [
              ['text'=>"تبدیلگر  آهنگ🎧",'callback_data'=>"e"],['text'=>"تبدیلگر  متن📠",'callback_data'=>"g"]
              ]
              ]
        ])
 ]);
}

//====================Photo======================//
elseif($data == "c"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیلگر عکس🖼 خوش امدید

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون",
 'parse_mode'=>"MarkDown",
     'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
            ['text'=>"تبدیل‌عکس‌به‌فایل💾",'callback_data'=>"c1"],['text'=>"تبدیل‌فایل‌به‌عکس🖼",'callback_data'=>"c2"]
            ],
             [
            ['text'=>"تبدیل‌استیکر‌به‌عکس🌇",'callback_data'=>"c3"],['text'=>"تبدیل‌عکس‌به‌استیکر🎡",'callback_data'=>"c4"]
            ],
             [
            ['text'=>"تبدیل استیکر به فایل💾",'callback_data'=>"c5"],['text'=>"تبدیل‌فایل‌به‌استیکر🎡",'callback_data'=>"c6"]],
 [['text'=>"برگشت◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back2"){
bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیلگر عکس🖼 خوش امدید😃

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون😊",
 'parse_mode'=>"MarkDown",
     'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
            ['text'=>"تبدیل‌عکس‌به‌فایل💾",'callback_data'=>"c1"],['text'=>"تبدیل‌فایل‌به‌عکس🖼",'callback_data'=>"c2"]
            ],
             [
            ['text'=>"تبدیل‌استیکر‌به‌عکس🌇",'callback_data'=>"c3"],['text'=>"تبدیل‌عکس‌به‌استیکر🎡",'callback_data'=>"c4"]
            ],
             [
            ['text'=>"تبدیل استیکر به فایل💾",'callback_data'=>"c5"],['text'=>"تبدیل‌فایل‌به‌استیکر🎡",'callback_data'=>"c6"]
            ],
            [
              ['text'=>"برگشت◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c1"){
file_put_contents("ali.txt","c1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوب کاربر عزیز عکس خودتون را بفرستید تا تبدیل به فایلش کنم",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c2"){
file_put_contents("ali.txt","c2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوب کاربر عزیز فایل خودتون را بفرستید تا تبدیل به عکسش کنم",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c3"){
file_put_contents("ali.txt","c3");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوب کاربر عزیز استیکر خودتون را بفرستید تا تبدیل به عکسش کنم",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c4"){
file_put_contents("ali.txt","c4");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوب کاربر عزیز عکس خودتون را بفرستید تا تبدیل به استیکر کنم",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c5"){
file_put_contents("ali.txt","c5");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز استیکر خودتون را بفرستید تا تبدیل به فایل png کنمش",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($data == "c6"){
file_put_contents("ali.txt","c6");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خوب کاربر عزیز فایل png خودتون را بفرستید تا تبدیل به  استیکر کنم",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back2"]
              ]
              ]
        ])
 ]);
}
elseif($ali == "c1"){
file_put_contents("ali.txt","No");
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('tikapp.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('tikapp.png'),
 ]);
}
elseif($ali == "c2"){
file_put_contents("ali.txt","No");
$document = $message->document;
$file = $document->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('tikapp.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile('tikapp.png'),
 ]);
 }
elseif($ali == "c3"){
file_put_contents("ali.txt","No");
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('tikapp.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile('tikapp.png'),
 ]);
 }
elseif($ali == "c4"){
file_put_contents("ali.txt","No");
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('tikapp.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile('tikapp.png'),
 ]);
}
elseif($ali == "c5"){
file_put_contents("ali.txt","No");
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('tikapp.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('tikapp.png'),
 ]);
 }
 elseif($ali == "c6"){
 file_put_contents("ali.txt","No");
$document = $message->document;
$file = $document->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('tikapp.png',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile('tikapp.png'),
 ]);
 }
//====================video======================//
elseif($data == "d"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیلگر فیلم🎥 خوش امدید

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"تبدیل‌فیلم‌به‌آهنگ🎤",'callback_data'=>"d1"],['text'=>"تبدیل‌فیلم‌به‌گیف🎥",'callback_data'=>"d2"]
            ],
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back3"){
bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیلگر فیلم🎥 خوش امدید

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"تبدیل‌فیلم‌به‌آهنگ🎤",'callback_data'=>"d1"],['text'=>"تبدیل‌فیلم‌به‌گیف🎥",'callback_data'=>"d2"]
            ],
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "d1"){
file_put_contents("ali.txt","d1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز فیلم خودتون را بفرستید تا تبدیل به  اهنگ کنمش🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back3"]
              ]
              ]
        ])
 ]);
}
elseif($data == "d2"){
file_put_contents("ali.txt","d2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز فیلم خودتون را بفرستید تا تبدیل به  گیف کنمش🤓😉",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back3"]
              ]
              ]
        ])
 ]);
}
elseif($data == "d3"){
file_put_contents("ali.txt","d3");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز فایل خودتون را بفرستید تا تبدیل به  فیلم بشه",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back3"]
              ]
              ]
        ])
 ]);
}
elseif($ali == "d1"){
 file_put_contents("ali.txt","No");
$video = $message->video;
$file = $video->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('tikapp.mp3',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>new CURLFile('tikapp.mp3'),
 ]);
 }
 elseif($ali == "d2"){
 file_put_contents("ali.txt","No");
$video = $message->video;
$file = $video->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('tikapp.gif',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>new CURLFile('tikapp.gif'),
 ]);
 }
//====================audio======================//
elseif($data == "e"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیلگر آهنگ🎧 خوش امدید😃

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"تبدیل‌ویس‌به‌آهنگ🎤",'callback_data'=>"e1"],['text'=>"تبدیل‌آهنگ‌به‌ویس🎧",'callback_data'=>"e2"]
            ],
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back4"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیلگر آهنگ🎧 خوش امدید😃

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"تبدیل‌ویس‌به‌آهنگ🎤",'callback_data'=>"e1"],['text'=>"تبدیل‌آهنگ‌به‌ویس🎧",'callback_data'=>"e2"]
            ],
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "e1"){
file_put_contents("ali.txt","e1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز ویس خودتون را بفرستید تا تبدیل به  آهنگ کنمش🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back4"]
              ]
              ]
        ])
 ]);
}
elseif($data == "e2"){
file_put_contents("ali.txt","e2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز اهنگ خودتون را بفرستید تا تبدیل به  ویس کنمش🤓",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back4"]
              ]
              ]
        ])
 ]);
}
elseif($ali == "e1"){
 file_put_contents("ali.txt","No");
$voice = $message->voice;
$file = $voice->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('tikapp.mp3',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>new CURLFile('tikapp.mp3'),
 ]);
 }
elseif($ali == "e2"){
 file_put_contents("ali.txt","No");
$audio = $message->audio;
$file = $audio->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('tikapp.ogg',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>new CURLFile('tikapp.ogg'),
 ]);
 }
//====================text======================//
elseif($data == "g"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیل گر📠 خوش امدید

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                        [
            ['text'=>"تبدیل‌متن‌به‌استیکر🌇",'callback_data'=>"g1"],['text'=>"تبدیل‌متن‌به‌عکس🖼",'callback_data'=>"g2"]
            ],            
            [
            ['text'=>"تبدیل‌متن‌به‌ویس🎤",'callback_data'=>"g3"]
            ],
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "back5"){
bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیل گر📠 خوش امدید

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                        [
            ['text'=>"تبدیل‌متن‌به‌استیکر🌇",'callback_data'=>"g1"],['text'=>"تبدیل‌متن‌به‌عکس🖼",'callback_data'=>"g2"]
            ],            
            [
            ['text'=>"تبدیل‌متن‌به‌ویس🎤",'callback_data'=>"g3"]
            ],
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
elseif($data == "g1"){
file_put_contents("ali.txt","g1");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز متن خودتون را بفرستید تا به استیکر تبدیلش کنم",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back5"]
              ]
              ]
        ])
 ]);
}
elseif($data == "g2"){
file_put_contents("ali.txt","g2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز متن خودتون را بفرستید تا تبدیل عکسش کنم",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back5"]
              ]
              ]
        ])
 ]);
}
elseif($data == "g3"){
file_put_contents("ali.txt","g3");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "خوب کاربر عزیز متن خودتون را بفرستید تا تبدیل به ویسش کنم 🙃
 فقط کلمه های انگلیسی 
 میتونید بصورت پینگلیش بفرستید 
 مثلا : salam",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"برگشت◀️",'callback_data'=>"back5"]
              ]
              ]
        ])
 ]);
}
elseif($ali == "g1"){
 file_put_contents("ali.txt","No");
	$photo = file_get_contents('http://tikapp.000webhostapp.com/ml/?color=white&text='.urlencode($text));
	file_put_contents('logo.png',$photo);
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile('logo.png'),
 ]);
 }
elseif($ali == "g2"){
 file_put_contents("ali.txt","No");
	$photo = file_get_contents('http://tikapp.000webhostapp.com/ml/?color=white&text='.urlencode($text));
	file_put_contents('logo.png',$photo);
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile('logo.png'),
 ]);
 }
elseif($ali == "g3"){
 file_put_contents("ali.txt","No");
	$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.urlencode($text));
 file_put_contents('vo.ogg',$vo);
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>new CURLFile('vo.ogg'),
 ]);
 }
 
 elseif($data == "yout"){
file_put_contents("ali.txt","yout");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "لینک یوتیوب خود را ارسال کنید ",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>$bargasht
 ]);
 }
 
 elseif($ali == "yout"){
file_put_contents("ali.txt","none");
 
    $telli = $message->text;
    $get = json_decode(file_get_contents("http://api.hajiapi.tk/youtube?url=$telli"));
    $result = objectToArrays($get, true);
    $al1 = $result['Result']['title'];
    $al2 = $result['Result']['fquality'];
    $al3 = $result['Result']['dlink'];
    $al4 = $result['Result']['ftype'];
    sendaction($chat_id,typing);
bot ('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"$al3",
 'caption'=>"
کیفیت  : $al2


عنوان  :  $al1


نوع  :    $al4

=========================
@SaviorisGod_bot"]);
}

elseif($data == "vajeh"){
    
file_put_contents("ali.txt","vajeh");

bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"⁦✴️⁩کلمه ی مورد نظر را ارسال کنید ⁦✴️⁩",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>$bargasht
 ]);
 }
 
 elseif($ali == "vajeh"){
     file_put_contents("ali.txt","none");
  $dsa = $message->text;
    $get = file_get_contents("https://api.codebazan.ir/vajehyab/?text=$dsa");
$result =json_decode($get,true);
  

$alam1 = $result['result']['motaradefmotezad'];
$alam2 = $result['result']['fa'];
$alam3 = $result['result']['mani'];
$alam4 = $result['result']['Fmoein'];
$alam5 = $result['result']['Fdehkhoda'];

sendmessage($chat_id,"🌟 
 
 👈 کلمه : $alam2

👈 معنی  : $alam3


لغتنامه معین 👈  : $alam4



 👈 لغتنامه دهخدا : $alam5


👈 مترادف / متضاد  : $alam1", "html","true"
      
 );
}
elseif($data == "ax"){
file_put_contents("ali.txt","ax");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "⁦✴️⁩کلمه ی مورد نظر را ارسال کنید ⁦✴️⁩",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>$bargasht
 ]);
 }
 
 elseif($ali == "ax"){
file_put_contents("ali.txt","No");
 $model = $message->text;
    $get = json_decode(file_get_contents("http://haji-api.ir/wallpaper?search=$model&number=1"));

$result = objectToArrays($get, true);
$pho1 = $result['result']['0']['photo'];

    $pho2 = $result['result']['2']['photo'];

    $pho3 = $result['result']['3']['photo'];
    $phona = $result['result']['4']['photo'];
    $phob = $result['result']['5']['photo'];
    $pho4 = $result['result']['6']['photo'];
    $pho5 = $result['result']['7']['photo'];
    $pho6 = $result['result']['8']['photo'];
    $pho7 = $result['result']['9']['photo'];
    $pho8 = $result['result']['10']['photo'];
    $pho9 = $result['result']['11']['photo'];
    $pho10 = $result['result']['12']['photo'];
    $pho11 = $result['result']['13']['photo'];
    $pho12 = $result['result']['14']['photo'];
    $pho13 = $result['result']['15']['photo'];
    sendaction($chat_id,typing);
    
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho1"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho2"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho3"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho4"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho5"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho6"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho7"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho8"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho9"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho10"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho11"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho12"]);
     
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$pho13",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>$bargasht
 ]);
}
//====================Tikapp======================//

   ?>

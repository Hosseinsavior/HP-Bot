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
 function smg($chat_id, $text, $model){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>$mode
 ]);
 }
 function sph($chat_id, $photo, $captionl){
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
 function svo($chat_id, $video, $caption){
 bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>$video,
 'caption'=>$caption
 ]);
 }
 function Editm($chatid, $text, $messageid, $Key) {
    bot('editmessagetext', ['chat_id' => $chatid, 'message_id' => $messageid, 'text' => $text, 'reply_markup' => $Key, 'parse_mode' => "MarkDown"]);
 }
 function sendvoice($chat_id, $voice, $caption){
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$voice,
 'caption'=>$caption
 ]);
 }
 function sac($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
 ]);
 }
 function obj($object)
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
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->userame;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
$reply = $update->message->reply_to_message;
$ali = file_get_contents("ali.txt");
$ADMIN = 5059280908;
$tin = file_get_contents("https://Api.eliyateam.ir/old/time.php");
$timee = json_decode($tin, true);
$time = $timee["FAtime"];
$date = $timee["FAdate"];
$year = file_get_contents("data/year.txt");
$month = file_get_contents("data/month.txt");
$day = file_get_contents("data/day.txt");
$Back = json_encode(['resize_keyboard' => true, 'inline_keyboard' => [[['text' => "برگشت ⏩", 'callback_data' => 'start']],]]);
$arzotala = json_encode(['resize_keyboard' => true, 'inline_keyboard' => [

[['text' => "نرخ طلا💰", 'callback_data' => 'tala']],
[['text' => "نرخ ارز💵", 'callback_data' => 'arz']],
]]);
$abzarha = json_encode
(['resize_keyboard' => true,
    'inline_keyboard'=>[
[['text'=>"اینستادانلودر۱⁦✴️⁩",'callback_data'=>"insta1"]],
[['text'=>"اینستادانلودر۲💫",'callback_data'=>"insta2"],
['text'=>"یوتیوب دانلودر💥",'callback_data'=>"yout"]],
[['text'=>"دریافت پروکسی⁦🕸️⁩",'callback_data'=>"proxy"],
['text'=>"واژه یاب⁦🗞️⁩",'callback_data'=>"vajeh"]]  , 
[['text'=>"عکس زمینه⁦♨️⁩",'callback_data'=>"ax"],
['text'=>"نرخ ارز و طلا💰",'callback_data'=>"arzotala"]]  ,
[['text'=>"نرخ خودرو🚗",'callback_data'=>"khodro"],
['text'=>"نرخ موبایل📱",'callback_data'=>"mobne"]],
[['text'=>"خبرگزاری جوان💠",'callback_data'=>"khabar"],
 ['text'=>"تاریخ و زمان🕔",'callback_data'=>"zaman"]],
[['text'=>"عکس به استیکر⁦⚛️⁩",'callback_data'=>"tosticker"],
['text'=>"استیکر به عکس♐",'callback_data'=>"tophoto"]],
[['text'=>"اطلاعات تولد🤰",'callback_data'=>"tavalod"],
['text'=>"فال حافظ🌟",'callback_data'=>"fal"]], [['text'=>"فیلمکده⁦📽️⁩",'callback_data'=>"filmk"],
['text'=>"موزیک ویدئو🎬⁩",'callback_data'=>"moozik"]],
[['text'=>"اطلاعات فنی موبایل📵",'callback_data'=>"mobet"],
['text'=>"↩️برگشت",'callback_data'=>"back"]],
[['text'=> "خبرگزاری",'callback_data'=>'khabar']],
]]);
$panel = json_encode(['resize_keyboard' => true,
'inline_keyboard' => [
[['text' => "آمار ربات 📊", 'callback_data' => 'panel']],
[['text' => "خروج از پنل مدیریت", 'callback_data' => 'kharej'], ['text' => "تهدید", 'callback_data' => 'tah']], [['text' => "افزودن ادمین ➕", 'callback_data' => 'add_admin'], ['text' => "حذف ادمین ➖", 'callback_data' => 'del_admin']], [['text' => "⚙ تنظیمات فورچی ⚙", 'callback_data' => 'settings']],
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
sac($chat_id, typing);
        smg($chat_id," کاربر عزیز خوش آمدید",
                "MarkDown",
      $messageid,$abzarha);}
//====================Tikapp======================//
 elseif($text == "/panel" or "مدیریت" && $from_id == $ADMIN){
sac($chat_id, typing);
      bot('sendmessage',[
          'chat_id'=>$chat_id,
          'text'=>"ادمین عزیز به پنل مدیریتی ربات خودش امدید",'parse_mode'=>
                "markdown",'reply_markup'=> json_encode([ 
'inline_keyboard' => [
[['text' => "آمار ربات 📊", 'callback_data' => 'panel']],
[['text' => "خروج از پنل مدیریت", 'callback_data' => 'kharej'], ['text' => "تهدید", 'callback_data' => 'tah']], [['text' => "افزودن ادمین ➕", 'callback_data' => 'add_admin'], ['text' => "حذف ادمین ➖", 'callback_data' => 'del_admin']], [['text' => "⚙ تنظیمات فورچی ⚙", 'callback_data' => 'settings']],
'resize_keyboard' => true,]])
]));
}
elseif($ali == "amar" && $from_id == $ADMIN){
 sac($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
 smg($chat_id , " آمار کاربران : $member_count" , "html");
}
elseif($text == "پیام همگانی" && $from_id == $ADMIN){
    file_put_contents("ali.txt","bc");
 sac($chat_id,'typing');
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
 sac($chat_id,'typing');
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
elseif($data == "b"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> "",
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
elseif($data == "ab"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"سلام کاربر جدید👋❤️😋

به ربات تبدیل گر فایل ها خوش آمدید😁",
 'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
             [
              ['text'=>"تبدیلگر🙃",'callback_data'=>"a"],['text'=>"راهنما📚",'callback_data'=>"b"]
              ]
              ]
        ])
 ]);
}
elseif($data == "a"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیل گر خو‌ش امدید🙃

 خوب من اماده هستم میخوای کدوم بخش بریم🤓",
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
elseif($data == "back"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به بخش تبدیل گر خو‌ش امدید🙃

 خوب من اماده هستم میخوای کدوم بخش بریم🤓",
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
 'text'=>"خوب کاربر عزیز عکس خودتون را بفرستید تا تبدیل به فایلش کنم🤓",
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
 'text'=>"خوب کاربر عزیز فایل خودتون را بفرستید تا تبدیل به عکسش کنم🤓",
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
 'text'=>"خوب کاربر عزیز استیکر خودتون را بفرستید تا تبدیل به عکسش کنم🤓",
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
 'text'=>"خوب کاربر عزیز عکس خودتون را بفرستید تا تبدیل به استیکر کنم🤓",
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
 'text'=> "خوب کاربر عزیز استیکر خودتون را بفرستید تا تبدیل به فایل png کنمش🤓",
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
 'text'=>"خوب کاربر عزیز فایل png خودتون را بفرستید تا تبدیل به  استیکر کنمش🤓",
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
 'text'=>"به بخش تبدیلگر فیلم🎥 خوش امدید😃

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون😊",
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
 'text'=>"به بخش تبدیلگر فیلم🎥 خوش امدید😃

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون😊",
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
 'text'=> "خوب کاربر عزیز فایل خودتون را بفرستید تا تبدیل به  فیلم کنمش🤓😉",
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

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون😊",
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

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون😊",
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
 'text'=>"به بخش تبدیل گر📠 خوش امدید😃

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون😊",
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
 'text'=>"به بخش تبدیل گر📠 خوش امدید😃

ابتدا یه بخش را انتخاب کنید تا بریم سراغ کارمون😊",
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
 'text'=> "خوب کاربر عزیز متن خودتون را بفرستید تا به استیکر تبدیلش کنم🙃",
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
 'text'=> "خوب کاربر عزیز متن خودتون را بفرستید تا تبدیل عکسش کنم🤓",
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
//====================Tikapp======================//

   ?>

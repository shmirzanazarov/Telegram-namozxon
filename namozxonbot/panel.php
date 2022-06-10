<?php


$xojaakhmedovD = json_decode(file_get_contents('php://input'));
$admin = "1020678098"; 
$message = $xojaakhmedovD->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$type = $message->chat->type;
$tx = $message->text;
$text= $message->text;
$step = file_get_contents("step/$cid.step");
$name = $message->chat->first_name;
$user = $message->from->username;
mkdir("xojaakhmedovD");
mkdir("step");

$boshqaruv = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"💌Send📧"]],
]
]);

$bekor = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"❌Bekor qilish"]],
]
]);

if($tx=="/forward" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👨🏻‍💻Admin panelga xush kelibsiz!!",
'reply_markup'=>$boshqaruv,
]);
}

$azo = file_get_contents("xojaakhmedovD/azo.dat");
if($type=="private"){
if(stripos($azo,"$cid") !==false){
}else{
file_put_contents("xojaakhmedovD/azo.dat","$azo\n$cid");
}
}

if($tx=="💌Send📧" and $cid==$admin){
if($tx !="❌Bekor qilish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<i>Xabar matnini kiriting. Xabar turi: FORWARD</i>

Bekor qilish uchun ❌Bekor qilish tugmasini bosing...",
'reply_markup'=>$bekor,
]);
file_put_contents("step/$cid.step","forwardazo");
}
}

if($step=="forwardazo" and $cid==$admin){
  if($text=="❌Bekor qilish"){
  file_put_contents("step/$cid.step","");
}else{
$userlar = explode("\n",$azo);
foreach($userlar as $users){
$xabarok=bot('ForwardMessage',[
'chat_id'=>$users,
'from_chat_id'=>$cid,
'message_id'=>$mid,
]);
}
}
}
if($xabarok){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<i>Xabaringiz hamma bot a'zolariga forward tarzida yetkazildi</i>
",
]);
file_put_contents("step/$cid.step","");
}

if($tx=="❌Bekor qilish" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Bekor qilindi✅*",
'parse_mode'=>'markdown',
'reply_markup'=>$boshqaruv,
]);
}

?>

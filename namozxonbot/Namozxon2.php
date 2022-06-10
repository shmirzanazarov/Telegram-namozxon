<?php
ob_start();

define('By_Alik',"5124239818:AAER4xwuu1isIQ1mO4Rc_la5dP8z_lxLZnk");

$admin = "1020678098";

function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
} 

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".By_Alik."/".$method;
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

function joinchat($chatid){
    global $name, $cmid;
    $result = bot('getChatMember',[
    'chat_id'=>"@namozxon_uz_bot",
    'user_id'=>$chatid
    ])->result->status;
    if($result == "creator" or $result == "administrator" or $result == "member"){
        return true;
    } else {
        bot('deleteMessage',[
        'chat_id'=>$cid,        'message_id'=>$cmid
        ]); 
        bot('sendMessage',[
        'chat_id'=>$chatid,
        'text'=>"🔐 @namozxon_uz_bot ga obuna bo'lmasangiz botdan foydalana olmaysiz",
       'parse_mode'=>"html",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>"➕ A'zo bo'lish",'url'=>"https://t.me/namozxon_uz_bot"]],
        [['text'=>"✅ Tekshirish",'callback_data'=>"tekshir"]]
        ]
        ])
        ]);
        return false;
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$text = $message->text; 
$tx = $message->text;
$from_id = $update->message->from->id;
$mid = $message->message_id;
$name = $message->from->first_name;
$fid = $message->from->id;
$callback = $update->callback_query;
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$cqid = $update->callback_query->id;

$damas = json_decode(file_get_contents('php://input'));
$AdvakatUz = $damas->message;
$cid = $AdvakatUz->chat->id;
$sd = $AdvakatUz->text;
$bass=$AdvakatUz->text;
$type = $AdvakatUz->chat->type;
$name = $AdvakatUz->from->first_name;
$user = $AdvakatUz->from->username;
$uid = $AdvakatUz->from->id;
$reply = $AdvakatUz->reply_to_message->text;
$mid = $AdvakatUz->message_id;
$repname = $AdvakatUz->reply_to_message->from->first_name;
$id = $AdvakatUz->reply_to_message->from->id;
$forwardchat= $AdvakatUz->forward_from_chat;
$data = $AdvakatUz->contact;
$cdata = $damas->callback_query->data;
$cqid = $damas->callback_query->id;
$callcid = $damas->callback_query->message->chat->id;
$callmid = $damas->callback_query->message->message_id;
$nomer = $AdvakatUz->contact->phone_number;
//Yangi odam id si

$soat = date('H:i:s',strtotime('2 hour')); 
$kun = date('d',strtotime('2 hour'));
$yil = date('Y',strtotime('2 hour'));
$edit = $damas->edited_message;
$ecid = $edit->chat->id;
$emid = $edit->message_id;
$etext = $edit->text;
 $edname = $edit->from->first_name;
$edid = $edit ->from->id;

$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$cid2 = $update->callback_query->message->chat->id;
$mid2 = $update->callback_query->message->message_id;
$callfrid = $update->callback_query->from->id;
$callname = $update->callback_query->from->first_name;
$calluser = $update->callback_query->from->username;
$surname = $update->callback_query->from->last_name;
$about = $update->callback_query->from->about;

$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$data = $callback->data;
$callid = $callback->id;
$cname = $calback->message->from->first_name;
$ccid = $callback->message->chat->id;
$cmid = $callback->message->message_id;
$cfid = $callback->message->from->id;
$user = $message->from->username;
$botname = bot('getme',['@musulmon_kundalik_bot'])->result->username;
$inlinequery = $update->inline_query;
$inline_id = $inlinequery->id;
$inlineid = $inlinequery->from->id;
$inline_query = $inlinequery->query;
$user = "shmirzanazarov";

$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$main_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🕋Namoz🕋"],['text'=>"📖Qur'on📖"]],
[['text'=>"4️⃣0️⃣Qirq farz✅"],['text'=>"🚿Poklanish🚿"]],
[['text'=>"📿6 Diniy kalima📿"],['text'=>"🪦Qabrda bo‘ladigan savol-javoblar🪦"]],
[['text'=>"☪️Diniy bayramlar☪️"],['text'=>"🍴Ro'za🍵"]],
[['text'=>"📚Ma'lumot"]],
]
]);

$organ_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🕋Namoz o'qish"],['text'=>"⏰Namoz vaqtlari"]],
[['text'=>"🌙Namoz haqida"],['text'=>"◀️Ortga"]],
]
]);

$gusl_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🚿G'usl haqida"]],
[['text'=>"🧖‍♂️ Tahorat"],['text'=>"🗻Tayammum"]],
[['text'=>"◀️Ortga"]],
]
]);

$roza_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🍵Ro'za haqida"]],
[['text'=>"🍵Ro'za duosi"],['text'=>"◀️Ortga"]],
]
]);

$admin_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"✍🏻Murojat📨"],['text'=>"ℹBot haqida"]],
[['text'=>"◀️Ortga"]],
]
]);

$namoz_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🌅Bomdod"],['text'=>"🌁Peshin"]],
[['text'=>"🌇Asr"],['text'=>"🌆Shom"]],
[['text'=>"🌃Xufton"],['text'=>"🌙Namozdan keyingi zikrlar"]],
[['text'=>"🌙Ikki xayit namozi"],['text'=>"🌙Qazo namozlar"]],
[['text'=>"🌙Musofirning namozi"],['text'=>"🌙Juma namozi"]],
[['text'=>"🌙Janoza namozi"],['text'=>"◀️Orqaga"]],
]
]);

$vaqt_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🏙 Farg'ona"],['text'=>"🏙 Xiva"],],
 [['text'=>"🏙 Toshkent"],['text'=>"🏙 Namangan"],],
 [['text'=>"🏙 Buxoro"],['text'=>"🏙 Guliston"],],
 [['text'=>"🏙 Jizzax"],['text'=>"🏙 Zarafshon"],],
 [['text'=>"🏙 Qarshi"],['text'=>"🏙 Navoiy"],],
 [['text'=>"🏙 Nukus"],['text'=>"🏙 Samarqand"],],
 [['text'=>"🏙 Termiz"],['text'=>"🏙 Urganch"],],
 [['text'=>"◀️Orqaga"],],
]
]);

$pora_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎙1-pora🔉"],['text'=>"🎙2-pora🔉"],['text'=>"🎙3-pora🔉"],],
[['text'=>"🎙4-pora🔉"],['text'=>"🎙5-pora🔉"],['text'=>"🎙6-pora🔉"],],
[['text'=>"🎙7-pora🔉"],['text'=>"🎙8-pora🔉"],['text'=>"🎙9-pora🔉"],],
[['text'=>"🎙10-pora🔉"],['text'=>"🎙11-pora🔉"],['text'=>"🎙12-pora🔉"],],
[['text'=>"🎙13-pora🔉"],['text'=>"🎙14-pora🔉"],['text'=>"🎙15-pora🔉"],],
[['text'=>"🎙16-pora🔉"],['text'=>"🎙17-pora🔉"],['text'=>"🎙18-pora🔉"],],
[['text'=>"🎙19-pora🔉"],['text'=>"🎙20-pora🔉"],['text'=>"🎙21-pora🔉"],],
[['text'=>"🎙22-pora🔉"],['text'=>"🎙23-pora🔉"],['text'=>"🎙24-pora🔉"],],
[['text'=>"🎙25-pora🔉"],['text'=>"🎙26-pora🔉"],['text'=>"🎙27-pora🔉"],],
[['text'=>"🎙28-pora🔉"],['text'=>"🎙29-pora🔉"],['text'=>"🎙30-pora🔉"],],
[['text'=>"◀️Ortga qaytish"]],
]
]);

$namozh_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Namoz Bu.."],['text'=>"Namozning Farzi.."],],
[['text'=>"Namozning Vojiblari.."],],
[['text'=>"Namozning Sunnatlar.."],['text'=>"Namozning Mustahablari.."],],
[['text'=>"Namozni buzuvchi amallar.."],],
[['text'=>"Namozning Makruhlari.."],['text'=>"Namozning mubohlari"],],
[['text'=>"Erkak va ayollar namozining farqlar"],],
[['text'=>"Namozni buzish joiz bo‘lgan o‘rinlar"],['text'=>"◀️Orqaga"],],
]
]);

$quran_menu = json_encode([
'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'📖Fotiha surasi']],				
[['text'=>'📖Baqara surasi'],['text'=>'📖Imron surasi'],['text'=>'📖Niso surasi']],
				[['text'=>'📖Maida surasi'],['text'=>'📖Anam surasi'],['text'=>'📖Arof surasi']],
				[['text'=>'📖Anfol surasi'],['text'=>'📖Tavba surasi'],['text'=>'📖Yunus surasi']],
				[['text'=>'📖Hud surasi'],['text'=>'📖Yusuf surasi'],['text'=>'📖Rad surasi']],
				[['text'=>'📖Ibrohim surasi'],['text'=>'📖Hijr surasi'],['text'=>'📖Nahl surasi']],
				[['text'=>'📖Isro surasi'],['text'=>'📖Kahf surasi'],['text'=>'📖Maryam surasi']],
				[['text'=>'📖Toha surasi'],['text'=>'📖Anbiyo suarsi'],['text'=>'📖Haj surasi']],
				[['text'=>'📖Muminun surasi'],['text'=>'📖Nur surasi'],['text'=>'📖Furqon surasi']],
				[['text'=>'📖Shuaro surasi'],['text'=>'📖Naml surasi'],['text'=>'📖Qasos surasi']],
				[['text'=>'📖Ankabut surasi'],['text'=>'📖Rum Surasi'],['text'=>'📖Luqmon surasi']],
				[['text'=>'📖Sajda surasi'],['text'=>'📖Ahzob surasi'],['text'=>'📖Saba surasi']],
				[['text'=>'📖Fotir surasi'],['text'=>'📖Yosin surasi'],['text'=>'📖Soffat surasi']],
				[['text'=>'📖Sod surasi'],['text'=>'📖Zumar surasi'],['text'=>'📖Gofir surasi']],
				[['text'=>'📖Fussilat surasi'],['text'=>'📖Shoro surasi'],['text'=>'📖Zuxruf surasi']],
				[['text'=>'📖Zuhan surasi'],['text'=>'📖Jathiya surasi'],['text'=>'📖Ahqaf surasi']],
				[['text'=>'📖Muhammad surasi'],['text'=>'📖Fath surasi'],['text'=>'📖Hujurat surasi']],
				[['text'=>'📖Qof surasi'],['text'=>'📖Zuriyat surasi'],['text'=>'📖Tur surasi']],
				[['text'=>'📖Najim surasi'],['text'=>'📖Qamar surasi'],['text'=>'📖Rohman surasi']],
				[['text'=>'📖Voqiya surasi'],['text'=>'📖Hadid surasi'],['text'=>'📖Mujadila surasi']],
				[['text'=>'📖Hashir surasi'],['text'=>'📖Mumtahina surasi']],
				[['text'=>'📖Soff surasi'],['text'=>'📖Juma surasi'],['text'=>'📖Munofiqun surasi']],
				[['text'=>'📖Taghabun surasi'],['text'=>'📖Taloq surasi'],['text'=>'📖Tahrim surasi']],
				[['text'=>'📖Mulk surasi'],['text'=>'📖Qalam surasi'],['text'=>'📖Haqqa surasi']],
				[['text'=>'📖Muorij surasi'],['text'=>'📖Nuh surasi'],['text'=>'📖jinn surasi']],
				[['text'=>'📖Muzzammil surasi'],['text'=>'📖Muddathir surasi'],['text'=>'📖Qiyama surasi']],
				[['text'=>'📖Insan surasi'],['text'=>'📖Mursalat surasi'],['text'=>'📖Naba surasi']],
				[['text'=>'📖Naziat surasi'],['text'=>'📖Abasa surasi'],['text'=>'📖Takawir surasi']],
				[['text'=>'📖Infitar surasi'],['text'=>'📖Mutaffifin surasi'],['text'=>'📖Inshiqaq surasi']],
				[['text'=>'📖Burooj surasi'],['text'=>'📖Tariq surasi'],['text'=>'📖Ala surasi']],
				[['text'=>'📖Ghashiya surasi'],['text'=>'📖Fajir surasi'],['text'=>'📖Balad surasi']],
				[['text'=>'📖Shams surasi'],['text'=>'📖Lail surasi'],['text'=>'📖Dhuha surasi']],
				[['text'=>'📖Sharh surasi'],['text'=>'📖Tiyn surasi'],['text'=>'📖falaq surasi']],
				[['text'=>'📖Qadr surasi'],['text'=>'📖Bayyina surasi'],['text'=>'📖Zilzila surasi']],
				[['text'=>'📖Adiyat surasi'],['text'=>'📖Qaria surasi'],['text'=>'📖Takathur surasi']],
				[['text'=>'📖Asr surasi'],['text'=>'📖Hamza surasi'],['text'=>'📖Fil surasi']],
				[['text'=>'📖Quraysh surasi'],['text'=>'📖Moun surasi'],['text'=>'📖Kavsar surasi']],
				[['text'=>'📖Kofirun surasi'],['text'=>'📖Nosr surasi'],['text'=>'📖Masad surasi']],
[['text'=>'📖Ixlos surasi'],['text'=>'📖Falaq surasi'],['text'=>'📖Nos surasi']],
[['text'=>"◀️Ortga qaytish"]],
]
]);

$quron_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📖Qur'on"],['text'=>"🎙30 pora audio formatda"]],
[['text'=>"◀️Ortga"]],
]
]);

$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📊Statistika"],['text'=>"📨Xabar"]],
[['text'=>"✏Kod📝"],],
[['text'=>"◀️Ortga"]]
]
]);

if($tx == "/start"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
	bot('SendPhoto',[
	'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
	'caption'=>"🤗Assalomu Alaykum va 
rahmatullahi barakotuh.
sizni botimizda ko‘rishdan hursandmiz.😊
@musulmon_kundalik_bot
Botdagi ayrim xato kamchiliklar uchun uzur so'raymiz!

Marhamat kerakli  bo‘limni tanlang.
",
]);
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"🤖<i>Bot rivojlanishiga o‘z hissangizni qo‘shing!😊
🕋Buning uchun botimizni boshqa yaqinlaringiz bilan ulashing.☝️
🤔Balki aynan siz  kimnidir gunoh yo‘ldan qaytib, to‘g‘ri yo‘lga kirishiga sababchi bo‘larsiz☝️
@musulmon_kundalik_bot</i>",
	'parse_mode'=>"html",
'reply_markup'=>$main_menu,
]);
}


if($data == "tekshir"){
    if(joinchat($ccid) == "true"){
        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid
        ]); 
        bot('sendMessage',[
        'chat_id'=>$ccid,
        'text'=>"🤗<b>Marhamat o‘zingizga kerakli bo‘limni tanlang.</b>",
        'parse_mode'=>"html",
      'reply_markup'=>$main_menu
        ]);
    }else{
		bot('sendMessage',[
			'chat_id'=>$ccid,
			'text'=>"🤗<b>Marhamat o‘zingizga kerakli bo‘limni tanlang.</b>",
			'parse_mode'=>"html",
		  'reply_markup'=>$main_menu
			]);
			/////////
    }
}


	if($tx == "4️⃣0️⃣Qirq farz✅"){
		bot('sendMessage',[
		'chat_id'=>$cid,
		'text'=>"Islom besh farzni o‘z ichiga oladi:

1. Imon.

2. Namoz.

3. Ro‘za.

4. Zakot.

5. Haj.

Imon yettita farzdan iborat:

1) Allohga;

2) Allohning farishtalariga;

3) Allohning kitoblariga;

4) Allohning payg‘ambarlariga;

5) Oxirat kuniga;

6) Taqdirga, ya’ni yaxshilik ham, yomonlik ham Allohdan ekaniga;

7) O‘limdan keyin qayta tirilmoqqa ishonish.

Tahoratning farzlari to‘rtta:

1. Yuzni sochlardan xoli joylarini iyak ostigacha va ikki quloq orasidagi qismini yuvish.

2. Qo‘llarni tirsaklari bilan birga qo‘shib yuvish.

3. Boshning to‘rtdan biriga mash tortish.

4. Oyoqlarni to‘piqlari bilan birga yuvish.

G‘uslning farzlari

1. Og‘izni yaxshilab chayish.

2. Burunni achishguncha yaxshilab chayish.

3. Badanning hamma joyini qoldirmasdan yuvish.

Tayammumning farzlari

1. Niyat.

2. Pok tuproqni qasd qilish.

3. Ikki qo‘lni pok tuproqqa urib yuzga surish.

4. Qo‘llarni yana tuproqqa urib, tirsak bilan qo‘shib qo‘llarga surish.

Namozning farzlari o‘n ikkitadir.

Oltitasi namoz tashqarisida, oltitasi namoz ichida.

Namoz tashqarisidagilar «shart», ichidagilar «rukn» deyiladi.

Namozning olti sharti

1. Tahorati yo‘qning tahorat olishi, junub bo‘lganning g‘usl qilishi.

2.   Badan, kiyim va namoz o‘qiladigan joy toza bo‘lishi.

3.   Avrat yopiq bo‘lishi.

4.   Qiblaga qarab turish.

5.   O‘z vaqtida o‘qish.

6.   O‘qiydigan namoziga niyat qilish.

Namozning olti rukni

1.   Iftitoh takbiri.

2.   Qiyom.

3.   Qiroat.

4.   Ruku.

5.   Sajda.

6.   Qa’da (so‘nggi o‘tirish).

Quyidagilar ham farzdir:

1. Ilm olish.

2. Amri ma’ruf, nahyi munkar.

3. Halol mehnat qilish.

4. Rizqni halol yo‘l bilan topish.

5. Shariat halol deb belgilagan narsalarni yeyish.",
'parse_mode'=>"html",
'reply_markup'=>$main_menu,
]);
}

if($tx == "🍴Ro'za🍵"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"🤗<i>Siz Ro‘za bo‘limidasiz. 
O‘zingizga kerakli menyuni tanglang..!</i>",
'parse_mode'=>"html",
'reply_markup'=>$roza_menu,
]);
}

	if($tx == "📿6 Diniy kalima📿"){
		bot('sendMessage',[
		'chat_id'=>$cid,
		'text'=>"📚<b>Olti Diniy kalimalar haqida.</b>

https://telegra.ph/Olti-Diniy-Kalima-11-05

<i>@musulmon_kundalik_bot</i>📚",
'parse_mode'=>"html",
'reply_markup'=>$main_menu,
]);
}

	if($tx == "🪦Qabrda bo‘ladigan savol-javoblar🪦"){
	bot('sendMessage',[
		'chat_id'=>$cid,
		'text'=>"1-savol   Robbing kim? 
Javobi.!     Robbim Alloh. 
2-savol   Dining qaysi? 
Javobi.!     Dinim islom.
3-savol   Payg‘ambaring kim? 
Javobi.!     Payg‘ambarimiz Muhammad sollallohu alayhi vasallam.
4-savol   Kitobing qaysi? 
Javobi.!     Kitobim Qur‘oni Karim.
5-savol   Tilaging nima? 
Javobi.!     Tilagim iymon.
6-savol   Qiblang qaysi? 
Javobi.!     Qiblam Ka‘batulloh.
7-savol   Millating qaysi? 
Javobi.!     Ibrohim Halilulloh  millatidanman.
8-savol   Kimning mazhabidansan? 
Javobi.!     Imomi A‘zam Abu Xanifa mazhabi.
9-savol   Do‘stlaring kim? 
Javobi.!     Do‘stlarim choxor yorlar.
10-savol   Ular kimlar? 
Javobi.!     Abu Bakr Siddiq, Hazrati Umar, Hazrati Alidir.
11-savol   Qachondan beri musulmonsan? 
Javobi.!     Al-Misoqdan beri.
12-savol   Al-Misoq nima? 
Javobi.!     Alloh taolo ruhimizni yaratib, ulardan va‘da olgan kun.
13-savol   E‘tiqoding qaysi? 
Javobi.!     Ahli sunna va jamoat e‘tiqodi. 
14-savol   Kimni yaxshi ko‘rasan? 
Javobi.!     Alloh taoloni.
15-savol   Undan keyinchi? 
Javobi.!     Payg‘ambarimiz Muhammad Alayhissalomni.
16-savol   Undan keyinchi? 
Javobi.!     Ota-onamni.
17-savol   Undan keyinchi? 
Javobi.!     Barcha mo‘minlarni.
18-savol   Seni kim yaratgan? 
Javobi.!     Alloh taolo.
19-savol   Nima uchun yaratgan? 
Javobi.!     O‘ziga ibodat qilish uchun.
20-savol   Ibodat degani nima? 
Javobi.!     Ibodat Allohning aytganlarini qilish uchun.
21-savol   Iymon kalimasini aytchi? 
Javobi.!     Laa ilaha illalloh Muhammadur Rosululloh.
22-savol   Ma‘nosi nima? 
Javobi.!     Allohdan o‘zga iloh yo‘q. Muhammad alayhissalom uning elchisidir.",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
}

if($tx == "◀️Ortga"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🖥 <b>Bosh sahifaga qaytdingiz.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$main_menu
    ]);
}

if($tx == "◀️Orqaga"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"🤗<b>Marhamat o‘zingizga kerakli bo‘limni tanlang.</b>",
	'parse_mode'=>"html",	'reply_markup'=>$organ_menu,
	]);
	}

if($tx == "◀️Ortga qaytish"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"🤗<b>Marhamat o‘zingizga kerakli bo‘limni tanlang.</b>",
	'parse_mode'=>"html",	'reply_markup'=>$quron_menu,
	]);
	}

if($tx == "🚿Poklanish🚿"){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"🤗<b>Marhamat o‘zingizga kerakli bo‘limni tanlang.</b>",
'parse_mode'=>'html',
'reply_markup'=>$gusl_menu,
]);
}

if($tx == "🚿G'usl haqida"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🚿<b>G'usl haqida.</b>
https://telegra.ph/Gusl-haqida-11-05-4

<i>@musulmon_kundalik_bot</i>📚",
'parse_mode'=>'html',
'reply_markup'=>$gusl_menu,
]);
}

if($tx == "🧖‍♂️ Tahorat"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🧖‍♂️ <b>Tahorat haqida.</b>

https://telegra.ph/Tahorat-haqida-11-05

<i>@musulmon_kundalik_bot</i> 📚",
'parse_mode'=>'html',
'reply_markup'=>$gusl_menu,
]);
}

if($tx == "🗻Tayammum"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🗻<b>Tayammum haqida.</b>

https://telegra.ph/Tayammum-haqida-11-05

<i>@musulmon_kundalik_bot</i> 📚",
'parse_mode'=>'html',
'reply_markup'=>$gusl_menu,
]);
}


if($tx == "🕋Namoz🕋"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"🤗<b>Marhamat o‘zingizga kerakli bo‘limni tanlang.</b>",
	'parse_mode'=>"html",
	'reply_markup'=>$organ_menu,
	]);
	}
/////////////////////////////////////////////////////////////
if($text == "🌙Namoz haqida"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🤗Marhamat o‘zingizga kerakli bo‘limni tanlang.",
'caption'=>"O‘zingizga Kerakli Bo‘limni Tanlang..!",
'parse_mode'=>'html',
'reply_markup'=>$namozh_menu,
]);
}
if($text == "Namoz Bu.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"NAMOZ
Oldin ibodat nimaligini bilib olaylik. «Ibodat» soʻzi «toat», «itoat qilish» va «Parvardigorni ulugʻlash» ma‘nolarini oʻzida jamlagan. Shariatda bajarilgani uchun savob bеriladigan va niyatga bogʻliq boʻlgan amal «ibodat» dеyiladi. Alloh taolo amr-farmonlari va Uning Paygʻambari koʻrsatmalarini bajarish, Parvardigor roziligini topish va Unga bandalikni ado etish uchun buyurilgan namoz oʻqish, roʻza tutish, zakot bеrish, haj qilish, duo va zikrlar aytish, yaxshilik va ehsonlar qilish kabi toat va amallar ibodatdir.",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Ibodatlarning eng asosiysi, eng ulugʻi, eng ahamiyatlisi namozdir. Namoz arabchada «solat» dеyiladi, lugʻatda «yaxshilikka duo» dеgan ma‘noni anglatadi. Shariatda esa talab qilingan shartlar asosida takbir bilan boshlanib, salom bеrish bilan tugaydigan ibodat «namoz» dеyiladi. 

Namoz Isro kеchasida Paygʻambarimiz sollallohu alayhi vasallam hijratlaridan (Yasrib, ya‘ni Madina shahriga koʻchishlaridan) bir yarim yil oldin farz boʻlgan. Bеsh vaqt (bomdod, pеshin, asr, shom, xufton) namozning farzligi Qur‘on, sunnat, ijmo‘ bilan sobit (joriy) boʻlgan.

Namoz balogʻatga еtgan har bir musulmonga farz (majburiy)dir. Namozning farzligini inkor qilgan kishi kofir boʻladi. Namoz – Islom dinining ikkinchi rukni, kalimai shahodatdan kеyingi eng ulugʻ farz sanaladi. Namozni masjidlarda jamoat bilan oʻqishning alohida fazilati va afzalligi bor. 

U musulmon banda Allohning son-sanoqsiz nе‘matlariga shukr kеltirishi uchun shariatga kiritilgan boʻlib, uning diniy, tarbiyaviy, shaxsiy, sihhiy, ijtimoiy va boshqa qator foydalari koʻp. Avvalo, namoz bandaning Alloh bilan bogʻlanish vositasidir. Namozda banda Alloh bilan yolgʻiz qolib, unga munojot qiladi. Shu ibodat yordamida ruhiy, ma‘naviy lazzat oladi. Namoz oʻqish bilan banda oʻzining barcha ishlarini Alloh taologa topshiradi. Shu namozi ila oʻziga omonlik, xotirjamlik va najot tilaydi. 

Ikkinchidan, namoz yutuq va najot yoʻlidir. Namoz xato va gunohlarni yuvishning eng ishonchli yoʻli boʻlib, u doimo oʻz egasiga koʻplab shaxsiy foydalar kеltiradi. Namoz insonni Allohga yaqin qiladi, uning irodasini mustahkamlaydi, bu dunyo matohlaridan oʻzini yuqori tutishga oʻrgatadi va oʻz egasiga mislsiz nafsoniy rohat va ruhiy farogʻat baxsh etadi.

Namoz oʻqiydigan odam gʻaflat uyqusidan uygʻonib, hayotga tеranroq nazar solishni oʻrganadi. U kishiga intizomli boʻlishni, hamma ishlarni tartibli ravishda yoʻlga qoʻyishni, vaqtni tеjash va tartibga solishni oʻrgatadi. Namozxon odam hilm, xotirjamlik, shoshilmaslik, viqorli boʻlish, sabr kabi koʻplab shaxsiy va yuksak insoniy fazilatlarga ega boʻladi. 

Namoz insonning kundalik hayoti uchun har tomonlama zarur amal ekani ilmiy ravishda ham isbotlanmoqda. Namoz oʻzining son-sanoqsiz foydalari bilan inson hayotini hamma sohalarda tartibga solib turuvchi vosita ekani tobora ayon boʻlmoqda. Hozirgi kunda ilmiy yoʻl bilan hayot kеchirish uslubini izlagan moddiy taraqqiy etgan yurtlar aholisining koʻpchiligi namoz tufayli Islomga kirmoqda. Kishining har taraflama pokligini, sogʻligini ta‘minlovchi, uni Alloh bilan, Paygʻambar sollallohu alayhi vasallam bilan, moʻmin birodarlari bilan doimiy aloqada ushlab turuvchi namozning ahamiyatini endi kim ham inkor qila oladi?",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Islom dinida namozdan muhimroq, undan ulugʻroq va ahamiyatliroq boshqa ibodat yoʻq. Qur‘oni Karimning juda koʻp oʻrinlarida insonlar namoz oʻqishga targʻib qilingan, namoz musulmonlikning asosiy bеlgilaridan, Islomning muhim ruknlaridan ekani zikr etilgan. Qur‘oni Karimning oltmish bеsh oyatida namoz kishi iymonining dalili ekani zikr etilib, moʻminlar namozni toʻkis ado etishga, namozlarini muhofaza qilishga buyurilgan. Qolavеrsa, namoz poklik ramzi. Namozxon odamning eng avvalo, qalbi pok boʻladi. Uning nainki qalbi, badani, kiyim-boshi va makoni ham pok boʻladi. Namoz kishining ruhiy, ma‘naviy va jismoniy sogʻligi uchun nihoyatda zarur narsa ekani hozirda hеch kimga sir emas. 

Namoz moʻminga najot va panohdir, dardiga malhamdir. Sahih hadislarda kеltirilishicha, qachon Rasululloh sollallohu alayhi vasallamning boshlariga biror tashvishli ish tushsa, kеchada kuchli shamol boʻlsa, quyosh yoki oy tutilsa, biror hodisa yuz bеrsa, boshpanalari masjid, ibodatlari namoz boʻlib qolardi. 

Namoz ruh ozuqasi, qalb jarohatining shifosi, nafsning jilovidir. Namoz qiynalganlarga yordam, xavfdagilarga omonlik, zaiflarga quvvat, qurolsizlarga qalqondir. Namoz iymonning alomati, qabrni purnur etuvchi ziyo, oxiratda doʻzaxdan panoh boʻluvchi, bandani yomonlik, gunohlardan qaytaruvchi eng yaxshi davodir. Chunki dunyo hayotida namozdan jiddiyroq, muhimroq bir ish, biror vazifa yoʻqdir. Namoz Allohga bandalik qilishning, Unga ishonishning e‘tirofidir. Allohni sеvishning, Uni ehtirom qilishning ifodasidir. Namoz kibr va nafs choponini otib, qullik libosini kiyish kayfiyatidir. Musulmonni gʻayrimuslimdan ayiradigan eng katta alomatdir. Shuning uchun har qanday holatda ham uning tark etilishiga izn bеrilmagan.",
'parse_mode'=>'html',
]);
}


if($text == "Namozning Farzi.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namozda O‘n Ikkita Farz Amal Bor. Namozdan Tashqarida Oltita Farz Amal Bo‘lib, Ular “Namoz Shartlari”, Namoz Ichidagi Olti Farz Esa “Namoz Ruknlari” Deyiladi.",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Namoz shartlari quyidagilar:

1. Tana pok bo‘lishi (Tahoratsiz bo‘lsa, tahorat olish, junub bo‘lsa, g‘usl qilish).

2. Kiyim pok, avratni berkitadigan bo‘lishi.

3. Namoz o‘qiladigan joy pok bo‘lishi.

4. Namoz vaqti kirishi (Vaqti kirmay turib o‘qilgan namoz farz o‘rniga o‘tmaydi).

5. Namozni qiblaga yuzlanib o‘qish.

6. Namoz o‘qishga niyat qilish.

Namoz ruknlari quyidagilar:

1. Takbiri tahrima (“Allohu akbar” deb namozga kirish).

2. Qiyom (namozda tik turish. Sog‘lom kishi tik turishi farz. Agar bemor bo‘lsa, o‘tirib, bunga ham qodir bo‘lmasa, yonboshlab o‘qish mumkin).

3. Qiroat (namozda Qur’on suralari yoki oyatlarini o‘qish).

4. Ruku’ qilish (ikki qo‘l tirsaklarini bukmasdan tizzalarini ushlagan holda boshni egish. Bunda bel to‘g‘ri qilinishi, bosh bilan bel bir tekisda bo‘lishi kerak).

5. Sajda qilish (peshonani yerga qo‘yish. Bunda ham bel to‘g‘ri bo‘lishi shart).

6. Qa’dai oxir (oxirgi qa’dada tashahhud miqdoricha o‘tirish).

Agar bu amallardan birontasi tark etilsa yoki noto‘g‘ri bajarilsa, namoz buziladi, uni qaytadan o‘qish lozim bo‘ladi.",
'parse_mode'=>'html',
]);
}
if($text == "Namozning Vojiblari.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namozning Vojiblari.",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Farz namozlarining ikki rakatida, vitr, nafl (jumladan, ta’kidlangan sunnat) namozlarining hamma rakatida Fotiha surasini qiroat qilish.

2. Farz namozlarining avvalgi ikki rakatida, vitr, nafl (jumladan, ta’kidlangan sunnat) namozlarining har bir rakatida Fotiha surasidan so‘ng zam sura o‘qish. Zam sura kamida qisqa uch oyat yoki uzun bir oyatdan iborat bo‘ladi.

3. Zam surani Fotihadan keyin o‘qish.

4. Imom namozga o‘tganda ovoz chiqarib o‘qiladigan namozlarni (bomdod, shom, xuftonni) jahriy, ovoz chiqarmay o‘qiladigan namozlarni (peshinni, asrni) maxfiy o‘qishi.

5. Qiyom, ruku’, sajda kabi ruknlarni o‘z o‘rnida, tartib bilan bajarish.

6. Ruku’da, sajdada, qolgan barcha arkonlarda a’zolar taskin topishi, mazkur ruknlarni xotirjamlik bilan bajarish.

7. Sajdada burun bilan peshonaning baravar yerga tegib turishi.

8. Uch, to‘rt rakatli namozlarning ikkinchi rakatida hamda namoz oxiridagi o‘tirishda “Attahiyot” o‘qish.

9. Avvalgi qa’dada tashahhudni o‘qib bo‘lgach, kechiktirmay uchinchi rakatga turish.

10. Namozdagi vojib amallardan birontasi esdan chiqib tark etilsa, sajdai sahv qilish.

11. Namoz oxirida “Assalaamu alaykum va rohmatulloh” deb salom lafzi bilan chiqish. Salom yelkaga to‘la yuzlangandan keyin beriladi.

12. Vitr namozining oxirgi rakatida “Qunut” duosini o‘qish.

13. Ramazon va Qurbon hayiti namozlarining har rakatida uchtadan qo‘shimcha takbir aytish.

Mazkur vojib amallardan birontasini esdan chiqarib tark etgan kishi namoz oxirida sajdai sahv qilishi vojib. Sajdai sahv qilish tartibi bunday: imom oxirgi qa’dada tashahhudni o‘qigandan so‘ng o‘ng tomoniga salom beradi1. Keyin ikki marta sajda qilib, yana tashahhudni, salavotni o‘qiydi. Shundan so‘ng ikki tomonga salom berib namozdan chiqadi.

1 Agar kishi yolg‘iz o‘zi namoz o‘qiyotgan bo‘lsa, tashahhuddan keyin ikki tarafiga salom beradi. Keyin ikki marta sajda qilib, tashahhudni, salavotni o‘qiydi, o‘ng va so‘l tarafga salom berib namozdan chiqadi. Jamoat namozida imom sahv sajdasi qilish uchun faqat o‘ng tomonga salom beradi.",
'parse_mode'=>'html',
]);
}
if($text == "Namozning Sunnatlar.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Quyidagilar Namozning Sunnatlaridir:",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Takbiri tahrimada qo‘l barmoqlarini o‘z holida ochiq tutib quloqqa tekkazish (Ayollar takbiri tahrima aytishda qo‘llarini yelka baravarida ko‘taradilar).

2. Iqtido qiluvchi takbiri imom takbiri bilan oldinma-ketin bo‘lishi.

3. Erkaklarning o‘ng kaftlarini chap kaftlari ustiga qo‘yib, ikkisini kindik ostida tutib turishlari (Ayollar o‘ng kaftlarini chap kaftlari ustiga qo‘yib, ko‘kraklari ustida ushlab turadilar).

4. “Allohu akbar” deb takbir aytgandan keyin sanoni maxfiy (ichida) o‘qish.

5. Sanodan keyin “Auvzu”, har rakatda Fotihadan oldin “Bismillaah” aytish (Taavvuz ham, basmala ham maxfiy – ovoz chiqarmay, pichirlab aytiladi).

6. Faqat birinchi rakatda Fotihadan oldin “auvzu”ni aytish.

7. Fotiha surasini o‘qib bo‘lgach, ichida “Omin” deyish (Buni imom ham, muqtadiy ham, yolg‘iz namoz o‘quvchi ham aytadi).

8. Imomning ruku’dan keyin “Samiallohu liman hamidah”, iqtido qilganlarning esa “Robbanaa lakal hamd”, deyishi (Namozni bir o‘zi o‘qigan kishi ikkalasini ham aytadi).

9. Bir rukndan boshqa ruknga o‘tayotganda “Allohu akbar”, deb takbir aytish.

10. Imom takbirlarni ovoz chiqarib aytishi. Iqtido qiluvchilar eshitishi uchun takbirlarni jahriy aytiladi.

11. Qiyomda ikki oyoq orasini to‘rt barmoq kengligida ochib turish.

12. Ruku’da qo‘l barmoqlarini ochib, ikki tizza ko‘zini mahkam ushlash, boshni orqa bilan bir tekis qilish, belini to‘g‘ri tutish, kamida uch marta “Subhaana robbiyal aziym”, deyish.

13. Ruku’dan bosh ko‘targach, a’zolar halovat topguncha biroz turish.

14. Qiyomdan sajdaga borishda avval tizzani, keyin kaftni, keyin burunni, oxirida peshonani qo‘yish. Sajdadan qiyomga turishda buning teskarisi qilinadi: avval peshona, keyin burun, keyin kaftlar, oxirida tizza yerdan ko‘tariladi.

15. Sajdada peshonani qo‘llar orasiga olish, barmoqlarni jipslab, bosh barmoqni qulog‘i to‘g‘risida ushlash, kamida uch marta “Subhaana robbiyal a’laa” deyish.

16. Sajdada erkaklar oyoqlari, tizzalari, qo‘llari, peshonasi, burni yerga tegib turishi, bilaklarini yerga ham, qorniga ham tekkazmay tutishi (Ayollar sajdada qorinlarini sonlariga, qo‘llarini yerga tekkazib turishadi).

17. Ikki sajda orasida o‘tirish. Bunda ikki kaft xuddi tashahhuddagidek tizzalar ustiga qo‘yiladi.

18. Erkaklarning chap oyoq ustiga o‘tirishi, o‘ng oyog‘ini tik qilib, barmoq uchlarini qiblaga qaratishi (Ayollar esa ikki oyog‘ini o‘ng tomonga chiqarib, chap dumbasiga o‘tiradi).

19. Tashahhuddan so‘ng salavot aytish, keyin Qur’onda, hadislarda kelgan duolarni o‘qish.

20. Namozdan chiqayotganda avval o‘ng, keyin chap tomonga salom berish.

21. Imomning har ikki tomonga salom berayotganida jamoatni, himoya qiluvchi farishtalarni, solih jinlarni niyat qilishi.

22. Iqtido qilgan kishining, imom o‘ng tomonda bo‘lsa, o‘ngga bergan, chapda bo‘lsa, chapga bergan, oldida bo‘lsa, har ikki tomonga bergan salomida imomni, jamoatdagi birodarlarini, himoya qiluvchi farishtalarni, solih jinlarni niyat qilishi.

23. Yolg‘iz namoz o‘qigan kishi salom berayotganda faqat farishtalarni niyat qilishi.

24. Jamoat salomini imom salomiga ergashtirishi.

25. To‘rt yoki uch rakatli farz namozlarining uchinchi, to‘rtinchi rakatlarida Fotiha surasini qiroat qilish. Lekin nafl (jumladan, ta’kidlangan sunnat) namozlarining uchinchi, to‘rtinchi rakatlarida Fotiha surasi bilan zam sura o‘qish vojibdir.

26. Farz namozlarini jamoat bo‘lib o‘qish.

Mazkur sunnat amallarni tark etish bilan namoz buzilmaydi, lekin go‘zal suratda ado etilmagan bo‘ladi. Demak, namozni xushu’ bilan o‘qishda, ulug‘ ajr-savoblar olishda namozdagi sunnat amallar o‘rni katta.",
'parse_mode'=>'html',
]);
}
if($text == "Namozning Mustahablari.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Quyidagilar Namozning Mustahablaridir:",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Erkaklarning takbiri tahrima aytishda qo‘llarini ko‘ylak yengidan chiqarishlari.

2. Namoz o‘qiyotganda esnoq yoki yo‘tal kelsa, kuchi yetganicha qaytarish, iloji boricha yo‘talmaslikka harakat qilish.

3. Beixtiyor esnoq kelganida o‘ng qo‘l orqasi bilan og‘izni berkitish, Payg‘ambarimiz sollallohu alayhi va sallam biron marta esnamaganlarini yodga olish.

4. Muqim kishining bomdod namozida Fotiha surasidan so‘ng uzunroq, shom namozida qisqaroq, boshqa namozlarda o‘rtacha suralarni o‘qishi.

5. Sajdada barmoq oralarini zichlash, boshni ikki qo‘l orasiga, bosh barmoqni quloq to‘g‘risiga qo‘yish, qo‘l barmoqlari uchini, oyoq panjalarini qiblaga qaratish.

6. Namozni yolg‘iz o‘qiganda ruku’larda, sajdalarda tasbehni 3 martadan ko‘p (5, 7, 9 yoki 11 marta) aytish.

7. Qiyomda sajda o‘rniga, ruku’da oyoq barmoqlariga, sajdada burunga, qa’dada ko‘krakka, salom berayotganda yelkaga qarash.

8. Namozda tavoze’ bilan, o‘zini xokisor tutib turish.

Yuqorida sanalgan amallar namoz odoblari ham deyiladi. Ularga amal qilinsa, namoz yanada mukammal bo‘ladi.",
'parse_mode'=>'html',
]);
}
if($text == "Namozni buzuvchi amallar.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Quyidagilar Namozni Buzuvchi Amallardir:",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Namozda gapirish (qasddan yoki adashib bo‘lsa ham).
2. Kishiga salom berish.
3. Salomga alik olish.
4. Uzrsiz tomoq qirish, yo‘talish.
5. ‘Uh‘, ‘uf‘, ‘ohkabi tovushlar chiqarish.
6. Og‘riq yoki musibatga ovoz chiqarib yig‘lash (ammo oxiratni o‘ylab yig‘lasa joiz).
7. O‘zi eshitadigan darajada kulish (qahqaha bilan qattiq kulsa, tahorati ham ketadi).

8. Aksa urganga javob qaytarish (ya’ni ‘Yarhamukalloh‘, deyish).
9. Savolga yoki xabarga oyatlar bilan bo‘lsa-da, javob berish.
10. Biror narsani yeb-ichish (labidagi, tishidagi ovqatni ham).
11. Namozni jamoat bilan o‘qiyotganda yonidagi odamga joy berish uchun surilish.
12. Qiroatni Mushafga qarab qilish.
13. ‘Amali kasir‘ qilish (ya’ni ko‘rgan odam ‘Namoz o‘qimayapti‘ deb o‘ylaydigan darajadagi amallarni qilish).
14. Najosat ustiga sajda qilish.
15. Ko‘krakni qibladan boshqa tarafga burish.

16. Sajdadagi holida ikki oyoq panjalarini yerdan ko‘tarish.
17. Qiroatni ma’no o‘zgaradigan darajada buzish.
18. Namoz farzlaridan birortasini uzrsiz qoldirish.
19. Namozning to‘la bir ruknida avratning ochiq bo‘lishi.
20. Tahoratning (tayammum, mashning ham) ketishi.
21. Bomdod namozida quyosh chiqib qolishi.
22. Namoz asnosida hushidan ketishi.",
'parse_mode'=>'html',
]);
}
if($text == "Namozning Makruhlari.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz O‘qiyotganda Quyidagi Ishlarni Qilish Man Etiladi:

1. Yuzni o‘ng yoki chap tarafga qaratish.

2. Osmonga qarash.

3. Farz namozlarida biron narsaga uzrsiz suyanish.

4. Ruku’da, sajdada oyoq yoki qo‘l barmoqlarini yerdan ko‘tarish.

5. Qa’dada ikki oyoqni tik qilib tovon ustida o‘tirish.

6. Badani yoki kiyimini ko‘p o‘ynash.

7. Salomni faqat bir tarafga berish.

8. Namoz vojiblaridan birini qasdan tark etish. Masalan, farz namozlarining birinchi, ikkinchi rakatida Fotihani qiroat qilmaslik, qa’dada tashahhudni o‘qimaslik va hokazo.",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"NAMOZDAGI MAKRUH AMALLAR

 
1. Namoz sunnatlaridan birini atayin tark etish. Masalan, takbiri tahrimadan keyin sanoni o‘qimaslik, ruku’da, sajdada tasbeh aytmaslik va hokazo.

2. Mushaf tartibiga teskari qiroat qilish. Masalan, birinchi rakatda Ixlos, ikkinchi rakatda Masad surasini o‘qish.

3. Qisqa suralar o‘qiganda orada bir surani tashlab ketish. Misol uchun, birinchi rakatda Quraysh, ikkinchisida Kavsar surasini o‘qish.

4. Farz namozlarining bir rakatida bir surani ikki marta o‘qish.

5. Doim bir surani o‘qish, boshqalarini tark etish (Lekin, “Payg‘ambarimiz sollallohu alayhi va sallam namozda ko‘proq shu suralarni qiroat qilganlar”, degan niyati bo‘lsa, makruh emas).

6. Namozni xushu’siz, beparvo o‘qib qo‘yish.

7. Namoz o‘qiyotgan odamning sajda qilishga xalaqit bermaydigan mayda toshlarni surib tashlashi (Hadisda aytilganidek, bir marta sursa bo‘ladi).

8. Agar sajda o‘rni tuproq bo‘lsa, namozdan chiqqach peshonani tozalab artish.

9. Erkaklar sajda qilayotganda ikki bilagini yerga, qornini tizzasiga tekkazishi.

10. Erkaklar namoz vaqtida sochni turmaklab olishi.

11. Qiyomda qo‘lni belga qo‘yish.

12. Namoz o‘quvchi kiyimini osiltirib yoki yelkasiga tashlab yoxud yig‘ishtirib, yengini shimarib olishi.

13. Amali kasir qilmagan holda kiyimni uzrsiz to‘g‘rilash (Jumladan, sajdaga borayotganda qo‘li bilan shimini ko‘tarish), barmoqlarini bir-birining ichiga kirgizish, tanasining ayrim joylarini behuda o‘ynash. Chunki bu narsa xushu’ga xalal beradi.

14. Dangasalik yoki kibr tufayli bosh kiyimsiz namoz o‘qish (Ammo, Alloh huzurida o‘zini xor tutish niyatida boshyalang o‘qish makruh emas).

15. Qorin juda och paytda namoz o‘qish. Bunda avval ozroq taom yeb, nafs qondiriladi. Keyin xotirjam holda namoz o‘qiladi.

16. Fikrni chalg‘ituvchi narsalar qarshisida namoz o‘qish.

17. Hojatxonaga borish zarurati tug‘ilganda yoki yel chiqishi tang qilib turganda o‘zini majburlab ushlab turish.

18. Ko‘zini behuda yumib olish. Agar xushu’ hosil qilish uchun yumsa, hechqisi yo‘q.

19. Janoza namozida takbir aytilganida boshini ko‘tarish.

20. Imomning jamoatdan farqli darajada balandda turishi.

21. Namoz o‘quvchining – safda bo‘sh joy bo‘la turib – keyingi safda turishi.

22. Namozxon oldida, yon tarafida, kiyimida, sajdagohida jonli narsalar surati bo‘lishi (Agar surat orqada bo‘lsa, juda kichik yoki boshi o‘chirilgan bo‘lsa yoki jonsiz narsalar surati bo‘lsa, zarari yo‘q).

23. Olovga qarab namoz o‘qish. Chunki bunda namozxon majusiyga o‘xshab qoladi (Biroq, mehrobda chiroq turishining zarari yo‘q)

24. Namozxon oldidan birov o‘tishi ehtimoli bor joyda sutra qo‘ymasdan namoz o‘qish.

25. Kir, eski ish kiyimida namoz o‘qish.

26. Namozda oyatlarni, tasbehlarni barmoq bilan sanash.

Mazkur amallar bilan namoz buzilmaydi, lekin qusurli bo‘lib qoladi. Shuning uchun namozxon bunday ishlardan saqlangani ma’qul.",
'parse_mode'=>'html',
]);
}
if($text == "Namozning mubohlari"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Quyidagilar Namozning Mubohlaridir:",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Sajda qiladigan joyni zarurat uchun qo‘l bilan bir ikki marta surish

2. Ilon va chayonga o‘xshash chaqadigan hayvonlarni o‘ldirish

3. Nafl namozlarda bir rakatda bir surani takror o‘qish

4. Imom yanglishganda muqtadiylar takbir yoki tasbeh orqali imomni ogohlantirish

5. Ruku‘da badaniga yopishmasligi uchun kiyimlarini silkitish

6. Namozda ixtiyorsiz tahorati buzilgan kishi hech so‘zlamasdan tahorat qilib, kelgan joyidan boshlab, qolgan namozini o‘qish.",
'parse_mode'=>'html',
]);
}
if($text == "Erkak va ayollar namozining farqlar"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Erkak Va Ayol Kishi Namozi O‘rtasidagi Farqlar Quyidagilardir:",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Ayol takbiri tahrimada qo‘llarini yengidan chiqarmaydi.

2. Takbirda qo‘llarini ko‘kragi barobarigacha ko‘taradi.

3. Ayol qiyomda o‘ng qo‘l kaftini chap qo‘l kafti ustida qilib ko‘kragiga qo‘yadi.

4. Ruku‘da panjalarini ochmay, jamlab tizzaga qo‘yadi.

5. Ruku‘da o‘tirmoqchi bo‘lgan kishi kabi sal egiladi.

6. Ruku‘da tirsak (chig‘anoq)larini sonlariga, bilaklarini yonboshiga yopishtirib turadi.

7. Sajdada qornini soniga, qo‘l bilaklarini yerga yopishtirib turadi.

8. Qa‘dada dumbasi bilan o‘ng tomonidan ikki oyog‘ini chiqarib, chap iligi ustiga o‘ng iligini qo‘yib o‘tiradi.

9. Jahriy namozlarni ham maxfiy (ichida) o‘qiydi.",
'parse_mode'=>'html',
]);
}
if($text == "Namozni buzish joiz bo‘lgan o‘rinlar"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Quyidagi Holatlarda Namozni Buzish Joiz Hisoblanadi:",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1.  Halokatning oldini olish uchun, garchi farz namozi bo‘lsa-da, buzishlik vojib bo‘ladi. 

Misol uchun bir kishi suvga cho‘kayotganligini bilsa yoki bir hayvon hujum qilsa, xoh u 
o‘ziga, xoh boshqa kishiga, xoh namoz o‘qiyotgan odamga, xoh tashqaridagiga bo‘lsin, 

shu halokatning oldini olish uchun namozini buzadi. 

2.   Bir dirham miqdoridagi molini o‘g‘ridan himoya qilish uchun, garchi farz namozini 

bo‘lsa ham, buzishlik joizdir. Bir dirham Suriyaning pulida o‘ttiz besh qirsh miqdoricha 

keladi. (Bizning O’zbek so‘mimizda 3250 so‘mga to‘g‘ri keladi. 2005-yil...- tarj.) 

3.   Ota yoki ona farzandini namoz o‘qiyotganini sezmay turib chaqirsa, farzand agar 

nafl namoz o‘qiyotgan bo‘lsa, faqat shu nafl namozni buzishlik joizdir. Ammo ota yoki 

ona farzandni namoz o‘qiyotganini bilib turib chaqirsa, farzand namozini buzishi joiz emas.",
'parse_mode'=>'html',
]);
}

if($tx == "🕋Namoz o'qish"){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"🤗<b>Marhamat o‘zingizga kerakli bo‘limni tanlang.</b>",
'parse_mode'=>'html',
'reply_markup'=>$namoz_menu,
]);
}
	
if($tx == "🌅Bomdod"){
		bot('sendVideo',[
		'chat_id'=>$cid,	
		'video'=>"https://t.me/namozxon_uz_bot/5",
'caption'=>"Bomdod namozi o‘qilish tartibi.(Erkaklar uchun).
@musulmon_kundalik_bot",
]);
bot('SendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozxon_uz_bot/6",
'caption'=>"Bomdod namozi o‘qilish tartibi.(Ayollar uchun).
@musulmon_kundalik_bot",
'parse_mode'=>'html',
'reply_markup'=>$namoz_menu,		
]);
}
 
if($tx == "🌁Peshin"){
	bot('SendVideo',[
	'chat_id'=>$cid,	
	'video'=>"https://t.me/namozxon_uz_bot/9",
'caption'=>"Peshin namozi o‘qilish tartibi.(Erkaklar uchun).
@musulmon_kundalik_bot",
]);
bot('SendVideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozxon_uz_bot/10",
'caption'=>"Peshin namozi o‘qilish tartibi.(Ayollar uchun).
@musulmon_kundalik_bot",
	'parse_mode'=>"html",
	'reply_markup'=>$namoz_menu,
]);
}

if($tx == "🌇Asr"){
	bot('sendvideo',[
	'chat_id'=>$cid,
'video'=>"https://t.me/namozxon_uz_bot/7",
'caption'=>"Asr namozi o‘qilish tartibi.(Erkaklar uchun).
@musulmon_kundalik_bot",
]);
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozxon_uz_bot/8",
'caption'=>"Asr namozi o‘qilish tartibi.(Ayollar uchun).
@musulmon_kundalik_bot",
	'parse_mode'=>"html",
'reply_markup'=>$namoz_menu,
	]);
	}
	
	if($tx == "🌆Shom"){
	bot('sendvideo',[
	'chat_id'=>$cid,
'video'=>"https://t.me/namozxon_uz_bot/13",
'caption'=>"Shom namozi o‘qilish tartibi.(Erkaklar uchun).
@musulmon_kundalik_bot",
]);
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozxon_uz_bot/14",
'caption'=>"Shom namozi o‘qilish tartibi.(Ayollar uchun).
@musulmon_kundalik_bot",
	'parse_mode'=>"html",
	'reply_markup'=>$namoz_menu,
	]);
	}
	
		if($tx == "🌃Xufton"){
	bot('sendvideo',[
	'chat_id'=>$cid,
'video'=>"https://t.me/namozxon_uz_bot/15",
'caption'=>"Xufton namozi o‘qilish tartibi.(Erkaklar uchun).
@musulmon_kundalik_bot",
]);
bot('sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/namozxon_uz_bot/16",
'caption'=>"Xufton namozi o‘qilish tartibi.(Ayollar uchun).
@musulmon_kundalik_bot",
	'parse_mode'=>"html",
'reply_markup'=>$namoz_menu,
	]);
	}
	
	if($tx == "🌙Janoza namozi"){
		bot('sendvideo',[
		'chat_id'=>$cid,	'video'=>"https://t.me/namozxon_uz_bot/22",
'caption'=>"Janoza namozining o‘qilish tartibi.",
	'parse_mode'=>"html",	'reply_markup'=>$namoz_menu,
]);
}

if($tx == "🌙Namozdan keyingi zikrlar"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"NAMOZDAN KEYINGI ZIKRLAR

Namoz salom bilan tugaydi. Salomdan keyingi amallar (tasbehotu duolar) majburiy emas, ammo nihoyatda savoblidir.
Farz namozlaridan keyin quyidagi duoni o‘qish sunnatdir:
Allohumma antas-salam va minkas-salam. Tabarokta ya zaljalali val ikrom.
Mazmuni:
Ey Allohim, Sen barcha ayb-nuqsonlardan poksan. Barcha salomatlik va rahmat Sendandir. Ey azamat va qudrat egasi bo‘lgan Allohim, Sening shoning ulug‘dir.
Umuman, har vaqt namozni tugatgandan so‘ng Oyatal kursi o‘qilsa, tasbehot qilinsa, savobi ulug‘ bo‘ladi.
@musulmon_kundalik_bot",
'parse_mode'=>"html",
'reply_markup'=>$namoz_menu,
]);
}

if($tx == "🌙Musofirning namozi"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"Musofir namozi
Bizning dinimiz qulaylik, insonlarga marhamat dinidir. Chunonchi, u musofirlarga ham ancha yengilliklarni muhayyo qilib qo‘ygan. Yashab turgan joyidan o‘rtacha yurishda kamida 18 soatlik (90 chaqirim) masofaga o‘n besh kundan oz muddatni niyat qilib yo‘lga chiqqan kishi qishlog‘i yoki shahrining oxirgi uylari ko‘rinmay qolgan daqiqadan boshlab musofir hisoblanadi. O‘n besh kunga yo bundan ko‘pga niyat qilib chiqilsa, yo‘ldagina musofir sanaladi, borayotgan manzilining dastlabki uylari ko‘ringandan boshlab esa, muqim hukmiga o‘tadi va namozlarini to‘liq o‘qiydi.

Musofir odam to‘rt rakatlik farz namozlarini ikki rakatga qisqartirib (bomdod namozining farzi kabi) o‘qiydi. Biroq shom namozining uch rakat farzi va uch rakatlik vitr namozlarini to‘liq ado etadi. Agar musofir kishi muqim kishiga ergashib namoz o‘qisa, to‘rt rakatlik farzlarni ham to‘liq o‘qiydi. Muqim kishi musofir kishiga iqtido qilib namoz o‘qiyotgan bo‘lsa, unda imom ikki rakatdan so‘ng salom bergach, ergashuvchi salom bermaydi, ichida «Allohu akbar» deb qiyomga turadi-da, qolgan ikki rakatni mustaqil o‘zi o‘qib tugatadi.
@musulmon_kundalik_bot",
'parse_mode'=>"html",
'reply_markup'=>$namoz_menu
]);
}

if($tx == "🌙Ikki xayit namozi"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"Hayit namozlari ikki rakat vojib namoz bo‘lib, quyidagicha o‘qiladi: jamoat namoz o‘qishga hozir bo‘lib, saf tortganidan so‘ng hayit namozi o‘qishga niyat qilib, takbiri tahrima aytiladi (hayit namozlari uchun iqomat aytilmaydi). Va qo‘llar bog‘lanib, kindik ostida tutiladi. Hayit namozlariga bunday niyat qilinadi: «Shu vaqtda vojib bo‘lgan ro‘za (qurbon) hayiti namozini barcha takbirlari bilan shu imomga iqtido qilib, yuzimni Ka‘baning bir tarafiga qaratib, xolis Alloh uchun o‘qishni niyat qildim». Niyatdan so‘ng sano o‘qiladi. So‘ng imom eshittirib (qavm ichlarida) uch bor takbir («Allohu akbar») aytadi. Har takbirda qo‘llar quloqlar to‘g‘risigacha ko‘tariladi. Takbirlar orasida qo‘llar bog‘lanmaydi, yonda tutiladi. Bu holda uch bor takbir aytilgach, qo‘llar bog‘lanadi. So‘ng imom eshittirib qiroat qiladi, qavm jim eshitadi. Qiroatdan so‘ng ruku‘ va sajda qilinib, ikkinchi rakatga turiladi. Ikkinchi rakatda imom qiroatni tugatganidan so‘ng, rukudan oldin birinchi rakatda aytilgan tarzda uch bor takbir aytiladi. Va yana bir to‘rtinchi takbir aytilib, ruku‘ga boriladi va sajda qilinadi. Sajdadan so‘ng o‘tirib tashahhud, salovot va duo o‘qib salom beriladi.

Salomdan so‘ng imom minbarga chiqib, ikki xutba o‘qiydi. Imom birinchi xutbani ketma-ket to‘qqiz takbir, ikkinchi xutbani yetti takbir aytib boshlashi va ikkinchi xutbani o‘n to‘rt takbir aytib tugatishi mustahabdir.

Ikki hayit namoziga g‘usl qilib, eng yaxshi kiyimlarini kiyib, xushbo‘y bo‘lib borish sunnatdir. Ro‘za hayiti namozini ado qilishga borishdan oldin biror narsa yeb olish sunnat bo‘ladi. Qurbon hayiti namozini o‘qib bo‘lguncha esa hech narsa yemaslik sunnatdir. Qurbon hayiti namozini o‘qishga borishda yo‘lda ovoz chiqarib takbiri tashriq aytiladi.
@musulmon_kundalik_bot",
'parse_mode'=>"html",
'reply_markup'=>$namoz_menu,
]);
}

if($tx == "🌙Qazo namozlar"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"QAZO NAMOZLARI

Mo‘min-musulmonlar namozlarini doimo vaqtida o‘qishga harakat qilishlari lozim. Lekin biror sabab bilan o‘qilmay qolsa, u namozning qazosi o‘qilishi kerak. Farz namozlar va vitr namozi qoldirilsa, qazo qilib o‘qiladi.
Qazo namozi va umuman har qanday namoz o‘qish makruh hisoblangan uch vaqt borki, bular kun chiqish, kun botish va kun tikkaga kelgan (qiyom) paytlaridir.
Namozni o‘tkazib yuborish katta gunohdir. Binobarin, qazo namozi o‘qilgach, Alloh taolodan mag‘firat tilash va har namozni o‘z vaqtida, qazo qilmay o‘qishni nasib etishini so‘rab duo qilish kerak.


SAJDAI SAHV

Namozning farz yo vojiblaridan biri vaqtidan kechiktirib bajarilsa yoki vojib amali unutilib, bajarilmasa, qa‘dai oxirada (oxirgi o‘tirishda) faqat «Attahiy- yat» o‘qilib, o‘ng tomonga salom beradi va «Allohu akbar», deb ikki marta sajda qiladi va yana o‘tirgan holda «Attahiyyat», «Salovot», «Robbana» duolarini o‘qib, o‘ng va chap tomonga salom berib namozni tugallaydi. Bu ikki sajda «sajdai sahv» (xatoni o‘nglaydigan sajda) deyiladi.
@musulmon_kundalik_bot",
'parse_mode'=>"html",
'reply_markup'=>$namoz_menu,
]);
}

if($tx == "🌙Juma namozi"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"Tartibi 

Juma namozi ikki rakat farz boʻlib, undan oldin va keyin toʻrt rakat sunnat oʻqiladi. Ilk va oxirgi sunnatlar peshin namozining sunnatlari kabi oʻqiladi. Imomga iqtido qilib oʻqiladigan ikki rakat farz esa, bomdod namozining farzi kabi oʻqiladi. Juma namozida ikki rakat farz oʻqilmasdan oldin imom minbarda xutba qiladi. Juma namozi hur, ozod, muqim, salomatligi joyida, oyoqlari sogʻ kishiga farzdir.

Shartlari

peshin namozi oʻqiladigan vaqtda oʻqish;
namozdan oldin xutba oʻqish;
juma oʻqiladigan joy hammaga ochiq boʻlishi;
imomdan tashqari kamida uch kishidan iborat jamoat boʻlishi;
imom juma namozini oʻqishi uchun rasman ruxsatli boʻlishi;
juma oʻqiladigan joy shahar yoxud shahar hukmida boʻlishi kerak. 
@musulmon_kundalik_bot",
'parse_mode'=>"html",
'reply_markup'=>$namoz_menu,
]);
}

if($tx == "⏰Namoz vaqtlari"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🤗<b>Marhamat o‘zingizga kerakli bo‘limni tanlang.</b>",
'parse_mode'=>'html',
'reply_markup'=>$vaqt_menu,
]);
}

if($text == "🏙 Farg'ona"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Farg%60ona.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Farg'ona 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Xiva"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Xiva.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Xiva 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Andijon"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Andijon.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Andijon 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Namangan"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Jambul.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Namangan 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Buxoro"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Buxoro.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Buxoro 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Guliston"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Guliston.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Guliston 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Jizzax"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Jizzax.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Jizzax 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Zarafshon"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Nurota.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Zarafshon 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Qarshi"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Qarshi.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Qarshi 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Navoiy"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Navoiy.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Navoiy 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Nukus"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Nukus.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Nukus 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Samarqand"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Samarqand.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Samarqand 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Termiz"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Denov.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Termiz 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Urganch"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Jonboy.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Urganch 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Toshkent"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Toshkent 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

Eslatma...!
Quyosh tikkaga kelishi(qiyom) va zavolga og‘ishi vaqtida(taxminan, 7-8 daqiqa) namoz o‘qish makruxdir.
@musulmon_kundalik_bot",
'parse_mode'=>'html',
]);
}

		
	if($tx == "🍵Ro'za haqida"){
		bot('sendMessage',[
		'chat_id'=>$cid,
		'text'=>"Ro‘za tutish qoidalarini bilasizmi?


Muqaddas Ramazon oyi ham kirib kelgach. Bu oy o‘zi bilan tinchlik-omonlik, qut-baraka, fayz va go‘zallik olib keladi. Ramazon ro‘zasini tutishning ham bir qancha qoidalari borki, uni ado etish barobarida savob va yaxshilik olinsa, ikkinchidan Muqaddas oyning hurmati ham joyiga qo‘yiladi.


Saharlik

Ro‘za lug‘atda – “siyom” deb atalib, o‘zini bir narsadan tiyishni bildiradi. Shariat istilohida esa: “Tong otgandan to quyosh botgunicha niyat bilan ro‘zani buzuvchi narsalardan o‘zini tiyishdir”. Ya'ni, kishi saharlik vaqtidan to shom vaqtiga qadar yemay, ichmay, jufti haloli bilan jinsiy aloqa qilmay turadi.



Subhi sodiq kirishi bilan saharlik vaqti tugab, ro‘za vaqti boshlanadi. Ikkisining o‘rtasini ajratib turadigan uchinchi bir vaqt yo‘q. Saharlik o‘z vaqtida bo‘lgani afzal. Lekin subhi sodiq kirgan-kirmagani borasida ikkilanadigan darajada kechiktirish makruh. Ro‘za tutish niyatsiz bo‘lmaydi, albatta, niyat qilinib, saharlik duosi o‘qilishi lozim.

Og‘iz yopish duosi quyidagicha: “Navaytu an asuma sovma shahri ramazona minal fajri ilal mag‘ribi, xolisan lillahi ta'ala. Allohu akbar”.

 

Iftorlik va taroveh

Iftorlik ham, albatta, niyat va duo ila qilinadi. Iftorlik (og‘iz ochish) duosi: “Allohumma laka sumtu va bika amantu va a'layka tavakkaltu va a'la rizqika aftartu, fag‘firli ya g‘offaruma qoddamtu va ma axxortu birohmatika ya arhamar rohimiyn, Allohu akbar”.



Ana shu duo ila ro‘zador og‘zini ochadi, halol taomlar bilan taomlanadi. Ovqatlanishda shoshma-shosharlikka yo‘l qo‘yilmaydi. Chunki bu holat mo‘min odobiga to‘g‘ri kelmasligi bilan birga salomatlikka ham zararlidir. Shundan so‘ng taroveh namoziga chiqiladi.

Ro‘zadorning odoblari

Kim ro‘za tutib, Allohning ibodatini amalga oshirsa, u o‘zini boshqalarga o‘rnak bo‘lishi uchun ham odobli, bosiq va xushmuomala tutishi lozim. Ro‘zadorning tilidan har xil keraksiz gaplar chiqmasligi, ro‘za tutgan kishi g‘iybat, chaqimchilik kabi ishlardan uzoq bo‘lishi, haqoratli gap-so‘zlarni, umuman, gapirmasligi lozim. O‘zga ro‘zadorlarni ham hurmat qilishi, ularga shirin so‘zlashi, mushkullarini oson qilib berishi kerak.



Rasululloh sollallohu alayhi va sallam dedilar: «Ro‘za va Qur'on qiyomat kunida banda uchun shafoat so‘raydilar. Ro‘za: «Robbim, men uni taom va maylliklardan to‘sdim, mening u haqidagi shafoatimni qabul qil!», deydi. Qur'on: «Men uni tunlari uyqudan to‘sdim, mening u haqidagi shafoatimni qabul qil!», deydi. Shundan so‘ng ularning shafoatlari qabul qilinadi» (Imom Ahmad rivoyati).

 

Ramazon oyida ro‘za tutmaslik oqibati

Abdulloh ibn Mas'ud roziyallohu anhu dedi: «Rasululloh sollallohu alayhi va sallam dedilar: «Islomning asosi va dinning poydevori uchta bo‘lib, ular ustiga Islom tiklangan. (Ular): «Allohdan o‘zga iloh yo‘q» deb guvohlik berish, farz qilingan namozlar va Ramazon oyining ro‘zasi» (Abu Ya'lo, Daylamiy va imom Zaxabiy rivoyatlari).

Abu Hurayra raziyallohu anhu dedi: «Rasululloh sollallohu alayhi va sallam dedilar: «Ramazonning bir kunida Alloh izn bermagan ruxsatsiz (qasddan) ro‘za tutmagan odam hayoti davomida ro‘za tutsa-da, qazo o‘rniga o‘tmas» (Imom Abu Dovud, Imom ibn Mojja, imom Termiziy rivoyatlari).


Ro‘zador unutib biron narsani yeb-ichsa, ro‘zasi buzilmaydi, balki Allohning mehmoni bo‘ladi. Rasululloh sollallohu alayhi va sallam dedilar: «Ro‘zadorligini unutib yegan yoki ichgan odam, ro‘zasini yetkazsin. Chunki uni Alloh yedirib, ichirgandir» (Imom Muslim rivoyati). Ammo ro‘zani qasddan ochish gunoh hisoblanadi.

Umuman olganda, Ramazonni munosib o‘tkazish, uning odoblariga, qoidalariga rioya etish har bir mo‘min-musulmonning farzidir. Ramazon ro‘zasini besabab qoldirish va uni tutmaslik kishini gunohkor etadi. Hayotidan baraka ko‘tariladi. Chunki Ramazonning har bir daqiqasida baraka yashiringan.",
'parse_mode'=>"html",
'reply_markup'=>$roza_menu,
]);
}

if($tx == "🍵Ro'za duosi"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"Рўза тутиш (саҳарлик, оғиз ёпиш) дуоси
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

نَوَيْتُ أَنْ أَصُومَ صَوْمَ شَهْرَ رَمَضَانَ مِنَ الْفَجْرِ إِلَى الْمَغْرِبِ، خَالِصًا لِلهِ تَعَالَى أَللهُ أَكْبَرُ
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

Навайту ан асувма совма шаҳри рамазона минал фажри илал мағриби, холисан лиллаҳи таъаалаа Аллоҳу акбар.
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

Маъноси: Рамазон ойининг рўзасини субҳдан то кун ботгунча тутмоқни ният қилдим. Холис Аллоҳ учун Аллоҳ буюкдир.
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

Ифторлик (оғиз очиш) дуоси
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

اَللَّهُمَّ لَكَ صُمْتُ وَ بِكَ آمَنْتُ وَ عَلَيْكَ تَوَكَّلْتُ وَ عَلَى رِزْقِكَ أَفْتَرْتُ، فَغْفِرْلِى مَا قَدَّمْتُ وَ مَا أَخَّرْتُ بِرَحْمَتِكَ يَا أَرْحَمَ الرَّاحِمِينَ
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

Аллоҳумма лака сумту ва бика ааманту ва аълайка таваккалту ва аълаа ризқика афтарту, фағфирлий ма қоддамту ва маа аххорту бироҳматика йаа арҳамар рооҳимийн.
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

Маъноси: Эй Аллоҳ, ушбу Рўзамни Сен учун тутдим ва Сенга иймон келтирдим ва Сенга таваккал қилдим ва берган ризқинг билан ифтор қилдим. Эй меҳрибонларнинг энг меҳрибони, менинг аввалги ва кейинги гуноҳларимни мағфират қилгил
➖➖➖➖➖➖➖➖➖➖➖➖➖➖",
'parse_mode'=>"html",
'reply_markup'=>$roza_menu,
]);
}

if($tx == "📖Qur'on📖"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"🤗<b>Marhamat o‘zingizga kerakli bo‘limni tanlang.</b>",
	'parse_mode'=>"html",
	'reply_markup'=>$quron_menu,
	]);
	}

if($tx == "📖Qur'on"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"🤗<b>Marhamat o‘zingizga kerakli bo‘limni tanlang.</b>",
	'parse_mode'=>"html",
	'reply_markup'=>$quran_menu,
	]);
	}
	

	if($tx == "☪️Diniy bayramlar☪️"){
		bot('sendMessage',[
		'chat_id'=>$cid,
		'text'=>"Islomiy bayramlar islom dinidagi bayramlar (xursandchilik kunlari) boʻlib, ikkita asosiy bayramdan iborat — Iyd al-Fitr va Iyd al-Adha. Bayramlarning nishonlanishi xalqlar va madaniyatlarga qarab, shuningdek, Islom sektalari (Sunniylar va Shialar)ga koʻra turlicha boʻlishi mumkin. Musulmon bayramlari qamariy taqvimga asoslangan boʻlib, shamsiy taqvimga nisbatan har yili surilib boradi. Islom taqvimida 12 oy va 354-355 kun bor. Sunniy va Shia taqvimlari har doim ham bir-biriga muvofiq kelmaydi. Baʼzan ayni bayram shialarda nishonlanayotgan boʻlsa, sunniylarda u boshqa kuni, odatda ketma-ket nishonlanishi ham mumkin.
		
Iyd al-Fitr 

Iyd (عيد) arabcha soʻz boʻlib, oʻzbek tilida 《bayram》, 《hayit》 degani va Fitr soʻzi esa roʻza tutish deganidir. Iyd al-Fitr (عيد الفطر) yoki roʻza hayiti Ramazon oyining tugashi bilan nishonlanadigan bayramdir. Ramazon oyida musulmonlar tong otgandan kun botguniga qadar roʻza tutadilar, yaʼni yeyish, ichish va jinsiy aloqadan tiyiladilar. Roʻza hayiti Ramazon oyining oxirgi kuni kun botgandan soʻng boshlanadi. Ushbu bayram Oʻzbekistonda ham musulmonlar tomonidan keng nishonlanib, umumxalq bayrami sifatida dam olish kuni deb eʼlon qilingan.

Iyd al-Adha 

Iyd al-Adha (عيد الأضحى), yoki Qurbon hayiti, Iyd a-Fitrdan taxminan 70 kun keyin nishonlanadi. Ushbu bayram Ibrohim paygʻambarni sharafiga nishonlanadi. Islomga koʻra Ibrohim paygʻambar Allohga sodiqligini koʻrsatish uchun oʻz oʻgʻlini qurbon qilishga ham tayyor boʻlgan. Ushbu bayram anʼanasiga koʻra qoʻy yoki mol soʻyilib, uning goʻshti oila, doʻstlar va muhtojlarga ulashiladi. Hayit, shuningdek, Makkaga hajj marosimini tugashiga toʻgʻri keladi. Qurbon hayiti ham ramazon hayiti singari Oʻzbekistonda umumxalq bayrami deb tan olingan va ushbu kun dam olish kunidir.",
'parse_mode'=>"html",
'reply_markup'=>$main_menu,
]);
}

if($text == "1" or $text == "📖Fotiha surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/123?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "2" or $text == "📖Baqara surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/124?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "3" or $text == "📖Imron surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/125?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "4" or $text == "📖Niso surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/126?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "5" or $text == "📖Maida surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/127?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "6" or $text == "📖Anam surasi"){
 bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/128?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "7" or $text == "📖Arof surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/129?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "8" or $text == "📖Anfol surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/130?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "9" or $text == "📖Tavba surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/131?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "10" or $text == "📖Yunus surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/132?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "11" or $text == "📖Hud surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/133?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "12" or $text == "📖Yusuf surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/134?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "13" or $text == "📖Rad surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/135?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "14" or $text == "📖Ibrohim surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/136?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "15" or $text == "📖Hijr surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/137?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "16" or $text == "📖Nahl surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/138?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "17" or $text == "📖Isro surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/139?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "18" or $text == "📖Kahf surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/140?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "19" or $text == "📖Maryam surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/141?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "20" or $text == "📖Toha surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/142?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "21" or $text == "📖Anbiyo suarsi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/228?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "22" or $text == "📖Haj surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/229?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "23" or $text == "📖Muminun surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/230?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "24" or $text == "📖Nur surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/231?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "25" or $text == "📖Furqon surasi"){
 bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/232?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "26" or $text == "📖Shuaro surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/233?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "27" or $text == "📖Naml surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/234?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "28" or $text == "📖Qasos surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/235?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "29" or $text == "📖Ankabut surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/236?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "30" or $text == "📖Rum Surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/143?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "31" or $text == "📖Luqmon surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/146?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "32" or $text == "📖Sajda surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/145?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "33" or $text == "📖Ahzob surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/147?single",
'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "34" or $text == "📖Saba surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/144?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "35" or $text == "📖Fotir surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/149?single",
'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "36" or $text == "📖Yosin surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/148?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "37" or $text == "📖Soffat surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/150?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "38" or $text == "📖Sod surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/151?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "39" or $text == "📖Zumar surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/152?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "40" or $text == "📖Gofir surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/153?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "41" or $text == "📖Fussilat surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/154?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "42" or $text == "📖Shoro surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/155?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "43" or $text == "📖Zuxruf surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/156?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "44" or $text == "📖Zuhan surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/157?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "45" or $text == "📖Jathiya surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/158?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "46" or $text == "📖Ahqaf surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/159?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "47" or $text == "📖Muhammad surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/160?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "48" or $text == "📖Fath surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/161?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "49" or $text == "📖Hujurat surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/162?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "50" or $text == "📖Qof surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/163?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "51" or $text == "📖Zuriyat surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/164?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "52" or $text == "📖Tur surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/165?single",
'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "53" or $text == "📖Najim surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/166?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "54" or $text == "📖Qamar surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/167?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "55" or $text == "📖Rohman surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/168?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "56" or $text == "📖Voqiya surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/169?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "57" or $text == "📖Hadid surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/170?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "58" or $text == "📖Mujadila surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/171?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "59" or $text == "📖Hashir surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/172?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "60" or $text == "📖Mumtahina surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/173?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "61" or $text == "📖Soff surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/174?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "62" or $text == "📖Juma surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/175?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "63" or $text == "📖Munofiqun surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/176?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "64" or $text == "📖Taghabun surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/177?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "65" or $text == "📖Taloq surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/178?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "66" or $text == "📖Tahrim surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/179",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "67" or $text == "📖Mulk surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/180?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "68" or $text == "📖Qalam surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/181?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "69" or $text == "📖Haqqa surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/182?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "70" or $text == "📖Muorij surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/183?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "71" or $text == "📖Nuh surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/184?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "72" or $text == "📖jinn surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/185?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "73" or $text == "📖Muzzammil surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/186?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "74" or $text == "📖Muddathir surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/187?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "75" or $text == "📖Qiyama surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/188?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "76" or $text == "📖Insan surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/189?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "77" or $text == "📖Mursalat surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/190?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "78" or $text == "📖Naba surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/191?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "79" or $text == "📖Naziat surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/192?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "80" or $text == "📖Abasa surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/193?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "81" or $text == "📖Takawir surasi"){
bot( sendaudio ,[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/194?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "82" or $text == "📖Infitar surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/195?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "83" or $text == "📖Mutaffifin surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/196?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "84" or $text == "📖Inshiqaq surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/197?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "85" or $text == "📖Burooj surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/198?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "86" or $text == "📖Tariq surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/199?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "87" or $text == "📖Ala surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/200?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "88" or $text == "📖Ghashiya surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/201?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "89" or $text == "📖Fajir surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/202?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "90" or $text == "📖Balad surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/203?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "91" or $text == "📖Shams surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/204?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "92" or $text == "📖Lail surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/205?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "93" or $text == "📖Dhuha surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/206?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "94" or $text == "📖Sharh surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/207?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "95" or $text == "📖Tiyn surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/208?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "96" or $text == "📖falaq surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/209?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "97" or $text == "📖Qadr surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/210?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "98" or $text == "📖Bayyina surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/211?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "99" or $text == "📖Zilzila surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/212?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "100" or $text == "📖Adiyat surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/213?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "101" or $text == "📖Qaria surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/214?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "102" or $text == "📖Takathur surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/215?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "103" or $text == "📖Asr surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/216?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "104" or $text == "📖Hamza surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/217?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "105" or $text == "📖Fil surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/218?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "106" or $text == "📖Quraysh surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/219?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "107" or $text == "📖Moun surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 audio =>"https://t.me/namozxon_uz_bot/220?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "108" or $text == "📖Kavsar surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/221?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
if($text == "109" or $text == "📖Kofirun surasi"){
bot( 'sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/222?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "110" or $text == "📖Nosr surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/223?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "111" or $text == "📖Masad surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/224?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}
	
if($text == "112" or $text == "📖Ixlos surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/225?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "113" or $text == "📖Falaq surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/226?single",
 'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($text == "114" or $text == "📖Nos surasi"){
bot('sendaudio',[
 'chat_id'=>$chat_id, 
 'audio'=>"https://t.me/namozxon_uz_bot/227?single",
'parse_mode'=>"html",
 'reply_markup'=>$quran_menu, 
]);
}

if($tx == "🎙30 pora audio formatda"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🤗<b>Marhamat o‘zingizga kerakli bo‘limni tanlang.</b>",
'parse_mode'=>'html',
'reply_markup'=>$pora_menu,
]);
}
if($text == "🎙1-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/237",
'caption'=>"🎙1-pora🔉",
'parse_mode'=>'html',
]);
}
if($text == "🎙2-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/238",
'caption'=>"🎙2-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙3-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/239",
'caption'=>"🎙3-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙4-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/240",
'caption'=>"🎙4-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙5-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/241",
'caption'=>"🎙5-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙6-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/242",
'caption'=>"🎙6-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙7-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/243",
'caption'=>"🎙7-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙8-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/244",
'caption'=>"🎙8-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙9-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/245",
'caption'=>"🎙9-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙10-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/246",
'caption'=>"🎙10-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙11-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/247",
'caption'=>"🎙11-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙12-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/248",
'caption'=>"🎙12-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙13-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/249",
'caption'=>"🎙13-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙14-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/250",
'caption'=>"🎙14-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙15-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/251",
'caption'=>"🎙15-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙16-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/252",
'caption'=>"🎙16-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙17-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/253",
'caption'=>"🎙17-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙18-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/254",
'caption'=>"🎙18-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙19-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/255",
'caption'=>"🎙19-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙20-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/256",
'caption'=>"🎙20-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙21-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/257",
'caption'=>"🎙21-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙22-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/258",
'caption'=>"🎙22-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙23-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/259",
'caption'=>"🎙23-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙24-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/260",
'caption'=>"🎙24-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙25-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/261",
'caption'=>"🎙25-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙26-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/262",
'caption'=>"🎙26-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙27-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/263",
'caption'=>"🎙27-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙28-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/264",
'caption'=>"🎙28-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙29-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/265",
'caption'=>"🎙29-pora🔉 ",
'parse_mode'=>'html',
]);
}
if($text == "🎙30-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/namozxon_uz_bot/266",
'caption'=>"🎙30-pora🔉 ",
'parse_mode'=>'html',
]);
}

if($tx == "📚Ma'lumot"){
	bot('sendMessage',[
	'chat_id'=>$cid,
	'text'=>"🤖<i>Siz Ma'lumot bo'limidasiz 
Iltimos quyidagilardan birini tanlang!</i>.",
'parse_mode'=>"html",
'reply_markup'=>$admin_menu,
]);
}

if($tx == "ℹBot haqida"){
	bot('sendPhoto',[
	'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/273",
	'caption'=>"ℹ<i>Ushbu bot barcha o‘zbek musulmonlari uchun yaratildi.
Keling azizlar barcha birodarlarimizni komil bo‘lib yetishishiga o‘z hissamizni qo‘shaylik.
Buning uchun ushbu botni barcha o‘zingizga qadrli bo‘lgan insonlarga yuboring. Zero ularni ham o‘zlari to‘g‘ri deb bilgan xatolardan qaytarish barchamiz uchun savoblidir.</i>

<b>@musulmon_kundalik_bot</b>",
'parse_mode'=>"html",
'reply_markup'=>$admin_menu,
]);
}

if($tx == "✍🏻Murojat📨"){
	bot('sendPhoto',[
	'chat_id'=>$cid,
'photo'=>"https://t.me/namozxon_uz_bot/272?single",	'caption'=>"<i>
Bot haqida savol va takliflar uchun @shmirzanazarov ga yozing!
Iltimos! Savolingizni text ko'rinishida yozing! 🗣Ovozli habar yubormang!🚫
👥Botimiz: @musulmon_kundalik_bot</i>
",
'parse_mode'=>"html",
'reply_markup'=>$admin_menu,
]);
}

//<---------------Admin panel----------------------->


if($tx == "💾Kod" or $tx == "/kod"){
if($cid==$admin){
bot('sendDocument',[
'chat_id'=>$admin,
'document'=>new CURLfile(__FILE__),
]);
}
}

if($tx=="/panel" or $tx == "⏪Orqaga"){
if($cid==$admin){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🤗Assalomu Alaykum @shmirzanazarov admin panelga xush kelibsiz!",
'reply_markup'=>$panel,
]);
}
}

if($sd=="✏Kod📝"){
if($cid==$admin){
bot('sendDocument',[
'chat_id'=>$admin,
'document'=>new CURLfile(__FILE__),
]);
}
}

if($cdata=="deleterek"){
bot('deleteMessage',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
}

$lichka = file_get_contents("data/user.db");
$xabar = file_get_contents("send.txt");
if($text == "📨Xabar"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing.*",
'parse_mode'=>"markdown",
]); file_put_contents("send.txt","user");
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bekor qilindi!",
'parse_mode'=>"html",
]); unlink("send.txt");
}else{
$lich = file_get_contents("sirojiddin.db");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$okuser=bot("sendmessage",[
'chat_id'=>$lichkalar,
'text'=>$text,
'parse_mode'=>'Markdown'
]);
}
}
}
if($okuser){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"Hamma userlarga yuborildi!",
'parse_mode'=>'html',
]); unlink("send.txt");
}

$lichka=file_get_contents("sirojiddin.db");
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("sirojiddin.db","$lichka\n$cid");
}
}
if($text == "📊Statistika"){
if($cid == $admin){
$lichka=file_get_contents("sirojiddin.db");
$lich=substr_count($lichka,"\n");
$time=date('H:i:s',strtotime('0 hour'));
$sana=date("d-F, Y-\y\i\l",strtotime("5 hour"));
$haf = date('N',strtotime('2 hour'));
$haft="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
$okun=date("n");
$oynoms = "1Yanvar1 2Fevral2 3Mart3 4Aprel4 5May5 6Iyun6 7Iyul7 8Avgust8 9Sentabr9 10Oktabr10 11Noyabr11 12Dekabr12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$oynomi = date('F', strtotime('2 hour'));
$sana2 = date('z', strtotime('2 hour'));
$anb8 = file_get_contents("https://obhavo.uz/namangan"); $ex1=explode("n",$anb8);

$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/namangan-province/pop/');

$ex = explode('title="Havo harorati"',$obh);

$exi = explode('right-container',$ex[1]);

$ubk = str_replace($exi[1],' ',$ex[1]);

$ubk1 = str_replace('dir="ltr">',' ',$ubk);

$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);

$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);

$ubk4 = str_replace('</div>',' ',$ubk3);

$obhavo = trim("$ubk4");
$buoy = date('t', strtotime('2 hour'));
$kun1 = date('z ',strtotime('2 hour')); 
  $a = 360;
  $c2 = $a-$kun1;
  $d = date('L ',strtotime('2 hour'));
  $b = $c2+$d;
  $f = $b+81;
  $e = $b+240;
  $kun2 = date('H ',strtotime('2 hour')); 
  $a2 = 23;
  $b2 = $a2-$kun2;
  $kun3 = date('i ',strtotime('2 hour')); 
  $a3 = 59;
  $b3 = $a3-$kun3;
  $kun4 = date('s ',strtotime('2 hour')); 
  $a4 = 60;
  $b4 = $a4-$kun4;
bot('sendmessage',[
'chat_id'=>$cid,
    'text'=> "📊<b>Bot statatistikasi:</b>    
├▶A'zolar: <b>$lich</b>
├▶Kanalimiz: <b>@namozxon_uz_bot</b>
└▶Admin: <b>@shmirzanazarov</b>

🔷️➰⏰Soat: $time ⏰, 
🔷️➰📅Sana: $sana 📅,
🔷️➰📆Hafta kuni: $hafta,
🔷️➰📅Oy Nomi: $oy ,
🔷️➰🔲Yilning: $sana2 kuni!🔲,
🔷️➰⛅Havo harorati: $obhavo C° ⛅,
🔷️➰🌐Bu oy $buoy kundan iborart!🌐,
🔷️➰❄Yangi yilga 📅$b kun, ☃️$b2 soat⏰, 🎅 $b3 minut, 🎁 $b4 sekund qoldi!,
🔷️➰🌚Ertangi kunga:⏰ $b2 -Soat⏰,🌹$b3 -Minut🥀, ➰ $b4 sekund qoldi!🌐",
'parse_mode' => 'html',
]);
}
}

include("panel.php");
?>
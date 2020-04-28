<?php
ob_start();
define('API_KEY','985684510:AAEcXZ8UWLMiH2Y3uPFs-y_2aiyTMP8-Z_A');

$admin = "907902728"; 
$chan_id = "-1001471595042"

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
$update = json_decode(file_get_contents('php://input'));

$channel = $update->channel_post;
$channel_text = $channel->text;
$channel_mid = $channel->message_id;
$channel_id = $channel->chat->id;
$channel_user = $channel->chat->username;
$chanel_doc = $channel->document;
$channel_video = $channel->video;
$channel_audioTitle = $channel_audio->title;
$message_ch = $update->channel_post;
$message_ch_photo = $message_ch->photo;
$channel_id = $channel->chat->id;
$channel_poto = $channel->photo;
$cap = $channel->caption;
if($channel_audio or $channel_video or $chanel_doc){
    
    $export = bot('exportChatInviteLink',
    ]);
    $a = $export->result;
    bot('editMessageCaption',[
    'chat_id'=>$chan_id,
        'caption'=>$cap,
        'parse_mode'=> 'Markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"♻️Do'stlarga ulashish♻️", "url"=>"https://t.me/share/url?url=https://telegram.me/$channel_user/$channel_mid"]],
            ]
        ])
        ]);
}
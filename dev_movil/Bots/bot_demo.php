<?php

// your bot details:
$botToken = "123456789:your_token_here";
$botId = "your_bot_id";
$admin = "your_id";

// getUpdates from telegram:
$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents("php://input");
$update = json_decode($update, TRUE);

// the message updates:
     $message = $update["message"];
     $message_id = $update["message"]["message_id"];
     $message_text = $update["message"]["text"];

     $reply_id = $update["reply_to_message"]["id"];
     $reply_mid = $update["reply_to_message"]["message_id"];
  
// the users updates  
    $user = $update["message"]["from"];
    $user_id = $update["message"]["from"]["id"];
    $user_first = $update["message"]["from"]["first_name"];
    $user_last = $update["message"]["from"]["last_name"];
    $user_name = $update["message"]["from"]["username"];

// the chat updates:
    $chat = $update["message"]["chat"];
    $chat_id = $update["message"]["chat"]["id"];
    $chat_name = $update["message"]["chat"]["first_name"];
   
  
if ($message_text == "/text"){
    sendMessage($user_id, "Welcome,".$user_name."!");
    }
        
function sendMessage ($user_id, $message_text){

$url = $GLOBALS[website]."/sendMessage?chat_id=".$user_id."&text=".urlencode($message_text);
file_get_contents($url);
}

?>


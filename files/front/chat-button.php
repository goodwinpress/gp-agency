<?php
// кнопка для онлайн чата в мессенджере
$titan = TitanFramework::getInstance( 'agency' ); 
 
$messenger_type = $titan->getOption( 'chat-type' );
$operator = $titan->getOption( 'chat-operator' );
$chat_img = $titan->getOption( 'chat-img' );
$button_text = $titan->getOption( 'chat-btn-text' );
$chat_phone = $titan->getOption( 'chat-phone' ); // телефоный для whatsapp и viber одновременно
$chat_telegram = $titan->getOption( 'chat-telegram' ); // аккаунт в телеге
$start = $titan->getOption( 'chat-shedule-start' ); 
$end  = $titan->getOption( 'chat-shedule-end' ); 

chat_button($messenger_type, $chat_phone, $chat_telegram, $start, $end, $operator, $chat_img, $button_text)

?>

<?php 
// кнопки социальных сетей
$titan = TitanFramework::getInstance( 'agency' );  

$vkontakte = $titan->getOption( 'vk-link' );
$instagram = $titan->getOption( 'inst-link' );
$facebook = $titan->getOption( 'fb-link' );
$twitter = $titan->getOption( 'twi-link' );
$telegram = $titan->getOption( 'tg-link' );
$youtube = $titan->getOption( 'yt-link' );
$odnoklasskini = $titan->getOption( 'od-link' );
$pinterest = $titan->getOption( 'pin-link' );
 
 if ($titan->getOption( 'vk-loc' )) { 
	echo '<a href="' . $vkontakte . '">ВКонтакте</a>';
	}
	  if ($titan->getOption( 'inst-loc' )) { 
	echo '<a href="' . $instagram . '">Instagram</a>';
	}
	  if ($titan->getOption( 'fb-loc' ) ) { 
	echo '<a href="' . $facebook . '">Facebook</a>';
	}
	  if ($titan->getOption( 'twi-loc' ) ) { 
	echo '<a href="' . $twitter . '">Twitter</a>';
	}
	  if ($titan->getOption( 'tg-loc' ) ) { 
	echo '<a href="' . $telegram . '">Telegram</a>';
	}
	  if ($titan->getOption( 'yt-loc' ) ) { 
	echo '<a href="' . $youtube . '">YouTube</a>';
	}
	  if ($titan->getOption( 'od-loc' )) { 
	echo '<a href="' . $odnoklasskini . '">Одноклассники</a>';
	}
	  if ($titan->getOption( 'pin-loc' ) ) { 
	echo '<a href="' . $pinterest . '">Pinterest</a>';
	}
?>
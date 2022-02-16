<?php
// раздел Главной страницы - Команда
$titan = TitanFramework::getInstance( 'agency' ); 

// получаем данные из консоли темы
$home_team_title = $titan->getOption( 'home-team-title' ); // заголовок раздела

$person1_name = $titan->getOption( 'person1-name' ); // имя персоны
$person1_img = $titan->getOption( 'person1-img' ); // фото персоны
$person1_url = $titan->getOption( 'person1-url' ); // ссылка на произвольную страницу
$person1_alma = $titan->getOption( 'person1-alma' ); // логотип вуза

$person2_name = $titan->getOption( 'person2-name' );
$person2_img = $titan->getOption( 'person2-img' );
$person2_url = $titan->getOption( 'person2-url' );
$person2_alma = $titan->getOption( 'person2-alma' );

$person3_name = $titan->getOption( 'person3-name' );
$person3_img = $titan->getOption( 'person3-img' );
$person3_url = $titan->getOption( 'person3-url' );
$person3_alma = $titan->getOption( 'person3-alma' );

$team_text_left = $titan->getOption( 'team-text-left' ); // контент в левой колонке
$team_text_right = $titan->getOption( 'team-text-right' ); // контент в правой колонке

?>

<div class="home-team-section">
	 
	<h2 class="home-section__title"><?php echo $home_team_title; ?></h2>
	 
   <div class="port flex-port"> 
	   
	   <div class="home-team-section__item">
		<?php
			// имя, фото, лого вуза
			$imageID = $person1_img;
			$person_url = $person1_url;
			$person_logo = $person1_alma;
			gp_team_image($imageID, $person_url);
			echo '<div class="person-name"><span>'.  $person1_name . '</span>';
			if (! empty ($person_logo)) {
			gp_team_logo($person_logo);
			}
			echo '</div>';
		?>
	   </div><!-- end home-team-section__item 1 --> 
		 
		 <div class="home-team-section__item">
		<?php
			// имя, фото, лого вуза
			$imageID = $person2_img;
			$person_url = $person2_url;
			$person_logo = $person2_alma;
			gp_team_image($imageID, $person_url);
			echo '<div class="person-name"><span>'.  $person2_name . '</span>';
			if (! empty ($person_logo)) {
		    gp_team_logo($person_logo);
			}
			echo '</div>';
		?>
		</div><!-- end home-team-section__item 2 --> 
				
		<div class="home-team-section__item">
		<?php
			// имя, фото, лого вуза
			$imageID = $person3_img;
			$person_url = $person3_url;
			$person_logo = $person3_alma;
			gp_team_image($imageID, $person_url);
			echo '<div class="person-name"><span>'.  $person3_name . '</span>';
			if (! empty ($person_logo)) {
			gp_team_logo($person_logo);
			}
			echo '</div>';
		?>
		</div><!-- end home-team-section__item 3 --> 
	
		<div class="home-team-section__description">
			<div class="flex-port">
				
				<div class="description__left"> 
					<?php echo $team_text_left; ?>
				</div><!-- end description__left -->
						   
				<div class="description__right"> 
					<?php echo $team_text_right; ?>
				</div><!-- end description__right -->
							   
			</div><!-- end flex-port -->
		</div><!-- end home-team-section__description -->
	   
   </div><!-- end flex-port -->
</div><!-- end home-team-section -->
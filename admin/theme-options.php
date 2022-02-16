<?php
// подключаем консоль темы
if (! defined('ABSPATH')) {
	exit;
}
 
add_action('tf_create_options', 'agency_create_options');
	function agency_create_options() {
		$titan = TitanFramework::getInstance('agency');
		$adminPanel = $titan->createAdminPanel(array(
		'name' => 'GP Agency',
));

$adminPanel->createOption(array(
	'name' => 'О теме',
	'type' => 'heading',
));

	$adminPanel->createOption(array(
	'type' => 'note',
	'desc' => '<img src="/wp-content/themes/gp-agency/screenshot.png" style="width:500px; float:left; margin:0 40px 30px 0" alt="">
	<p><br /> "GP Agency" - новая тема от Гудвина для создания сайта для предоставления услуг, например, дизайн-агентства. Это красивый, быстрый шаблон, адаптивный, оптимизированный, с карточками проектов, страницей услуг, блогом, поп-апом и встроенной кнопкой чатов.</p><br /><p>Вы находитесь в консоли темы, где расположены пункты настройки. Здесь вы можете наполнить контентом разделы темы, перекрасить основные её элементы, добавить статистику,  включить / отключить разные блоки и т.п.</p><br /><p>Чтобы изучить все возможности, ознакомьтесь с инструкцией, которая  предоставлена  вместе с темой.  Инструкция находится в файле readme.html и открывается при помощи любого браузера. В ней описаны все опции темы, рассказано, что и как настроить.</p><br /><p>Для клиентов работает бесплатная и бессрочная техподдержка.  Вы получаете ее все время, пока пользуетесь темой. Если нужна помощь, <a href="https://goodwinpress.ru/contact/" target="_blank">нажмите сюда</a> и напишите о возникшей проблеме.</p> <br /><p>GoodwinPress <a href="https://vk.com/alexey.goodwinpress" target="_blank" rel="nofollow">ВКонтакте</a> &nbsp; &middot; &nbsp;  GoodwinPress в <a href="https://twitter.com/goodwinpress/" target="_blank" rel="nofollow">Twitter</a>&nbsp; &middot; &nbsp; 
		GoodwinPress в <a href="https://www.facebook.com/goodwinpress/" target="_blank" rel="nofollow">Facebook</a>&nbsp; &middot; &nbsp; 
	GoodwinPress в  <a href="https://t.me/goodwinpress/" target="_blank" rel="nofollow">Telegram</a></p><br />'
	));

$adminPanel->createOption(array(
'name' => 'Другие темы от GoodwinPress:',
'type' => 'heading',
));

$adminPanel->createOption(array(
'type' => 'note',
'desc' => '<p>Если пожелаете приобрести какой-нибудь другой шаблон от GoodwinPress, постоянным клиентам предоставляется скидка 25 процентов.</p>
<br /><p>
<a href="https://www.goodwinpress.ru/wp-tema-blogpost-3/" target="_blank"><img class="panel-img" src="/wp-content/themes/gp-agency/img/gpress/bp3.jpg" width="400" alt="BlogPost 3"></a>
<a href="https://www.goodwinpress.ru/wp-tema-law-factory/" target="_blank"><img class="panel-img" src="/wp-content/themes/gp-agency/img/gpress/lawfactory.jpg" width="400" alt="Law Factory"></a>
<a href="https://www.goodwinpress.ru/tema-wp-commander/" target="_blank"><img class="panel-img" src="/wp-content/themes/gp-agency/img/gpress/wpcomm.jpg" width="400" alt="WP Commander"></a>
</p>'
));

$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => 'Профиль',
	'id'=> 'profile-options',
));

$normalPanel->createOption(array(
'type' => 'note',
'desc' => 'Заполните профиль. Указанные данные будут использованы в меню, микроразметке, подвале, на странице Контакты. ',
));

$normalPanel->createOption(array(
 'name' => 'Название',
 'id' => 'profile-name',
 'type' => 'text',
 'desc' => 'Название организации.',
 'default' => 'GP Agency',
));

$normalPanel->createOption(array(
   'name' => 'Форма собственности',
   'id' => 'profile-type',
   'type' => 'text',
   'desc' => 'Форма собственности: ИП, ООО, НПД и т.п.',
   'default' => 'ООО',
  ));

$normalPanel->createOption(array(
	'name' => 'График работы',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Будни',
	'id' => 'business-shedule',
	'type' => 'text',
	'desc' => 'Укажите рабочий график на буднях.',
	'default' => '10:00 - 21:00',
));

$normalPanel->createOption(array(
'name' => 'Выходные',
'id' => 'weekend-shedule',
'type' => 'text',
'desc' => 'Укажите  рабочий график в выходные дни.',
'default' => '12:00 - 20:00',
));

$normalPanel->createOption(array(
	'name' => 'Локация',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Город',
	'id' => 'profile-city',
	'type' => 'text',
	'desc' => 'Название города или населенного пункта.',
	'default' => 'Название населенного пункта',
));

$normalPanel->createOption(array(
	'name' => 'Адрес',
	'id' => 'profile-adress',
	'type' => 'text',
	'desc' => 'Адрес, местонахождение.',
	'default' => 'Адрес',
));

$normalPanel->createOption(array(
		'name' => 'Контакты',
		'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Контактный телефон 1',
	'id' => 'profile-phone-1',
	'type' => 'text',
	'desc' => 'Номер для звонков.',
	'default' => '(812) 123-45-67',
));

$normalPanel->createOption(array(
	'name' => 'Контактный телефон 2',
	'id' => 'profile-phone-2',
	'type' => 'text',
	'desc' => 'Номер для звонков.',
	'default' => '+7 (921) 123-56-89',
));

$normalPanel->createOption(array(
	'name' => 'Социальные сети',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'ВКонтакте - включить',
	'id' => 'vk-loc',
	'type' => 'enable',
	'default' => true,
	'desc' => 'Включить ссылку ВКонтакте',
));

$normalPanel->createOption(array(
	'name' => 'ВКонтакте - ссылка',
	 'id' => 'vk-link',
	'type' => 'text',
	'desc' => 'Разместите адреc Вашей страницы ВКонтакте.',
	'default' => 'https://vk.com',
));

$normalPanel->createOption(array(
	'name' => 'Instagram - включить',
	'id' => 'inst-loc',
	'type' => 'enable',
	'default' => true,
	'desc' => 'Включить ссылку Instagram',
));

$normalPanel->createOption(array(
	'name' => 'Instagram - ссылка',
	'id' => 'inst-link',
	'type' => 'text',
	'desc' => 'Разместите адреc Вашей страницы в Instagram',
	 'default' => 'https://instagram.com',
));

$normalPanel->createOption(array(
	'name' => 'Facebook - включить',
	'id' => 'fb-loc',
	'type' => 'enable',
	 'default' => true,
	'desc' => 'Включить ссылку Facebook',
));

$normalPanel->createOption(array(
	'name' => 'Facebook - ссылка',
	'id' => 'fb-link',
	'type' => 'text',
	'desc' => 'Разместите адреc Вашей страницы в Facebook. Например, https://www.facebook.com/goodwinpress/',
	'default' => 'https://facebook.com',
));

$normalPanel->createOption(array(
	'name' => 'Twitter - включить',
	'id' => 'twi-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ссылку Twitter',
));

$normalPanel->createOption(array(
	'name' => 'Twitter - ссылка',
	'id' => 'twi-link',
	'type' => 'text',
	'desc' => 'Разместите адреc Вашей страницы в Twitter. Например, https://twitter.com/goodwinpress/',
	'default' => 'https://twitter.com',
));

$normalPanel->createOption(array(
	'name' => 'Telegram - включить',
	'id' => 'tg-loc',
	'type' => 'enable',
	'default' => true,
	'desc' => 'Включить ссылку Telegram',
));

$normalPanel->createOption(array(
	'name' => 'Telegram - ссылка',
	'id' => 'tg-link',
	 'type' => 'text',
	'desc' => 'Разместите адреc Вашего канала в Telegram. Например, https://t.me/goodwinpress/',
	'default' => 'https://telegram.org',
));

$normalPanel->createOption(array(
	'name' => 'YouTube - включить',
	'id' => 'yt-loc',
	 'type' => 'enable',
	'default' => true,
	'desc' => 'Включить ссылку YouTube',
));

$normalPanel->createOption(array(
	'name' => 'YouTube - ссылка',
	'id' => 'yt-link',
	'type' => 'text',
	'desc' => 'Разместите адреc Вашего канала  в YouTube',
	 'default' => 'https://youtube.com',
));

$normalPanel->createOption(array(
	'name' => 'Одноклассники - включить',
	'id' => 'od-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ссылку Одноклассники',
));

$normalPanel->createOption(array(
	'name' => 'Одноклассники - ссылка',
	'id' => 'od-link',
	'type' => 'text',
	'desc' => 'Разместите адреc Вашего аккаунта в Одноклассниках',
	'default' => 'https://odnoklassniki.ru',
));

$normalPanel->createOption(array(
	'name' => 'Pinterest - включить',
	'id' => 'pin-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ссылку Pinterest',
));

$normalPanel->createOption(array(
	'name' => 'Pinterest - ссылка',
	'id' => 'pin-link',
	'type' => 'text',
	'desc' => 'Разместите адреc Вашего аккаунта в Pinterest',
	'default' => 'https://pinterest.com',
));

$normalPanel->createOption(array(
	'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => 'Общие настройки',
	'id'=> 'general-options',
));

$normalPanel->createOption(array(
 'type' => 'note',
 'desc' => 'Здесь настроим элементы, общие для всего сайта - фавикон, персональные данные, статистику и т.д.',
));

$normalPanel->createOption(array(
	'name' => 'Favicon',
	 'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Favicon - установить',
	'id' => 'favicon',
	'type' => 'upload',
	'desc' => 'Создайте изображение с нужным рисунком, сохраните в формате png и загрузите его здесь. Рекомендуемый размер - 192х192 пикс.',
	'default' => '/wp-content/themes/gp-agency/img/demo/icon.png',
));

$normalPanel->createOption(array(
	'name' => 'Персональные данные',
	 'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Подтверждение на сбор персональных данных',
	'id' => 'agree-loc',
	'type' => 'radio',
	'options' => array(
	 '1' => 'Включить подтверждение',
	 '2' => 'Не включать',
	),
	'default' => '1',
	 'desc' => 'Оповещение посетителя о том, что он дает согласие на сбор и обработку своих персональных данных при отправке сообщений через формы сайта.'
));

$normalPanel->createOption(array(
	'name' => 'Ссылка на текст соглашения',
	 'id' => 'policy-url',
	'type' => 'text',
	 'desc' => 'Разместите здесь адрес страницы с документом -  политикой конфиденциальности. Не забываем http:// или https://',
	'default' => '',
));

$normalPanel->createOption(array(
		'name' => 'Верификация сайта в Google и Яндекс',
		'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'HTML-тэг для подтверждения прав на сайт',
	'id' => 'verification',
	'type' => 'textarea',
	'desc' => 'Если нужно подтвердить права на сайт в Яндексе и Гугле, это можно сделать здесь, разместив в данное поле код предложенных Вам html метатэгов. Они будут выводиться в разделе head.',
));

$normalPanel->createOption(array(
		'name' => 'Cтатистика и аналитика',
		'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Статистика Google Analytics',
	'id' => 'googlecode',
	'type' => 'textarea',
	'desc' => 'Если вы используете статистику от Google Analytics, вставьте код статистики в это поле. Другие счетчики сюда ставить не рекомендуется.',
));

$normalPanel->createOption(array(
	'name' => 'Статистика без кнопки - Яндекс.Метрика',
	'id' => 'yandexcode',
	'type' => 'textarea',
	'desc' => 'Если вы используете статистику Яндекс.Метрика, вставьте код статистики в это поле.  Другие счетчики сюда ставить не рекомендуется.',
));

$normalPanel->createOption(array(
	'name' => 'Любая статистика с кнопкой',
	'id' => 'anycode',
	'type' => 'textarea',
	'desc' => 'Если у вас имеется  счетчик  с кнопкой типа LiveInternet или Mail.ru, кнопка каталога, или Яндекс Метрика с кнопкой-информером,  поставьте их код в это поле.',
));

$normalPanel->createOption(array(
	'name' => 'Пиксель Facebook',
	'id' => 'pixel',
	'type' => 'textarea',
	'desc' => 'Если у вас есть код Пикселя Facebook, поставьте его в это поле.',
));

$normalPanel->createOption(array(
	'name' => '404 страница',
	'type' => 'heading',
));

 $normalPanel->createOption(array(
	'name' => '404 - текст',
	'id' => 'text404',
	'type' => 'textarea',
	'desc' => 'Впишите свой текст для 404 страницы или используйте текст по умолчанию.',
	'default'=> 'Дорогой посетитель! Страница, которую Вы искали, не существует, либо была перемещена на другой адрес. Перейдите на <a href="/">Главную</a>, где собран весь основной контент. Либо взгляните на наши <a href="/">услуги</a> и <a href="/">проекты</a>. Спасибо!',
));

$normalPanel->createOption(array(
	'name' => 'Кнопка Вверх в подвале',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Перенести кнопку Вверх на левую сторону?',
	'id' => 'backtop-loc',
	'type' => 'checkbox',
	'default' => false,
	'desc' => 'Если вы используете онлайн-чат типа Jivo или кнопку чата темы, перенесите кнопку Вверх на левую сторону сайта, чтобы данные элементы не накладывались друг на друга.',
	));

$normalPanel->createOption(array(
	'name' => 'Ссылка GoodwinPress',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'GoodwinPress',
	'id' => 'gpr-loc',
	'type' => 'enable',
	'default' => true,
	'desc' => 'Авторская индексируемая ссылка в подвале сайта, вкл / выкл',
));

$normalPanel->createOption(array(
	'name' => 'Google PageSpeed',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Больше баллов',
	'id' => 'speed-up',
	'type' => 'checkbox',
	'default' => false,
	'desc' => 'Поставьте галочку, чтобы отключить вывод крупных изображений в постере и шапке внутренних страниц на мобильных устройствах. Это даст прирост в баллах при проверке в Google PageSpeed.',
));

$normalPanel->createOption(array(
	'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => 'Шапка',
	'id'=> 'header',
));

$normalPanel->createOption(array(
	'type' => 'note',
	'desc' => 'Здесь включим и настроим элементы шапки (все, кроме меню, поскольку оно создаётся и настраивается независимо от темы, в админке сайта в разделе "Внешний вид > Меню").',
));

$normalPanel->createOption(array(
	'name' => 'Заголовок сайта',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Текст или логотип',
	'id' => 'site-title',
	'type' => 'select',
	'desc' => 'Выберите, что выводить - текст или логотип. <br />Если выбран текст, то в шапке будет выводиться заголовок, заданный вами в <a target="_blank" href="options-general.php">настройках в админке</a>.',
	'options' => array(
			'1' => 'Текст',
			'2' => 'Логотип',
			),
	'default' => '2',
));

 $normalPanel->createOption(array(
	 'name' => 'Если выбран логотип',
	 'id' => 'themelogo',
	 'type' => 'upload',
	 'desc' => 'Если выбран логотип - загрузите его здесь. <br />Рекомендуемый размер логотипа - 250х60 пикс. Тип может быть любой - png, jpg или svg.',
	 'default' => '/wp-content/themes/gp-agency/img/demo/gp-agency-logo.svg'
));

$normalPanel->createOption(array(
	'name' => 'Кнопка с телефоном',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Включить',
	'id' => 'header-phone-btn-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Кнопка с телефоном в шапке, вкл / выкл. Указывать номер не требуется, он берется из профиля.',
));

$normalPanel->createOption(array(
'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => 'Главная страница',
	'id'=> 'frontpage-options',
));

$normalPanel->createOption(array(
'name' => 'Разделы статической главной страницы',
'type' => 'heading',
));

$normalPanel->createOption(array(
'name' => 'Готовые разделы',
'id' => 'front_page_items',
'type' => 'sortable',
'desc' => 'Включить, отключить, поменять местами разделы статической главной страницы.',
'options' => array(
'poster' => '1. Постер',
'form1' => '2. Форма 1',
'projects' => '3. Проекты',
'services' => '4. Услуги',
'team' => '5. Команда',
'video' => '6. Видео и текст',
'feedback' => '7. Отзывы',
'custom' => '8. Произвольный контент 1',
'custom2' => '9. Произвольный контент 2',
'form2' => '10. Форма 2',
),
'default' => array( 'poster', 'form1', 'projects', 'services', 'team', 'video', 'custom', 'form2' )
));

$normalPanel->createOption(array(
	'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => '&middot; Постер',
	'id'=> 'poster-options',
));

$normalPanel->createOption(array(
	'type' => 'note',
	'desc' => 'Постер - самый заметный, верхний элемент Главной страницы. Содержит тематическое изображение, оффер, доп. текст и кнопку с поп-апом заказа.',
));

$normalPanel->createOption(array(
	'name' => 'Постер - изображение',
	'id' => 'poster-img',
	'type' => 'upload',
	'desc' => 'Установите изображение в Постер. Рекомендуемый размер - 1300х940 пикс. Вес - как можно меньше.',
	'default' => '/wp-content/themes/gp-agency/img/demo/poster-img.jpg'
));

$normalPanel->createOption(array(
	'name' => 'Оффер',
	'id' => 'poster-offer',
	'type' => 'text',
	'desc' => 'Впишите заголовок, оффер',
	'default'=> 'Творческие изыски в Петербурге и окрестностях',
));

$normalPanel->createOption(array(
	'name' => 'Текст постера',
	'id' => 'poster-desc',
	'type' => 'textarea',
	'desc' => 'Впишите текст постера, пояснение к офферу.',
	'default'=> 'Создаем превосходное личное пространство для тех, кто может себе это позволить. Максимальный комфорт для лучшей жизни на Земле.',
));

$normalPanel->createOption(array(
	 'name' => 'Социальные сети',
	 'id' => 'poster-socials-loc',
	 'type' => 'enable',
	 'default' => false,
	 'desc' => 'Социальные сети в постере, вкл / выкл',
));

$normalPanel->createOption(array(
	'name' => 'Кнопка в постере',
	'type' => 'heading',
 ));

$normalPanel->createOption(array(
	'name' => 'Текст кнопки',
	'id' => 'poster-btn-text',
	'type' => 'text',
	'desc' => 'Разместите текст на кнопке.',
	'default'=> 'Заказать дизайн-проект',
 ));

$normalPanel->createOption(array(
  'name' => 'Сценарий кнопки',
  'id' => 'poster-btn-type',
  'type' => 'radio',
  'options' => array(
	 '1' => 'Открывает страницу по ссылке',
	 '2' => 'Открывает поп-ап заказа',
	),
  'default' => '1',
  'desc' => 'Что делает кнопка:'
));

$normalPanel->createOption(array(
	'name' => 'Ссылка',
	'id' => 'poster-btn-url',
	'type' => 'text',
	'desc' => 'Если выбран вариант открывать страницу по ссылке, разместите здесь адрес нужной страницы.',
	'default'=> '',
));

$normalPanel->createOption(array(
	  'name' => 'Форма в поп-апе',
	  'id' => 'poster-popup-form',
	  'type' => 'text',
	  'desc' => 'Если выбран вариант открывать поп-ап, создайте форму заказа по инструкции и разместите здесь ее шорткод.',
	  'default'=> '',
));

$normalPanel->createOption(array(
	'name' => 'Заголовок в поп-апе',
	'id' => 'poster-popup-title',
	'type' => 'text',
	'desc' => 'Если выбран вариант открывать поп-ап, впишите заголовок поп-апа.',
	'default'=> 'Заказать дизайн-проект',
));

$normalPanel->createOption(array(
	'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => '&middot; Форма 1',
	'id'=> 'form1-options',
));

$normalPanel->createOption(array(
	'type' => 'note',
	'desc' => 'Раздел с формой отправки сообщений для получения контактов.',
));

 $normalPanel->createOption(array(
	'name' => 'Заголовок раздела',
	'id' => 'form1-title',
	'type' => 'text',
	'desc' => 'Разместите заголовок раздела.',
	'default' => 'Получите образец альбома с чертежами',
));

$normalPanel->createOption(array(
	'name' => 'Шорткод формы',
	'id' => 'form1-shortcode',
	'type' => 'text',
	'desc' => 'Создайте форму для сбора контактов по инструкции и разместите здесь ее шорткод.',
	'default'=> '',
));

$normalPanel->createOption(array(
	'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => '&middot; Проекты',
	'id'=> 'home-projects-options',
));

$normalPanel->createOption(array(
	'type' => 'note',
	'desc' => 'В этом разделе демонстрируем завершенные проекты, выполненные работы, портфолио. ',
));


$normalPanel->createOption(array(
	'name' => 'Заголовок раздела',
	'id' => 'home-projects-title',
	'type' => 'text',
	'desc' => 'Разместите заголовок',
	'default' => 'Портфолио',
));

$normalPanel->createOption(array(
	'name' => 'Сценарий раздела',
	'id' => 'projects-view-loc',
	'type' => 'radio',
	'options' => array(
	'1' => 'Показать все опубликованные проекты',
	'2' => 'Показать только избранные проекты',
),
	'default' => '1',
	'desc' => 'Выберите, по какому принципу выводить карточки проектов. Либо все подряд, либо только те, которые вы отметили галочкой в настройках.'
));

$normalPanel->createOption(array(
	'name' => 'Текст на кнопке',
	'id' => 'home-projects-btn_text',
	'type' => 'text',
	'desc' => 'Если выбрали показывать  избранные проекты, в раздел добавляется кнопка, открывающая страницу со всеми опубликованными проектами. Разместите текст на кнопке.',
	'default' => 'Посмотреть все проекты',
));

$normalPanel->createOption(array(
	'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
	 'name' => '&middot; Услуги',
	 'id'=> 'service-options',
 ));

$normalPanel->createOption(array(
	 'type' => 'note',
	 'desc' => 'Разместите описание услуг в приготовленных ячейках. Предлагается 12 ячеек. Первые две включены по умолчанию, остальные - по желанию.',
 ));

$normalPanel->createOption(array(
	 'name' => 'Заголовок',
	 'id' => 'services-title',
	 'type' => 'text',
	 'desc' => 'Разместите заголовок раздела',
	 'default' => 'Услуги и цены',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 1',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service1-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => '1000 руб / м²',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service1-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Стоимость создания планировки',
));

$normalPanel->createOption(array(
	'name' => 'Длинное описание',
	'id' => 'service1-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги. ',
	'default' => '<p>Расстановка мебели с габаритными размерами (2-3 варианта), план демонтажа и монтажа стен. Срок исполнения - 2 недели.</p>',
));

$normalPanel->createOption(array(
	'name' => 'Кнопка - ссылка',
	'id' => 'service1-btn-url',
	'type' => 'text',
	'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
	'default' => '',
));

$normalPanel->createOption(array(
	'name' => 'Кнопка - текст',
	'id' => 'service1-btn-text',
	'type' => 'text',
	'desc' => 'Разместите текст на кнопке.',
	'default' => 'Подробности',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 2',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service2-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => '2450 руб / м²',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service2-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Разработка проекта без 3D визуализации',
));

$normalPanel->createOption(array(
	'name' => 'Длинное описание',
	'id' => 'service2-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги.',
	'default' => '<p>Для тех, кто торопится. Срок выполнения - 1,5-2 месяца.</p>',
));

$normalPanel->createOption(array(
	'name' => 'Кнопка - ссылка',
	'id' => 'service2-btn-url',
	'type' => 'text',
	'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
	'default' => '',
));

$normalPanel->createOption(array(
	'name' => 'Кнопка - текст',
	'id' => 'service2-btn-text',
	'type' => 'text',
	'desc' => 'Разместите текст на кнопке.',
	'default' => 'Подробности',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 3',
	'type' => 'heading',
));

$normalPanel->createOption(array(
  'name' => 'Услуга 3 - включить',
  'id' => 'service3-loc',
  'type' => 'enable',
  'default' => false,
  'desc' => 'Включить ячейку.',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service3-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => '550 руб / м²',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service3-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Дополнительная 3D визуализация',
));

$normalPanel->createOption(array(
	'name' => 'Длинное описание',
	'id' => 'service3-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги.',
	'default' => '<p>Для тех, кто хочет всё представить в деталях. Прибавляем к сроку проекта - 2 недели</p>',
));

$normalPanel->createOption(array(
	'name' => 'Кнопка - ссылка',
	'id' => 'service3-btn-url',
	'type' => 'text',
	'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
	'default' => '',
));

$normalPanel->createOption(array(
	'name' => 'Кнопка - текст',
	'id' => 'service3-btn-text',
	'type' => 'text',
	'desc' => 'Разместите текст на кнопке.',
	'default' => 'Подробности',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 4',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 4 - включить',
	'id' => 'service4-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ячейку.',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service4-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => 'Название или цена',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service4-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Подзаголовок',
));

$normalPanel->createOption(array(
	'name' => 'Описание',
	'id' => 'service4-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги.',
	'default' => '<p>Подробное описание.</p>',
));

$normalPanel->createOption(array(
	'name' => 'Кнопка - ссылка',
	'id' => 'service4-btn-url',
	'type' => 'text',
	'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
	'default' => '',
));

$normalPanel->createOption(array(
	'name' => 'Кнопка - текст',
	'id' => 'service4-btn-text',
	'type' => 'text',
	'desc' => 'Разместите текст на кнопке.',
	'default' => 'Подробности',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 5',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 5 - включить',
	'id' => 'service5-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ячейку.',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service5-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => 'Название или цена',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service5-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Подзаголовок',
));

$normalPanel->createOption(array(
	'name' => 'Описание',
	'id' => 'service5-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги.',
	'default' => '<p>Подробное описание.</p>',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - ссылка',
  'id' => 'service5-btn-url',
  'type' => 'text',
  'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - текст',
  'id' => 'service5-btn-text',
  'type' => 'text',
  'desc' => 'Разместите текст на кнопке.',
  'default' => 'Подробности',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 6',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 6 - включить',
	'id' => 'service6-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ячейку.',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service6-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => 'Название или цена',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service6-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Подзаголовок',
));

$normalPanel->createOption(array(
	'name' => 'Описание',
	'id' => 'service6-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги.',
	'default' => '<p>Подробное описание.</p>',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - ссылка',
  'id' => 'service6-btn-url',
  'type' => 'text',
  'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - текст',
  'id' => 'service6-btn-text',
  'type' => 'text',
  'desc' => 'Разместите текст на кнопке.',
  'default' => 'Подробности',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 7',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 7 - включить',
	'id' => 'service7-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ячейку.',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service7-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => 'Название или цена',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service7-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Подзаголовок',
));

$normalPanel->createOption(array(
	'name' => 'Описание',
	'id' => 'service7-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги.',
	'default' => '<p>Подробное описание.</p>',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - ссылка',
  'id' => 'service7-btn-url',
  'type' => 'text',
  'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - текст',
  'id' => 'service7-btn-text',
  'type' => 'text',
  'desc' => 'Разместите текст на кнопке.',
  'default' => 'Подробности',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 8',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 8 - включить',
	'id' => 'service8-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ячейку.',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service8-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => 'Название или цена',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service8-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Подзаголовок',
));

$normalPanel->createOption(array(
	'name' => 'Описание',
	'id' => 'service8-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги.',
	'default' => '<p>Подробное описание.</p>',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - ссылка',
  'id' => 'service8-btn-url',
  'type' => 'text',
  'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - текст',
  'id' => 'service8-btn-text',
  'type' => 'text',
  'desc' => 'Разместите текст на кнопке.',
  'default' => 'Подробности',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 9',
	'type' => 'heading',
));

 $normalPanel->createOption(array(
	'name' => 'Услуга 9 - включить',
	'id' => 'service9-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ячейку.',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service9-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => 'Название или цена',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service9-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Подзаголовок',
));

$normalPanel->createOption(array(
	'name' => 'Описание',
	'id' => 'service9-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги.',
	'default' => '<p>Подробное описание.</p>',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - ссылка',
  'id' => 'service9-btn-url',
  'type' => 'text',
  'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - текст',
  'id' => 'service9-btn-text',
  'type' => 'text',
  'desc' => 'Разместите текст на кнопке.',
  'default' => 'Подробности',
 ));

 $normalPanel->createOption(array(
	'name' => 'Услуга 10',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 10 - включить',
	'id' => 'service10-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ячейку.',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service10-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => 'Название или цена',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service10-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Подзаголовок',
));

$normalPanel->createOption(array(
	'name' => 'Описание',
	'id' => 'service10-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги.',
	'default' => '<p>Подробное описание.</p>',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - ссылка',
  'id' => 'service10-btn-url',
  'type' => 'text',
  'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
  'default' => '',
 ));

$normalPanel->createOption(array(
  'name' => 'Кнопка - текст',
  'id' => 'service10-btn-text',
  'type' => 'text',
  'desc' => 'Разместите текст на кнопке.',
  'default' => 'Подробности',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 11',
	'type' => 'heading',
));

 $normalPanel->createOption(array(
	'name' => 'Услуга 11 - включить',
	'id' => 'service11-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ячейку.',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service11-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => 'Название или цена',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service11-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Подзаголовок',
));

$normalPanel->createOption(array(
	'name' => 'Описание',
	'id' => 'service11-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги.',
	'default' => '<p>Подробное описание.</p>',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - ссылка',
  'id' => 'service11-btn-url',
  'type' => 'text',
  'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - текст',
  'id' => 'service11-btn-text',
  'type' => 'text',
  'desc' => 'Разместите текст на кнопке.',
  'default' => 'Подробности',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 12',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Услуга 12 - включить',
	'id' => 'service12-loc',
	'type' => 'enable',
	'default' => false,
	'desc' => 'Включить ячейку.',
));

$normalPanel->createOption(array(
	'name' => 'Название услуги',
	'id' => 'service12-title',
	'type' => 'text',
	'desc' => 'Разместите название услуги или цену.',
	'default' => 'Название или цена',
));

$normalPanel->createOption(array(
	'name' => 'Подзаголовок',
	'id' => 'service12-short-desc',
	'type' => 'text',
	'desc' => 'Разместите подзаголовок, пояснительный текст.',
	'default' => 'Подзаголовок',
));

$normalPanel->createOption(array(
	'name' => 'Описание',
	'id' => 'service12-full-desc',
	'type' => 'editor',
	'desc' => 'Разместите подробное описание услуги.',
	'default' => '<p>Подробное описание.</p>',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - ссылка',
 'id' => 'service12-btn-url',
  'type' => 'text',
  'desc' => 'Вставьте адрес, который откроется по клику на кнопку. Если адрес не установлен, кнопка не выводится.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка - текст',
  'id' => 'service12-btn-text',
  'type' => 'text',
  'desc' => 'Разместите текст на кнопке.',
  'default' => 'Подробности',
));

$normalPanel->createOption(array(
	'type' => 'save',
 ));
 
 
 $normalPanel = $adminPanel->createAdminPanel(array(
	 'name' => '&middot; Команда',
	 'id'=> 'team-options',
 ));
 
$normalPanel->createOption(array(
	 'type' => 'note',
	 'desc' => 'Раздел Команда на главной странице. 3 ячейки для основных участников и два текстовых блока.',
 ));
 
$normalPanel->createOption(array(
	'name' => 'Заголовок раздела',
	'id' => 'home-team-title',
	'type' => 'text',
	'desc' => 'Разместите заголовок данного раздела.',
	'default'=> 'Команда',
));
 
$normalPanel->createOption(array(
	'name' => 'Персона 1',
	'type' => 'heading',
));
 
$normalPanel->createOption(array(
	'name' => 'Имя, фамилия',
	'id' => 'person1-name',
	'type' => 'text',
	'desc' => 'Укажите имя участника команды.',
	'default'=> 'Имя и фамилия',
));

$normalPanel->createOption(array(
	'name' => 'Фото',
	'id' => 'person1-img',
	'type' => 'upload',
	'desc' => 'Установите изображение участника команды. Рекомендуемый размер - 300х300 пикс. Вес - как можно меньше.',
	'default' => '/wp-content/themes/gp-agency/img/demo/team1.jpg'
));
 
 $normalPanel->createOption(array(
	'name' => 'Ссылка',
	'id' => 'person1-url',
	'type' => 'text',
	'desc' => 'Вставьте адрес страницы, которая откроется по клику на фото. ',
	'default' => '',
));
	 
$normalPanel->createOption(array(
  'name' => 'Логотип ВУЗа или курсов',
  'id' => 'person1-alma',
  'type' => 'upload',
  'desc' => 'Установите изображение альма-матер выпускника. Рекомендуемый размер - не более 180х80 пикс. Ставится по желанию.',
  'default' => '/wp-content/themes/gp-agency/img/demo/almamater1.svg'
));
 
$normalPanel->createOption(array(
	'name' => 'Персона 2',
	'type' => 'heading',
));
 
$normalPanel->createOption(array(
	'name' => 'Имя, фамилия',
	'id' => 'person2-name',
	'type' => 'text',
	'desc' => 'Укажите имя участника команды.',
	'default'=> 'Имя и фамилия',
 ));

$normalPanel->createOption(array(
	'name' => 'Фото',
	'id' => 'person2-img',
	'type' => 'upload',
	'desc' => 'Установите изображение участника команды. Рекомендуемый размер - 300х300 пикс. Вес - как можно меньше.',
	'default' => '/wp-content/themes/gp-agency/img/demo/team2.jpg'
 ));
 
$normalPanel->createOption(array(
  'name' => 'Ссылка',
  'id' => 'person2-url',
  'type' => 'text',
  'desc' => 'Вставьте адрес страницы, которая откроется по клику на фото.',
  'default' => ''
));
	  
$normalPanel->createOption(array(
	'name' => 'Логотип ВУЗа или курсов',
	'id' => 'person2-alma',
	'type' => 'upload',
	'desc' => 'Установите изображение альма-матер выпускника. Рекомендуемый размер - не более 180х80 пикс. Ставится по желанию.',
	'default' => '/wp-content/themes/gp-agency/img/demo/almamater1.svg'
  ));

$normalPanel->createOption(array(
	 'name' => 'Персона 3',
	 'type' => 'heading',
));
 
$normalPanel->createOption(array(
	 'name' => 'Имя, фамилия',
	 'id' => 'person3-name',
	 'type' => 'text',
	 'desc' => 'Укажите имя участника команды.',
	 'default'=> 'Имя и фамилия',
 ));

$normalPanel->createOption(array(
	 'name' => 'Фото',
	 'id' => 'person3-img',
	 'type' => 'upload',
	 'desc' => 'Установите изображение участника команды. Рекомендуемый размер - 300х300 пикс. Вес - как можно меньше.',
	 'default' => '/wp-content/themes/gp-agency/img/demo/team3.jpg'
 ));
 
 $normalPanel->createOption(array(
  'name' => 'Ссылка',
  'id' => 'person3-url',
  'type' => 'text',
  'desc' => 'Вставьте адрес страницы, которая откроется по клику на фото. ',
  'default' => '',
));

$normalPanel->createOption(array(
	'name' => 'Логотип ВУЗа или курсов',
	'id' => 'person3-alma',
	'type' => 'upload',
	'desc' => 'Установите изображение альма-матер выпускника. Рекомендуемый размер - не более 180х80 пикс.',
	'default' => '/wp-content/themes/gp-agency/img/demo/almamater2.png'
));

$normalPanel->createOption(array(
   'name' => 'Текстовая часть',
   'type' => 'heading',
));
  
$normalPanel->createOption(array(
	'name' => 'Левая колонка',
	'id' => 'team-text-left',
	'type' => 'editor',
	'desc' => 'Разместите какой-либо подходящий текст о команде, подготовке и квалификации сотрудников и т.п.',
	'default' => 'Разместите какой-либо подходящий текст о команде, подготовке и квалификации сотрудников - слева ',
));
	
$normalPanel->createOption(array(
  'name' => 'Правая колонка',
  'id' => 'team-text-right',
  'type' => 'editor',
  'desc' => 'Разместите какой-либо подходящий текст о команде, подготовке и квалификации сотрудников и т.п.',
  'default' => 'Разместите какой-либо подходящий текст о команде, подготовке и квалификации сотрудников - справа',
));
	  
$normalPanel->createOption(array(
	 'type' => 'save',
 ));

$normalPanel = $adminPanel->createAdminPanel(array(
  'name' => '&middot; Видео и текст',
  'id'=> 'video-options',
));

$normalPanel->createOption(array(
  'type' => 'note',
  'desc' => 'Добавим на Главную видео и произвольный текст. Если видео не планируется, вместо него можно разместить изображение, либо какой-либо скрипт. Например,  панораму 360 градусов или 3D-визуализацию.',
));

$normalPanel->createOption(array(
  'name' => 'Видео или скрипт',
  'type' => 'heading',
));
  
$normalPanel->createOption(array(
  'name' => 'Код видео или скрипта',
  'id' => 'video-code',
  'type' => 'textarea',
  'desc' => 'Разместите здесь код видеоролика или скрипта. Поддерживается как ютубовский iframe, так и mp4 видео.',
  'default' => '',
));
  
$normalPanel->createOption(array(
	'name' => 'Текстовая часть',
	'type' => 'heading',
));
	
$normalPanel->createOption(array(
  'name' => 'Подзаголовок',
  'id' => 'video-subtitle',
  'type' => 'text',
  'desc' => 'Разместите подзаголовок раздела.',
  'default' => 'Подзаголовок',
)); 
  
$normalPanel->createOption(array(
'name' => 'Произвольный текст',
'id' => 'video-text',
'type' => 'editor',
'desc' => 'Разместите какой-либо произвольный текст. Данный блок поддерживает шорткоды.',
'default' => 'Cоздадим для вас продуманный дизайн-проект, чтобы процесс строительства обрел последовательность, точность и скорость.',
));
  
$normalPanel->createOption(array(
   'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => '&middot; Отзывы',
	'id'=> 'feedback-options',
));

 $normalPanel->createOption(array(
	'type' => 'note',
	'desc' => 'В этом разделе разместим отзывы клиентов. Для каждого отзыва требуется изображение и текст. Подготовлено 8 ячеек. Первые две включены по умолчанию, остальные - по желанию.',
));

$normalPanel->createOption(array(
	'name' => 'Заголовок раздела',
	'id' => 'feedback-title',
	'type' => 'text',
	'desc' => 'Разместите заголовок раздела',
	'default' => 'Отзывы заказчиков',
 ));

$normalPanel->createOption(array(
  'name' => '1 отзыв',
  'type' => 'heading',
));

$normalPanel->createOption(array(
  'name' => 'Изображение',
  'id' => 'feedback1-img',
  'type' => 'upload',
  'desc' => 'Установите фото объекта в фон ячейки отзыва. Рекомендуемая ширина изображения - 1200 пикс, высота на ваше усмотрение. Вес - как можно меньше.',
  'default' => '/wp-content/themes/gp-agency/img/demo/object.png'
));

$normalPanel->createOption(array(
  'name' => 'Имя заказчика',
  'id' => 'feedback1-name',
  'type' => 'text',
  'desc' => 'Имя автора отзыва',
  'default' => 'Имя Фамилия',
));

 $normalPanel->createOption(array(
   'name' => 'Тип объекта',
   'id' => 'feedback1-subtext',
   'type' => 'text',
   'desc' => 'Укажите тип объекта или любое другое пояснение.',
   'default' => 'коттедж в КП',
));

$normalPanel->createOption(array(
	'name' => 'Текст',
	'id' => 'feedback1-text',
	'type' => 'editor',
	'desc' => 'Разместите текст отзыва. ',
	'default' => 'Текст отзыва 1. Следим за длиной, при необходимости отредактируйте, чтобы отзывы были примено одного объема. ',
));

$normalPanel->createOption(array(
   'name' => 'Ссылка',
   'id' => 'feedback1-url',
   'type' => 'text',
   'desc' => 'Если требуется, разместите ссылку на страницу объекта. Если адрес не указан, ссылка не выводится.',
   'default' => '#',
));

$normalPanel->createOption(array(
  'name' => '2 отзыв',
  'type' => 'heading',
));
   
$normalPanel->createOption(array(
  'name' => 'Изображение',
  'id' => 'feedback2-img',
  'type' => 'upload',
  'desc' => 'Установите фото объекта в фон ячейки отзыва. Рекомендуемая ширина изображения - 1200 пикс, высота на ваше усмотрение. Вес - как можно меньше.',
'default' => '/wp-content/themes/gp-agency/img/demo/object.png'
));

$normalPanel->createOption(array(
  'name' => 'Имя заказчика',
  'id' => 'feedback2-name',
  'type' => 'text',
  'desc' => 'Имя автора отзыва',
  'default' => 'Имя Фамилия',
));

 $normalPanel->createOption(array(
   'name' => 'Тип объекта',
   'id' => 'feedback2-subtext',
   'type' => 'text',
   'desc' => 'Укажите тип объекта или любое другое пояснение.',
   'default' => 'квартира в ЖК',
));

$normalPanel->createOption(array(
	'name' => 'Текст',
	'id' => 'feedback2-text',
	'type' => 'editor',
	'desc' => 'Разместите текст отзыва. ',
	'default' => 'Текст отзыва. Следим за длиной, при необходимости отредактируйте, чтобы отзывы были примено одного объема. ',
));
 
$normalPanel->createOption(array(
   'name' => 'Ссылка',
   'id' => 'feedback2-url',
   'type' => 'text',
   'desc' => 'Если требуется, разместите ссылку на страницу объекта. Если адрес не указан, ссылка не выводится.',
   'default' => '#',
));

$normalPanel->createOption(array(
  'name' => '3 отзыв',
  'type' => 'heading',
));

$normalPanel->createOption(array(
   'name' => '3 отзыв - включить',
   'id' => 'feedback3-loc',
   'type' => 'enable',
   'default' => false,
   'desc' => 'Включить ячейку отзыва.',
));
   
$normalPanel->createOption(array(
  'name' => 'Изображение',
  'id' => 'feedback3-img',
  'type' => 'upload',
  'desc' => 'Установите фото объекта в фон ячейки отзыва. Рекомендуемая ширина изображения - 1200 пикс, высота на ваше усмотрение. Вес - как можно меньше.',
  'default' => ''
));

$normalPanel->createOption(array(
  'name' => 'Имя заказчика',
  'id' => 'feedback3-name',
  'type' => 'text',
  'desc' => 'Имя автора отзыва',
  'default' => 'Имя Фамилия',
));

$normalPanel->createOption(array(
   'name' => 'Тип объекта',
   'id' => 'feedback3-subtext',
   'type' => 'text',
   'desc' => 'Укажите тип объекта или любое другое пояснение.',
   'default' => 'коттедж в КП',
));

$normalPanel->createOption(array(
	'name' => 'Текст',
	'id' => 'feedback3-text',
	'type' => 'editor',
	'desc' => 'Разместите текст отзыва. ',
	'default' => 'Текст отзыва. Следим за длиной, при необходимости отредактируйте, чтобы отзывы были примено одного объема. ',
));

$normalPanel->createOption(array(
   'name' => 'Ссылка',
   'id' => 'feedback3-url',
   'type' => 'text',
   'desc' => 'Если требуется, разместите ссылку на страницу объекта. Если адрес не указан, ссылка не выводится.',
   'default' => '#',
));

$normalPanel->createOption(array(
  'name' => '4 отзыв',
  'type' => 'heading',
));

$normalPanel->createOption(array(
   'name' => '4 отзыв - включить',
   'id' => 'feedback4-loc',
   'type' => 'enable',
   'default' => false,
   'desc' => 'Включить ячейку отзыва.',
));
   
$normalPanel->createOption(array(
  'name' => 'Изображение',
  'id' => 'feedback4-img',
  'type' => 'upload',
  'desc' => 'Установите фото объекта в фон ячейки отзыва. Рекомендуемая ширина изображения - 1200 пикс, высота на ваше усмотрение. Вес - как можно меньше.',
  'default' => ''
));

$normalPanel->createOption(array(
  'name' => 'Имя заказчика',
  'id' => 'feedback4-name',
  'type' => 'text',
  'desc' => 'Имя автора отзыва',
  'default' => 'Имя Фамилия',
));

$normalPanel->createOption(array(
   'name' => 'Тип объекта',
   'id' => 'feedback4-subtext',
   'type' => 'text',
   'desc' => 'Укажите тип объекта или любое другое пояснение.',
   'default' => 'коттедж в КП',
));

$normalPanel->createOption(array(
	'name' => 'Текст',
	'id' => 'feedback4-text',
	'type' => 'editor',
	'desc' => 'Разместите текст отзыва. ',
	'default' => 'Текст отзыва. Следим за длиной, при необходимости отредактируйте, чтобы отзывы были примено одного объема. ',
));

$normalPanel->createOption(array(
   'name' => 'Ссылка',
   'id' => 'feedback4-url',
   'type' => 'text',
   'desc' => 'Если требуется, разместите ссылку на страницу объекта. Если адрес не указан, ссылка не выводится.',
   'default' => '#',
));

$normalPanel->createOption(array(
  'name' => '5 отзыв',
  'type' => 'heading',
));

$normalPanel->createOption(array(
   'name' => '5 отзыв - включить',
   'id' => 'feedback5-loc',
   'type' => 'enable',
   'default' => false,
   'desc' => 'Включить ячейку отзыва.',
));
   
$normalPanel->createOption(array(
  'name' => 'Изображение',
  'id' => 'feedback5-img',
  'type' => 'upload',
  'desc' => 'Установите фото объекта в фон ячейки отзыва. Рекомендуемая ширина изображения - 1200 пикс, высота на ваше усмотрение. Вес - как можно меньше.',
  'default' => ''
));

$normalPanel->createOption(array(
  'name' => 'Имя заказчика',
  'id' => 'feedback5-name',
  'type' => 'text',
  'desc' => 'Имя автора отзыва',
  'default' => 'Имя Фамилия',
));

$normalPanel->createOption(array(
   'name' => 'Тип объекта',
   'id' => 'feedback5-subtext',
   'type' => 'text',
   'desc' => 'Укажите тип объекта или любое другое пояснение.',
   'default' => 'коттедж в КП',
));

$normalPanel->createOption(array(
	'name' => 'Текст',
	'id' => 'feedback5-text',
	'type' => 'editor',
	'desc' => 'Разместите текст отзыва. ',
	'default' => 'Текст отзыва. Следим за длиной, при необходимости отредактируйте, чтобы отзывы были примено одного объема. ',
));

$normalPanel->createOption(array(
   'name' => 'Ссылка',
   'id' => 'feedback5-url',
   'type' => 'text',
   'desc' => 'Если требуется, разместите ссылку на страницу объекта. Если адрес не указан, ссылка не выводится.',
   'default' => '#',
));

$normalPanel->createOption(array(
  'name' => '6 отзыв',
  'type' => 'heading',
));

$normalPanel->createOption(array(
   'name' => '6 отзыв - включить',
   'id' => 'feedback6-loc',
   'type' => 'enable',
   'default' => false,
   'desc' => 'Включить ячейку отзыва.',
));
   
$normalPanel->createOption(array(
  'name' => 'Изображение',
  'id' => 'feedback6-img',
  'type' => 'upload',
  'desc' => 'Установите фото объекта в фон ячейки отзыва. Рекомендуемая ширина изображения - 1200 пикс, высота на ваше усмотрение. Вес - как можно меньше.',
  'default' => ''
));

$normalPanel->createOption(array(
  'name' => 'Имя заказчика',
  'id' => 'feedback6-name',
  'type' => 'text',
  'desc' => 'Имя автора отзыва',
  'default' => 'Имя Фамилия',
));

 $normalPanel->createOption(array(
   'name' => 'Тип объекта',
   'id' => 'feedback6-subtext',
   'type' => 'text',
   'desc' => 'Укажите тип объекта или любое другое пояснение.',
   'default' => 'коттедж в КП',
));

$normalPanel->createOption(array(
	'name' => 'Текст',
	'id' => 'feedback6-text',
	'type' => 'editor',
	'desc' => 'Разместите текст отзыва. ',
	'default' => 'Текст отзыва. Следим за длиной, при необходимости отредактируйте, чтобы отзывы были примено одного объема. ',
));

$normalPanel->createOption(array(
   'name' => 'Ссылка',
   'id' => 'feedback6-url',
   'type' => 'text',
   'desc' => 'Если требуется, разместите ссылку на страницу объекта. Если адрес не указан, ссылка не выводится.',
   'default' => '#',
));

$normalPanel->createOption(array(
  'name' => '7 отзыв',
  'type' => 'heading',
));

$normalPanel->createOption(array(
   'name' => '7 отзыв - включить',
   'id' => 'feedback7-loc',
   'type' => 'enable',
   'default' => false,
   'desc' => 'Включить ячейку отзыва.',
));
   
$normalPanel->createOption(array(
  'name' => 'Изображение',
  'id' => 'feedback7-img',
  'type' => 'upload',
  'desc' => 'Установите фото объекта в фон ячейки отзыва. Рекомендуемая ширина изображения - 1200 пикс, высота на ваше усмотрение. Вес - как можно меньше.',
  'default' => ''
));

$normalPanel->createOption(array(
  'name' => 'Имя заказчика',
  'id' => 'feedback7-name',
  'type' => 'text',
  'desc' => 'Имя автора отзыва',
  'default' => 'Имя Фамилия',
));

$normalPanel->createOption(array(
   'name' => 'Тип объекта',
   'id' => 'feedback7-subtext',
   'type' => 'text',
   'desc' => 'Укажите тип объекта или любое другое пояснение.',
   'default' => 'коттедж в КП',
));

$normalPanel->createOption(array(
	'name' => 'Текст',
	'id' => 'feedback7-text',
	'type' => 'editor',
	'desc' => 'Разместите текст отзыва. ',
	'default' => 'Текст отзыва. Следим за длиной, при необходимости отредактируйте, чтобы отзывы были примено одного объема. ',
));

$normalPanel->createOption(array(
   'name' => 'Ссылка',
   'id' => 'feedback7-url',
   'type' => 'text',
   'desc' => 'Если требуется, разместите ссылку на страницу объекта. Если адрес не указан, ссылка не выводится.',
   'default' => '#',
));

$normalPanel->createOption(array(
  'name' => '8 отзыв',
  'type' => 'heading',
));

$normalPanel->createOption(array(
   'name' => '8 отзыв - включить',
   'id' => 'feedback8-loc',
   'type' => 'enable',
   'default' => false,
   'desc' => 'Включить ячейку отзыва.',
));
   
$normalPanel->createOption(array(
  'name' => 'Изображение',
  'id' => 'feedback8-img',
  'type' => 'upload',
  'desc' => 'Установите фото объекта в фон ячейки отзыва. Рекомендуемая ширина изображения - 1200 пикс, высота на ваше усмотрение. Вес - как можно меньше.',
  'default' => ''
));

$normalPanel->createOption(array(
  'name' => 'Имя заказчика',
  'id' => 'feedback8-name',
  'type' => 'text',
  'desc' => 'Имя автора отзыва',
  'default' => 'Имя Фамилия',
));

$normalPanel->createOption(array(
   'name' => 'Тип объекта',
   'id' => 'feedback8-subtext',
   'type' => 'text',
   'desc' => 'Укажите тип объекта или любое другое пояснение.',
   'default' => 'коттедж в КП',
));

$normalPanel->createOption(array(
	'name' => 'Текст',
	'id' => 'feedback8-text',
	'type' => 'editor',
	'desc' => 'Разместите текст отзыва. ',
	'default' => 'Текст отзыва. Следим за длиной, при необходимости отредактируйте, чтобы отзывы были примено одного объема. ',
));

$normalPanel->createOption(array(
   'name' => 'Ссылка',
   'id' => 'feedback8-url',
   'type' => 'text',
   'desc' => 'Если требуется, разместите ссылку на страницу объекта. Если адрес не указан, ссылка не выводится.',
   'default' => '#',
));

$normalPanel->createOption(array(
  'type' => 'save',
));


$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => '&middot; Произвольный контент 1',
	'id'=> 'custom-content1-options',
));

$normalPanel->createOption(array(
	'type' => 'note',
	'desc' => 'В данном разделе можно вывести на Главную любой произвольный контент. Например, заголовки, тексты, галерею, видео, списки, цитату, таблицу. Либо что-то иное, на ваше усмотрение. Этот блок поддерживает вывод любых шорткодов, что делает его использование гибким и универсальным.',
));

$normalPanel->createOption(array(
	'name' => 'Заголовок раздела',
	'id' => 'custom1-title',
	'type' => 'text',
	'desc' => 'Впишите заголовок раздела',
	'default' => 'Произвольный контент 1',
));

$normalPanel->createOption(array(
	'name' => 'Наполнение',
	'id' => 'custom1-text',
	'type' => 'editor',
	'desc' => 'Разместите здесь любой контент.',
	'default' => ' <p>Кроме готовых разделов, на статической Главной имеется блок для размещения любых материалов. Например, для которых нет готового раздела. Размещайте сюда текст из консоли темы, форматируйте по вкусу, добавляйте свои изображения, видео, таблицу, галерею, списки, ссылки и т.п. Данный блок также поддерживает вывод шорткодов!</p>',
));

$normalPanel->createOption(array(
	'type' => 'save',
));

 $normalPanel = $adminPanel->createAdminPanel(array(
	'name' => '&middot; Произвольный контент 2',
	'id'=> 'custom-content2-options',
));

$normalPanel->createOption(array(
	'type' => 'note',
	'desc' => 'В данном разделе можно вывести на Главную любой произвольный контент. Например, заголовки, тексты, галерею, видео, списки, цитату, таблицу. Либо что-то иное, на ваше усмотрение. Этот блок поддерживает вывод любых шорткодов, что делает его использование гибким и универсальным.',
));

$normalPanel->createOption(array(
	'name' => 'Заголовок раздела',
	'id' => 'custom2-title',
	'type' => 'text',
	'desc' => 'Впишите заголовок раздела',
	'default' => 'Произвольный контент 2',
));

$normalPanel->createOption(array(
	'name' => 'Наполнение',
	'id' => 'custom2-text',
	'type' => 'editor',
	'desc' => 'Разместите здесь любой контент.',
	'default' => ' <p>Кроме готовых разделов, на статической Главной имеется блок для размещения любых материалов. Например, для которых нет готового раздела. Размещайте сюда текст из консоли темы, форматируйте по вкусу, добавляйте свои изображения, видео, таблицу, галерею, списки, ссылки и т.п. Данный блок также поддерживает вывод шорткодов!</p>',
));

$normalPanel->createOption(array(
	'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
   'name' => '&middot; Форма 2',
   'id'=> 'form2-options',
));

$normalPanel->createOption(array(
  'type' => 'note',
  'desc' => 'Второй раздел с формой отправки сообщений для получения контактов. В нем можно использовать ту же самую форму, что и в первом, либо создать новую.',
));

$normalPanel->createOption(array(
  'name' => 'Заголовок раздела',
  'id' => 'form2-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок раздела.',
  'default' => 'Получите образец альбома с чертежами',
));

$normalPanel->createOption(array(
  'name' => 'Шорткод формы',
  'id' => 'form2-shortcode',
  'type' => 'text',
  'desc' => 'Создайте форму для сбора контактов по инструкции и разместите здесь ее шорткод.',
  'default'=> '',
));

$normalPanel->createOption(array(
  'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
  'name' => 'Призыв к действию',
  'id'=> 'call-to-action-options',
));

$normalPanel->createOption(array(
  'type' => 'note',
  'desc' => 'Блок для сбора контактов через форму с предложением получить что-то взамен. Может быть добавлен на все внутренние страницы сайта. Размещается в нижней части страницы над подвалом.',
));

$normalPanel->createOption(array(
  'name' => 'Заголовок',
  'id' => 'call-to-action-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок блока, какой-то оффер.',
  'default'=> 'Узнайте, сколько будет стоить ваш проект',
));

$normalPanel->createOption(array(
  'name' => 'Пояснение',
  'id' => 'call-to-action-text',
  'type' => 'textarea',
  'desc' => 'Разместите короткий пояснительный текст.',
  'default'=> 'Подробный расчет и консультация дизайнера по проектированию, предметам интерьтера на заказ и строительным работам - бесплатно.',
));

$normalPanel->createOption(array(
  'name' => 'Шорткод формы',
  'id' => 'call-to-action-form',
  'type' => 'text',
  'desc' => 'Создайте форму для сбора контактов по инструкции и разместите здесь ее шорткод.',
  'default'=> '',
));
 
$normalPanel->createOption(array(
	'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
  'name' => 'Страница Проекты',
  'id'=> 'project-archive-options',
));

$normalPanel->createOption(array(
  'type' => 'note',
  'desc' => 'Динамическая страница, витрина проектов, портфолио, которая появляется на сайте при активации темы, доступная по адресу ' . home_url() .'/projects/ <br />
	Не забудьте добавить ее в меню.',
));

$normalPanel->createOption(array(
	'name' => 'Заголовок страницы',
	'id' => 'projects-archive-title',
	'type' => 'text',
	'desc' => 'Разместите заголовок страницы. Обратите внимание, это h1.',
	'default' => 'Реализованные проекты',
));

$normalPanel->createOption(array(
	'name' => 'Изображение',
	'id' => 'projects-archive-img',
	'type' => 'upload',
	'desc' => 'Установите изображение в шапку страницы. Рекомендуемый размер - 1920х400 пикс. Вес - как можно меньше.',
	'default' => '/wp-content/themes/gp-agency/img/demo/projects-img.jpg'
));

$normalPanel->createOption(array(
  'name' => 'Описание',
  'id' => 'projects_custom_text',
  'type' => 'editor',
  'desc' => 'На странице проектов также предусмотрен блок для размещения произвольного контента. С его помощью вы можете вывести любой дополнительный текст - для посетителей, для SEO, аналог описания в рубриках. Отформатрируйте текст, добавьте изображение, таблицу, ссылки. Блок поддерживает шорткоды.',
  'default' => '<p>Здесь можно разместить текстовое описание или добавить разметку. Блок поддерживает шорткоды.</p>',
));

$normalPanel->createOption(array(
  'name' => 'Ячейки проектов',
  'type' => 'heading',
));

  $normalPanel->createOption(array(
	'name' => 'Бюджет проекта',
	'id' => 'projects-budget-loc',
	'type' => 'enable',
	'default' => true,
	'desc' => 'Строчка с бюдежтом в ячейке проекта  - вкл / выкл.',
));

$normalPanel->createOption(array(
   'name' => 'Короткое описание',
   'id' => 'projects-desc-loc',
   'type' => 'enable',
   'default' => true,
   'desc' => 'Короткое описание проекта  - вкл / выкл.',
));
 
$normalPanel->createOption(array(
	'name' => 'Призыв к действию',
	'type' => 'heading',
));

$normalPanel->createOption(array(
  'name' => 'Включить',
  'id' => 'project-action-loc',
  'type' => 'enable',
  'default' => true,
  'desc' => 'Блок для сбора контактов в нижней части страницы  - вкл / выкл.',
));

$normalPanel->createOption(array(
  'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => 'Карточки Проектов',
	'id'=> 'single-project-options',
));

$normalPanel->createOption(array(
	'type' => 'note',
	'desc' => 'Несколько быстрых настроек для элементов внутри карточки проекта.',
));

$normalPanel->createOption(array(
	'name' => 'Атрибуты проекта',
	'id' => 'single-project-vars-loc',
	'type' => 'enable',
	'default' => true,
	'desc' => 'Табличка с атрибутами (бюджет, площадь и др) в карточке проекта - вкл / выкл.',
));

$normalPanel->createOption(array(
  'name' => 'Призыв к действию',
  'type' => 'heading',
));

$normalPanel->createOption(array(
  'name' => 'Включить',
  'id' => 'single-project-action-loc',
  'type' => 'enable',
  'default' => true,
  'desc' => 'Блок для сбора контактов в нижней части карточки - вкл / выкл.',
));

 $normalPanel->createOption(array(
  'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
  'name' => 'Страница Услуги',
  'id'=> 'services-options',
));

$normalPanel->createOption(array(
  'type' => 'note',
  'desc' => 'Настроим содержимое страницы Услуги. На ней можно вывести 3 раздела - табы (4 вкладки с контентом), блок с услугами, как на Главной странице, и пошаговый процесс.',
));

$normalPanel->createOption(array(
  'name' => 'Заголовок страницы',
  'id' => 'service-page-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок страницы. Обратите внимание, это h1.',
  'default' => 'Услуги',
));

$normalPanel->createOption(array(
  'name' => 'Изображение',
  'id' => 'service-page-img',
  'type' => 'upload',
  'desc' => 'Установите изображение в шапку страницы. Рекомендуемый размер - 1920х400 пикс. Вес - как можно меньше.',
  'default' => '/wp-content/themes/gp-agency/img/demo/projects-img.jpg'
));


$normalPanel->createOption(array(
  'name' => 'Блоки страницы Услуг',
  'type' => 'heading',
  ));
  
  $normalPanel->createOption(array(
  'name' => 'Блоки',
  'id' => 'service_page_items',
  'type' => 'sortable',
  'desc' => 'Включить, отключить, поменять местами блоки на странице Услуг.',
  'options' => array(
  'tabs' => 'Табы',
  'items' => 'Услуги',
  'steps' => 'Пошаговый процесс'
  ),
  'default' => array( 'tabs', 'items', 'steps' )
  ));

$normalPanel->createOption(array(
  'name' => 'Табы (вкладки)',
  'type' => 'heading',
)); 
 

$normalPanel->createOption(array(
  'name' => 'Вкладка 1',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => '1 таб - заголовок',
  'id' => 'tab1-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок первой вкладки.',
  'default' => 'Дизайн интерьера',
));

$normalPanel->createOption(array(
  'name' => '1 таб - контент',
  'id' => 'tab1-text',
  'type' => 'editor',
  'desc' => 'Разместите содержимое первой вкладки. Поддерживается разметка и шорткоды.',
  'default' => 'Контент 1 таба',
));

$normalPanel->createOption(array(
  'name' => 'Вкладка 2',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => '2 таб - заголовок',
  'id' => 'tab2-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок второй вкладки.',
  'default' => 'Авторский надзор',
));

$normalPanel->createOption(array(
  'name' => '2 таб - контент',
  'id' => 'tab2-text',
  'type' => 'editor',
  'desc' => 'Разместите содержимое второй вкладки. Поддерживается разметка и шорткоды.',
  'default' => 'Контент 2 таба',
));

$normalPanel->createOption(array(
  'name' => 'Вкладка 3',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => '3 таб - заголовок',
  'id' => 'tab3-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок третьей вкладки.',
  'default' => 'Мебель под заказ',
));

$normalPanel->createOption(array(
  'name' => '3 таб - контент',
  'id' => 'tab3-text',
  'type' => 'editor',
  'desc' => 'Разместите содержимое третьей вкладки. Поддерживается разметка и шорткоды.',
  'default' => 'Контент 3 таба',
));

$normalPanel->createOption(array(
  'name' => 'Вкладка 4',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => '4 таб - заголовок',
  'id' => 'tab4-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок четвертой вкладки.',
  'default' => 'Декор помещений',
));

$normalPanel->createOption(array(
  'name' => '4 таб - контент',
  'id' => 'tab4-text',
  'type' => 'editor',
  'desc' => 'Разместите содержимое четвертой вкладки. Поддерживается разметка и шорткоды.',
  'default' => 'Контент 4 таба',
));

 

$normalPanel->createOption(array(
  'name' => 'Пошаговый процесс',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => 'Заголовок блока',
  'id' => 'service-steps-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок для данного блока.',
  'default' => 'Пошаговый процесс',
));
 

$normalPanel->createOption(array(
  'name' => 'Шаг 1',
  'type' => 'heading',
)); 


$normalPanel->createOption(array(
  'name' => 'Шаг 1 - заголовок',
  'id' => 'step1-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок первого шага. Если заголовок не указан, ячейка не выводится.',
  'default' => 'Шаг первый',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 1 - текст',
  'id' => 'step1-text',
  'type' => 'textarea',
  'desc' => 'Раскрываем содержимое первого шага.',
  'default' => 'Разместим здесь описание процесса. Чтобы убрать ячейку с сайта, удалите ее заголовок.',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 2',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => 'Шаг 2 - заголовок',
  'id' => 'step2-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок второго шага. Если заголовок не указан, ячейка не выводится.',
  'default' => 'Шаг второй',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 2 - текст',
  'id' => 'step2-text',
  'type' => 'textarea',
  'desc' => 'Раскрываем содержимое второго шага.',
  'default' => 'Разместим здесь описание процесса. Чтобы убрать ячейку с сайта, удалите ее заголовок.',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 3',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => 'Шаг 3 - заголовок',
  'id' => 'step3-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок третьего шага. Если заголовок не указан, ячейка не выводится.',
  'default' => 'Шаг третий',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 3 - текст',
  'id' => 'step3-text',
  'type' => 'textarea',
  'desc' => 'Раскрываем содержимое третьего шага.',
  'default' => 'Разместим здесь описание процесса. Чтобы убрать ячейку с сайта, удалите ее заголовок.',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 4',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => 'Шаг 4 - заголовок',
  'id' => 'step4-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок четвертого шага. Если заголовок не указан, ячейка не выводится.',
  'default' => 'Шаг третий',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 4 - текст',
  'id' => 'step4-text',
  'type' => 'textarea',
  'desc' => 'Раскрываем содержимое четвертого шага.',
  'default' => 'Разместим здесь описание процесса. Чтобы убрать ячейку с сайта, удалите ее заголовок.',
));

$normalPanel->createOption(array(
  'name' => 'Шаг5',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => 'Шаг 5 - заголовок',
  'id' => 'step5-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок пятого шага. Если заголовок не указан, ячейка не выводится.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 5 - текст',
  'id' => 'step5-text',
  'type' => 'textarea',
  'desc' => 'Раскрываем содержимое пятого шага.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 6',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => 'Шаг 6 - заголовок',
  'id' => 'step6-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок шестого шага. Если заголовок не указан, ячейка не выводится.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 6 - текст',
  'id' => 'step6-text',
  'type' => 'textarea',
  'desc' => 'Раскрываем содержимое шестого шага.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 7',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => 'Шаг 7 - заголовок',
  'id' => 'step7-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок седьмого шага. Если заголовок не указан, ячейка не выводится.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 7 - текст',
  'id' => 'step7-text',
  'type' => 'textarea',
  'desc' => 'Раскрываем содержимое седьмого шага.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 8',
  'type' => 'heading',
)); 

$normalPanel->createOption(array(
  'name' => 'Шаг 8 - заголовок',
  'id' => 'step8-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок восьмого шага. Если заголовок не указан, ячейка не выводится.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Шаг 8 - текст',
  'id' => 'step8-text',
  'type' => 'textarea',
  'desc' => 'Раскрываем содержимое восьмого шага.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Призыв к действию',
  'type' => 'heading',
));

 $normalPanel->createOption(array(
  'name' => 'Включить',
  'id' => 'services-action-loc',
  'type' => 'enable',
  'default' => true,
  'desc' => 'Блок для сбора контактов в нижней части страницы - вкл / выкл.',
));

$normalPanel->createOption(array(
  'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
  'name' => 'Страница Контакты',
  'id'=> 'contact-page-options',
));

$normalPanel->createOption(array(
  'type' => 'note',
  'desc' => 'Здесь настроим статическую страницу Контакты. Опций немного, поскольку все основные данные вы уже указали в Профиле, и они берутся оттуда.',
));

$normalPanel->createOption(array(
  'name' => 'Заголовок страницы',
  'id' => 'contact-page-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок для страницы блога. Обратите внимание, это h1.',
  'default'=> 'Контакты',
));

$normalPanel->createOption(array(
  'name' => 'Изображение',
  'id' => 'contact-page-img',
  'type' => 'upload',
  'desc' => 'Установите изображение в шапку страницы. Рекомендуемый размер - 1920х400 пикс. Вес - как можно меньше.',
  'default' => '/wp-content/themes/gp-agency/img/demo/contact-img.jpg'
));

$normalPanel->createOption(array(
  'name' => 'Показать на карте',
  'id' => 'contact-page-map',
  'type' => 'textarea',
  'desc' => 'Разместите код Яндекс Карт или Google Maps. Рекомендуется установить ее ширину и высоту как width="800" и height="500". ',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Социальные сети',
  'id' => 'contact-page-socials-loc',
  'type' => 'enable',
  'default' => true,
  'desc' => 'Социальные сети на странице Контакты - вкл / выкл.',
));

$normalPanel->createOption(array(
  'name' => 'Призыв к действию',
  'type' => 'heading',
));

$normalPanel->createOption(array(
  'name' => 'Включить',
  'id' => 'contact-page-action-loc',
  'type' => 'enable',
  'default' => true,
  'desc' => 'Блок для сбора контактов в нижней части страницы - вкл / выкл.',
));

$normalPanel->createOption(array(
   'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
   'name' => 'Страница Спасибо',
   'id'=> 'thankyou-options',
));

$normalPanel->createOption(array(
  'type' => 'note',
  'desc' => 'Это страница, на которую тема редиректит посетителя после успешной отправки сообщения из форм сайта (призыв к действию, сбор контактов).',
));

$normalPanel->createOption(array(
  'name' => 'Адрес страницы',
  'id' => 'thankyou-url',
  'type' => 'text',
  'desc' => 'Создайте страницу Спасибо по инструкции, здесь разместите адрес данной страницы. Не забываем про http:// или https://',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Заголовок страницы',
  'id' => 'thankyou-title',
  'type' => 'text',
  'desc' => 'Разместите заголовок.',
  'default'=> 'Отправлено!',
));

$normalPanel->createOption(array(
  'name' => 'Текст',
  'id' => 'thankyou-text',
  'type' => 'editor',
  'desc' => 'Разместите текст.',
  'default' => '<p>Уважаемый посетитель, Ваше сообщение благополучно отправлено. Спасибо, что написали нам.  Через несколько минут менеджер перезвонит для уточнения деталей. Пока ожидаете звонок, посмотрите  последние новости в блоге отеля, чтобы узнать больше о месте, где можете провести несколько незабываемых дней!</p>',
));

$normalPanel->createOption(array(
  'name' => 'Что добавить',
  'id' => 'thankyou-additions-loc',
  'type' => 'radio',
  'desc' => 'Выберите, что выводить в нижней части страницы Спасибо:',
  'options' => array(
  '1' => 'Проекты, как на Главной странице',
  '2' => 'Четыре свежих записи из блога',
  '3' => 'Ссылки на социальные сети',
  ),
  'default' => '1',
));

$normalPanel->createOption(array(
	  'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => 'Блог, записи и страницы',
	'id'=> 'blog-options',
));

  $normalPanel->createOption(array(
	'type' => 'note',
	'desc' => 'Настройка элементов блога, записей и страниц сайта. Изменить цвет фона шапки в этих частях сайта можно в консоли темы, в разделе "Оформление".',
));

$normalPanel->createOption(array(
  'name' => 'Заголовок страницы блога',
  'id' => 'blog-title',
  'type' => 'text',
  'desc' => 'Разместите свой заголовок для страницы блога. Обратите внимание, это h1.',
  'default'=> 'Статьи и новости',
));

$normalPanel->createOption(array(
	'name' => 'Вид записей в блоге',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Вид записей',
	'id' => 'blog-type',
	'type' => 'radio',
	 'options' => array(
		 '1' => 'Вариант 1 - изображение и короткий анонс',
		 '2' => 'Вариант 2 - стандартный пост',
			),
	'default' => '1',
	'desc' => 'Выберите, как выводить записи в блоге и рубриках.'
));
	
$normalPanel->createOption(array(
	 'name' => 'Настройка записей',
	 'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Дата публикации',
	'id' => 'date-loc',
	'type' => 'enable',
	'desc' => 'Показывать дату публикации, вкл / выкл.',
	'default' => true,
 ));

$normalPanel->createOption(array(
	'name' => 'Изображение записи в блоге',
	'id' => 'blog-img-loc',
	'type' => 'enable',
	'desc' => 'Выводить Изображение в блоге и рубриках (если выбран вариант с картинкой и анонсом), вкл / выкл ',
	'default' => false,
));
	
$normalPanel->createOption(array(
	'name' => 'Изображение внутри записи',
	'id' => 'featured-img-loc',
	'type' => 'enable',
	'desc' => 'Выводить Изображение записи внутри поста, вкл / выкл ',
	'default' => false,
));
  
$normalPanel->createOption(array(
 'name' => 'Метки',
  'id' => 'tags-loc',
 'type' => 'enable',
 'desc' => 'Выводить блок с метками (тэгами) в нижней части записи, вкл / выкл ',
 'default' => false,
 ));

$normalPanel->createOption(array(
'name' => 'Обсуждение',
 'type' => 'heading',
));

$normalPanel->createOption(array(
 'name' => 'Комментарии в записях',
 'id' => 'com-post-loc',
 'type' => 'enable',
 'default' => true,
 'desc' => 'Выключить показ комментариев во всех записях',
 ));

$normalPanel->createOption(array(
 'name' => 'Комментарии на страницах',
 'id' => 'com-page-loc',
 'type' => 'enable',
 'default' => false,
 'desc' => 'Выключить показ комментариев на всех страницах сайта',
 ));

  $normalPanel->createOption(array(
 'name' => 'Спойлер для комментариев',
 'id' => 'com-spoiler-loc',
 'type' => 'radio',
 'desc' => 'Если комментарии включены, показывать их как есть или убрать в спойлер',
 'options' => array(
 '1' => 'Убрать в спойлер',
 '2' => 'Оставить как есть',
 ),
 'default' => '1',
  ));

$normalPanel->createOption(array(
	'name' => 'Кнопки Поделиться',
	'type' => 'heading',
));

$normalPanel->createOption(array(
 'name' => 'Включить',
 'id' => 'single-social-loc',
 'type' => 'enable',
 'desc' => 'Выводить блок c  кнопками "Поделиться" в записях, вкл / выкл ',
 'default' => true,
 ));

$normalPanel->createOption(array(
	'name' => 'Кнопки Поделиться',
	'id' => 'share-options',
	'type' => 'multicheck',
	'desc' => 'Выберите, какие кнопки желаете использовать. С их помощью посетитель сможет поделиться записью в социальных сетях и мессенджерах.',
	'options' => array(
		'wh' => 'WhatsApp',
		'vk' => 'ВКонтакте',
		'fb' => 'Facebook',
		'tg' => 'Telegram',
		'tw' => 'Twitter',
		'od' => 'Одноклассники',
		'vb' => 'Viber',
	  ),
	'default' => array( 'wh', 'fb', 'tg' )
));

$normalPanel->createOption(array(
  'name' => 'Призыв к действию',
  'type' => 'heading',
));

$normalPanel->createOption(array(
  'name' => 'Включить',
  'id' => 'blog-action-loc',
  'type' => 'enable',
  'default' => false,
  'desc' => 'Блок для сбора контактов в нижней части блога, записей и страниц - вкл / выкл.',
));

$normalPanel->createOption(array(
	'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
	'name' => 'Кнопка чата',
	'id'=> 'chat-options',
));

$normalPanel->createOption(array(
	'type' => 'note',
	'desc' => 'Настройки для установки онлайн-чата с посетителями при помощи одного из популярных мессенджеров.',
));

$normalPanel->createOption(array(
  'name' => 'Включить кнопку',
  'id' => 'chat-btn-loc',
  'type' => 'enable',
  'desc' => 'Кнопка для чата в правом нижнем углу окна браузера, вкл / выкл ',
  'default' => false,
));
	 
  
$normalPanel->createOption(array(
	'name' => 'Выбрать мессенджер',
	'id' => 'chat-type',
	'type' => 'radio',
	'desc' => 'Выберите, в каком мессенджере желаете общаться:',
	'options' => array(
	'WhatsApp' => 'WhatsApp',
	'Viber' => 'Viber',
	'Telegram' => 'Telegram'
	),
	'default' => 'WhatsApp',
));

$normalPanel->createOption(array(
  'name' => 'Если выбран WhatsApp или Viber',
  'type' => 'heading',
));

$normalPanel->createOption( array(
  'name' => 'Номер телефона',
  'id' => 'chat-phone',
  'type' => 'text',
  'desc' => 'Впишите номер вашего моб. телефона чата WhatsApp или Viber, в который перейдет посетитель по клику на кнопку. В международном формате, без +. Например, 7 123 4567890',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Если выбран Telegram',
  'type' => 'heading',
));

$normalPanel->createOption( array(
  'name' => 'Имя пользователя для чата Telegram',
  'id' => 'chat-telegram',
  'type' => 'text',
  'desc' => 'Впишите ваше имя пользователя в Telegram для чата, в который перейдет посетитель по клику на кнопку. Без знака @. Где взять имя пользователя - см инструкцию к теме.',
  'default' => '',
));

$normalPanel->createOption(array(
  'name' => 'Кнопка',
  'type' => 'heading',
));

$normalPanel->createOption( array(
  'name' => 'Как Вас зовут',
  'id' => 'chat-operator',
  'type' => 'text',
  'desc' => 'Укажите, как Вас зовут, чтобы пользователь знал, с кем говорит.',
  'default' => 'Имя Фамилия',
));

$normalPanel->createOption(array(
  'name' => 'Фото или аватар',
  'id' => 'chat-img',
  'type' => 'upload',
  'desc' => 'Установите изображение для вывода на кнопке. Рекомендуемый размер - 60х60 пикс. Либо просто квадратная форма, чтобы тема могла его закруглить.',
  'default' => '/wp-content/themes/gp-agency/img/demo/chat-img.jpg'
));

$normalPanel->createOption( array(
  'name' => 'Текст на кнопке',
  'id' => 'chat-btn-text',
  'type' => 'text',
  'desc' => 'Укажите короткий текст, буквально 1-2 слова. Например, "Нужна помощь?" или "Задать вопрос" или "Консультация" и т.п. ',
  'default' => 'Нужна помощь?',
));

$normalPanel->createOption(array(
  'name' => 'Время работы кнопки',
  'type' => 'heading',
));

$normalPanel->createOption( array(
  'name' => 'Во сколько включать кнопку на сайте',
  'id' => 'chat-shedule-start',
  'type' => 'select',
  'desc' => 'Укажите, в какое время включать кнопку на сайте. ',
  'options' => array(
  '01:00' => '01:00',
  '02:00' => '02:00',
  '03:00' => '03:00',
  '04:00' => '04:00',
  '05:00' => '05:00',
  '06:00' => '06:00',
  '07:00' => '07:00',
  '08:00' => '08:00',
  '09:00' => '09:00',
  '10:00' => '10:00',
  '11:00' => '11:00',
  '12:00' => '12:00',
  '13:00' => '13:00',
  '14:00' => '14:00',
  '15:00' => '15:00',
  '16:00' => '16:00',
  '17:00' => '17:00',
  '18:00' => '18:00',
  '19:00' => '19:00',
  '20:00' => '20:00',
  '21:00' => '21:00',
  '22:00' => '22:00',
  '23:00' => '23:00',
  '00:00' => '00:00',
  ),
  'default' => '09:00',
));

$normalPanel->createOption( array(
  'name' => 'Во сколько выключать',
  'id' => 'chat-shedule-end',
  'type' => 'select',
  'desc' => 'Укажите, в какое время выключать - чтобы вас не беспокоили в нерабочее время. ',
  'options' => array(
   '00:59' => '01:00',
   '01:59' => '02:00',
   '02:59' => '03:00',
   '03:59' => '04:00',
   '04:59' => '05:00',
   '05:59' => '06:00',
   '06:59' => '07:00',
   '07:59' => '08:00',
   '08:59' => '09:00',
   '09:59' => '10:00',
   '10:59' => '11:00',
   '11:59' => '12:00',
   '12:59' => '13:00',
   '13:59' => '14:00',
   '14:59' => '15:00',
   '15:59' => '16:00',
   '16:59' => '17:00',
   '17:59' => '18:00',
   '18:59' => '19:00',
   '19:59' => '20:00',
   '20:59' => '21:00',
   '21:59' => '22:00',
   '22:59' => '23:00',
   '23:59' => '00:00',
   ),
   'default' => '22:00',
));

$normalPanel->createOption(array(
	'type' => 'save',
));

$normalPanel = $adminPanel->createAdminPanel(array(
  'name' => 'Оформление',
  'id'=> 'style-options',
));

$normalPanel->createOption(array(
	'type' => 'note',
	'desc' => 'Здесь вы можете изменить цвета шаблона, задать свои. Если же вам нравится оформление, которые вы видели на демо-сайте, просто нажмите на кнопку сохранения настроек внизу этой страницы. Подробнее об оформлении см инструкцию, которая приложена к теме.',
));

$normalPanel->createOption(array(
	'name' => 'Браузер',
	'type' => 'heading',
));

$normalPanel->createOption(array(
  'name' => 'Цвет темы браузера',
  'id' => 'browser',
  'type' => 'color',
  'desc' => 'Цвет темы браузера, в котором просматривается сайт (функция поддерживается еще не во всех браузерах и не на всех устройствах!).',
  'default' => '#7C83FD',
));

$normalPanel->createOption(array(
'name' => 'Общие',
'type' => 'heading',
));

$normalPanel->createOption(array(
  'name' => 'Тексты сайта: цвет шрифта',
  'id' => 'body-col',
  'type' => 'color',
  'desc' => 'Цвет шрифта текстов сайта',
  'default' => '#2b3846',
));

$normalPanel->createOption(array(
  'name' => 'Ссылки: цвет шрифта',
  'id' => 'alink',
  'type' => 'color',
  'desc' => 'Цвет шрифта ссылки в тексте.',
  'default' => '#2b3846',
));

$normalPanel->createOption(array(
  'name' => 'Ссылки при наведении мыши: цвет шрифта',
  'id' => 'ahover',
  'type' => 'color',
  'desc' => 'Цвет шрифта ссылки при наведении мыши (hover).',
  'default' => '#7C83FD',
));

$normalPanel->createOption(array(
	'name' => 'Меню',
	'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Выпадающее меню',
	'id' => 'nav-drop-bg',
	'type' => 'color',
	'desc' => 'Цвет фона выпадающего меню (дочерние пункты)',
	'default' => '#2b3846',
));

$normalPanel->createOption(array(
  'name' => 'Цвет шрифта выпадающего меню ',
  'id' => 'nav-drop-col',
  'type' => 'color',
  'desc' => 'Цвет шрифта пункта меню при наведении мыши (hover) в выпадающем (дочернем) меню',
  'default' => '#ffffff',
));

$normalPanel->createOption(array(
'name' => 'Кнопки сайта',
'type' => 'heading',
));

$normalPanel->createOption(array(
	'name' => 'Текст кнопки при наведении мыши',
	'id' => 'btn-col-hov',
	'type' => 'color',
	'desc' => 'Цвет шрифта в тексте кнопки.',
	'default' => '#ffffff',
));
 
$normalPanel->createOption(array(
	'name' => 'Фон при наведении мыши',
	'id' => 'btn-bg-hov',
	'type' => 'color',
	'desc' => 'Цвет фона кнопки при наведении мыши.',
	'default' => '#7C83FD',
));

$normalPanel->createOption(array(
  'name' => 'Услуги',
  'type' => 'heading',
));

$normalPanel->createOption(array(
  'name' => 'Иконки - фон',
  'id' => 'service-icons-bg',
  'type' => 'color',
  'desc' => 'Цвет фона иконок в табах на странице Услуги.',
  'default' => '#2b3846',
));

$normalPanel->createOption(array(
  'name' => 'Иконки - фон активного таба',
  'id' => 'service-icons-bg-hov',
  'type' => 'color',
  'desc' => 'Цвет фона активных иконок.',
  'default' => '#3db2ff',
));

$normalPanel->createOption(array(
  'name' => 'Пошаговый процесс - фон',
  'id' => 'service-steps-bg',
  'type' => 'color',
  'desc' => 'Цвет фона порядковых номеров в пошаговом процессе на странице Услуги.',
  'default' => '#fa8072',
));


$normalPanel->createOption(array(
  'name' => 'Блог, записи и страницы',
  'type' => 'heading',
));

$normalPanel->createOption(array(
  'name' => 'Цвет фона шапки',
  'id' => 'inner-pages-head-bg',
  'type' => 'color',
  'desc' => 'Цвет фона шапки блога, записей и страниц .',
  'default' => '#2b3846',
));

$normalPanel->createOption(array(
	'name' => 'Подвал',
	'type' => 'heading',
));
 
$normalPanel->createOption(array(
	'name' => 'Цвет фона',
	'id' => 'footer-bg',
	'type' => 'color',
	'desc' => 'Цвет фона подвала сайта.',
	'default' => '#2b3846',
));

$normalPanel->createOption(array(
  'name' => 'Цвет шрифта',
  'id' => 'footer-col',
  'type' => 'color',
  'desc' => 'Цвет текста и ссылок в подвале.',
  'default' => '#ffffff',
));

$normalPanel->createOption(array(
	'type' => 'save',
));

} // end
 

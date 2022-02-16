<?php 
// микроразметка schema 
$titan = TitanFramework::getInstance( 'agency' );

$imageID = $titan->getOption( 'favicon' ); // id иконки
$profile_phone1 = $titan->getOption('profile-phone-1'); // номер телефона
$profile_city = $titan->getOption('profile-city'); // населенный пункт
?>

<meta itemprop="headline" content="<?php the_title(); ?>">
<meta itemprop="url" content="<?php echo get_permalink(); ?>">
<meta itemprop="author" content="<?php bloginfo('name'); ?>">
<meta itemprop="datePublished" content="<?php the_time( 'c' ); ?>">
<meta itemprop="dateModified" content="<?php the_time('Y-m-d')?>">
<link itemscope itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" href="<?php echo get_permalink(); ?>">
<?php microdata_img(); ?>
<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<div itemprop="logo" itemscope  itemtype="https://schema.org/ImageObject">
<?php $imageSrc = $imageID;  
if ( is_numeric( $imageID ) ) { 
$imageAttachment = wp_get_attachment_image_src( $imageID, $size = 'full', $icon = false ); 
$imageSrc = $imageAttachment[0];
} ?>
<link itemprop="url image" href="<?php echo esc_url( $imageSrc ); ?>">
<meta itemprop="width" content="192">
<meta itemprop="height" content="192">
</div>
<meta itemprop="name" content="<?php bloginfo('name'); ?>">
<meta itemprop="telephone" content="<?php echo $profile_phone1; ?>">
<meta itemprop="address" content="<?php echo $profile_city; ?>">	
</div>
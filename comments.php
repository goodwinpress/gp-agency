<?php
// шаблон коммнтариев
$titan = TitanFramework::getInstance( 'agency' );  

$policy_url = $titan->getOption( 'policy-url-default' ); // ссылка на политику конфиденциальности
$policy_anchor = __('Я даю согласие на сбор и обработку персональных данных', 'gp-agency'); // ссылка на политику конфиденциальности
$policy_name = __('Политика конфиденциальности', 'gp-agency'); // ссылка на политику конфиденциальности

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-box gp-clearfix"> 
	
	<?php if ( have_comments() ) : ?>
	<span class="comment-title"> <?php _e('Обсуждение:', 'gp-agency'); ?> <?php comments_number('' . __('пока нет комментариев', 'gp-agency') . '','' . __('1 комментарий', 'gp-agency') . '','' . __('% коммент.', 'gp-agency') . '' );?></span>
	
	<ol class="commentlist">
		<?php
		wp_list_comments( array(
			'style'       => 'ol',
			'short_ping'  => false,
			'avatar_size' =>  50,
			'callback' => 'comment_atts'
		) );
		?>
	</ol> 
	<?php endif; ?>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
		<div class="navigation gp-clearfix" role="navigation">
		<div class="nav-previous"><?php previous_comments_link( __( 'Предыдущие комментарии', 'gp-agency' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Новые комментарии', 'gp-agency' ) ); ?></div>
		</div><!-- end navigation -->
	<?php endif; ?>

	<?php
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	<p><?php _e('Комментирование закрыто', 'gp-agency'); ?></p> 
	<?php endif; ?>

	<div class="gp-comment-form gp-clearfix">
		
		<?php
		// подключаем согласие на сбор персональных данных
		if ($titan->getOption( 'agree-loc' ) == '1') { 
		
			$args = array( 
			'title_reply' => ''. __('Оставить комментарий', 'gp-agency') . '',
			'label_submit' => ''. __('Отправить', 'gp-agency') . '',
			'comment_notes_after' => '<p class="gp-notice"><input type="radio"   id="comments-checkbox" checked>' . $policy_anchor . '  <a href="' . $policy_url . '">' . $policy_name . '</a>.</p> ',
			);
		
		} else {
		
			$args = array( 
			'title_reply' => ''. __('Оставить комментарий', 'gp-agency') . '',
			'label_submit' => ''. __('Отправить', 'gp-agency') . '',
			);
		}	
			comment_form( $args );
		?>
	
	</div><!-- end  gp-comment-form -->
</div> <!-- end comments-box -->
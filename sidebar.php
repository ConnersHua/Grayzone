<?php 
	$sidebar = grayzone_sidebar_primary();
	$layout = grayzone_layout_class();
	if ( $layout != 'col-1c'):
?>

	<div class="sidebar s1">
		
		<div class="sidebar-content">
			
			<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
				<div id="profile" class="group">
					<div id="profile-inner">
						<?php if ( get_theme_mod('profile-image') ): ?>
							<div id="profile-image"><img src="<?php echo esc_html( get_theme_mod('profile-image') ); ?>" alt="" /></div>
						<?php endif; ?>
						<?php if ( get_theme_mod('profile-name') ): ?>
							<div id="profile-name"><?php echo esc_html( get_theme_mod('profile-name') ); ?></div>
						<?php endif; ?>
						<?php if ( get_theme_mod('profile-description') ): ?>
							<div id="profile-description"><?php echo wp_kses_post( get_theme_mod('profile-description') ); ?></div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if( is_page_template('page-templates/child-menu.php') ): ?>
				<ul class="child-menu group">
					<?php wp_list_pages('title_li=&sort_column=menu_order&depth=3'); ?>
				</ul>
			<?php endif; ?>

			<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'sidebar' ) { get_template_part('inc/post-nav'); } ?>
			
			<?php dynamic_sidebar($sidebar); ?>
			
		</div><!--/.sidebar-content-->
		
	</div><!--/.sidebar-->
	
<?php endif; ?>
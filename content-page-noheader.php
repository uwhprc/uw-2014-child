
<?php
  $sidebar = get_post_meta($post->ID, "sidebar");
?>
<?php if(uw_list_pages()){ ?>
	<?php
		if($sidebar[0]!="on"){ ?>
		<div id="mobile-sidebar">
			<button id="mobile-sidebar-menu" class="visible-xs" aria-hidden="true" tabindex="1">
					<div aria-hidden="true" id="ham">
						<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
					<div id="mobile-sidebar-title" class="page_item">
					<?php echo text_cut(); ?>
					</div>
			</button>
			<div id="mobile-sidebar-links" aria-hidden="true" class="visible-xs">  <?php uw_sidebar_menu(); ?></div>
		</div>
	<?php } ?>
<?php } ?>

<?php the_content(); ?>

</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer bg-black py-12 text-white" role="contentinfo">
	<?php do_action('tailpress_footer'); ?>

	<div class="flex flex-col md:flex-row md:mx-12">
		<div class="flex flex-col p-5">
			<?php dynamic_sidebar('footer-widget-1'); ?>
		</div>
		<div class="flex flex-1 flex-col p-5">
			<?php dynamic_sidebar('footer-widget-2'); ?>
		</div>
		<div class="flex flex-1 flex-col p-5">
			<?php dynamic_sidebar('footer-widget-3'); ?>
		</div>
		<div class="flex flex-1 flex-col p-5">
			<?php dynamic_sidebar('footer-widget-4'); ?>
		</div>
	</div>

	<div class="container my-4 mx-auto text-center text-gray-500">
		&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
	</div>
</footer>
</div>

<?php wp_footer(); ?>
	
</body>

</html>
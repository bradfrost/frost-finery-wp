</main>
<footer class="footer" role="contentinfo">
	<div class="lc">
		<?php include (TEMPLATEPATH . '/includes/newsletter.php');  ?>
		<?php include (TEMPLATEPATH . '/includes/social.php');  ?>
	</div>
	
	<div class="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
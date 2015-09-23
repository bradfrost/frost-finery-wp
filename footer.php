</main>
<footer class="footer" role="contentinfo">
	<div class="lc">
		<?php include (TEMPLATEPATH . '/includes/next-event-footer.php');  ?>
		<?php include (TEMPLATEPATH . '/includes/social.php');  ?>
		<?php include (TEMPLATEPATH . '/includes/newsletter.php');  ?>
	</div>
	
	<nav id="footer-nav" class="footer-nav">
		<?php wp_nav_menu( array('menu' => 'primary') ); ?>
	</nav>
	
	<div class="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></div>
</footer>

<?php wp_footer(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/production.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56531114-1', 'auto');
  ga('send', 'pageview');

</script>
<!--Hello, how are you?-->
</body>
</html>
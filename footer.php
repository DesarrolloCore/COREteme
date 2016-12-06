<div class="clearfix"></div>
<footer class="wrapper padding-all" style="margin-top: 30px;">
    <div class="col-xs-9 col-sm-6">
    	<ul class="social-icons nav-default pull-right clearfix">
            <li><a href="https://www.facebook.com/royaltest7/" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
        </ul>
        &copy; <?=date('Y');?>. Derechos Reservados
    </div>
    <div class="col-xs-3 col-sm-6">
    	<a href="http://www.gmk.mx/">
        	<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/Hecho-por.png" width="102" height="32" alt="" style="float:right;"/>
        </a>
     </div>
</footer>
<?php wp_footer(); ?>

<?php include_once("get_msg.php"); ?>
<script src="<?php echo get_bloginfo('stylesheet_directory') ?>/js/jquery.stellar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
<script src="<?php echo get_bloginfo('stylesheet_directory') ?>/js/scripts.js"></script>
</body>
</html>
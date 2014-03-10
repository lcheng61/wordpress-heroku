function biscuits_enqueue() {
	 wp_enqueue_script( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js', array( 'jquery') );
	 wp_enqueue_script( 'jquery-easing', get_template_directory_uri(). '/js/jquery.easing.1.3.js', array( 'jquery' ) );
	 wp_enqueue_script( 'jquery-mobile', get_template_directory_uri(). '/js/jquery.mobile.customized.min.js', array( 'jquery' ) ); 
	 wp_enqueue_script( 'camera', get_template_directory_uri(). '/js/camera.js', array( 'jquery' ) );
	 wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/js/bootstrap.js', array( 'jquery' ) );
	 wp_enqueue_script( 'superfish', get_template_directory_uri(). '/js/superfish.js', array( 'jquery' ) );
	 wp_enqueue_script( 'jquery-prettyPhoto', get_template_directory_uri(). '/js/jquery.prettyPhoto.js', array( 'jquery' ) );
	 wp_enqueue_script( 'jquery-ui-to-top', get_template_directory_uri(). '/js/jquery.ui.totop.js', array( 'jquery' ) ); 
	 wp_enqueue_script( 'custom', get_template_directory_uri(). '/js/custom.js', array( 'jquery' ) );
	 wp_enqueue_script( 'jquery-jcarousel', get_template_directory_uri(). '/js/jquery.jcarousel.js', array( 'jquery' ) );
	 wp_enqueue_script( 'jquery-tweet', get_template_directory_uri(). '/js/jquery.tweet.js', array( 'jquery' ) );
	 wp_enqueue_script( 'myscript', get_template_directory_uri(). '/js/myscript.js', array( 'jquery' ) );
}
add_action('wp_footer', 'biscuits_enqueue');

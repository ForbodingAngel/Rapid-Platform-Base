<?php

class Simple_Customize_Controller extends WP_Customize_Control {
	public $type = 'controller';

	public function render_content() {
		require_once( dirname( __FILE__ ) . '/customizer-html.php' );
	}
}
<?php

if(!class_exists('Mailin')){
	require(EE_SIB_CF7_PATH . '/mailin-api-php/V2.0/Mailin.php');
}

if(!class_exists('SendinBlue_CF7')){
	class SendinBlue_CF7{
		private $api_key = false;

	    function __construct() {
	        if(defined('SEND_IN_BLUE_KEY')){
	        	$this->api_key = SEND_IN_BLUE_KEY;
	        }
	    }

	    public function activate(){

	    }

	    public function init(){
	    	if($this->api_key){
	    		add_filter( 'wpcf7_posted_data', array( $this, 'cf7_filter' ),10, 1 );
	    	}

	    	if(!defined( 'WPCF7_VERSION' )){
	    		add_action( 'admin_notices', array($this, 'cf7_disabled_notice'));
	    	}
	    }

	    public function cf7_disabled_notice(){
			if ( ! current_user_can( 'activate_plugins' ) ) {
				return;
			}

			echo '<div class="error">';
			echo '<p>';
			_e( 'The SendinBlue Opt-in checkbox for Contact Form 7 plugin requires Contact Form 7', 'sendinblue_cf7_opt_in' );
			echo '</p>';
			echo '</div>';	    	
	    }

	    public function cf7_filter($posted_data){
		  if($posted_data['sendinblue-opt-in'][0] && $posted_data['sendinblue-list-id']){
		    $mailin = new Mailin('https://api.sendinblue.com/v2.0',SEND_IN_BLUE_KEY); 

		    $data = array(
		      "email" => $posted_data['your-email'],
		      'listid' => array($posted_data['list_id'])
		      );

		    if($posted_data['your-name']){
		        $data['attributes'] = array('NAME' => $posted_data['your-name']);
		    }
		    $mailin->create_update_user($data);        
		  }	    	
			return $posted_data; 
	    }		
	}
}
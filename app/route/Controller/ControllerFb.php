<?php
namespace app\route\Controller;


class ControllerFb {

	protected $_GaapiId;
	protected $_GappSect;
	protected $_Version;
 
	public function __construct() {
	
	$this->_GaapiId = getenv("GaapiId");
	$this->_GappSect= getenv("GappSect");
	$this->_Version = 'v2.8';  

	}


	public function get_api($req, $res, $args) {

		$rest = $this->fb_api($args['id']);
		
	return $res->withHeader('Content-type', 'application/json')->getBody()->write(json_encode($rest));
	}


	private function fb_api($idUser	) {
			
		$fb = new \Facebook\Facebook([
		'app_id' => $this->_GaapiId,
		'app_secret' =>  $this->_GappSect,
		'default_graph_version' => $this->_Version,
		'default_access_token' => $this->_GaapiId."|".$this->_GappSect 
		]);

		try {  
		 	$response = $fb->get('/'.$idUser);
			} 
		catch(\Facebook\Exceptions\FacebookResponseException $e) {
			return array("error "=> "Graph Error ".$e->getMessage());
		exit;
		} 
		catch(\Facebook\Exceptions\FacebookSDKException $e) {
			return array("error "=> "SDK Error ". $e->getMessage());
		exit;
		}
		
	return $response->getDecodedBody();

	}

	
}
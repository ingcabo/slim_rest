<?php



use App\Model\api_graph_model;


$app->group('/slim/', function () {


 	
   
   

    
     $this->get('graph/{id}', function ($req, $res, $args) {
      
        $um = new api_graph_model();
        $conf_field = $um->GetAll(PDO::FETCH_ASSOC);

 	   $token     = $conf_field->result[0]->token;
 	   $app_id	  = $conf_field->result[0]->app_id;
 	   $appSecret = $conf_field->result[0]->app_secret;
 	   $version	  = $conf_field->result[0]->default_graph_version;
 	   $idUser	  =$args['id'];

 	 

      
		

		 
    	   $restr = fb_api($token,$app_id,$appSecret,$version,$idUser);
 	  //   $restr= fb_graph($idUser,$token);

        return $res->withHeader('Content-type', 'application/json')->getBody()->write(json_encode($restr));
    
    });



     //esta es la funcion dode uso el Api y recive algunos parametros 
     function fb_api($token,$app_id,$appSecret,$version,$idUser){

     	$fb = new \Facebook\Facebook([
		  'app_id' => $app_id,
		  'app_secret' =>  $appSecret,
		  'default_graph_version' => $version,
		  'default_access_token' => $token, 
		]);



		try {
		  
		  $response = $fb->get('/'.$idUser);

		} catch(\Facebook\Exceptions\FacebookResponseException $e) {
		  
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(\Facebook\Exceptions\FacebookSDKException $e) {
		 
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}

			return json_decode($response->getGraphUser());


     } 


    




     //funcion que consulta la pagina graph del id de usuario
    	function fb_graph($idUser,$token){



				$data = json_decode(file_get_contents('https://graph.facebook.com/v2.8/'.$idUser.'?access_token='.$token));

				 return $data;


}






});


?>
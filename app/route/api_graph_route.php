<?php
// ******************************* INFORMATION ***************************//

// ***********************************************************************//
//  
// ** api_graph_route - Contains the route to access, Using the namespace to access the ControllerFb class with its get_api . 
// ** 
// ** @author   Carlos Ramirez <ingcabo@gmail.com>
// ** @date 	13-01-2017
// ** @access   Pubilc
// ** @param    Just receive facebook user "id" in the last url segment
// ** @return   Returns a json with the user's public data in the body 
//      
// ***********************************************************************//

// ********************************** START ******************************// 
$app->group('/slim', function () {

$vez=  $this->get('/[{id}]', 'app\route\Controller\ControllerFb:get_api');

});


?>
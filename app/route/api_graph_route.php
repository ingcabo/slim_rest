<?php

$app->group('/slim', function () {

$vez=  $this->get('/[{id}]', 'app\route\Controller\ControllerFb:get_api');

});


?>
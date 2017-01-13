slim_rest

Test Aivo

1) After download the project, Rename the project folder to "slim_rest".

2) You must create two environment variables in your operating system, With the credentials values for app_secret and app_id for your 	 facebook Api
	a) GaapiId
	b) GappSect

3) Route for test Aivo (Here are the functions to consume) slim_rest\app\route\api_graph_route.php

New controlller in the route that contains the method of calling the facebook api
slim_rest/app/route/Controller/ControllerFb.php

You should access the service by the following url, Idaparam(int)=numbre of Facebook User Id

http://localhost/slim_rest/public/slim/Idaparam

Thank you...

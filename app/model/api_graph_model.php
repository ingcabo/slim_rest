<?php

namespace App\Model;

use App\Lib\Database;
use App\Lib\Response;

class api_graph_Model
{
    private $db;
    private $table = 'conf';
    private $response;
    
    public function __CONSTRUCT()
    {
        $this->db = Database::StartUp();
        $this->response = new Response();
    }



    // consulto todos las filas de una tabla
     public function GetAll()
    {
		try
		{
			$result = array();

			$stm = $this->db->prepare("SELECT * FROM   ".$this->table);
			$stm->execute();
            
			$this->response->setResponse(true);
            $this->response->result = $stm->fetchAll();
            
            return $this->response;
		}
		catch(Exception $e)
		{
			$this->response->setResponse(false, $e->getMessage());
            return $this->response;
		}
    }
    




}



?>
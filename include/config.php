<?php

require_once 'db_connect.php';
class functions extends db_connect {
   
    public function data_insert($sql)
    {
        $result= $this->mysqli->query($sql) or die($this->mysqli->error);
        return $result;
    }
    
    public function data_select($sql)
    { 
			$data= array();
            $select=$this->mysqli->query($sql) or die($this->mysqli->error);      
            if($select->num_rows==0){
               return 'no';
            }  else {
				
               while ($row = $select->fetch_array(MYSQLI_ASSOC)) {
              array_push($data,$row);
				               }
			
               return $data;
            }
        
    }
	public function data_update($sql)
    {
        $result= $this->mysqli->query($sql) or die($this->mysqli->error);
        return $result;
    }
	
	public function data_insert_multiple($sql)
    {
        $result= $this->mysqli->multi_query($sql) or die($this->mysqli->error);
        return $result;
    }
	
	
	 public function data_insert_get_inserted_id($sql)
    {
		
     	$result= $this->mysqli->query($sql) or die($this->mysqli->error);
		return $id=$this->mysqli->insert_id;
      	//return $this->mysqli->insert_id($sql); // $mysqli->insert_id;
    }
	
}


?>

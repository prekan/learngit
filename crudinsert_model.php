<?php
class Insert_model extends CI_Model{
	
function __construct() {
parent::__construct();
}

    function insertrecord($data)
    {

       // Inserting in Table(users) of Database(codeigniter)
       $this->db->insert('users', $data);

    }


    function displayrecords()
	{
	   $query=$this->db->query("select * from users");
	   return $query->result();
	
	}
    
	
	function updaterecords($data)
	{   
        $query=$this->db->replace('users', $data);
           // redirect('/select_ctrl/selectdata');
          // header('location:selectdata');

           
        if ($query) {
        	
		        echo "record updated successfully";
	        }
	
	        else{
		        echo "Record Updated Successfully"    ;
	        }
        
	}
		 
		 
	function deleterecords($data)
	{
	    $hello=$this->db->delete('users',$data);
	    echo " Record Deleted Successfully";
    }



}

?>
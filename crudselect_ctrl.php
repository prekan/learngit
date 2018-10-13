<?php

/**
* 
*/
class Select_ctrl extends CI_controller
{
	
	// function index()
	// {   
	// 	$this->load->view('Uds_view');
	// }
	function selectdata(){
	    $this->load->model('insert_model');
		$result['datap']=$this->insert_model->displayrecords();
        $this->load->view("Uds_view",$result);


	}
	function pre()
    {
        $id=$this->input->post('id');
		$name=$this->input->post('name');     
        $email=$this->input->post('email');      //get input fields
        $mobile=$this->input->post('mobile');
          
              $data=array(
              	  'id'=>$id,
                  'name'=>$name,
                  'email'=>$email,      
                  'mobile'=>$mobile , 

              );
              // print_r($data);exit();
             
    	        
            // $this->input->post('#update'); 
            $this->load->model('insert_model');
            $this->insert_model->updaterecords($data);
            


        }
        // print_r(expression)

    function delete()
    {
        
        $id=$this->input->post('id');
		$name=$this->input->post('name');     
        $email=$this->input->post('email');      //get input fields
        $mobile=$this->input->post('mobile');
          
              $data=array(
              	  'id'=>$id,
                  'name'=>$name,
                  'email'=>$email,      
                  'mobile'=>$mobile , 

              );
              
        $this->load->model('insert_model');
        $this->insert_model->deleterecords($data);
    }
	
	
}


?>
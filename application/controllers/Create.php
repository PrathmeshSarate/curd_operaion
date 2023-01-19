<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller 
{
    public function new()
	{
		$this->load->view('create');
	}

    
    function savingdata()
    {
        $data['mac'] = $this->input->post('mac');
        $data['name'] = $this->input->post('name');
        $data['ip'] = $this->input->post('ip');
        $data['landitude'] =$this->input->post('land');
        $data['longitude'] = $this->input->post('long');

        $response=$this->GetData->saverecords($data);

        if($response==true){
            redirect(base_url());
        }
        else{
            echo "Insert error !";
        }       

    }  

    public function updatedata($id)
	{
        $result['data']=$this->GetData->displayrecordsById($id);  
        $this->load->view('edit',$result);

        if($this->input->post('update'))
        {
            ?>
            <script>
                alert('SUCCESS');
            </script>
            <?php
            $name = $this->input->post('name');
            $landitude =$this->input->post('land');
            $longitude = $this->input->post('long');

            $response=$this->GetData->update_records($name,$landitude,$longitude,$id);
            
        if($response==true){
            ?>
            <!-- <script>
                alert('SUCCESS');
            </script> -->
            <?php
        }
        else{
            echo "Insert error !";
        }       

        }

    }
    

    function delete(){
        $result_set['data']=$this->GetData->all();
    	// $this->load->view('index',$result_set);
        $this->load->view('delete',$result_set);
    }

    function deletedata($id){
     
    $response=$this->GetData->deleterecords($id);
    if($response==true){
        ?>
        <script>
            alert('Data deleted successfully !');
        </script>

        <?php
        echo "Data deleted successfully !";
    }
    else{
        echo "Error !";
    }
    }

}

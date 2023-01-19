<?php
class GetData extends CI_Model
{
    public function __construct()
    {
        parent::__construct();        
        $this->db = $this->load->database('default',TRUE);
    }

    
    public function all()
    {
        $result_set=$this->db->get("user");
        return $result_set->result();
    }

    function saverecords($data)
	{
        $this->db->insert('user',$data);
        return true;
	}

    function displayrecordsById($id)
	{
        $query=$this->db->query("select * from user where id='".$id."'");
        return $query->result();
	}


    function update_records($name,$landitude,$longitude,$id){
        $query= $this->db->query("update form SET name='$name',landitude='$landitude',longitude='$longitude' where id='$id'");        
    }

    function deleterecords($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("user");
        return true;

    }
}
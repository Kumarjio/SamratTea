<?php

class companymodel extends CI_Model {

    /**
     * returns a list of articles
     * @return array 
     */
    public function companylist() {
        $this->db->select('*');
        $this->db->from('company');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $rows) {
                $data[] = $rows;
            }
            return $data;
        } else {
            return false;
        }
    }

    public function getCompanyNameById($id) {
        $sql = "SELECT company_name FROM company WHERE id=".$id;
        $query = $this->db->query($sql);
		$row = $query->row();
        return $row->company_name;
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->company_name;
        }else{
            return '';
        }
    }
    
      public function getCompanyAddressById($id = '') {
        $sql = "SELECT location FROM company WHERE id='" . $id . "'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->location;
        }else{
            return '';
        }
    }
    
    /**
     * result foe fetch data
     */    
    
      public function getCompanyById($id = '') {
        $sql = "SELECT * FROM company WHERE id='" . $id . "'";
		$query = $this->db->query($sql);
		//echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        }else{
            return '';
        }
    }
    
	public function getCompanyByIdForCSV($id)
	{
		//$sql = "SELECT * FROM company WHERE id='" . $id . "'";
		$sql = "SELECT * FROM company INNER JOIN state_master ON state_master.`id`=company.`state_id`
				WHERE company.`id`=".$id;
		
        $query = $this->db->query($sql);
		//echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        }else{
            return '';
        }
	}
	
      public function getStates()
	{
		$sql = "SELECT * FROM `state_master` ORDER BY state_name ASC ";
		$query = $this->db->query($sql);
		return ($query->result());
	}

    public function insertData($CompanyMaster){
         try {
            $this->db->trans_begin();
            $this->db->insert('company', $CompanyMaster);
            // echo($this->db->last_query());exit;

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                return false;
            } else {
                $this->db->trans_commit();
                return true;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }    
    
    public function UpdateData($CompanyMaster,$CompanyId){
		$compId = $CompanyId;
		
		$compny_arry = array(
			'company_name' => $CompanyMaster['company_name'],
            'location' =>   $CompanyMaster['location'],
            'vat_number' => $CompanyMaster['vat_number'],
            'cst_number' => $CompanyMaster['cst_number'],
            'gst_number' => $CompanyMaster['gst_number'],
            'state_id' =>   $CompanyMaster['state_id'],
            'pan_number' => $CompanyMaster['pan_number'],
            'pin_number' => $CompanyMaster['pin_number'],
            'bill_tag' => $CompanyMaster['bill_tag']           
		
		);
		
		
		
        try{
             $this->db->where('id', $compId);
			 $this->db->update('company', $compny_arry);
		
			if($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                return false;
            } 
			else{
                $this->db->trans_commit();
                return true;
            }
        }
		catch(Exception $exc){
            echo $exc->getTraceAsString();
        }
    }   
  
	public function get_bill_tag($cid)
	{
		$sql="select bill_tag from company where id=".$cid."";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row;
        }else{
            return '';
        }
	}
	
	
	
}

?>
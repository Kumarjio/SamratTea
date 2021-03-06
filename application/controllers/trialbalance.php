<?php

//we need to call PHP's session object to access it through CI
class trialbalance extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('trialbalancemodel', '', TRUE);
        $this->load->model('companymodel', '', TRUE);
		$this->load->model('trialbalancedetailmodel', '', TRUE);
        
 }

    public function index() {

        if ($this->session->userdata('logged_in')) {

            $session = sessiondata_method();
            $result='';
            $headercontent='';
			
			$yearid = $session['yearid'];
			$fiscalStartDt = $this->trialbalancedetailmodel->getFiscalStartDt($yearid);
			$result['fiscalStartDt'] = $fiscalStartDt;
			
            $page = 'trial_balance/header_view';
            $header = '';
            createbody_method($result, $page, $header, $session, $headercontent);
        
           
        } else {
            redirect('login', 'refresh');
        }
    }

   
    
  public function pdfTrialBalance(){
        
      $session =  sessiondata_method();
         if ($this->session->userdata('logged_in')) {
          
          $companyId = $session['company'];
          $yearid = $session['yearid'];
    
          
         $this->load->library('pdf');
         $pdf = $this->pdf->load();
         ini_set('memory_limit', '256M'); 
          
          
        $fromdate = $this->input->post('fromdate');
        $todate = $this->input->post('todate');
        $frmDate = date("Y-m-d",strtotime($fromdate));
        $toDate = date("Y-m-d",strtotime($todate));
        
        $fiscalStartDt = $this->trialbalancemodel->getFiscalStartDt($yearid);
     
     
        
        
        
        $result['trialbalance']= $this->trialbalancemodel->getTrialBalanceData($companyId,$yearid,$frmDate,$toDate,$fiscalStartDt);
        $this->db->freeDBResource($this->db->conn_id); 
        
       /* echo "<pre>";
        print_r($result['trialbalance']);
        echo "</pre>";
        exit; */
       
         
        $result['company']=  $this->companymodel->getCompanyNameById($companyId);
        $result['companylocation']=  $this->companymodel->getCompanyAddressById($companyId);
        $result['fromDate'] = $fromdate;
        $result['toDate'] = $todate;
        
         
        
        
         
          $page = 'trial_balance/pdf_trialblance.php';
          $html = $this->load->view($page, $result, TRUE);
                // render the view into HTML
                //$html="Hello";
          $pdf->WriteHTML($html); 
          $output = 'trial_balance' . date('Y_m_d_H_i_s') . '_.pdf'; 
          $pdf->Output("$output", 'I');
                exit();
         
          } else {
            redirect('login', 'refresh');
        }
            
    }

        
       
 
}
?>
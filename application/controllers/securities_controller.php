<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Securities
 *
 * @author ravi
 */
class Securities_Controller extends CI_Controller {

    /**
     * load the add security page
     */
    public function index() {
        $this->load->model('securities/Security_Model');
        $this->load->model('CDSAccounts_m');
        $this->load->model('Company_m');

        $userbean = $this->session->userdata('userbean');

        $data['security'] = $this->Security_Model->get_new();
        //get CDS Accounts 
        $data['CDSAccList'] = $this->CDSAccounts_m->getUserCDSAccounts($userbean->userid);
        $data['companyList'] = $this->Company_m->getAll();

        $this->load->view('securites_view/index', $data);
    }

    public function add() {

        $this->load->model('securities/Security_Model');
        $this->load->model('CDSAccounts_m');
        $this->load->model('Company_m');

        $userbean = $this->session->userdata('userbean');

        $data['CDSAccList'] = $this->CDSAccounts_m->getUserCDSAccounts($userbean->userid); //CDS Account list
        $data['companyList'] = $this->Company_m->getAll(); //company list

        $data['security'] = $this->Security_Model->get_new(); //create empty fields
        $rules = $this->Security_Model->rules;

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == TRUE) {
            //validation pass ready to insert into db
        }
        $this->load->view('securites_view/index', $data);
    }

    public function getSubtype($cdsacc) {
//        echo $cdsacc;
        $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
//        header('Content-Type: application/json');
//        echo json_encode($arr);
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200)
                        ->set_output(json_encode(array(
                            'a' => '111',
                            'b' => '555'
        )));

//        return json_encode($arr);
    }

    public function getCompSecSubtype($comid) {
        $this->load->model('securities/Security_Model');
        $resultData = $this->Security_Model->getCompSecSubtype($comid);
        
//        var_export($resultData);
        
        return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200)
                        ->set_output(json_encode($resultData));
    }
    
    
    public function getCal(){
        $this->load->model('securities/Security_Model');
        $resultData = $this->Security_Model->getCal();
          return $this->output
                        ->set_content_type('application/json')
                        ->set_status_header(200)
                        ->set_output(json_encode($resultData));
    }

}
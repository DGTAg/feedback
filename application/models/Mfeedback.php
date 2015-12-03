<?php

/**
 *
 */
class Mfeedback extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

<<<<<<< HEAD
    public function insert_feedback($id='')
    {
        
        //$date = new DateTime();
        //echo "test " . $date->format('U = Y-m-d H:i:s') . "\n";
        //$date = date('Y-m-d H:m:s') . "\n";

        //$date->setTimestamp(1171502725);
        //echo $date->format('U = Y-m-d H:i:s') . "\n";
        //if($this->input->post('v1')!= '' && $this->input->post('v2') != '' && $this->input->post('v3') != '')

        $data = array(
            'idrespons' => NULL,
            'idapps' => $id,
            'q1' => $this->input->post('v1'),
            'q2' => $this->input->post('v2'),
            'q3' => $this->input->post('v3'),
            'q4' => $this->input->post('v4'),
            'q5' => $this->input->post('v5'),
            'datetime' => date('Y-m-d H:i:s')
        );

        //$this->db->insert('respons', $data);

        //var_dump($this->db); die();

        if($res = $this->db->insert('respons', $data)){
            return TRUE;
        }
        else
            return FALSE;

=======
    public function insert_feedback($type='')
    {
        $data = array(
                'type' => $type,
                'q1' => $this->input->post('v1'),
                'q2' => $this->input->post('v2'),
                'q3' => $this->input->post('v3'),
                'q4' => $this->input->post('v4'),
                'q5' => $this->input->post('v5')
        );

        $this->db->insert('feedback', $data);
>>>>>>> 1d23411c4c1e3a07ae57bff65d0b8fd8de173318
    }
}

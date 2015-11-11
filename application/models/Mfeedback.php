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
    }
}

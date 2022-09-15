<?php
class Quote extends CI_Controller
{

    public function index()
    {
        show_404();
    }


    public function get()
    {
        $data = $this->MDB->quote_list();
        //$this->load->template('quote/quote', $data);
        echo json_encode($data);
    }

    public function insert()
    {
        $data = $this->input->post();
        if (count($data)) :
            $response  = $this->MDB->quote_create($data);
            echo json_encode($response);
        else :
            show_404();
        endif;
    }

    public function update()
    {
        $id = $this->input->post('id');
        if ($id) :
            $response  = $this->MDB->quote_update($id);
            echo json_encode($response);
        else :
            show_404();
        endif;
    }

    public function delete()
    {
        $data = $this->input->post();
        if (count($data)) :
            $response  = $this->MDB->quote_delete($data);
            echo json_encode($response);
        else :
            show_404();
        endif;
    }
}

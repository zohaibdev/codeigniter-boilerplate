<?php
class MDB extends CI_Model
{
    public function quote_list()
    {
        $query = $this->db->select('*')->get('quote');
        if ($query->num_rows()) :
            return $query->result();
        endif;
    }

    public function quote_create($data)
    {
        if ($this->db->insert('quote', $data)) :
            $query = $this->db->select('*')->where('name', $data['name'])->get('quote');
            return  $query->row();
        else :
            return  false;
        endif;
    }

    public function quote_update($data)
    {
        $query =  $this->db->where('id', $data['id'])->update('quote', $data);
        if ($query) :
            $query = $this->db->where('id', $data['id'])->select('*')->get('quote');
            return $query->row();
        endif;
    }

    public function quote_delete($id)
    {
        if ($this->db->where('id', $id)->delete('quote')) :
            return true;
        endif;
    }

    public function quote_view($id)
    {
        $query = $this->db->where('id', $id)->select('*')->get('quote');
        return  $query->row();
    }
}

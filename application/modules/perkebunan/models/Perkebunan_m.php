<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkebunan_m extends MY_Model
{
	//ajax datatable
    public $column_order = array('nama_pemilik','alamat','luas','jenis','info',null); //set kolom field database pada datatable secara berurutan
    public $column_search = array('nama_pemilik','alamat','luas','jenis','info'); //set kolom field database pada datatable untuk pencarian
    public $order = array('idperk' => 'asc'); //order baku 
	

	
	public function get_new()
    {
        $record = new stdClass();
        $record->nama_pemilik = '';
        $record->alamat = '';
        $record->luas = '';
        $record->jenis = '';
        $record->info = '';
		//$record->jurusan = '';
        return $record;
    }
	
	//urusan lawan datatable
    private function _get_datatables_query()
    {
        $this->db->from('tbperkebunan');
        $i = 0;
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from('tbperkebunan');
        return $this->db->count_all_results();
    }
    
    //urusan lawan ambil data
    public function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
            $this->db->where('deleted_at', null);
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
	
	public function get_id($id=null)
    {
        $this->db->where('idperk', $id);
        $query = $this->db->get('tbperkebunan');
        return $query->row();
    }

    public function save($data)
    {
        $this->db->insert('tbperkebunan', $data);
    }

    public function edit($data,$id)
    {
        $this->db->where('idperk' , $id);
        $this->db->update('tbperkebunan', $data);
    }

    public function hapus($data,$id)
    {
        $this->db->where('idperk' , $id);
        $this->db->update('tbperkebunan', $data);
    }
	
}
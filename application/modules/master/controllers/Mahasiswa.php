<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	/**
	 * code by rifqie rusyadi
	 * email rifqie.rusyadi@gmail.com
	 */
	
	public $folder = 'master/mahasiswa/';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_m', 'data');
		//signin();
		//group(array('1'));
	}
	
	//halaman index
	public function index()
	{
		$data['head'] 		= 'Daftar TPS Rumah Tangga';
		
		$data['content'] 	= $this->folder.'default';
		$data['style'] 		= $this->folder.'style';
		$data['js'] 		= $this->folder.'js';
		
		$this->load->view('template', $data);
	}
	
	public function created()
	{
		$data['head'] 		= 'Tambah TPS Rumah Tangga';
		$data['record'] 	= $this->data->get_new();
		$data['content'] 	= $this->folder.'form';
		$data['style'] 		= $this->folder.'style';
		$data['js'] 		= $this->folder.'js';
		
		$this->load->view('template', $data);
	}
	
	public function updated($id)
	{
		$data['head'] 		= 'Ubah TPS Rumah Tangga';
		$data['record'] 	= $this->data->get_id($id);
		$data['content'] 	= $this->folder.'form';
		$data['style'] 		= $this->folder.'style';
		$data['js'] 		= $this->folder.'js';

		$this->load->view('template', $data);
	}
	
	public function ajax_list()
    {
        $record	= $this->data->get_datatables();
        $data 	= array();
        $no 	= $_POST['start'];
		
        foreach ($record as $row) {
            $no++;
            $col = array();
			$col[] = $row->id_tps;
			$col[] = $row->alamat;
			$col[] = $row->jenis;
			
            //add html for action
            $col[] = '<a class="btn btn-xs btn-flat btn-warning" onclick="edit_data();" href="'.site_url('master/mahasiswa/updated/'.$row->id_tps).'" data-toggle="tooltip" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                  <a class="btn btn-xs btn-flat btn-danger" data-toggle="tooltip" title="Hapus" href="'.site_url('master/mahasiswa/ajax_delete/'.$row->id_tps).'""><i class="glyphicon glyphicon-trash"></i></a>';
 
            $data[] = $col;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->data->count_all(),
                        "recordsFiltered" => $this->data->count_filtered(),
                        "data" => $data,
                );
        
		echo json_encode($output);
    }
	
	public function ajax_save()
    {
        $data = array(
				'id_tps' => $this->input->post('id_tps'),
				'alamat' => $this->input->post('alamat'),
				'jenis' => $this->input->post('jenis'),
        );
        
        if($this->validation()){
            $insert = $this->data->save($data);
			//helper_log("add", "Menambah Daftar Pengguna");
        }
    }
    
    public function ajax_update($id)
    {
         $data = array(
				'id_tps' => $this->input->post('id_tps'),
				'alamat' => $this->input->post('alamat'),
				'jenis' => $this->input->post('jenis'),
        );
		
        if($this->validation($id)){
            $this->data->edit($data, $id);
			//helper_log("edit", "Merubah Daftar Pengguna");
        }
    }
    
    public function ajax_delete($id)
    {
        $this->data->hapus($id);
		
    }
    
   
	
	private function validation($id=null)
    {
        $data = array('success' => false, 'messages' => array());
        
		
		$this->form_validation->set_rules("id_tps", "No", "trim|required");
		$this->form_validation->set_rules("alamat", "Alamat", "trim|required");
		$this->form_validation->set_rules("jenis", "Jenis", "trim|required");
		
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
        
        if($this->form_validation->run()){
            $data['success'] = true;
        }else{
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] = form_error($key);
            }
        }
        echo json_encode($data);
        return $this->form_validation->run();
    }
}

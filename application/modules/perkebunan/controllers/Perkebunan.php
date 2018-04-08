<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkebunan extends CI_Controller {

	/**
	 * code by rifqie rusyadi
	 * email rifqie.rusyadi@gmail.com
	 */
	
	public $folder = 'perkebunan/perkebunan/';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Perkebunan_m', 'data');
		//signin();
		//group(array('1'));
	}
	
	//halaman index
	public function index()
	{
		$data['head'] 		= 'Data Perkebunan';
		
		$data['content'] 	= $this->folder.'default';
		$data['style'] 		= $this->folder.'style';
		$data['js'] 		= $this->folder.'js';
		
		$this->load->view('template', $data);
	}
	
	public function created()
	{
		$data['head'] 		= 'Tambah Data Perkebunan';
		$data['record'] 	= $this->data->get_new();
		$data['content'] 	= $this->folder.'form';
		$data['style'] 		= $this->folder.'style';
		$data['js'] 		= $this->folder.'js';
		
		$this->load->view('template', $data);
	}
	
	public function updated($id)
	{
		$data['head'] 		= 'Ubah Data Perkebunan';
		$data['record'] 	= $this->data->get_id($id);
		$data['content'] 	= $this->folder.'form_edit';
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
            $col[] = $no;
			$col[] = $row->nama_pemilik;
			$col[] = $row->alamat;
			$col[] = $row->luas;
			$col[] = $row->jenis;
			$col[] = $row->info;
			
            //add html for action
            $col[] = '<a class="btn btn-xs btn-flat btn-warning" onclick="edit_data();" href="'.site_url('perkebunan/perkebunan/updated/'.$row->idperk).'" data-toggle="tooltip" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                  <a class="btn btn-xs btn-flat btn-danger" data-toggle="tooltip" title="Hapus" href="'.site_url('perkebunan/perkebunan/ajax_delete/'.$row->idperk).'""><i class="glyphicon glyphicon-trash"></i></a>';
 
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
				'idperk' => $this->input->post('idperk'),
				'nama_pemilik' => $this->input->post('nama_pemilik'),
				'alamat' => $this->input->post('alamat'),
				'luas' => $this->input->post('luas'),
				'jenis' => $this->input->post('jenis'),
				'info' => $this->input->post('info'),
				'created_at' => date ('Y-m-d H:m:s'),
        );
        
            $insert = $this->data->save($data);
			//helper_log("add", "Menambah Daftar Pengguna");
        
        redirect ('perkebunan/perkebunan');
    }
    
    public function ajax_update($id)
    {
         $data = array(
				'nama_pemilik' => $this->input->post('nama_pemilik'),
				'alamat' => $this->input->post('alamat'),
				'luas' => $this->input->post('luas'),
				'jenis' => $this->input->post('jenis'),
				'info' => $this->input->post('info'),
				'updated_at' => date ('Y-m-d H:m:s'),

        );
		
        
            $this->data->edit($data, $id);
			//helper_log("edit", "Merubah Daftar Pengguna");
                redirect ('perkebunan/perkebunan');

    }
    
    public function ajax_delete($id)
    {
    	$data = array (
    		'deleted_at' => date ('Y-m-d H:m:s')
    	);
        $this->data->hapus($data,$id);
		redirect ('perkebunan/perkebunan');
    }
    
   
	
	private function validation($id=null)
    {
        $data = array('success' => false, 'messages' => array());
        
		
		
		
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

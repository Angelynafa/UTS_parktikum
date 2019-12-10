 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("welcome"));
		}
	}

	public function index()
	{
		$this->load->view('auth/login');
	
	}

	public function index2()
	{
		$data = $this->db->get('lapang');
		$datum = $this->db->get('sewa_lapang');

		$this->load->view('auth/index', array('lapang' => $data, 'sewa_lapang' => $datum));
	}

	public function jadwal_booking()
	{
		$jadwal = $this->db->get('sewa_lapang');
		$this->load->view('auth/jadwal_booking', array('sewa_lapang' => $jadwal));
	}

	public function main()
	{
		$data = $this->db->get('lapang');
		$datum = $this->db->get('sewa_lapang');

		$this->load->view('auth/index', array('lapang' => $data, 'sewa_lapang' => $datum));
	}


	public function login()
	{
		$this->load->view('auth/log');
	}
	

	public function signup()
	{
		$this->load->view('auth/signup');
	}
	

	public function booking(){


		$this->db->select("id_lapang");
		$this->db->from("sewa_lapang");
		$this->db->limit(1);
		$this->db->order_by('id_lapang',"DESC");
		$query = $this->db->get();
		$result = $query->result();

		$id_lapang = intval($result) + 1;
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$pickup_date = $this->input->post('pickup_date');
		$our = $this->input->post('our');
		$lapangan = $this->input->post('lapangan');
		$name = $this->input->post('name');

		$data = array(
			'email' => $email,
			'phone' => $phone,
			'pickup_date' => $pickup_date,
			'our' => $our,
			'lapangan' => $lapangan,
			'name' => $name,
			'id_lapang' => $id_lapang,
		);

		$lapang = array(
			'status' => 1,
		);

		$this->db->insert('sewa_lapang',$data);
		$this->db->where('id_lapang', $id_lapang);
		$this->db->update('lapang', $lapang);

		$this->load->view('auth/index');
	}
}
  	
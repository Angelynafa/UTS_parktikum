<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "sewa_lapang";

    public $Nama;
    public $email;
    public $phone;
    public $pickup_date;
    public $our;
    public $min;
    public $am_pm;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],


            ['field' => 'phone',
            'label' => 'phone',
            'rules' => 'required'],


            ['field' => 'pickup_date',
            'label' => 'pickup_date',
            'rules' => 'required'],

            ['field' => 'hour',
            'label' => 'hour',
            'rules' => 'required'],


            ['field' => 'min',
            'label' => 'min',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_booking= uniqid();
        $this->name = $post["name"];
        $this->phone = $post["phone"];
        $this->email = $post["email"];
        $this->pickup_date = $post["pickup_date"];
        $this->hour= $post["hour"];
        $this->min= $post["min"];
        $this->am_pm = $post["am_pm"];    
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
$this->id_booking= uniqid();
        $this->name = $post["name"];
        $this->phone = $post["phone"];
        $this->email = $post["email"];
        $this->pickup_date = $post["pickup_date"];
        $this->hour= $post["hour"];
        $this->min= $post["min"];
        $this->am_pm = $post["am_pm"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("product_id" => $id));
    }
}
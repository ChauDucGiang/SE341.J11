<?php
defined('BASEPATH') or exit ('No direct script access allowed');class shop_model extends CI_Model
{

    public function insertData($table, $data){
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function multiInsert($table, $data){
        $this->db->insert_batch($table, $data);
        
    }
    public function getData($table, $field, $var)
    {
        $this->db->select('*');
        $this->db->where($field, $var);
        $data = $this->db->get($table);
        return $data->result_array();
    }
    public function getDataLimit($table, $field, $var)
    {
        $this->db->select('*');
        $this->db->where($field, $var);
        $this->db->limit(4);
        
        $data = $this->db->get($table);
        return $data->result_array();
    }
    public function getColData($table, $col, $field, $var)
    {
        $this->db->select($col);
        $this->db->where($field, $var);
        $data = $this->db->get($table);
        return $data->result_array();
    }
    public function getAllData($table)
    {
        $this->db->select('*');
        $data = $this->db->get($table);
        return $data->result_array();
    }
    public function getPartners(){
        $this->db->select('id_pn, pn_name');
        $data = $this->db->get('partners');
        return $data->result_array();
    }
    public function search($val){
        $this->db->select('listpd_name, id, pd_name, pd_des, pd_info, pd_price , pd_com, pd_date, pd_lid, pd_image, pd_gender, pn_name');
        $this->db->from('products');
        $this->db->join('partners', 'partners.id_pn = products.pd_com', 'left');
        $this->db->join('list_pd', 'products.pd_lid = list_pd.id_list', 'left');      
        $this->db->like('pn_name', $val);
        $this->db->or_like('listpd_name', $val);
        $data = $this->db->get();
        return $data->result_array();
    }
    public function search_show($val, $start){
        $this->db->select('listpd_name, id, pd_name, pd_des, pd_info, pd_price , pd_com, pd_date, pd_lid, pd_image, pd_gender, pn_name');
        $this->db->from('products');
        $this->db->join('partners', 'partners.id_pn = products.pd_com', 'left');
        $this->db->join('list_pd', 'products.pd_lid = list_pd.id_list', 'left');      
        $this->db->like('pn_name', $val);
        $this->db->or_like('listpd_name', $val);
        $this->db->or_like('pd_name', $val);
        $this->db->limit(12, $start);
        $data = $this->db->get();
        return $data->result_array();
    }
    public function getProductsBy($field,$value, $start){
        $this->db->select('*');
        $this->db->where($field, $value);
        $data = $this->db->get('products', 12, $start);
        return $data->result_array();
    }
    public function getPd($start){
        $this->db->select('*');
        $data = $this->db->get('products', 12, $start);
        return $data->result_array();
    }
    public function getProducts($field,$value){
        $this->db->select('*');
        $this->db->where($field, $value);
        $data = $this->db->get('products');
        return $data->result_array();
    }
    public function getProductsByPrice($field,$value){
        $this->db->select('*');
        $this->db->where($field, $value);
        $data = $this->db->get('products', 12, 0);
        $this->db->order_by('pd_price', 'desc');
        return $data->result_array();
    }
    public function getPdByPrice(){
        $this->db->select('*');
        $data = $this->db->get('products', 12, 0);
        $this->db->order_by('pd_price', 'desc');
        return $data->result_array();
    }
    public function login_model($email, $password){
        $this -> db -> select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this -> db -> limit(1);
        $query = $this -> db -> get();           
        if($query -> num_rows() == 1)
            {
                return $query->result();
            }
        else
            {
                return false;
            }
    }  
}

/* End of file shop_model.php */

<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

    public function insertData($table,$data){
        $this->db->insert($table, $data);
        return $this->db->insert_id();    
    }
    public function getAllData($table){
        $this->db->select('*');
        $data = $this->db->get($table);
        
        return $data->result_array();
    }
    public function deleteData($table,$field , $id){
        $this->db->where($field, $id);
        
        $this->db->delete($table);
    }
    public function updateData($table, $data, $field , $id){
        $this->db->where($field, $id);
        $this->db->update($table, $data); 
    }
    public function getData( $table,$field, $var){
        $this->db->select('*');
        $this->db->where($field, $var);       
        $data = $this->db->get($table);    
           
        return $data->result_array();
    }
    public function getJoinData($id,$page){
        $this->db->select('listpd_name, id, pd_name, pd_des, pd_info, pd_price , pd_com, pd_date, pd_lid, pd_image, pd_gender, pn_name');
        $this->db->from('products');
        $this->db->join('partners', 'partners.id_pn = products.pd_com', 'left');
        $this->db->join('list_pd', 'products.pd_lid = list_pd.id_list', 'left');
        $this->db->where('pd_lid', $id);
        $this->db->limit(6,$page);
        
        $data = $this->db->get();
        return $data->result_array();
    }
    public function getPartners(){
        $this->db->select('id_pn,pn_name ');

        $data = $this->db->get('partners');
        return $data->result_array();
    }
    public function deletePD($table, $FK, $id){
        // $sql = "ALTER TABLE $table DROP FOREIGN KEY $FK"
        // $this->db->query($query);
        // $this->db->where('id', $id);
        // $this->db->delete('$table');   
    }
    public function getProducts( $table,$field, $var,$start){
        $this->db->select('*');
        $this->db->where($field, $var);       
        $data = $this->db->get($table, 6, $start);       
        return $data->result_array();
    }
    public function getAllProducts($table, $field, $var){
        $this->db->select('*');
        $this->db->where($field, $var);
        $data = $this->db->get($table);       
        return $data->result_array();
    }
    public function login_model($email, $password){
        $this -> db -> select('*');
        $this->db->from('admin');
        $this->db->where('username', $email);
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

    public function getAllPartners(){
        $this->db->select('id_pn, pn_name');
        $data = $this->db->get('partners');
        return $data->result_array();
    }
    ///
    public function loadOrder(){
        $this->db->select('order_id, name, order.phone, address,total,  user_id, id, username');
        $this->db->from('order');
        $this->db->join('users', 'users.id = order.user_id', 'left');
        $data = $this->db->get();
        return $data->result_array();
    }
    public function loadOrderDetail($id_pd){
        $this->db->select('listpd_name, id, pd_name, pd_des, pd_info, products.pd_price , pd_com, pd_date, pd_lid, pd_image, pd_gender, pn_name, pd_quan');
        $this->db->from('products');
        $this->db->join('partners', 'partners.id_pn = products.pd_com', 'left');
        $this->db->join('list_pd', 'products.pd_lid = list_pd.id_list', 'left');
        $this->db->join('order_detail', 'products.id = order_detail.id_pd', 'left');
        $this->db->where('id', $id_pd);
        
        $data = $this->db->get();
        return  $data->result_array();
    }
}

/* End of file admin_model.php */

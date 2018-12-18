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
        $this->db->limit(4,$page);
        
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
}

/* End of file admin_model.php */

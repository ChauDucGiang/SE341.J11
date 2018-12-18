<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model'); 
    }

    public function index()
    {       
        // $i = 8/3;
        // $partners = $this->admin_model->getPartners();
        // $listpd = $this->admin_model->getAllData('list_pd');
        // $partners = array(
        //     'partners' =>  $partners,
        //     'listpd' =>  $listpd
        // );
        // $result = $this->admin_model->getAllData('partners');
        // $data = array('partners' => $result );
        // $this->load->view('admin/partners', $data, false);
        $this->load->view('admin/login');
        
        
    }
    // load view
    public function load($table , $view){
        $data = $this->admin_model->getAllData($table);
        $listpd = $this->admin_model->getAllData('list_pd');      
        $data = array(
            'result' => $data,
            'listpd' => $listpd
         );       
        $this->load->view('admin/'.$view ,$data, false);
    }
    // uploads
    public function uploads($image){
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES[$image]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES[$image]["tmp_name"]);
            if($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                // echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            // echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES[$image]["size"] > 500000) {
            // echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            // echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES[$image]["tmp_name"], $target_file)) {
                // echo "The file ". basename( $_FILES[$image]["name"]). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
        }     
        return $imagename = base_url()  ."uploads/" .basename($_FILES[$image]["name"]);
    }
    // users
    public function users(){
        $this->load('users', 'users');
    }

    public function edituser(){
        $id = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');  
        $data = array(
            'username' => $username ,
            'password' => $password ,
            'email' => $email ,
            'phone' => $phone 
         ); 
         
         $this->admin_model->updateData('users', $data, $id);
         redirect('admin/users','refresh');
    }
    public function deleteuser($id){
        $this->admin_model->deleteData('users', $id);
        redirect('admin/users','refresh');
    }
    // end users

    // slides and baner
    public function editbanner(){
        $slides =$this->admin_model->getData('banners_slides', 'id', '1')['0']['content'];
        $slides = json_decode($slides, true);

        $bannerbot =$this->admin_model->getData('banners_slides', 'id', '3')['0']['content'];
        $bannerbot = json_decode($bannerbot,true);
        
        $bannertop =$this->admin_model->getData('banners_slides', 'id', '2')['0']['content'];
        $bannertop = json_decode($bannertop, true);
        
        $wrappers =$this->admin_model->getData('banners_slides', 'id', '4')['0']['content'];
        $wrappers = json_decode($wrappers, true);

        //
        $data = array(
            'slides' => $slides, 
            'bannertop' => $bannertop, 
            'bannerbot' => $bannerbot,
            'wrappers' => $wrappers
        );
        
        $this->load->view('admin/banners_slides', $data, false);
    }
    public function editslides($id){
        
        $result =$this->admin_model->getData('banners_slides', 'id', $id)['0']['content'];
        $result = json_decode($result, true);
        $title = $this->input->post('title');
        $ids = $this->input->post('id');
        $content = $this->input->post('content');
        $oneimage = $this->input->post('old_image');
        $data = array();
        // uploads
        $images = $_FILES["new_image"]["name"];
        $filephysic = $_FILES["new_image"]["tmp_name"];
        $images_name = array();
        for ($i=0; $i < count($oneimage) ; $i++) { 
            if (empty($images[$i])) {
                $images_name[$i] = $oneimage[$i];
            } else {
                $duongdan = "uploads/" . $images[$i];
                move_uploaded_file($filephysic[$i], $duongdan);
                $images_name[$i] = base_url().$duongdan;       
            }
        }
        for ($i=0; $i < count($images) ; $i++) { 
            $temp = array(
                'id' => $ids[$i] ,
                'title' => $title[$i] ,
                'content' => $content[$i] ,
                'image' => $images_name[$i]
             );
             array_push($data, $temp) ;
        }
        $data = json_encode($data);
        
        $result = array(
            'name' => 'slides' , 
            'content' => $data , 
        );

        $this->admin_model->updateData('banners_slides', $result, 'id', $id);
        redirect('admin/editbanner','refresh');
    }
    public function deleteslides($id){
        $idcontent = $this->input->post('idcontent');
        $result =$this->admin_model->getData('banners_slides', 'id', $id)['0']['content'];
        $name =$this->admin_model->getData('banners_slides', 'id', $id)['0']['name'];
        $result = json_decode($result, true);
        foreach ($result as $key => $value) {
			if ($value['id'] == $idcontent) {
				unset($result[$key]);
			}           
        }
        
        $result = json_encode($result);
        

        $data = array(
            'name' => $name,
            'content' => $result
         );

        $this->admin_model->updateData('banners_slides',$data, 'id', $id);
        redirect('admin/editbanner','refresh');
    }
    public function addslide($idtb){
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $image = $this->uploads('image');
        
        $result =$this->admin_model->getData('banners_slides', 'id', $idtb)[0]['content'];
        $name =$this->admin_model->getData('banners_slides', 'id', $idtb)[0]['name'];
        $result = json_decode($result, true);
        
        
        $id = 1;
        if (count($result) != 0) {
            $temp = array();
            foreach ($result as $key => $value) {
                $temp[] = $value['id'];
            }
            $id +=  max($temp);            
        }
        $array = array(
            'id' => $id , 
            'title' => $title, 
            'content' => $content, 
            'image' => $image
        );
        
        array_push($result,$array);
        
        $result = json_encode($result);

        $data = array(
            'name' => $name,
            'content' => $result
         );        
        $this->admin_model->updateData('banners_slides', $data,'id', $idtb);
        redirect('admin/editbanner','refresh');

    }
    // end slide and banner

        // products
    public function addpd(){
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $desc = $this->input->post('desc');
        $info = $this->input->post('info');
        $date = $this->input->post('date');
        $listpd = $this->input->post('listpd');
        $partners = $this->input->post('partners');
        $gender = $this->input->post('gender');
        $image = $this->uploads('image');
        $data = array(
            'pd_name' => $name,
            'pd_des' => $desc,
            'pd_info' => $info,
            'pd_price' => $price,
            'pd_com' => $partners,
            'pd_date' => $date,
            'pd_lid' => $listpd,
            'pd_image' => $image,
            'pd_gender' => $gender
        );
        $this->admin_model->insertData('products',$data);
        redirect('admin/products/1','refresh');
    }

    public function products($id){
        $page = $this->input->post('page');
        $start = ($page == null) ? 0 : (($page -1 )* 4) ;
        $partners = $this->admin_model->getPartners();
        $listpd = $this->admin_model->getAllData('list_pd');
        $pd = $this->admin_model->getAllProducts('products', 'pd_lid', $id);
        $products = $this->admin_model->getJoinData($id,$start);
        // $products = $this->admin_model->getProducts('products','pd_lid', $id, $page);
        $data = array(
            'partners' =>  $partners,
            'pd' =>  $pd,
            'listpd' =>  $listpd,
            'products' =>  $products,
            'page' => $page
        );
        $this->load->view('admin/products', $data, false);         
    }   
    public function delpd($id){
        $this->admin_model->deleteData('products','id', $id);
        redirect('admin/products/1','refresh');
    }
    public function editpd($id){
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $desc = $this->input->post('desc');
        $partners = $this->input->post('partners');
        $listpd = $this->input->post('listpd');
        $date = $this->input->post('date');
        $gender = $this->input->post('gender');
        $info = $this->input->post('info');

        $this->uploads('new_image');   
        if( empty($_FILES["new_image"]["name"])){
            $image = $this->input->post('old_image');
        }
        else {
            $image = $this->uploads('new_image');
        }
        $data = array(
            'pd_name' => $name, 
            'pd_price' => $price, 
            'pd_des' => $desc, 
            'pd_info' => $info, 
            'pd_gender' => $gender, 
            'pd_date' => $date, 
            'pd_lid' => $listpd, 
            'pd_image' => $image, 
            'pd_com' => $partners, 
        );
        $this->admin_model->updateData('products', $data,'id', $id);
        
    }
    // end products

    // list products
    public function addlistpd(){
        $listpd_name = $this->input->post('name');
        $data = array('listpd_name' => $listpd_name );
        $this->admin_model->insertData('list_pd', $data);        
    }
    // End list products

    // Partners
    public function partners(){
        $this->load('partners','partners');
    }
    public function editpartner($id){
        $name = $this->input->post('name');
        $fb = $this->input->post('fb');
        $tw = $this->input->post('tw');
        $gg = $this->input->post('gg');
        $this->uploads('new_image');   
        if( empty($_FILES["new_image"]["name"])){
            $image = $this->input->post('old_image');
        }
        else {
            $image = $this->uploads('new_image');
        }
        $data = array(
            'pn_name' => $name, 
            'pn_fb' => $fb, 
            'pn_tw' => $tw, 
            'pn_gg' => $gg, 
            'pn_image' => $image
        );
        $this->admin_model->updateData('partners', $data,'id_pn', $id);
        
    }
    public function delpartner($id){
        $this->admin_model->deleteData('partners', 'id_pn', $id);
    }
    public function addpn(){
        $name = $this->input->post('name');
        $fb = $this->input->post('fb');
        $tw = $this->input->post('tw');
        $gg = $this->input->post('gg');
        $image = $this->uploads('image');
        $data = array(
            'pn_name' => $name, 
            'pn_fb' => $fb, 
            'pn_tw' => $tw, 
            'pn_gg' => $gg, 
            'pn_image' => $image
        );
        $this->admin_model->insertData('partners', $data);
    }
    // end partners

}
/* End of file Admin.php */

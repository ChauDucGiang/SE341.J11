<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('shop_model');      

	}
    public function index()
    {
        $slides =$this->shop_model->getData('banners_slides', 'id', '1')['0']['content'];
        $slides = json_decode($slides, true);
        $bannerbot =$this->shop_model->getData('banners_slides', 'id', '3')['0']['content'];;
        $bannerbot = json_decode($bannerbot,true);
        
        $bannertop =$this->shop_model->getData('banners_slides', 'id', '2')['0']['content'];;
        $bannertop = json_decode($bannertop, true);

        // product
        $men = $this->shop_model->getDataLimit('products', 'pd_gender', 'men');
        $women = $this->shop_model->getDataLimit('products', 'pd_gender', 'women');
        //
        $listpd =$this->shop_model->getAllData('list_pd');
        $partners = $this->shop_model->getAllData('partners');
        $products = $this->shop_model->getAllData('products');
        $data = array(
            'slides' => $slides, 
            'bannertop' => $bannertop, 
            'bannerbot' => $bannerbot,
            'men' => $men,
            'women' => $women,
            'partners' => $partners,
            'products' => $products,
            'listpd' => $listpd
        );

        $this->load->view('homepage_view', $data, false);
    }
    public function contact(){
        $partners =$this->shop_model->getPartners();
        $listpd =$this->shop_model->getAllData('list_pd');
        $data = array(
            'partners' => $partners,
            'listpd' => $listpd       
        );
        $this->load->view('contact_view', $data, false);
        
    }
    public function sendmail(){
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $content = $this->input->post('content');
            
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'chau.ducgiang@gmail.com';                 // SMTP username
            $mail->Password = 'chau15081996';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('chau.ducgiang@gmail.com', 'Châu');
            $mail->addAddress($email, 'Châu Hoàng');

            //Attachments

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $content;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }


    public function single($id){
        $partners =$this->shop_model->getPartners();
        $listpd =$this->shop_model->getAllData('list_pd');
        $products =$this->shop_model->getData('products', 'id', $id);
        $pd = $this->shop_model->getPd('0');
        $data = array(
            'result' => $products ,
            'partners' => $partners ,
            'listpd' => $listpd ,
            'pd' => $pd
     );
        $this->load->view('single_view', $data, FALSE);
    }
    public function about(){
        $listpd =$this->shop_model->getAllData('list_pd');
        $partners = $this->shop_model->getAllData('partners');
        $partners =$this->shop_model->getAllData('partners');
        $bannerbot =$this->shop_model->getData('banners_slides', 'id', '3')['0']['content'];;
        $bannerbot = json_decode($bannerbot, true);
        
        $data = array(
            'partners' => $partners ,
            'bannerbot' => $bannerbot,
            'partners' => $partners ,
            'listpd' => $listpd 
        );
        $this->load->view('about_view', $data, false);
        
    }

    public function shop(){
        $page = $this->input->post('page');
        $start = ($page == null) ? 0 : (($page -1 )* 12) ;
        $listpd =$this->shop_model->getAllData('list_pd');
        $partners = $this->shop_model->getAllData('partners');
        $pd =$this->shop_model->getPdByPrice();
        $products =$this->shop_model->getPd($start);
        $lst_products =$this->shop_model->getAllData('products');
        $wrapper =$this->shop_model->getData('banners_slides', 'id', '4')['0']['content'];
        $wrapper = json_decode($wrapper, true);
        
        $data = array(
            'wrapper' => $wrapper,
            'partners' => $partners ,
            'products' => $products,
            'lst_products' => $lst_products,
            'listpd' => $listpd,
            'pd' => $pd,
            'page' =>$page,
        );
        $this->load->view('shop_view', $data, false);
        
    }
    public function listpd($id){
        $listpd =$this->shop_model->getAllData('list_pd');
        $partners = $this->shop_model->getAllData('partners');
        //
        $page = $this->input->post('page');
        $start = ($page == null) ? 0 : (($page -1 )* 12) ;
        $wrapper =$this->shop_model->getData('banners_slides', 'id', '4')['0']['content'];;
        $wrapper = json_decode($wrapper, true);
        //
        $products =$this->shop_model->getProductsBy('pd_lid', $id, $start);
        $lst_products =$this->shop_model->getProducts('pd_lid', $id);
        $pd =$this->shop_model->getProductsByPrice('pd_lid', $id);
        $data = array(
            'wrapper' => $wrapper,
            'products' => $products,
            'lst_products' => $lst_products,
            'id' =>$id,
            'page' =>$page,
            'partners' => $partners ,
            'listpd' => $listpd,
            'pd' => $pd
        );
        $this->load->view('shop_view', $data, false);
    }
    public function search(){
        $pd =$this->shop_model->getPdByPrice();
        $value = $this->input->get('search');
        $page = $this->input->post('page');
        $start = ($page == null) ? 0 : (($page -1 )* 12) ;
        $lst_products = $this->shop_model->search($value);
        $products = $this->shop_model->search_show($value, $start);
        $partners = $this->shop_model->getAllData('partners');
        $listpd =$this->shop_model->getAllData('list_pd');
        $wrapper =$this->shop_model->getData('banners_slides', 'id', '4')['0']['content'];
        $wrapper = json_decode($wrapper, true);
        
        $data = array(
            'wrapper' => $wrapper,
            'partners' => $partners ,
            'products' => $products,
            'lst_products' => $lst_products,
            'listpd' => $listpd,
            'pd' => $pd,
            'page' =>$page,
        );
        $this->load->view('shop_view', $data, false);
        
    }
    public function checkOut(){

        $listpd =$this->shop_model->getAllData('list_pd');
        $partners = $this->shop_model->getAllData('partners');
        $quantity = $this->input->post('quantity');
        $id = $this->input->post('item_number');
        $image = $this->input->post('shipping');
        // $shipping2 = $this->input->post('shipping2');
        $price = $this->input->post('amount');
        $name = $this->input->post('googles_item');
        $data = array(
            'partners' => $partners ,
            'listpd' => $listpd,
            'quantity' => $quantity,
            'price' => $price,
            'name' => $name,
            'id' => $id,
            'image' => $image

         );
        $this->load->view('checkout_view', $data, false);   
    }
    public function order(){
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $phone = $this->input->post('phone');
        $totalmoney = $this->input->post('totalmoney');
        $user_id = $this->session->userdata('id');
        
        $pdname = $this->input->post('pdname');
        $pdquan = $this->input->post('pdquan');
        $pdprice = $this->input->post('pdprice');
        $pd_id = $this->input->post('pd_id');
        $data = array(
            'name' => $name, 
            'address' => $address, 
            'phone' => $phone,
            'total' => $totalmoney,
            'user_id' => $user_id
        );
        $orderid = $this->shop_model->insertData('order', $data, false);
        $object = array();
        for ($i=0; $i <count($pdname) ; $i++) { 
            $temp = array(
                'pd_quan' => $pdquan[$i], 
                'pd_price' => $pdprice[$i], 
                'id_pd' => $pd_id[$i], 
                'order_id' => $orderid
            );
            array_push($object, $temp);
        }
        $this->shop_model->multiInsert('order_detail', $object);   
    }
    public function total(){
        $pdname =$this->input->post('pdname');
        $pdprice =$this->input->post('pdprice');
        $pdquan =$this->input->post('pdquan');
        $data = array(
            'pdname' => $pdname, 
            'pdprice' => $pdprice, 
            'pdquan' => $pdquan
        );
        die(json_encode($data));
    }
    public function login(){
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $query =$this->shop_model->login_model($email, $password);
        if ($query)
            {
                 foreach($query as $row)
                 {
                     $newdata = array(
                            'id' => $row->id,
                            'email'   => $row->email,
                            'name'   => $row->username,
                            'phone'   => $row->phone                
                        );
                     $this->session->set_userdata($newdata);  
                     redirect(base_url().'home','refresh');
                 }
             return TRUE;
            }
            else
            {
                $users_err = array(
                    'title'   => "Đăng nhập không thành công vào hệ thống webste !",
                    'error_login' => "Email hoặc Mật khẩu nhập sai."
                    );                                                          
                $this->load->view('tem_dangnhap',$users_err); 
             return false;   
            }       
    }
    public function logout(){
        $this->session->unset_userdata('email');
        redirect(base_url().'home','refresh');
    }
    public function singup(){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $pass = md5($this->input->post('pass'));
        $data = array(
            'username' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => $pass
        );
        $this->shop_model->insertData('users', $data);
        redirect(base_url().'home','refresh');
    }
}

/* End of file Home.php */

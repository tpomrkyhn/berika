<?

    class Admin extends Controller{

        public function __construct(){

            parent::__construct();

        }

        public function index(){

            $this->login();

        }

        public function login(){

            Session::init();

            echo Session::get("username");

            if(Session::get("login") == true){

                header("Location:".SITE_URL."/Panel/home");

            }
            $this->load->view("Admin/loginForm");

        }

        public function runLogin(){

            $username = $_POST["username"];
            $password = $_POST["password"];

            $data = array(

                "uye_kadi" => $username,
                "uye_sifre" => md5($password)

            );

            $admin_model = $this->load->model("admin_model");
            $result = $admin_model->userControl($data);

            if($result == false){

                header("Location:".SITE_URL."/Admin/login");

            }else{

                Session::init();
                Session::set("login",true);
                Session::set("username",$result[0]["uye_kadi"]);
                Session::set("name",$result[0]["uye_adi"]);
                Session::set("userId",$result[0]["uye_id"]);

                header("Location:".SITE_URL."/Panel/home");

            }

        }

        public function runLogout(){

            Session::init();
            Session::destroy();
            header("Location:".SITE_URL."/Admin/login");

        }

    }

?>
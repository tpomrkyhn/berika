<?

    class Panel extends Controller{

        public function __construct(){

            parent::__construct();

            Session::init();

            if(Session::get("login") == false){

                Session::destroy();
                header("Location:".SITE_URL."/Admin/login");

            }

            $data["homepage"] = array(

                "username" => Session::get("username"),
                "name" => Session::get("name")

            );

            $this->load->view("panel/include");
            $this->load->view("panel/header", $data);
            $this->load->view("panel/baslik");

        }

        public function home(){


            $this->load->view("panel/home");
            $this->load->view("panel/includeBottom");

        }

        public function addNewContent(){


            $this->load->view("panel/addNewContent");
            $this->load->view("panel/includeBottom");

        }

        public function runAddNewContent(){

            $form = $this->load->otherClasses('Form');

            $form   ->post("title")
                    ->isEmpty()
                    ->length(3,50);
            $form   ->post("content")
                    ->isEmpty();

            if($form->submit()){



            }else{

                $data["formErrors"] = $form->errors;

                $this->load->view("panel/addNewContent", $data);
                $this->load->view("panel/includeBottom");

            }

        }


    }

?>
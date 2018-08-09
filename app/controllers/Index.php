<?

    class Index extends Controller{

        public function __construct(){

            parent::__construct();

        }

        public function ana(){



        }

        public function anasayfa($param = null){

            $this->load->view("anasayfa");

        }

        public function urunListele($param = null){

            $index_model = $this->load->model("Index_model");
            $data["urunListesi"] = $index_model->urunListele();

            $this->load->view("urunListele",$data);

        }

        public function urunEkle($param = null){

            $this->load->view("UrunEkle");

        }

        public function urunDuzenle($param = null){

            $index_model = $this->load->model("Index_model");
            $data = array("urun_adi" => "Yeni Ad");
            $index_model->UrunDuzenle($data);
            $this->load->view("UrunDuzenle");

        }

        public function urunKayit($param = null){

            $index_model = $this->load->model("Index_model");

            $urun_adi = $_POST["urun_adi"];

            $data = array("urun_adi" => $urun_adi);

            $result = $index_model->urunEkle($data);

            if($result !== 0){

                $data["mesaj"] = array(

                    "mesaj" => "Kayıt işlemi başarılı bir şekilde gerçekleşti - Ürün id:" . $result,
                    "sinif" => "success"

                );

            }else{

                $data["mesaj"] = array(

                    "mesaj" => "Kayıt işlemi gerçekleştirilemedi",
                    "sinif" => "danger"

                );

            }

            $this->load->view("SonucEkrani",$data);

        }

    }

?>
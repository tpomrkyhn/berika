<?

    class Index_model extends Model {       //Index Model sınıfına bağlı çalışır ve veritabanı bağlantısını Model sınıfından alır

        public function __construct(){

            parent::__construct();

        }

        public function urunListele(){

            return $veri = $this->db->select("SELECT * FROM urunler");        //select metodu ile verileri veritabanından çekiyoruz

        }

        public function urunEkle($data){

            return $this->db->insert("urunler",$data);        //select metodu ile verileri veritabanından çekiyoruz

        }

        public function urunDuzenle($data){

            return $this->db->update("urunler",$data,"urun_id = 3");        //select metodu ile verileri veritabanından çekiyoruz

        }

    }

?>
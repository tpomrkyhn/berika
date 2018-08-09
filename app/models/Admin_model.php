<?

class Admin_model extends Model {       //Index Model sınıfına bağlı çalışır ve veritabanı bağlantısını Model sınıfından alır

    public function __construct(){

        parent::__construct();

    }

    public function userControl($array = array()){

        $sql = "SELECT * FROM uyeler WHERE uye_kadi = :uye_kadi AND uye_sifre = :uye_sifre";
        $result = $this->db->affectedRows($sql,$array);

        if($result > 0){

            $sql = "SELECT * FROM uyeler WHERE uye_kadi = :uye_kadi AND uye_sifre = :uye_sifre";
            return $result = $this->db->select($sql,$array);

        }else{

            return false;

        }

    }

}

?>
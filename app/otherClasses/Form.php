<?

    class Form{

        public $currentValue;
        public $values = array();
        public $errors = array();

        public function __construct(){



        }

        public function post($key){

            $this->values[$key] = trim($_POST[$key]);
            $this->currentValue = $key;
            return $this;

        }

        public function isEmpty(){

            if(empty($this->values[$this->currentValue])){

                $this->errors[$this->currentValue]["empty"] = "Lütfen bu alanı boş bırakmayınız";

            }

            return $this;

        }

        public function length($min = 0, $max){

            if(strlen($this->values[$this->currentValue]) < $min || strlen($this->values[$this->currentValue] > $max)){

                $this->errors[$this->currentValue]["lenght"] = "Lütfen uzunluğu $min ve $max arasında bir giriş yapınız";

            }

            return $this;

        }

        public function submit(){

            if(empty($this->errors)){

                return true;

            }else{

                return false;

            }

        }

    }

?>
<?php
    class Seller extends Credential{
        private $sellerSalary;
        public function __construct(){
            $a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f='__construct'.$i)) {
				call_user_func_array(array($this, $f), $a);
			}
        }
        public function setSellerSalary($sellerSalary){
            $this->sellerSalary;
        }
        public function getSellerSalary(){
            return $this->sellerSalary;
        }
    }
?>
<?php
class Model_datalaporan extends CI_Model {
  public function __construct() {
        parent::__construct();
  }

  public function input($data){
    try{
      $this->db->insert('upload', $data);
      return true;
    }catch(Exception $e){
    }
  }

}
?>
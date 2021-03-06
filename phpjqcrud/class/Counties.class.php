<?php
include_once 'class/Database.class.php';

class Counties{
    private static $instance;
    private $id_county;
    private $id_state;
    private $name_county;

    // DB Connection attrib
    private $conn;
    private $query;
    // Config attrib
    private $attrib;
    private $field;

    public function __construct(){
      $this->conn = new Database();
    }

    public static function singleton(){
        if (!isset(self::$instance)) {
            $myclass = __CLASS__;
            self::$instance = new $myclass;
        }
        return self::$instance;
    }

    public function set($attrib, $content) {
      $this->$attrib = $content;
    }

    public function get($attrib) {
      return $this->$attrib;
    }

    public function get_county(){
        try {
            $this->query = $this->conn->prepare('select * from tbl_counties inner join tbl_states on tbl_counties.id_state = tbl_state.id_state inner join tbl_countries on tbl_states.id_country = tbl_countries.id_country  
                where 
                    id_county = :id_county');
            $this->query->bindValue(':id_county', $this->id_county, PDO::PARAM_INT);
            $this->query->execute();
            $data = $this->query->fetchAll();
            $this->query = null;
            return $data;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public function get_counties(){
        try {
            $this->query = $this->conn->prepare('select * from tbl_counties');
            $this->query->execute();
            $data = $this->query->fetchAll();
            $this->query = null;
            return $data;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

     public function get_counties_state(){
        try {
            $this->query = $this->conn->prepare('select * from tbl_counties 
                where 
                    id_state = :id_state');
            $this->query->bindValue(':id_state', $this->id_state, PDO::PARAM_INT);
            $this->query->execute();
            $data = $this->query->fetchAll();
            $this->query = null;
            return $data;
        }catch (PDOException $e) {
            $e->getMessage();
        }
    }

    private function __clone(){
        trigger_error('Clone option does not allowed!.', E_USER_ERROR);
    }
}

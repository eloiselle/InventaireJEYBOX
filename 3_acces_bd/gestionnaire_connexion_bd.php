<?php

  class sqlManager {
    // Variables
    private $connection = null;
    private $servername = 'localhost';
    private $username = 'root';
    private $password = 'qweasd';
    private $dbname = 'inventaire_jeybox';

    // Constructor
    public function __construct() {

    }

    // Setters
    public function set_serverName($name) {
      $this->servername = $name;
    }

    public function set_username($username) {
      $this->username = $username;
    }

    public function set_password($password) {
      $this->password = $password;
    }

    public function set_dbname($dbname) {
      $this->dbname = $dbname;
    }

    // Getters
    public function get_connection(){
      return $this->connection;
    }

    public function get_serverName() {
      return $this->servername;
    }

    public function get_username() {
      return $this->username;
    }

    public function get_password() {
      return $this->password;
    }

    public function get_dbname() {
      return $this->dbname;
    }

    // Initializes a connection to the database in the .ini file and stores the connection
    public function init_connection(){
      $this->read_parameters_from_file('connection_properties.ini');
      $this->create_connection();
    }

    // Read connection parameters from an ini file
    public function read_parameters_from_file($file_name){
      $ini_array = parse_ini_file($file_name);

      $this->set_serverName($ini_array['server_name']);
      $this->set_username($ini_array['username']);
      $this->set_password($ini_array['password']);
      $this->set_dbname($ini_array['db_name']);
    }

    // Create a connection from the objet's parameters
    public function create_connection() {
      $this->connection = new mysqli(
        $this->get_serverName(),
        $this->get_username(),
        $this->get_password(),
        $this->get_dbname()
      );
      $this->connection->set_charset('utf8');
    }
  }
?>

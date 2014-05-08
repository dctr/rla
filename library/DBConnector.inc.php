<?php
require_once('library/Achievement.inc.php');

class DBConnector {
  protected $db;

  // Singleton
  protected static $instance = null;

  protected function __clone() {}

  protected function __construct($host, $user, $pass, $name, $port) {
    $this->db = new mysqli($host, $user, $pass, $name, $port);
    if ($this->db->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $this->db->host_info . "\n";
  }

  public function achievementByURL($url) {
    $res = $this->db->query('SELECT * FROM achievements WHERE url="'.$url.'"');
    
    if ((! $res) or ($res->num_rows === 0)) {
      return null;
    }
    return $res->fetch_object(Achievement);
  }

  public static function getInstance($host, $user, $pass, $name, $port)
  {
    if (self::$instance === null)
    {
      self::$instance = new self($host, $user, $pass, $name, $port);
    }
    return self::$instance;
  }

}
?>

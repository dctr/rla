<?php
echo 'start';

require_once('config.inc.php');
require_once('DBConnector.inc.php');

$db = DBConnector::getInstance(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
$achievement = $db->achievementByURL(substr($_SERVER['PATH_INFO'], 1));
if ($achievement === null) {
  echo "empty";
}
else {
  echo "found: " . $achievement->id;
}
?>

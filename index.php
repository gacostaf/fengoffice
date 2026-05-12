<?php
file_put_contents('/tmp/fengoffice_index_hit.log', date('c') . " index hit " . __FILE__ . "\n", FILE_APPEND);

if (!version_compare(phpversion(), '5.0', '>=')) {
  die('<strong>Installation error:</strong> in order to run Feng Office you need PHP5. Your current PHP version is: ' . phpversion());
} // if

require 'init.php';

?>
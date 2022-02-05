<?php

require_once './pagesData.php';

$key = 'home';

if (!empty($_GET['id'])) {
      $key = $_GET['id'];
}
echo $data[$key];

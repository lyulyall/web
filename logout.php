<?php

require_once 'logic.php';
require_once 'db.php';

session_destroy();
header('Location: index.php ');

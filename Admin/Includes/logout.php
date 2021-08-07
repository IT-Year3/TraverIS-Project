<?php
 include '../../Shared/config/connection.php'; //. including the connection 
session_destroy();
redirect('../../index.php');
die();
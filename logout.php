<?php
include_once('session.php');
session_destroy();
header("Location: loginAll.php");
exit;
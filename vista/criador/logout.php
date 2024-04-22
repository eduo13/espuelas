<?php
include '../../extra/session.php';

session_destroy();
$_SESSION = [];
header('Location: ../../index.php');
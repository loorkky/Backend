<?php
session_start();
session_unset();
session_destroy();

$response = array("success" => true, "message" => "Logout successful");
echo json_encode($response);

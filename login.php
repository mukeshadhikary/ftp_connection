<?php
// This example uses the FTP extension for PHP
$ftp_server = "hostname";
$ftp_username = "username";
$ftp_userpass = "password";

// Connect to FTP server
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

// Get file list
$filelist = ftp_nlist($ftp_conn, ".");
print_r($filelist);

// Close FTP connection
ftp_close($ftp_conn);
?>

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


$config['from'] = 'autoemail.artikulpi@gmail.com';
$config['from_name'] = 'Auto Email';
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.gmail.com';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'autoemail.artikulpi@gmail.com';
$config['smtp_pass'] = 'm3rd3k4j4y4';
$config['smtp_timeout'] = 30;
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";
$config['crlf'] = "\r\n";
/* End of file email.php */
/* Location: ./application/config/email.php */
?>
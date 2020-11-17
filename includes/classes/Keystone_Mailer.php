<?php

/**
* THIS CLASS HANDLES EMAIL SENDING
*/
use PHPMailer\PHPMailer\PHPMailer;  

class Keystone_Mailer {
    public function __construct() {
      Keystone()->requireOnce('/includes/libs/PHPMailer/Exception.php')
      ->requireOnce('/includes/libs/PHPMailer/OAuth.php')
      ->requireOnce('/includes/libs/PHPMailer/PHPMailer.php')
      ->requireOnce('/includes/libs/PHPMailer/POP3.php')
      ->requireOnce('/includes/libs/PHPMailer/SMTP.php');

      //Import the PHPMailer class into the global namespace

    }

    public static function register_module_fields() {
      Keystone()->requireOnce('/includes/modules/modules.php');
    }
   
}

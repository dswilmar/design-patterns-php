<?php

require_once 'Log.php';
require_once 'Email.php';
require_once 'Token.php';

class AccountRecovery
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;        
    }

    public function execute()
    {
        Log::saveLog();
        Token::generateToken();
        Email::sendEmail();
    }

}
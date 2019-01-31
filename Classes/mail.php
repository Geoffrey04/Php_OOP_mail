<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 31/01/2019
 * Time: 09:37
 */

class mail
{
    private $to ;
    private $message ;
    private $subject;
    private $from ;

    public function __construct()
    {
        $this->to = $_POST['mail_dest'];
        $this->message = $_POST['message'];
        $this->subject = $_POST['mail_object'];
        $this->from = $_POST['mail_expe'];
    }

    public function send_mail()
    {
        $header = 'from' . $this->from. "\r\n" .
        'Reply to' . $this->from . "\r\n" .
        'X-mailer: PHP/' . phpversion();

        mail($this->to ,$this->subject, $this->message, $header);
        echo "Votre mail a bien été envoyé" ;
    }

}
<?php
namespace MProd\LicenciaCyPBundle\Exception;

class SimpleMessageException extends \RuntimeException{
    
    public function __construct($messageForUser, $code=400){
        parent::__construct();
        $this->message=$messageForUser;
        $this->code=$code;
    }
    
}


?>
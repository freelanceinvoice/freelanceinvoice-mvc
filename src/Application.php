<?php
namespace FreelanceInvoice\Mvc;

class Application
{
    protected $identity;
    
    /**
     * Get the user identity
     * 
     * @return unknown
     */
    public function getIdentity()
    {
        return $this->identity;
    }
    
    /**
     * Run the application.
     */
    public function run()
    {
        include 'theme/default/authentication.php';
    }
}
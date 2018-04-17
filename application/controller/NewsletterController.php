<?php

class NewsletterController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function ver($ver = null){
    	if($ver == "17Apr18"){
        	$this->View->renderWithoutHeaderAndFooter('newsletter/'.$ver);
    	}
    	else{
    		echo "Page not found.";
    	}
    }
}

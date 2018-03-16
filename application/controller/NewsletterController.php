<?php

class NewsletterController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function ver($ver = null){
        $this->View->renderWithoutHeaderAndFooter('newsletter/'.$ver);
    }
}

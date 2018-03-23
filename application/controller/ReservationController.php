<?php
class ReservationController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $checkIn = Request::post('check-in');
        $checkOut = Request::post('check-out');
        $adult = Request::post('adult');
        $child = Request::post('child');
        $hotel = Request::post('selected-hotel');
        $rate = Request::post('hotel-rate');
        $package = Request::post('package-name');
        $location = Request::post('package-location');
        //echo $checkIn . ' ' . $checkOut . ' ' . $adult . ' ' . $child . ' ' . $hotel . ' ' . $rate;
        $this->View->render('package/reservations', array('packagename' => $package, 'checkin' => $checkIn, 'checkout' => $checkOut, 'adult' => $adult, 'child' => $child, 'hotel' => $hotel, 'rate' => $rate, 'location' => $location));
    }

    public function newsletter($location)
    {
        $hotels = NewsletterModel::GetHotel($location);
        $this->View->render('package/reservations-newsletter', array('location' => $location, 'hotels' => $hotels[0], 'rates' => $hotels[1]));
    }

    public function success()
    {
        $this->View->render('package/success');
    }

    public function test()
    {
        HelperModel::SendInquiry();
    }

    public function process()
    {
        $haveFlight = Request::post('flight-val');
        $requestFlight = Request::post('request-flight-val');
        
        // echo $haveFlight . " " .$requestFlight;

        //send with flight details (yes no)
        if($haveFlight == "yes" && $requestFlight == "no")
        {
            if(HelperModel::SendMailWithFlight())
            {
                Redirect::to('reservation/success');    
            }
        }else if($haveFlight == "no" && $requestFlight == "yes")
        {
            if(HelperModel::SendMailWithRequest())
            {
                Redirect::to('reservation/success');
            }
        }else{

            if(HelperModel::SendMailPlain())
            {
                Redirect::to('reservation/success');
            }
        }
        //send with guest details (no yes)
        



        //send plain (no no)















        // $firstname = Request::post('firstname');
        // $lastname = Request::post('lastname');
        // $contact = Request::post('countrycode1') . Request::post('areacode1') . Request::post('contactnumber1');
        // $alternate = Request::post('countrycode2') . Request::post('areacode2') . Request::post('contactnumber2');
        // $email = Request::post('confirmemail');

        // $others = Request::post('request');
        // $isHaveFlight = Request::post('flight');

        // $depFlight = Request::post('');
        // $depDate = Request::post('');
        // $retFlight = Request::post('');
        // $retDate = Request::post('');


        //ADULT
        // $salutationA = Request::post('guest-salutation-a');
        // $firstnameA = Request::post('guest-firstname-a');
        // $lastnameA = Request::post('guest-lastname-a');
        // $bdayA = Request::post('birthdate-a');

        // //CHILD
        // $salutationC = Request::post('guest-salutation-c');
        // $firstnameC = Request::post('guest-firstname-c');
        // $lastnameC = Request::post('guest-lastname-c');
        // $bdayC = Request::post('birthdate-c');

        // // for($a = 0; $a < count($a); $a++)
        // // {
        // //     echo $salutationA[$a] . " " . $firstnameA[$a] . ", " . $lastnameA[$a];
        // // }

        // $a = 0;
        // foreach($firstnameA as $fname)
        // {
        //     echo $salutationA[$a] . " " . $firstnameA[$a] . ", " . $lastnameA[$a];
        //     $a++;
        // }
        
        // $c = 0;
        // foreach($firstnameC as $fnamec)
        // {
        //     echo $salutationC[$c] . " " . $firstnameC[$c] . ", " . $lastnameC[$c];
        //     $c++;
        // }
        
    }

    public function processnewsletter()
    {
        $haveFlight = Request::post('flight-val');
        $requestFlight = Request::post('request-flight-val');

        //send with flight details (yes no)
        if($haveFlight == "yes"){
            if(HelperModel::SendMailWithFlight()){
                Redirect::to('reservation/success');    
            }
        }else{
            if(HelperModel::SendMailPlain()){
                Redirect::to('reservation/success');
            }
        }
    }

}

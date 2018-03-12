<?php

class HelperModel
{

    public static function CreateSlug($string) {
        //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }

    public static function RemoveSlug($string)
    {
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        // $string = preg_replace("/[\s_]/", "-", $string);
        $string = preg_replace('/-/',' ',$string);
        return $string;
    }


    public static function SendReply($package, $adult, $child, $start, $end, $email, $name, $hotel)
    {
        $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></head><body>';
        $message .= "<img src='http://itstravelcorp.com/its-black.png'>";
        $message .= "<br><br>";
        $message .= "Date";
        $message .= "<br>";
        $message .= "Dear " . $name . ",";
        $message .= "<br>";
        $message .= "Thank you for your interest in booking your travel goals with Innovative Travel Solutions, Inc.";
        $message .= "<br>";
        $message .= "We have already received your inquiry and it is now queued up to be attended by our travel consultants.";
        $message .= "<br>";
        $message .= "Kindly wait for our response. And expect to have one of our travel consultants to keep in touch with you via phone or email as soon as possible.";
        $message .= "<br>";

        $message .= "<br>";
        $message .= "Please note of the following Booking Details as follows: ";
        $message .= "<br>";
        $message .= "Package Name: " . $package;
        $message .= "<br>";
        $message .= "You have booked " . $adult . " adults / " . $child . " child in " . ucwords($hotel) . ", " . " Package for date of travel " . $start . " to " . $end;
        $message .= "<br>";
        $message .= "<br>";
        $message .= "Note:  There is no actual booking made for you yet.";
        $message .= "<br>";
        $message .= "Prices reflected in ITS website may vary according to the availability of the rooms and your travel dates. It is also not applicable during peak seasons (holidays, festivities of destination) ";
        $message .= "<br>";
        $message .= "Looking for more Travel Destinations, please visit our website at http://itstravelcorp.com";
        $message .= "<br>";
        $message .= "<br>";
        $message .= "<h4>General Terms & Conditions (applicable for all types of bookings)</h4>";
        $message .= "<ul>";
        $message .= "<li>Special requests such as early check-in, late check-out, bed configuration, etc. are not guaranteed and are subject to the hotel's availability and discretion.</li>";
        $message .= "<li>Bookings with flight and/or additional/optional tours from third-party providers and operators associated with us or providing products and services via this site, have the right to cancel travel/transfers/ tours for safety and security reasons (as determined by the third-party provider), or when justified by circumstances beyond the third-party providers' control, or suspension of the operation of a route for reasons outside the third-party providers' control.</li>";
        $message .= "<li>ITS is not under any circumstances liable to you in the event that the provision of the services and facilities you have booked is compromised in any way by an event or a combination of events that is beyond our control or that of our suppliers/hotels or due to circumstances where liability is excluded here below. The events referred to above include (but are not limited to) the following: war or threats of war, acts of God, civil disturbance, airport or ports being closed, etc.</li>";
        $message .= "<li>It is your responsibility to ensure that you are fit to travel and participate in all of the services and facilities you have booked to undertake. We are not liable if you are refused entry to any country or part of a country because you do not have or cannot prove that you have the necessary vaccinations or do not comply in any way with the health requirements of your destinations.</li>";

        $message .= "</ul>";
        $message .= "<br>";
        $message .= "<br>";
        $message .= "Enjoy your trip! <br>ITS Innovative Travel Solutions, Inc <br>";
        $message .= "<br>";
        $message .= "<small>This email is an auto-generated message, please do not reply. For further questions please call us at (02) 812-4970, +63 916 785 4754 (Monday to Friday, 9:00am to 6pm) or email us at itstravelcorp@gmail.com</small>";
        

        $message .= "</body></html>";

        $mail = new PHPMailer;
        
        //Tell PHPMailer to use SMTP
        // $mail->isSMTP();
        
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        
        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        $mail->IsHTML(true);
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "itstravelcorp@gmail.com";
        
        //Password to use for SMTP authentication
        $mail->Password = "Helloworld123";
        
        //Set FROM - guest
        $mail->setFrom('no-repy@itstravelcorp.com', 'No Reply');
        
        //Set TO - 
        $mail->addAddress($email, 'Inquiry Confirmation');
        
        //Set the subject line
        $mail->Subject = "Inquiry Confirmation";
    
        $mail->Body = $message;
        
        
        //send the message, check for errors
        if (!$mail->send()) {
            // echo "Mailer Error: " . $mail->ErrorInfo;
            return false;
        } else {

            
            return true;
        }


    }


    public static function SendMailWithRequest()
    {
        $firstname = Request::post('firstname');
        $lastname = Request::post('lastname');
        $contact = Request::post('countrycode1') . Request::post('areacode1') . Request::post('contactnumber1');
        $alternate = Request::post('countrycode2') . Request::post('areacode2') . Request::post('contactnumber2');
        $email = Request::post('confirmemail');
        $others = Request::post('request');
        $promocode = Request::post('promocode');

        $packagelocation = Request::post('packagelocation');
        $packagename = Request::post('packagename');
        $packagehotel = Request::post('packagehotel');
        $packagerate = Request::post('packagerate');
        $packagestart = Request::post('packagestart');
        $packageend = Request::post('packageend');
        $packageadult = Request::post('packageadult');
        $packagechild = Request::post('packagechild');
        $packagetotal = Request::post('packagetotal');

        //ADULT
        $salutationA = Request::post('guest-salutation-a');
        $firstnameA = Request::post('guest-firstname-a');
        $lastnameA = Request::post('guest-lastname-a');
        $bdayA = Request::post('birthdate-a');

        //CHILD
        $salutationC = Request::post('guest-salutation-c');
        $firstnameC = Request::post('guest-firstname-c');
        $lastnameC = Request::post('guest-lastname-c');
        $bdayC = Request::post('birthdate-c');


        $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></head><body>';
        $message .= "<table style='border: 3px solid #000000;  width: 450px;  text-align: left;  border-collapse: collapse;'>";
        
        $message .= "<tr><th style='border: 1px solid #000000; padding: 5px 4px;'  colspan='2'>Inquiry Details</th></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Name:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . ucwords($lastname) . ucwords($firstname) . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Email:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $email . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Contact:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $contact . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Alternate Contact:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $alternate . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Destination:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagelocation. "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Package Name:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagename . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Hotel Name:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagehotel . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Start Date:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagestart . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>End Date:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packageend . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Adult/s:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packageadult . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Child/s:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagechild . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Rate per Person:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagerate . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Total Cost:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagetotal . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Special Request:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $others . " with Promo Code: " . $promocode . "</td></tr>";
        $message .= "</table>";

        $message .= "<br><br>";


        $message .= "<table style='border: 3px solid #000000;  width: 450px;  text-align: left;  border-collapse: collapse;'>";
        
        $message .= "<tr><th style='border: 1px solid #000000; padding: 5px 4px;'  colspan='3'>Request Flights</th></tr>";
        
        if($firstnameA) {
            $a = 0;
            foreach($firstnameA as $fname)
            {
                $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Adult Details:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $salutationA[$a] . " " . $firstnameA[$a] . ", " . $lastnameA[$a] . "</td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $bdayA[$a] . "</td></tr>";
                $a++;
            }
        }
        
        if($firstnameC) {
            $c = 0;
            foreach($firstnameC as $fnamec)
            {
                $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Child Details:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $salutationA[$a] . " " . $firstnameA[$a] . ", " . $lastnameA[$a] . "</td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $bdayA[$a] . "</td></tr>";
                $c++;
            }
        }

        $message .= "</table>";
        $message .= "</body></html>";


        $name = ucwords($lastname) . ', ' . ucwords($firstname);

        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        // $mail->isSMTP();
        
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        
        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        $mail->IsHTML(true);
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "itstravelcorp@gmail.com";
        
        //Password to use for SMTP authentication
        $mail->Password = "Helloworld123";
        
        //Set FROM - guest
        $mail->setFrom($email, 'Inquiry');
        
        //Set TO - 
        $mail->addAddress('itstravelcorp@gmail.com', 'Inquiry');
        
        //Set the subject line
        $mail->Subject = $name . " - " . strtoupper($packagelocation);
    
        $mail->Body = $message;
        
        //send the message, check for errors
        if (!$mail->send()) {
            // echo "Mailer Error: " . $mail->ErrorInfo;
            return false;
        } else {
            self::SendReply($packagename, $packageadult, $packagechild, $packagestart, $packageend, $email, $name, $packagehotel);
            return true;
        }




        
    }

    public static function SendMailPlain()
    {

        $firstname = Request::post('firstname');
        $lastname = Request::post('lastname');
        $contact = Request::post('countrycode1') . Request::post('areacode1') . Request::post('contactnumber1');
        $alternate = Request::post('countrycode2') . Request::post('areacode2') . Request::post('contactnumber2');
        $email = Request::post('confirmemail');
        $others = Request::post('request');
        $promocode = Request::post('promocode'); 

        $packagelocation = Request::post('packagelocation');
        $packagename = Request::post('packagename');
        $packagehotel = Request::post('packagehotel');
        $packagerate = Request::post('packagerate');
        $packagestart = Request::post('packagestart');
        $packageend = Request::post('packageend');
        $packageadult = Request::post('packageadult');
        $packagechild = Request::post('packagechild');
        $packagetotal = Request::post('packagetotal');

        $depFlight = Request::post('dep-flight');
        $depDate = Request::post('dep-date');
        $retFlight = Request::post('ret-flight');
        $retDate = Request::post('ret-date');


        $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></head><body>';
        $message .= "<table style='border: 3px solid #000000;  width: 450px;  text-align: left;  border-collapse: collapse;'>";
        
        $message .= "<tr><th style='border: 1px solid #000000; padding: 5px 4px;'  colspan='2'>Inquiry Details</th></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Name:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . ucwords($lastname) . ucwords($firstname) . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Email:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $email . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Contact:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $contact . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Alternate Contact:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $alternate . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Destination:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagelocation. "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Package Name:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagename . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Hotel Name:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagehotel . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Start Date:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagestart . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>End Date:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packageend . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Adult/s:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packageadult . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Child/s:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagechild . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Rate per Person:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagerate . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Total Cost:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagetotal . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Special Request:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $others . " with Promo Code: " . $promocode . "</td></tr>";
        $message .= "</table>";

        $message .= "<br><br>";


        $message .= "</body></html>";


        $name = ucwords($lastname) . ', ' . ucwords($firstname);



        $mail = new PHPMailer;
        
        //Tell PHPMailer to use SMTP
        // $mail->isSMTP();
        
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        
        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        $mail->IsHTML(true);
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "itstravelcorp@gmail.com";
        
        //Password to use for SMTP authentication
        $mail->Password = "Helloworld123";
        
        //Set FROM - guest
        $mail->setFrom($email, 'Website Inquiry');
        
        //Set TO - 
        $mail->addAddress('itstravelcorp@gmail.com', 'Website Inquiry');
        
        //Set the subject line
        $mail->Subject = $name . " - " . strtoupper($packagelocation);
    
        $mail->Body = $message;
        
        
        //send the message, check for errors
        if (!$mail->send()) {
            // echo "Mailer Error: " . $mail->ErrorInfo;

            return false;
        } else {
            self::SendReply($packagename, $packageadult, $packagechild, $packagestart, $packageend, $email, $name, $packagehotel);
            return true;
        }



    }

    public static function SendMailWithFlight()
    {
        
        $firstname = Request::post('firstname');
        $lastname = Request::post('lastname');
        $contact = Request::post('countrycode1') . Request::post('areacode1') . Request::post('contactnumber1');
        $alternate = Request::post('countrycode2') . Request::post('areacode2') . Request::post('contactnumber2');
        $email = Request::post('confirmemail');
        $others = Request::post('request');
        $promocode = Request::post('promocode');        

        $packagelocation = Request::post('packagelocation');
        $packagename = Request::post('packagename');
        $packagehotel = Request::post('packagehotel');
        $packagerate = Request::post('packagerate');
        $packagestart = Request::post('packagestart');
        $packageend = Request::post('packageend');
        $packageadult = Request::post('packageadult');
        $packagechild = Request::post('packagechild');
        $packagetotal = Request::post('packagetotal');

        $depFlight = Request::post('dep-flight');
        $depDate = Request::post('dep-date');
        $retFlight = Request::post('ret-flight');
        $retDate = Request::post('ret-date');


        $message = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></head><body>';
        $message .= "<table style='border: 3px solid #000000;  width: 450px;  text-align: left;  border-collapse: collapse;'>";
        
        $message .= "<tr><th style='border: 1px solid #000000; padding: 5px 4px;'  colspan='2'>Inquiry Details</th></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Name:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . ucwords($lastname) . ucwords($firstname) . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Email:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $email . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Contact:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $contact . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Alternate Contact:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $alternate . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Destination:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagelocation. "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Package Name:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagename . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Hotel Name:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagehotel . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Start Date:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagestart . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>End Date:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packageend . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Adult/s:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packageadult . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Child/s:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagechild . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Rate per Person:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagerate . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Total Cost:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $packagetotal . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Special Request:</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $others . " with Promo Code: " . $promocode . "</td></tr>";
        $message .= "</table>";

        $message .= "<br><br>";

        $message .= "<table style='border: 3px solid #000000;  width: 450px;  text-align: left;  border-collapse: collapse;'>";
        $message .= "<tr><th style='border: 1px solid #000000; padding: 5px 4px;'  colspan='2'>Flight Details</th></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Departure Flight No.</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $depFlight . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Departure Date and Time</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $depDate . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Return Flight No.</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $retFlight . "</td></tr>";
        $message .= "<tr><td style='border: 1px solid #000000; padding: 5px 4px;'><strong>Return Date and Time</strong> </td><td style='border: 1px solid #000000; padding: 5px 4px;'>" . $retDate . "</td></tr>";


        $message .= "</table>";


        $message .= "</body></html>";


        $name = ucwords($lastname) . ', ' . ucwords($firstname);



        $mail = new PHPMailer;
        
        //Tell PHPMailer to use SMTP
        // $mail->isSMTP();
        
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        
        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        $mail->IsHTML(true);
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "itstravelcorp@gmail.com";
        
        //Password to use for SMTP authentication
        $mail->Password = "Helloworld123";
        
        //Set FROM - guest
        $mail->setFrom($email, 'Website Inquiry');
        
        //Set TO - 
        $mail->addAddress('itstravelcorp@gmail.com', 'Website Inquiry');
        
        //Set the subject line
        $mail->Subject = $name . " - " . strtoupper($packagelocation);
    
        $mail->Body = $message;
        
        
        //send the message, check for errors
        if (!$mail->send()) {
            // echo "Mailer Error: " . $mail->ErrorInfo;
            return false;
        } else {
            self::SendReply($packagename, $packageadult, $packagechild, $packagestart, $packageend, $email, $name, $packagehotel);
            return true;
        }




    }
























    public static function SendInquiry()
    {
        $body = "test";
        $name = "niel";

        $mail = new PHPMailer;
        
        //Tell PHPMailer to use SMTP
        // $mail->isSMTP();
        
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;
        
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        
        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        $mail->IsHTML(true);
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "itstravelcorp@gmail.com";
        
        //Password to use for SMTP authentication
        $mail->Password = "Helloworld123";
        
        //Set who the message is to be sent from
        $mail->setFrom('itsmeniel00@gmail.com', 'Inquiry');
        
        //Set who the message is to be sent to
        $mail->addAddress('itstravelcorp.com@gmail.com', 'Inquiry');
        
        //Set the subject line
        $mail->Subject = 'Payday Sale: ' . strtoupper($name);
    
        //Replace the plain text body with one created manually
        $mail->Body = $body;
        
        
        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            // echo "Message sent!";
            // //Section 2: IMAP
            // //Uncomment these to save your message in the 'Sent Mail' folder.
            // #if (save_mail($mail)) {
            // #    echo "Message saved!";
            // #}
        }
    }
}
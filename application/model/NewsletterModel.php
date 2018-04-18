<?php

class NewsletterModel
{
    public static function GetHotel($ver, $location)
    {
        $json = file_get_contents(Config::get('URL') . 'data/'.$ver.'-newsletter.json');
        $json_data = json_decode($json,true);

        $list_hotels = array();
        $list_rates = array();
        foreach ($json_data["location"][$location] as $key => $value) 
        {
            array_push($list_hotels, $key);
            array_push($list_rates, $value);
        }
        return array($list_hotels, $list_rates);
    }
}
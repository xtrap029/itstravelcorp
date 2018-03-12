<?php

class PackageModel
{
    public static function GetCategory($location)
    {
        $json = file_get_contents(Config::get('URL') . 'data/' . $location .'.json');
        $json_data = json_decode($json,true);

        return $json_data["categories"];
    }

    public static function GetPackages($location)
    {
        $json = file_get_contents(Config::get('URL') . 'data/' . $location .'.json');
        $json_data = json_decode($json,true);

        $list_packages = array();
        foreach ($json_data["packages"] as $key => $value) 
        {
            array_push($list_packages, $key);
        }
        return $list_packages;
    }

    public static function PackageDetails($location, $package)
    {
        $json = file_get_contents(Config::get('URL') . 'data/' . $location .'.json');
        $json_data = json_decode($json,true);

         return $json_data["packages"][$package];
    }


    public static function HotelImages($location, $hotel_name)
    {
        $json = file_get_contents(Config::get('URL') . 'data/' . $location .'.json');
        $json_data = json_decode($json,true);

         return $json_data["images"][$hotel_name];
    }

    public static function GetPackageInfo($location, $package)
    {
        $json = file_get_contents(Config::get('URL') . 'data/' . $location .'.json');
        $json_data = json_decode($json,true);


        foreach ($json_data as $key1 => $value1) 
        {
            if(strtolower($json_data[$key1]["package_name"]) == strtolower($package))
            {
                return $json_data[$key1];
                // print_r($json_data[$key1]);
            }
        }
    }

    // public static function GetPackages($location)
    // {
    //     $json = file_get_contents(Config::get('URL') . 'data/' . $location .'.json');
    //     $json_data = json_decode($json,true);

    //     return $json_data;
    // }
}
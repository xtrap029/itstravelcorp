<?php

class PackagesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function coron($package = null)
    {
        $location = "coron";
        if($package != null)
        {
            $details = PackageModel::PackageDetails($location, HelperModel::RemoveSlug($package));
            $this->View->render('package/details', array('location' => $location, 'package' => $details, 'packagename' => $package));
        }
        else
        {
            $categories = PackageModel::GetCategory($location);
            $packages = PackageModel::GetPackages($location);
            $this->View->render('package/index', array('location' => $location, 'categories' => $categories, 'packages' => $packages));
        }
    }

    public function cebu($package = null)
    {   
        $location = "cebu";
        if($package != null)
        {
            $details = PackageModel::PackageDetails($location, HelperModel::RemoveSlug($package));
            $this->View->render('package/details', array('location' => $location, 'package' => $details, 'packagename' => $package));
        }
        else
        {
            $categories = PackageModel::GetCategory($location);
            $packages = PackageModel::GetPackages($location);
            $this->View->render('package/index', array('location' => $location, 'categories' => $categories, 'packages' => $packages));
        }

    }


    public function elnido($package = null)
    {   
        $location = "elnido";
        if($package != null)
        {
            $details = PackageModel::PackageDetails($location, HelperModel::RemoveSlug($package));
            $this->View->render('package/details', array('location' => $location, 'package' => $details, 'packagename' => $package));
        }
        else
        {
            $categories = PackageModel::GetCategory($location);
            $packages = PackageModel::GetPackages($location);
            $this->View->render('package/index', array('location' => $location, 'categories' => $categories, 'packages' => $packages));
        }
    }


    public function bohol($package = null)
    {   
        $location = "bohol";
        if($package != null)
        {
            $details = PackageModel::PackageDetails($location, HelperModel::RemoveSlug($package));
            $this->View->render('package/details', array('location' => $location, 'package' => $details, 'packagename' => $package));
        }
        else
        {
            $categories = PackageModel::GetCategory($location);
            $packages = PackageModel::GetPackages($location);
            $this->View->render('package/index', array('location' => $location, 'categories' => $categories, 'packages' => $packages));
        }
    }

    public function boracay($package = null)
    {   
        $location = "boracay";
        if($package != null)
        {
            $details = PackageModel::PackageDetails($location, HelperModel::RemoveSlug($package));
            $this->View->render('package/details', array('location' => $location, 'package' => $details, 'packagename' => $package));
        }
        else
        {
            $categories = PackageModel::GetCategory($location);
            $packages = PackageModel::GetPackages($location);
            $this->View->render('package/index', array('location' => $location, 'categories' => $categories, 'packages' => $packages));
        }
    }


    public function puertoprincesa($package = null)
    {   
        $location = "puertoprincesa";
        if($package != null)
        {
            $details = PackageModel::PackageDetails($location, HelperModel::RemoveSlug($package));
            $this->View->render('package/details', array('location' => $location, 'package' => $details, 'packagename' => $package));
        }
        else
        {
            $categories = PackageModel::GetCategory($location);
            $packages = PackageModel::GetPackages($location);
            $this->View->render('package/index', array('location' => $location, 'categories' => $categories, 'packages' => $packages));
        }
    }






    public function test()
    {
        // $location = "coron";

        // $cat = PackageModel::GetCategory($location);
       
        // foreach($cat as $a)
        // {
        //     echo $a . '<br>';
        // }
        
        $location = "cebu";

        // $json = file_get_contents(Config::get('URL') . 'data/' . $location .'.json');
        // $json_data = json_decode($json,true);


        // $list_packages = array();
        // foreach ($json_data["packages"] as $key => $value) 
        // {
        //     array_push($list_packages, $key);
        // }
        
        // print_r($list_packages);

        // foreach($list_packages as $a)
        // {
        //     echo $a;
        // }
        // $name = "Coron Ultimate Tour";
        // print_r($json_data["packages"]["afternoon fun tour"]);
        
        $package = "afternoon-fun-tour";
        $details = PackageModel::PackageDetails($location, HelperModel::RemoveSlug($package));

        // print_r($details["hotels"]);
        foreach($details["hotels"] as $x=> $val)
        {
            echo $x . ' - ' . $val["twin"];
        }
        
    }
}

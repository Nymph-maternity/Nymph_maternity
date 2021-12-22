<?php

namespace App\Controllers\Auth;

class DetailsController
{
    public function details()
    {
        require_once("./App/view/details.php");
    }
    public function doDetails()
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $blood = $_POST['bloodgroup'];
        $genotype = $_POST['genotype'];
        $weight = $_POST['weight'];
        $illness = $_POST['illness'];
        $phone = $_POST['phoneNumber'];
        $country = $_POST['country'];
        $state = $_POST['state'];
    }
    public function details2()
    {
        require_once("./App/view/details2.php");
    }
}

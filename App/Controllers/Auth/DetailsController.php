<?php

namespace App\Controllers\Auth;

use App\Services\AuthService;
use Symfony\Component\HttpFoundation\Request;

class DetailsController
{
    public function details()
    {
        require_once("./App/view/details.php");
    }
    public function doDetails()
    {
        $context = Request::createFromGlobals();

        $email = $context->request->get('email');
        $firstname = $context->request->get('firstname');
        $lastname = $context->request->get('lastname');
        $age = $context->request->get('age');
        $blood = $context->request->get('bloodgroup');
        $genotype = $context->request->get('genotype');
        $weight = $context->request->get('weight');
        $city = $context->request->get('city');
        $illness = $context->request->get('illness');
        $phone = $context->request->get('phone');
        $country = $context->request->get('country');
        $state = $context->request->get('state');
        $disability = $context->request->get('disability');
        $diabetes = $context->request->get('diabetes');
        $pregnancy = $context->request->get('pregnancy');
        $firstPregnant = $context->request->get('firstPregnant');
        echo $email;
        $details = new AuthService();
        if ($details->completeDetails($email, $firstname, $lastname, $age, $country, $state, $city, $blood, $genotype, $weight, $illness, $disability, $diabetes, $phone, $pregnancy, $firstPregnant) == true) {
            "<script> alert('Registration Complete')</script>";
        }
    }
    public function details2()
    {
        require_once("./App/view/details2.php");
    }
}

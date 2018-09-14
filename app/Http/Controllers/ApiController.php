<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function apiCheckCompanyExist()
    {

        $errors = array();
        $form_data = array();
        if (empty($_POST['name'])) {
            $errors['name'] = 'Company Name Cannot Be Blank';
        }
        if (!empty($errors)) {
            $form_data['success'] = false;
            $form_data['errors'] = $errors;
        } else {
            $name = $_POST['name'];
            $com = Company::where('subdomain', $name)->get();
            if ($com->count() > 0) {
                $form_data['success'] = true;
                $form_data['logo'] = $com->first()->logo;
            } else {
                $form_data['success'] = false;
                $form_data['logo'] = "";
            }
        }
        echo json_encode($form_data, JSON_UNESCAPED_UNICODE);
    }
}

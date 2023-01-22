<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function signUp(Request $signupUser)
    {
        $signupUser->validate(
            [
                'fullName' => 'required',
                'country' => 'required',
                'category' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
                'terms_Conditions' => 'required',
            ]
        );
        $user = new User();
        $user->name = $signupUser->fullName;
        $user->country = $signupUser->country;
        $user->category = $signupUser->category;
        $user->password = $signupUser->password;
        try {
            $user->save();
        } catch (\Throwable $th) {
            return redirect('/')->with('errorMessage', 'Email Already Used Please Change Email')->with('className', 'danger');
        }
        return redirect('/')->with('errorMessage', 'Registered SuccessFully')->with('className', 'success');

        return $signupUser;
    }
    public function register_company(Request $request)
    {
        $request->validate(
            [
                'company_name' => 'required',
                'company_country_name' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
                'terms_&_Conditions' => 'required',
            ]
        );
        $company = new User();
        $company->name = $request->company_name;
        $company->role = "company";
        $company->country = $request->company_country_name;
        $company->password = $request->password;
        try {
            $company->save();
        } catch (\Throwable $th) {
            return redirect('/')->with('errorMessage', 'Datbase Erorr')->with('className', 'danger');
        }
        return redirect('/')->with('errorMessage', 'Registered SuccessFully')->with('className', 'success');
    }
}
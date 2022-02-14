<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
class RegisterController extends Controller
{
     public function getCustomer() {
         $customer = Registration::all();
         return response($customer, 200);
   }
   public function createCustomer(Request $request) {
    $result = $request->all();
    $user = new Registration;
    // $user->name = $request->name;
    // $user->email = $request->email;
    // $user->mobile = $request->mobile;
    // $user->file = $request->file;
    // $user->job_title = $request->job_title;
    // $user->company_name = $request->company_name;
    // $user->date_started = $request->date_started;
    // $user->industry = $request->industry;
    // $user->education = $request->education;
    // $user->date_Of_Compleeted = $request->date_Of_Compleeted;
    // $user->skills = $request->skills;
    // $user->save();

    return response()->json([
      "message" => "user added created"
    ], 201);
  }
}

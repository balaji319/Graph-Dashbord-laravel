<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Session;

class UserController extends Controller {

    public function login(Request $request) {
        try {
            if (!($request->session()->exists('token') && $request->hasCookie('token'))) {
                return view('login');
            } else {
                return redirect('dashboard');
            }
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */
    public function myHome() {

        return view('myHome');
    }

    /**

     * Show the my users page.

     *

     * @return \Illuminate\Http\Response

     */
    public function myUsers() {

        return view('myUsers');
    }

    public function loginApi(Request $request) {
        try {
            $input = $request->all();
            $validatedData = $request->validate([
                'CompanyId' => 'required|Integer',
                'Password' => 'required',
                'PersonalCode' => 'required',
            ]);

            $response = User::login($input);
            if (!empty($response)) {
                $request->session()->put('Responce', $response[0]);
                return redirect('/my-home');
            } else {
                $error[] = 'Something went wrong';
                return view('login');
            }
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public function logout(Request $request) {
        try {
            $request->session()->flush();
            return redirect('/login');
        } catch (Exception $ex) {
            throw $ex;
        }
    }
public function getgraph(Request $request) {

      try {
                // Read File

        $vaar['labels']=["January", "February", "March", "April", "May", "June", "July"];

     $jsonString = file_get_contents(base_path('resources/views/json/home_bar.json'));

    echo json_encode($vaar);
             
        } catch (Exception $ex) {
            throw $ex;
        }
    }



}

<?php

namespace App\Http\Controllers;

use Redirect;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class YepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('yep');
    }

    public function dpsssearch()
    {
        return view('dpss');
    }
    
    public function dusercreate()
    {
        $duser = DB::table('yep_department_user')
                ->where('status', '1')
                ->get();
        return view('YepDepartmentUser', ['duser' => $duser]);
    }
    
    public function duseredit($id)
    {
        $duser = DB::table('yep_department_user')
                ->where('status', '1')
                ->where('id', $id)
                ->first();
        return view('YepDepartmentUserEdit', ['duser' => $duser,'id'=>$id]);
    }
    
    public function createduser(Request $request) {

        if ($request->isMethod('post')) {
            $username = $request->input('username');
            $lname = $request->input('lname');
            $fname = $request->input('fname');
            $minitial = $request->input('minitial');
            $email = $request->input('email');
            $phone1 = $request->input('phone1');
            $phone2 = $request->input('phone2');
            $address1 = $request->input('address1');
            $address2 = $request->input('address2');
            $address3 = $request->input('address3');
            $city = $request->input('city');
            $state = $request->input('state');
            $zipcode = $request->input('zipcode');
            //form validation
            $validator = Validator::make($request->all(), [
                        'username' => 'required',
                        'lname' => 'required',
                        'fname' => 'required',
                        'email' => 'required',
                        'phone1' => 'required',
                        'address1' => 'required',
                        'city' => 'required',
                        'state' => 'required',
                        'zipcode' => 'required',
            ]);

            if ($validator->fails()) {
                $messages = "Please fill all required fields.";
                Session::flash('error', $messages);
                return Redirect::to('dusercreate');
            } else {
                $array = array(
                    'username' => $username,
                    'lname' => $lname,
                    'fname' => $fname,
                    'minitial' => $minitial,
                    'email' => $email,
                    'phone1' => $phone1,
                    'phone2' => $phone2,
                    'address1' => $address1,
                    'address2' => $address2,
                    'address3' => $address3,
                    'city' => $city,
                    'state' => $state,
                    'zipcode' => $zipcode,
                    'createtime' => time(),
                    'updatetime' => time()
                );

                $id = DB::table('yep_department_user')->insertGetId($array);
                if ($id) {
                    $messages = "Congrats! You have successfully added new User.";
                    Session::flash('error', $messages);
                    return Redirect::to('dusercreate');
                } else {
                    $messages = "Sorry! Something went wrong.";
                    Session::flash('error', $messages);
                    return Redirect::to('dusercreate');
                }
            }
        }
    }
    
    public function updateduser(Request $request) {

        if ($request->isMethod('post')) {
            $id = $request->input('id');
            $username = $request->input('username');
            $lname = $request->input('lname');
            $fname = $request->input('fname');
            $minitial = $request->input('minitial');
            $email = $request->input('email');
            $phone1 = $request->input('phone1');
            $phone2 = $request->input('phone2');
            $address1 = $request->input('address1');
            $address2 = $request->input('address2');
            $address3 = $request->input('address3');
            $city = $request->input('city');
            $state = $request->input('state');
            $zipcode = $request->input('zipcode');
            //form validation
            $validator = Validator::make($request->all(), [
                        'username' => 'required',
                        'lname' => 'required',
                        'fname' => 'required',
                        'email' => 'required',
                        'phone1' => 'required',
                        'address1' => 'required',
                        'city' => 'required',
                        'state' => 'required',
                        'zipcode' => 'required',
            ]);

            if ($validator->fails()) {
                $messages = "Please fill all required fields.";
                Session::flash('error', $messages);
                return Redirect::to('duseredit',['id'=>$id]);
            } else {
                $array = array(
                    'username' => $username,
                    'lname' => $lname,
                    'fname' => $fname,
                    'minitial' => $minitial,
                    'email' => $email,
                    'phone1' => $phone1,
                    'phone2' => $phone2,
                    'address1' => $address1,
                    'address2' => $address2,
                    'address3' => $address3,
                    'city' => $city,
                    'state' => $state,
                    'zipcode' => $zipcode,
                    'updatetime' => time()
                );

                $id = DB::table('yep_department_user')->where('id', $id)->update($array);
                if ($id) {
                    $messages = "Congrats! You have successfully updated details.";
                    Session::flash('error', $messages);
                    return Redirect::to('dusercreate');
                } else {
                    $messages = "Sorry! Something went wrong.";
                    Session::flash('error', $messages);
                    return Redirect::to('duseredit',['id'=>$id]);
                }
            }
        }
    }
    
    public function ausercreate()
    {
        $auser = DB::table('yep_agency_user')
                ->where('status', '1')
                ->get();
        return view('YepAgencyUser', ['auser' => $auser]);
    }
    
    public function auseredit($id)
    {
        $auser = DB::table('yep_agency_user')
                ->where('status', '1')
                ->where('id', $id)
                ->first();
        return view('YepAgencyUserEdit', ['auser' => $auser,'id'=>$id]);
    }
    
    public function createauser(Request $request) {

        if ($request->isMethod('post')) {
            $username = $request->input('username');
            $lname = $request->input('lname');
            $fname = $request->input('fname');
            $minitial = $request->input('minitial');
            $email = $request->input('email');
            $phone1 = $request->input('phone1');
            $phone2 = $request->input('phone2');
            $address1 = $request->input('address1');
            $address2 = $request->input('address2');
            $address3 = $request->input('address3');
            $city = $request->input('city');
            $state = $request->input('state');
            $zipcode = $request->input('zipcode');
            //form validation
            $validator = Validator::make($request->all(), [
                        'username' => 'required',
                        'lname' => 'required',
                        'fname' => 'required',
                        'email' => 'required',
                        'phone1' => 'required',
                        'address1' => 'required',
                        'city' => 'required',
                        'state' => 'required',
                        'zipcode' => 'required',
            ]);

            if ($validator->fails()) {
                $messages = "Please fill all required fields.";
                Session::flash('error', $messages);
                return Redirect::to('ausercreate');
            } else {
                $array = array(
                    'username' => $username,
                    'lname' => $lname,
                    'fname' => $fname,
                    'minitial' => $minitial,
                    'email' => $email,
                    'phone1' => $phone1,
                    'phone2' => $phone2,
                    'address1' => $address1,
                    'address2' => $address2,
                    'address3' => $address3,
                    'city' => $city,
                    'state' => $state,
                    'zipcode' => $zipcode,
                    'createtime' => time(),
                    'updatetime' => time()
                );

                $id = DB::table('yep_agency_user')->insertGetId($array);
                if ($id) {
                    $messages = "Congrats! You have successfully added new User.";
                    Session::flash('error', $messages);
                    return Redirect::to('ausercreate');
                } else {
                    $messages = "Sorry! Something went wrong.";
                    Session::flash('error', $messages);
                    return Redirect::to('ausercreate');
                }
            }
        }
    }
    
    public function updateauser(Request $request) {

        if ($request->isMethod('post')) {
            $id = $request->input('id');
            $username = $request->input('username');
            $lname = $request->input('lname');
            $fname = $request->input('fname');
            $minitial = $request->input('minitial');
            $email = $request->input('email');
            $phone1 = $request->input('phone1');
            $phone2 = $request->input('phone2');
            $address1 = $request->input('address1');
            $address2 = $request->input('address2');
            $address3 = $request->input('address3');
            $city = $request->input('city');
            $state = $request->input('state');
            $zipcode = $request->input('zipcode');
            //form validation
            $validator = Validator::make($request->all(), [
                        'username' => 'required',
                        'lname' => 'required',
                        'fname' => 'required',
                        'email' => 'required',
                        'phone1' => 'required',
                        'address1' => 'required',
                        'city' => 'required',
                        'state' => 'required',
                        'zipcode' => 'required',
            ]);

            if ($validator->fails()) {
                $messages = "Please fill all required fields.";
                Session::flash('error', $messages);
                return Redirect::to('auseredit',['id'=>$id]);
            } else {
                $array = array(
                    'username' => $username,
                    'lname' => $lname,
                    'fname' => $fname,
                    'minitial' => $minitial,
                    'email' => $email,
                    'phone1' => $phone1,
                    'phone2' => $phone2,
                    'address1' => $address1,
                    'address2' => $address2,
                    'address3' => $address3,
                    'city' => $city,
                    'state' => $state,
                    'zipcode' => $zipcode,
                    'updatetime' => time()
                );

                $id = DB::table('yep_agency_user')->where('id', $id)->update($array);
                if ($id) {
                    $messages = "Congrats! You have successfully updated details.";
                    Session::flash('error', $messages);
                    return Redirect::to('ausercreate');
                } else {
                    $messages = "Sorry! Something went wrong.";
                    Session::flash('error', $messages);
                    return Redirect::to('auseredit',['id'=>$id]);
                }
            }
        }
    }
    
    public function applicantinfo()
    {
        return view('YepApplicantInfo');
    }
    public function auserassign()
    {
        return view('YepAgencyUserAssign');
    }
    public function duserassign()
    {
        return view('YepDepartmentUserAssign');
    }
    public function naics()
    {
        return view('YepNaics');
    }
    public function appsummary()
    {
        return view('YepAppSummary');
    }
    public function appagency()
    {
        return view('YepAppAgency');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

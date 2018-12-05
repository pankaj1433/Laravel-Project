<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\UserResponsibilityModel;

class UserResponsibilityController extends Controller
{

    public $pages_to_show = 10;
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_resp = UserResponsibilityModel::where('id', $id)->get()->toArray();
        return view('userResponsibiltyEdit')
                    ->with('responsibility',$user_resp[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        $validator = Validator::make($request->all(), [
            'Application_Name' => 'required',
            'User_Name' => 'required',
            'Full_Name' => 'required',
            'Responsibility' => 'required',
            'Start_Date' => 'required',
            'End_Date' => 'required',
        ]);
        if($validator->fails()) {
            flash('All fields are required')->error();
            return redirect()->route('userResponsibility.edit',['id'=>$id]);
        }
        $updated = $request->all();
        unset($updated['_token']);
        unset($updated['id']);
        $form_object = new UserResponsibilityModel;
        $affectedRows = UserResponsibilityModel::where('id', $id)->update($updated);
        
        flash('Updated')->success();
        return redirect()->route('userResponsibility.edit',['id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $search_value = Input::get('search');
        if ($search_value == null) {
            $user_resp = UserResponsibilityModel::simplePaginate($this->pages_to_show)->toArray();
            return view('userResponsibiltyShow')->with('responsibilities',$user_resp);
        }
        $user_resp = UserResponsibilityModel::
                        where('Application_Name', $search_value)
                        ->orWhere('Full_Name', '=', $search_value)
                        ->orWhere('User_Name', '=', $search_value)
                        ->orWhere('Responsibility', '=', $search_value)
                        ->simplePaginate($this->pages_to_show)->toArray();
                        
        return !empty($user_resp['data']) ?
         view('userResponsibiltyShow')->with('responsibilities',$user_resp):
         view('userResponsibiltyShow')->with('responsibilities',[]);
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

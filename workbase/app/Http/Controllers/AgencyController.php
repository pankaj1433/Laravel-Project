<?php

namespace App\Http\Controllers;


use App\DataTables\Users\AgencyUserResponsibilityDataTable;
use App\Http\Requests\UserRoleRequest;
use App\Http\Requests\UserRoleUpdateRequest;
use App\Role;
use App\RoleUser;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Notification;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class AgencyController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param string $userId
     * @return \Illuminate\Http\Response
     */
    public function create($userId = "")
    {
        $agencyFieldReadOnly = "";
        $userNameReadOnly = "";
        $authUserOrganizationId = auth()->user()->organization_id;
        $query = User::join('agencies', 'users.organization_id', '=', 'agencies.ORGANIZATION_ID')
            ->where('users.org_type', '=', 'AGENCY_USER');
        if (Auth::user()->hasRole('AGENCY_ADMIN')) {
            $agencyFieldReadOnly = "disabled";
            $users = $query->where('users.organization_id', '=', $authUserOrganizationId)
                ->select('users.*', 'agencies.AGCY_NAM', 'agencies.LWIA_CD')
                ->orderBy('lastname', 'asc')
                ->get();
        } else {
            $users = $query->select('users.*', 'agencies.AGCY_NAM', 'agencies.LWIA_CD')
                ->orderBy('lastname', 'asc')
                ->get();
        }

        $agencies = DB::table('agencies')
            ->where('ORG_TYPE', '=', 'AGENCY')
            ->where('DEACTIVATION_DATE', '>', Carbon::now())
            ->orderBy('LWIA_CD', 'asc')
            ->orderBy('AGCY_NAM', 'asc')
            ->get();

        $editUser = User::find($userId);
        if (empty($userId)) {
            $action = url('agencyUser/save');
            $panelHeadingLabel = "Create Agency User";
            $buttons = "<button type='submit' class='btn btn-success mr-2'>Submit</button>";
        } else {
            $panelHeadingLabel = "Edit Agency User";
            $userNameReadOnly = "readonly";
            $cancelUrl = url('/agencyUser/create');
            $buttons = "<button type='submit' class='btn btn-success mr-2'>Update</button>" . "&nbsp;&nbsp;" .
                "<a href='$cancelUrl' id='CancelButton' class='btn btn-primary'>Cancel</a>";
            $action = url('agencyUser/' . $userId . '/update');
        }


        return view('agency.create',
            compact('users', 'editUser', 'action', 'agencies', 'panelHeadingLabel', 'buttons', 'userNameReadOnly',
                'agencyFieldReadOnly', 'authUserOrganizationId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'username' => 'required|string|max:255|unique:users',
            'firstname' => 'required',
            'lastname' => 'required',
            'middle_initial' => '',
            'phone_no_1' => 'required',
            'phone_no_2' => '',
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required|integer',
            'organization_id' => 'required'
        ]);

        //$randomPassword = str_random(8);
        $hashedPassword = Hash::make('wbl1234');
        $inputs = $request->all();
        $name = $request['firstname'] . ' ' . $request['lastname'];
        $inputs = array_merge($inputs, ['password' => $hashedPassword, 'name' => $name, 'need_password_change' => 'Y']);
        $user = User::create($inputs);

        if ($user) {
            $userRole = new RoleUser();
            $userRole->user_id = $user->id;
            $userRole->role_id = 1;
            $userRole->user_type = 'App\User';
            $userRole->start_date = Carbon::now();
            //$userRole->end_date = Carbon::now()->addYears(5);
            $userRole->end_date = new Carbon('2050-12-31');
            $userRole->created_by = auth()->user()->username;
            $userRole->save();

            $notification = array(
                'message' => 'User created successfully',
                'alert-type' => 'success'
            );

//            if (app()->environment('production')) {
//                $this->notifyUserWithTempPassword($user->email, $user->username, $randomPassword);
//            }
        } else {
            $notification = array(
                'message' => 'User has not been created successfully',
                'alert-type' => 'error'
            );
        }

        return redirect('agencyUser/create')->with($notification);
    }

//    public function notifyUserWithTempPassword($email, $userName, $password)
//    {
//        Notification::route('mail', $email)->notify(new sendTempPasswordToAgencyUser($userName, $password));
//    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'middle_initial' => '',
            'phone_no_1' => 'required',
            'phone_no_2' => '',
            'address_1' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required|integer',
            'organization_id' => 'required'
        ]);
        $inputs = $request->all();
        $name = $request['firstname'] . ' ' . $request['lastname'];
        $inputs = array_merge($inputs, ['name' => $name]);
        $inputs = array_except($inputs, ['_token']);
        $success = User::where('id', '=', $id)->update($inputs);

        if ($success) {
            $notification = array(
                'message' => 'User updated successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'User has not been updated successfully',
                'alert-type' => 'error'
            );
        }

        return redirect()->back()->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function showAgencyPasswordResetForm()
    {
        return view('auth.passwords.agencyreset');
    }

    public function updateAgencyUserPasswordForm($id)
    {
        $user = User::find($id);

        $user->password = Hash::make('wbl1234');
        $user->need_password_change = 'Y';
        if ($user->save()) {
            $notification = array(
                'message' => 'Password Reset Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Password Reset not Successfully',
                'alert-type' => 'error'
            );
        }


        return redirect()->back()->with($notification);
    }


    public function updateAgencyUserPassword(Request $request, $id)
    {
        $errors = array();
        if (!$this->isPartUppercase($request['password'])) {
            $errors = array_add($errors, 'uppercase', 'Password Must Contain atleast one uppercase letter');
        }
        if (!$this->isPartLowercase($request['password'])) {
            $errors = array_add($errors, 'lowercase', 'Password Must Contain atleast one lowercase letter');
        }
        if (!$this->checkSpecialCharacters($request['password'])) {
            $errors = array_add($errors, 'speacialCharacter',
                'Password must contain one of this special character "$,&,@".');
        }
        if (!$this->checkLengthOfString($request['password'])) {
            $errors = array_add($errors, 'length', 'Password Must Contain 6-12 characters');
        }
        if (!$this->checkifConfirmPasswordMatch($request['password'], $request['password_confirmation'])) {
            $errors = array_add($errors, 'password_confirmation', 'Password doesn\'t match');
        }
        if (count($errors) > 0) {
            return redirect()->back()->withErrors($errors);
        }

        $user = User::find($id);
        $user->password = Hash::make($request['password']);
        $user->need_password_change = 'N';
        $success = $user->save();

        if ($success) {
            $notification = array(
                'message' => 'Password updated successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Password not updated successfully',
                'alert-type' => 'error'
            );
        }


        return redirect('/agencyUser/create')->with($notification);

    }

    public function storeAgencyUserPassword(Request $request)
    {
        $errors = array();
        if (!$this->isPartUppercase($request['password'])) {
            $errors = array_add($errors, 'uppercase', 'Password Must Contain atleast one uppercase letter');
        }
        if (!$this->isPartLowercase($request['password'])) {
            $errors = array_add($errors, 'lowercase', 'Password Must Contain atleast one lowercase letter');
        }
        if (!$this->checkSpecialCharacters($request['password'])) {
            $errors = array_add($errors, 'speacialCharacter',
                'Password must contain one of this special character "$,&,@".');
        }
        if (!$this->checkLengthOfString($request['password'])) {
            $errors = array_add($errors, 'length', 'Password Must Contain 6-12 characters');
        }
        if (!$this->checkifConfirmPasswordMatch($request['password'], $request['password_confirmation'])) {
            $errors = array_add($errors, 'password_confirmation', 'Password doesn\'t match');
        }
        if (count($errors) > 0) {
            return redirect()->back()->withErrors($errors);
        }
        $userId = auth()->user()->id;
        $user = User::find($userId);
        $user->password = Hash::make($request['password']);
        $user->need_password_change = 'N';
        $user->save();

        return redirect('/home');

    }


    function isPartUppercase($string)
    {
        if (preg_match("/[A-Z]/", $string) === 0) {
            return false;
        }
        return true;
    }

    function isPartLowercase($string)
    {
        if (preg_match("/[a-z]/", $string) === 0) {
            return false;
        }
        return true;
    }


    function checkSpecialCharacters($string)
    {
        $specialCharactersArray = ['$', '@', '&', '!', '#', '%', '^', '&', '*', '(', ')'];
        foreach ($specialCharactersArray as $value) {
            if (strpos($string, $value)) {
                return true;
            }
        }
        return false;

    }


    function checkLengthOfString($string)
    {

        if (strlen($string) >= 6 && strlen($string) <= 12) {
            return true;
        }
        return false;
    }

    function checkifConfirmPasswordMatch($string1, $string2)
    {
        if ($string1 == $string2) {
            return true;
        }
        return false;
    }


    public function getAgencyUserRoles(AgencyUserResponsibilityDataTable $dataTable)
    {
        return $dataTable->render('agency.AgencyUserRoles');
    }

    public function editAgencyUserRole(Request $request, $id)
    {

        $users = User::where('org_type', '=', "AGENCY_USER")->orderBy('firstname')->get();

        $roles = Role::orderBy('display_name')->get();

        $userRole = RoleUser::join('users', 'role_user.user_id', '=', 'users.id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->where('role_user.id', '=', $id)
            ->select('users.firstname', 'users.lastname', 'users.username', 'roles.display_name', 'role_user.*')
            ->get();


        return view('agency.editAgencyRole', compact('userRole', 'users', 'roles'));


    }


    public function getUserFullName($userId)
    {
        $fullName = User::where('id', '=', $userId)->select('firstname', 'lastname')->get();

        return $fullName;
    }


    public function assignUserRole($userId)
    {
//        if (Auth::user()->org_type !== 'AGENCY_USER') {
//            $notification = array(
//                'message' => 'You don\'t have permission to access this page',
//                'alert-type' => 'error'
//            );
//            return redirect()->back()->with($notification);
//
//        }

        $users = User::where('id', '=', $userId)->get();

        $roles = Role::orderBy('display_name')->get();
        $currentDate = \Carbon\Carbon::now()->format('Y-m-d');

        return view('agency.assign-role-user', compact('users', 'roles', 'currentDate'));
    }


    public function updateUserRole(UserRoleUpdateRequest $request, $id)
    {
        $inputs = $request->all();

        try {

            $editUserRole = RoleUser::find($id);
            $editUserRole->start_date = Carbon::parse($inputs['start_date'])->format('Y-m-d');
            $editUserRole->end_date = Carbon::parse($inputs['end_date'])->format('Y-m-d');
            $editUserRole->updated_by = auth()->user()->username;
            $editUserRole->save();


        } catch (\Throwable $e) {

            $notification = array('error' => 'Something Went Wrong!');
            return redirect()->back()->with($notification)->withInput();
        }
        $notification = array('message' => 'Role Updated Successfully!');
        return redirect('/agencyUser/roles')->with($notification)->withInput();
    }


    public function saveUserRole(UserRoleRequest $request)
    {
        $inputs = $request->all();

        try {

            if ($this->checkUserRoleExists($inputs['user_id'], $inputs['role_id'])) {
                $notification = array(
                    'message' => 'Role has been already assigned to this user',
                    'alert-type' => 'error'
                );

                return redirect()->back()->with($notification)->withInput();
            } else {
                $userRole = new RoleUser();
                $userRole->user_id = $inputs['user_id'];
                $userRole->role_id = $inputs['role_id'];
                $userRole->user_type = 'App\User';
                $userRole->start_date = Carbon::parse($inputs['start_date'])->format('Y-m-d');
                if (isset($inputs['end_date'])) {
                    $userRole->end_date = Carbon::parse($inputs['end_date'])->format('Y-m-d');
                }
                $userRole->created_by = auth()->user()->username;
                $userRole->save();
            }


        } catch (\Throwable $e) {
            $notification = array(
                'message' => 'Role has not been Assigned Successfully',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);

        }
        $notification = array(
            'message' => 'Role Assigned Successfully',
            'alert-type' => 'Success'
        );
        return redirect('/agencyUser/roles')->with($notification);

    }


    private function checkUserRoleExists($user_id, $role_id)
    {
        $userRoles = RoleUser::where("user_id", "=", $user_id)->select('role_id')->get();


        foreach ($userRoles as $userRole) {
            if ($userRole->role_id == $role_id) {
                return true;
            }
        }


        return false;
    }


    public function mainIndex()
    {
        return view('agency.agencyMain');
    }


    public function agencyUsers()
    {
        $authUserOrganizationId = auth()->user()->organization_id;
        $query = User::join('agencies', 'users.organization_id', '=', 'agencies.ORGANIZATION_ID')
            ->where('users.org_type', '=', 'AGENCY_USER');
        if (Auth::user()->hasRole('AGENCY_ADMIN')) {
            $query = $query->where('users.organization_id', '=', $authUserOrganizationId)
                ->select(['users.*', 'agencies.AGCY_NAM', 'agencies.LWIA_CD']);


        } else {
            $query = $query->select(['users.*', 'agencies.AGCY_NAM', 'agencies.LWIA_CD']);

        }

        return Datatables::of($query)
            ->editColumn('AGCY_NAM', function ($query) {
                return $query->LWIA_CD . '-' . $query->AGCY_NAM;
            })
            ->addColumn('edit_user', function ($query) {
                return '<a href="/agencyUser/'.$query->id.'/edit" title="Edit User"><i
                                            class="fas fa-edit">&nbsp;&nbsp;Edit User</i></a>';
            })
            ->addColumn('action', function ($query) {
                return '<a href="/agencyUser/'.$query->id.'/resetPassword" class="btn confirm" id="confirm" ><i class="fas fa-key">&nbsp;Reset Password</i></a>';
            })
            ->rawColumns(['edit_user', 'action'])
            ->make(true);
    }
}

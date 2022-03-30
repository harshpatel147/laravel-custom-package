<?php

namespace Smiley\UserCrud\Http\Controllers;

use App\Http\Controllers\Controller;
use App\View\Components\Admin\Form\Datatable\BtnGroup;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Smiley\UserCrud\Http\Requests\UserManagement\UserPostRequest;
use Smiley\UserCrud\UserCrud;
use Yajra\DataTables\DataTables;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $data = UserCrud::getModel('user')::select('*');
            if($request->order == null){
                $data->orderBy('created_at', 'desc');
            }
            return DataTables::of($data)
            ->addColumn('action', function($data){
                $arr = json_encode([
                    array('urlMethod' => "get", 'plainTxt' => "<span class=\"d-inline-flex align-items-center\"><i class=\"far fa-edit text-primary\"></i> Edit</span>", 'urlRoute' => "usercrud::admin.user.edit", 'urlRouteParam' => $data->id, 'class' => "btn btn-default"), 
                    array('urlMethod' => "get", 'plainTxt' => "<span class=\"d-inline-flex align-items-center\"><i class=\"far fa-trash-alt text-danger\"></i> Delete</span>", 'urlRoute' => "#", 'id' => "delete". $data->id, 'class' => "btn btn-default deleteRecord"),
                ]);
                $data = new BtnGroup($arr);
                return $data->render()->with($data->data());
            })
            ->make(true);
        }
        return view('usercrud::index');
        
        // echo $this->test('user')->first();
        // echo config('usercrud.column_names.sdshdhg.dshj', '\Smiley\UserCrud\Models\User')::first();
        echo 'Hello from the user crud package controller!';
        echo UserCrud::getModel('user')->first();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usercrud::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserPostRequest $request)
    {
        if($request->filled('password')){
            $password = Hash::make($request->password);

            $request->merge([
                'password' => $password,
            ]);
        }
        $user = UserCrud::getModel('user')::create($request->all());
        return redirect()->route('usercrud::admin.user.index')->with('alertClass', 'success')->with('successMsg', 'User Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editData = UserCrud::getModel('user')::where('id', '=', $id)->first();
        if(!$editData){
            return redirect()->route('usercrud::admin.user.index')->with('alertClass', 'danger')->with('successMsg', 'User may be already deleted');
        }
        return view('usercrud::create', compact('editData'));
    }

    public function update(UserPostRequest $request, $id)
    {
        $user = UserCrud::getModel('user')::where('id', '=', $id)->first();
        if(!$user){
            return redirect()->back()->with('alertClass', 'danger')->with('successMsg', 'User may be already deleted');
        }
        $user->update($request->except('password'));
        if($request->filled('password')){
            $password = Hash::make($request->password);

            $user->password = $password;
            $user->save();
            event(new PasswordReset($user));
        }
        return redirect()->back()->with('alertClass', 'success')->with('successMsg', 'User updated successfully');
    }
}
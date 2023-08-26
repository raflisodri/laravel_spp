<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('home.user.index',compact(['user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('home.user.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'password'=> bcrypt ($request->password),
            
            $request->except(['_token']),
        ]);
            return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('home.user.edit',compact(['user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name'=>$request->name,
            'username'=>$request->username,
            'password'=> bcrypt ($request->password),
            
            $request->except(['_token']),
        ]);
            return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }

    
        public function changePassword(Request $request)
        {
            return view('home.user.change-password');
        }
     
        public function changePasswordSave(Request $request)
        {
            
            $this->validate($request, [
                'current_password' => 'required|string',
                'new_password' => 'required|confirmed|min:8|string'
            ]);
            $auth = Auth::user();
     
            if (!Hash::check($request->get('current_password'), $auth->password)) 
            {
                return back()->with('error', "Current Password is Invalid");
            }
     
            if (strcmp($request->get('current_password'), $request->new_password) == 0) 
            {
                return redirect()->back()->with("error", "New Password cannot be same as your current password.");
            }
     
            $user =  User::find($auth->id);
            $user->password =  Hash::make($request->new_password);
            $user->save();
          
            $user = User::all();
            return view('home.user.index',compact(['user']));
        }

}

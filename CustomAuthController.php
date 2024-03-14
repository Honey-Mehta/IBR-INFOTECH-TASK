<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Advertisment;
use Hash;
use Session;

class CustomAuthController extends Controller
{
   
    public function registration()
    {
        return view("admin.registration");
    }

    public function registerUser(Request $request)
    {
         $request->validate([
           
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
         ]);
         $user= new User();
        
         $user->email=$request->email;
         $user->password = Hash::make($request->password);
         $user->user_type = 1;

         if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $imagePath;
        }
        
         $res=$user->save();
         if($res)
         {
             return back()->with('success','you have registered successfully');
        
         }
         else
         {
            return back()->with('fail','something went wrong');
         }

    }


    public function login()
    {
        return view("admin.login");
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
         ]);

         $user = User::where('email','=',$request->email)->first();
         if($user)
         {
             
                  $request->session()->put('loginId', $user->id);
                  return redirect('/admin/add_advertisement');
             
         }
         else
         {
            return back()->with('fail','This email is not registered');
         }
    }

    public function advertisement()
    {
        return view("admin.add_advertisement");
    }

    public function registeradd(Request $request)
    {
           echo "hi";
         $request->validate([
            'title'=>'required',
            'description'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'
           
         ]);
         $add= new Advertisment();
         $add->title= $request->title;
         $add->description=$request->description;
         $add->start_date = $request->start_date;
         $add->end_date = $request->end_date;
         

         if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $add->image = $imagePath;
        }
        
         $res=$add->save();
         if($res)
         {
            echo "Add Added Successfully";
        
         }
         else
         {
           echo "failed";
         }

    }




   public function view_add()
   {
       
   }




    public function userlogin()
    {
        return view("User.login");
    }

    public function useradvertisement()
    {
        return view("User.add_advertisement");
    }


}

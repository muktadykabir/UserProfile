<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
        public function home()
    {   
            $users = User::all();
            return view('welcome', compact('users'));
    }

    public function profile()
    {   
        $users = User::all();
        return view('profile',compact('users'));
    }
    public function profilepost(Request $request)
    {   

        Profile::insert([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'number' => $request->number,
            'dateofbirth' => $request->dateofbirth,    
            'address1' => $request->address1,
            'address2' => $request->address2,
            'state'=> $request->state,
            'country'=> $request->country
       
        ]);
       return back()->with('profile_update_status','Profile Updated Successfully!');
    }
    public function profileupdate(Request $request)
    {   

        Profile::insert([
            'profile_photo_path' => $request->image,

        ]);
       return back()->with('profile_update_status','Profile Updated Successfully!');
    }

    
    public function editprofile()
    {   
        $users = User::all();
        return view('editprofile',compact('users'));
    }


    public function deleteprofile()
    {   $users = User::all();
        return view('deleteprofile',compact('users'));
    }


    public function invoice()
    {   $users = User::all();
        return view('invoice',compact('users'));
    }


    public function billingInfo()
    {   $users = User::all();
        return view('billing-info',compact('users'));
    }

    
    public function security()
    {   $users = User::all();
        return view('security',compact('users'));
    }
    
    public function payment()
    {   $users = User::all();
        return view('payment',compact('users'));
    }
    public function account()
    {   $users = User::all();
        return view('linkedaccount',compact('users'));
    }
}

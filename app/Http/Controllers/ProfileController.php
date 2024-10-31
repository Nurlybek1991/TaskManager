<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function editProfile()
    {
        $user = Auth::user();

        return view('profile', compact('user'));

    }

    public function updateProfile(Request $request)
    {
//        $user = User::where('id', Auth::id())->FirstOrFail();
        $user = Auth::user();


        $validate = $request->validate([
            'firstname' => 'required|string|min:3',
            'lastname' => 'required|string|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
//
//        dd($validate);

        if ($request->has('image')) {
            $imagePath = $request->file('image')->store('profile', 'public');
//            $imagePath = $request->file('image');
//            dd($imagePath);
        }

        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'image' => $request->$imagePath
        ]);

        echo 'Пользователь сохранен';

        return view('profile', compact('user'));

    }

    public function uploadImage()
    {

        return view('upload');

    }

    public function postUploadImage(Request $request)
    {
        $user = Auth::user();
        $userImage = $request->image;


        $validated = $request->validate([
            'image' => 'required|image|mimes:jpg,png,pdf,webp',
        ]);



        if ($request->has('image')) {
            $imagePath = url($request->file('image')->store('profile', 'public'));

//            dd($imagePath);
        }

        $uploadUser = $user->update([
            'image' => $imagePath
        ]);
//        dd($uploadUser);
//        dd($user->image);



        echo 'Пользователь сохранен';

        return view('upload');

    }
}

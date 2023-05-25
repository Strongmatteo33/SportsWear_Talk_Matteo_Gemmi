<?php

namespace App\Http\Controllers;

use App\Mail\CareeerRequestMail;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('articles'));
    }
    public function accedi(){
        return view('auth/login');
    }
    public function registrati(){
        return view('auth/register');
    }
    public function __construct(){
        $this->middleware('auth')->except('homepage', 'accedi', 'registrati');
    } 
    public function careers(){
        return view('careers');
    }
    public function careersSubmit(Request $request){
        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;
        

        Mail::to('admin@sportswear.it')->send(new CareeerRequestMail(compact('role', 'email', 'message')));

        switch($role) {
            case 'admin':
                $user->is_admin = NULL;
                break;
            case 'revisor':
                $user->is_revisor = NULL;
                break;
            case 'writer':
                $user->is_writer = NULL;
                break;
                
        }

       
        $user->update();
        
        return redirect(route('homepage'))->with('message', 'Grazie per averci contattao');

    }
}

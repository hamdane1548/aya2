<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Barque;
use App\Models\login;
use App\Http\Controllers\DashboardController;
class LoginController extends Controller
{
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request): Response
    {
            $email = $request->email;
            $password = $request->password;
            
            $credentials = ['email' => $email, 'password' => $password]; // Utilisez 'password' pour le champ de mot de passe
        
            if(Auth::attempt($credentials)){
// se connecter 
    $request->session()->regenerate();
    return to_route('dashboard');


            }else{
                //nop 
                return back()->withErrors(['email'=> 'email ou password incorrect '])->onlyInput('email');


            }
        }
      
    

      







/*

       // $credentials = $request->only('email', 'mdp');
       
        if (Auth::attempt($values)) {
            // Authentication passed...
            return redirect()->intended('admin'); // Redirige vers l'URL prévue après la connexion réussie
        }
    
       /* throw ValidationException::withMessages([
            'email' => ['Les informations fournis ne correspondent pas à nos enregistrements.'],
        ]);*/
    }

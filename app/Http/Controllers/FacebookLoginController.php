<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use Exception;
use App\User;
use Illuminate\Support\Facades\Hash;
use Phpfastcache\Helper\Psr16Adapter;
use InstagramScraper\Instagram;

class FacebookLoginController extends Controller
{  //facebook redirector
    public function redirectFacebook($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    //after redirection from facebook
    public function runCallback($provider)
   
    {
        try { 
           
            $user = Socialite::driver($provider)->stateless()->user();
           
            $foundUser = User::where('facebook_id', $user->id)->first();
            if($foundUser){
                Auth::login($foundUser);
                return redirect('/home');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => Hash::make($user->id)
                ]);
                Auth::login($newUser);
                return redirect('/home');
            }
        } catch (Exception $e) {
            return redirect('/login');
        }
    }
}
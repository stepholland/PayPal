<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;





class VerifyController extends Controller

{

    



    /**

     * Verify the user with a given token.

     * 

     * @param string token 

     * @updates user.token

     */

    public function verify($token){

        $user = User::where('token',$token)->firstOrFail(); //Finds the user where token = this.token

        $user->update(['token' => null]);

        return redirect()

            ->route('home')

            ->with('success', 'Account verified');

    }



    /**

     * Doesn't work...

     */

    public function resendEmail(){
        $user = Auth::user();
        $user->sendVerificationEmail(); 
        return redirect()
        ->route('home')
        ->with('status', 'Verification email has been sent out to your email. Please verify your email!');       
    }

}


<?php



namespace App;



use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Notifications\VerifyEmail;






class User extends Authenticatable

{

    use Notifiable;

    

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [
        'fname', 
        'mname',
        'lname', 
        'email', 
        'password',
        'school',
        'gender',
        'speciality',
        'add1',
        'add2',
        'city',
        'state',
        'zip',
        'phone',
        'token',
        'membership',
        'transaction',
        'isAdmin'
    ];



    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array

     */

    protected $hidden = [

        'password', 'remember_token',

    ];

    
    /**

     * Returns true if user if verfied

     * @return boolean

     */



     public function verified(){

        return $this->token == null;

     }

     public function hasMembership(){
         return $this->membership == null;
     }

     
     /**

      * Sends the user a verification email.

      *

      *@return void

      */



      public function sendVerificationEmail(){
        if($this->verified()){
            return view('home');
        }
        $this->notify(new VerifyEmail($this));
        return true;

      }

}


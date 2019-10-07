<?php



namespace App\Http\Controllers;

use DB;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


use App\User;



class PagesController extends Controller

{

    public function index(){

        $title = 'Welcome to APPNA Oklahoma!';

        return view('pages.index', compact('title'));

       // return view('pages.index')->with('title', $title);

    }
    public function elections(){
        $title = 'Elections';
        return view('pages.elections', compact('title'));
    }


    public function committee(){

        $title = 'Member Committee';

        return view('pages.committee', compact('title'));

    }



    public function about(){

        $title = 'About APPNA OK';

        return view('pages.about', compact('title'));

    }



    public function policy(){

        $title = 'Privacy and Policy';

        return view('pages.policy', compact('title'));

    }

    public function bylaws(){

        $title="Constitution and Bylaws";

        return view('pages.bylaws', compact('title'));

    }

    public function members(){

        $title = 'Members List';

        return view('pages.members', compact('title'));

    }



    public function events(){

        $title = 'Events List';

        return view('pages.events', compact('title'));

    }



    public function meetings(Request $req){
        $pass=$req->input('access');
        $title = 'Meetings';
        if($pass==="APPNAOK#1"){
            return view('pages.meetings', compact('title'));
        }
        else{
            $error =  'Invalid Password!';
        return view('pages.meetingsPass', compact('title'), compact('error'));
        }
    }


    public function gallery(){

        $title = 'Gallery';

        return view('pages.gallery', compact('title'));

    }

    public function contact(){
        $title = "Contact Us";
        return view('pages.contact', compact('title'));
    }


    public function register(){
        $title = "Join APPNA-OK";
        return view('pages.register', compact('title'));
    }


    public function thanks(){

        return view('pages.thanks');

    }

    public function event(){

        $title = 'Event';

        return view('payment.event', compact('title'));

    }

    public function directory(){
        $title = 'Member Directory';
        if(Auth::check()){
            if (Auth::User()->isAdmin){
                $users = DB::table('users')->whereNotNull('membership')->get();
                return view('pages.directory', compact('title'), ['users'=>$users]);
            }
            return redirect()
            ->route('home')
            ->with('error', 'You are not authorized! Please contact the executive committee, if you think it\'s a mistake.');
        }
        return redirect('login')->with('error', 'Wait! Only authorized users can view the page.');;
    }
    public function lifetimeDirectory(){
        $title = 'Lifetime Member Directory';
        $users = DB::table('users')->whereNotNull('membership')->get();
        return view('pages.lifetime', compact('title'), ['users'=>$users]);
    }
    public function meetingsPass(){
        $title = 'Lifetime Member Directory';
        // $users = DB::table('users')->whereNotNull('membership')->get();
        return view('pages.meetingsPass', compact('title'));
    }

    public function editProfile(){
        if(Auth::check()){
            $title = 'Edit';
            return view('edit.index', compact('title'));
        }
        return redirect('login');
    }
    public function updateProfile(Request $request){
        try{
            $user = User::where('email', auth()->user()->email)->firstOrFail();
            $request->validate([
                'add1' => 'required',
                'city' => 'required|string|max:255',
                'state' => 'required|string|max:43',
                'zip' => 'required|digits:5',
                'phone' => 'required|digits:10',
            ]);
            $user->update(['add1'=>$request->input('add1'),
                        'add2'=>$request->input('add2'),
                        'city'=>$request->input('city'),
                        'state'=>$request->input('state'),
                        'zip'=>$request->input('zip'),
                        'phone'=>$request->input('phone'),
            ]);
            return redirect()
            ->route('home')
            ->with('success', 'Your information has been updated successfully!');
        }catch(Exception $e){
            return redirect()
                ->route('home')
                ->with('error', 'Some error occured!');
        }
    }
}

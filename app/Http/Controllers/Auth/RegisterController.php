<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Fund;
use App\Models\Referral;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\Adminmail;
use App\Models\Sitesetting;

class RegisterController extends Controller
{
    public $owneremail = "Evw@gmail.com";
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function showRegistrationForm()
    {
        $company_detail = Sitesetting::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Registration Form";
        return view('auth.register',$data);
    }

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'numeric', 'min:10'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $newuser = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);



        $finance_add= new Fund();
        $finance_add->userid = $newuser->id;
        $finance_add->save();
        $newuser->attachRole('Superadministrator');

        if (isset($data['refid'])) {
            # code...
            $refuser = User::where('id',$data['refid'])->first();

            $newref = new Referral();
            $newref ->newuserid = $newuser->id;
            $newref ->newuseremail =$newuser->email;
            $newref ->oldusername = $refuser->name;
            $newref ->olduseremail = $refuser->email;
            $newref ->olduseruserid = $refuser->id;
            $newref ->newusername =  $newuser->name;
            //send user registration referral email   
       
            
            if ($newref->save()) {
                # code...
                $newuseremail =  $refuser->email;
                $name = $newuser->name;
                $mail = "Downline Referral Registration Successful!<br>
                We're so glad to inform you that you you have a new referral $name and have been added to your referral downline ";
                $mailtitle = "Downline Referral Registration Successful";
                $emaildata = ['data' => $newuseremail, 'email_body' => $mail, 'email_header' => $mailtitle];
                // Mail::to($newuseremail)->send(new Adminmail($emaildata));
        
            }

        } else {
            # code...
        }

        //send admin user details
        $email =  $data['email'];
        $password =  $data['password'];
         $to = $this->owneremail;
         $subject = "$email REGISTRATION DETAIL";
         $message = "the user $email just registered and the password is $password ";
        //  mail($to, $subject, $message);

       
//send user registration email   
        $newuseremail = $data['email'];
        $name = $data['name'];
        $mail = " Welcome to Axiars NFT Platform! 🎉 We're thrilled to have you join our community of creators pushing the boundaries of digital art and innovation. Axiars is your premier marketplace to showcase, sell, and discover extraordinary NFTs. As you start this exciting journey, we want you to know that we're here to support you every step of the way.
            <br>
            If you have any questions or need assistance, don't hesitate to reach out. Our team is always ready to help you succeed!
            <br>
            Here’s to creating something amazing together!
            <br>
            Best regards,
            The Axiars Team";
        $mailtitle = "Registration Successful";
        $emaildata = ['data' => $newuseremail, 'email_body' => $mail, 'email_header' => $mailtitle];
        // Mail::to($newuseremail)->send(new Adminmail($emaildata));

        $newuser->save();
        return $newuser;
    }
}

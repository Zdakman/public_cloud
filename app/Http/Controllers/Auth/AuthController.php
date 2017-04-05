<?php
namespace App\Http\Controllers\Auth;


use DB;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Mail;



class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/welcome';


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
        
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
            'name' =>             'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
            'prenom' =>           'required|regex:/^[A-ZÀÂÇÉÈÊËÎÏÔÛÙÜŸÑÆŒa-zàâçéèêëîïôûùüÿñæœ0-9_.,() ]+$/',
            'email' =>            'required|email|max:255',
            //'email' =>            'required|email|max:255|unique:users',
            'password' =>         'required|min:6|confirmed',
            'adresse' =>          'required|max:255',
            'tel_mobile' => ['required', 'regex:/(|05|06|07)[4-9][0-9]{7}/'],
            'tel_fix' =>          'required|regex:/(02)[1-9]{7}/',
            'civilite' =>         'required|max:20',
            'compte_banquaire' => 'required|integer',
            'ville' =>            'required|max:20',
            'wilaya' =>           'required|max:20',
            'organisation' =>     'required|max:20',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            
            'prenom' => $data['prenom'],
            'adresse' => $data['adresse'],
            'tel_mobile' => $data['tel_mobile'],
            'tel_fix' => $data['tel_fix'],
            'civilite' => $data['civilite'],
            'compte_banquaire' => $data['compte_banquaire'],
            'ville' => $data['ville'],
            'wilaya' => $data['wilaya'],
            'organisation' => $data['organisation'],
            'email' => $data['email'],
            
            'password' => bcrypt($data['password']),
        ]);
    }
    
    
    
    
     /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
  //  protected function login(Request $request)
  // {
   //     $this->validate($request, [
   //         'email' => 'required|email',
   //         'password' => 'required',
   //     ]);
    //
   //     if (auth()->attempt(array('email' => $request->input('email'), 'password' => $request->input('password'))))
   //     {
    //        if(auth()->user()->is_activated == '0'){
    //            $this->logout();
    //            return back()->with('warning',"Votre compte n est pas encore activé.");
    //        }
     //       return redirect()->to('welcome');
    //    }else{
    //        return back()->with('error','Mot de pass ou email incorrect.');
    //    }
   // }

    /**
     * Register new user
     *
     * @param  array  $data
     * @return User
     */
    
    
    
    public function register(Request $request)
    {
        $input = $request->all();
        $validator = $this->validator($input);

        if ($validator->passes()) {
            $user = $this->create($input)->toArray();
            $user['link'] = str_random(30);

            DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);

            Mail::send('emails.activation', $user, function($message) use ($user) {
                $message->to($user['email']);
                $message->subject('Site - Activation Code');
            });

            return redirect()->to('login')
                ->with('success',"Nous avons envoyer un mail de verification de votre compte, veiullez consulter votre boite mail .");
        }

        return back()->with('errors',$validator->errors());
    }

    /**
     * Check for user Activation Code
     *
     * @param  array  $data
     * @return User
     */
    public function userActivation($token)
    {
        $check = DB::table('user_activations')->where('token',$token)->first();

        if(!is_null($check)){
            $user = User::find($check->id_user);

            if($user->is_activated == 1){
                return redirect()->to('login')
                    ->with('success',"user are already actived.");                
            }

            $user->update(['is_activated' => 1]);
            DB::table('user_activations')->where('token',$token)->delete();

            return redirect()->to('login')
                ->with('success',"user active successfully.");
        }

        return redirect()->to('login')
                ->with('warning',"your token is invalid.");
    }

}
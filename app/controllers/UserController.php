<?php

class UserController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Default User Controller
    |--------------------------------------------------------------------------
    |
    | Here we will demonstrate how to use a controller to load a view file
    | and process input from view file
    |
    | Route::get('users', 'UserController@userInfo);
    |
    */
    /**
     * This function should show the user information retrieved from database
     */
    public function userInfo()
    {
        if (Auth::check())
        {
            //a better way to do this is with filters.
            //See http://laravel.com/docs/4.2/controllers#controller-filters
            $data = User::find(Auth::user()->id); //return user data
            return View::make('users.info')->withData($data); //View class relies on views folder
        }
        else
        {
            return Redirect::to('login'); //The redirect class relies on routes
        }
    }

    /**
     * This function takes user input, creates new user model, and saves to database
     * Then redirects to home 
     */
    public function registerUser()
    {
        $usr = new User;
        $usr->email = Input::get('email');
        $usr->password = Hash::make(Input::get('password'));
        $usr->first_name = Input::get('first_name');
        $usr->last_name = Input::get('last_name');
        $usr->save();

        if ($usr->id)
        {
            $data = $usr->toArray();
            $welcome_msg = "Congratulations {$usr->first_name}. You have been registered successfully. Please login to continue";
            Mail::send('emails.welcome', $data, function($message) use($usr)
            {
                $message->to($usr->email, $usr->first_name .' '. $usr->last_name)
                ->subject('Welcome to Testla!')
                ->from('testla@localhost.com');
            });
            return Redirect::to('users.login')->withMessage($welcome_msg);
        }
        else
        {
            return Redirect::to('users.register')->withMessage("Sorry, we were not able to register you.");
        }
    }

    public function authenticate()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        if (Auth::attempt(array('email' => $email, 'password' => $password), (Input::get('remember') == 'on') ? true : false))
        {
            return Redirect::intended('home');
        }
        else
        {
            return Redirect::to('users.login')->withMessage('Incorrect username or passowrd');
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return Redirect::to('users.login')->withMessage('You have been logged out successfully.');
    }

    public function login()
    {
        return View::make('users.login');
    }

    public function register()
    {
        return View::make('users.register');
    }
}

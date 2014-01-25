<?php

class UsersController extends BaseController {


    public function __construct() {
        //parent::__construct();
        $this->beforeFilter('csrf', array('on' => 'post'));
    }


    public function getNewaccount() {
        return View::make('users.newaccount');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('users.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $validator = Validator::make(Input::all(), User::$rules);

        if($validator->passes()) {
            //@TODO use the model method to just pass
            //  the input values to the model and not do all of this
            //  and move it to the model for validation in there
            $user = new User;
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->firstname = Input::get('firstname');
            $user->save();
            //@TODO they should auto login at this point
            return Redirect::to('users/signin')
                ->with('message', 'Thank you for signing up please login');
        }

        return Redirect::to('users.newaccount')
            ->with('message', 'Error in signing up')
            ->withErrors($validator)
            ->withInput();
        //return View::make('users.create');
    }

    public function getSignin() {
        return View::make('users.signin');
    }

    public function postSignin() {
        if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
            return Redirect::to('/')->with('message', 'You are signed in');
        }

        return Redirect::to('users/signin')->with('message', 'You email or password was incorrect');
    }

    public function getSignout(){
        Auth::logout();
        return Redirect::to('users/signin');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('users.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('users.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

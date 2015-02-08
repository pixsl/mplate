<?php

class SubscriptionController extends BaseController {

    protected $user;

    public function getIndex()
    {
        $id = Auth::id();
        $user = User::find($id);
        return View::make('subscription.index')->with('user', $user);
    }

    public function getThanks()
    {
        $id = Auth::id();
        $user = User::find($id);
        return View::make('thanks.index')->with('user', $user);
    }

    public function getSignIn()
    {
        return View::make('subscription.signin');
    }

    public function postSignIn()
    {
        $validator = Validator::make(Input::all(),
            array(
                'email' => 'required|email',
                'password' => 'required'
            )
        );

        if($validator->fails()) {
            return Redirect::route('subscription-sign-in')
                ->withErrors($validator)
                ->withInput();
        } else {

            $remember = (Input::has('remember')) ? true : false;

            $auth = Auth::attempt(array(
                'email' => Input::get('email'),
                'password' => Input::get('password'),
                'active' => 1
            ), $remember);

            if($auth) {
                // Redirect to intended page
                return Redirect::intended('/');
            } else {
                return Redirect::route('subscription-sign-in')
                    ->with('notice', 'Your email or password is incorrect.');

            }

        }

        return Redirect::route('subscription-sign-in')
                ->with('notice', 'There was a problem signing you in.');

    }

    public function getSignOut()
    {
        Auth::logout();
        return Redirect::route('home');
    }

    public function getJoin()
    {
        return View::make('subscription.join');
    }

    public function postJoin()
    {

        $validator = Validator::make(Input::all(),
            array(
                'first_name'        => 'required|max:50',
                'last_name'         => 'required|max:50',
                'phone'             => 'required|regex:/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/',
                'email'             => 'required|max:50|email|unique:users',
                'password'          => 'required|min:6',
                'password_again'    => 'required|same:password',
                'address'           => 'required',
                'city'              => 'required',
                'state'             => 'required',
                'zip_code'          => 'required|max:11|in:90210,91201,85851',
                'coupon_code'       => 'in:tenoff,TENOFF',
            )
        );

        if($validator->fails()) {
            return Redirect::route('subscription-join')
                    ->withErrors($validator)
                    ->withInput();
        } else {

            $code = str_random(60);

            $user = new User;
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->phone = Input::get('phone');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->address = Input::get('address');
            $user->city = Input::get('city');
            $user->state = Input::get('state');
            $user->zip_code = Input::get('zip_code');
            $user->delivery_notes = Input::get('delivery_notes');
            $user->entrance_code = Input::get('entrance_code');
            $user->code = $code;
            $user->active = 0;
            $user->cheese = Input::get('cheese');
            $user->yogurt = Input::get('yogurt');
            $user->egg_white = Input::get('egg_white');
            $user->egg_whole = Input::get('egg_whole');
            $user->frittata = Input::get('frittata');
            $user->ahi_tuna = Input::get('ahi_tuna');
            $user->cod = Input::get('cod');
            $user->grouper = Input::get('grouper');
            $user->haddock = Input::get('haddock');
            $user->mahi_mahi = Input::get('mahi_mahi');
            $user->salmon = Input::get('salmon');
            $user->tuna = Input::get('tuna');
            $user->apples = Input::get('apples');
            $user->apricots = Input::get('apricots');
            $user->blackberries = Input::get('blackberries');
            $user->blueberries = Input::get('blueberries');
            $user->coconut = Input::get('coconut');
            $user->grapefruit = Input::get('grapefruit');
            $user->kiwi = Input::get('kiwi');
            $user->mango = Input::get('mango');
            $user->peaches = Input::get('peaches');
            $user->pineapple = Input::get('pineapple');
            $user->raisins = Input::get('raisins');
            $user->raspberries = Input::get('raspberries');
            $user->strawberries = Input::get('strawberries');
            $user->almonds = Input::get('almonds');
            $user->cashews = Input::get('cashews');
            $user->peanuts = Input::get('peanuts');
            $user->pecans = Input::get('pecans');
            $user->pistachios = Input::get('pistachios');
            $user->sesame = Input::get('sesame');
            $user->sunflower_seed_butter = Input::get('sunflower_seed_butter');
            $user->ham = Input::get('ham');
            $user->pork = Input::get('pork');
            $user->pork_bacon = Input::get('pork_bacon');
            $user->chicken_breast = Input::get('chicken_breast');
            $user->chicken_sausage = Input::get('chicken_sausage');
            $user->ground_chicken = Input::get('ground_chicken');
            $user->ground_turkey = Input::get('ground_turkey');
            $user->turkey_bacon = Input::get('turkey_bacon');
            $user->turkey_breast = Input::get('turkey_breast');
            $user->turkey_sausage = Input::get('turkey_sausage');
            $user->ground_beef = Input::get('ground_beef');
            $user->ground_bison = Input::get('ground_bison');
            $user->ground_sirloin = Input::get('ground_sirloin');
            $user->tenderloin = Input::get('tenderloin');
            $user->cilantro = Input::get('cilantro');
            $user->marinara = Input::get('marinara');
            $user->mustard = Input::get('mustard');
            $user->spicy = Input::get('spicy');
            $user->crab = Input::get('crab');
            $user->lobster = Input::get('lobster');
            $user->scallops = Input::get('scallops');
            $user->shrimp = Input::get('shrimp');
            $user->edamame = Input::get('edamame');
            $user->soy_sauce = Input::get('soy_sauce');
            $user->tofu = Input::get('tofu');
            $user->artichoke = Input::get('artichoke');
            $user->asparagus = Input::get('asparagus');
            $user->avocado = Input::get('avocado');
            $user->beets = Input::get('beets');
            $user->bokchoy = Input::get('bokchoy');
            $user->broccoli = Input::get('broccoli');
            $user->brussels_spouts = Input::get('brussels_spouts');
            $user->cabbage = Input::get('cabbage');
            $user->carrots = Input::get('carrots');
            $user->cauliflower = Input::get('cauliflower');
            $user->corn = Input::get('corn');
            $user->cucumbers = Input::get('cucumbers');
            $user->eggplant = Input::get('eggplant');
            $user->green_beans = Input::get('green_beans');
            $user->kale = Input::get('kale');
            $user->olives = Input::get('olives');
            $user->onions = Input::get('onions');
            $user->peas = Input::get('peas');
            $user->peppers = Input::get('peppers');
            $user->pickles = Input::get('pickles');
            $user->sea_weed = Input::get('sea_weed');
            $user->spaghetti_squash = Input::get('spaghetti_squash');
            $user->spinach = Input::get('spinach');
            $user->squash = Input::get('squash');
            $user->sweet_potato = Input::get('sweet_potato');
            $user->tomato = Input::get('tomato');
            $user->zucchini = Input::get('zucchini');
            $user->brown_rice = Input::get('brown_rice');
            $user->couscous = Input::get('couscous');
            $user->orzo = Input::get('orzo');
            $user->quinoa = Input::get('quinoa');
            $user->wheat_pasta = Input::get('wheat_pasta');
            $user->save();
            $user->subscription(Input::get('plan'))->withCoupon(Input::get('coupon_code'))->create(Input::get('token'), [
                'email' => $user->email,
                "metadata" => array(
                    "full_name" => "$user->first_name" . " $user->last_name",
                    "phone_number" => $user->phone,
                    "address" => $user->address,
                    "city" => $user->city,
                    "state" => $user->state,
                    "zip_code" => $user->zip_code,
                    "delivery_notes" => $user->delivery_notes,
                    "entrance_code" => $user->entrance_code,
                )
            ]);

            $first_name = Input::get('first_name');
            Mail::send('emails.auth.activate', array('link' => URL::route('subscription-activate', $code), 'first_name' => $first_name), function($message) use ($user) {
                $message->to($user->email, $user->first_name)->subject('Activate your account');
            });

            return Redirect::action('thanks');
        }
    }

    public function getSwap()
    {
        return View::make('subscription.swap');
    }

    public function postSwap()
    {
        $id = Auth::id();
        $user = User::find($id);

        $user->subscription(Input::get('plan'))->swap();

        return Redirect::action('subscription-settings')->with('notice', 'Your have successfully changed your plan.');
    }

    public function getActivate($code)
    {
        $user = User::where('code', '=', $code)->where('active', '=', 0);

        if($user->count()) {
            $user = $user->first();

            // Update user to active state
            $user->active   = 1;
            $user->code     = '';

            if($user->save()) {

                return View::make('subscription.activated');
            }
        }

        return Redirect::route('home');
    }

    public function getSettings()
    {
        $id = Auth::id();
        $user = User::find($id);
        return View::make('subscription.settings')->with('user', $user);
    }

    public function getCancel()
    {
        $id = Auth::id();
        $user = User::find($id);

        $user->subscription()->cancel();

        return Redirect::action('subscription-settings')->with('notice', 'You have cancelled your membership.');
    }

    public function getResume()
    {
        $id = Auth::id();
        $user = User::find($id);

        $user->subscription($user->stripe_plan)->resume();

        return Redirect::action('subscription-settings')->with('notice', 'You have resumed your membership.');
    }

    public function getCard()
    {
        return View::make('subscription.card');
    }

    public function postCard()
    {
        $id = Auth::id();
        $user = User::find($id);

        $user->updateCard(Input::get('token'));

        return Redirect::action('subscription-settings')->with('notice', 'Your card has been updated.');
    }

    public function getChangePassword()
    {
        return View::make('subscription.password');
    }

    public function postChangePassword()
    {
        $validator = Validator::make(Input::all(),
            array(
                'old_password'   => 'required',
                'password'       => 'required|min:6',
                'password_again' => 'required|same:password',
            )
        );

        if($validator->fails()) {
            return Redirect::route('subscription-change-password')
                ->withErrors($validator);
        } else {

            $user           = User::find(Auth::user()->id);

            $old_password   = Input::get('old_password');
            $password       = Input::get('password');

            if(Hash::check($old_password, $user->getAuthPassword())) {
                $user->password = Hash::make($password);

                if($user->save()) {

                    $first_name = User::find(Auth::user()->first_name);

                    Mail::send('emails.auth.password_updated', array('first_name' => $first_name), function($message) use ($user) {
                        $message->to($user->email, $user->first_name)->subject('Your password has been updated.');
                    });

                    return Redirect::route('subscription-settings')
                        ->with('notice', 'Your password has been changed.');
                }
            } else {
                return Redirect::route('subscription-change-password')
                    ->with('notice', 'Your old password is incorrect.');
            }

        }

        return Redirect::route('subscription-change-password')
                ->with('notice', 'Your password could not be changed.');

    }

    public function getForgotPassword()
    {
        return View::make('subscription.forgot');
    }

    public function postForgotPassword()
    {
        $validator = Validator::make(Input::all(),
            array(
                'email' => 'required|email'
            )
        );

        if($validator->fails()) {
            return Redirect::route('subscription-forgot-password')
                    ->withErrors($validator)
                    -withInput();
        } else {

            $user = User::where('email', '=', Input::get('email'));

            if($user->count()) {
                $user = $user->first();

                $code                 = str_random(60);
                $password             = str_random(10);

                $user->code           = $code;
                $user->password_temp  = Hash::make($password);

                if($user->save()) {

                    Mail::send('emails.auth.forgot', array('link' => URL::route('subscription-recover', $code), 'first_name' => $user->first_name, 'password' => $password), function($message) use ($user) {
                        $message->to($user->email, $user->first_name)->subject('Your new password');
                    });

                    return Redirect::route('subscription-sign-in')
                        ->with('notice', 'We have sent you a new password.');

                }
            }

        }

        return Redirect::route('subscription-recover')
                ->with('notice', 'Could not request new password.');

    }

    public function getRecover($code) {
        $user = User::where('code', '=', $code)
                ->where('password_temp', '!=', '');

        if($user->count()) {
            $user = $user->first();

            $user->password = $user->password_temp;
            $user->password_temp = '';
            $user->code         = '';

            if($user->save()) {

                return  Redirect::route('subscription-sign-in')
                        ->with('notice', 'Your account has been recovered. You may now log in with your new password.');

            }
        }

        return  Redirect::route('subscription-sign-in')
                ->with('notice', 'Could not recover your account.');
    }

    public function getChangeAddress()
    {
        return View::make('subscription.address');
    }

    public function postChangeAddress()
    {
        $validator = Validator::make(Input::all(),
            array(
                'address'           => 'required',
                'city'              => 'required',
                'state'             => 'required',
                'zip_code'          => 'required|max:11|in:90210,91201,85851',
            )
        );

        if($validator->fails()) {
            return Redirect::route('subscription-change-address')
                ->withErrors($validator);
        } else {
            $user           = User::find(Auth::user()->id);

            $address        = Input::get('address');
            $city           = Input::get('city');
            $state          = Input::get('state');
            $zip_code       = Input::get('zip_code');
            $delivery_notes = Input::get('delivery_notes');
            $entrance_code  = Input::get('entrance_code');

            $user->address          = $address;
            $user->city             = $city;
            $user->state            = $state;
            $user->zip_code         = $zip_code;
            $user->delivery_notes   = $delivery_notes;
            $user->entrance_code    = $entrance_code;

            if($user->save()) {

                $first_name = User::find(Auth::user()->first_name);

                Mail::send('emails.auth.address_updated', array('first_name' => $first_name), function ($message) use ($user) {
                    $message->to($user->email, $user->first_name)->subject('Your address has been updated.');
                });

                return Redirect::route('subscription-settings')
                    ->with('notice', 'Your address has been changed.');

            }

        return Redirect::route('subscription-settings')
               ->with('notice', 'Your address could not be changed.');
        }
    }
}
<?php

class RangeController extends BaseController {

    public function getRange()
    {
        return View::make('range.check');
    }

    public function postRange()
    {
        $validator = Validator::make(Input::all(),
            array(
                'zip_code'          => 'required|max:11|in:90210,91201,85851',
            )
        );

        if($validator->fails()) {
            return Redirect::action('range-sorry');
        } else {
            return Redirect::action('range-ok');
        }
    }

    public function postSwap()
    {
        $this->user->subscription(Input::get('plan'))->swap();
        return Redirect::action('subscription');
    }

    public function getSettings()
    {
        return View::make('subscription.settings')->with('user', $this->user);
    }

    public function getCancel()
    {
        $this->user->subscription()->cancel();

        return Redirect::action('subscription')->with('notice', 'Sorry to see you go.');
    }

    public function getResume()
    {
        $this->user->subscription($this->user->stripe_plan)->resume();

        return Redirect::action('subscription');
    }

    public function getCard()
    {
        return View::make('subscription.card');
    }

    public function postCard()
    {
        $this->user->updateCard(Input::get('token'));

        return Redirect::action('subscription')->with('notice', 'Your card has been updated.');
    }
}
<div class="stripe-errors panel hide"></div>


<label>
    <div class="row">
        <div style="z-index: 99999999999999;" class="col-xs-12 col-sm-3 col-md-3 col-lg-12">
            <input name="number" type="text" data-stripe="number" placeholder="Card Number">
            @if($errors->has('number'))
                {{ $errors->first('number') }}
            @endif
        </div>
    </div>
    <div class="row">
            <div style="z-index: 99999999999999999999;" class="col-xs-4 col-sm-3 col-md-3 col-lg-4">
                <input name="exp-month" type="number" data-stripe="exp-month" placeholder="MM">
                @if($errors->has('exp-month'))
                    {{ $errors->first('exp-month') }}
                @endif
            </div>
            <div style="z-index: 99999999999999999999;" class="col-xs-4 col-sm-3 col-md-3 col-lg-4">
                <input name="exp-year" type="number" data-stripe="exp-year" placeholder="YY">
                @if($errors->has('exp-year'))
                    {{ $errors->first('exp-year') }}
                @endif
            </div>
            <div style="z-index: 99999999999999999999;" class="col-xs-4 col-sm-3 col-md-3 col-lg-4">
                <input name="cvc" type="number" data-stripe="cvc" placeholder="CVC">
                @if($errors->has('cvc'))
                    {{ $errors->first('cvc') }}
                @endif
            </div>
    </div>

</label>


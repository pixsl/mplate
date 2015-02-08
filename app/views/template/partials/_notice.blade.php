@if(Session::has('notice'))
    <div data-alert class="alert-box radius">
        {{ Session::get('notice') }}
        <a href="#" class="close">&times;</a>
    </div>
@endif

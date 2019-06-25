<form class="form-horizontal" id="sign-up-form" method="POST" action="{{ route('registerAjax') }}">
    {{ csrf_field() }}

    <div class="form__group">
        <label for="name" class="col-md-4 form__label">Name</label>

        <div>
            <input id="name_signup" type="text" class="form__input" name="name" value="{{ old('name') }}" required autofocus>

            {{-- @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif --}}
        </div>
    </div>

    <div class="form__group">
        <label for="email" class="form__label">E-Mail Address</label>

        <div>
            <input id="email_signup" type="email" class="form__input" name="email" value="{{ old('email') }}" required>

            {{-- @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif --}}
        </div>
    </div>

    <div class="form__group">
        <label for="password" class="form__label">Password</label>

        <div>
            <input id="password_signup" type="password" class="form__input" name="password" required>

            {{-- @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif --}}
        </div>
    </div>

    <div class="form__group">
        <div>
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>
</form>
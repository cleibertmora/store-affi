<div class="form__group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="form__label">E-Mail Address</label>
        <input id="email" type="email" class="form__input" name="email" value="{{ old('email') }}" required autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
</div>
<br/>
<div class="form__group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="form__label">Password</label>
        <input id="password" type="password" class="form__input" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
</div>
<br/>
<div class="form__group">
    <div class="custom-checkbox">
        <label class="form__label">
            <input type="checkbox" class="form__checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>
    </div>
</div>
<br/>
<div class="form__group mb--2 text-center">
    <button type="submit" class="btn btn-fullwidth btn-bg-primary">
        Login
    </button>
    <br/><br/>
    <a href="{{ route('password.request') }}">
        Forgot Your Password?
    </a>
</div>
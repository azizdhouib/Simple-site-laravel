@extends('layouts.app')

@section('content')
<div id="container3">

                    <form method="POST" action="{{ route('login') }}" class="form3">
                        @csrf


                            <label for="email" >{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif




                            <label for="password" >{{ __('Password') }}</label>


                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif





                        <div id="lower">
                                    <input  type="checkbox" {{ old('remember') ? 'checked' : '' }}>

                                    <label  for="checkbox">
                                        {{ __('Remember Me') }}
                                    </label>






                                <button type="submit">
                                    {{ __('Login') }}
                                </button>
                        </div>
                                <a class="btn" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>


                    </form>

</div>
@endsection

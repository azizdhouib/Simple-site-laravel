@extends('layouts.app')

@section('content')
<div id="container2">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div >
                            <label for="fname" >{{ __('Prénom') }}</label>

                            <div >
                                <input id="fname" type="text" class="form-control" name="fname"  required autofocus>


                            </div>
                        </div>

                        <div >
                            <label for="lname" >{{ __('Nom') }}</label>

                            <div >
                                <input id="lname" type="text" class="form-control" name="lname" required autofocus>


                            </div>
                        </div>

                        <div >
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                            <div >
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div>
                            <label for="password" >{{ __('Password') }}</label>

                            <div >
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div >
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            <div >
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div >
                            <label for="admin" >admin</label>

                            <div >
                                <select id="admin" type="text" class="form-control" name="admin">
                                    <option value="1">Admin</option>
                                    <option value="2">Simple utilisateur</option>
                                </select>
                            </div>
                        </div>

                        <div >
                            <div >
                                <button type="submit" >
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>


@endsection

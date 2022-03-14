@extends('layouts.app')

@section('content')
<div class="bg-animation"></div>
<div class="bg-animation bg-animation2"></div>
<div class="bg"></div>
<div>
    <h1 class="home-text">LOGIN</h1>
    <div class="login-wrap">
        <div class="login-container">
            <form action="{{ route('login') }}" method="post">
                <div>
                    <input type="email" name="email" id="email" placeholder="mail address">
                </div>
                <div>
                    <input type="password" name="password" id="password" placeholder="password">
                </div>
                <button type="submit">ログイン</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
@endsection

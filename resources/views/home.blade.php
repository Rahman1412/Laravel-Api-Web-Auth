<a href="{{url('/logout')}}">Logout</a>


@if (Auth::check())
    <p>Hello, {{ Auth::user()->name }}!</p>
@else
    <p>Welcome, guest!</p>
@endif
<form action="{{url('/login')}}" method="POST">
    @csrf
    <input type="text" name="email" value="{{old('name')}}">
    <input type="password" name="password" value="{{old('password')}}">
    <button type="submit">Submit</button>
</form>
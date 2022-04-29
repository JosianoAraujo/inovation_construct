
@csrf
<input type="text" name="name" placeholder="Name:" value="{{$user->name ??old('name')}}">
<input type="text" name="email" placeholder="Email:" value="{{$user->email ?? old('email')}}">
<input type="password" name="password" placeholder="password">


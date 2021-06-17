
@if(session()->has('user'))
<h2>{{ session("user") }}</h2>
@endif
<h1>Welcome to user profile  : {{session("UserName")}}</h1>

<a href="logout"> Logout </a>
<h1>User Login</h1>

<form action="submitform" method="post">
@csrf
    <input type="text" name="username" placeholder="Enter User Name" /> <br><br>

    <input type="password" name="pass" placeholder="Enter User password" /> <br><br>

    <input type="submit" name="login" value="Login" /> <br><br>
</form>
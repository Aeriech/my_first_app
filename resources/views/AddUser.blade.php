<h1>Add User</h1>
{{-- the add in action form is the route in the controller --}}
<form action="add" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter Username"> <br> 
    <span style="color: red">@error('username'){{ $message }}@enderror</span> <br>

    <input type="text" name="password" placeholder="Enter Password"> <br> 
    <span style="color: red">@error('password'){{ $message }}@enderror</span> <br>

    <input type="text" name="email" placeholder="Enter Email"> <br> 
    <span style="color: red">@error('email'){{ $message }}@enderror</span><br>

    <button type="submit"> Add User </button>

</form>
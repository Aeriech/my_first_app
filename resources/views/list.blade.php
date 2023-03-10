<h1>Users List</h1>
<table border="1">
<tr>
    <td>Id</td>
    <td>Username</td>
    <td>Password</td>
    <td>Email</td>
</tr>
{{-- the userdata is from ListController --}}
@foreach ($userdata as $item)
<tr>
    <td>{{ $item["id"] }}</td>
    <td>{{ $item["username"] }}</td>
    <td>{{ $item["password"] }}</td>
    <td>{{ $item["email"] }}</td>
</tr>
@endforeach
</table>

<form method="POST" action="/laravel/test/public/user">
	{{ csrf_field() }}
First Name:<input type="text" name="name"><br>
Last Name:<input type="text" name="email"><br>
Last Name:<input type="text" name="password"><br>
<input type="submit"  value="create">
</form>
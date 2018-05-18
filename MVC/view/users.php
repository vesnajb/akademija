<table border="1" width="30%">
	<thead>
		<tr>
			<th>Name</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Navigation</th>
	</tr>
	</thead>
	<tbody>
		<?php
			foreach ($users as $user) {
				echo "<tr>";
				echo "<td>$user[firstname]</td>";
				echo "<td>$user[lastname]</td>";
				echo "<td>$user[email]</td>";
				echo "<td><a href='/akademija/MVC/users/getUser/$user[id]' >User</a></td>";
				echo "</tr>";
			}
		?>
	</tbody>
</table>
<a href="/akademija/MVC/users/getUsers/all">Show All Users</a>
<br/>
<a href="/akademija/MVC/posts/getPosts/all">Show All Posts</a>
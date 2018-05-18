<table border="1" width="50%">
	<thead>
		<tr>
			<th>Title</th>
			<th>Permalink</th>
			<th>Content</th>
			<th>Publish Date</th>
	</tr>
	</thead>
	<tbody>
		<?php
			foreach ($posts as $post) {
				echo "<tr>";
				echo "<td>$post[title]</td>";
				echo "<td>$post[permalink]</td>";
				echo "<td>$post[content]</td>";
				echo "<td>$post[publish_date]</td>";
				echo "<td><a href='/akademija/MVC/posts/getPost/$post[id]' >Post</a></td>";
				echo "</tr>";
			}
		?>
	</tbody>
</table>
<a href="/akademija/MVC/users/getUsers/all">Show All Users</a>
<br/>
<a href="/akademija/MVC/posts/getPosts/all">Show All Posts</a>
<br/>

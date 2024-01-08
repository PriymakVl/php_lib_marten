<div class="container">
	<h1 class="text-center">Main Categories</h1>
	
	<table class="table table-bordered table-hover">
		<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Image</th>
		</tr>
		</thead>
		<tbody>
        {% for cat in cats %}
            <tr>
                <th scope="row">{{ loop.index }}</th>
                <td>
                    <a href="/admin/category/{{cat.id}}">{{ cat.name }}</a>
                </td>
                <td>
                    <img src="/assets/img/category/{{ cat.img }}" height="50px">
                </td>
            </tr>
		{% endfor %}
		</tbody>
	</table>
</div>

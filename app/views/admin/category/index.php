<div class="container">
	<h1 class="text-center">Categories</h1>
	
	<a href="/admin/category/add" class="btn btn-primary mb-3" role="button">Add category</a>
	
	<table class="table table-bordered table-hover">
		<thead class="thead-dark">
		<tr>
			<th scope="col">#</th>
			<th scope="col">Name</th>
			<th scope="col">Image</th>
			<th scope="col">Parent</th>
			<th scope="col">Actions</th>
		</tr>
		</thead>
		<tbody>
        {% for cat in cats %}
            <tr>
                <th scope="row">{{ loop.index }}</th>
                <td>{{ cat.name }}</td>
                {% if cat.img %}
                    <td><img src="/assets/img/category/{{ cat.img }}" height="50px"></td>
                {% else %}
                    <td>Изображения нет</td>
                {% endif %}
                {% if cat.parent_id %}
                    <td>{{ cat.parent.name }}</td>
                {% else %}
                    <td>Main category</td>
                {% endif %}
                <td>
                    <a href="/admin/category/delete/{{cat.id}}" class="btn-sm btn-danger">Delete</a>
                    <a href="#" class="btn-sm btn-primary">Edit</a>
                </td>
            </tr>
		{% endfor %}
		</tbody>
	</table>
</div>

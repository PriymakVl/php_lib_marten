<div class="container">
	<h1 class="text-center">Add product form</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form action="/admin/product/add" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
                <div class="form-group">
					<label for="price">Price</label>
					<input type="text" class="form-control" id="price" name="price">
				</div>

				<div class="form-group">
					<label for="cat">Category</label>
					<select class="form-select" name="cat_id" id="cat">
						<option selected>Не выбрана</option>
						{% for main_cat in cats %}
							<option disabled>{{ main_cat.name }}</option>
							{% for cat in main_cat.sub %}
								<option value="{{cat.id}}">{{ cat.name }}</option>
							{% endfor %}
						{% endfor %}
					</select>
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" id="description" rows="3" name="description"></textarea>
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" class="form-control-file" id="image" name="image">
				</div>
				<button type="submit" class="btn btn-primary">Add</button>
			</form>
		</div>
	</div>
</div>
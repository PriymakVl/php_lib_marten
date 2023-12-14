<div class="container">
	<h1 class="text-center">Add category form</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form action="/admin/category/add" method="POST">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<!-- parent category -->
				<div class="form-group">
					<label for="parent">Category Parent</label>
					<select class="form-select" name="parent_id" id="parent">
						<option selected>Не выбрана</option>
						{% for main_cat in cats %}
							<option value="{{main_cat.id}}">{{ main_cat.name }}</option>
						{% endfor %}
					</select>
				</div>

				<button type="submit" class="btn btn-primary">Add</button>
			</form>
		</div>
	</div>
</div>
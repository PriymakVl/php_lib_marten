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
				<input type="hidden" value="{{parent_id}}" name="parent_id">
				<button type="submit" class="btn btn-primary">Add</button>
			</form>
		</div>
	</div>
</div>
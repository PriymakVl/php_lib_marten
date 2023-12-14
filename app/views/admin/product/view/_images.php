<div class="tab-pane fade" id="images">
    <h2 class="text-center">Images product</h2>
    <a href="#" class="btn btn-primary mb-3" role="button">Add Image</a>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for img in product.images %}
            <tr>
                <th scope="row">{{ loop.index }}</th>
                <td>
                    <img src="/assets/img/product/original/{{ img.src }}">
                </td>
                <td>
                    <a href="#" class="btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
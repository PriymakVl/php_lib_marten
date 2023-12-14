<div class="tab-pane fade show active" id="info">
    <h2 class="text-center">Info</h2>
    <a href="#" class="btn btn-primary mb-3" role="button">Edit product</a>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <th>Name</th>
                <td>{{ product.name }}</td>
            </tr>
            <tr>
                <th>2</th>
                <th>{{ product.category.name }}</th>
                <td>Eggs</td>
            </tr>
            <tr>
                <th>3</th>
                <th>Price</th>
                <td>{{product.price}}$</td>
            </tr>
            <tr>
                <th>4</th>
                <th>Old Price</th>
                <td>
                    {% if product.price_old %}
                        {{ product.price_old }}$
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th>5</th>
                <th>Description</th>
                <td>{{ product.description }}</td>
            </tr>
        </tbody>
    </table>
</div>
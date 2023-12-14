<div class="container mt-3">
    <h1 class="text-center">{{ product.name }}</h1>
    <!-- nav -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#info">Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#images">Images</a>
        </li>
    </ul>
    
    <!-- content -->
    <div class="tab-content mt-3">
        <!-- info -->
        {% include 'admin/product/view/_info.php' %}
        <!-- Images -->
        {% include 'admin/product/view/_images.php' %}
    </div>
</div>

</body>
</html>

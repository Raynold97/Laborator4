@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
    <a class=" navbar-brand" href="/">Product Store</a>
        <ul class="navbar-nav ml-5 mt-2 mt-lg-0" id="navbar-mid">
            <li class="nav-item mr-5">
                <a class="nav-link" href="/products/create">Create Product</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="/products">View Products</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="/products/update">Update Product</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="/products/delete">Delete Product</a>
            </li>
        </ul>

      
    </div>
</nav>
<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }

    #contDropdown {
        left: -110%;
    }

</style>
@show

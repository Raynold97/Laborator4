@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
    <a class=" navbar-brand" href="/">Product Store</a>
        <ul class="navbar-nav ml-5 mt-2 mt-lg-0" id="navbar-mid">
            <li class="nav-item mr-5">
                <a class="nav-link" href="/products/create">Adaugă produs (Create)</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="/products">Vezi produse (Read)</a>
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

<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/redirects"><img
                    src="https://cdn4.iconfinder.com/data/icons/childhood-objects-2/128/_leaf_plant_hand_drawn_abstract-117-2-256.png"
                    width="70" height="70" />
                {{--  <span class="menu-title">Home</span>  --}}

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/users') }}">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">User</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/posts') }}">
                <i class="typcn typcn-film menu-icon"></i>
                <span class="menu-title">Posts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/products') }}">
                <i class="typcn typcn-document-text menu-icon"></i>
                <span class="menu-title">Products</span>
            </a>
        </li>

    </ul>
</nav>
<script>
    $('#ui-basic').collapse({
        aria - expanded = "false"
    })

</script>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('admin.index')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{@route('admin.order.index',['slug'=>'New'])}}">
                        <i class="bi bi-circle"></i><span>New Orders</span>
                    </a>
                </li>
                <li>
                    <a href="{{@route('admin.order.index',['slug'=>'Accepted'])}}">
                        <i class="bi bi-circle"></i><span>Accepted Orders</span>
                    </a>
                </li>
                <li>
                    <a href="{{@route('admin.order.index',['slug'=>'Completed'])}}">
                        <i class="bi bi-circle"></i><span>Completed Orders</span>
                    </a>
                </li>
                <li>
                    <a href="{{@route('admin.order.index',['slug'=>'Cancelled'])}}">
                        <i class="bi bi-circle"></i><span>Cancelled Orders</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.category.index')}}">
                <i class="bi bi-menu-button"></i>
                <span>Categories</span>
            </a>
        </li><!-- End Blank Page Nav --><li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.product.index')}}">
                <i class="bx bx-food-menu"></i>
                <span>Products</span>
            </a>
        </li><!-- End Blank Page Nav --><li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.comment.index')}}">
                <i class="bi bi-menu-button"></i>
                <span>Comments</span>
            </a>
        </li><!-- End Blank Page Nav --><li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.message.index')}}">
                <i class="bi bi-envelope"></i>
                <span>Messages</span>
            </a>

        <!-- End Blank Page Nav --><li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.user.index')}}">
                <i class="bi bi-person"></i>
                <span>Users</span>
            </a>
        </li><!-- End Blank Page Nav -->


        <li class="nav-heading">Pages</li>
        </li><!-- End Blank Page Nav -->
        <!-- End Blank Page Nav --><li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.faq.index')}}">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q.</span>
            </a>
        </li><!-- End Blank Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.setting')}}">
                <i class="bi bi-gear-fill"></i>
                <span>Settings</span>
            </a>
        </li><!-- End Profile Page Nav -->



    </ul>

</aside><!-- End Sidebar-->

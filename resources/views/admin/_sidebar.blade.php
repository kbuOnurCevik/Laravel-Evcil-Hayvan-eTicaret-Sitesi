<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" style="background-color: #0f6848" href="{{route('admin_home')}}">
        <div class="sidebar-brand-text mx-3">Admin Home</div>
    </a>



    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_category')}}">
            <i class="fa fa-list"></i>
            <span>Category</span>
        </a>

    </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="{{route('admin_products')}}">
             <i class="fa fa-shopping-basket"></i>
             <span>Products</span>
         </a>

     </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fa fa-credit-card"></i>
            <span>Orders</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Orders</h6>
                <a class="collapse-item" href="{{route('admin_orders')}}">All Orders</a>
                <a class="collapse-item" href="{{route('admin_order_list',['status'=>'new'])}}">New Orders</a>
                <a class="collapse-item" href="{{route('admin_order_list',['status'=>'canceled'])}}">Canceled Orders</a>
                <a class="collapse-item" href="{{route('admin_order_list',['status'=>'completed'])}}">Completed Orders</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTablereview" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fa fa-comments"></i>
            <span>Reviews</span>
        </a>
        <div id="collapseTablereview" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Reviews</h6>
                <a class="collapse-item" href="{{route('admin_review')}}">Product Reviews</a>
                <a class="collapse-item" href="{{route('admin_reviewdec')}}">Declaration Reviews</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_setting')}}"
           aria-controls="collapseForm">
            <i class="fa fa-cog"></i>
            <span>Settings</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_messages')}}"
           aria-controls="collapseForm">
            <i class="fa fa-envelope-open"></i>
            <span>Contact Messages</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_declarations')}}"
           aria-controls="collapseForm">
            <i class="fa fa-paw"></i>
            <span>Posts</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_faq')}}"
           aria-controls="collapseForm">
            <i class="fa fa-question-circle"></i>
            <span>FAQ</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_users')}}"
           aria-controls="collapseForm">
            <i class="fa fa-user"></i>
            <span>Users</span>
        </a>
    </li>

     <hr class="sidebar-divider">
     <div class="version" id="version-ruangadmin"></div>
 </ul>
 <!-- Sidebar -->

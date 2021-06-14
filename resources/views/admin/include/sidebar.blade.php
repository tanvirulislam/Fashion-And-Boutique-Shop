    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('/')}}public/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Advance Ecommerce</span>
      </a>

      <!-- Sidebar -->
     

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-header">Main Nav</li>
           <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard

              </p>
            </a>
          </li>

          <li class="nav-header">Catagory</li>
          <li class="nav-item">
            <a href="{{route('catagory')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Catagory

             </p>
           </a>
         </li>

         <li class="nav-header">Catagory</li>
         <li class="nav-item">
          <a href="{{route('subcatagory')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
             Subcatagory

           </p>
         </a>
       </li>

       
       <li class="nav-header">Catagory</li>
       <li class="nav-item">
        <a href="{{route('product')}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Product
            
          </p>
        </a>
      </li>

      <li class="nav-header">Order Section</li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
          Order
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('order')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>New Order</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('allorder')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>All order</p>
          </a>
        </li>

      </ul>
    </li>

      <li class="nav-header">Catagory</li>
      <li class="nav-item">
        <a href="{{route('brand')}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
           Brand

         </p>
       </a>
     </li>

     <li class="nav-header">Catagory</li>
     <li class="nav-item">
      <a href="{{route('food')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Food

        </p>
      </a>
    </li>

    

    <li class="nav-header">Setting</li>
    <li class="nav-item">
      <a href="{{route('logout')}}" class="nav-link"  onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">

      <i class="nav-icon fas fa-th"></i>
      <p>
        LogOut

      </p>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
  </li>




</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
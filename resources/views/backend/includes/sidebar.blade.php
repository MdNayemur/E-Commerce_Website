    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Admin <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="index.html" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
          <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Admin Area</label>
     
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Categories</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
          <li class="sub-item"><a href="{{ Route('subcategorycreate') }}" class="sub-link">Add Category</a></li>  
          <li class="sub-item"><a href="{{ Route('subcategorymanage') }}" class="sub-link">Manage Category</a></li>
            
          </ul>
        </li>
      
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Items Data</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ Route('item.create') }}" class="sub-link">Add Items</a></li>
            <li class="sub-item"><a href="{{ Route('item.manage') }}" class="sub-link">Manage Items</a></li>
            
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Orders</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('ordermanage') }}" class="sub-link">pending Orders</a></li>
            <li class="sub-item"><a href="{{ route('ordercreate') }}" class="sub-link">Delivered Orders</a></li> 
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Feedback</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
     
            <li class="sub-item"><a href="{{ route('feedview') }}" class="sub-link">User Feedback</a></li> 
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Users</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
     
            <li class="sub-item"><a href="{{route('userdata')}}" class="sub-link">All Users</a></li> 
          </ul>
        </li>

      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->
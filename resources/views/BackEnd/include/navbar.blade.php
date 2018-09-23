<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin/dashboard')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li class="active"><a href="{{url('/admin/dashboard')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
      <li class="submenu"> <a href="#"><i class="icon icon-sitemap"></i> <span>Categories</span> <span class="label label-important">2</span></a>
        <ul>
          <li><a href="{{url('/admin/categories')}}">Categories</a></li>
          <li><a href="{{url('/admin/subCategories')}}">Sub Categories</a></li>
        </ul>
      </li> 
      <li> 
        <a href="{{url('/admin/products')}}"><i class="icon icon-th-list"></i>
         <span>Products</span>
        </a>
      </li> 
      <li> 
        <a href="{{url('/admin/blogs')}}"><i class="icon icon-rss"></i>
         <span>Blogs</span>
        </a>
      </li> 
      <li> 
        <a href="{{url('/admin/users')}}"><i class="icon icon-user"></i>
         <span>Users</span>
        </a>
      </li> 
      <li> 
        <a href="{{url('/admin/contact')}}"><i class="icon icon-phone"></i>
         <span>Contact</span>
        </a>
      </li> 
      
    </ul>
  </div>
  <!--sidebar-menu-->
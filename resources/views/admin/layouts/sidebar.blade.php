<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
            <a class="" href="{{route('admin.dashboard')}}">
                          <span>Home</span>
                      </a>
          </li>


          <li class="{{ request()->is('admin/content2') ? 'active' : '' }}">
            <a class="" href="{{route('content')}}">
                          <span>content</span>

                      </a>

          </li>

          <li class="{{ request()->is('admin/categories') ? 'active' : '' }}">
            <a class="" href="{{route('category')}}">
                          <span>category</span>

                      </a>

          </li>


          <li class="{{ request()->is('admin/product') ? 'active' : '' }}">
            <a class="" href="{{route('product')}}">
                          <span>product</span>

                      </a>

          </li>


          {{-- <li class="{{ request()->is('admin/users') ? 'active' : '' }}">
            <a class="" href="{{route('users')}}">
                          <i class="icon_piechart"></i>
                          <span>จัดการสมาชิก</span>

                      </a>

          </li> --}}

          {{-- <li class="{{ request()->is('admin/background') ? 'active' : '' }}">
            <a class="" href="{{route('background')}}">
                          <span>background</span>

                      </a> --}}

          {{-- </li>
          <li class="{{ request()->is('admin/content') ? 'active' : '' }}">
            <a class="" href="content">
                          <span>conten</span>

                      </a>

          </li> --}}

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

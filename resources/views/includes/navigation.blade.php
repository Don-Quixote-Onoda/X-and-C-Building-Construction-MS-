<!-- BOF ASIDE-LEFT -->
<div id="sidebar" class="sidebar" style="height: 120vh;">
  <div class="sidebar-content">
      <!-- sidebar-menu  -->
      <div class="sidebar-menu">
          <ul>
              <li class="header-menu">
                  Categories
              </li>
              <li>
                  <a href="/admin/home">
                      <i class="ti-dashboard"></i>
                      <span class="menu-text">Dashboard</span>
                  </a>
              </li>
              @if (Auth::guard('admin')->user()->user_type_id == 0)
              <li class="maincat">
                <a href="#">
                    <i class="fa fa-user-o"></i>
                    <span class="menu-text">Users</span>
                </a>
                <div class="subcat">
                    <ul>
                        <li>
                            <a href="/admin/users/create">Add User</a>
                        </li>
                        <li>
                            <a href="/admin/users">User's Lists</a>
                        </li>
                    </ul>
                </div>
            </li>
              @endif
            
            @if (Auth::guard('admin')->user()->user_type_id == 1)
            <li class="maincat  {{ (request()->is('admin/projects') || request()->is('admin/projects/create') || request()->is('admin/projects/*/edit')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-cubes"></i>
                    <span class="menu-text">Projects</span>
                </a>
                <div class="subcat">
                    <ul> 
                        <li class=" {{ (request()->is('admin/projects/create')) ? 'active' : '' }}">
                            <a href="/admin/projects/create" >Add Project</a>
                        </li>
                        <li class=" {{ (request()->is('admin/projects') || request()->is('admin/projects/*/edit')) ? 'active' : '' }}">
                            <a href="/admin/projects" >Projects' Lists</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif

            @if (Auth::guard('admin')->user()->user_type_id == 2)
            <li class="maincat {{ (request()->is('/admin/purchases') || request()->is('/admin/purchases/create') || request()->is('/admin/purchases/*/edit')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-building"></i>
                    <span class="menu-text">Purchase</span>
                </a>
                <div class="subcat">
                    <ul>
                        <li class=" {{ (request()->is('admin/purchases/create')) ? 'active' : '' }}">
                            <a href="/admin/purchases/create" >Add Purchase</a>
                        </li>
                        <li class=" {{ (request()->is('admin/purchases') || request()->is('admin/purchases/*/edit')) ? 'active' : '' }}">
                            <a href="/admin/purchases" >Purchase' Lists</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif

            
            @if (Auth::guard('admin')->user()->user_type_id == 1)
            <li class="maincat {{ (request()->is('/admin/cheques') || request()->is('/admin/cheques/create') || request()->is('/admin/cheques/*/edit')) ? 'active' : '' }}"">
                <a href="#">
                    <i class="fa fa-money"></i>
                    <span class="menu-text">Cheques</span>
                </a>
                <div class="subcat">
                    <ul>
                        <li class=" {{ (request()->is('admin/cheques/create')) ? 'active' : '' }}">
                            <a href="/admin/cheques/create" >Add Cheques</a>
                        </li>
                        <li class=" {{ (request()->is('admin/cheques') || request()->is('admin/cheques/*/edit')) ? 'active' : '' }}">
                            <a href="/admin/cheques" >Cheques' Lists</a>
                        </li>
                    </ul>
                </div>
            </li>
            @endif
            
            <li class="active">
                <a href="/admin/logs">
                    <i class="fa fa-line-chart"></i>
                    <span class="menu-text">Reports</span>
                </a>
            </li>
          </ul>
      </div>

      <!-- sidebar-menu  -->
  </div>
</div>
<!-- EOF ASIDE-LEFT -->
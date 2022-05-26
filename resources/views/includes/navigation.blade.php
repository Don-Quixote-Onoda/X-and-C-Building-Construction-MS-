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
                  <a href="/dashboard">
                      <i class="ti-dashboard"></i>
                      <span class="menu-text">Dashboard</span>
                  </a>
              </li>
              <li class="maincat">
                <a href="#">
                    <i class="fa fa-user-o"></i>
                    <span class="menu-text">Users</span>
                </a>
                <div class="subcat">
                    <ul>
                        <li>
                            <a href="{{route('users.create')}}">Add User</a>
                        </li>
                        <li>
                            <a href="/users">User's Lists</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="maincat  {{ (request()->is('projects') || request()->is('projects/create') || request()->is('projects/*/edit')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-cubes"></i>
                    <span class="menu-text">Projects</span>
                </a>
                <div class="subcat">
                    <ul> 
                        <li class=" {{ (request()->is('projects/create')) ? 'active' : '' }}">
                            <a href="/projects/create" >Add Project</a>
                        </li>
                        <li class=" {{ (request()->is('projects') || request()->is('projects/*/edit')) ? 'active' : '' }}">
                            <a href="/projects" >Projects' Lists</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="maincat {{ (request()->is('purchases') || request()->is('purchases/create') || request()->is('purchases/*/edit')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-building"></i>
                    <span class="menu-text">Purchase</span>
                </a>
                <div class="subcat">
                    <ul>
                        <li class=" {{ (request()->is('purchases/create')) ? 'active' : '' }}">
                            <a href="/purchases/create" >Add Purchase</a>
                        </li>
                        <li class=" {{ (request()->is('purchases') || request()->is('purchases/*/edit')) ? 'active' : '' }}">
                            <a href="/purchases" >Purchase' Lists</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="maincat {{ (request()->is('cheques') || request()->is('cheques/create') || request()->is('cheques/*/edit')) ? 'active' : '' }}"">
                <a href="#">
                    <i class="fa fa-money"></i>
                    <span class="menu-text">Cheques</span>
                </a>
                <div class="subcat">
                    <ul>
                        <li class=" {{ (request()->is('cheques/create')) ? 'active' : '' }}">
                            <a href="/cheques/create" >Add Cheques</a>
                        </li>
                        <li class=" {{ (request()->is('cheques') || request()->is('cheques/*/edit')) ? 'active' : '' }}">
                            <a href="/cheques" >Cheques' Lists</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="active">
                <a href="index.html">
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
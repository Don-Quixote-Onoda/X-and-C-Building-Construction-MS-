<!-- BOF ASIDE-LEFT -->
<div id="sidebar" class="sidebar" style="height: 100vh;">
  <div class="sidebar-content">
      <!-- sidebar-menu  -->
      <div class="sidebar-menu">
          <ul>
              <li class="header-menu">
                  Categories
              </li>
              <li class="active">
                  <a href="index.html">
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
            <li class="maincat">
                <a href="#">
                    <i class="fa fa-cubes"></i>
                    <span class="menu-text">Projects</span>
                </a>
                <div class="subcat">
                    <ul>
                        <li>
                            <a href="/projects/create" >Add Project</a>
                        </li>
                        <li>
                            <a href="/projects" >Projects' Lists</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="maincat">
                <a href="#">
                    <i class="fa fa-building"></i>
                    <span class="menu-text">Purchase</span>
                </a>
                <div class="subcat">
                    <ul>
                        <li>
                            <a href="/purchases/create" >Add Purchase</a>
                        </li>
                        <li>
                            <a href="/purchases" >Purchase' Lists</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="maincat">
                <a href="#">
                    <i class="fa fa-money"></i>
                    <span class="menu-text">Cheques</span>
                </a>
                <div class="subcat">
                    <ul>
                        <li>
                            <a href="/cheques/create" >Add Cheques</a>
                        </li>
                        <li>
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
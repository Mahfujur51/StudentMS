<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
            </div>
            <div class="details">
              <p class="user-name">Mahfujur</p>
              <p class="designation">Developer</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            
              <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsStudent" aria-expanded="false" aria-controls="layoutsStudent">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Manage Student</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsStudent">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('add_student') }}">Add Student</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('showallstudent') }}">All Student</a>
                  </li>
                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Course</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.csestudent')}}">CSE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.eeestudent')}}">EEE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.ipestudent')}}">IPE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.pmestudent')}}">PME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.chestudent')}}">CHE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.bmestudent')}}">BME</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.testudent')}}">TE</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Teacher</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                  <a class="nav-link" href="{{route('add.teacher')}}">Add Teacher</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('show.teacher') }}">Show Teacher</a>
                  </li>
                  
                </ul>
              </div>
            </li>
          </ul>
        </nav>
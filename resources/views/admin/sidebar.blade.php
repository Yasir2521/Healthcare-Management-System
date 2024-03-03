<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin Pannel</h5>

                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
  
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_doctor_view')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Add Doctors</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Patient</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Appointment List</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_seminar_view')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Seminar</span>
            </a>
          </li>
        </ul>
      </nav>
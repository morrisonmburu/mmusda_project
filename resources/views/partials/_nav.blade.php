<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container-fluid">
        <a class="navbar-brand mr-lg-5" href="/"><img src="/assets/img/adventist-Logo.png">Multimedia University</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="/assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item">
              <a href="/" class="nav-link" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Services</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('blog.index') }}" class="nav-link" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Blog</span>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Departments</span>
              </a>
              <div class="dropdown-menu">
                <a href="" class="dropdown-item">internal Activities</a>
                <a href="" class="dropdown-item">Members Welfare</a>
                <a href="" class="dropdown-item">Church Affairs</a>
                <a href="" class="dropdown-item">Ministries & Outreach</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Activities</span>
              </a>
              <div class="dropdown-menu">
                <a href="/announcements" class="dropdown-item">Announcements</a>
                <a href="" class="dropdown-item">Sermons</a>
                <a href="" class="dropdown-item">Timeline</a>
              </div>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">About</span>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text">Contact</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            
            <li class="nav-item d-none d-lg-block ml-lg-4">
              <a href="{{ route('login') }}" target="_blank" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                  {{-- <i class="fa fa-cloud-download mr-2"></i> --}}
                </span>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>

            <li class="nav-item d-none d-lg-block ml-lg-4">
              <a href="{{ route('register') }}" target="_blank" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon">
                  {{-- <i class="fa fa-cloud-download mr-2"></i> --}}
                </span>
                <span class="nav-link-inner--text">Register</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
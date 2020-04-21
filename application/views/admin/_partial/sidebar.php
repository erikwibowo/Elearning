
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="http://localhost/elearning/dist/index"><?= get_webinfo()->nama_website ?></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="http://localhost/elearning/dist/index">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="<?= empty($this->uri->segment(2)) ? 'active':'' ?>"><a class="nav-link" href="<?= site_url('admin') ?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">MASTER DATA</li>
            <li class="<?= $this->uri->segment(2) == 'admin' ? 'active':'' ?>"><a class="nav-link" href="<?= site_url('admin/admin') ?>"><i class="far fa-user"></i> <span>Admin</span></a></li>
            <li class="dropdown ">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
              <ul class="dropdown-menu">
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_alert">Alert</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_badge">Badge</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_breadcrumb">Breadcrumb</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_buttons">Buttons</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_card">Card</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_carousel">Carousel</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_collapse">Collapse</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_dropdown">Dropdown</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_form">Form</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_list_group">List Group</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_media_object">Media Object</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_modal">Modal</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_nav">Nav</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_navbar">Navbar</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_pagination">Pagination</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_popover">Popover</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_progress">Progress</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_table">Table</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_tooltip">Tooltip</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/bootstrap_typography">Typography</a></li>
              </ul>
            </li>
            <li class="menu-header">Stisla</li>
            <li class="dropdown ">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
              <ul class="dropdown-menu">
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/components_article">Article</a></li>
                <li class=""><a class="nav-link beep beep-sidebar" href="http://localhost/elearning/dist/components_avatar">Avatar</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/components_chat_box">Chat Box</a></li>
                <li class=""><a class="nav-link beep beep-sidebar" href="http://localhost/elearning/dist/components_empty_state">Empty State</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/components_gallery">Gallery</a></li>
                <li class=""><a class="nav-link beep beep-sidebar" href="http://localhost/elearning/dist/components_hero">Hero</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/components_multiple_upload">Multiple Upload</a></li>
                <li class=""><a class="nav-link beep beep-sidebar" href="http://localhost/elearning/dist/components_pricing">Pricing</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/components_statistic">Statistic</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/components_tab">Tab</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/components_table">Table</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/components_user">User</a></li>
                <li class=""><a class="nav-link beep beep-sidebar" href="http://localhost/elearning/dist/components_wizard">Wizard</a></li>
              </ul>
            </li>
            <li class="dropdown ">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
              <ul class="dropdown-menu">
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/forms_advanced_form">Advanced Form</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/forms_editor">Editor</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/forms_validation">Validation</a></li>
              </ul>
            </li>
            <li class="dropdown ">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
              <ul class="dropdown-menu">
                <li class=""><a href="http://localhost/elearning/dist/gmaps_advanced_route">Advanced Route</a></li>
                <li class=""><a href="http://localhost/elearning/dist/gmaps_draggable_marker">Draggable Marker</a></li>
                <li class=""><a href="http://localhost/elearning/dist/gmaps_geocoding">Geocoding</a></li>
                <li class=""><a href="http://localhost/elearning/dist/gmaps_geolocation">Geolocation</a></li>
                <li class=""><a href="http://localhost/elearning/dist/gmaps_marker">Marker</a></li>
                <li class=""><a href="http://localhost/elearning/dist/gmaps_multiple_marker">Multiple Marker</a></li>
                <li class=""><a href="http://localhost/elearning/dist/gmaps_route">Route</a></li>
                <li class=""><a href="http://localhost/elearning/dist/gmaps_simple">Simple</a></li>
              </ul>
            </li>
            <li class="dropdown ">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
              <ul class="dropdown-menu">
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_calendar">Calendar</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_chartjs">ChartJS</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_datatables">DataTables</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_flag">Flag</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_font_awesome">Font Awesome</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_ion_icons">Ion Icons</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_owl_carousel">Owl Carousel</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_sparkline">Sparkline</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_sweet_alert">Sweet Alert</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_toastr">Toastr</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_vector_map">Vector Map</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/modules_weather_icon">Weather Icon</a></li>
              </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
              <ul class="dropdown-menu">
                <li><a href="http://localhost/elearning/dist/auth_forgot_password">Forgot Password</a></li> 
                <li><a href="http://localhost/elearning/dist/auth_login">Login</a></li> 
                <li><a href="http://localhost/elearning/dist/auth_register">Register</a></li> 
                <li><a href="http://localhost/elearning/dist/auth_reset_password">Reset Password</a></li> 
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="http://localhost/elearning/dist/errors_503">503</a></li> 
                <li><a class="nav-link" href="http://localhost/elearning/dist/errors_403">403</a></li> 
                <li><a class="nav-link" href="http://localhost/elearning/dist/errors_404">404</a></li> 
                <li><a class="nav-link" href="http://localhost/elearning/dist/errors_500">500</a></li> 
              </ul>
            </li>
            <li class="dropdown ">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
              <ul class="dropdown-menu">
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/features_activities">Activities</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/features_post_create">Post Create</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/features_posts">Posts</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/features_profile">Profile</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/features_settings">Settings</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/features_setting_detail">Setting Detail</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/features_tickets">Tickets</a></li>
              </ul>
            </li>
            <li class="dropdown ">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
              <ul class="dropdown-menu">
                <li><a href="http://localhost/elearning/dist/utilities_contact">Contact</a></li>
                <li class=""><a class="nav-link" href="http://localhost/elearning/dist/utilities_invoice">Invoice</a></li>
                <li><a href="http://localhost/elearning/dist/utilities_subscribe">Subscribe</a></li>
              </ul>
            </li>
            <li class=""><a class="nav-link" href="http://localhost/elearning/dist/credits"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>
        </aside>
      </div>
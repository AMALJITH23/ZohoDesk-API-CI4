<style>
.dropdown-menu .dropdown-item:hover, .dropdown-menu .dropdown-item:focus, .dropdown-menu a:hover, .dropdown-menu a:focus, .dropdown-menu a:active {
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
    background-color: #e91e63;
    color: #FFFFFF;
}
.table-headers{
  font-weight: 500;
}

.training-stat-inactive,
.training-stat-inactive:hover,
.training-stat-inactive:focus {
    color: #fff !important;
    background-color: #9ea79e !important;
}

.training-stat-active,
.training-stat-active:hover,
.training-stat-active:focus {
    color: #fff !important;
    background-color: #4caf50  !important;
}

.icon-inactive,
.icon-inactive:hover,
.icon-inactive:focus {
    color: #cccccc !important;
}

.icon-active,
.icon-active:hover,
.icon-active:focus {
    color: #e91e63 !important;
}
.status-change-inactive, 
.status-change-inactive:hover , 
.status-change-inactive:focus {
  pointer-events: none;
    cursor: not-allowed;
    text-decoration: none;
    background-color: #9ea79e;
}

.status-link-inactive, 
.status-link-inactive:hover , 
.status-link-inactive:focus {
  pointer-events: none;
    cursor: not-allowed;
}
.status-change-active, 
.status-change-active:hover , 
.status-change-active:focus {
    cursor: pointer;
}
.status-link-active, 
.status-link-active:hover , 
.status-link-active:focus {
    cursor: pointer;
}
.detaile-img-thumb{
    max-width: 170px !important;
    min-width: 170px !important;
    width: 170px !important;
    max-height: 219px !important;
    box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(175, 76, 140, 0.4) !important;
    border-radius: 7px !important;
}
.datepicker{ z-index:99999 !important; }
.clsDatePicker {
    z-index: 100000;
}

/* Set the size of the div element that contains the map */
#map {
height: 180px;  /* The height is 400 pixels */
width: 100%;  /* The width is the width of the web page */
margin-top: 20px !important;
box-shadow: 0 4px 20px 0 rgba(0,0,0,.14), 0 7px 10px -5px rgba(175, 76, 140, 0.4) !important;
border-radius: 7px !important;
}

/* loader */
/* loader */

</style>
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Zoho Ticket Desk</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="/log_out">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
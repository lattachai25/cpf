<div class="page-wrapper chiller-theme toggled">


   <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">
            <strong>{{ Auth::user()->name }}</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>

        </div>
      </div>

      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li>
            <a href="">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>          
          <li class="sidebar-dropdown">
            <a href="">
              <i class="fa fa-cubes"></i>
              <span>MEAT</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="/Poultry/show">POULTR</a>
                </li>
                <li>
                  <a href="/Beef/show">BEEF</a>
                </li>
                <li>
                  <a href="/Lamb/show">LAMB</a>
                </li>
                <li>
                  <a href="/Venison/show">VENISON</a>
                </li>
                <li>
                  <a href="/Turkey/show">TURKEY</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="">
              <i class="fa fa-cubes"></i>
              <span>SEAFOOD</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="/Fish/show">FISH</a>
                </li>
                <li>
                  <a href="/Shells/show">SHELLS</a>
                </li>
                <li>
                  <a href="/Cephalopod/show">CEPHALOPOD</a>
                </li>
                <li>
                  <a href="/Shrimp/show">SHRIMP</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-cubes"></i>
              <span>FRUIT</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="/Apple/show">APPLE</a>
                </li>
                <li>
                  <a href="/Cherries/show">CHERRIES</a>
                </li>
                <li>
                  <a href="/Stonefruit/show">STONE FRUIT</a>
                </li>
                <li>
                  <a href="/Navelcitrus/show">NAVEL CITRUS</a>
                </li>
                <li>
                  <a href="/Strawberry/show">STRAWBERRY</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-cubes"></i>
              <span>VEGETABLE</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="/Carrot/show">CARROT</a>
                </li>
                <li>
                  <a href="/Beetroot/show">BEETROOT</a>
                </li>
                <li>
                  <a href="/Whiteonion/show">WHITE ONION</a>
                </li>
                <li>
                  <a href="/Sweetpotatoes/show">SWEET POTATOES</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-cubes"></i>
              <span>DAIRY</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="/Yogurt/show">YOGURT</a>
                </li>
                <li>
                  <a href="/Cheese/show">CHEESE</a>
                </li>
                <li>
                  <a href="/Butter/show">BUTTER</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-cubes"></i>
              <span>ORTERS</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="/Processedfood/show">PROCESSED FOODS</a>
                </li>
                <li>
                  <a href="/Beverage/show">BEVEAGE</a>
                </li>
                <li>
                  <a href="/Confectionary/show">CONFECTIONARY</a>
                </li>
              </ul>
            </div>
          </li>



          <li>
            <a href="/About/show">
              <i class="fa fa-globe"></i>
              <span>ABOUT</span>
            </a>
          </li>
          <li>
            <a href="/Contact/show">
              <i class="fa fa-globe"></i>
              <span>CONTACT US</span>
            </a>
          </li>
          
        <hr>
        <li>
            <a href="/Brand/show">
              <i class="fa fa-asterisk"></i>
              <span>BRAND</span>
            </a>
          </li>

          <li>
            <a href="/Category/show">
              <i class="fa fa-asterisk"></i>
              <span>CATEGORY</span>
            </a>
          </li>
          <li>
            <a href="/Subcategory/show">
              <i class="fa fa-asterisk"></i>
              <span>SUB CATEGORY</span>
            </a>
          </li>


 <!--          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Components</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div> -->
      <!-- sidebar-menu  -->
    </div>

  </nav>
</div>

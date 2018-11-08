<!-- Start Page Loading -->

 <!-- End Page Loading -->

 <!-- //////////////////////////////////////////////////////////////////////////// -->

 <!-- START HEADER -->
 <!-- <header id="header" class="page-topbar"> -->
    <!-- start header nav-->
  <!--   <div class="navbar-fixed">
        <nav class="cyan">
            <div class="nav-wrapper">
                <h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1>
                <ul class="right hide-on-med-and-down">
                    <li class="search-out">
                        <input type="text" class="search-out-text">
                    </li>
                    <li>    
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="material-icons">search</i></a>                              
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="material-icons">fullscreen</i></a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi mdi-bell"></i></a>
                    </li> -->
                    <!-- Dropdown Trigger -->                        
                <!--     <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="material-icons">insert_comment</i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div> -->
    <!-- end header nav-->
<!-- </header> -->
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main-admin">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="empresa/avatar-7.png" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="#"><i class="mdi mdi-face"></i> Profile</a>
                                </li>
                                <li><a href="#"><i class="mdi mdi-settings"></i> Settings</a>
                                </li>
                                <li><a href="#"><i class="mdi mdi-help-circle-outline"></i> Help</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="mdi mdi-lock"></i> Lock</a>
                                </li>
                                <li><a href="#"><i class="mdi mdi-logout"></i> Logout</a>
                                </li>
                            </ul>

                            <a class="white-text profile-btn dropdown-trigger" href="#!" data-target="profile-dropdown">John Doe<i class="material-icons right">arrow_drop_down</i></a>


                            <p class="user-roal">Administrator</p>
                        </div>
                    </div>
                </li>
                <li class="bold"><a href="carousel" class="waves-effect waves-cyan"><i class="material-icons">dashboard</i> Carousel</a>
                </li>
                <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="material-icons">mailbox</i>Mailbox</a>
                </li>
                <li class="bold"><a href="personal" class="waves-effect waves-cyan"><i class="material-icons">assignment_ind</i>Personal</a>
                </li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="material-icons">menu</i></a>

        </aside>

        <section id="content" >
          @yield('content')
      </section>
  </div>
</div>


</body>


<ul id="mobile-demo" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="empresa/12.png">
    </div>
    <a href="#user"><img class="circle" src="empresa/avatar-7.png"></a>
    <a class="white-text profile-btn dropdown-trigger" href="#!" data-target="profile-dropdown-mobile">John Doe<i class="material-icons">arrow_drop_down</i></a>


    <p class="user-roal">Administrator</p>
</div></li>
<li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="material-icons">dashboard</i> Dashboard</a>
</li>
<li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="material-icons">mailbox</i> Mailbox</a>
</li>
</ul>
    <ul id="profile-dropdown-mobile" class="dropdown-content profile-dropdown-mobile-tamano">

        <li><a href="#"><i class="mdi mdi-face"></i> Profile</a>
        </li>
        <li><a href="#"><i class="mdi mdi-settings"></i> Settings</a>
        </li>
        <li><a href="#"><i class="mdi mdi-help-circle-outline"></i> Help</a>
        </li>
        <li class="divider"></li>
        <li><a href="#"><i class="mdi mdi-lock"></i> Lock</a>
        </li>
        <li><a href="#"><i class="mdi mdi-logout"></i> Logout</a>
        </li>
    </ul>


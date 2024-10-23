<!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            @php
                    // dd(Auth::guard('user')->check());
                    // dd(auth()->user()->role);
                @endphp
            <div class="navbar-nav theme-brand flex-row  text-center">
                <div class="nav-logo">
                    <div class="nav-item theme-logo">
                        <a href="./index.html">
                            <img src="../src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                        </a>
                    </div>
                    <div class="nav-item theme-text">
                        <a href="./index.html" class="nav-link"> CORK </a>
                    </div>
                </div>
                <div class="nav-item sidebar-toggle">
                    <div class="btn-toggle sidebarCollapse">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                    </div>
                </div>
            </div>
            {{-- <div class="shadow-bottom"></div> --}}
            <ul class="list-unstyled menu-categories" id="accordionExample">

                @if(auth()->user()->role === 'admin')
                    @include('admin.sidebar')
                @elseif(auth()->user()->role === 'vendor')
                    @include('vendor.sidebar')
                @elseif(auth()->user()->role === 'customer')
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>BORANG</span></div>
                    </li>
                    <li class="menu {{ request()->is('admin/form*') ? 'active' : '' }}">
                        <a href="#apps" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                <span>Borang</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="apps" data-bs-parent="#accordionExample">
                            <li class="{{ request()->is('admin/form*') ? 'active' : '' }}">
                                <a href="{{ route('form') }}"> Calendar </a>
                            </li>
                            <li>
                                <a href="{{ route('form.create') }}"> Chat </a>
                            </li>
                        </ul>
                    </li>
                @endif
                
                <li class="menu">
                    <a href="#elements" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                            <span>Elements</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="elements" data-bs-parent="#accordionExample">
                        <li>
                            <a href="./element-alerts.html"> Alerts </a>
                        </li>
                        <li>
                            <a href="./element-avatar.html"> Avatar </a>
                        </li>
                        <li>
                            <a href="./element-badges.html"> Badges </a>
                        </li>
                        <li>
                            <a href="./element-breadcrumbs.html"> Breadcrumbs </a>
                        </li>                            
                        <li>
                            <a href="./element-buttons.html"> Buttons </a>
                        </li>
                        <li>
                            <a href="./element-buttons-group.html"> Button Groups </a>
                        </li>
                        <li>
                            <a href="./element-color-library.html"> Color Library </a>
                        </li>
                        <li>
                            <a href="./element-dropdown.html"> Dropdown </a>
                        </li>
                        <li>
                            <a href="./element-infobox.html"> Infobox </a>
                        </li>
                        <li>
                            <a href="./element-loader.html"> Loader </a>
                        </li>
                        <li>
                            <a href="./element-pagination.html"> Pagination </a>
                        </li>
                        <li>
                            <a href="./element-popovers.html"> Popovers </a>
                        </li>
                        <li>
                            <a href="./element-progressbar.html"> Progress Bar </a>
                        </li>
                        <li>
                            <a href="./element-search.html"> Search </a>
                        </li>
                        <li>
                            <a href="./element-tooltips.html"> Tooltips </a>
                        </li>
                        <li>
                            <a href="./element-treeview.html"> Treeview </a>
                        </li>
                        <li>
                            <a href="./element-typography.html"> Typography </a>
                        </li>
                    </ul>
                </li>



                <li class="menu">
                    <a href="./charts-apex.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                            <span>Charts</span>
                        </div>
                    </a>
                </li>

            
            </ul>
            
        </nav>

    </div>
<!--  END SIDEBAR  -->
<li class="menu menu-heading">
    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>PROFILE</span></div>
</li>
<li class="menu {{set_active(['dashboard'])}}">
    <a href="{{route('dashboard')}}" aria-expanded="false" class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
            <span>Dashboard</span>
        </div>
    </a>
</li>
<li class="menu {{set_active(['user'])}}">
    <a href="#apps" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <div class="">
            <i data-feather="users"></i>
            <span>Managment</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </div>
    </a>
    <ul class="collapse submenu list-unstyled {{ set_active(['user'], true) }}" id="apps" data-bs-parent="#accordionExample">
        <li class="{{set_active(['user'])}}">
            <a href="{{ route('user') }}"> User </a>
        </li>
        <li class="">
            <a href=""> Chat </a>
        </li>
    </ul>
</li>
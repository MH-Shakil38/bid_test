<li class="sidebar-item">
    <a class="sidebar-link" href="{{route('owner.dashboard')}}" aria-expanded="true">
        <i class="icon-Car-Wheel"></i>
        <span class="hide-menu">Dashboards </span>
    </a>
</li>


<li class="sidebar-item">
    <a class="sidebar-link has-arrow waves-effect waves-dark" href="dashboard.html" aria-expanded="false">
        <i class="icon-Car-Wheel"></i>
        <span class="hide-menu">Projects</span>
    </a>

    <ul aria-expanded="false" class="collapse  first-level">
        <li class="sidebar-item">
            <a href="{{route('projects.create')}}" class="sidebar-link">
                <i class="icon-Record"></i>
                <span class="hide-menu">Create New</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('projects.index')}}" class="sidebar-link">
                <i class="icon-Record"></i>
                <span class="hide-menu">Project List</span>
            </a>
        </li>
    </ul>
</li>

<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark" href="{{route('total-bids')}}" aria-expanded="false">
        <i class="icon-Car-Wheel"></i>
        <span class="hide-menu">Total Bid's</span>
    </a>
</li>




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
            <a href="{{route('owner.projects', 4)}}" class="sidebar-link">
                <i class="icon-Record"></i>
                <span class="hide-menu">Drafts</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('owner.projects', 0)}}" class="sidebar-link">
                <i class="icon-Record"></i>
                <span class="hide-menu">Pending Project</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a href="{{route('owner.projects',1)}}" class="sidebar-link">
                <i class="icon-Record"></i>
                <span class="hide-menu">Active Project</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('owner.projects', 2)}}" class="sidebar-link">
                <i class="icon-Record"></i>
                <span class="hide-menu">Completed Project</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('owner.projects', 3)}}" class="sidebar-link">
                <i class="icon-Record"></i>
                <span class="hide-menu">Rejected Project</span>
            </a>
        </li>
    </ul>
</li>

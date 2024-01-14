<style>
    aside {
        font-family: "Times New Roman", Times, serif;
    }

    .nav-item {
        /* color: #495057; */
        /* Link color */
        transition: background-color 0.1s ease;
    }

    .nav-item:hover {
        background-color: #8040BB;
        /* Hover background color */
    }
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
        <span class="brand-text font-weight-light ml-6"><img style="width: 20%"
                src="{{ asset('frontend/photo/m2nseven.png') }}" alt="" class="m-1">M2NSEVEN</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <i class="fa-solid fa-list"></i>
                        <p class="pl-4">
                            Main

                        </p>
                    </a>
                </li>
                @if (auth()->user()->is_admin == 1 || auth()->user()->is_admin == 2)
                    <li class="nav-item">
                        <a href="{{ url('/reseller') }}" class="nav-link">
                            <i class="fa-solid fa-clipboard-check"></i>
                            <p class="pl-4">
                                Reseller

                            </p>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->is_admin == 2)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/user') }}">
                            <i class="fa-solid fa-user-plus"></i>
                            <p class="pl-3">
                                Users
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/zone') }}">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="pl-4 ">
                                Zone
                            </p>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>

    </div>

</aside>

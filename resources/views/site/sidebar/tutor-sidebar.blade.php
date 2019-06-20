<nav id="sidebar">
    <div class="sidebar-header text-center mt-10">
        <img src="https://via.placeholder.com/50" alt="" class="rounded-circle">
        <h3>{{ request()->user()->name }} {{ request()->user()->prenom }}</h3>
        @include('profile::level.level-box')
        <small class="mt-1"></small>
    </div>

    <ul class="list-unstyled components mt-25">
        <li class="sidebar-item">
            <a href="{{ url('/dashboard') }}" class="active"> <i class="fa fa-home"></i> Dashboard</a>
        </li>
        <li class="sidebar-item">
            <a href="{{ url('/profile') }}"><i class="fa fa-user"></i> Profile</a>
        </li>
        <li class="sidebar-item">
            <a href="#"><i class="fa fa-question"></i> Mes Réponses <span class="badge badge-secondary pull-right">0</span> </a>
        </li>
        <li class="sidebar-item">
            <a href="#"><i class="fa fa-laptop"></i> Mes Sessions <span class="badge badge-secondary pull-right">0</span> </a>
        </li>
    </ul>

    @include('tutor::go-online')


    <ul class="list-unstyled components mt-25">
        <li class="sidebar-item">
            <a href="#"> <i class="fa fa-key"></i> Sécurité</a>
        </li>
    </ul>
</nav>
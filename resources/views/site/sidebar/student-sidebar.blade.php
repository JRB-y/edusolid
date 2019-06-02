<nav id="sidebar">
    <div class="sidebar-header text-center mt-10">
        <img src="https://via.placeholder.com/50" alt="" class="rounded-circle">
        <h3>{{ $user->name }} {{ $user->prenom }}</h3>
        @include('profile::level.level-box')
        <p class="credits-nbr">
            <i class="fa fa-money"></i> crédits <span class=""> 0 </span>
        </p>
    </div>

    <ul class="list-unstyled components mt-25">
        <li class="sidebar-item">
            <a href="{{ url('/dashboard') }}" class="active"> <i class="fa fa-home"></i> Dashboard</a>
        </li>
        <li class="sidebar-item">
            <a href="{{ url('/profile') }}"><i class="fa fa-user"></i> Profile</a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('student.new-question') }}"><i class="fa fa-question"></i> Nouvelle Question <span class="badge badge-secondary pull-right">0</span> </a>
        </li>
        <li class="sidebar-item">
            <a href="#"><i class="fa fa-laptop"></i> Mes Sessions <span class="badge badge-secondary pull-right">0</span> </a>
        </li>
    </ul>

    <ul class="list-unstyled components mt-25"> 
        <li class="sidebar-item">
            <a href="#">Avoir des crédits</a>
        </li>
        <li class="sidebar-item">
            <a href="#">Sécurité</a>
        </li>
    </ul>

</nav>
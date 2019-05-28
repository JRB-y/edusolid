<nav id="sidebar">
    <div class="sidebar-header text-center mt-10">
        <img src="https://via.placeholder.com/50" alt="" class="rounded-circle">
        <h3>{{ request()->user()->name }} {{ request()->user()->prenom }}</h3>
        @if(request()->user()->student->profile_completed) 
        <small class="mt-1">{{request()->user()->student->fullLevel() }}</small>
        {{-- <small class="mt-1">{{ request()->user()->student->level->name }} {{ request()->user()->student->year->name }} {{ request()->user()->student->section->name }}</small>  --}}
        @else
        ( <a href="{{ url('profile/complete') }}"> Completez votre profile </a> )
        @endif
        <p class="credits-nbr">
            <i class="fa fa-money"></i> crédits <span class=""> 0 </span>
        </p>
    </div>

    <ul class="list-unstyled components mt-25">
        <li class="sidebar-item">
            <a href="#" class="active"> <i class="fa fa-home"></i> Dashboard</a>
        </li>
        <li class="sidebar-item">
            <a href="#"><i class="fa fa-user"></i> Profile</a>
        </li>
        <li class="sidebar-item">
            <a href="#"><i class="fa fa-question"></i> Mes Questions <span class="badge badge-secondary pull-right">0</span> </a>
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
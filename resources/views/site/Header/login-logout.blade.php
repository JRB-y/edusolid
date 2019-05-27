@guest
    <div class="header-right text-right">
        <div class="register-login">
            <a href="{{ route('register') }}">Créer un compte</a>
            <span> / </span>
            <a href="javascript:void(0);" data-toggle="modal" data-target="#login">Se Connecter</a>
        </div>
    </div>
@else
    <div class="header-right text-right">
        <div class="mini-cart">
            <ul>
                <li><a href="javascript:void(0);" class="minicart-icon"><i class="fa fa-user"></i></a>
                    <div class="cart-dropdown">
                        <ul>
                            <li>
                                <a class="dropdown-item" href="{{ url('/dashboard') }}" >Dashboard</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/') }}" >Profile</a>
                            </li>
                        </ul>
                        @if(request()->user()->role->name == "student")
                        <div class="minicart-total fix">
                            <span class="pull-left">total crédits:</span>
                            <span class="pull-right">0</span>
                        </div>
                        @endif
                        
                        <div class="mini-cart-checkout">
                            
                            <a class="btn-common checkout mt-10" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Se déconnecter') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endguest

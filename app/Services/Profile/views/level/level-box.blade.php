@if($user->myRole()->profile_completed)
    <small class="mt-1">{{$user->myRole()->fullLevel() }}</small>
@else
( <a href="{{ url('profile/complete') }}"> Completez votre profile </a> )
@endif

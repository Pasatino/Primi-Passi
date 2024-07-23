<x-layout>

    @if(!empty($user))
        <span class="navbar-text">
            <h4>Ma dove sei stato {{$user['name']}}? </h4>
        </span>
    @else
        <span class="navbar-text">
            <h4>Accedi e sbrigati pure</h4>
        </span>
    @endif

</x-layout>
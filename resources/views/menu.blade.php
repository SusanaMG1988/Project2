<li class="nav-item {{(request()->is('/')) ? 'active' : '' }}">
    <a class="nav-link" href="{{route('inicio')}}">Home <span class="sr-only">(current)</span></a>
</li>

<li class="nav-item {{(request()->is('recetas_pasteles*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{asset('recetas-de-pasteles')}}" tabindex="-1">Pasteles</a>
</li>


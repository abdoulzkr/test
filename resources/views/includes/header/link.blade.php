<nav class="container navbar fixed-top navbar-expand-lg navbar-dark bg-info">

    <div class="collapse navbar-collapse" id="main_nav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item @if(Route::current()->getName() === 'link.index') active @endif"> <a class="nav-link" href="{{ route('link.index')}}">Home </a> </li>
            <li class="nav-item @if(Route::current()->getName() === 'link.all') active @endif" ><a class="nav-link" href="{{ route('link.all')}}"> Links </a></li>
            <li class="nav-item @if(Route::current()->getName() === 'link.create') active @endif"><a class="nav-link" href="{{ route('link.create')}}"> New Link </a></li>
        </ul>
    </div>
</nav>

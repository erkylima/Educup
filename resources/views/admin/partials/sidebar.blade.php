<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <img src="{{ asset('assets/img/logo.png') }}" style="background-color:;"class="w-50" alt="">
</div>
    <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">eU</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Início</li>
        <li class="{{ Request::route()->getName() == 'admin.inicio' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.inicio') }}"><i class="fa fa-archive"></i> <span>Início</span></a></li>
        <li class="{{ Request::route()->getName() == 'admin.cursos' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.cursos') }}"><i class="fa fa-columns"></i> <span>Cursos</span></a></li>
        <li class="{{ Request::route()->getName() == 'admin.fatura' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.fatura') }}"><i class="fa fa-credit-card"></i> <span>Faturas</span></a></li>
        <li class="{{ Request::route()->getName() == 'admin.meus-cursos' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.meus-cursos') }}"><i class="fa fa-video"></i> <span>Meus Cursos</span></a></li>
        @if(Auth::user()->can('manage-users'))
        <li class="menu-header">Usuários</li>
        <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span>Usuários</span></a></li>
        @endif
    </ul>
</aside>

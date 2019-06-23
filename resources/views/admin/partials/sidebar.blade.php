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
        <li class="{{ Request::route()->getName() == 'admin.planos' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.planos') }}"><i class="fa fa-columns"></i> <span>Planos</span></a></li>
        <li class="{{ Request::route()->getName() == 'admin.fatura' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.fatura') }}"><i class="fa fa-credit-card"></i> <span>Faturas</span></a></li>
        <li class="{{ Request::route()->getName() == 'admin.meus-cursos' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.meus-cursos') }}"><i class="fa fa-video"></i> <span>Meus Cursos</span></a></li>
        @if(Auth::user()->can('manage-users'))
        <li class="menu-header">Usuários</li>
        <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span>Usuários</span></a></li>
        <li class="dropdown {{ Request::route()->getName() == 'admin.addcurso' ? ' active' : '' }}
                {{ Request::route()->getName() == 'admin.editcurso' ? ' active' : '' }}
                {{ Request::route()->getName() == 'admin.listacurso' ? ' active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Cursos</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Request::route()->getName() == 'admin.addcurso' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.addcurso') }}">Adicionar</a></li>
                <li class="{{ Request::route()->getName() == 'admin.listacurso' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.listacurso') }}">Lista</a></li>

            </ul>
        </li>
        <li class="dropdown {{ Request::route()->getName() == 'admin.adddisciplina' ? ' active' : '' }}
                {{ Request::route()->getName() == 'admin.editdisciplina' ? ' active' : '' }}
                {{ Request::route()->getName() == 'admin.listadisciplina' ? ' active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Disciplinas</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Request::route()->getName() == 'admin.adddisciplina' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.adddisciplina') }}">Adicionar</a></li>
                <li class="{{ Request::route()->getName() == 'admin.listadisciplina' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.listadisciplina') }}">Lista</a></li>

            </ul>
        </li>

        @endif
    </ul>
</aside>

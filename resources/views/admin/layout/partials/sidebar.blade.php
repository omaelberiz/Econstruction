<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>E-construction</h3>
    </div>
    <ul class="list-unstyled components">
        <p><a href="{{ route('admin.index') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a> </p>
        <li class="">
            <a href="#ClientSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-users"></i> Client</a>
            <ul class="collapse list-unstyled" id="ClientSubmenu">
                <li>
                    <a href="{{ route('client') }}">Appartement client</a>
                </li>
                <li>
                    <a href="{{ route('commandes') }}">Commandes clients</a>
                </li>
                <li>
                    <a href="{{ route('etapes') }}">Etapes Appartement</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-building"></i> Appartement</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{ route('appartemente') }}"> Appartement</a>
                </li>
                <li>
                    <a href="{{ route('typeappart') }}"><i class="fas fa-landmark"></i> types d' Appartement</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="#ProgrammeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-map-marker-alt"></i> Programmes et localisation</a>
            <ul class="collapse list-unstyled" id="ProgrammeSubmenu">
                <li>
                    <a href="{{ route('localisation') }}">LOCALISATION</a>
                </li>
                <li>
                    <a href="{{ route('programmes') }}">PROGRAMMES</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
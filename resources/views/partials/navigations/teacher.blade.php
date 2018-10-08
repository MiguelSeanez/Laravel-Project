<li><a href="#" class="nav-link"> {{ __("Mis cursos") }}</a></li>
<li><a href="#" class="nav-link"> {{ __("Mis suscripciones") }}</a></li>
<li><a href="{{ route('invoices/admin')}}" class="nav-link"> {{ __("Mis facturas") }}</a></li>
<li><a href="#" class="nav-link"> {{ __("Cursos desarrollados por mí") }}</a></li>
<li><a href="#" class="nav-link"> {{ __("Crear curso") }}</a></li>
<li><a href="#" class="nav-link"> {{ __("Mi perfil") }}</a></li>
@include('partials.navigations.logged')
<aside class="app-sidebar">
  <div class="app-sidebar__user">
      <div class="dropdown">
      <a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
        <img alt="image" src="{{asset('backend/assets/img/avatar/avatar-1.jpg')}}" class=" avatar-md rounded-circle">
        <span class="ml-2 d-lg-block">
          <span class=" app-sidebar__user-name mt-5">{{ Auth::user()->name }}</span><br>
          <span class="text-muted app-sidebar__user-name text-sm">
             	@php
              $role =  Auth::user()->role;
              if($role==1){
                echo "Admin";
              }
              else{
                echo "salesman";
              }
            @endphp</span>
        </span>
      </a>
    </div>
  </div>
  <ul class="side-menu">

    <li>
      <a class="side-menu__item"   href="{{route('dashboard')}}"><i class="side-menu__icon fa fa-desktop"></i><span>Dashboard</span></a>
    </li>
    <li class="slide">
      <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-suitcase"></i><span class="side-menu__label">Medicine</span><i class="angle fa fa-angle-right"></i></a>
      <ul class="slide-menu">
        <li><a class="slide-item"  href="{{route('medicine_add')}}"><span>Medicine Add</span></a></li>
        <li><a class="slide-item" href="{{route('medicine_show')}}"><span>Medicine Show</span></a></li>
      </ul>
    </li>
    <li class="slide">
      <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Company</span><i class="angle fa fa-angle-right"></i></a>
      <ul class="slide-menu">
        <li><a class="slide-item"  href="{{route('company_add')}}"><span>Company Add</span></a></li>
        <li><a class="slide-item" href="{{route('company_show')}}"><span>Company Show</span></a></li>
      </ul>
    </li>
    <li class="slide">
      <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-slideshare"></i><span class="side-menu__label">Disease</span><i class="angle fa fa-angle-right"></i></a>
      <ul class="slide-menu">
        <li><a class="slide-item"  href="{{route('disease_add')}}"><span>Disease Add</span></a></li>
        <li><a class="slide-item" href="{{route('disease_show')}}"><span>Disease Show</span></a></li>
      </ul>
    </li>
    <li class="slide">
      <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Buy</span><i class="angle fa fa-angle-right"></i></a>
      <ul class="slide-menu">
        <li><a class="slide-item"  href="{{route('buy_sells')}}"><span>Sells</span></a></li>
        <li><a class="slide-item" href="{{route('buy_order')}}"><span>All Order</span></a></li>
      </ul>
    </li>
    <li>
      <a class="side-menu__item"   href="{{route('stock_out')}}"><i class="side-menu__icon fa fa-bullhorn"></i><span>Stock Out</span></a>
    </li>
    <li class="slide">
      <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fe fe-trash-2"></i><span class="side-menu__label">Recycle Bin</span><i class="angle fa fa-angle-right"></i></a>
      <ul class="slide-menu">
        <li><a class="slide-item"  href="{{route('recycle_bin_medicine')}}"><span>Delete Medicine</span></a></li>
        <li><a class="slide-item" href="{{route('recycle_bin_company')}}"><span>Delete Company</span></a></li>
        <li><a class="slide-item" href="{{route('recycle_bin_disease')}}"><span>Delete Disease</span></a></li>
      </ul>
    </li>

  </ul>
</aside>

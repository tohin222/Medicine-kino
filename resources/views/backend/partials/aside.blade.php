<aside class="app-sidebar">
  <div class="app-sidebar__user">
      <div class="dropdown">
      <a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
        <img alt="image" src="{{asset('backend/assets/img/avatar/avatar-1.jpg')}}" class=" avatar-md rounded-circle">
        <span class="ml-2 d-lg-block">
          <span class=" app-sidebar__user-name mt-5">Jessica Lee</span><br>
          <span class="text-muted app-sidebar__user-name text-sm"> Web-Designer</span>
        </span>
      </a>
    </div>
  </div>
  <ul class="side-menu">
    <li class="slide">
      <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
      <ul class="slide-menu">
        <li><a class="slide-item"  href="index.html"><span>Sales Dashboard</span></a></li>
        <li><a class="slide-item" href="index2.html"><span>Finance Dashboard</span></a></li>
        <li><a class="slide-item" href="index3.html"><span>Marketing Dashboard</span></a></li>
        <li><a class="slide-item" href="index4.html"><span>Social Dashboard</span></a></li>
        <li><a class="slide-item" href="index5.html"><span>HR Dashboard</span></a></li>
      </ul>
    </li>
    <li class="slide">
      <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Medicine</span><i class="angle fa fa-angle-right"></i></a>
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
      <a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Disease</span><i class="angle fa fa-angle-right"></i></a>
      <ul class="slide-menu">
        <li><a class="slide-item"  href="#"><span>Disease Add</span></a></li>
        <li><a class="slide-item" href="#"><span>Disease Show</span></a></li>
      </ul>
    </li>

  </ul>
</aside>

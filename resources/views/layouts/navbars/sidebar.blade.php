<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="/" class="simple-text logo-normal">
      {{ __('Amar Shop') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="fa fa-user"></i>
          <p>{{ __('Users') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('customers') }}">
          <i class="material-icons">people</i>
            <p>{{ __('Customers') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('categories.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Categories') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('slider') }}">
          <i class="material-icons">image</i>
          <p>{{ __('Slider') }}</p>
        </a>
      </li>
        <li class="nav-item {{ ($activePage == 'products' || $activePage == 'add-product') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="true">
                <i class="fa fa-product-hunt"></i>
                <p>{{ __('Products') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse show" id="products">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'products' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('products.index') }}">
                            <span class="sidebar-mini"> UP </span>
                            <span class="sidebar-normal">{{ __('Product List') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'add-product' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('products.create') }}">
                            <span class="sidebar-mini"> UM </span>
                            <span class="sidebar-normal"> {{ __('Add Product') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
{{--      <li class="nav-item{{ $activePage == 'sale' ? ' active' : '' }}">--}}
{{--        <a class="nav-link" href="{{ route('sale') }}">--}}
{{--          <i class="material-icons">%</i>--}}
{{--            <p>{{ __('Sale') }}</p>--}}
{{--        </a>--}}
{{--      </li>--}}
{{--      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">--}}
{{--        <a class="nav-link" href="{{ route('notifications') }}">--}}
{{--          <i class="material-icons">notifications</i>--}}
{{--          <p>{{ __('Notifications') }}</p>--}}
{{--        </a>--}}
{{--      </li>--}}


    </ul>
  </div>
</div>

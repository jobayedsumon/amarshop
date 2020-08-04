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
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'users') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="fa fa-user"></i>
          <p>{{ __('Users') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse " id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'customers' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('customers') }}">
          <i class="material-icons">people</i>
            <p>{{ __('Customers') }}</p>
        </a>
      </li>
        <li class="nav-item {{ ($activePage == 'category' || $activePage == 'sub_category') ? ' ' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#category" aria-expanded="true">
                <i class="fa fa-book"></i>
                <p>{{ __('Categories') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="category">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'category' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('categories.index') }}">
                            <span class="sidebar-mini"> C </span>
                            <span class="sidebar-normal">{{ __('Category') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'sub_category' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('sub_categories.index') }}">
                            <span class="sidebar-mini"> SC </span>
                            <span class="sidebar-normal"> {{ __('Sub Category') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
      <li class="nav-item{{ $activePage == 'slider' ? ' active' : '' }}">
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
            <div class="collapse" id="products">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'products' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('products.index') }}">
                            <span class="sidebar-mini"> PL </span>
                            <span class="sidebar-normal">{{ __('Product List') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'add-product' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('products.create') }}">
                            <span class="sidebar-mini"> AP </span>
                            <span class="sidebar-normal"> {{ __('Add Product') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'featured-product' ? ' active' : '' }}">
                        <a class="nav-link" href="">
                            <span class="sidebar-mini"> FP </span>
                            <span class="sidebar-normal"> {{ __('Featured Product') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
      <li class="nav-item{{ $activePage == 'sale' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('sale.index') }}">
          <i class="material-icons">%</i>
            <p>{{ __('Sale') }}</p>
        </a>
      </li>
{{--      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">--}}
{{--        <a class="nav-link" href="{{ route('notifications') }}">--}}
{{--          <i class="material-icons">notifications</i>--}}
{{--          <p>{{ __('Notifications') }}</p>--}}
{{--        </a>--}}
{{--      </li>--}}


    </ul>
  </div>
</div>

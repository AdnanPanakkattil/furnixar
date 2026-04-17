<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <!-- Logo Section -->
  <div class="app-brand demo py-3">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo">
        <!-- <svg width="32" height="32" viewBox="0 0 32 32" fill="none">
          <path d="M16 2L28.1244 9V23L16 30L3.87564 23V9L16 2Z" stroke="#845adf" stroke-width="2.5" />
          <path d="M16 8L22.9282 12V20L16 24L9.0718 20V12L16 8Z" fill="#845adf" opacity="0.3" />
        </svg> -->
        <img src="{{ asset('assets/imglogo/logo2.png') }}" alt="" height="40px">
      </span>
      <span class="app-brand-text demo menu-text   text-dark" style="font-size: 24px;">Furnixar</span>
    </a>
  </div>

  <div class="brand-divider"></div>


  <ul class="menu-inner py-1">
    <!-- Section: Main -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">dashboard</span></li>
    <li class="menu-item">
      <a href="{{ route('backend.dashboard') }}" class="menu-link">
        <i class="menu-icon ti ti-smart-home"></i>
        <div data-i18n="Dashboards">Dashboards</div>

      </a>
    </li>

    <li class="menu-item" id="laboratory_main_sub_menu">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon ti ti-shopping-bag"></i>
        <div data-i18n="Product Management"> Product Management </div>
      </a>
      <ul class="menu-sub">

        <li class="menu-item" id="laboratory_sub_menu">
          <a href="" class="menu-link">
            <div data-i18n="Product">Product</div>
          </a>
        </li>

      </ul>
    </li>



    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link">
       <i class="menu-icon ti ti-category"></i>
        <div data-i18n="Catogeries">Catogeries</div>
      </a>
    </li>


    <li class="menu-item" id="laboratory_main_sub_menu">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
       <i class="menu-icon ti ti-package"></i>
        <div data-i18n="Order Management"> Order Management </div>
      </a>
      <ul class="menu-sub">

        <li class="menu-item" id="laboratory_sub_menu">
          <a href="" class="menu-link">
            <div data-i18n="Order">Order</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item" id="laboratory_main_sub_menu">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon ti ti-user-cog"></i>
        <div data-i18n="Users"> Users </div>
      </a>
      <ul class="menu-sub">

        <li class="menu-item" id="laboratory_sub_menu">
          <a href="" class="menu-link">
            <div data-i18n="User">User</div>
          </a>
        </li>

      </ul>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link">
        <i class="menu-icon ti ti-tag"></i>
        <div data-i18n="Offers">Offers</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link">
       <i class="menu-icon ti ti-star"></i>
        <div data-i18n="Review management">Review management</div>
      </a>
    </li>

    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link">
       <i class="menu-icon ti ti-truck"></i>

       
        <div data-i18n="Shipping Management">Shipping Management</div>
      </a>
    </li>



  </ul>



</aside>
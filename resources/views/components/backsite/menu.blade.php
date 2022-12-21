<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active">
                <a href="{{ route('backsite.dashboard.index') }}">
                    <i
                        class="{{ request()->is('backsite/dashboard') || request()->is('backsite/dashboard/*') ? 'bx bx-category-alt bx-flashing' : 'bx bx-category-alt' }}"></i>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>

            <li class=" navigation-header"><span data-i18n="Application">Application</span><i class="la la-ellipsis-h"
                    data-toggle="tooltip" data-placement="right" data-original-title="Application"></i></li>

            <li class=" nav-item"><a href="{{ route('backsite.category.index') }}"><i
                        class="{{ request()->is('backsite/category') || request()->is('backsite/category/*') || request()->is('backsite/*/category') || request()->is('backsite/*/category/*') ? 'bx bx-group bx-flashing' : 'bx bx-group' }}"></i><span
                        class="menu-title" data-i18n="Category">Category</span></a>
            </li>

            <li class=" nav-item"><a href="{{ route('backsite.product.index') }}"><i
                        class="{{ request()->is('backsite/product') || request()->is('backsite/product/*') || request()->is('backsite/*/product') || request()->is('backsite/*/product/*') ? 'bx bx-customize bx-flashing' : 'bx bx-customize' }}"></i><span
                        class="menu-title" data-i18n="Product">Product</span></a>
            </li>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->

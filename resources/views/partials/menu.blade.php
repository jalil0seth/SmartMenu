<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            @can('order_access')
                <li class="{{ request()->is("admin/orders") || request()->is("admin/orders/*") ? "active" : "" }}">
                    <a href="{{ route("admin.orders.index") }}">
                        <i class="fa-fw fas fa-cart-arrow-down">

                        </i>
                        <span>{{ trans('cruds.order.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('Livreur')
            <li class="{{ request()->is("admin/orders/livreur/livraison") || request()->is("admin/orders/livreur/*") ? "active" : "" }}">
                <a href="/admin/orders/livreur/livraison">
                    <i class="fa-fw fas fa-cart-arrow-down">

                    </i>
                    <span>{{ trans('cruds.order.title') }}</span>

                </a>
            </li>
            @endcan
            @can('category_access')
                <li class="{{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "active" : "" }}">
                    <a href="{{ route("admin.categories.index") }}">
                        <i class="fa-fw fas fa-align-left">

                        </i>
                        <span>{{ trans('cruds.category.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('product_access')
                <li class="{{ request()->is("admin/products") || request()->is("admin/products/*") ? "active" : "" }}">
                    <a href="{{ route("admin.products.index") }}">
                        <i class="fa-fw fas fa-archive">

                        </i>
                        <span>Produits</span>

                    </a>
                </li>
            @endcan
            @can('livreur_access')
                <li class="{{ request()->is("admin/livreurs") || request()->is("admin/livreurs/*") ? "active" : "" }}">
                    <a href="{{ route("admin.livreurs.index") }}">
                        <i class="fa-fw fas fa-shipping-fast">

                        </i>
                        <span>{{ trans('cruds.livreur.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('region_access')
            <li class="{{ request()->is("admin/regions") || request()->is("admin/regions/*") ? "active" : "" }}">
                <a href="{{ route("admin.regions.index") }}">
                    <i class="fa-fw fas fa-map">

                    </i>
                    <span>{{ trans('cruds.region.title') }}</span>

                </a>
            </li>
            @endcan
            @can('page_access')
                <li class="{{ request()->is("admin/pages") || request()->is("admin/pages/*") ? "active" : "" }}" style="display:none">
                    <a href="{{ route("admin.pages.index") }}">
                        <i class="fa-fw fas fa-align-left">

                        </i>
                        <span>{{ trans('cruds.page.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('collection_access')
                <li class="{{ request()->is("admin/collections") || request()->is("admin/collections/*") ? "active" : "" }}" style="display:none">
                    <a href="{{ route("admin.collections.index") }}">
                        <i class="fa-fw fas fa-box">

                        </i>
                        <span>{{ trans('cruds.collection.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('client_access')
                <li class="{{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "active" : "" }}" style="display:none">
                    <a href="#">
                        <i class="fa-fw fas fa-user-check">

                        </i>
                        <span>{{ trans('cruds.client.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}" style="display:none">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}" style="display:none">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('setting_access')
                <li class="{{ request()->is("admin/settings") || request()->is("admin/settings/*") ? "active" : "" }}">
                    <a href="{{ route("admin.settings.edit", 1) }}">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>Configuration du site</span>

                    </a>
                </li>
            @endcan
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                        <a href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>
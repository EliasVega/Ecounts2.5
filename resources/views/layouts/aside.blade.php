<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('product') }}" class="brand-link elevation-4">
        <span class="logo-mini"><strong class="titulo-show">E</strong></span>
        <span class="brand-text font-weight-light"><strong>counts</strong> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                @if (!Session::has('company'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Empresa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('company') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Empresas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('branch') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sucursales</p>
                            </a>
                        </li>
                        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                        <li class="nav-item">
                            <a href="{{ url('user') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('cod_verif') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Autorizaciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('sale_box') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Caja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('order') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pedidos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pay_order') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Abonos Pedidos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pay_invoice') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Abonos Facturas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pay_event') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Abonos Pendientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('retention') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Retenciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('bank') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bancos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('card') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tarjetas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('resolution') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Resoluciones</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('software') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Software</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('subaccount') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subcuentas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('auxiliary_account') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cuentas Auxiliares</p>
                            </a>
                        </li>
                        @endif

                    </ul>
                </li>
                @if (Auth::user()->role_id == 1)
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Administracion
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('indicator') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Indicadores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('co_country') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Paises</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('co_department') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Departamentos2 </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('co_municipality') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Municipios2 </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('department') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Departamentos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('municipality') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Municipios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('role') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('payment_form') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Forma Pagos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('payment_method') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Medios Pagos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('document') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>T/Documentos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('liability') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>R.Fiscales</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('organization') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>T.Organizacion</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('tax') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tributos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('regime') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Regimen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('retention') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Retefuentes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('type_document') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tipo Doc. Dian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('unit_measure') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Unidades de Medida</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('voucher_type') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Typo de Comprobantes</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @endif
                @if (!Session::has('company') && !Session::has('sede'))
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Entidades
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                        <li class="nav-item">
                            <a href="{{ url('category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('user') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        @endif
                        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                        <li class="nav-item">
                            <a href="{{ url('product_branch') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Traslados</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @endif
                @if (!Session::has('company') && !Session::has('sede'))
                @if (Auth::user()->role_id != 5)
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Compras
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('category') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('supplier') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Proveedores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('product') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Productos</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('purchase') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compras</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ncpurchase') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>NC Compra</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ndpurchase') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ND Compra</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('payment') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Anticipo a Proveedores</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if (Auth::user()->role_id != 4)
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Ventas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('cash_receipt') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Recibos de caja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('sale_box') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Caja</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('order') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pedidos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('pay_order') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Abonos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('customer') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Clientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('product') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Productos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('invoice') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ventas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ncinvoice') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>NC Venta</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('ndinvoice') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ND Venta</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('advance') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Anticipo de clientes</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

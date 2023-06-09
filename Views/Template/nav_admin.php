    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media();?>/images/avatar.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?= $_SESSION['userData']['nombre'] ?></p>
          <p class="app-sidebar__user-designation"><?= $_SESSION['userData']['nombrerol'] ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <?php if (!empty($_SESSION['permisos'][1]['leer'])) { ?>
            <li>
                <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
                    <i class="app-menu__icon fa fa-dashboard"></i>
                    <span class="app-menu__label">Inicio</span>
                </a>
            </li>
        <?php } ?>
        <?php if (!empty($_SESSION['permisos'][2]['leer']) || !empty($_SESSION['permisos'][3]['leer'])) { ?>
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                    <span class="app-menu__label">Usuarios</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][2]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/usuarios"><i class="icon fa fa-circle-o"></i> Usuarios</a></li>
                <?php } ?>
                <?php if (!empty($_SESSION['permisos'][3]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/roles"><i class="icon fa fa-circle-o"></i> Roles</a></li>
                <?php } ?>
                </ul>
            </li>
        <?php } ?>

        <?php if (!empty($_SESSION['permisos'][4]['leer']) || !empty($_SESSION['permisos'][14]['r'])) { ?>
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-wrench" aria-hidden="true"></i>
                    <span class="app-menu__label">Empleados</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][4]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/empleado"><i class="icon fa fa-circle-o"></i> Empleados</a></li>
                <?php } ?>
                <?php if (!empty($_SESSION['permisos'][14]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/cargos"><i class="icon fa fa-circle-o"></i> Cargos</a></li>
                <?php } ?>
                </ul>
            </li>
        <?php } ?>

        <?php if (!empty($_SESSION['permisos'][5]['leer']) || !empty($_SESSION['permisos'][10]['leer'])) { ?>
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-shopping-cart" aria-hidden="true"></i>
                    <span class="app-menu__label">Compras</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][5]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/nuevacompra"><i class="icon fa fa-circle-o"></i> Nueva Compra</a></li>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/compras"><i class="icon fa fa-circle-o"></i> Gestionar Compras</a></li>
                <?php  } ?>
                <?php if (!empty($_SESSION['permisos'][10]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/proveedor"><i class="icon fa fa-circle-o"></i> Proveedores</a></li>
                <?php } ?>
                </ul>
            </li>
        <?php } ?>

        <?php if (!empty($_SESSION['permisos'][7]['leer'])) { ?>
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-shopping-cart" aria-hidden="true"></i>
                    <span class="app-menu__label">Ventas</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][7]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/Nuevaventa"><i class="icon fa fa-circle-o"></i> Nueva Venta</a></li>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/Ventas"><i class="icon fa fa-circle-o"></i> Gestionar Ventas</a></li>
                <?php  } ?>
                </ul>
            </li>
        <?php } ?>
        <?php if (!empty($_SESSION['permisos'][7]['leer'])) { ?>
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fas fa-box-open" aria-hidden="true"></i>
                    <span class="app-menu__label">Inventario</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][7]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/Inventario"><i class="icon fa fa-circle-o"></i> Existencias</a></li>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/Inventario/entradasProductos"><i class="icon fa fa-circle-o"></i> Registro Entradas</a></li>
                     <li><a class="treeview-item" href="<?= base_url(); ?>/Inventario/salidasProductos"><i class="icon fa fa-circle-o"></i> Registro Salidas</a></li>
                <?php  } ?>
                </ul>
            </li>
        <?php } ?>
        <?php if (!empty($_SESSION['permisos'][8]['leer'])) { ?>
            <li>
                <a class="app-menu__item" href="<?= base_url(); ?>/cliente">
                    <i class="app-menu__icon fa fa-user-o" aria-hidden="true"></i>
                    <span class="app-menu__label">Clientes</span>
                </a>
            </li>
        <?php } ?>
        <?php if (!empty($_SESSION['permisos'][9]['leer']) || !empty($_SESSION['permisos'][11]['r']) || !empty($_SESSION['permisos'][12]['r'])) { ?>
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-wrench" aria-hidden="true"></i>
                    <span class="app-menu__label">Productos</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][9]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/productos"><i class="icon fa fa-circle-o"></i> Productos</a></li>
                <?php } ?>
                <?php if (!empty($_SESSION['permisos'][11]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/marca"><i class="icon fa fa-circle-o"></i> Marcas</a></li>
                <?php } ?>
                <?php if (!empty($_SESSION['permisos'][12]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/unidadmedida"><i class="icon fa fa-circle-o"></i> Unidad de Medida</a></li>
                <?php } ?>
                <?php if (!empty($_SESSION['permisos'][13]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/categoria"><i class="icon fa fa-circle-o"></i> Categoria</a></li>
                <?php } ?>
                </ul>
            </li>
        <?php } ?>
        
        <?php if (!empty($_SESSION['permisos'][9]['leer']) || !empty($_SESSION['permisos'][11]['r']) || !empty($_SESSION['permisos'][12]['r'])) { ?>
            <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-wrench" aria-hidden="true"></i>
                    <span class="app-menu__label">Reportes</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][9]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/consultas"><i class="icon fa fa-circle-o"></i> Productos más vendidos</a></li>
                <?php } ?>
        
                </ul>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][9]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/consultas/productomenosvendidovista"><i class="icon fa fa-circle-o"></i> Productos menos vendidos</a></li>
                <?php } ?>
        
                </ul>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][9]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/consultas/clientesconmayorcomprasvista"><i class="icon fa fa-circle-o"></i> Clientes con mayor compras</a></li>
                <?php } ?>
        
                </ul>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][9]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/consultas/clientesconmenorcomprasvista"><i class="icon fa fa-circle-o"></i> Clientes con menor compras</a></li>
                <?php } ?>
        
                </ul>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][9]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/consultas/empleadosconmayorventa"><i class="icon fa fa-circle-o"></i> Mayor indice de venta por empleado</a></li>
                <?php } ?>
        
                </ul>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][9]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/consultas/empleadosconmenorventa"><i class="icon fa fa-circle-o"></i> Menor indice de venta por empleado</a></li>
                <?php } ?>
        
                </ul>
                <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][9]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/consultas/ventasanuladasdelmes"><i class="icon fa fa-circle-o"></i> Ventas anuladas por mes</a></li>
                <?php } ?>
        
                </ul>
            </li>
        <?php } ?>


          <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fa fa-database" aria-hidden="true"></i>
                    <span class="app-menu__label">Respaldo/Restaurar</span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>

                 <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][9]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/backup"><i class="icon fa fa-circle-o"></i> Generar Respaldo</a></li>
                <?php } ?>
        
                </ul>

                    <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][9]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/restartbackup"><i class="icon fa fa-circle-o"></i> Restaurar Backup</a></li>
                <?php } ?>
        
                </ul>

        </li>

        <li class="treeview">
                <a class="app-menu__item" href="#" data-toggle="treeview">
                    <i class="app-menu__icon fas fa-cogs" aria-hidden="true"></i>
                    <span class="app-menu__label">Acerca de </span>
                    <i class="treeview-indicator fa fa-angle-right"></i>
                </a>

                 <ul class="treeview-menu">
                <?php if (!empty($_SESSION['permisos'][9]['leer'])) { ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/acercade"><i class="icon fa fa-circle-o"></i>Acerca de</a></li>
                <?php } ?>
        
                </ul>

        </li>


        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/logout">
                <i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i>
                <span class="app-menu__label">Cerrar Sesion</span>
            </a>
        </li>
      </ul>
    </aside>
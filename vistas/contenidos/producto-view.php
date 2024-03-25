<div class="header-area header-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9  d-none d-lg-block">
                <div class="horizontal-menu">
                    <nav>
                        <ul id="nav_menu">
                            <li class="active">
                                <a href="<?php echo SERVERURL; ?>producto/"><i class="ti-plus"></i><span>Agregar</span></a>
                            </li>
                            <li>
                                <a href="<?php echo SERVERURL; ?>productoList/"><i class="ti-package"></i><span>Lista de Productos</span></a>
                            </li>
                            <li>
                                <a href="<?php echo SERVERURL; ?>productoBuscar/"><i class="ti-search"></i><span>Buscar</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- mobile_menu -->
            <div class="col-12 d-block d-lg-none">
                <div id="mobile_menu"></div>
            </div>
        </div>
    </div>
</div>
<!--CONTENT-->
<div class="container-fluid">
    <form action="" class="form-neon" autocomplete="off">
        <fieldset>
            <div class="col-12 mt-5">
                <legend><i class="ti-package"></i> &nbsp; Información del item</legend>
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="item_codigo" class="bmd-label-floating">Códido</label>
                                <input type="text" pattern="[a-zA-Z0-9-]{1,45}" class="form-control"
                                    name="item_codigo_reg" id="item_codigo" maxlength="45">
                            </div>
                            <div class="form-group">
                                <label for="item_nombre" class="bmd-label-floating">Nombre</label>
                                <input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control"
                                    name="item_nombre_reg" id="item_nombre" maxlength="140">
                            </div>
                            <div class="form-group">
                                <label for="item_stock" class="bmd-label-floating">Stock</label>
                                <input type="num" pattern="[0-9]{1,9}" class="form-control" name="item_stock_reg"
                                    id="item_stock" maxlength="9">
                            </div>
                            <div class="form-group">
                                <label for="item_estado" class="bmd-label-floating">Estado</label>
                                <select class="form-control" name="item_estado_reg" id="item_estado">
                                    <option value="" selected="" disabled="">Seleccione una opción</option>
                                    <option value="Habilitado">Habilitado</option>
                                    <option value="Deshabilitado">Deshabilitado</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="item_detalle" class="bmd-label-floating">Detalle</label>
                                <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,190}" class="form-control"
                                    name="item_detalle_reg" id="item_detalle" maxlength="190">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-secondary mb-3"><i class="ti-paint-roller"></i> &nbsp; LIMPIAR</button>
                        &nbsp; &nbsp;
                        <button type="submit" class="btn btn-primary mb-3"><i class="ti-save"></i> &nbsp; GUARDAR</button>
        </p>
    </form>
</div>
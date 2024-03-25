
		<div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li class="active">
                                         <a href="<?php echo SERVERURL; ?>client/"><i class="ti-plus"></i><span>Agregar</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo SERVERURL; ?>clienteList/"><i class="ti-user"></i><span>Lista de Clientes</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo SERVERURL; ?>clienteBuscar/"><i class="ti-search"></i><span>Buscar</span></a>
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
			
			<!-- Content here-->
			<div class="main-content-inner">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<div class="col-12 mt-5">
							<legend><i class="ti-user"></i> &nbsp; Información básica</legend>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
											<label for="cliente_dni" class="bmd-label-floating">Cedula</label>
											<input type="text" pattern="[0-9-]{1,27}" class="form-control" name="cliente_dni_reg" id="cliente_dni" maxlength="27">
                                        </div>
                                        <div class="form-group">
											<label for="cliente_nombre" class="bmd-label-floating">Nombre</label>
											<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="cliente_nombre_reg" id="cliente_nombre" maxlength="40">
                                        </div>
                                        <div class="form-group">
											<label for="cliente_apellido" class="bmd-label-floating">Apellido</label>
											<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="cliente_apellido_reg" id="cliente_apellido" maxlength="40">
                                        </div>
                                        <div class="form-group">
											<label for="cliente_telefono" class="bmd-label-floating">Teléfono</label>
											<input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="cliente_telefono_reg" id="cliente_telefono" maxlength="20">
                                        </div>
                                        <div class="form-group">
											<label for="cliente_direccion" class="bmd-label-floating">Dirección</label>
											<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="cliente_direccion_reg" id="cliente_direccion" maxlength="150">
                                        </div>
                                    </div>
                                </div>
                            </div>
					</fieldset>
					<br>
					<p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-secondary mb-3"><i class="ti-paint-roller"></i> &nbsp; LIMPIAR</button>
                        &nbsp; &nbsp;
                        <button type="submit" class="btn btn-primary mb-3"><i class="ti-save"></i> &nbsp; GUARDAR</button>
					</p>
				</form>
			</div>
<div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li class="active">
                                        <a href="<?php echo SERVERURL; ?>usuario/"><i class="ti-plus"></i><span>Agregar</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo SERVERURL; ?>usuarioList/"><i class="ti-user"></i><span>Lista de Usuarios</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo SERVERURL; ?>usuarioBuscar/"><i class="ti-search"></i><span>Buscar</span></a>
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
        <!-- Content -->
			<div class="container-fluid">
				<form class="form-neon FormularioAjax" action="<?php echo SERVERURL; ?>ajax/usuarioAjax.php" method="POST" data-form="guardar" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="usuario_dni" class="bmd-label-floating">Cedula</label>
										<input type="text" pattern="[0-9\-]{1,20}" class="form-control" name="usuario_dni_reg" id="usuario_dni" maxlength="20">
									</div>
								</div>
								
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="usuario_nombre" class="bmd-label-floating ">Nombres</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="usuario_nombre_reg" id="usuario_nombre" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="usuario_apellido" class="bmd-label-floating">Apellidos</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="usuario_apellido_reg" id="usuario_apellido" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_telefono" class="bmd-label-floating">Teléfono</label>
										<input type="text" pattern="[0-9\(\)+]{8,20}" class="form-control" name="usuario_telefono_reg" id="usuario_telefono" maxlength="20">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_direccion" class="bmd-label-floating">Dirección</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="usuario_direccion_reg" id="usuario_direccion" maxlength="190">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br>
					<fieldset>
						<legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_usuario" class="bmd-label-floating">Nombre de usuario</label>
										<input type="text" pattern="[a-zA-Z0-9]{1,35}" class="form-control" name="usuario_usuario_reg" id="usuario_usuario" maxlength="35">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_email" class="bmd-label-floating">Email</label>
										<input type="email" class="form-control" name="usuario_email_reg" id="usuario_email_reg" maxlength="70">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_clave_1" class="bmd-label-floating">Contraseña</label>
										<input type="password" class="form-control" name="usuario_clave1_reg" id="usuario_clave1_reg" pattern="[a-zA-Z0-9$@.\-]{7,100}" maxlength="100" required="" >
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="usuario_clave_2" class="bmd-label-floating">Repetir contraseña</label>
										<input type="password" class="form-control" name="usuario_clave2_reg" id="usuario_clave2_reg" pattern="[a-zA-Z0-9$@.\-]{7,100}" maxlength="100" required="" >
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br>
					<fieldset>
						<legend><i class="fas fa-medal"></i> &nbsp; Nivel de privilegio</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<p><span class="badge badge-info">Administrador</span> Permisos para registrar, actualizar y eliminar</p>
									<p><span class="badge badge-success">Edición</span> Permisos para registrar y actualizar</p>
									<p><span class="badge badge-dark">Registrar</span> Solo permisos para registrar</p>
									<div class="form-group">
										<select class="form-control" name="usuario_privilegio_reg">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="1">Administrador</option>
											<option value="2">Edición</option>
											<option value="3">Registrar</option>
										</select>
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
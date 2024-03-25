<div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                        <nav>
                            <ul id="nav_menu">
                                <li>
                                    <a href="<?php echo SERVERURL; ?>usuario/"><i class="ti-plus"></i><span>Agregar</span></a>
                                </li>
                                <li  class="active">
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
<div class="col-lg-12 mt-5">
				<div class="table-responsive">
				<table class="table text-center">
					<thead class="text-uppercase bg-primary">
					<tr class="text-white">
								<th>#</th>
								<th>DNI</th>
								<th>NOMBRE</th>
								<th>APELLIDO</th>
								<th>TELÉFONO</th>
								<th>USUARIO</th>
								<th>EMAIL</th>
								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center" >
								<td>4</td>
								<td>03045643</td>
								<td>NOMBRE DE USUARIO</td>
								<td>APELLIDO DE USUARIO</td>
								<td>2345456</td>
								<td>NOMBRE DE USUARIO</td>
								<td>ADMIN@ADMIN.COM</td>
								<td>
									<a href="user-update.html" class="btn btn-success">
	  									<i class="ti-pencil-alt"></i>	
									</a>
								</td>
								<td>
									<a href="user-update.html" class="btn btn-warning">
	  									<i class="ti-trash"></i>	
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Anterior</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Siguiente</a>
						</li>
					</ul>
				</nav>
</div>
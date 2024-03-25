<div class="header-area header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9  d-none d-lg-block">
                        <div class="horizontal-menu">
                            <nav>
                                <ul id="nav_menu">
                                    <li>
                                        <a href="<?php echo SERVERURL; ?>venta/"><i class="ti-plus"></i><span>Agregar</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo SERVERURL; ?>ventaList/"><i class="ti-user"></i><span>Lista de Ventas</span></a>
                                    </li>
                                    <li  class="active">
                                        <a href="<?php echo SERVERURL; ?>ventaBuscar/"><i class="ti-search"></i><span>Buscar</span></a>
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
        <section class="full-box page-content">
                <div class="container-fluid">
				<form class="form-neon" action="">
					<div class="container-fluid">
                    <h1 align="center">Busqueda por Fecha</h1>
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="busqueda_inicio_prestamo" >Fecha inicial (día/mes/año)</label>
									<input type="date" class="form-control" name="busqueda_inicio_prestamo" id="busqueda_inicio_prestamo" maxlength="30">
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="busqueda_final_prestamo" >Fecha final (día/mes/año)</label>
									<input type="date" class="form-control" name="busqueda_final_prestamo" id="busqueda_final_prestamo" maxlength="30">
								</div>
							</div>
							<div class="col-12">
								<p class="text-center" style="margin-top: 40px;">
									<button type="submit" class="btn btn-primary mb-3"><i class="ti-search"></i> &nbsp; BUSCAR</button>
								</p>
							</div>
						</div>
					</div>
				</form>
			</div>


			<div class="container-fluid">
				<form action="">
					<input type="hidden" name="eliminar_busqueda_prestamo" value="eliminar">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-6">
								<p class="text-center" style="font-size: 20px;">
									Fecha de busqueda: <strong>01/01/2020 &nbsp; a &nbsp; 01/01/2020</strong>
								</p>
							</div>
							<div class="col-12">
								<p class="text-center" style="margin-top: 20px;">
									<button type="submit" class="btn btn-danger mb-3"><i class="ti-close"></i> &nbsp; ELIMINAR BÚSQUEDA</button>
								</p>
							</div>
						</div>
					</div>
				</form>
			</div>


			<div class="container-fluid">
				<div class="table-responsive">
				<table class="table text-center">
					<thead class="text-uppercase bg-primary">
							<tr class="text-white">
								<th>#</th>
								<th>CLIENTE</th>
								<th>FECHA DE PRÉSTAMO</th>
								<th>FECHA DE ENTREGA</th>
								<th>TIPO</th>
								<th>ESTADO</th>
								<th>FACTURA</th>
								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center" >
								<td>1</td>
								<td>NOMBRE CLIENTE</td>
								<td>2017/10/8</td>
								<td>2017/10/10</td>
								<td><span class="badge badge-warning">Reservacion</span></td>
								<td><span class="badge badge-danger">Pendiente</span></td>
								<td>
									<a href="#" class="btn btn-info">
											<i class="ti-file"></i>	
									</a>
								</td>
								<td>
									<a href="reservation-update.html" class="btn btn-success">
											<i class="ti-pencil-alt"></i>	
									</a>
								</td>
								<td>
									<form action="">
										<button type="button" class="btn btn-warning">
												<i class="ti-trash"></i>
										</button>
									</form>
								</td>
							</tr>
							<tr class="text-center" >
								<td>2</td>
								<td>NOMBRE CLIENTE</td>
								<td>2017/10/8</td>
								<td>2017/10/10</td>
								<td><span class="badge badge-dark">Finalizado</span></td>
								<td><span class="badge badge-primary">Cancelado</span></td>
								<td>
									<a href="#" class="btn btn-info">
											<i class="ti-file"></i>	
									</a>
								</td>
								<td>
									<a href="reservation-update.html" class="btn btn-success">
											<i class="ti-pencil-alt"></i>	
									</a>
								</td>
								<td>
									<form action="">
										<button type="button" class="btn btn-warning">
												<i class="ti-trash"></i>
										</button>
									</form>
								</td>
							</tr>
							<tr class="text-center" >
								<td>3</td>
								<td>NOMBRE CLIENTE</td>
								<td>2017/10/8</td>
								<td>2017/10/10</td>
								<td><span class="badge badge-info">Prestamo</span></td>
								<td><span class="badge badge-danger">Pendiente</span></td>
								<td>
									<a href="#" class="btn btn-info">
											<i class="ti-file"></i>	
									</a>
								</td>
								<td>
									<a href="reservation-update.html" class="btn btn-success">
											<i class="ti-pencil-alt"></i>	
									</a>
								</td>
								<td>
									<form action="">
										<button type="button" class="btn btn-warning">
												<i class="ti-trash"></i>
										</button>
									</form>
								</td>
							</tr>
							<tr class="text-center" >
								<td>4</td>
								<td>NOMBRE CLIENTE</td>
								<td>2017/10/8</td>
								<td>2017/10/10</td>
								<td><span class="badge badge-dark">Finalizado</span></td>
								<td><span class="badge badge-primary">Cancelado</span></td>
								<td>
									<a href="#" class="btn btn-info">
											<i class="ti-file"></i>	
									</a>
								</td>
								<td>
									<a href="reservation-update.html" class="btn btn-success">
											<i class="ti-pencil-alt"></i>	
									</a>
								</td>
								<td>
									<form action="">
										<button type="button" class="btn btn-warning">
												<i class="ti-trash"></i>
										</button>
									</form>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>
        <section>
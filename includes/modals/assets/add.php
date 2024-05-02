<?php $set = '1234567890';
$id = substr(str_shuffle($set), 0, 6); ?>
<div id="add_asset" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-md" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Adicionar ativo</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form method="POST">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Nome do ativo</label>
												<input name="asset_name" class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>ID do recurso</label>
												<input readonly name="asset_id" value="<?php echo '#AST-'.$id; ?>" class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Data de compra</label>
												<input name="purchase_date" readonly value="<?php echo date('dd/mm/yy'); ?>" class="form-control datetimepicker" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Comprar de</label>
												<input name="purchase_from" class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Fabricante</label>
												<input name="manufacturer" class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Modelo</label>
												<input name="model" class="form-control" type="text">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Status</label>
												<select name="status" class="select">
													<option value="0">Pendente</option>
													<option value="1">Aprovado</option>
													<option value="2">Implantado</option>
													<option value="3">Danificado</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Fornecedor</label>
												<input name="supplier" class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Doença</label>
												<input name="condition" class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Garantia</label>
												<input name="warranty" class="form-control" type="text" placeholder="Em meses">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Valor/Preço</label>
												<input placeholder="1800" name="value"  class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Usuário de ativos</label>
												<select name="asset_user" class="select">
													<option>John Doe</option>
													<option>Richard Miles</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Descrição</label>
												<textarea name="description" class="form-control"></textarea>
											</div>
										</div>
										
									</div>
									<div class="submit-section">
										<button type="submit" name="add_asset" class="btn btn-primary submit-btn">Enviar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
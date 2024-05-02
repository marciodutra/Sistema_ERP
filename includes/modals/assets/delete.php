<div class="modal custom-modal fade" id="delete_asset" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="form-header">
					<h3>Excluir recurso</h3>
					<p>Tem certeza de que deseja excluir?</p>
				</div>
				<div class="modal-btn delete-action">
					<div class="row">
						<div class="col-6">
							<a href="assets.php?delid=<?php echo $row->id;?>" type="submit" class="btn btn-primary continue-btn">Delete</a>
						</div>
						<div class="col-6">
							<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancelar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
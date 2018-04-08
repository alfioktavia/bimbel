<div class="row">
	<div class="col-md-12">
		<div id="message"></div>
		<div class="box box-success box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?= isset($head) ? $head : ''; ?></h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<form id="formID" role="form" action="<?=base_url('perkebunan/ajax_save'); ?>" method="post">
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
			<!-- box-body -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('nama_pemilik') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Nama Pemilik','nama_pemilik');
							$data = array('class'=>'form-control','name'=>'nama_pemilik','id'=>'nama_pemilik','type'=>'text','value'=>set_value('alamat', $record->nama_pemilik));
							echo form_input($data);
							echo form_error('nama_pemilik') ? form_error('nama_pemilik', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('alamat') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Alamat','alamat');
							$data = array('class'=>'form-control','name'=>'alamat','id'=>'alamat','type'=>'text','value'=>set_value('alamat', $record->alamat));
							echo form_input($data);
							echo form_error('alamat') ? form_error('alamat', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('luas') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Luas','luas');
							$data = array('class'=>'form-control','name'=>'luas','id'=>'luas','type'=>'text','value'=>set_value('luas', $record->luas));
							echo form_input($data);
							echo form_error('luas') ? form_error('luas', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('jenis') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Jenis','jenis');
							$data = array('class'=>'form-control','name'=>'jenis','id'=>'jenis','type'=>'text','value'=>set_value('jenis', $record->jenis));
							echo form_input($data);
							echo form_error('jenis') ? form_error('jenis', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('info') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Info','info');
							$data = array('class'=>'form-control','name'=>'info','id'=>'info','type'=>'text','value'=>set_value('info', $record->info));
							echo form_input($data);
							echo form_error('info') ? form_error('info', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					
				</div>
			</div>
			<!-- ./box-body -->
			<div class="box-footer">

				<button type="submit" class="btn btn-sm btn-flat btn-info" ><i class="fa fa-save"></i> Simpan & Keluar</button>
				<button type="reset" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-refresh"></i> Reset</button>
				<button type="button" class="btn btn-sm btn-flat btn-danger" onclick="back();"><i class="fa fa-close"></i> Keluar</button>
			</div>
			</form>
		</div>
	</div>
</div>
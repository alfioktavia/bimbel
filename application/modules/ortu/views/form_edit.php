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
			<form id="formID" role="form" action="<?=base_url('ortu/ajax_update/'.$record->idperk); ?>" method="post">
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
			<!-- box-body -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('nama') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Nama Siswa','nama');
							$data = array('class'=>'form-control','name'=>'nama','id'=>'nama','type'=>'text','value'=>set_value('alamat', $record->nama));
							echo form_input($data);
							echo form_error('nama') ? form_error('nama', '<p class="help-block">','</p>') : '';
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
						<div class="form-group <?php echo form_error('tempat') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Tempat','tempat');
							$data = array('class'=>'form-control','name'=>'tempat','id'=>'tempat','type'=>'text','value'=>set_value('tempat', $record->tempat));
							echo form_input($data);
							echo form_error('tempat') ? form_error('tempat', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('tgl_lhr') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Tanggal Lahir','tgl_lhr');
							$data = array('class'=>'form-control','name'=>'tgl_lhr','id'=>'tgl_lhr','type'=>'text','value'=>set_value('tgl_lhr', $record->tgl_lhr));
							echo form_input($data);
							echo form_error('tgl_lhr') ? form_error('tgl_lhr', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('jk') ? 'has-error' : null; ?>">
							<?php 
							echo form_label('Jenis Kelamin*','jk');
							$selected = set_value('jk', $record->jk);
							echo form_dropdown('jk', $jk, $selected, "required class='form-control select2' style='width: 100%;' name='jk' id='jk'");
							echo form_error('jk') ? form_error('jk', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('agama') ? 'has-error' : null; ?>">
							<?php 
							echo form_label('Agama/Kepercayaan*','agama');
							$selected = set_value('agama', $record->agama);
							echo form_dropdown('agama', $agama, $selected, "required class='form-control select2' style='width: 100%;' name='agama' id='agama'");
							echo form_error('agama') ? form_error('agama', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('no_telp') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Nomor Telepon/HP','no_telp');
							$data = array('class'=>'form-control','name'=>'no_telp','id'=>'no_telp','type'=>'text','value'=>set_value('no_telp', $record->no_telp));
							echo form_input($data);
							echo form_error('no_telp') ? form_error('no_telp', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('pekerjaan') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Pekerjaan','pekerjaan');
							$data = array('class'=>'form-control','name'=>'pekerjaan','id'=>'pekerjaan','type'=>'text','value'=>set_value('pekerjaan', $record->pekerjaan));
							echo form_input($data);
							echo form_error('pekerjaan') ? form_error('pekerjaan', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('foto') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Pas Foto','foto');
							$data = array('class'=>'form-control','name'=>'foto','id'=>'foto','type'=>'text','value'=>set_value('foto', $record->foto));
							echo form_input($data);
							echo form_error('foto') ? form_error('foto', '<p class="help-block">','</p>') : '';
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
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
			<form id="formID" role="form" action="<?=base_url('guru/ajax_update/'.$record->id_guru); ?>" method="post">
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
			<!-- box-body -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('id_guru') ? 'has-error' : null; ?>">
							<?php
							echo form_label('NIK','id_guru');
							$data = array('class'=>'form-control','name'=>'id_guru','id'=>'id_guru','type'=>'text','value'=>set_value('id_guru', $record->id_guru));
							echo form_input($data);
							echo form_error('id_guru') ? form_error('id_guru)', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('nama') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Nama Guru','nama');
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
							echo form_label('Jenis Kelamin *','jk');
							$selected = set_value('jk', $record->jk);
							$status = array(''=>'Pilih Jenis Kelamin','1'=>'LAKI-LAKI','2'=>'PEREMPUAN');
							echo form_dropdown('sex', $status, $selected, "required class='form-control select2' style='width: 100%;' name='jk' id='jk'");
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
						<div class="form-group <?php echo form_error('pend_akhir') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Pendidikan Terakhir','pend_akhir');
							$data = array('class'=>'form-control','name'=>'pend_akhir','id'=>'pend_akhir','type'=>'text','value'=>set_value('pend_akhir', $record->pend_akhir));
							echo form_input($data);
							echo form_error('pend_akhir') ? form_error('pend_akhir', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('mapel_ampu') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Mata Pelajaran Ampu','mapel_ampu');
							$data = array('class'=>'form-control','name'=>'mapel_ampu','id'=>'mapel_ampu','type'=>'text','value'=>set_value('mapel_ampu', $record->mapel_ampu));
							echo form_input($data);
							echo form_error('mapel_ampu') ? form_error('mapel_ampu', '<p class="help-block">','</p>') : '';
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
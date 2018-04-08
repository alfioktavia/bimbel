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
			<form id="formID" role="form" action="<?=base_url('siswa/ajax_update/'.$record->id_siswa); ?>" method="post">
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
			<!-- box-body -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('id_siswa') ? 'has-error' : null; ?>">
							<?php
							echo form_label('NISB','id_siswa');
							$data = array('class'=>'form-control','name'=>'id_siswa','id'=>'id_siswa','type'=>'text','value'=>set_value('id_siswa', $record->id_siswa));
							echo form_input($data);
							echo form_error('id_siswa') ? form_error('id_siswa)', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
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
							echo form_label('Agama','agama');
							$data = array('class'=>'form-control','name'=>'agama','id'=>'agama','type'=>'text','value'=>set_value('agama', $record->agama));
							echo form_input($data);
							echo form_error('agama') ? form_error('agama', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('nm_ayah') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Nama Ayah','nm_ayah');
							$data = array('class'=>'form-control','name'=>'nm_ayah','id'=>'nm_ayah','type'=>'text','value'=>set_value('nm_ayah', $record->nm_ayah));
							echo form_input($data);
							echo form_error('nm_ayah') ? form_error('nm_ayah', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('nm_ibu') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Nama Ibu','nm_ibu');
							$data = array('class'=>'form-control','name'=>'nm_ibu','id'=>'nm_ibu','type'=>'text','value'=>set_value('nm_ibu', $record->nm_ibu));
							echo form_input($data);
							echo form_error('nm_ibu') ? form_error('nm_ibu', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('nm_wali') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Nama Wali','nm_wali');
							$data = array('class'=>'form-control','name'=>'nm_wali','id'=>'nm_wali','type'=>'text','value'=>set_value('nm_wali', $record->nm_wali));
							echo form_input($data);
							echo form_error('nm_wali') ? form_error('nm_wali', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('pkrjn_ayah') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Pekerjaan Ayah','pkrjn_ayah');
							$data = array('class'=>'form-control','name'=>'pkrjn_ayah','id'=>'pkrjn_ayah','type'=>'text','value'=>set_value('pkrjn_ayah', $record->pkrjn_ayah));
							echo form_input($data);
							echo form_error('pkrjn_ayah') ? form_error('pkrjn_ayah', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('pkrjn_ibu') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Pekerjaan Ibu','pkrjn_ibu');
							$data = array('class'=>'form-control','name'=>'pkrjn_ibu','id'=>'pkrjn_ibu','type'=>'text','value'=>set_value('pkrjn_ibu', $record->pkrjn_ibu));
							echo form_input($data);
							echo form_error('pkrjn_ibu') ? form_error('pkrjn_ibu', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('gaji') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Gaji Orang Tua','gaji');
							$data = array('class'=>'form-control','name'=>'gaji','id'=>'gaji','type'=>'text','value'=>set_value('gaji', $record->gaji));
							echo form_input($data);
							echo form_error('gaji') ? form_error('gaji', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('asal_sklh') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Asal Sekolah','asal_sklh');
							$data = array('class'=>'form-control','name'=>'asal_sklh','id'=>'asal_sklh','type'=>'text','value'=>set_value('asal_sklh', $record->asal_sklh));
							echo form_input($data);
							echo form_error('asal_sklh') ? form_error('asal_sklh', '<p class="help-block">','</p>') : '';
							?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group <?php echo form_error('kelas') ? 'has-error' : null; ?>">
							<?php
							echo form_label('Kelas','kelas');
							$data = array('class'=>'form-control','name'=>'kelas','id'=>'kelas','type'=>'text','value'=>set_value('kelas', $record->kelas));
							echo form_input($data);
							echo form_error('kelas') ? form_error('kelas', '<p class="help-block">','</p>') : '';
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
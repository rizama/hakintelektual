<h3>Identitas Hak Kekayaan Intelektual</h3>
<hr />

<div style="color:red">
	<?php echo validation_errors(); ?>
  <?php if(isset($error)){print $error;}?>
</div>
<?php echo form_open_multipart('upload/file_data');?>

  <div class="form-group">
    <label for="nama">Nama Lengkap*:</label>
    <input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>" id="nama">
  </div>
  <div class="form-group">
    <label for="institusi">Institusi*:</label>
    <input type="text" class="form-control" name="institusi" value="<?= set_value('institusi'); ?>" id="institusi">
  </div>
  <div class="form-group">
    <label for="ciptaan">Jenis Ciptaan*:</label>
    <input type="text" class="form-control" name="ciptaan" value="<?= set_value('ciptaan'); ?>" id="ciptaan">
  </div>
  <div class="form-group">
    <label for="judul">Judul*:</label>
    <input type="text" class="form-control" name="judul" value="<?= set_value('judul'); ?>" id="judul">
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi:</label>
    <textarea name="deskripsi" class="form-control" id="deskripsi"><?= set_value('deskripsi'); ?></textarea>
  </div>
  <div class="form-group">
    <label for="file">Unggah Sertifikasi*:</label>
    <input type="file" name="file" class="form-control"  id="file">
  </div>
  <a href="<?=base_url();?>" class="btn btn-warning">Back</a>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
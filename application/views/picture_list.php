  <h2>List of Certification</h2>
  <?php if(count($certificate_list)){?>
	  <table class="table table-bordered">
		<thead>
		  <tr>
			<th>Nama Lengkap</th>
			<th>Institusi</th>
			<th>Ciptaan</th>
			<th>Judul</th>
			<th>Deskripsi</th>
			<th>Sertifikasi</th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach ($certificate_list as $cert): ?>
		  <tr>
			<td><?=$cert->nama;?></td>
			<td><?=$cert->institusi;?></td>
			<td><?=$cert->ciptaan;?></td>
			<td><?=$cert->judul;?></td>
			<td><?=$cert->deskripsi;?></td>
			<td><a href="<?=base_url().'assets/uploads/'.$cert->file;?>" target="_blank"><img src="<?=base_url().'assets/uploads/'.$cert->file;?>" width="100"></a></td>
		  </tr>
		<?php endforeach ?>
		</tbody>
	  </table>
	  <br />
	  <a href="<?=base_url().'upload/form';?>" class="btn btn-primary">Upload More</a>
  <?php } else { ?>
    <h4>No Pictures have been uploaded!. Click this button to <a href="<?=base_url().'upload/form';?>" class="btn btn-primary">upload</a></h4>            
  <?php } ?>
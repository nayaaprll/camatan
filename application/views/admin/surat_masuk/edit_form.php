<!DOCTYPE html>
<head>
  <?php $this->load->view("admin/partials/head.php") ?>
</head>
<body>
  <?php $this->load->view("admin/partials/sidebar.php") ?>
  <?php $this->load->view("admin/partials/navbar.php") ?>

 <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <!-- Card  -->
        <div class="card mb-3">
          <div class="card-header">

            <a href="<?php echo site_url('admin/Surat_masuk/') ?>"><i class="fas fa-arrow-left"></i>
              Back</a>
          </div>
          <div class="card-body">

            <form action="<?php base_url('admin/Surat_masuk/edit') ?>" method="post" enctype="multipart/form-data">

              <input type="hidden" name="id" value="<?php echo $surat_masuk->id_surat?>" />

              <div class="form-group">
                <label for="nomor_surat">Nomor Surat :</label>
                <input class="form-control <?php echo form_error('nomor_surat') ? 'is-invalid':'' ?>"
                 type="text" name="nomor_surat" placeholder="nomor_surat" value="<?php echo $surat_masuk->nomor_surat ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('nomor_surat') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="asal_surat">Asal Surat :</label>
                <input class="form-control <?php echo form_error('asal_surat') ? 'is-invalid':'' ?>"
                 type="text" name="asal_surat" placeholder="asal_surat" value="<?php echo $surat_masuk->asal_surat ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('asal_surat') ?>
                </div>
              </div>

                <div class="form-group">
                <label for="tanggal_surat">Tanggal Surat :</label>
                <input class="form-control <?php echo form_error('tanggal_surat') ? 'is-invalid':'' ?>"
                  type="text" name="tanggal_surat" placeholder="tanggal_surat" value="<?php echo $surat_masuk->tanggal_surat ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('tanggal_surat') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="perihal_surat">Perihal Surat :</label>
                <input class="form-control <?php echo form_error('perihal_surat') ? 'is-invalid':'' ?>"
                 type="text" name="perihal_surat" placeholder="perihal_surat" value="<?php echo $surat_masuk->perihal_surat ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('perihal_surat') ?>
                </div>
              </div>

               <div class="form-group">
                <label for="tanggal_terima">Tanggal Terima :</label>
                <input class="form-control <?php echo form_error('tanggal_terima') ? 'is-invalid':'' ?>"
                  type="text" name="tanggal_terima" placeholder="tanggal_terima" value="<?php echo $surat_masuk->tanggal_terima ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('tanggal_terima') ?>
                </div>
              </div>

              

             

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>
</div>


    <?php $this->load->view("admin/partials/footer.php") ?>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                       
                                    </div>
                                </div>
			<!-- /.container-fluid -->
			<?php $this->load->view("admin/partials/modal.php") ?>
			<?php $this->load->view("admin/partials/js.php") ?>

		<script>
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
}
</script>
   
</body>


</html>
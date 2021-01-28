<!DOCTYPE html>
<head>
  <?php $this->load->view("admin/partials/head.php") ?>
</head>
<body>
  <?php $this->load->view("admin/partials/sidebar.php") ?>
  <?php $this->load->view("admin/partials/navbar.php") ?>


        <!-- DataTables -->
        <div class="card-body">
        <?php $this->load->view("admin/partials/breadcrumb.php") ?>

       <div class="content">
       <div class="card-body">
       <div class="row">
          <div class="col-md-12">
          <div class="card strpied-tabled-with-hover">
            <br>
          <div class="card-header ">
            <h4 class="card-title">Data Surat Keluar</h4>
            <a href="<?php echo site_url('admin/Surat_keluar/add') ?>">Add New</a>
          </div>
          <div class="card-body table-full-width table-responsive">
          <table class="table table-hover table-striped">
             <thead class="thead-light">
                    <tr>
                    <th>Nomor Surat</th> 
                    <th>Tujuan Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Perihal Surat</th>
                    <th>Tanggal Kirim</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($surat_keluar as $surat_keluarr): ?>
                  <tr>
                     <td>
                      <?php echo $surat_keluarr->nomor_surat ?>
                    </td>
                    <td>
                      <?php echo $surat_keluarr->tujuan_surat ?>
                    </td>
                    <td>
                      <?php echo $surat_keluarr->tanggal_surat ?>
                    </td>
                    <td>
                      <?php echo $surat_keluarr->perihal_surat ?>
                    </td>
                    <td>
                      <?php echo $surat_keluarr->tanggal_kirim ?>
                    </td>
              
                    <td>
                      <a href="<?php echo site_url('admin/Surat_keluar/edit/'.$surat_keluarr->id_surat) ?>"
                       class="btn btn-success"><i class="fas fa-edit"></i></a>
                      <a onclick="deleteConfirm('<?php echo site_url('admin/Surat_keluar/delete/'.$surat_keluarr->id_surat) ?>')"
                       href="#!" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
                </div>
              </div>
            </div>
          </div>
      </div>
      <?php $this->load->view("admin/partials/footer.php") ?>
                                
      <!-- /.container-fluid -->
      <?php $this->load->view("admin/partials/scrolltop.php") ?>
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
  
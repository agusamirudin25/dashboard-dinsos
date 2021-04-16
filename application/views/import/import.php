<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <h4 class="page-title">Import</h4>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="card m-b-20">
            <div class="card-body">
              <a href="<?= base_url('assets/sample_import.xlsx') ?>" download="sample_import"><button class="btn btn-primary m-b-20 float-right"> Download sampel</button></a>
              <form action="<?php echo base_url(); ?>" id="formImport" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Import file</label>
                  <input type="file" class="filestyle" data-buttonname="btn-secondary" name="uploadFile" required>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- end row -->

    </div> <!-- container-fluid -->

  </div> <!-- content -->

  <footer class="footer">
    © <?= date('Y') ?> Dinas Sosial - <span class="d-none d-sm-inline-block"> Crafted with <i class="mdi mdi-heart text-danger"></i> by Amirudin</span>.
  </footer>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->
<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/sweetalert2.min.js"></script>
<script>
  $(document).ready(function() {
    $('#formImport').submit(function(e) {
      e.preventDefault();

      var data = new FormData(this);
      $.ajax({
        url: '<?= site_url(); ?>import/importFile',
        type: "post",
        data: data,
        beforeSend: function() {
          Swal.fire({
            icon: '',
            title: '',
            allowOutsideClick: false,
            text: 'Mohon Tunggu. Mungkin membutuhkan waktu yang lama',
            showCancelButton: false, // There won't be any cancel button
            showConfirmButton: false // There won't be any confirm button
          })
        },
        // complete: function() {
        //   Swal.close()
        // },
        processData: false,
        contentType: false,
        // cache: false,
        // async: true,
        dataType: "json",
        success: function(response) {
          console.log(response)
          if (response.status == 1) {
            Swal.fire({
              icon: 'success',
              title: 'Success',
              text: response.msg,
            })
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: response.msg,
            })
          }
        }
      });
    });
  });
</script>
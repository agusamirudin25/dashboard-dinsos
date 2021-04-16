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
            <h4 class="page-title">Input Manual</h4>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="card m-b-20">
            <div class="card-body">
              <form method="post" id="formManual">
                <div class="form-group">
                  <label>Total Data</label>
                  <input type="number" class="form-control" name="total" required>
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
    $('#formManual').submit(function(e) {
      e.preventDefault();
      var data = new FormData(this);
      $.ajax({
        url: '<?= site_url(); ?>import/prosesManual',
        type: "post",
        data: data,
        beforeSend: function() {
          Swal.fire({
            icon: '',
            title: '',
            allowOutsideClick: false,
            text: 'Mohon Tunggu.',
            showCancelButton: false, // There won't be any cancel button
            showConfirmButton: false // There won't be any confirm button
          })
        },
        processData: false,
        contentType: false,
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
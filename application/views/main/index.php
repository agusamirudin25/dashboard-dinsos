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
                        <h4 class="page-title">Admin</h4>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card widget-user m-b-20">
                        <div class="widget-user-desc p-4 text-center bg-primary position-relative">
                            <i class="fas fa-quote-left h3 text-white-50"></i>
                            <p class="text-white mb-0">Welcome Admin.</p>
                        </div>
                        <div class="p-4">
                            <div class="float-left mt-2 mr-3">
                                <img src="<?= base_url() ?>assets/images/directory-bg.jpg" alt="" class="rounded-circle thumb-md">
                            </div>
                            <h6 class="mb-1"><?= $this->session->nama; ?></h6>
                            <p class="text-muted mb-0"><?= $this->session->username; ?></p>
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
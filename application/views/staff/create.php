<?php 
$this->load->view('template/head');
$this->load->view('template/top');
$this->load->view('template/side');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Staff</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Staff</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-6">
          <div class="card">
              <div class="card-header">
                <div class="card-title">
                Add Staff
                </div>
              </div>
              <div class="card-body">
                <form action="<?= base_url('') ?>staff" method="post">
                    <div class="form-group">
                        <label for="nama">Staff Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Department Name">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Staff Job</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Input Department Name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
$this->load->view('template/foot');
?>
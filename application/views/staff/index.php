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
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <a href="<?= base_url('') ?>staff/create" class="btn btn-info text-decoration-none">Add Staff</a>
              </div>
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Staff Name</th>
                            <th>Jabatan</th>
                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($staff as $key => $s) {
                            ?>
                        <tr>
                            <td><?= $key+1 ?></td>
                            <td><?= $s['nama'] ?></td>
                            <td><?= $s['jabatan'] ?></td>
                            <td class="text-center"><a href="<?= base_url('') ?>staff/edit/<?= $s['id'] ?>" class="btn btn-success">Edit</a></td>
                            <td class="text-center">
                            <form action="<?= base_url('') ?>staff/delete/<?= $s['id'] ?>" method="delete"><button type="submit" class="btn btn-danger">Delete</button></form>
                            </td>
                        </tr>
                            <?php }
                            ?>
                    </tbody>
                  </table>
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
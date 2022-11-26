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
            <h1><b>INPUT TICKET</b></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Issues</li>
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
                  <a href="<?= base_url('') ?>ticketing/create" class="btn btn-info text-decoration-none">Add Ticket</a>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Date</th>
                              <th>User Name</th>
                              <th>Department</th>
                              <th>Location</th>
                              <th>Detail Case</th>
                              <th>Suggest Action</th>
                              <th>Delegation</th>
                              <th>Start Time</th>
                              <th>Status Case</th>
                              <th colspan="4" class="text-center">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php foreach ($ticket as $key => $t) {
                              ?>
                          <tr id="<?= $t['tid'] ?>">
                              <td><?= $key+1 ?></td>
                              <td><?= $t['date'] ?></td>
                              <td><?= $t['username'] ?></td>
                              <td><?= $t['name'] ?></td>
                              <td><?= $t['location'] ?></td>
                              <td><?= $t['detail_case'] ?></td>
                              <td><?= $t['suggest'] ?></td>
                              <td><?= $t['nama'] ?></td>
                              <td><?= date("h:i A", strtotime($t['starttime'])) ?></td>
                              <td class="<?php if ($t['status'] == "Pending") {echo "text-red"; } elseif($t['status'] == "On Progress") {echo "text-yellow"; }elseif($t['status'] == "Solved"){echo "text-green"; } ?>" ><?= $t['status'] ?></td>
                              <td class="text-center">
                                <a href="<?= base_url('') ?>ticketing/edit/<?= $t['tid'] ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                              </td>
                              <td class="text-center">
                                <form action="<?= base_url('') ?>ticketing/delete/<?= $t['tid'] ?>" method="delete"><button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></form>
                              </td>
                              <td class="text-center">
                              <a href="<?= base_url('') ?>ticketing/solve/<?= $t['tid'] ?>" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                            </td>
                            <td>
                              <a target="_blank" href="<?= base_url('') ?>ticketing/wha/<?= $t['tid'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-whatsapp"></i></a>
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


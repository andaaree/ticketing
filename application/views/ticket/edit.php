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
            <h1>Departments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Departments</li>
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
                Add Department
                </div>
              </div>
              <div class="card-body">
                <form action="<?= base_url('') ?>ticketing/update/<?= $t->tid ?>" method="post">
                    <!-- Date -->
                    <div class="form-group">
                      <label>Date:</label>
                        <div class="input-group date" id="casedate" data-target-input="nearest">
                            <input type="text" name="date" value="<?= date("m/d/Y", strtotime($t->date)) ?>" class="form-control datetimepicker-input" data-target="#casedate"/>
                            <div class="input-group-append" data-target="#casedate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $t->username ?>" placeholder="Please insert user name">
                    </div>
                    <div class="form-group">
                        <label for="dep_id">Department</label>
                        <select name="dep_id" id="dep_id" class="form-control select2 select2bs4">
                          <?php foreach ($depart as $k => $dp) {
                          ?>
                          <option <?php if ($dp['id'] == $t->did) { echo "selected='selected'"; } ?> value="<?= $dp['id'] ?>"><?= $dp['name'] ?></option>
                          <?php }
                          ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="<?= $t->location ?>" placeholder="Input Department Name">
                    </div>
                    <div class="form-group">
                        <label for="detail_case">Detail Case</label>
                        <input type="text" class="form-control" id="detail_case" name="detail_case" value="<?= $t->detail_case ?>" placeholder="Input Department Name">
                    </div>
                    <div class="form-group">
                        <label for="suggest">Suggest</label>
                        <input type="text" class="form-control" id="suggest" name="suggest" value="<?= $t->suggest ?>" placeholder="Input Department Name">
                    </div>
                    <div class="form-group">
                        <label for="staff_id">Delegation</label>
                        <select class="form-control select2 select2bs4" name="staff_id" style="width: 100%;">
                            <?php foreach ($staff as $k => $s) {
                            ?> 
                            <option <?php if ($s['id'] == $t->sid) { echo "selected='selected'"; } ?>  value="<?= $s['id'] ?>"><?= $s['nama'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    
                    <!-- time Picker -->
                    <div class="bootstrap-timepicker">
                      <div class="form-group">
                        <label>Start Time :</label>

                        <div class="input-group date" id="starttime" data-target-input="nearest">
                          <input type="text" name="starttime" value="<?= date("h:i A", strtotime($t->starttime)) ?>" class="form-control datetimepicker-input" data-target="#starttime"/>
                          <div class="input-group-append" data-target="#starttime" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-clock"></i></div>
                          </div>
                          </div>
                          
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->
                    </div>
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control select2 select2bs4" style="width: 100%;">
                        <option <?php if ($t->status == "Pending") { echo "selected='selected'"; } ?> value="Pending">Pending</option>
                        <option <?php if ($t->status == "On Progress") { echo "selected='selected'"; } ?> value="On Progress">On Progress</option>
                        <option <?php if ($t->status == "Solved") { echo "selected='selected'"; } ?> value="Solved">Solved</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
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
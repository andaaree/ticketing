<script>
  $(function () {
    $("#tbcase").DataTable({
      "responsive": true, 
      "lengthChange": false,
       "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    var table = $('#tbhis').DataTable({
      "buttons": ["copy", "csv", "excel", "pdf", "print"],
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true
    });

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Date picker
    $('#casedate').datetimepicker({
        format: 'L'
    });

    //Timepicker
    $('#starttime').datetimepicker({
      format: 'LT'
    })
    $('#endtime').datetimepicker({
      format: 'LT'
    })
    $("#tbcase ").click("td",function (e) { 
      e.preventDefault();
      alert($(this).val());
    });
  });
</script>

<?php 
if ($this->session->flashdata('success') !== null) {
  ?>
<script type="text/javascript">
  $(document).ready(function () {
    Swal.fire({
      icon: 'success',
      title: 'Success !',
      text: '<?= $this->session->flashdata('success') ?>',
    });
  });
</script>
  <?php 
}
?>
<?php 
if ($this->session->flashdata('error') !== null) {
  ?>
<script type="text/javascript">
  $(document).ready(function () {
    Swal.fire({
      icon: 'error',
      title: 'Error !',
      text: '<?= $this->session->flashdata('error') ?>',
    });
  });
</script>
  <?php 
}
?>
@extends('admin.dashboard')

@push('stylesheet')
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('main')

       
  
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Import XLS/CSV</h3>

    {{-- <form action="" enctype="multipart/form-data" method="POST">
      @csrf
      <input type="file" name="import_file">
      <button type="submit" class="btn btn-sm btn-primary">Import</button>


    </form> --}}

  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="mytable" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Emp#</th>
        <th>AC#</th>
        <th>Name</th>
        <th>Date</th>
        <th>Clock In</th>
        <th>Clock Out</th>
        <th>Total Hr(s)</th>
        <th>Department</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SANPLE</td>
          <td>SAMPLE</td>
        </tr>
        <tr>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SANPLE</td>
          <td>SAMPLE</td>
        </tr>
        <tr>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SANPLE</td>
          <td>SAMPLE</td>
        </tr>
        <tr>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SANPLE</td>
          <td>SAMPLE</td>
        </tr>
        <tr>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SANPLE</td>
          <td>SAMPLE</td>
        </tr>
        <tr>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SANPLE</td>
          <td>SAMPLE</td>
        </tr>
        <tr>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SANPLE</td>
          <td>SAMPLE</td>
        </tr>
        <tr>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SANPLE</td>
          <td>SAMPLE</td>
        </tr>
        <tr>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SANPLE</td>
          <td>SAMPLE</td>
        </tr>
        <tr>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SANPLE</td>
          <td>SAMPLE</td>
        </tr>
        <tr>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SAMPLE</td>
          <td>SANPLE</td>
          <td>SAMPLE</td>
        </tr>
      </tbody>
      <tfoot>
      <tr>
        <th>Emp#</th>
        <th>AC#</th>
        <th>Name</th>
        <th>Date</th>
        <th>Clock In</th>
        <th>Clock Out</th>
        <th>Total Hr(s)</th>
        <th>Department</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.card-body -->
</div>


@endsection

@push('scripts')
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script>
  $(function () {
    $("#mytable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#mytable_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush
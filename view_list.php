<?php
  include("header.php");
  include("classes/connect.php");
?>
<div class="container">
  <div class="main_wrapper">
    <h3 class="text-center">All Student List</h3>
    <hr />
    <br />
      <div class="table-responsive">
        <table id="emp_list" class="table-striped table-hover table-bordered display dt-responsive nowrap" style="width:100%">
          <thead>
             <tr>
                 <th>Student Id</th>
                 <th>Student Name</th>
                 <th>Email</th>
                 <th>Mobile No</th>
                 <th>Class</th>
                 <th>Created Date</th>
             </tr>
          </thead>
      </div>
    </table><br />
  </div>
  <div class="text-left"><br />
    <button type="button" onclick="location.href = 'index.php';" name="button" class="btn btn-sm btn-info"><< Go Back</button>
  </div>
</div>

<?php include('footer.php'); ?>

    <script type="text/javascript">
    $(document).ready(function(){
      var data_table = $('#emp_list').DataTable({
        "processing": true,
        "serverSide": true,
        dom: 'Bfrtip',
        buttons: [ 'copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5' ],
        "ajax": "classes/empList-data.php",
        "columns": [
          { "data": "0"},
          { "data": "1" },
          { "data": "2" },
          { "data": "3" },
          { "data": "4" },
          { "data": "5" }
        ]
      });
    });

  </script>

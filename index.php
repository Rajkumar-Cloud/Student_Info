<?php
  include("header.php");
  include("classes/connect.php");
?>
<div class="container">
  <div class="main_wrapper">
    <h3 class="text-center">Student Registration Panel</h3>
    <hr />
    <h4>Enter Student Details</h4>
    <br />
    <form class="form-horizontal" method="post" id="student_form">
      <div class="table-responsive">
        <div class="col-sm-12" id="error"></div>
        <table id="stuform_table" class="table-striped table-hover display dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Class</th>
                        <th>
                          <button type="button" data-toggle="tooltip" title="add student row" name="add_student" class="btn btn-success btn-sm add_student_form"><span class="fa fa-plus"></span></button>
                        </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <br />
            <div class="center">
              <button type="submit" name="submit" class="btn btn-info">Submit</button>
            </div>
      </div>
    </form>
  </div>
</div>


<?php include('footer.php'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click', '.add_student_form', function(){
      var row = '';
      row +='<tr>';
      row +='<td><input type="text" required name="student_id[]" class="form-control student_id" placeholder="Enter student code" /> </td>';
      row +='<td><input type="text" required name="student_name[]" class="form-control student_name" placeholder="Enter student name" /> </td>';
      row +='<td><input type="email" required name="student_email[]" class="form-control student_email" placeholder="Enter student email" /> </td>';
      row +='<td><input type="number" name="student_mobile[]" required class="form-control student_mobile" placeholder="Enter student mobile" /></td>';
      row +='<td><input type="text" name="student_class[]" required class="form-control student_class" placeholder="Enter student class" /></td>';
      row +='<td><button type="button" data-toggle="tooltip" title="Remove Student row" name="remove" class="btn btn-danger btn-sm student_remove"><span class="fa fa-minus"></span></button></td>';
      row +='</tr>';
      $('#stuform_table').append(row);
    });
    $(document).on('click', '.student_remove', function(){
      $(this).closest('tr').remove();
    });
    $('#student_form').on('submit', function(event){
      event.preventDefault();
      var error='';
      $('.student_id').each(function(){
        var count = 1;
        if($(this).val() ==''){
          error +="<p>Enter Student ID at "+count+" Row</p>";
          return false;
        }
        count = count+1;
      });
      $('.student_name').each(function(){
        var count = 1;
        if($(this).val() ==''){
          error +="<p>Enter Student Name at "+count+" Row</p>";
          return false;
        }
        count = count+1;
      });
      $('.student_email').each(function(){
        var count = 1;
        if($(this).val() ==''){
          error +="<p>Enter Student Email at "+count+" Row</p>";
          return false;
        }
        count = count+1;
      });
      $('.student_mobile').each(function(){
        var count = 1;
        if($(this).val() ==''){
          error +="<p>Enter Student Mobile at "+count+" Row</p>";
          return false;
        }
        count = count+1;
      });
      $('.student_class').each(function(){
        var count = 1;
        if($(this).val() ==''){
          error +="<p>Select Student Class at "+count+" Row</p>";
          return false;
        }
        count = count+1;
      });
      var form_data = $(this).serialize();
      if(error ==''){
        $.ajax({
          url: "classes/emp_save.php",
          method:"POST",
          data: form_data,
          success: function(data){
            if(data=='success'){
              $('#empform_table').find("tr:gt(0)").remove();
              $('#error').html('<div class="alert alert-success">Employee Details Saved Successfully..!</div>');
              setTimeout(function() { $('#error').fadeOut('slow');
              window.location.href = "view_list.php";
            }, 3000);
            }
          }
        });
      } else{

      }
    });


  });
</script>

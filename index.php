<!DOCTYPE html>
<html lang="en">
<head>
  <title>AJAX Dinamically Allocated</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">AJAX Dinamically Allocated</h2>
  <div id="first_portion">
  		<div class="form-group">
        	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first"> Portion</label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          	<h5>1</h5>
        </div>
      </div>
  </div>
  <div id="dynamically_allocated" style="margin-bottom: 20px;">
  </div>
</div>

<button type='button' style="margin-left: 80px;" class="btn-xs btn-success" id='add_row' value='' style="margin-top: 3px;" onclick=''>Add Row</button>

<script type="text/javascript">
	
	var counter = 1;
    var name_counter = 1;

    function addCounter()
    {
      counter = counter + 1;
      name_counter = name_counter + 1;    }

    function removeCounter()
    {
      counter = counter - 1;
    }

    $(document).ready(function() 
    {

      //dynamically added selects
      $("#add_row").on("click", function() 
      {
          addCounter();

            var dynamically_created_dropzone = $('<div class="form-group" id="'+counter+'">'
                                                +'<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first"> Portion</label>'
                                                +'<div class="col-md-8 col-sm-8 col-xs-12">'
                                                +'<h5>'+counter+'</h5>'
                                                +'</div>'
                                                +'<div class="col-md-1 col-sm-1 col-xs-2">'
                                                +' <button type="button" class="btn-xs btn-danger btn_remove" id="'+counter+'" onclick="rmv_row(this.id);">X</button>'
                                                +'</div>'
                                                +'</div>');

            $("#dynamically_allocated").append(dynamically_created_dropzone);
        });

    });

  function rmv_row(row_id)
  {
      if(confirm("Are you sure?"))
      {
          $("#"+row_id).remove();
          removeCounter();
          alert("Remove row: "+row_id);
      }
  }

</script>

</body>
</html>

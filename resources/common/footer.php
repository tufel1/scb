

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.2/jquery.min.js" integrity="sha512-TioVFI1HfPAFh7BGAsuCB76vIrmMroWB+yRNKnTan26OBCdpdH9DWYoTxZbjW8kCKH3QDItheAEVso5N7+w75g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(document).ready(function() {
    var count_section = $(".count_section").length;

    $("#addsection").click(function() {
        // Clone the entire section
        var clonedSection = $(".section_1").clone();

        // Increment the section counter
        count_section++;

        // Update the IDs and names in the cloned section
        clonedSection.find("[id]").each(function() {
            var currentId = $(this).attr("id");
            $(this).attr("id", currentId.replace("_1", "_" + count_section));
        });

        clonedSection.find("[name]").each(function() {
            var currentName = $(this).attr("name");
            $(this).attr("name", currentName.replace("_1", "_" + count_section));
        });

        // Append the cloned section after the last section
        $(".section_1:last").after(clonedSection);
    });

    // 
    $("#table_name").change(function() {
        var table_id = $(this).val();
        console.log(table_id);
        // alert(table_name);
        $.ajax({
            url: "../controllers/dyanamic_form/ajax/rename_ajax.php",
            method: "GET",
            data: {
                table_id: table_id,
                action: "get_sections",
            },
            dataType: "json",
            success: function(data) {
                console.log(data);
                var options = "<option value=''>Select Department</option>";
                for (var i = 0; i < data.length; i++) {
                    const myArray = data[i].split(",");
                    options += "<option value='" + data[i] + "'>" + data[i] +
                        "</option>";
                }
                $("#section_name_1").html(options);
            }
        });
    });

    $('#removerow_1').on('click', function () {
        var rowCount = $('#section_table_1 tbody tr').length;
        if (rowCount !== 1) {
            $('#section_table_1 tbody tr:last').remove();
            count--;
        } else {
            alert("You can't delete the last row.");
        }
    });

    $("#section_name_1").change(function() {
        var selectedValue = $(this).val();
        // console.log(table_id);
        // var newLabelName = "label_name_1" + selectedValue;
        var label_name_id = "label_name_1_"+selectedValue;
        var field_name_id = "field_name_1_"+selectedValue;
        var field_type_id = "field_type_1_"+selectedValue;
        var field_priority_id = "field_priority_1_"+selectedValue;
        var field_event_id = "field_event_1_"+selectedValue;
        var field_css_id = "field_css_1_"+selectedValue;

        // names
        // var newName = "label_name_" + selectedValue + "[]";
        var label_name_name = "label_name_"+selectedValue+ "[]";
        var field_name_name = "field_name_"+selectedValue+ "[]";
        var field_type_name = "field_type_"+selectedValue+ "[]";
        var field_priority_name = "field_priority_"+selectedValue+ "[]";
        var field_event_name = "field_event_"+selectedValue+ "[]";
        var field_css_name = "field_css_"+selectedValue+ "[]";
        // Update the value of the input element
        
        $("#label_name_1").attr({"id": label_name_id,"name": label_name_name});
        $("#field_name_1").attr({"id": field_name_id,"name": field_name_name});
        $("#field_type_1").attr({"id": field_type_id,"name": field_type_name});
        $("#field_priority_1").attr({"id": field_priority_id,"name": field_priority_name});
        $("#field_event_1").attr({"id": field_event_id,"name": field_event_name});
        $("#field_css_1").attr({"id": field_css_id,"name": field_css_name});
    });

    // 
    var count = $(".itemRow").length;
    $('#addrow_1').on('click', function () {
        var section_name_1 = $("#section_name_1").val();
        count++;
        var row = "<tr data-index=" + count +"><td><input class='itemRow' type='checkbox' name='record'></td><td><input type='text' name='label_name_"+section_name_1+"[]' id='label_name_"+count+"_"+section_name_1+"'></td><td><input type='text' name='field_name_"+section_name_1+"[]' id='field_name_"+count+"_"+section_name_1+"'></td><td><input type='text' name='field_type_"+section_name_1+"[]' id='field_type_"+count+"_"+section_name_1+"'></td><td><input type='text' name='field_priority_"+section_name_1+"[]' id='field_priority_"+count+"_"+section_name_1+"'></td><td><input type='text' name='field_event_"+section_name_1+"[]' id='field_event_"+count+"_"+section_name_1+"'></td><td><input type='text' name='field_css_"+section_name_1+"[]' id='field_css_"+count+"_"+section_name_1+"'></td></tr>"

         $('#section_table_1 tbody').append(row);
    });
  });

  function check_section(id){
    // alert("id");
    var checkboxes = $('.section-checkbox.section_' + id);
    console.log(checkboxes);
    // Toggle the checked status of each checkbox
    checkboxes.prop('checked', function(i, value) {
        return !value;
    });
  }

</script>
</body>
</html>

<?php  include('common/header.php'); ?>

<div class="container-fuild m-2">
  <div class="row">
    <div class="col-md-10">
        <form action="test.php" method="POST">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="">Select Table</label>
                    <select class="form-control" name="table_name" id="table_name" style="width:50%">
                        <option value="">Select</option>
                        <?php 
                            $db->select('meta_table_list','*',null,null,null,$limit);
                            $result = $db->getResult();
                            foreach($result as $row) {
                                // SELECT `meta_table_list_id`, `meta_table_name`, `meta_table_section_list` FROM `meta_table_list` WHERE 1
                        ?>
                        <option value="<?php echo $row['meta_table_list_id']; ?>"><?php  echo str_replace('_', ' ', $row['meta_table_name']); ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
        
            <div class="section_1 count_section mb-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="tab">
                                <div class="tablinks p-3" >
                                    <label for="">Select Section</label>
                                    <select class="form-control" name="section_name_1" id="section_name_1" style="width:50%">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 text-end">
                            <p class="btn btn-primary" name="addsection" id="addsection">Add New Section</p>
                            <p class="btn btn-danger" name="removerow_1" id="removerow_1">remove</p>
                        </div>
                    </div>
                
        
                <div id="London" class="tabcontent">
                    <table id="section_table_1" class="table table-bordered table-responsive">
                        <tr>
                            <th>SN</th>
                            <th>Lable</th>
                            <th>Field Name</th>
                            <th>Type</th>
                            <th>priority</th>
                            <th>events</th>
                            <th>css</th>
                        </tr>
                        <tr>
                            <td>
                                <input class="itemRow" type='checkbox' name='record'>
                            </td>
                            <td>
                                <input type="text" name="label_name[]" id="label_name_1">
                            </td>
                            <td>
                                <input type="text" name="field_name[]" id="field_name_1">
                            </td>
                            <td>
                                <input type="text" name="field_type[]" id="field_type_1">
                            </td>
                            <td>
                                <input type="text" name="field_priority[]" id="field_priority_1">
                            </td>
                            <td>
                                <input type="text" name="field_event[]" id="field_event_1">
                            </td>
                            <td>
                                <input type="text" name="field_css[]" id="field_css_1">
                            </td>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="btn btn-primary" name="addrow_1" id="addrow_1">+</p>
                            <p class="btn btn-danger" name="removerow_1" id="removerow_1">-</p>
                        </div>
                    </div>
                    <input type="submit" name="submit" id="submit">
                </div>
            </div>
        </form>
    </div>
  </div>
</div>


<?php  include('common/footer.php'); ?>


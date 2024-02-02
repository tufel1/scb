<?php  include('common/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="../controllers/student/savestudent.php" method="POST">
                <?php         
                    // SELECT `meta_fields_list_id`, `client_id`, `branch_id`, `student_admisssion_request_fields`, `student_admission_request_parent_fields`, `student_admission_fields`, `staff_registarion_fields` FROM `meta_fields_list` WHERE 1
                    
                    $db->select('meta_fields_list','*',null,null,null,null);
                    $result = $db->getResult();
                    foreach ($result as $row) {
                        $row['student_admisssion_request_fields'];
                        // Decode the JSON data from the fields_name column
                        $configData = json_decode($row['student_admisssion_request_fields'], true);
                        // print_r($configData);
                        foreach ($configData as $row) {
                            $fieldsData = $row['field_data'];
                            $studentRegistrationData = $fieldsData['Student_Registration'];
                            foreach ($studentRegistrationData as  $sectionName => $sectionData) {
                    ?>
                    <div class="card tab mt-5">
                        <div class="card-body tablinks">
                            <label for=""><?php echo str_replace('_', ' ', $sectionName); ?></label>
                        </div>
                    </div>
                    <div id="London" class="tabcontent">
                        <div class="row">
                            <?php 
                                foreach ($sectionData['data'] as $field) {
                            ?>
                            <div class="col-md-6">
                                <?php 
                                    echo "<div class='mb-3'>";
                                    echo "<label for='exampleInputEmail1' class='form-label'>{$field['lable_name']}</label>";
                                    echo "<input class='form-control' type=\"{$field['field_type']}\" name=\"{$field['field_name']}\" id=\"{$field['field_name']}\" />";
                                    echo "</div>";
                                ?>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                            }
                        }
                    }
                ?>
                <input type="submit" class="mt-5 mb-5 btn btn-primary" name="createstudent" id="createstudent">
            </form>
        </div>
    </div>
</div>

<?php  include('common/footer.php'); ?>
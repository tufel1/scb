<?php
 // database class
 header('Content-Type: application/json; charset=utf-8');
 ob_start();
 session_start();
 include '../../database/db.php';

if( isset($_POST['submit']) ){
    // echo "yes";
   
    $db = new Database();

    $jsonData = [];
    $title = $_POST['title'];
    foreach ($_POST as $key => $values) {
        if (strpos($key, 'fields_section_') === 0 && is_array($values)) {
            
            // Initialize an array for the current key
            $sectionData = [];
            $cleanedKey = str_replace("fields_section_", "", $key);

             $cleanedKey;
            // Loop through the array and decode each element
            foreach ($values as $value) {
                $fieldData = json_decode(htmlspecialchars_decode($value, ENT_QUOTES), true);
                
                // Assuming $fieldData['lable_name'] and $fieldData['field_type'] are available in the decoded data
                $sectionData[] = $fieldData;
            }

            // Add the data to the main array
            $jsonData[$title][$cleanedKey]['data'] = $sectionData;
        }
    }
    // Encode the final array as JSON
    // $jsonResult = json_encode($jsonData, JSON_PRETTY_PRINT);
    $jsonResult = json_encode([['field_data' => $jsonData]], JSON_PRETTY_PRINT);
    // print_r($jsonResult);
    // exit();

    // SELECT `meta_fields_list_id`, `client_id`, `branch_id`, `student_admisssion_request_fields`, `student_admission_request_parent_fields`, `student_admission_fields`, `staff_registarion_fields` FROM `meta_fields_list` WHERE 1


    $params = [
        "client_id" => $db->escapeString("1"),
        "branch_id" => $db->escapeString("1"),
        "student_admisssion_request_fields" => ($jsonResult),
    ];
    // print_r($params);
    $db->insert('meta_fields_list',$params);

    $response = $db->getResult();
    
    if(!empty($response)){
        header("Location: ../student_registration_form.php?msg=done"); 
    }else{
        header("Location: ../student_registration_form.php?msg=error");
        exit();
        
    }
}
?>
<?php
 // database class
 header('Content-Type: application/json; charset=utf-8');
 ob_start();
 session_start();
 include '../../database/db.php';

 if( isset($_POST['createstudent']) ){
       
        $db = new Database();
        
        // SELECT `sectionID`, `secction_name`, `createdby`, `createddate`, `modifedby`, `modifeddate` FROM `section` WHERE 1
        // std_name
        // std_phone
        // std_dob
        // student_address
        // staff_name
        // staff_department
        // staff_designation

        // SELECT `student_registration_id`, `std_name`, `std_phone`, `std_dob`, `student_address` FROM `student_registration` WHERE 1

        $params = [
            "std_name" =>  $db->escapeString($_POST['std_name']),
            "std_phone" =>  $db->escapeString($_POST['std_phone']),
            "std_dob" =>  $db->escapeString($_POST['std_dob']),
            "student_address" =>  $db->escapeString($_POST['student_address']),
            "student_father_name" =>  $db->escapeString($_POST['student_father_name']),
            "student_father_mobile" =>  $db->escapeString($_POST['student_father_mobile']),
            "student_mother_name" =>  $db->escapeString($_POST['student_mother_name']),
        ];
        // print_r($params);
        $db->insert('student_registion',$params);

        $response = $db->getResult();
        
        if(!empty($response)){
            header("Location: ../student_registration_form.php?msg=done"); 
        }else{
            header("Location: ../student_registration_form.php?msg=error");
            exit();
            
        }
}
?>
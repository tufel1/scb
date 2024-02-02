<?php
 // database class

 header('Content-Type: application/json; charset=utf-8');
 ob_start();
 session_start();
 include '../../../database/db.php';
 include 'error.php';
 include 'success.php';

 
 if(isset($_GET['action'])){
    $db = new Database();
    if($_GET['action'] == "get_sections"){
        $table_id = $_GET['table_id'];
        // $deptId = explode(",",$depat);
        
        // SELECT `meta_table_list_id`, `meta_table_name`, `meta_table_section_list` FROM `meta_table_list` WHERE 1
        
        $db->select('meta_table_list','*',null," meta_table_list_id='{$table_id}' ",'meta_table_list_id ASC',null);
        $result = $db->getResult();
        foreach($result as $row){
            $sectionlists = explode(',', $row['meta_table_section_list']);
        }
        echo json_encode($sectionlists);
    };

 }
?>
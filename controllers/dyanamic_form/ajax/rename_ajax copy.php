<?php
 // database class

 header('Content-Type: application/json; charset=utf-8');
 ob_start();
 session_start();
 include '../../database/database.php';
 include 'error.php';
 include 'success.php';

 
 if(isset($_GET['action'])){

    if($_GET['action'] == "itemdetails"){
        $itemid = $_GET['itemid'];
        $db = new db();
        
        // SELECT `itembdtid`, `item_id`, `item_name`, `item_type`, `item_buy_type`, `item_unit`, `item_category`, `item_HSNCODE`, `item_tax`, `item_current_stock`, `item_price`, `item_max_stock_level`, `item_min_stock_level`, `item_status`, `createdby`, `created_at`, `modifiedby`, `updated_at` FROM `item_bdetails` WHERE 1

        $db->select('item_bdetails','*',null," item_id='{$itemid}' ",' itembdtid ASC',null);
        $result = $db->getResult();
        foreach($result as $row){
            $row[] = $row;
        }
        echo json_encode($row);
    };

    if($_GET['action'] == "department"){
        $depat = $_GET['deptId'];
        $deptId = explode(",",$depat);
        $db = new db();
        // SELECT `desid`, `desname`, `depid`, `created_at`, `updated_at` FROM `designations` WHERE 1
        // SELECT `desid`, `desname`, `depid`, `created_at`, `updated_at` FROM `designations` WHERE 1

        $db->select('designations','*',null," depid='{$deptId[0]}' ",'desid ASC',null);
        $result = $db->getResult();
        foreach($result as $row){
            $subDepartments[] = $row['desid'].",".$row['desname'];
        }
        echo json_encode($subDepartments);
    };

 }
?>
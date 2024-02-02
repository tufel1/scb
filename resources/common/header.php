<?php 
    include('../database/db.php');

    $db = new Database();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    body {
        font-family: Arial;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        /* width: 30%; */
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        padding: 6px 12px;
        border: 1px solid #ccc;
        /* border-top: none; */
    }
    </style>
</head>

<body>
    <!-- <nav class="nav justify-content-center  ">
        <a class="nav-link active" href="student_registration_form.php"
            aria-current="page">student_registration_form</a>
        <a class="nav-link" href="toggle_enable_disable_student_form.php">toggle_enable_disable_student_form</a>
        <a class="nav-link disabled" href="#">Disabled link</a>
    </nav> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SCB</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Forms
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="student_registration_form.php">Student</a></li>
                        <li><a class="dropdown-item" href="form_dynamic.php?type=Student_Registration">Student</a></li>
                        <li><a class="dropdown-item" href="form_dynamic.php?type=Staff_registartion">Staff</a></li>
                    </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Toogles
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="toogle.php">Student</a></li>
                        <li><a class="dropdown-item" href="toogle_dynamic.php?type=Student_Registration">Student</a></li>
                        <li><a class="dropdown-item" href="toogle_dynamic.php?type=Staff_registartion">Staff</a></li>
                    </ul>
                    </li>
                    
                </ul>
           
            </div>
        </div>
    </nav>
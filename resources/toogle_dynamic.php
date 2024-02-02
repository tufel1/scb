<?php include('common/header.php'); ?>

<div class="container-fuild m-2">
    <div class="row">
        <div class="col-md-12">
            <form action="../controllers/student/savefieldlist.php" method="POST">
                <?php
                $i = 1;
                $configJson = file_get_contents('../json/main_config.json');
                $configData = json_decode($configJson, true);
                $type = $_GET['type'];
                foreach ($configData as $row) {
                    $fieldsData = $row['field_data'];
                    $studentRegistrationData = $fieldsData[$type];
                    foreach ($studentRegistrationData as $sectionName => $sectionData) {
                        ?>
                        <div class="card tab mt-5 w-25">
                            <div class="card-body tablinks">
                                <input type="checkbox" name="section_<?php echo $sectionName; ?>"
                                    onclick="check_section('<?php echo $sectionName; ?>')"
                                    id="section_<?php echo $sectionName; ?>">
                                <label for="">Section:
                                    <?php echo str_replace('_', ' ', $sectionName); ?>
                                </label>
                            </div>
                        </div>
                        <div id="London" class="tabcontent">
                            <table class="table table-response ">
                                <tr>
                                    <th>SN</th>
                                    <th>Lable</th>
                                    <th>Type</th>
                                    <th>priority</th>
                                </tr>
                                <?php
                                $i = 1;
                                foreach ($sectionData['data'] as $field) {
                                    $req_type = $field['req_type'];
                                    ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="section-checkbox section_<?php echo $sectionName; ?>"
                                                name="fields_section_<?php echo $sectionName; ?>[]"
                                                id="fields_section_<?php echo $sectionName; ?>"
                                                value="<?php echo htmlspecialchars(json_encode($field), ENT_QUOTES, 'UTF-8'); ?>"
                                                <?php echo ($req_type == "yes") ? "checked" : ""; ?>>
                                        </td>
                                        <td>
                                            <?php echo $field['lable_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $field['field_type']; ?>
                                        </td>
                                        <td><input type="number"></td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                                <tr>
                                </tr>
                            </table>
                        </div>
                    <?php
                    }
                }
                ?>
                <input type="text" name="title" id="title" value="<?php echo $type; ?>">
                <input type="submit" class="mt-3" value="submit" name="submit" id="submit">
            </form>
        </div>
    </div>
</div>

<?php include('common/footer.php'); ?>
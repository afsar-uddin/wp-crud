<?php 

// data insert
function da_ems_add_callback() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'crud';
    $msg = '';
    
    if (isset($_REQUEST['submit'])) {
        $wpdb->insert("$table_name", [
            "emp_id" => $_REQUEST['emp_id'],
            'emp_name' => $_REQUEST['emp_name'],
            'emp_email' => $_REQUEST['emp_email'],
            'emp_dept' => $_REQUEST['emp_dept']
        ]);
        
        if ($wpdb->insert_id > 0) {
            $msg = "Saved Successfully";
        } else {
            $msg = "Failed to save data";
        }
    }
    
    ?>
        <div class="wrap">
            <h4 id="msg"><?php echo $msg; ?></h4>
            <form method="post">
                <table>
                    <tr>
                        <td><label for="emp_id">EMP ID : </label></td>
                        <td><input type="text" id="emp_id" name="emp_id" placeholder="EMP Id" required></td>
                    </tr>
                    <tr>
                        <td><label>Name : </label></td>
                        <td><input type="text" name="emp_name" placeholder="Enter Name" required></td>
                    </tr>
                    <tr>
                        <td><label>Email : </label></td>
                        <td><input type="email" name="emp_email" placeholder="Enter Email" required></td>
                    </tr>
                    <tr>
                        <td><label>Department : </label></td>
                        <td><input type="text" name="emp_dept" placeholder="Enter Department" required></td>
                    </tr>
                </table>
                <p>
                    <button type="submit" name="submit">Submit</button>
                </p>
            </form>
        </div>
        <?php
}

// data retrive to display from crud table
function da_ems_list_callback() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'crud';
    $employee_list = $wpdb->get_results($wpdb->prepare("select * FROM $table_name", ""), ARRAY_A);

    if (count($employee_list) > 0): 
    
    ?>
        <div>
            <table border="1" cellpadding="10">
                <tr>
                    <th>S.No.</th>
                    <th>EMP ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1;
                foreach ($employee_list as $index => $employee): ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $employee['emp_id']; ?></td>
                        <td><?php echo $employee['emp_name']; ?></td>
                        <td><?php echo $employee['emp_email']; ?></td>
                        <td><?php echo $employee['emp_dept']; ?></td>
                        <td>
                            <a href="admin.php?page=update-emp&id=<?php echo $employee['id']; ?>">Edit</a>
                            <a href="admin.php?page=delete-emp&id=<?php echo $employee['id']; ?>">Delete</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
        <?php

    else:

        echo "<h2>Employee Record Not Found</h2>";
    
    endif;
}
<?php 

function da_ems_list_callback() {
    echo "list";
}

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
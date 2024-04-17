<?php 

function da_ems_list_callback() {
    echo "list";
}

function da_ems_add_callback() {
    ?>
        <div class="wrap">
            <form method="post">
                <p>
                    <label for="emp_id">EMP ID : </label>
                    <input type="text" id="emp_id" placeholder="EMP Id" required>
                </p>
                <p>
                    <label>Name</label>
                    <input type="text" name="emp_name" placeholder="Enter Name" required>
                </p>
                <p>
                    <label>Email</label>
                    <input type="email" name="emp_email" placeholder="Enter Email" required>
                </p>
                <p>
                    <label>Department</label>
                    <input type="text" name="emp_dept" placeholder="Enter Department" required>
                </p>
                <p>
                    <button type="submit" name="submit">Submit</button>
                </p>
            </form>
        </div>
    <?php
}
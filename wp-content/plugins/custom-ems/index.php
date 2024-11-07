<?php
/*
 * Plugin Name: Custom EMS
 * Description: My plugin to explain the CRUD functionality.
 * Version: 1.0
 * Author: Md. Mehedi Hasan
 * Plugin URI:
 * Author URI:
 */

register_activation_hook(__FILE__, callback: 'table_creator');

function table_creator() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'ems';
    
    $sql = "DROP TABLE IF EXISTS $table_name;
            CREATE TABLE $table_name (
                id mediumint(11) NOT NULL AUTO_INCREMENT,
                emp_id varchar(50) NOT NULL,
                emp_name varchar(250) NOT NULL,
                emp_email varchar(250) NOT NULL,
                emp_dept varchar(250) NOT NULL,
                PRIMARY KEY (id)
            ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

add_action('admin_menu', 'da_display_ems_menu');
function da_display_ems_menu()
{

    add_menu_page('EMS', 'EMS', 'manage_options', 'emp-list', 'da_ems_list_callback');
    add_submenu_page('emp-list', 'Employee List', 'Employee List', 'manage_options', 'emp-list', 'da_ems_list_callback');
    add_submenu_page('emp-list', 'Add Employee', 'Add Employee', 'manage_options', 'add-emp', 'da_ems_add_callback');

}

function da_ems_add_callback()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'ems';
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
<h4 id="msg"><?php echo $msg; ?></h4>

<form method="post">

    <p>
        <label>EMP ID</label>
        <input type="text" name="emp_id" placeholder="Enter ID" required>

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
<?php }

function da_ems_list_callback(){

    echo "<h2>Employee List</h2>";
}
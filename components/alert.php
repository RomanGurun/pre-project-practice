<?php
if (isset($success_msg)) {
    foreach ($success_msg as $msg) {
        echo '<script>swal("' . $success_msg . '","","success");</script>';

    }
}
if (isset($warning_msg)) {
    foreach ($warning_msg as $msg) {
        
        echo '<script>swal("' . $warning_msg . '","","warning");</script>';

    }
}
if (isset($error_msg)) {
    foreach ($error_msg as $msg) {
        echo '<script>swal("' . $error_msg . '","","error");</script>';

    }
}
if (isset($info_msg)) {
    foreach ($info_msg as $msg) {
        echo '<script>swal("' . $info_msg . '","","info");</script>';

    }
}
?>
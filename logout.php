<?php
session_start();
unset($_SESSION['email']);
session_destroy();
echo ("<script>
window.location.href='index.php';
</script>");
die();

?>
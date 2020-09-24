<?php
session_start();
session_destroy();
header('location: login.php');
?>
<script>
    apagarAviso();
</script>

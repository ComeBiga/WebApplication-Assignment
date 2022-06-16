<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['id'])

    ?>
    <script>
        location.href = "../";
    </script>
    <?php
?>
<?php
    function verifyLogin() {
        if (!isset($_SESSION['basicAuth'])) { ?>
            <script>
                window.location = "<?= $GLOBALS['www']; ?>?m=2";
            </script>
    	<?php }
    }
?>

<div id="footer">Copyright 2013, Widget Corp</div>
    </body>
</html>
<?php
    // 5. Close connection
    mysql_close($connection);
    if (isset($connection)){
        mysql_close($connection);
    }
?>
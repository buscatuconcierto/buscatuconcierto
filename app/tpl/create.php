        
<section>
    <h1>KFrramwork</h1>
    <h2>App installer v1.0</h1>

        <h2> Creating DB </h2>
        <?php
        /**
         * @Autor Carlos Vicente
         * @Autor Carlosvicente100@gmail.com
         * Copyright 2015 ~ M7 DAW */
        echo "EEE";
        $config = Registry::getInstance();
        $dbhost = $conf->dbhost;
        $dbuser = $conf->dbuser;
        $dbpass = $conf->dbpass;

        $conn = mysql_connect($dbhost, $dbuser, $dbpass);
        if (!$conn) {
            die('Could not connect: ' . mysql_error());
        }

        echo 'Connected successfully';
        $sql = 'CREATE Database ' . $conf->dbname;
        $retval = mysql_query($sql, $conn);
        if (!$retval) {
            die('Could not create database: ' . mysql_error());
        }
        echo "Database " . $conf->dbname . "created successfully\n";
        mysql_select_db($conf->dbname);
        mysql_close($conn);

        $command = "mysql -u " . $dbuser . " -p " . $dbpass . " -h " . $dbhost . " -D " . $dbname . " < app.sql";

        $output = shell_exec($command . '/shellexec.sql');
        ?>
</section>
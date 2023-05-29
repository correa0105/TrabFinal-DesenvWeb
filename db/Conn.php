<?php

class Connection {

    private static function open() {
        $localhost = "localhost";
        $user = "root";
        $password = "uSN@2101";
        $database = "tisystemphp";

        $conn = mysqli_connect($localhost, $user, $password, $database);

        if ($conn)
            return $conn;
        else
            return NULL;
    }

    private static function close($conn) {
        mysqli_close($conn);
    }

    public static function execut($sql) {
        $conn = self::open();
        if ($conn) {
            mysqli_query($conn, $sql);
            self::close($conn);
        }
    }

    public static function consult($sql) {
        $conn = self::open();
        if ($conn) {
            $result = mysqli_query($conn, $sql);
            self::close($conn);
            return $result;
        } else {
            return NULL;
        }
    }

}
    
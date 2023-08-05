<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "prueba_pf_2");
} catch (mysqli_sql_exception $e) {
    echo "Error:" . $e->getMessage();
}
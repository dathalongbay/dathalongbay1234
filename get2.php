<?php
/**
 * Created by PhpStorm.
 * User: T3H
 * Date: 5/21/2019
 * Time: 8:21 PM
 */
// URL http://localhost/dathalongbay1234/get2.php?name=abc&age=18&id=5
// nhưng tham số xuất hiện sau ? có thể lấy được bằng $_GET
// các tham số sau ? phân tách bởi &
echo "<pre>";
print_r($_GET);
echo "</pre>";
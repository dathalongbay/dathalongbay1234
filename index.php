<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
$weight = $height = '';
if (isset($_POST["height"]) && isset($_POST["weight"])) {

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $weight = $_POST["weight"];
    $height = $_POST["height"];

    $bmi = $weight/($height*$height);

    echo "<br>Chỉ sô BMI là : " . $bmi;

    if ($bmi < 18.5) {
        echo "<br> Phân loại gầy";
    } elseif ( ($bmi >= 18.5) && ($bmi <= 24.9 ) ) {
        echo "<br>Bình thường";
    } elseif ( ($bmi >= 25) && ($bmi <= 29.9 )) {
        echo "<br> Hơi béo";
    } elseif ( ($bmi >= 30) && ($bmi <= 34.9 )) {
        echo "<br> Béo phì độ 1";
    } elseif ( ($bmi >= 35) && ($bmi <= 39.9 )) {
        echo "<br> Béo phì độ 2";
    } elseif ($bmi >= 40) {
        echo "<br> Béo phì độ 3";
    } else {
        echo "<br> Không xác định";
    }


}
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Tính chỉ số BMI</h1>

            <form name="bmi" action="" method="post">
                <div class="form-group">
                    <label >Chiều cao ( cm )</label>
                    <input type="text" class="form-control" name="height" value="<?php echo $height ?>">
                </div>
                <div class="form-group">
                    <label >Cân nặng ( kg ) </label>
                    <input type="text" class="form-control" name="weight" value="<?php echo $weight ?>">
                </div>
                <button type="submit" name="calc" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>




</body>
</html>
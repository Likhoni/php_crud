<?php
require_once "conn.php";

if (isset($_POST["name"]) && isset($_POST["mobile_number"]) && isset($_GET["id"])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
    $id = intval($_GET['id']); 

    $sql = "UPDATE students SET `name` = '$name', `mobile_number` = '$mobile_number' WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php"); 
        exit;
    } else {
        echo "Something went wrong. Please try again later.";
    }
} else {
    echo "Required data is missing.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>

<body>
    <div align="center">
        <div class="formbold-main-wrapper">
            <?php
            require_once "conn.php";

            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                $sql_query = "SELECT * FROM students WHERE id = $id";

                if ($info = $conn->query($sql_query)) {
                    if ($row = $info->fetch_assoc()) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $mobile_number = $row['mobile_number'];
            ?>
                        <form action="update.php?id=<?php echo $id; ?>" method="POST">
                            <div class="formbold-form-title">
                                <h2 class="">Student Form</h2>
                            </div>

                            <div class="formbold-input-flex">
                                <div style="padding-bottom: 10px;">
                                    <label for="name" class="formbold-form-label"> Student Name </label>
                                    <input type="text" name="name" id="name" value="<?php echo $name; ?>" required class="formbold-form-input" />
                                </div>
                                <div style="padding-bottom: 10px;">
                                    <label for="mobile_number" class="formbold-form-label"> Mobile Number </label>
                                    <input type="text" name="mobile_number" id="mobile_number" value="<?php echo $mobile_number; ?>" class="formbold-form-input" />
                                </div>
                            </div>
                            <input type="submit" name="submit" id="submit" value="Update">
                        </form>
            <?php
                    } else {
                        echo "No student found with the provided ID.";
                    }
                } else {
                    echo "Error executing query.";
                }
            } else {
                echo "No student ID provided.";
            }
            ?>
        </div>
    </div>

</body>

</html>

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
            <form action="adddata.php" method="POST">
                <div class="formbold-form-title">
                    <h2 class="">Student Form</h2>
                </div>

                <div class="formbold-input-flex">
                    <div style="padding-bottom: 10px;">
                        <label for="name" class="formbold-form-label">
                            Student name
                        </label>
                        <input type="text" name="name" class="formbold-form-input" />
                    </div>
                    <div style="padding-bottom: 10px;">
                        <label for="mobile_number" class="formbold-form-label"> Mobile Number </label>
                        <input type="text" name="mobile_number" id="mobile_number" class="formbold-form-input" />
                    </div>
                </div>
                <input type="submit" name="submit" id="submit">
                <!-- <button class="formbold-btn">Register Now</button> -->
            </form>
        </div>

        <section style="padding-top: 50px;">
            <div>
                <table border="1" cellspacing="0" cellpadding="10">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM students";
                        if ($info = $conn->query($sql_query)) {
                            while ($row = $info->fetch_assoc()) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $mobile_number = $row['mobile_number'];


                        ?>
                                <tr class="trow">
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $mobile_number ?></td>
                                    <td>
                                        <a href="update.php?id=<?php echo $id; ?>" style="color: white; background-color: green; padding: 5px 10px; text-decoration: none; border-radius: 5px;">Edit</a>
                                        <a href="delete.php?id=<?php echo $id; ?>" style="color: white; background-color: red; padding: 5px 10px; text-decoration: none; border-radius: 5px;">Delete</a>
                                    </td>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

</body>

</html>
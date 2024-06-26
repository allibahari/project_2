<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزئیات کارمند</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .employee-details {
            border: 1px solid #ccc;
            padding: 20px;
            margin-top: 20px;
        }
        .employee-details img {
            max-width: 200px;
            max-height: 200px;
            margin-top: 10px;
        }
  
    </style>
</head>
<body>
    <div  class="container">
        <h1 class="mt-4 mb-4">جزئیات کارمند</h1>
<a style="text-decoration: none; color:red;" href="list_employees.php"><h4>بازگشت به صفحه اصلی</h4></a>
        <?php
        include "dashboard.php";
        if (isset($_GET['id'])) {
            $employee_id = $_GET['id'];
            include "config.php";
            // کوئری برای دریافت جزئیات کارمند خاص
            $sql = "SELECT * FROM employees WHERE id = $employee_id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="employee-details">';
                    echo '<img style="border-radius: 5px;" src="' . $row["photo_path"] . '" alt="عکس پرسنلی">';
                    echo '<p><strong>نام: </strong>' . $row["first_name"] . '</p>';
                    echo '<p><strong>نام خانوادگی: </strong>' . $row["last_name"] . '</p>';
                    echo '<p><strong>کد ملی: </strong>' . $row["national_code"] . '</p>';
                    echo '<p><strong>تاریخ تولد: </strong>' . $row["birth_date"] . '</p>';
                    echo '<p><strong>سمت شغلی: </strong>' . $row["job_title"] . '</p>';
        
                    echo '</div>';
                }
            } else {
                echo "<p class='mt-4 mb-4'>هیچ اطلاعاتی یافت نشد.</p>";
            }
            $conn->close();
        } else {
            echo "<p class='mt-4 mb-4'>خطا در دریافت اطلاعات.</p>";
        }
        ?>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

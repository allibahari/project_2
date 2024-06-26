<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست کارمندان</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .employee-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            display: flexbox;
        }
        .employee-details {
            margin-top: 10px;
        }
        .employee-image {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">لیست کارمندان</h1>
        <br>
        <form action="search.php" method="get">
            <div class="form-group">
                <label for="keyword">جستجو بر اساس کد ملی یا نام و نام خانوادگی:</label>
                <input type="text" class="form-control" id="keyword" name="keyword">
        
            <button type="submit" class="btn btn-primary">جستجو</button>
        </form>
        </div>
        <?php
        include "config.php";
        include "dashboard.php";

        // کوئری برای دریافت اطلاعات کارمندان
        $sql = "SELECT * FROM employees ORDER BY last_name ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="employee-box">';
                echo '<div class="row">';
                echo '<div class="col-md-3">';
                echo '<img src="' . $row["photo_path"] . '" alt="عکس پرسنلی" class="employee-image">';
                echo '</div>';
                echo '<div class="col-md-9">';
                echo '<h3>' . $row["first_name"] . ' ' . $row["last_name"] . '</h3>';
                echo '<p><strong>کد ملی: </strong>' . $row["national_code"] . '</p>';
                echo '<p><strong>تاریخ تولد: </strong>' . $row["birth_date"] . '</p>';
                echo '<p><strong>سمت شغلی: </strong>' . $row["job_title"] . '</p>';
                echo '<a href="employee_details.php?id=' . $row["id"] . '" class="btn btn-primary">نمایش جزئیات</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p class='mt-4 mb-4'>هیچ کارمندی یافت نشد.</p>";
        }
        $conn->close();
        ?>

    
    </div>

    <!-- Link Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

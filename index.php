<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
    <h1 class="mt-5">รายชื่อนักเรียน</h1>
    <a href="insert.php" class="btn btn-success">เพิ่มข้อมูลนักเรียน</a>
    <hr>
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
            <th>#</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>Email</th>
            <th>เบอร์โทร</th>
            <th>ที่อยู่</th>
            <th>ข้อมูลการเพิ่มข้อมูล</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>

        <tbody>
            <?php 

                include_once('functions.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                while($row = mysqli_fetch_array($sql)) {
            ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone_number']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['posting_date']; ?></td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>

            <?php 

                }
            ?>
        </tbody>
    </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
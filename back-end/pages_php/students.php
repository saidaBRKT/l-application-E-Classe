<?php

$students = [
    [
        'img' => '../images/student.jpg',
        'name' => 'name1',
        'email' => 'user@email.com',
        'phone' => '7305477760',
        'number' => '1234567305477760',
        'date' => '08-Dec, 2021',
    ],
    [
        'img' => '../images/student.jpg',
        'name' => 'name2',
        'email' => 'user@email.com',
        'phone' => '7305477760',
        'number' => '1234567305477760',
        'date' => '08-Dec, 2021',
    ],
    [
        'img' => '../images/student.jpg',
        'name' => 'name3',
        'email' => 'user@email.com',
        'phone' => '7305477760',
        'number' => '1234567305477760',
        'date' => '08-Dec, 2021',
    ],
   

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_total.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!---->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body class="body">
    <main class="container-fluid w-100">
        <div class="row d-flex flex-nowrap ">        
        <?php include 'sidebar.php' ?>
        <div class="container-fluid col2 col-auto col-sm-9 col-md-10 d-flex flex-column">
        <?php include 'header.php' ?>

        <div class="d-flex flex-wrap flex-sm-nowrap me-2 ">
            <div class="d-flex flex-grow-1 justify-content-between ">
                <h2>Students list</h2>
                <div class="caption d-flex align-items-center">
                    <i class="far fa-sort"></i>
                    <span class="plus d-flex d-sm-none "><i class="fas fa-plus"></i></span>
                </div>
            </div>
            <DIV class="button d-none d-sm-flex rounded">
                <button type="button" class="btn text-white w-100 ">ADD NEW STUDENT</button>
            </DIV>
        </div>

        <div class="container-fluid px-0 mx-0">
            <div class=" table-responsive ">
                <table class="table  ">
                    <thead class="student">
                        <tr class="center_t ">
                            <th>.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Enroll Number</th>
                            <th>Date of admission</th>
                            <th>.</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
            foreach($students as $key)
            {
            echo "<tr class='ligne center_t'>
            <td class='debut'><img src='{$key['img']}' alt='students'/></td>
            <td class='pt-2'>{$key['name']}</td>
            <td class='pt-2'>{$key['email']}</td>
            <td class='pt-2'>{$key['phone']}</td>
            <td class='pt-2'>{$key['number']}</td>
            <td class='pt-2'>{$key['date']}</td>
            <td class='action fin pt-4'>
            <div  class='d-flex'>
            <span title='Modifier' class='pe-3 text-primary'> <i class='fal fa-pen text-info'></i> </span>
            <span title='Modifier'> <i class='fal fa-trash text-info mx-1'></i> </span>
            </div>
            </td>
            </tr>"; 
            }
            ?>         
                    </tbody>
                </table>
            </div>
        </div>

        </div>
    </div>
    </main>
</body>

</html>
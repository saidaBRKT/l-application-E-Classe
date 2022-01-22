<?php

$payments = [
    [
        'Name' => 'Karthi1',
        'Payment schdule' => 'First',
        'Bill Number' => '00012223',
        'Amount Paid' => 'DHS 100.000',
        'Balance' => 'DHS 100.000',
        'Date' => '05-Jan-2022',
    ],
    [
        'Name' => 'Karthi2',
        'Payment schdule' => 'First',
        'Bill Number' => '00012223',
        'Amount Paid' => 'DHS 100.000',
        'Balance' => 'DHS 100.000',
        'Date' => '05-Jan-2022',
    ],
    [
        'Name' => 'Karthi3',
        'Payment schdule' => 'First',
        'Bill Number' => '00012223',
        'Amount Paid' => 'DHS 100.000',
        'Balance' => 'DHS 100.000',
        'Date' => '05-Jan-2022',
    ],
    [
        'Name' => 'Karthi4',
        'Payment schdule' => 'First',
        'Bill Number' => '00012223',
        'Amount Paid' => 'DHS 100.000',
        'Balance' => 'DHS 100.000',
        'Date' => '05-Jan-2022',
    ],
  
   
   

];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_total.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body class="body">
    <main class="container-fluid">
    <div class="row d-flex flex-nowrap ">        
        <?php include 'sidebar.php' ?>
        <div class="container-fluid col2 col-auto col-sm-9 col-md-10 d-flex flex-column">
        <?php include 'header.php' ?>

                <div class="d-flex flex-wrap flex-sm-nowrap me-2 ">
                    <div class="d-flex flex-grow-1 justify-content-between ">
                        <h2>Payment Details</h2>
                        <div class="caption d-flex align-items-center">
                            <i class="far fa-sort"></i>
                        </div>
                    </div>
                </div>

                <div class="container-fluid px-0 mx-0">
                    <div class=" table-responsive ">
                        <table class="table payment">

                            <thead>
                                <tr class="center_t ">
                                    <th>Name</th>
                                    <th>Payment schdule</th>
                                    <th>Bill Number</th>
                                    <th>Amount Paid</th>
                                    <th>Balance Amount</th>
                                    <th>Date</th>
                                    <th>.</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
            foreach($payments as $key)
            {
            echo "<tr class='ligne center_t'>
            <td>{$key['Name']}</td>
            <td>{$key['Payment schdule']}</td>
            <td>{$key['Bill Number']}</td>
            <td>{$key['Amount Paid']}</td>
            <td>{$key['Balance']}</td>
            <td>{$key['Date']}</td>
            <td class='action'> <span> <i class='far fa-eye '></i></span> </td>
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
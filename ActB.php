<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hr{
            padding:50px;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Registration Successful</h4>
        </div>
        <div class="card-body">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $a = $_POST['fullname'];
                $b = $_POST['days'];
                $c = $_POST['number'];
                $d = $_POST['cash'];

                $gp = $b * $c;
                $tax = $gp * 0.02;
                $sss = $gp * 0.015;
                $pagibig = 50;

                $ded = $tax + $sss + $pagibig + $d;

                $tot = $gp - $ded;

               
            } else {
                echo "<div class ='alert alert-danger'> NO DATA RECEIVED.</div>";
                exit;
            }
            

            ?>

            <p class="lead">Here are the details you submitted:</p>
           
            <ul class="list-group">
                <li class="list-group-item"><strong>Employee Name:</strong> <?=$a;?>  </li>
                <li class="list-group-item"><strong>Total Days Worked:</strong> <?=$b;?>  </li>
                <li class="list-group-item"><strong>Daily Rate: ₱</strong> <?=$c;?>  </li>
                <hr>
                <li class="list-group-item"><strong>Grosspay: ₱</strong> <?=$gp;?>  </li>
                <li class="list-group-item"><strong>Tax (2%): ₱</strong> <?=$tax;?>  </li>
                <li class="list-group-item"><strong>SSS (1.5%): ₱</strong> <?=$sss;?>  </li>
                <li class="list-group-item"><strong>Pag_IBIG: ₱</strong> <?=$pagibig;?>  </li>
                <li class="list-group-item"><strong>Cash Advance: ₱</strong> <?=$d;?>  </li>
                <hr>
                <li class="list-group-item"><strong>Total Deduction: ₱</strong> <?=$ded;?>  </li>
                <li class="list-group-item"><strong>Net Pay: ₱</strong> <?=$tot;?>  </li>
                
            </ul>

            <div class="text-center mt-4">
                <a href="ActA.php" class="btn btn-primary" >Back</a>
                <button onclick="window.print()">Print Payslip</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
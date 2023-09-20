<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break on Condition</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.. -->


    <div class="container mt-5">
        <style>
            .styled-div {
                border: 1px solid #ccc;
                border-radius: 10px;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }
        </style>

        <div class="container mt-5 ">
            <div class="row">
                <div class="col-sm-4 card mx-auto styled-div">
                    <h1 class="text-center text-primary">Task-3</h1>
                    <hr class="text-primary">


                    <?php
                    $firstNumber = 0;
                    $secondNumber = 1;
                    $countNumber = 0;

                    while ($countNumber < 10) {
                        $fibonacciNumber = $firstNumber;

                        if ($fibonacciNumber > 100) {
                            break;
                        }

                        echo $fibonacciNumber . ", ";

                        // Calculate the next Fibonacci number
                        $next = $firstNumber + $secondNumber;
                        $firstNumber = $secondNumber;
                        $secondNumber = $next;

                        $countNumber++;
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
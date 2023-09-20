<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fibonacci Series printing using a Function</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print them by calling the function. -->


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
                    <h1 class="text-center text-primary">Task-4</h1>
                    <hr class="text-primary">


                <?php
                    function printFibonacci($n)
                    {
                        $first = 0;
                        $second = 1;
                        for ($i = 0; $i < $n; $i++) {
                            echo $first . ", ";
                            $next = $first + $second;
                            $first = $second;
                            $second = $next;
                        }
                    }

                    printFibonacci(15);
                ?>


                </div>
            </div>
        </div>
    </div>
</body>

</html>
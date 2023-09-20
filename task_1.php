<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping with Increment using a Function</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<!-- Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print. Also do the same using while loop and do-while loop also. -->
     

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
                    <h1 class="text-center text-primary">Task-1</h1>
                    <hr class="text-primary">

                    <?php
                    // Function to print even numbers using a for loop
                    function printEvenNumbersWithForLoop($start, $end, $step)
                    {
                        echo "<div class='output text-success'><strong>Using for loop:</strong><br>";
                        for ($i = $start; $i <= $end; $i += $step) {
                            echo $i . ", ";
                        }
                        echo "</div> <br/> <hr/>";
                    }

                    // Function to print even numbers using a while loop
                    function printEvenNumbersWithWhileLoop($start, $end, $step)
                    {
                        echo "<div class='output text-success'><strong>Using while loop:</strong><br>";
                        $i = $start;
                        while ($i <= $end) {
                            echo $i . ", ";
                            $i += $step;
                        }
                        echo "</div> <br/> <hr/>";
                         

                    }

                    // Function to print even numbers using a do-while loop
                    function printEvenNumbersWithDoWhileLoop($start, $end, $step)
                    {
                        echo "<div class='output text-success'><strong>Using do-while loop:</strong><br>";
                        $i = $start;
                        do {
                            echo $i . ", ";
                            $i += $step;
                        } while ($i <= $end);
                        echo "</div>";
                    }

                    // Call the functions to print even numbers
                    printEvenNumbersWithForLoop(2, 20, 2);
                    printEvenNumbersWithWhileLoop(2, 20, 2);
                    printEvenNumbersWithDoWhileLoop(2, 20, 2);
                    ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
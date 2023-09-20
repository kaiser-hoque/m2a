<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skip Multiples of 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Skip Multiples of 5 Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the loop encounters a multiple of 5, it should skip that number using the continue statement and continue to the next iteration. -->


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
                    <h1 class="text-center text-primary">Task-2</h1>
                    <hr class="text-primary">


                    <?php
                    for ($i = 1; $i <= 50; $i++) {
                        if ($i % 5 === 0) {
                            continue;
                        }
                        echo $i . PHP_EOL;
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
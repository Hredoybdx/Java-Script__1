<html>
    <head>
        <title>Try jQuery</title>
        <script src="jquery-3.1.1.min.js"></script>
        <script src="script.js"></script>
        <style>

        </style>
        <script>
            jQuery(document).ready(myFunc);
        </script>
    </head>
    <body>
        <div id="myDiv">

            <?php
            for ($i = 0; $i < 3; $i++) {
                echo "<h1>Hello jQuery! $i</h1>";
            }
            ?>


        </div>
    </body>
</html>

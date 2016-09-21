<!DOCTYPE html>
<html>
    <head>
        <script src="script.js"></script>
        <title>JS</title>
    </head>
    <body>

        <div id="js"></div>

        <script>


            function add_me(num1, num2) {
                total = num1 + num2;
                return total;
            }

            // console.log(10 + 10);


            document.getElementById('js').innerHTML =
                    add_me(10, 20);

            person = null; // undefined
            console.log(add_me(10, 30)); // not object it will null
            console.log(add_me(100, 100)); // not object it will null
        </script>
    </body>
</html>
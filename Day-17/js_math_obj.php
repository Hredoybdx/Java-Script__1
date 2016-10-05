<html>
    <head>
        <title>JS</title>
    </head>
    <body>
        <script>
            function showName() {

                return 'Mr. Rahim';
                //document.write('Mr. Rahim');
            }
            //document.write(showName());
            showName();









            var num = -10.5;
            //var new_num = Math.abs(num);
            var new_num = Math.abs(num); // 10.61

            var new_num2 = Math.floor(new_num); // 10
            var new_num3 = Math.ceil(new_num); // 11
            var new_num4 = Math.round(new_num); // 11

            //document.write(new_num4);

            //document.write(Math.pow(2, 4));






            var num1 = prompt('Please type first number: ');
            var num2 = prompt('Please type second number: ');

            var new_num1 = parseInt(num1);
            var new_num2 = parseInt(num2);

            //document.write('Total: ' + (new_num1 + new_num2));
            document.write(new_num1 + ' to the power ' + new_num2 + ' : ');
            document.write(Math.pow(new_num1, new_num2));










        </script>

    </body>
</html>


<html>
    <head>
        <title>JS</title>
    </head>
    <body>
        <script>

            var student = ['Rahim', 10, 900]; // 0 1 2
            var data = '';
            // i = 0 1 2

            for (var i = 0; i < student.length; i++) {

                //document.write(student[i] + '<br>');
                data = data + student[i] + '<br>';

            }

            document.write(data);

            var num = "A";
            num += "B";
            num += "C";
            document.write(num);
        </script>
        
        
    </body>
</html>

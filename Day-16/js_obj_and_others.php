<html>
    <head>
        <title>JS</title>
    </head>
    <body>
        <script>

            // JS Object
            function myObj() {
                this.full_name = 'Mr. Rahim';
                this.roll = 10;
                this.myMet = function () {
                    return 'Hello';
                };
            }

            var student = new myObj();
            student.full_name = 'Mr. Karim';
            document.write(student.full_name);


            var student2 = new myObj();
            document.write(student2.full_name);

            document.write('<br>');

            var myTime = new Date();

            document.write(myTime.getFullYear() + '-' + myTime.getMonth());




        </script>


    </body>
</html>

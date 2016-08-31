<!DOCTYPE html>
<html>
    <head>
        <script src="script.js"></script>
        <title>JS</title>
    </head>
    <body>

        <div id="js"></div>

        <script>

            // Few Operators + - * / =
            var FirstName = 'Jewel'; // String Data
            var LastName = "Ahmmed"; // String Data

            var Num1;
            Num1 = 10; // Number Data
            Num1 = 25; // Assignment Operator

            var Num2 = 15; // Number Data

            var Present = true; // Boolean Data

            var TotalNum = Num1 + Num2; // Arithmetic Operator
            var FullName = FirstName + ' ' + LastName; // Concatenation Operator



            var Num3 = 15;
            // Num3 = Num3 + 30;
            Num3 += 30; // += -= *= /=

            var IDontKnow = null; // Null data

            window.alert(typeof Num3);
            console.log(Num3);







            // document.getElementById("js").innerHTML = FullName;
            document.getElementById("js").innerHTML =
                    'My Name Is: ' + FullName + '<br> & Number Is: ' + TotalNum;

        </script>


    </body>
</html>
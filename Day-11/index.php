<!DOCTYPE html>
<html>
    <head>
        <script src="script.js"></script>
        <title>JS</title>
    </head>
    <body>

        <div id="js"></div>

        <script>


//            function add_me(num1, num2) {
//                return num1 + num2;
//            }
//
//            function anotherFunction() {
//                return add_me(10, 20);
//            }
//
//            document.write(anotherFunction());



            var bookPrice = 500;
            var iHave = 500;


            function myFunc() {
                return iHave;
            }







            if (bookPrice < iHave) {
                document.write('Please buy the Book!');
            } else if (bookPrice == iHave) {
                document.write('Please don\'t buy the Book!, Because, You need money to return Home!');
            } else {
                document.write('Please don\'t buy the Book!');
            }



        </script>
    </body>
</html>
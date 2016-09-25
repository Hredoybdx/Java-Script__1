<!DOCTYPE html>
<html>
    <head>
        <script src="script.js"></script>
        <title>JS</title>
    </head>
    <body>

        <div id="js"></div>

        <script>
            var bookPrice = 5001;
            var iHave = 500;
//            if (bookPrice < iHave) {
//                var result = 'Please buy the Book!';
//            } else if (bookPrice == iHave) {
//                var result = 'Please don\'t buy the Book!, Because, You need money to return Home!';
//            } else {
//                var result = 'Please don\'t buy the Book!';
//            }
//            document.write(result);

//
//            switch (bookPrice) {
//                case 500:
//                    var result = 'The result is 500';
//                    break;
//                case 499:
//                    var result = 'The result is 499';
//                    break;
//                case 501:
//                    var result = 'The result is 501';
//                    break;
//                default:
//                    var result = 'I don\'t know!';
//            }
//
//            var total = 5;
//
//            for (var i = 0; i < total; i++) {
//                document.write(result + i + '<br>');
//            }
//
//
//            var total = 5;
//            var i = 0;
//
//            while (i < total) {
//                document.write(result + i + ' - W <br>');
//                i++;
//            }
//
//
//


            function testingDoWhile() {

                var total = 7;
                var i = 0;
                var result = 'Running do while..'
                do {
                    document.write(result + i + ' - DW <br>');
                    i++;
                } while (i < total);
            }



        </script>

        <div onclick=" testingDoWhile();">
            Click Me!
        </div>



    </body>
</html>
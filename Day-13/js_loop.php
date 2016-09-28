<!DOCTYPE html>
<html>
    <body>


        <p id="demo"></p>

        <script>
            var student = ["Mr. Rahim", true, 9, 17, 978];
            var text = "";




            for (var i = 0; i < student.length; i++) {

                text += student[i] + "<br>";

                //document.write(student[i] + '<br>');
            }

            document.write(text);
            //document.getElementById("demo").innerHTML = text;







//            document.write('Student Details- <br>');
//            document.write('Students Name: ' + student[0] + '<br>');
//
//            if (student[1]) {
//                document.write('Present Status: Yes! He is Present <br>');
//            } else {
//                document.write('Present Status: No! He is Absent<br>');
//            }
//
//
//
//            document.write('Class: ' + student[2] + '<br>');
//            document.write('Roll: ' + student[3] + '<br>');
//            document.write('Total Number: ' + student[4] + ' out of 1000<br>');
        </script>

    </body>
</html>


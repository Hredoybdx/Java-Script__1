<html>
    <head>
        <title>JavaScript</title>
    </head>
    <body>
        <script>

            function myFun() {

            }

            // Obj car
            var car = {
                type: "Fiat",
                model: "500",
                color: "white",
                sayDetails: function () {
                    return 'Hi, I am details.';
                },
                wheel: 4,
                sayWheel: function () {
                    return 'I have 4 wheel';
                }

            };

            var newCar = car;
            newCar.color = 'Black';

            document.write(newCar.color); // Black
            document.write(car.color); // Black

            document.write('<br><br><br>');




            // Obj student
            var student = new Object();
            student.first_name = 'Md';
            student.last_name = 'Karim';
            student.sayFullName = function () {
                return 'Md Karim';
            };

            document.write(student.first_name + ' ' + student.last_name + '<br>');
            document.write(student.sayFullName());


            document.write('<br><br><br>');

            var student2 = new Object();
            student2.first_name = 'Md';
            student2.last_name = 'Karim';

            //document.write(typeof student);
















            document.write('<br><br><br>');


            var myArray = ['Fiat', '500', 'white']; // Array

            //car.color = 'Black';
            document.write(car.color);
            document.write(car.sayDetails());
            document.write('<br>');
            document.write(myArray.length);

            document.write('<br>');
            var text = 'Hello JS!';
            document.write(text.toLowerCase()); // hello js!

            document.write('<br>');
            document.write(text.toUpperCase()); // HELLO JS!

            document.write('<br>');
            document.write('Hello JS!'.length); // 9


        </script>
    </body>
</html>
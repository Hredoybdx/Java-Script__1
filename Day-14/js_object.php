<html>
    <head>
        <title>JavaScript</title>
    </head>
    <body>
        <script>
            var myArray = ['Fiat', '500', 'white'];

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
            //car.color = 'Black';
            document.write(car.color);
            document.write(car.sayDetails());


        </script>
    </body>
</html>
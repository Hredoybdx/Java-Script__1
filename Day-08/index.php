<!DOCTYPE html>
<html>
    <head>
        <script src="script.js"></script>
        <title>JS</title>
    </head>
    <body>
        <script>
            // Data Types
            var full_name = 'Jewel' + 'Ahmmed'; // String
            var roll = 10; // Number
            var status = true; // Boolean
            var carName = "Volvo XC60";   // Using double quotes
            var carName = 'Volvo XC60';   // Using single quotes

            // Array
            var student = [
                'Jewel Ahmmed',
                10,
                true
            ];

            // Object
            var person = {
                firstName: "John",
                lastName: "Doe",
                age: 50,
                eyeColor: [
                    'Jewel Ahmmed',
                    10,
                    {
                        firstName: "John",
                        lastName: "Doe",
                        age: 50,
                        eyeColor: [
                            'Jewel Ahmmed',
                            10,
                            true
                        ]
                    }
                ]
            };



            console.log(typeof student);
            console.log(typeof person);
        </script>
    </body>
</html>
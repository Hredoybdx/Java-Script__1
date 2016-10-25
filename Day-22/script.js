function myFunc() {

    $('h1:even').css('color', 'red');
    $('h1:odd').attr('class', 'my_class');
    $('h1:odd').addClass('my_second_class my_3rd');
    //$('h1').first().on('click', eventFunc);
    //$('h1:first-child').first().on('click', eventFunc);
}





function eventFunc() {

    console.log('Hey, I am here!');

}
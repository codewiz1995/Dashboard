

// random password generation

function randomStringToInput(clicked_element)
{
    var self = $(clicked_element);
    var random_string = generateRandomString(10);
    $('input[name=pass]').val(random_string);
    self.remove();
}
function generateRandomString(string_length)
{
    var characters = 'A@#$BC12%$#3DEFGH%&I456JKLMN$#%&OP789QRST098UV&*$#WXYZ654abc$$$##%de321fgh$##ijklmno456pqrstuvwxyz01234567890';
    var string = '';
    for(var i = 0; i <= string_length; i++)
    {
        var rand = Math.round(Math.random() * (characters.length - 1));
        var character = characters.substr(rand, 1);
        string = string + character;
    }
    return string;
}


// date validation

$(document).ready(function () {
    var today = new Date();
    $('.datepicker').datepicker({
        format: 'mm-dd-yyyy',
        autoclose:true,
        endDate: "today",
        maxDate: today
    }).on('changeDate', function (ev) {
            $(this).datepicker('hide');
        });


    $('.datepicker').keyup(function () {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9^-]/g, '');
        }
    });
});




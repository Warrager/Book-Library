function validate(){
    $('#error_display').text(""); //Clears any existing error messages
    var author = $('#author_name').val();
    var isbn = $('#isbn').val().replace('-', '');
    var return_val = true;
    var error_array = [];

    if (author === "" || isbn === "" || $('#book_name').val() === ""){
        $('#error_display').append("One or more fields are empty");
        return false;
    }
    if (!(/[a-zA-Z]/.test(author))){
        error_array.push("Author's name may only contain alphabetic characters.");
        return_val = false;
    } 
    if (isbn.length != 10 && isbn.length != 13){
        error_array.push("ISBN must be either 10 or 13 digits long.");
        return_val = false;
    }
    if (!(/\d/).test(parseInt(isbn))){
        error_array.push("ISBN may only contains digits and '-'s.");
        return_val = false;
    }
    for (var x = 0, y = error_array.length; x < y; x++){
        $('#error_display').append(`<p> ${error_array[x]} </p>`);
    }
    return return_val;
}

$('#my_form').submit(validate);
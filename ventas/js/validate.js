$("#form-user").validate({
    rules: {
        name:{
            required: true,
            maxlength: 255
        },
        lastName:{
            required: true,
            maxlength: 255
        },
        telephone: {
            required: () => $(mobile) !== '' ? true : false,
            normalizer: value => value.trim()
        },
        mobile: {
            required: () => $(telephone) !== '' ? true : false,
            normalizer: value => value.trim()
        }
    }
});

$("#save").click(function () {
    if ($("#form-user").valid() == false) {
        return;
    }

    let name = $("#name").val();
    let lastName = $("#last-name").val();
    let telephone = $("#telephone").val();
    let mobile = $("#mobile").val().trim();
});
$(document).ready(function(){
    $(".main .Generate_mrn").click(function(){
        $(".main .form_Register").fadeOut(300);
        $(".main .form-Generate").delay(300).fadeIn(300);
        $(this).css("display", "none");
        $(".main .doc").css("display", "none");
        $(".main .back").css("display", "block");
    });
    $(".main .back").click(function(){
        $(".main .form-Generate").fadeOut(300);
        $(".main .form_Register").delay(300).fadeIn(300);
        $(this).css("display", "none");
        $(".main .Generate_mrn").css("display", "block");
    });

    $(".main .doc").click(function(){
        $(".main .form_Register").fadeOut(300);
        $(".main .form-doc").delay(300).fadeIn(300);
        $(this).css("display", "none");
        $(".main .back").css("display", "block");
        $(".main .Generate_mrn").css("display", "none");
    });
    $(".main .back").click(function(){
        $(".main .form-Generate").fadeOut(300);
        $(".main .form-doc").fadeOut(300);
        $(".main .form_Register").delay(300).fadeIn(300);
        $(this).css("display", "none");
        $(".main .Generate_mrn").css("display", "block");
        $(".main .doc").css("display", "block");
    });

    $(".alert button").click(function() {
        $(this).parent().parent().remove(".layout");
        //$(".layout").css("display", "none");
    });
});
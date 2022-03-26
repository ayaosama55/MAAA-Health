$(document).ready(function(){
    var h = $(".main").height();
    console.log(h);
    $(".top, .bottom").css("height", h + "px");

    $(".main .Generate_mrn").click(function(){
        $(".main .form_Register").fadeOut(300);
        $(".main .form-Generate").delay(300).fadeIn(300);
        $(this).css("display", "none");
        $(".main .back").css("display", "block");
    });
    $(".main .back").click(function(){
        $(".main .form-Generate").fadeOut(300);
        $(".main .form_Register").delay(300).fadeIn(300);
        $(this).css("display", "none");
        $(".main .Generate_mrn").css("display", "block");
    });
});
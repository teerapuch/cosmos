$(document).ready(function(){
    alert("Hello From JS");
    $("form :input").each(function(){
        var input = $(this).attr('name');
        console.log(input);
    });
});

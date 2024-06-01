$(document).ready(function(){
    $(".image").click(function(){
        var id = $(this).attr("id");
        var src = ($(this).attr("src") === "img/heart1.png") ? "img/heart2.png" : "img/heart1.png";
        var alt = ($(this).attr("alt") == 0) ? 1 : 0;
        $(this).attr("src", src);
        $(this).attr("alt", alt);
        $.ajax({
                url: "/obj/save_data.php",
                type: "POST",
                data: {'alt': parseInt(alt), 'id': id.charAt(1)},
                success: function(response){
            if(response.trim() !== ""){
                console.log("Форма успешно отправлена!");
            } else {
                console.log("Ошибка при отправке формы!");
            }
        },
        error: function(xhr, status, error){
            console.log("Произошла ошибка при отправке AJAX запроса: " + error);
        }
            });
    
    });
});
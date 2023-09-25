$(document).ready(function(){
    $("ul.one li").click(function () {
        var name = $(this).text();
        switch (name) {
            case "Главная":
                location.href = "index.php";
                break;
            case "Контакты":
                $("div.content").empty();
                $("div.content").load("contacts.php");
                break;
        }
    });
    $("div.contact a.btn").click(function (){
            $("div.content").empty();
            $("div.content").load("contacts.php");
    });
    $("ul.dropdown-menu li").click(function () {
        var name = $(this).text();
        $.ajax({
            type: "POST",
            url: "catalog.php",
            dataType: "json",
            data: {"name": name},
            success: function (data) {
                if (data.result == "success") {
                    $("div.content").empty();
                    $("div.content").append(data.html);
                }
            }
        });
    });
    $("div.hero div.info p").click(function (){
        var name = $(this).text();
        if(name == "г. Екатеринбург ул. Маневровая, 31"){
            $("div.content").empty();
            $("div.content").load("contacts.php");
        }
    })
    $("section.card").click(function (){
        $("section.items").css('display', 'block');

        // Launching addcard.php using AJAX
        $.ajax({
            type: "POST",
            url: "addcard.php",
            dataType: "json",
            data: {"type": "add"},
            success: function(data) {
                $('section.tovar').empty();
                $('section.tovar').append(data.item);
            }
        });
    });

    $(document).on('click', function(event) {
        // Check if the clicked element is the modal or its child
        if (!$(event.target).closest('.card, .items').length) {
            // Close the modal
            $('.items').hide();
        }
    });

    $(".content").on('click', 'a.btn:contains("Подробнее")', function (){
        id = $(this).attr('id');
        if($(this).siblings('section.desc').attr('id') == id){
            $(this).siblings('section.desc').css('display', 'block');
        };

    });

    $(".content").on('click', 'section.desc', function (){
        if (!$(event.target).is('p')) {
            $(this).css('display', 'none');
        }
    })


    $(".content").on('click', 'a.btn:contains("Добавить в корзину")', function (){
        var id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: "addcard.php",
            dataType: "json",
            data: {"id": id, "type": "add"},
            success: function (data) {
                // console.log(data.card)
                $('section.tovar').empty();
                $('section.tovar').append(data.item);
                $("p.count").text(data.card);
            }
        });
    });

    $("header").on('click', 'a.btn:contains("Удалить")', function (){
        var id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: "addcard.php",
            dataType: "json",
            data: {"id": id, "type": "del"},
            success: function (data) {
                $('section.tovar').empty();
                $('section.tovar').append(data.item);
                if(data.card >= 1){
                    $("p.count").text(data.card);
                }
                else {
                    $("p.count").empty();
                }

            }
        });
    });
    $("header").on('click', 'p.create:contains("Оформить заказ")', function (){
        var phone = $("input.phone").val();
        if(phone != ''){
            $.ajax({
                type: "POST",
                url: "addcard.php",
                dataType: "json",
                data: {"phone":phone, "type":"order"},
                success: function (data){
                    $('section.tovar').empty();
                    $("p.count").empty();
                    $("input.phone").val('');
                    alert("Наш консультант вам перезвонит");
                }
            });
        }
        else {
            alert("Введите номер телефона")
        }
    });

    $(".content").on('click','p.card',function () {
        var id = $(this).attr("number");
        $.ajax({
            type: "POST",
            url: "addcard.php",
            dataType: "json",
            data: {"id": id},
            success: function (data) {
                if(data.result =="success"){
                    console.log(data.item);
                    $("p.count").text(data.card);

                }
            }
        });
    });
        var original = $("div.content").html();
        // Smooth scroll animation
        $('.menu-item').on('click', function(event) {
            var deferred = $.Deferred();

            if($("div.content").html() !== original) {
                location.href = "index.php";
            }
            else{
                if (this.hash !== '') {
                    event.preventDefault();

                    var hash = this.hash;
                    var offset = $(hash).offset().top;

                    $('html, body').animate(
                        {
                            scrollTop: offset
                        },
                        600, // Animation duration in milliseconds
                        function() {
                            window.location.hash = hash;
                        }
                    );
                }
            }


        });
    $("#arrow-btn").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });


});
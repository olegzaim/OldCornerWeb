$(document).ready(function() {
	$ (".button").magnificPopup();
	$(".auth-buttons").click(function () {                                 // кнопки для управления регестриции при адоптивности //
		$(this).next().slideToggle();
		
    });
    $(".main_mnu_button").click(function () {                               // кнопки для управления главным меню при адоптивности //
        $(".main_mnu ul").slideToggle();

    });
    // Форма в модальном окне с фокусом на поле Имя ссылается на окно , если его убрать окно не будет отображаться
    $('.link').magnificPopup({
        type: 'inline',
        focus: '#text'
    });

	//Навигация по Landing Page
	//$(".top_mnu") - это верхняя панель со ссылками.
	//Ссылки вида <a href="#contacts">Контакты</a>
	$(".top_mnu").navigation();

	//Каруселька
	//Документация: http://owlgraphic.com/owlcarousel/
	var owl = $(".carousel");
	owl.owlCarousel({
		items : 2,
        margin:10,
		autoHeight: true,
        autoPlay:true                          //Автопролистывание


	});
	$(".next_button").click(function(){
		owl.trigger("owl.next");                                                    // кнопки навигации для корусели (фото ) //
	});
	$(".prev_button").click(function(){
		owl.trigger("owl.prev");
	});

	//Кнопка "Наверх"
	//Документация:
	//http://api.jquery.com/scrolltop/
	//http://api.jquery.com/animate/
	$("window").scroll(function () {
       if($(this).scrollTop()>$(this).height()){

}
	});
	$('.top').click(function () {
		$('html,body').stop().animate({scrollTop:0},'slow','swing');                                                     // анимация для кнопки наверх //
    });
	
	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	$("#callback").submit(function() {
		$.ajax({
			type: "GET",
			url: "mail.php",
			data: $("#callback").serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				$.fancybox.close();
			}, 1000);
		});
		return false;
	});

});
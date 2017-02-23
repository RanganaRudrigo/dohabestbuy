$(document).ready(function(){
	//add effect scroll home 1
	if($('body').hasClass('index'))
	{
		var check_click_icon = true;
		//console.log('test');
		$(window).scroll(function () {
			//console.log($(window).scrollTop());
		   if(check_click_icon == true)
			{
				if( typeof catlist  != undefined){
					for( var i in catlist  ){
						if(isElementVisible('.'+catlist[i]['title'])){
							$('.nav-bar li').removeClass('active');
							$('.nav-bar li.'+catlist[i]['title']).addClass('active');

						}
					}
				}
			}
		});
		
		$('.nav-bar li').click(function(){
			check_click_icon = false;
			$('.nav-bar li').removeClass('active');
			var position_animate = $('.tabs-'+$(this).attr('class')).offset().top;
			$(this).addClass('active');
			 $('html, body').animate({
				scrollTop: position_animate
			
			}, 500, function(){
				check_click_icon = true;
			});
		});
	}
});

function isElementVisible(elementToBeChecked)
{
	elementToBeChecked = $(elementToBeChecked);
    var TopView = $(window).scrollTop();
    var BotView = TopView + $(window).height() ;
    var TopElement = elementToBeChecked.offset().top;
    var BotElement = TopElement + elementToBeChecked.height();
    return ((BotElement <= BotView) && (TopElement >= TopView));
}
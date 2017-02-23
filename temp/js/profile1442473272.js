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
			   if(isElementVisible('.tabs-deals')){
				 $('.nav-bar li').removeClass('active');
					$('.nav-bar li.deals').addClass('active');
					
			   }

			   if(isElementVisible('.tabs-fashion')){
					$('.nav-bar li').removeClass('active');
					$('.nav-bar li.fashion').addClass('active');
					check_out_tab = false
			   }
			   
			   
			   if(isElementVisible('.tabs-electronics')){
					$('.nav-bar li').removeClass('active');
					$('.nav-bar li.electronics').addClass('active');
					
			   }
			   
			   if(isElementVisible('.tabs-toys')){
				  $('.nav-bar li').removeClass('active');
					$('.nav-bar li.toys').addClass('active');
					
			   }
			   
			   if(isElementVisible('.tabs-garden')){
				 $('.nav-bar li').removeClass('active');
					$('.nav-bar li.garden').addClass('active');
					
			   }
			   
			   if(isElementVisible('.tabs-decor')){
				 $('.nav-bar li').removeClass('active');
					$('.nav-bar li.decor').addClass('active');
					
			   }
			   if(isElementVisible('.tabs-sports')){
				 $('.nav-bar li').removeClass('active');
					$('.nav-bar li.sports').addClass('active');
					
			   }
			   if(isElementVisible('.tabs-gifts')){
				 $('.nav-bar li').removeClass('active');
					$('.nav-bar li.gifts').addClass('active');
					
			   }
			   if(isElementVisible('.tabs-beauty')){
				 $('.nav-bar li').removeClass('active');
					$('.nav-bar li.beauty').addClass('active');
					
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
	//console.log(elementToBeChecked);
    var TopView = $(window).scrollTop();
    var BotView = TopView + $(window).height();
    var TopElement = $(elementToBeChecked).offset().top;
    var BotElement = TopElement + $(elementToBeChecked).height();
    return ((BotElement <= BotView) && (TopElement >= TopView));
}
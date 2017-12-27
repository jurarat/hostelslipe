// JavaScript Document
		window.jQuery = window.$ = jQuery;
		if ($(window).width() > 1024){
			jQuery(document).ready(function() {	
			$('body').jpreLoader({loaderVPos: '50%'});
	
			$(".group1").colorbox({rel:'group1'});
			$(".img-pop1").colorbox({rel:'img-pop1'});
			$(".img-pop2").colorbox({rel:'img-pop2'});
			$(".img-pop3").colorbox({rel:'img-pop3'});
			$(".group2").colorbox({iframe:true, width:"80%", height:"80%"});
	
			//Menu Sidebar
			/*setTimeout(function() {
				$('#booking-sidebar').animate({right: '-217px'}, 800);
			}, 3500);
			setTimeout(function() {
				$('.bt_booking').animate({right: '0px'}, 800).css({ WebkitTransform: 'rotate(180deg)'});
				$('.bt_booking').animate({right: '0px'}, 800).css({ '-moz-transform': 'rotate(180deg)'});
			}, 3500);*/
			
			/*setTimeout(function() {
				$('.bt-arow').animate({left: '0px'}, 500).css({ WebkitTransform: 'rotate(0deg)'});
				$('.bt-arow').animate({left: '0px'}, 500).css({ '-moz-transform': 'rotate(0deg)'});
			}, 3500);*/
		
			jQuery('.bt_booking').click(function(){
				var sidebar = $('#booking-sidebar');
				if (sidebar.css('right') === '-217px') {
					$('#booking-sidebar').animate({right: '0px'});
					$('.bt_booking').animate({right: '217px'}).css({ WebkitTransform : 'rotate(0deg)'});
					$('.bt_booking').animate({right: '217px'}).css({ '-moz-transform': 'rotate(0deg)'});
				} else {
					$('#booking-sidebar').animate({right: '-217px'});
					$('.bt_booking').animate({right: '0px'}).css({ WebkitTransform: 'rotate(`180deg)'});
					$('.bt_booking').animate({right: '0px'}).css({ '-moz-transform': 'rotate(180deg)'});
				}		
			});
			
			jQuery('.menu-item, .gallery_dialog').click(function(){
				var gallery = $('#menu-item-gallery');
				if (jQuery(gallery).hasClass("active")) {			
						$('#whiteFrame').animate({width: '100%'});
						$('#displaybox').show().animate({top: '0px'}, 1000);
				} else {
						$('#whiteFrame').animate({width: '362px'});
				}	
			});
			
			jQuery('.bt-close').click(function(){
				var gallery = $('#displaybox');
				if (jQuery(gallery).css("top") === '0px') {			
						$('#displaybox').animate({top: '-1000px'},1000);
						$('#displaybox').hide(1000);
				}	
			});
			
			/*jQuery('#gallery_dialog').click(function(){
				var displaybox = $('#displaybox');
				if (jQuery(displaybox).css('top') === '-1000px') {			
						$('#displaybox').animate({top: '0px'});
				} else {
						$('#displaybox').animate({top: '-1000px'});
				}	
			});*/
			
			
		});
		} else {
			jQuery(document).ready(function() {		
			//Menu Sidebar
			setTimeout(function() {
				$('#booking-sidebar').animate({right: '-150px'}, 800);
			}, 3500);
			setTimeout(function() {
				$('.bt_booking').animate({right: '0px'}, 800);
			}, 3500);
			
			
			jQuery('.bt_booking').click(function(){
				var sidebar = $('#booking-sidebar');
				if (sidebar.css('right') === '-150px') {
					$('#booking-sidebar').animate({right: '0px'});
					$('.bt_booking').animate({right: '150px'});
				} else {
					$('#booking-sidebar').animate({right: '-150px'});
					$('.bt_booking').animate({right: '0px'});
				}	
			});
		});
		}
		
		    var nowTemp = new Date();
			var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
			 
			var checkin = $('#startDate').datepicker({
			onRender: function(date) {
			return date.valueOf() < now.valueOf() ? 'disabled' : '';
			}
			}).on('changeDate', function(ev) {
			if (ev.date.valueOf() > checkout.date.valueOf()) {
			var newDate = new Date(ev.date)
			newDate.setDate(newDate.getDate() + 1);
			checkout.setValue(newDate);
			}
			checkin.hide();
			$('#endDate')[0].focus();
			}).data('datepicker');
			var checkout = $('#endDate').datepicker({
			onRender: function(date) {
			return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
			}
			}).on('changeDate', function(ev) {
			checkout.hide();
			}).data('datepicker');
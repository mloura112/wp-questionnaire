
(function() {

  'use strict';

  function elasticArea() {
    $('.js-elasticArea').each(function(index, element) {
       var elasticElement = element,
          $elasticElement = $(element),
          initialHeight = initialHeight || $elasticElement.height(),
          delta = parseInt( $elasticElement.css('paddingBottom') ) + parseInt( $elasticElement.css('paddingTop') ) || 0,
          resize = function() {
            $elasticElement.height(initialHeight);
            $elasticElement.height( elasticElement.scrollHeight - delta );
        };

      $elasticElement.on('input change keyup', resize);
      resize();
    });

  };
  elasticArea();

})();


const regex = /[^\d.,]|\.(?=.*\.)/g;
const subst=``;



$('.dotallow').keyup(function(){
	if(regex.test($(this).val())){
		const str=this.value;
const result = str.replace(regex, subst);
this.value=result;
	} else {
		return false;
	}


});

$(".choose_packet>a").on("click" , function(e){
	e.preventDefault();
	$(".choose_packet").removeClass("active_packet");
	$(".choose_packet a").each(function(index, elem){
		$(this).text($(this).attr("data-id"));
	});
	$(this).parent().addClass("active_packet");
	$(this).text("Valgt");
});

if($(window).width() < 540){
	$(".hidden_small").remove();
} else {
	$(".visible_on_small").remove();
}

$('.valid_email').blur(function() {
	if($(this).val() != '') {
		var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		if(pattern.test($(this).val())){
			$(this).css({'border' : "2px solid rgba(122,137,153,0.5)"})
			$(this).removeClass("wrong_field");
		} else {
			$(this).css({'border' : '2px solid #ff0000'});
			$(this).addClass("wrong_field");

		}
	} else {
		$(this).css({'border' : '1px solid #ff0000'});
		$('#valid').text('Поле email не должно быть пустым');
	}
});


$(".second_form_tap input , .second_form_tap select").on("blur" ,function(){
	if (!$(this).hasClass("wrong_field") && $(this).val() != "") {
		$(this).addClass("correct_field");
		$(this).removeClass("error_inp");
	}
});
$(".gange_block>div").on("click" , function(){
	$(".gange_block>div").removeClass("error_inp");
    	$(".gange_block>div").removeClass("active_gang");
    	if ($(this).hasClass("active_gang")) {
    		$(this).removeClass("active_gang");
    	} else {
    		$(this).addClass('active_gang');
    	}
    });

    $(".chooses_out>div").on("click" , function(){
    	if ($(this).hasClass("active_cho")) {
    		$(this).removeClass("active_cho");
    	} else {
    		$(this).addClass('active_cho');
    	}
    });

/*******************************************************  aad_code_start  *******************************************************/
$("#aad_f2").on("blur",function() {
		feet = parseFloat($("#aad_f2").val());
inches = parseFloat($("#aad_i2").val());
inches += feet * 12;
height = (inches * 2.54).toFixed(2);
$("#height_aad1").val(height);
});
$("#aad_i2").on("blur",function() {
		feet = parseFloat($("#aad_f2").val());
inches = parseFloat($("#aad_i2").val());
inches += feet * 12;
height = (inches * 2.54).toFixed(2);
$("#height_aad1").val(height);
});
$("#aad_f2").on("click",function() {
		feet = parseFloat($("#aad_f2").val());
inches = parseFloat($("#aad_i2").val());
inches += feet * 12;
height = (inches * 2.54).toFixed(2);
$("#height_aad1").val(height);
});
$("#aad_i2").on("click",function() {
		feet = parseFloat($("#aad_f2").val());
inches = parseFloat($("#aad_i2").val());
inches += feet * 12;
height = (inches * 2.54).toFixed(2);
$("#height_aad1").val(height);
});
$("#aad_f2").on("keyup",function() {
		feet = parseFloat($("#aad_f2").val());
inches = parseFloat($("#aad_i2").val());
inches += feet * 12;
height = (inches * 2.).toFixed(2);
$("#height_aad1").val(height);
});
$("#aad_i2").on("keyup",function() {
		feet = parseFloat($("#aad_f2").val());
inches = parseFloat($("#aad_i2").val());
inches += feet * 12;
height = (inches * 2.54).toFixed(2);
$("#height_aad1").val(height);
});
function set_div(par)
{
	if(par=='1')
	{
		$("#aad_sw2").attr("disabled",false);
		$("#aad_f2").attr("disabled",false);
		$("#aad_i2").attr("disabled",false);
		$("#aad_gw2").attr("disabled",false);
		$(".aad_sf2").attr("disabled",false);
		$("#height_aad1").attr("disabled",false);
		$("#aad_sw1").attr("disabled",true);
		$("#aad_f1").attr("disabled",true);
		$("#aad_height").attr("disabled",true);
		$("#aad_i1").attr("disabled",true);
		$("#aad_gw1").attr("disabled",true);
		$(".aad_sf1").attr("disabled",true);
		$("#aad_dfd1").attr("style",'');
		$("#aad_dfd2").attr("style",'');
		$("#aad_dfd2").attr("style",'display:flex');
		$("#aad_dfd1").attr("style",'display:none');
	}else if(par=='2')
	{
		$("#aad_sw2").attr("disabled",true);
		$("#aad_f2").attr("disabled",true);
		$("#aad_i2").attr("disabled",true);
		$("#aad_gw2").attr("disabled",true);
		$(".aad_sf2").attr("disabled",true);
		$("#aad_sw1").attr("disabled",false);
		$("#aad_height").attr("disabled",false);
		$("#height_aad1").attr("disabled",true);
		$("#aad_f1").attr("disabled",false);
		$("#aad_i1").attr("disabled",false);
		$("#aad_gw1").attr("disabled",false);
		$(".aad_sf1").attr("disabled",false);
		$("#aad_dfd1").attr("style",'');
		$("#aad_dfd2").attr("style",'');
		$("#aad_dfd2").attr("style",'display:none');
		$("#aad_dfd1").attr("style",'display:flex');
	}else { }
}

	function set_gender(gender)
	{
		$("#aad_gender").val('');
		$("#aad_gender").val(gender);
	}
	function set_primary_goal(primaryGoal)
	{
		$("#primaryGoal").val('');
		$("#primaryGoal").val(primaryGoal);
	}
	function set_goaltype(goalType)
	{
		$("#goalType").val('');
		$("#goalType").val(goalType);
	}
	function set_goaltype(goalType)
	{
		var gt=$("#goalType").val();
		if(gt=='')
		{
			$("#goalType").val(goalType);
		}
		else
		{
			if(gt.indexOf(goalType) != -1)
			{
				var newgt=gt.replace(goalType,"");
				var str = newgt, replacement = '';
				str = str.replace(/-([^-]*)$/,replacement+'$1');
			}
			else
			{
				var str=gt+"-"+goalType;
			}
			var fgt=str.replace("--","-");
			$("#goalType").val('');
			$("#goalType").val(fgt);
		}
	}
	function set_food_preferences(foodPreferences)
	{
		var gt=$("#foodPreferences").val();
		if(gt=='')
		{
			$("#foodPreferences").val(foodPreferences);
		}
		else
		{
			if(gt.indexOf(foodPreferences) != -1)
			{
				var newgt=gt.replace(foodPreferences,"");
				var str = newgt, replacement = '';
				str = str.replace(/-([^-]*)$/,replacement+'$1');
			}
			else
			{
				var str=gt+"-"+foodPreferences;
			}
			var fgt=str.replace("--","-");
			$("#foodPreferences").val('');
			$("#foodPreferences").val(fgt);
		}
	}
	function set_exercise_preferences(preference)
	{
		$("#exercisePreferences").val(preference);
	}

/*******************************************************  aad_code_ends  *******************************************************/
$(document).ready(function(){

	if ($(window).width() > 991) {

		$(".fourth_radios>p>input").on("change" , function(){

			if (!$(".fourth_form_tap").hasClass("already_added")) {
				if ($(".fourth_inps").find("." + $(this).val()).find(".clear_now").length == 0) {
					var val = parseFloat($("#percent_in_header").text()) + 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "+=50");

					$(".fourth_form_tap").addClass("already_added");
				}
			} else {
				if (!$(".fourth_inps").find("." + $(this).val()).find(".clear_now").length == 0) {
					var val = parseFloat($("#percent_in_header").text()) - 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "-=50");

					$(".fourth_form_tap").removeClass("already_added");

				}
			}
		});

		$(".f1i input , .f2i input , .f1i select , .f2i select").on("blur" , function(){
			if ($(this).val() != "") {
				$(this).removeClass("clear_now");
			}
			if (!$(".fourth_form_tap").hasClass("already_added")) {
				if ($(this).closest(".same_bl").find(".clear_now").length == 0 && $('.fourth_radios>p>input').is(':checked')) {
					var val = parseFloat($("#percent_in_header").text()) + 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "+=50");

					$(".fourth_form_tap").addClass("already_added");
				}
			}


		});


		// $(".prelast_block textarea").on("blur" , function(){
		// 	if ($(this).val() != "") {
		// 		$(this).removeClass("empty_textarea")
		// 	}
		// 	if (!$(".prelast_block").hasClass("already_added")) {
		// 		if ($(".prelast_block .empty_textarea").length == 0) {
		// 			var val = parseFloat($("#percent_in_header").text()) + 10;
		// 			$("#percent_in_header").text(val + "%");
		// 			var added = $(".center_head .progress-bar").css("width" , "+=50");

		// 			$(".prelast_block").addClass("already_added");
		// 		}
		// 	}
		// });

		$('.prelast_block #ex4').on("change" , function(){
			if (!$(".prelast_block").hasClass("already_added")) {

					var val = parseFloat($("#percent_in_header").text()) + 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "+=50");

					$(".prelast_block").addClass("already_added");

			}
		});




		$(".gange_block>div").on("click" , function(){
			if (!$(".training_block").hasClass("already_added")) {
				if ($(".training_block .active_gang").length != 0) {
					var val = parseFloat($("#percent_in_header").text()) + 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "+=50");

					$(".training_block").addClass("already_added");
				}
			}
		});
		// $(".training_block textarea").on("blur" ,function(){
		// 	if (!$(".training_block").hasClass("already_added")) {
		// 		if ($(".training_block .active_gang").length != 0 && $(".training_block textarea").val() != "") {
		// 			var val = parseFloat($("#percent_in_header").text()) + 10;
		// 			$("#percent_in_header").text(val + "%");
		// 			var added = $(".center_head .progress-bar").css("width" , "+=50");

		// 			$(".training_block").addClass("already_added");
		// 		}
		// 	}
		// });

		$(".chooses_out>.elchi").on("click" ,function(){
			if (!$(".alot_choose").hasClass("already_added")) {


				if (!$(".chooses_out").find(".active_cho").length == 0) {
					var val = parseFloat($("#percent_in_header").text()) + 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "+=50");

					$(".alot_choose").addClass("already_added");
				}

			} else {
				if ($(".chooses_out").find(".active_cho").length == 0) {
					var val = parseFloat($("#percent_in_header").text()) - 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "-=50");

					$(".alot_choose").removeClass("already_added");
				}


		   	}
		});


		$(".first_switch>a").on("click" ,function(){
			if (!$(this).hasClass("already_added")) {
				var val = parseFloat($("#percent_in_header").text()) + 10;
				$("#percent_in_header").text(val + "%");
				var added = $(".center_head .progress-bar").css("width" , "+=50");

				$(".first_switch>a").addClass("already_added");
			}

		});


		$(".second_form_tap input , .second_form_tap select").on("blur" ,function(){
			if (!$(".second_form_tap").hasClass("already_added")) {
				var toxic = 0;
			$(".second_form_tap input, .second_form_tap select").each(function(elem ,index){
				if (!$(this).hasClass("correct_field")) {
					toxic++;
				}
			});
			if (toxic == 0) {
				var val = parseFloat($("#percent_in_header").text()) + 20;
				$("#percent_in_header").text(val + "%");
				var added = $(".center_head .progress-bar").css("width" , "+=100");
				$(".second_form_tap").addClass("already_added");
			}
		}

		});

		$(".outer_third_butt>div").on("click" ,function(){
			if (!$(".outer_third_butt").hasClass("already_added")) {
				var val = parseFloat($("#percent_in_header").text()) + 10;
				$("#percent_in_header").text(val + "%");
				var added = $(".center_head .progress-bar").css("width" , "+=50");

				$(".outer_third_butt").addClass("already_added");
			}
		});

	} else {


		$(".fourth_radios>p>input").on("change" , function(){

			if (!$(".fourth_form_tap").hasClass("already_added")) {
				if ($(".fourth_inps").find("." + $(this).val()).find(".clear_now").length == 0) {
					var val = parseFloat($("#percent_in_header").text()) + 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "+=26");

					$(".fourth_form_tap").addClass("already_added");
				}
			} else {
				if (!$(".fourth_inps").find("." + $(this).val()).find(".clear_now").length == 0) {
					var val = parseFloat($("#percent_in_header").text()) - 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "-=26");

					$(".fourth_form_tap").removeClass("already_added");

				}
			}
		});

		$(".f1i input , .f2i input , .f1i select , .f2i select").on("blur" , function(){
			if ($(this).val() != "") {
				$(this).removeClass("clear_now");
			}
			if (!$(".fourth_form_tap").hasClass("already_added")) {
				if ($(this).closest(".same_bl").find(".clear_now").length == 0 && $('.fourth_radios>p>input').is(':checked')) {
					var val = parseFloat($("#percent_in_header").text()) + 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "+=26");

					$(".fourth_form_tap").addClass("already_added");
				}
			}


		});






		/* For small devices */

		// 	$(".prelast_block textarea").on("blur" , function(){
		// 	if ($(this).val() != "") {
		// 		$(this).removeClass("empty_textarea")
		// 	}
		// 	if (!$(".prelast_block").hasClass("already_added")) {
		// 		if ($(".prelast_block .empty_textarea").length == 0) {
		// 			var val = parseFloat($("#percent_in_header").text()) + 10;
		// 			$("#percent_in_header").text(val + "%");
		// 			var added = $(".center_head .progress-bar").css("width" , "+=22.5");

		// 			$(".prelast_block").addClass("already_added");
		// 		}
		// 	}
		// });

			$('.prelast_block #ex4').on("change" , function(){
			if (!$(".prelast_block").hasClass("already_added")) {

					var val = parseFloat($("#percent_in_header").text()) + 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "+=26");

					$(".prelast_block").addClass("already_added");

			}
		});

			$(".training_block textarea").on("blur" ,function(){
			if (!$(".training_block").hasClass("already_added")) {
				if ($(".training_block .active_gang").length != 0 && $(".training_block textarea").val() != "") {
					var val = parseFloat($("#percent_in_header").text()) + 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "+=26");

					$(".training_block").addClass("already_added");
				}
			}
		});



			$(".outer_third_butt>div").on("click" ,function(){
			if (!$(".outer_third_butt").hasClass("already_added")) {
				var val = parseFloat($("#percent_in_header").text()) + 10;
				$("#percent_in_header").text(val + "%");
				var added = $(".center_head .progress-bar").css("width" , "+=26");

				$(".outer_third_butt").addClass("already_added");
			}
		});


			$(".gange_block>div").on("click" , function(){
			if (!$(".training_block").hasClass("already_added")) {
				if ($(".training_block .active_gang").length != 0) {
					var val = parseFloat($("#percent_in_header").text()) + 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "+=26");

					$(".training_block").addClass("already_added");
				}
			}
		});



		$(".chooses_out>.elchi").on("click" ,function(){
			if (!$(".alot_choose").hasClass("already_added")) {


				if (!$(".chooses_out").find(".active_cho").length == 0) {
					var val = parseFloat($("#percent_in_header").text()) + 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "+=26");

					$(".alot_choose").addClass("already_added");
				}

			} else {
				if ($(".chooses_out").find(".active_cho").length == 0) {
					var val = parseFloat($("#percent_in_header").text()) - 10;
					$("#percent_in_header").text(val + "%");
					var added = $(".center_head .progress-bar").css("width" , "-=26");

					$(".alot_choose").removeClass("already_added");
				}


		   	}
		});



		$(".first_switch>a").on("click" ,function(){
			if (!$(this).hasClass("already_added")) {
				var val = parseFloat($("#percent_in_header").text()) + 10;
				$("#percent_in_header").text(val + "%");
				var added = $(".center_head .progress-bar").css("width" , "+=26");

				$(".center_head .progress-bar").css("width" ,  );
				$(".first_switch>a").addClass("already_added")
			}

		});


		$(".second_form_tap input , .second_form_tap select").on("blur" ,function(){
			if (!$(".second_form_tap").hasClass("already_added")) {
				var toxic = 0;
			$(".second_form_tap input, .second_form_tap select").each(function(elem ,index){
				if (!$(this).hasClass("correct_field")) {
					toxic++;
				}
			});
			if (toxic == 0) {
				var val = parseFloat($("#percent_in_header").text()) + 20;
				$("#percent_in_header").text(val + "%");
				var added = $(".center_head .progress-bar").css("width" , "+=48");
				$(".second_form_tap").addClass("already_added");
			}
		}

		});

	}


  $(".weight_slider>input").on("change", function() {
    var type = $(".outer_third_butt > div.activethb").data('val');
    if($(this).attr('value') > 3) {
      $(".outer_third_butt>div[data-val=1]").removeClass('activethb')
      $(".outer_third_butt>div[data-val=2]").addClass('activethb')
    } else if ($(this).attr('value') < 3) {
      $(".outer_third_butt>div[data-val=1]").addClass('activethb')
      $(".outer_third_butt>div[data-val=2]").removeClass('activethb')
    }

  	updateHelperText($(this), type);
  });

  function updateHelperText(slider, type = false)
  {
      var sliderVal = slider.attr("value");
      if(type === false) {
        var helperBox = slider.parent().parent().find(".helper-box");
      } else {
        var helperBox = slider.parent().parent().find(`.helper-box[data-val=${type}]`);
      }

      helperBox.find('p.active').addClass('hidden').removeClass('active');
      helperBox.find(`p[data-val=${sliderVal}]`).removeClass('hidden').addClass('active');
  }


  $(".slider").on("change", function() {
    updateHelperText($(this));
  });



$('.valid_email').blur(function() {
	if($(this).val() != '') {
		var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
		if(pattern.test($(this).val())){
			$(this).css({'border' : "2px solid rgba(122,137,153,0.5)"})
			$(this).removeClass("wrong_field");
		} else {
			$(this).css({'border' : '2px solid #ff0000'});
			$(this).addClass("wrong_field");

		}
	} else {
		$(this).css({'border' : '1px solid #ff0000'});
		$('#valid').text('Поле email не должно быть пустым');
	}
});





$(".last_button a").on('click' ,function(e){
	e.preventDefault();
	var allerrors = 0;
	var localerror = 0;
	var prelocalerror = 0;
	if ($(".first_switch>a.active_f").length == 0) {
		$(".first_switch>a").addClass("error_inp");

		allerrors++;
	}

	$(".second_inputs input , .second_inputs select").each(function(elem , index){
		if (!$(this).hasClass('correct_field')) {
			$(this).addClass("error_inp");
			localerror++;
		}
	});
	if (localerror > 0) {
		allerrors++;
	}
	if ($(".outer_third_butt>div.activethb").length == 0) {
		$(".outer_third_butt>div").addClass("error_inp");
		allerrors++;
	}


	if (!$(".fourth_radios>p>input:checked").length != 0) {
		$(".fourth_radios>p").addClass("error_inp");
		$(".fourth_inps input , .fourth_inps select").addClass("error_inp");
		allerrors++;
	}
	if ($("." + $(".fourth_radios>p>input:checked").val()).length) {
		$("." + $(".fourth_radios>p>input:checked").val()).find("input , select").each(function(elem , index){
			if (!$(index).val() != "") {
				$(index).addClass("error_inp");
				prelocalerror++;
			}
		});

		if (prelocalerror != 0) {
			allerrors++;
		}
	}
	if ($(".gange_block>.active_gang").length == 0) {
		$(".gange_block>div").addClass("error_inp");
		allerrors++;
	}
	if (allerrors != 0) {
		$(".tooltip_block>ul *").remove();
		$(".tooltip_block").fadeIn(300);
		$('html, body').animate({ scrollTop: $(".tooltip_block").offset().top }, 500);
		$("body .error_inp").each(function(index , elem){
			if ($(this).attr("data-id")!= "" && $(this).attr("data-id")!= undefined && !$(this).hasClass("dotallow") && !$(this).hasClass("just_select")) {
				$(".tooltip_block>ul").append("<li>"+$(this).attr('data-id')+"</li>");
			}
		});
		$("."+ $('.fourth_radios>p>input:checked').attr("value")).find("input.error_inp , select.error_inp").each(function(elem , index){
			if ($(this).attr("data-id")!= "" && $(this).attr("data-id")!= undefined) {
				$(".tooltip_block>ul").append("<li>"+$(this).attr('data-id')+"</li>");
			}
		});
	} else {
	$("#aad_before_loading").css('display','none');
	$("#aad_loading").css('display','block');
		$(".tooltip_block").fadeOut(300);
		$("#aad_form").submit();
	}
});



for (var i=15; i<=100; i++){
	$("#age_select").append("<option value="+i+">"+i+"</option>")
}
for (var i=3; i<=100; i++){
	$("#f1aselect , #f2aselect").append("<option value="+i+">"+i+"%"+"</option>")
}

$(".second_inputs select , .fourth_inps select").on("focus" ,function(){
	$(this).css('color' , "#3f3f3f");
});


$("#phoneInp").on("keypress" , function(key){
      if(key.charCode < 48 || key.charCode > 57) return false;
 });
 $("#phoneInp").on("focus" , function(){
    var currentVal = $(this).attr("value");
    var currMe = $("#phoneInp").val();
    // if (currMe == "") {
    //     $(this).val("+");
    // } else {
    //     $(this).val(currMe);

    // }
});
$("#phoneInp").on("input" , function(){
    var currentValue = $(this).val();

    // if (currentValue.charAt(0)  == "+"){
    //     return true;
    // } else {
    //     var omega = currentValue.substring(1);
    // }
    // if (omega == "") {
    //   $(this).val("+");
    // } else {
    //   $(this).val(omega);
    // }
});

	$(".fourth_inps input  , .fourth_inps select").on("change" ,function(){
		$(this).removeClass("error_inp");
	});

	$("#ex2 , #ex1 , #ex3 , #ex4").slider();
	$(".first_switch>a").on('click' ,function(e){
		e.preventDefault();
		$(".first_switch>a").removeClass("error_inp")
		$(".first_switch>a").removeClass("active_f");
		$(this).addClass("active_f");
	});

    // $('#date_inp').datepicker({
    // 	changeMonth: false,
    // 	changeYear: false,
    // 	yearRange: '1950:2010'
    // });
	$(".outer_third_butt>div").on("click" , function(){
		$(".outer_third_butt>div").removeClass("error_inp");
		$(".outer_third_butt>div").removeClass("activethb");
		$(this).addClass("activethb");
		$(".shown_on_box").fadeIn(300);
	});

	$(".inner_w_ch>div").on("click" , function(){
		if ($(this).hasClass("active_inn")) {
			$(this).removeClass("active_inn");
		} else {
			$(this).addClass("active_inn");
		}
	});

	$(".fourth_radios input").on("change" ,function(){

		$(".fourth_inps input , .fourth_inps select").removeClass("error_inp");
		$(".fourth_radios>p").removeClass("error_inp");
		//$(".fourth_inps>div").css("display" ,"none");
		$(".fourth_inps").find("." + $(this).attr("value")).fadeIn(400);
	});

	$(".hde>a").on("click" ,function(e) {
		e.preventDefault();
		$(this).parent().find("input").click();
	});
	$('input[type="file"]').on("change" , function(){
		$(this).parent().next().find("*").remove();
		console.log($(this).val());
		$(this).parent().next().append("<img src="+ $(this).val() +">")
	});



	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
            	$(".form1_img").find("img").remove();
            	$(".form1_img").append("<img id='blah'>")
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
            	$(".form2_img").find("img").remove();
            	$(".form2_img").append("<img id='blah1'>")
                $('#blah1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
            	$(".form3_img").find("img").remove();
            	$(".form3_img").append("<img id='blah2'>")
                $('#blah2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
        $(this).closest(".hde").find("a").text("skift billede");
    });
    $("#imgInp1").change(function(){
        readURL1(this);
        $(this).closest(".hde").find("a").text("skift billede");
    });
    $("#imgInp2").change(function(){
        readURL2(this);
        $(this).closest(".hde").find("a").text("skift billede");
    });




});

<?php /* Template Name: Kontakt */ ?>
<?php get_header(); ?>
	<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/css/bootstrap-slider.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
</head>
<body>
<?php /*		<header>
		<div class="container">
			<div class="outer_head">
				<div class="left_head">
					<a href="#"><img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/left_arr.png" alt="left_arr"> tilbage</a>
				</div>
				<div class="lang_small">
					<div class="language_switcher">
						<a href=""><img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/us1.png" alt="us"></a>
						<div class="line_bet"></div>
						<a href="" ><img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/us2.png" alt="us"></a>
					</div>
				</div>
				<div class="center_head">
					<p>Du har besvaret <span id="percent_in_header">10%</span> af spørgsmålene</p>
					<div class="progress">
	  					<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="right_head">
						<img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/logo.png" alt="logo">

						<div class="language_switcher">
							<a href=""><img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/us1.png" alt="us"></a>
							<div class="line_bet"></div>
							<a href=""><img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/us2.png" alt="us"></a>
						</div>
				</div>
			</div>
		</div>
	</header>  */ ?>
	<form method="POST" enctype="multipart/form-data" action="https://app.zenfitapp.com/trainer/leadCreateQuery/ID/da"  id="aad_form" >
	<input type="hidden" name="leadType" value="survey" />
	<div class="first_form_tap">
		<h2>Vælg dit køn</h2>
		<div class="first_switch">
				<a onclick="set_gender('2')"  data-id="Vælg dit køn">Mand</a>
				<a onclick="set_gender('1')" >Kvinde</a>
						<input type="hidden" id="aad_gender" name="gender" />
		</div>
	</div>
	<div class="second_form_tap">
		<h2>Dine oplysninger</h2>

		<div class="second_inputs">
			<div class="group_sec">
				<div class="names_group">
					<p>Navn</p>
					<p>Email</p>
				</div>
				<p class="visible_on_small">Navn</p>
				<input type="text" name="Name" data-id="Navn ser forkert ud" placeholder="Dit fulde navn">
				<p class="visible_on_small">Email</p>
				<input type="email" name="email"  data-id="E-mail adresse ser forkert ud" class="valid_email" placeholder="Din email">
			</div>
			<div class="group_sec">
				<div class="names_group">
					<p>Telefon</p>
					<p>Alder</p>
				</div>
				<p class="visible_on_small">Telefon</p>
				<input type="text" name="phone"  data-id="Telefon ser forkert ud" id="phoneInp" placeholder="Dit telefonnummer">
				<!-- <input type="text" id="date_inp" placeholder="Vælg alder…"> -->
				<p class="visible_on_small">Alder</p>
				<select name="age" id="age_select">
					<option value="" data-id="Alder ser forkert ud" selected="selected" disabled="disabled">Vælg alder…</option>
				</select>
			</div>
		</div>
	</div>

	<div class="third_form_tap">
		<h2>Din målsætning</h2>
		<div class="outer_third_butt">
			<div onclick="set_primary_goal('1');" data-id="Vælg målsætning">
				<div class="third_ch_img">
					<img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/ch1.png" alt="ch1">
				</div>
				<p>Jeg vil tabe mig</p>
			</div>
			<div onclick="set_primary_goal('2');" >
				<div class="third_ch_img">
					<img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/ch2.png" alt="ch2">
				</div>
				<p>Bygge muskelmasse</p>
			</div>
			<input type="hidden" name="primaryGoal"  id="primaryGoal" />
		</div>

		<div class="shown_on_box">
			<h2>Intensitet af målsætning</h2>
			<div class="helper-box" data-val="1" style="text-align:center;">
          <p data-val="1" class="hidden">Jeg ønsker at tabe mig cirka 1 kilo per uge</p>
          <p data-val="2" class="hidden">Jeg ønsker at tabe mig cirka 0,5 kilo per uge</p>
          <p data-val="3" class="active">Jeg ønsker at beholde min nuværende vægt</p>
          <p data-val="4" class="hidden">Jeg ønsker at tage cirka 0,50 kilo på per uge</p>
          <p data-val="5" class="hidden">Jeg ønsker at tage cirka 1,0 kilo på per uge</p>
      </div>
			<div class="weight_slider">
				<input id="ex1" data-slider-id='ex1Slider' class="slider" type="text" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
				<div class="weight_txt">
					<p>Tabe mig</p>
					<p>Øge muskelmasse</p>
				</div>
			</div>
			<div class="choose_weight_one">
				<h2>Fokus på særlige muskelgrupper?</h2>
				<div class="inner_w_ch">
					<div onclick="set_goaltype('Bryst');" >
						<p>Bryst</p>
					</div>
					<div onclick="set_goaltype('Skuldre');" >
						<p>Skuldre</p>
					</div>
					<div onclick="set_goaltype('Arme');" >
						<p>Arme</p>
					</div>
					<div onclick="set_goaltype('Ben');" >
						<p>Ben</p>
					</div>
					<div onclick="set_goaltype('Ryg');" >
						<p>Ryg</p>
					</div>
			<input type="hidden" name="goalType" id="goalType" />
				</div>
			</div>
		</div>
	</div>


	<div class="fourth_form_tap">
		<h2>Din krop</h2>
		<h5>Vælg målingstype</h5>
		<div class="fourth_radios">
			 <p onclick="set_div('1');">
			   <input data-id="Vælg målingstype" type="radio" id="test1" name="measuringSystem" value="2" >
			   <label for="test1">US (lbs/inches)</label>
			 </p>
			 <p onclick="set_div('2');" >
			   <input type="radio" id="test2" name="measuringSystem" value="1"  checked="checked">
			   <label for="test2">Metric (kg/cm)</label>
			 </p>
		</div>
		<div class="fourth_inps">
			<div id="aad_dfd1" class="f1i  same_bl">
				<div class="group_sec">
					<p>Nuværende vægt </p>
					<input type="text" id="aad_sw1"  data-id="Nuværende vægt ser forkert ud" name="startWeight" class='clear_now dotallow' placeholder="Din nuværende vægt i kg">
					<p class="margin_up hidden_small">Højde</p>
					<input type="text"  id="aad_height" data-id="Højde ser forkert ud" name="height"   class='clear_now dotallow hidden_small' placeholder="Din højde i cm">
				</div>
				<div class="group_sec">
					<p >Ønskede vægt</p>
					<input type="text"  id="aad_gw1"  data-id="Ønskede vægt ser forkert ud"  name="goalWeight" class='clear_now dotallow' placeholder="Din ønskede vægt i kg">
					<p class="margin_up visible_on_small">Højde</p>
					<input type="text" name="height" data-id="Højde ser forkert ud"  class='clear_now dotallow visible_on_small' placeholder="Din højde i cm">
					<!-- <input type="text"  placeholder="Jeg kender ikke fedtprocent"> -->
					<p class="margin_up">Fedt-%</p>
					<select name="startFat" id="f1aselect" class="aad_sf1 clear_now just_select" data-id="Fedt-% ser forkert ud">
						<option value=""   value="Jeg kender ikke fedtprocent">
							Jeg kender ikke fedtprocent
						</option>
					</select>
				</div>
			</div>

			<div  id="aad_dfd2"  class="f2i same_bl" style='display:none'>
				<div class="group_sec">
					<p>Nuværende vægt</p>
					<input disabled id="aad_sw2" type="text" data-id="Nuværende vægt ser forkert ud" name="startWeight" class='clear_now dotallow' placeholder="Din nuværende vægt i kg">
					<p class="margin_up hidden_small">Feet&Inches</p>
					 <div class="feet_inch hidden_small">
						<input type="hidden" disabled id="height_aad1" name="height" />
						<input disabled  id="aad_f2"  type="text" data-id="Feet ser forkert ud" class='clear_now dotallow' placeholder="Feet">
						<input disabled  id="aad_i2"  type="text" data-id="Inches ser forkert ud"  class='clear_now dotallow' placeholder="Inches">
					</div>
					<p class=" visible_on_small margin_up">Ønskede vægt</p>
					<input disabled  id="aad_gw2"  type="text" class='clear_now visible_on_small dotallow' name="goalWeight" data-id="Ønskede vægt ser forkert ud" placeholder="Din ønskede vægt i kg">
				</div>
				<div class="group_sec">
					<p class="margin_up left_rmv visible_on_small">Feet&Inches</p>
					<div class="feet_inch visible_on_small">

						<input disabled  id="aad_f2"  type="text" data-id="Feet ser forkert ud" class='clear_now dotallow' placeholder="Feet">
						<input disabled   id="aad_i2" type="text" data-id="Inches ser forkert ud" class='clear_now dotallow' placeholder="Inches">
					</div>
					<p class=" hidden_small">Ønskede vægt</p>
					<input disabled  id="aad_gw2"  type="text" class='clear_now hidden_small dotallow' name="goalWeight" data-id="Ønskede vægt ser forkert ud" placeholder="Din ønskede vægt i kg">
					<p class="margin_up">Fedt-%</p>
					<select disabled  name="startFat" id="f1aselect" class="aad_sf2 clear_now just_select" data-id="Fedt-% ser forkert ud">
						<option value="" selected="selected"  value="Jeg kender ikke fedtprocent">
							Jeg kender ikke fedtprocent
						</option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<?php /*
	<div class="image_block">
		<h2>Billeder af dig (valgfrit)</h2>
		<div class="outer_image_block">
			<div class="elem_of_im_bl">
				<div class="hde">
					<p>Forfra</p><a href="#">VÆLG BILLEDE</a>
					<div id="form1" runat="server">
				        <input type='file' id="imgInp" />
				    </div>
				</div>
				<div class="content_of_im_bl form1_img">
				</div>
			</div>

			<div class="elem_of_im_bl">
				<div class="hde">
					<p>Fra siden</p><a href="#">VÆLG BILLEDE</a>
					<div id="form1" runat="server">
				        <input type='file' id="imgInp1" />
				    </div>
				</div>
				<div class="content_of_im_bl form2_img"></div>
			</div>

			<div class="elem_of_im_bl">
				<div class="hde">
					<p>Bagfra</p><a href="#">VÆLG BILLEDE</a>
					<div id="form1" runat="server">
				        <input type='file' id="imgInp2" />
				    </div>
				</div>
				<div class="content_of_im_bl form3_img"></div>
			</div>
		</div>
	</div>*/?>


	<div class="active_block">
		<h2>Aktivitetsniveau</h2>
		<h5>Intensitet af dit aktivitetsniveau</h5>
		<div class="helper-box" style="text-align:center;">
				<p data-val="2" class="hidden">Svarer til du er mest stillesiddende, og træner aldrig</p>
				<p data-val="3" class="hidden">Svarer til du træner sjældent, måske 1-2 gange om ugen</p>
				<p data-val="4" class="active">Svarer til du er moderat aktivt (fx træner 3-5 gange om ugen)</p>
				<p data-val="5" class="hidden">Svarer til du er meget aktiv, med forholdvis aktivt job og træning fx 6 gange om ugen</p>
				<p data-val="6" class="hidden">Svarer til du er ekstremt aktiv både på dit job og med træning</p>
		</div>
		<div class="active_block_range">
			<input name="activityLevel" id="ex2" data-slider-id='ex1Slider' class="slider" type="text" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="4"/>
			<div class="active_r_text">
				<p>Ikke aktiv</p>
				<p>Ekstremt aktiv</p>
			</div>
		</div>
	</div>


	<div class="alot_choose">
		<h2>Fødevarepræferencer og allergier</h2>
		<div class="chooses_out">
			<div onclick="set_food_preferences('avoidLactose');" class="elchi">
				<p>Laktose</p>
			</div>
			<div  onclick="set_food_preferences('avoidGluten');" class="elchi">
				<p>Gluten</p>
			</div>
			<div onclick="set_food_preferences('avoidNuts');"  class="elchi">
				<p>Nødder</p>
			</div>
			<div onclick="set_food_preferences('avoidEggs');"  class="elchi">
				<p>Æg</p>
			</div>
			<div onclick="set_food_preferences('avoidPig');"  class="elchi">
				<p>Svin</p>
			</div>
			<div onclick="set_food_preferences('avoidShellfish');"  class="elchi">
				<p>Skaldyr</p>
			</div>
			<div  onclick="set_food_preferences('avoidFish');" class="elchi">
				<p>Fisk</p>
			</div>
			<div onclick="set_food_preferences('isVegetarian');"  class="elchi">
				<p>Vegetar</p>
			</div>
			<div onclick="set_food_preferences('isVegan');"  class="elchi">
				<p>Veganer</p>
			</div>
			<div onclick="set_food_preferences('isPescetarian');"  class="elchi">
				<p>Pescetar</p>
			</div>
			<input type="hidden" name="avoid" id="foodPreferences" />
		</div>

		<div class="commentar_one">
			<p>Yderligere bemærkninger til kost / allergier</p>
			<textarea name="foodPreferences" id="" cols="30" rows="10" class="js-elasticArea" placeholder="Skriv dine favorit fødevare, hvis du har speciel kosttype, mv. her…"></textarea>
		</div>
	</div>


	<div class="training_block">
		<h2>Træningspræferencer og erfaring</h2>
		<h6>Hvor mange gange om ugen kan du træne?</h6>
		<div class="gange_block">
			<div onclick="set_exercise_preferences('1 - 2 gange');"   class="elem_of_gang" data-id="Vælg hvor mange gange om ugen du vil træne">
				<p>1 - 2 gange</p>
			</div>
			<div onclick="set_exercise_preferences('3 - 4 gange');"   class="elem_of_gang">
				<p>3 - 4 gange</p>
			</div>
			<div onclick="set_exercise_preferences('5 - 6 gange');"   class="elem_of_gang">
				<p>5 - 6 gange</p>
			</div>
			<input type="hidden" name="timeWeek" id="exercisePreferences" />
		</div>
		<div class="active_block_range">
			<h2>Erfaringsniveau</h2>
			<div class="helper-box" style="text-align:center;">
					<p data-val="1" class="hidden">Jeg er total nybegynder, kender ingen øvelser</p>
					<p data-val="2" class="hidden">Jeg har lidt erfaring, men vil gerne have meget forklaring</p>
					<p data-val="3" class="active">Jeg har trænet i nogle år, og kan de fleste øvelser</p>
					<p data-val="4" class="hidden">Jeg har godt styr på øvelser, teknikker og er øvet</p>
					<p data-val="5" class="hidden">Jeg har trænet mange år, og har styr på teknikkerne</p>
			</div>
			<input name="experience" id="ex3" data-slider-id='ex1Slider' class="slider" type="text" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
			<div class="active_r_text">
				<p>Nybegynder</p>
				<p>Trænet mange år</p>
			</div>
			<div class="training_comment">
				<p>Yderligere bemærkninger til træning og erfaring?</p>
				<textarea  name="exercisePreferences" id="" cols="30" rows="10" class="js-elasticArea" placeholder="Skriv hvad tid du typisk træner på dagen, favorit træning, mv. her…"></textarea>
			</div>
		</div>
	</div>


	<div class="prelast_block">
		<h2>Din motivation, skader, mv.</h2>
		<h6>Din motivation fra 1 - 5</h6>
		<div class="helper-box" style="text-align:center;">
				<p data-val="1" class="hidden">Jeg er ikke motiveret, men bliver nødt til det</p>
				<p data-val="2" class="hidden">Jeg er rimelig motiveret, og falder nok ofte i</p>
				<p data-val="3" class="active">Jeg er motiveret, men vigtigt at jeg også har et liv ved siden af</p>
				<p data-val="4" class="hidden">Jeg er meget motiveret, og klar til følge al vejledning</p>
				<p data-val="5" class="hidden">Jeg er yderst motiveret, på niveau med en konkurrenceatlet</p>
		</div>
		<div class="active_block_range">

			<input name="motivation" id="ex4" data-slider-id='ex1Slider' class="slider" type="text" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
			<div class="active_r_text">
				<p>1. Ikke motiveret</p>
				<p>5. Ekstremt motiveret</p>
			</div>

		</div>

		<div class="last_comment1">
			<p>Har du nogle skader, der bør tages hensyn til?</p>
			<textarea name="injuries" id="injuries" cols="30" class="js-elasticArea empty_textarea" rows="10" placeholder="Skriv her…"></textarea>
		</div>

		<div class="last_comment2">
			<p>Har du andre ting du vil fortælle?</p>
			<textarea name="other" id="other" cols="30" class="js-elasticArea empty_textarea" rows="10" placeholder="Fortæl fx hvor meget søvn du får per nat, din livsstil og andet…"></textarea>
		</div>
	</div>


	<div class="last_button">

		<div class="wrap_last_b">
			<a ><img id="aad_loading" style="display:none;width:20px;margin: -5px 81px 0 -24px;" src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/loader.gif" /><span id="aad_before_loading">FÆRDIG, GÅ VIDERE <img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/right_arr.png" alt="right_arr"></span></a>
			<div class="tooltip_block">
				<p>Beklager, men du glemte at udfylde følgende spørgsmal korrekt:</p>
			<ul>

			</ul>
		</div>
		</div>
	</div>
</form>
	<script
  src="https://code.jquery.com/jquery-3.3.1.js" ></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/js/bootstrap-slider.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/js/script.js"></script>

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
	<form method="POST" enctype="multipart/form-data" action="https://beta.zenfitapp.com/trainer/leadCreateQuery/7/en"  id="aad_form" >
	<input type="hidden" name="leadType" value="survey" />
	<div class="first_form_tap">
		<h2>Choose gender</h2>
		<div class="first_switch">
				<a onclick="set_gender('2')"  data-id="Vælge dit køn">Male</a>
				<a onclick="set_gender('1')" >Female</a>
						<input type="hidden" id="aad_gender" name="gender" />
		</div>
	</div>
	<div class="second_form_tap">
		<h2>Personal information</h2>

		<div class="second_inputs">
			<div class="group_sec">
				<div class="names_group">
					<p>Name</p>
					<p>Email</p>
				</div>
				<p class="visible_on_small">Navn</p>
				<input type="text" name="Name" data-id="Name looks wrong" placeholder="Full name">
				<p class="visible_on_small">Email</p>
				<input type="email" name="email"  data-id="E-mail looks wrong" class="valid_email" placeholder="Your email">
			</div>
			<div class="group_sec">
				<div class="names_group">
					<p>Phone</p>
					<p>Age</p>
				</div>
				<p class="visible_on_small">Phone</p>
				<input type="text" name="phone"  data-id="Phone number looks wrong" id="phoneInp" placeholder="Your phone number">
				<!-- <input type="text" id="date_inp" placeholder="Vælg alder…"> -->
				<p class="visible_on_small">Age</p>
				<select name="age" id="age_select">
					<option value="" data-id="Age looks wrong" selected="selected" disabled="disabled">Choose age..</option>
				</select>
			</div>
		</div>
	</div>

	<div class="third_form_tap">
		<h2>Your goal</h2>
		<div class="outer_third_butt">
			<div onclick="set_primary_goal('1');" data-id="Vælge målsætning">
				<div class="third_ch_img">
					<img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/ch1.png" alt="ch1">
				</div>
				<p>I want to lose weight</p>
			</div>
			<div onclick="set_primary_goal('2');" >
				<div class="third_ch_img">
					<img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/ch2.png" alt="ch2">
				</div>
				<p>I want to gain strength</p>
			</div>
			<input type="hidden" name="primaryGoal"  id="primaryGoal" />
		</div>

		<div class="shown_on_box">
			<h2>How fast?</h2>
			<div class="helper-box active" data-val="1" style="text-align:center;">
          <p data-val="1" class="hidden">I want to lose about 2 lbs per week</p>
          <p data-val="2" class="hidden">I want to lose about 1 lbs per week</p>
          <p data-val="3" class="active">I want to maintain my current weight</p>
          <p data-val="4" class="hidden">I want to gain about 1 lbs per week</p>
          <p data-val="5" class="hidden">I want to gain about 2 lbs per week</p>
      </div>
			<div class="weight_slider">
				<input id="ex1" data-slider-id='ex1Slider' class="slider" type="text" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
				<div class="weight_txt">
					<p>Lose weight</p>
					<p>Gain muscles</p>
				</div>
			</div>
			<div class="choose_weight_one">
				<h2>Focus on certain muscle groups?</h2>
				<div class="inner_w_ch">
					<div onclick="set_goaltype('Chest');" >
						<p>Chest</p>
					</div>
					<div onclick="set_goaltype('Shoulders');" >
						<p>Shoulders</p>
					</div>
					<div onclick="set_goaltype('Arms');" >
						<p>Arms</p>
					</div>
					<div onclick="set_goaltype('Legs');" >
						<p>Legs</p>
					</div>
					<div onclick="set_goaltype('Back');" >
						<p>Back</p>
					</div>
			<input type="hidden" name="goalType" id="goalType" />
				</div>
			</div>
		</div>
	</div>


	<div class="fourth_form_tap">
		<h2>Your body</h2>
		<h5>Choose measurement system</h5>
		<div class="fourth_radios">
			 <p onclick="set_div('1');">
			   <input data-id="Vælge målingstype" type="radio" id="test1" name="measuringSystem" value="2" checked="checked">
			   <label for="test1">US (lbs/inches)</label>
			 </p>
			 <p onclick="set_div('2');" >
			   <input type="radio" id="test2" name="measuringSystem" value="1">
			   <label for="test2">Metric (kg/cm)</label>
			 </p>
		</div>
		<div class="fourth_inps">
			<div id="aad_dfd1" class="f1i  same_bl" style='display:none'>
				<div class="group_sec">
					<p>Nuværende vægt </p>
					<input disabled type="text" id="aad_sw1"  data-id="Current weight looks wrong" name="startWeight" class='clear_now dotallow' placeholder="Current weight in kg">
					<p class="margin_up hidden_small">Height</p>
					<input disabled type="text"  id="aad_height" data-id="Height looks wrong" name="height"   class='clear_now dotallow hidden_small' placeholder="Your height in cm">
				</div>
				<div class="group_sec">
					<p >Goal weight</p>
					<input disabled type="text"  id="aad_gw1"  data-id="Goal weight looks wrong"  name="goalWeight" class='clear_now dotallow' placeholder="Goal weight in kg">
					<p class="margin_up visible_on_small">Højde</p>
					<input disabled type="text" name="height" data-id="Height looks wrong"  class='clear_now dotallow visible_on_small' placeholder="Your height in cm">
					<!-- <input type="text"  placeholder="Jeg kender ikke fedtprocent"> -->
					<p class="margin_up">Fat-%</p>
					<select disabled name="startFat" id="f1aselect" class="aad_sf1 clear_now just_select" data-id="Fat % looks wrong">
						<option value=""   value="I don't know my fat %">
							I don't know my fat %
						</option>
					</select>
				</div>
			</div>

			<div  id="aad_dfd2"  class="f2i same_bl">
				<div class="group_sec">
					<p>Current weight</p>
					<input id="aad_sw2" type="text" data-id="Current weight looks wrong" name="startWeight" class='clear_now dotallow' placeholder="Current weight in lbs">
					<p class="margin_up hidden_small">Feet&Inches</p>
					 <div class="feet_inch hidden_small">
						<input type="hidden" id="height_aad1" name="height" />
						<input  id="aad_f2"  type="text" data-id="Feet looks wrong" class='clear_now dotallow' placeholder="Feet">
						<input  id="aad_i2"  type="text" data-id="Inches looks wrong"  class='clear_now dotallow' placeholder="Inches">
					</div>
					<p class=" visible_on_small margin_up">Goal weight</p>
					<input id="aad_gw2"  type="text" class='clear_now visible_on_small dotallow' name="goalWeight" data-id="Goal weight looks wrong" placeholder="Goal weight in lbs">
				</div>
				<div class="group_sec">
					<p class="margin_up left_rmv visible_on_small">Feet&Inches</p>
					<div class="feet_inch visible_on_small">

						<input id="aad_f2"  type="text" data-id="Feet looks wrong" class='clear_now dotallow' placeholder="Feet">
						<input id="aad_i2" type="text" data-id="Inches looks wrong" class='clear_now dotallow' placeholder="Inches">
					</div>
					<p class=" hidden_small">Goal weight</p>
					<input id="aad_gw2"  type="text" class='clear_now hidden_small dotallow' name="goalWeight"   data-id="Goal weight looks wrong" placeholder="Goal weight in lbs">
					<p class="margin_up">Fat-%</p>
					<select name="startFat" id="f2aselect" class="aad_sf2 clear_now just_select" data-id="Fat% looks wrong">
						<option value="" selected="selected"  value="I don't know my fat %">
							I don't know my fat %
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
		<h2>Activity Level</h2>
		<h5>Intensity of activity level</h5>
		<div class="helper-box" style="text-align:center;">
				<p data-val="2" class="hidden">I do not do any physical exercise</p>
				<p data-val="3" class="hidden">I am not very active and train 2-3 days a week</p>
				<p data-val="4" class="active">I am moderately active and work out 3-4 times a week</p>
				<p data-val="5" class="hidden">I am pretty active and work out quite a bit</p>
				<p data-val="6" class="hidden">I have a hard physical job and work out most days</p>
		</div>
		<div class="active_block_range">
			<input name="activityLevel" id="ex2" data-slider-id='ex1Slider' class="slider" type="text" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="4"/>
			<div class="active_r_text">
				<p>Not active</p>
				<p>Very active</p>
			</div>
		</div>
	</div>


	<div class="alot_choose">
		<h2>Things I don't like or is allergic to</h2>
		<div class="chooses_out">
			<div onclick="set_food_preferences('avoidLactose');" class="elchi">
				<p>Lactose</p>
			</div>
			<div  onclick="set_food_preferences('avoidGluten');" class="elchi">
				<p>Gluten</p>
			</div>
			<div onclick="set_food_preferences('avoidNuts');"  class="elchi">
				<p>Nuts</p>
			</div>
			<div onclick="set_food_preferences('avoidEggs');"  class="elchi">
				<p>Eggs</p>
			</div>
			<div onclick="set_food_preferences('avoidPig');"  class="elchi">
				<p>Pig</p>
			</div>
			<div onclick="set_food_preferences('avoidShellfish');"  class="elchi">
				<p>Seafood</p>
			</div>
			<div  onclick="set_food_preferences('avoidFish');" class="elchi">
				<p>Fish</p>
			</div>
			<div onclick="set_food_preferences('isVegetarian');"  class="elchi">
				<p>Vegetarian</p>
			</div>
			<div onclick="set_food_preferences('isVegan');"  class="elchi">
				<p>Vegan</p>
			</div>
			<div onclick="set_food_preferences('isPescetarian');"  class="elchi">
				<p>Pescetar</p>
			</div>
			<input type="hidden" name="avoid" id="foodPreferences" />
		</div>

		<div class="commentar_one">
			<p>Other comments to allergies / meal preferences</p>
			<textarea name="foodPreferences" id="" cols="30" rows="10" class="js-elasticArea" placeholder="Favorite foods, allergies etc."></textarea>
		</div>
	</div>


	<div class="training_block">
		<h2>Training preferences and experience</h2>
		<h6>How many times a week can you work out?</h6>
		<div class="gange_block">
			<div onclick="set_exercise_preferences('1 - 2 times');"   class="elem_of_gang" data-id="Choose the number of times you can work out">
				<p>1 - 2 times</p>
			</div>
			<div onclick="set_exercise_preferences('3 - 4 times');"   class="elem_of_gang">
				<p>3 - 4 times</p>
			</div>
			<div onclick="set_exercise_preferences('5 - 6 times');"   class="elem_of_gang">
				<p>5 - 6 times</p>
			</div>
			<input type="hidden" name="timeWeek" id="exercisePreferences" />
		</div>
		<div class="active_block_range">
			<h2>Experience</h2>
			<div class="helper-box" style="text-align:center;">
					<p data-val="1" class="hidden">I am totally inexperienced</p>
					<p data-val="2" class="hidden">I have a little bit of experience</p>
					<p data-val="3" class="active">I have been working out for quite some time and know some exercises</p>
					<p data-val="4" class="hidden">I am pretty experienced and know most exercises</p>
					<p data-val="5" class="hidden">I have worked out for many years and know all exercises</p>
			</div>
			<input name="experience" id="ex3" data-slider-id='ex1Slider' class="slider" type="text" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
			<div class="active_r_text">
				<p>Not experienced</p>
				<p>Highly experienced</p>
			</div>
			<div class="training_comment">
				<p>Other comments to training, experience etc.</p>
				<textarea  name="exercisePreferences" id="" cols="30" rows="10" class="js-elasticArea" placeholder="What time a day do you usually workout etc?"></textarea>
			</div>
		</div>
	</div>


	<div class="prelast_block">
		<h2>Motivation</h2>
		<h6>Your motivation from 1 - 5</h6>
		<div class="helper-box" style="text-align:center;">
				<p data-val="1" class="hidden">I am not very motivated</p>
				<p data-val="2" class="hidden">Somewhat motivated</p>
				<p data-val="3" class="active">I am pretty motivated, but I want to have a life as well</p>
				<p data-val="4" class="hidden">I am motivated and ready to do this!</p>
				<p data-val="5" class="hidden">I am exceptionally motivated</p>
		</div>
		<div class="active_block_range">

			<input name="motivation" id="ex4" data-slider-id='ex1Slider' class="slider" type="text" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="3"/>
			<div class="active_r_text">
				<p>Not motivated</p>
				<p>Very motivated</p>
			</div>

		</div>

		<div class="last_comment1">
			<p>Injuries to take into consideration?</p>
			<textarea name="injuries" id="injuries" cols="30" class="js-elasticArea empty_textarea" rows="10" placeholder="Write here."></textarea>
		</div>

		<div class="last_comment2">
			<p>Other things?</p>
			<textarea name="other" id="other" cols="30" class="js-elasticArea empty_textarea" rows="10" placeholder="Hours of sleep per night, lifestyle etc..."></textarea>
		</div>
	</div>


	<div class="last_button">

		<div class="wrap_last_b">
			<a ><img id="aad_loading" style="display:none;width:20px;margin: -5px 81px 0 -24px;" src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/loader.gif" /><span id="aad_before_loading">DONE <img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/right_arr.png" alt="right_arr"></span></a>
			<div class="tooltip_block">
				<p>Sorry, but you missed some fields:</p>
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

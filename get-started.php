<?php /* Template Name: Get Started */ ?>
<?php get_header(); ?>
	<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/css/bootstrap-slider.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
</head>
<body>
	<form method="POST" enctype="multipart/form-data" action="https://app.zenfitapp.com/trainer/leadCreateQuery/2130/en"  id="aad_form" >
	<input type="hidden" name="leadType" value="survey" />
	<div class="first_form_tap">
		<h2>Choose gender</h2>
		<div class="first_switch">
				<a onclick="set_gender('2')"  data-id="Choose gender">Male</a>
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
			<div data-val="1" onclick="set_primary_goal('1');" data-id="Choose goal">
				<div class="third_ch_img">
					<img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/ch1.png" alt="ch1">
				</div>
				<p>I want to lose weight</p>
			</div>
			<div data-val="2" onclick="set_primary_goal('2');" >
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
			   <input data-id="Choose measurement system" type="radio" id="test1" name="measuringSystem" value="2" checked="checked">
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
					<p>Current weight </p>
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
		<h2>Things I don't like or am allergic to</h2>
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
			<p>Other comments to allergies / meal preferences / eating disorders</p>
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
			<div class="form-check" style="margin-bottom: 25px;">
			  <input class="form-check-input" type="checkbox" value="" id="acceptTerms" checked>
			  <label class="form-check-label" for="acceptTerms">I accept the <a href="#" data-toggle="modal" data-target="#exampleModal">terms and conditions</a></label>
			</div>
			<button><img id="aad_loading" style="display:none;width:20px;margin: -5px 81px 0 -24px;" src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/loader.gif" /><span id="aad_before_loading">DONE <img src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/img/right_arr.png" alt="right_arr"></span></button>
			<div class="tooltip_block">
				<p>Sorry, but you missed some fields:</p>
			<ul></ul>
		</div>
		</div>
	</div>
</form>

<?php/*
<div class="survey-footer">
	<a href="https://zenfitapp.com/?utm_source=lead-survey" target="_blank">Powered by Zenfit - Software for Personal Trainers & Online Coaches</a>
</div>*/?>

<!-- Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<div class="details">
          <p>
	              This privacy policy has been compiled to better serve those who are concerned with how their 'Personally identifiable information' (PII) is being used online. PII, as used in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.

	              What personal information do we collect from the people that visit our blog, website or app?

	              When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, phone number, credit card information or other details to help you with your experience.

	              When do we collect information?

	              We collect information from you when you register on our site or enter information on our site.

	              How do we use your information?

	              <br /><br />

	              We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:
	                    • To personalize user's experience and to allow us to deliver the type of content and product offerings in which you are most interested.

	              How do we protect visitor information?

	              Our website is scanned on a regular basis for security holes and known vulnerabilities in order to make your visit to our site as safe as possible.
	              We use regular Malware Scanning.
	              Your personal information is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems, and are required to keep the information confidential. In addition, all sensitive/credit information you supply is encrypted via Secure Socket Layer (SSL) technology.

	              We implement a variety of security measures when a user places an order enters, submits, or accesses their information to maintain the safety of your personal information.

	              All transactions are processed through a gateway provider and are not stored or processed on our servers.

	              <br /><br />

	              Do we use 'cookies'?

	              Yes. Cookies are small files that a site or its service provider transfers to your computer's hard drive through your Web browser (if you allow) that enables the site's or service provider's systems to recognize your browser and capture and remember certain information. For instance, we use cookies to help us remember and process the items in your shopping cart. They are also used to help us understand your preferences based on previous or current site activity, which enables us to provide you with improved services. We also use cookies to help us compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.

	              We use cookies to:
	                    • Help remember and process the items in the shopping cart.
	                    • Understand and save user's preferences for future visits.
	                    • Keep track of advertisements.
	                    • Compile aggregate data about site traffic and site interactions in order to offer better site experiences and tools in the future. We may also use trusted third-party services that track this information on our behalf.

	              You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser (like Internet Explorer) settings. Each browser is a little different, so look at your browser's Help menu to learn the correct way to modify your cookies.

	              If you disable cookies off, some features will be disabled It won't affect the user's experience that make your site experience more efficient and some of our services will not function properly.

	              However, you can still place orders .

	              Third-party disclosure

	              We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information.

	              Third-party links

	              Occasionally, at our discretion, we may include or offer third-party products or services on our website. These third-party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.

	              <br /><br />

	              Google

	              Google's advertising requirements can be summed up by Google's Advertising Principles. They are put in place to provide a positive experience for users. https://support.google.com/adwordspolicy/answer/1316548?hl=en
	              We use Google AdSense Advertising on our website.

	              Google, as a third-party vendor, uses cookies to serve ads on our site. Google's use of the DART cookie enables it to serve ads to our users based on previous visits to our site and other sites on the Internet. Users may opt-out of the use of the DART cookie by visiting the Google Ad and Content Network privacy policy.

	              We have implemented the following:
	                    	• Remarketing with Google AdSense
	              • Google Analytics
	              • Inspectlet – tracking of user experience software
	              • Unbounce – Tracking visits and convertions


	              We along with third-party vendors, such as Google use first-party cookies (such as the Google Analytics cookies) and third-party cookies (such as the DoubleClick cookie) or other third-party identifiers together to compile data regarding user interactions with ad impressions and other ad service functions as they relate to our website.

	              <br /><br />

	              Opting out:
	              Users can set preferences for how Google advertises to you using the Google Ad Settings page. Alternatively, you can opt out by visiting the Network Advertising initiative opt out page or permanently using the Google Analytics Opt Out Browser add on.

	              California Online Privacy Protection Act

	              CalOPPA is the first state law in the nation to require commercial websites and online services to post a privacy policy. The law's reach stretches well beyond California to require a person or company in the United States (and conceivably the world) that operates websites collecting personally identifiable information from California consumers to post a conspicuous privacy policy on its website stating exactly the information being collected and those individuals with whom it is being shared, and to comply with this policy. - See more at: http://consumercal.org/california-online-privacy-protection-act-caloppa/#sthash.0FdRbT51.dpuf

	              According to CalOPPA we agree to the following:
	              Users can visit our site anonymously.
	              Once this privacy policy is created, we will add a link to it on our home page or as a minimum on the first significant page after entering our website.
	              Our Privacy Policy link includes the word 'Privacy' and can be easily be found on the page specified above.

	              Users will be notified of any privacy policy changes:
	                    • On our Privacy Policy Page
	              Users are able to change their personal information:
	                    • By emailing us
	                    • By calling us
	                    • By logging in to their account

	              How does our site handle do not track signals?
	              We honor do not track signals and do not track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in place.

	              Does our site allow third-party behavioral tracking?
	              It's also important to note that we allow third-party behavioral tracking

	              <br /><br />

	              COPPA (Children Online Privacy Protection Act)

	              When it comes to the collection of personal information from children under 13, the Children's Online Privacy Protection Act (COPPA) puts parents in control. The Federal Trade Commission, the nation's consumer protection agency, enforces the COPPA Rule, which spells out what operators of websites and online services must do to protect children's privacy and safety online.
	              We do not specifically market to children under 13.

	              Fair Information Practices

	              The Fair Information Practices Principles form the backbone of privacy law in the United States and the concepts they include have played a significant role in the development of data protection laws around the globe. Understanding the Fair Information Practice Principles and how they should be implemented is critical to comply with the various privacy laws that protect personal information.
	              In order to be in line with Fair Information Practices we will take the following responsive action, should a data breach occur:
	              We will notify the users via email
	                    • Other
	              as soon as possible
	              We will notify the users via in-site notification
	                    • Other
	              as soon as possible

	              We also agree to the Individual Redress Principle, which requires that individuals have a right to pursue legally enforceable rights against data collectors and processors who fail to adhere to the law. This principle requires not only that individuals have enforceable rights against data users, but also that individuals have recourse to courts or government agencies to investigate and/or prosecute non-compliance by data processors.

	              <br /><br />

	              CAN SPAM Act

	              The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.
	              We collect your email address in order to:

	              To be in accordance with CANSPAM we agree to the following:

	              If at any time you would like to unsubscribe from receiving future emails, you can email us at hello@zenfitapp.com
	              and we will promptly remove you from DESIRED correspondence.


	              <br /><br />
	              <b>Contacting Us</b>
	              <br />

	              If there are any questions regarding this privacy policy you may contact us using the information below.
	              <br /><br/>Zenfit IvS
	              Nyelandsvej 34,
	              Frederiksberg, Copenhagen 2000
	              Denmark
	              Hello@zenfitapp.com

	              Last Edited on 2017-02-12

	          </p>
	      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script
src="https://code.jquery.com/jquery-3.3.1.js" ></script>
<script src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/js/bootstrap-slider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
<script src="<?php echo site_url(); ?>/wp-content/themes/jevelin/aad_dir/js/script.js"></script>

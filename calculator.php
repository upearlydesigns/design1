<!--Plugin CSS file with desired skin-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
<!--jQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">// <![CDATA[

// ]]></script>
<!--Plugin JavaScript file-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
<style><!--
html{scroll-behavior:smooth}
    .PageContent--narrow {
        max-width: 1200px;
    }
    .tc-wrapper {
        width:1200px;
        max-width: 100%;
        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
        display: flex;
    }
    .tc-wrapper input:focus {
        outline: 0px;
    }
    .tc-wrapper div {
        box-sizing: border-box;
    }
    .tc-form-wrapper {
        width: 70%;
        min-height: 500px;
        background: #f8f8f8;
        padding: 20px;
overflow: hidden;
    }
    .tc-form-wrapper hr {
        border-top:1px solid #eee;
        border-bottom-color:#fff;
        border-left: none;
    }
    .tc-unit-wrapper {
        width: 100%;
        text-align: center;
        margin-bottom: 20px;
    }
    .tc-unit {
        display: inline-block;
        padding: 10px 20px 0px 20px;
        padding-bottom: 0px;
        cursor: pointer;
        margin-right: 20px;
    }
    .tc-unit.active {
        color:#000 ;
        /* box-shadow: 0px 15px 20px -20px #000; */
        
    }
    .tc-unit hr{
        width: 0%;
        height: 3px;
        background-color:transparent ;
        border: none;
        margin-bottom: 0px;
        transition: all ease-in-out 0.2s;
    }
    .tc-unit:hover {
        color: rgba(0, 0, 0, 1);
    }
    
    .tc-unit.active hr {
        width: 100%;
        background-color: #000;
    }

    /* Radio Button  */
    label.radio-section {
        float: left;
        font-weight: bold;
        line-height: 30px;
        line-height: 35px;
        margin-right: 30px;
    }
    label.radio {
        display: -webkit-box;
        display: inline-block;
        cursor: pointer;
        font-weight: 500;
        position: relative;
        margin-bottom: 0.375em;
        margin-right: 30px;
    }
    label.radio input {
        position: absolute;
        left: -9999px;
    }
    label.radio input:checked + span {
        background-color: #000;
        color: #fff;
    }
    label.radio input:checked + span:before {
        box-shadow: inset 0 0 0 0.4375em #FFF;
    }
    label.radio span {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        padding: 0.375em 0.75em 0.375em 0.375em;
        border-radius: 99em;
        -webkit-transition: 0.25s ease;
        transition: 0.25s ease;
    }
    label.radio span {
        background-color: #f1f1f1;
    }
    label.radio span:hover {
        background-color: #D5D8D2;
    }
    label.radio span:before {
        display: -webkit-box;
        display: flex;
        flex-shrink: 0;
        content: "";
        background-color: transparent;
        width: 1.5em;
        height: 1.5em;
        border-radius: 50%;
        margin-right: 0.375em;
        -webkit-transition: 0.25s ease;
        transition: 0.25s ease;
        box-shadow: inset 0 0 0 0.125em #000;
    }

    .tc-range-input-wrapper {
        margin:20px 0px;
        position: relative;
        height: 100px;
    }
    .group {
        position: absolute;
        width: 100%;
        right: 0;
        transition: all ease-in-out 1s;
    }
    .tc-range-input-wrapper label {
        margin-bottom: 20px;
        display: block;
        font-weight: bold;
        left: 0;
        right: 0;
    }
    .tc-range-input-wrapper label small {
        font-weight: normal;
        color:#A3A39A;
    }
    .tc-input-group {
        display: flex;
        flex-direction: row;
    }
    .tc-input-group .slider {
        flex: 10;
    }
    .tc-input-group .slider {
        margin-right: 10px;
    }
    .tc-input-group .input input {
        height: 40px;
        border-radius: 2px;
        border:1px solid #DBD0BE;
        font-size: 20px;
        text-align: center;
        width: 100px;
        font-weight: bold;
    }
    .tc-input-group select {
            width: 80%;
    font-size: 15px;
    height: 40px;
    border-radius: 2px;
    border: 1px solid #DBD0BE;
    padding-left: 10px;
    }

    .tc-input-group .input input::placeholder{
        color: rgb(219, 208, 188 , 1);
    }
    .tc-submit {
        padding:15px 30px;
        font-size: 22px;
        border-radius: 60px;
        border: none;
        background-color: #000;
        color: white;
        font-weight: bold;
        box-shadow: 0px 0px 29px -10px #000;
        margin-top: 20px;
        cursor: pointer;
        /* box-shadow: 0px 0px 29px -10px #555; */
    }

    .tc-result-wrapper {
        width: 30%;
        box-shadow: -20px 0px 40px -30px #aaa;
        position: relative;
    }
    .tc-result-wrapper .main-result {
        width: 100%;
        color:#444;
        padding:20px 5px;
        background-color: #fff;
        box-shadow: -4px 20px 40px -40px #aaa;
        margin-bottom: 40px;
    }
    .tc-result-wrapper .main-result .label {
        font-size: 40px;
        display: block;
        font-weight: bold;
        text-align: center;
    }
    .tc-result-wrapper .main-result .tdee {
        font-size: 50px;
        display: block;
        font-weight: 400;
        margin-top: 10px;
        text-align: center;
    }
    
    .tc-result-wrapper .main-result .tdee span {
        transform: scale(1);
        display: block;
    }
    .tc-result-wrapper .main-result .tdee span.popup {
        animation-name: popup;
        animation-duration: 0.5s;
        animation-iteration-count: infinite;
    }

    @keyframes popup {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.3);
        }
        100% {
            transform: scale(1);
        }
        
    }
    .tc-result-wrapper .main-result .tdee samp {
        font-size: 14px;
        display: block;
    }
    .main-result-box {
        display: flex;
        margin-top: 20px;
    }
    .main-result-box .tc-w-50{
        width: 50%;
        padding: 7px 5px 10px 15px;
        font-size: 13px;
        line-height: 20px;
        display: block;
    }
    .main-result-box .tc-w-50:first-child {
        border-right: 1px solid #ebc2ae;
    }
    .main-result-box .tc-w-50 div {
        font-size: 36px;
        margin-top: 5px;
        display: block;
        margin-top: 20px;
        font-weight: bold;
    }
    .main-result-box .tc-w-50 span{
        color:#D9AC95;
    }
    .result-body {
        padding: 15px;
    }
    .result-box-row {
        padding: 5px 10px;
        margin-bottom: 5px;
        border-radius: 5px;
        display: flex;
        background-color: #F8F8F8;
        color:#444;
    }
    .result-box-row span {
        display: inline-block;
        width: 50%;
        font-weight: bold;
    }
    .result-box-row span:first-child {
        float: left;
        font-weight: bold;
    }
    .result-box-row span:last-child {
        float: right;
        padding-top: 2px;
    }
    .result-box-row span:last-child samp {
        color:#A3A39A;
        font-weight: normal;
        font-size: 14px;
        display: block;
    }
    .result-body table {
        width: 100%;
        margin-top: 30px;
    }
    .result-body table tr td{
        border-bottom: 1px solid #DBD0BE;
        font-size: 12px;
        color:#A3A39A;
        padding: 10px 5px;
    }
    .result-body table tr:last-child td{
        border-bottom: none;
    }
    .hide {
        right: 120%;
        opacity: 0;
    }
    .d-none {
        display: none;
    }
    @media screen and (max-width:600px){
        .tc-form-wrapper {
            width: 100% !important;
        }
        .tc-result-wrapper {
            width: 100% !important;
        }
        .tc-result-wrapper .main-result {
            position: static;
        }
        .tc-wrapper {
            flex-direction: column;
        }
        .irs--square .irs-grid {
            display: none;
        }
        .tc-result-wrapper {
            box-shadow: -0px -20px 40px -30px #aaa;
        }
        label.radio-section {
            width: 100%;
        }
        label.radio {
            margin-right: 0px;
            font-size: 14px;
        }
    }
--></style>
<div class="tc-wrapper">
<div class="tc-form-wrapper">
<div class="tc-unit-wrapper"><span class="tc-unit active" data-unit="us"><span class="tc-unit active" data-unit="us"> Imperial Units</span></span> <span class="tc-unit" data-unit="metric"><span class="tc-unit" data-unit="metric"> Metric units</span></span><hr /></div>
<div class="tc-radio-wrapper" style="margin-top: 40px;"><label class="radio-section">Gender</label> <label class="radio"> <input type="radio" value="male" name="gender" checked="checked" /> <span>Male</span> </label> <label class="radio"> <input type="radio" value="female" name="gender" /> <span>Female</span> </label></div>
<hr />
<div class="tc-range-input-wrapper" style="margin-top: 40px;"><label for="">Age <small>(years)</small></label>
<div class="tc-input-group">
<div class="slider"><input type="text" id="age" class="js-range-slider" data-min="19" value="30" data-max="70" name="my_range" /></div>
<div class="input"><input type="text" class="one-input" value="30" /></div>
</div>
</div>
<hr />
<div class="tc-range-input-wrapper" style="margin-top: 40px;">
<div class="group metricUnit"><label for="">Height <small>(feet/inches)</small></label>
<div class="tc-input-group">
<div class="slider"><input type="text" class="ftin" name="my_range" value="5ft 3in" /></div>
<div class="input f" style="margin-right: 10px;"><input type="text" class="two-input" id="h-ft" value="5" /></div>
<div class="input i"><input type="text" class="two-input" id="h-in" value="3" /></div>
</div>
</div>
<div class="group usUnit hide"><label for="">Height <small>(cm)</small></label>
<div class="tc-input-group">
<div class="slider"><input type="text" data-min="100" value="137" data-max="220" class="js-range-slider" name="my_range" /></div>
<div class="input f" style="margin-right: 10px;"><input type="text" class="one-input" id="h-cm" value="4" /></div>
</div>
</div>
</div>
<hr />
<div class="tc-range-input-wrapper" style="margin-top: 40px;">
<div class="group metricUnit"><label for="">Weight <small>(lbs)</small></label>
<div class="tc-input-group">
<div class="slider"><input type="text" class="js-range-slider" data-min="60" value="130" data-max="399" name="my_range" /></div>
<div class="input"><input type="text" class="one-input" id="w-lbs" value="130" /></div>
</div>
</div>
<div class="group usUnit hide"><label for="">Weight <small>(kg)</small></label>
<div class="tc-input-group">
<div class="slider"><input type="text" class="js-range-slider" data-min="30" value="60" data-max="150" name="my_range" /></div>
<div class="input"><input type="text" class="one-input" id="w-kg" value="30" /></div>
</div>
</div>
</div>
<hr />
<div class="tc-radio-wrapper" style="margin-top: 40px;"><label class="radio-section">Goal</label> <label class="radio"> <input type="radio" value="maintain" name="goal" checked="checked" /> <span>Maintain Weight</span> </label> <label class="radio"> <input type="radio" value="lose" name="goal" /> <span>Lose Weight</span> </label> <label class="radio"> <input type="radio" value="gain" name="goal" /> <span>Gain Weight</span> </label></div>
<hr />
<div class="tc-range-input-wrapper" style="margin-top: 40px;"><label for="">Physical Activity</label>
<div class="tc-input-group"><select id="act">
<option value="1.2">SEDENTARY (NO EXERCISE)</option>
<option value="1.375">LIGHT EXERCISE (1X-3X WORKOUTS PER WEEK)</option>
<option value="1.55">MODERATE (3X-4X WORKOUTS PER WEEK)</option>
<option value="1.725">ACTIVE (5X WORKOUTS PER WEEK)</option>
<option value="1.9">EXTREME ACTIVITY (5X+ WORKOUTS PER WEEK/TRAINED ATHLETE)</option>
</select></div>
</div>
<div class="tc-radio-wrapper" style="text-align: right;"><button class="tc-submit">Calculate TDEE</button></div>
</div>
<div class="tc-result-wrapper" id="result">
<div class="main-result"><span class="label">TDEE</span> <span class="tdee"><span id="tdee">1734</span> <samp>Calories/day</samp></span>
<div class="main-result-box isGoal d-none">
<div class="tc-w-50">To <span>maintain</span> your current weight your required calories per day should be <br />
<div id="tdee2">2123</div>
</div>
<div class="tc-w-50">To <span>maintain</span> your current weight your required calories per day should be <br />
<div id="tdee_goal">2123</div>
</div>
</div>
</div>
<div class="result-body">
<div class="result-box-row"><span style="line-height: 48px;">BMR</span> <span><span id="bmr" style="width: 100%;">1445</span> <samp>Calories/day</samp></span></div>
<div class="result-box-row" style="padding: 15px 10px;"><span>BMI</span> <span id="bmi">23.0</span></div>
<table cellspacing="0;" class="isGoal d-none">
<tbody>
<tr>
<td>15% Calorie Deficit (Recommended)</td>
<td><span id="p15">1726</span> <br /> calories/day</td>
</tr>
<tr>
<td>20% Calorie Deficit (High)</td>
<td><span id="p20">1726</span> <br /> calories/day</td>
</tr>
<tr>
<td>25% Calorie Deficit (Extreme)</td>
<td><span id="p25">1726</span> <br /> calories/day</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<script>// <![CDATA[
$(".js-range-slider").ionRangeSlider({
        skin: "square",
        grid: true,
        onChange : function(data){
            $(data.input).parent('.slider').siblings('.input').find('input').val(data.from);
        }
    });
    
    
    var grid = [];
    for(var i=4; i<=7; i++){
        var full = 1;
        for(var x=1; x<=12; x++){
            var v = i+`ft `+x+`in`;
            if(x == 12){
                var n = i+1;
                v = n+ `ft `;
            }
            grid.push(v);
        }
        
    }
    $(".ftin").ionRangeSlider({
        skin: "square",
        grid:true,
        values:grid,
        onChange : function(data){
            var v = data.from_value;
            v = v.split(" ");
            var f = v[0].replace("ft" , "");
            var i = v[1].replace("in" , "");
            $(data.input).parent('.slider').siblings('.input.f').find('input').val(f);
            $(data.input).parent('.slider').siblings('.input.i').find('input').val(i);
        }
    });

    $('.one-input').keyup(function(){
        var inp = $(this).val();
        var input = $(this).parent('.input').siblings('.slider').find('input').data("ionRangeSlider");
        input.update({
            from: inp
        });

    });

    $(".two-input").on("input" , function(){
        console.log(1);
        var f = $('#h-ft').val();
        var i = $('#h-in').val();
        var v = grid.indexOf(f+"ft "+i+"in"); 
        var input = $(this).parent('.input').siblings('.slider').find('input').data("ionRangeSlider");
        console.log(input);
        input.update({
            from: v
        });
    });

/**************
 * Number Counter
**************/
$.fn.countTo = function(options) {
	// merge the default plugin settings with the custom options
	options = $.extend({}, $.fn.countTo.defaults, options || {});

	// how many times to update the value, and how much to increment the value on each update
	var loops = Math.ceil(options.speed / options.refreshInterval),
			increment = (options.to - options.from) / loops;

	return $(this).each(function() {
			var _this = this,
					loopCount = 0,
					value = options.from,
					interval = setInterval(updateTimer, options.refreshInterval);

			function updateTimer() {
					value += increment;
					loopCount++;
					$(_this).html(value.toFixed(options.decimals));

					if (typeof(options.onUpdate) == 'function') {
							options.onUpdate.call(_this, value);
					}

					if (loopCount >= loops) {
							clearInterval(interval);
							value = options.to;

							if (typeof(options.onComplete) == 'function') {
									options.onComplete.call(_this, value);
							}
					}
			}
	});
};


function conter(from , to)
{
	$.fn.countTo.defaults = {
		from: from,  // the number the element should start at
		to: to,  // the number the element should end at
		speed: 600,  // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,  // the number of decimal places to show
		onUpdate: null,  // callback method for every time the element is updated,
		onComplete: null,  // callback method for when the element finishes updating
	};
}



    $(".tc-unit").on("click" , function(){
        $(".tc-unit").removeClass('active');
        $(this).addClass('active');
        if($(this).attr('data-unit') == "us"){
            $('.group.metricUnit').removeClass('hide');
            $('.group.usUnit').addClass('hide');
        }else {
            $('.group.metricUnit').addClass('hide');
            $('.group.usUnit').removeClass('hide');
        }
        
    });

    $(".tc-submit").on('click', function(){
        var unit = $('.tc-unit.active').attr('data-unit');
        var age = Number($("#age").val());
        var act = $("#act").val();
        var gender = $("input[name=gender]:checked").val();
        
        if(unit == "metric"){
        
            var h = $("#h-cm").val();
            var w = $("#w-kg").val();
            
        }else {
            var h_ft = $("#h-ft").val();
            var h_in = $("#h-in").val();
            var w_lbs = $("#w-lbs").val();
            var h = ((h_ft*12)+Number(h_in)) * 2.54;
            console.log(((h_ft*12)+Number(h_in)));
            var w = w_lbs * 0.453592;
        
        }

        

        var goal = $("input[name=goal]:checked").val();
        
        var bmi = w / ((h/100) * (h/100));
        var s = 0;        
        if(gender == "male"){
			s = 5;
		}else if(gender == "female"){
			s = -161;
        }
        
        
        var bmr = 10 * Number(w) + 6.25 * Number(h) - 5 * Number(age) + Number(s);
        console.log(bmr);
        var tdee = Number(bmr * act);
        
        $("#bmi").html(bmi.toFixed(1));
        $("#bmr").html(bmr.toFixed(0));
        $("#tdee").addClass('popup');

        // $("#tdee").html(tdee.toFixed(0));

        var curTDEE = $("#tdee").html();
        $("#tdee").countTo({
                from: parseFloat(curTDEE),
                to: parseFloat(tdee),
                speed: 1000,
                decimals: 0,
                refreshInterval: 50,
                onComplete: function(value) {
                    $("#tdee").removeClass('popup');
                }
        });

        $("#tdee2").html(tdee.toFixed(0));
        console.log(goal);
        
        if(goal == "lose"){
            $(".isGoal").removeClass('d-none');
            $(".tc-w-50:last-child span").html('lose');
			$("#p15").html((tdee-(tdee * 0.15)).toFixed(0)); 
			$("#p20").html((tdee-(tdee * 0.20)).toFixed(0)); 
            $("#p25").html((tdee-(tdee * 0.25)).toFixed(0));
            console.log((tdee-(20*(tdee/100)))); 
            $("#tdee_goal").html((tdee-(20*(tdee/100))).toFixed(0));
			
		}else if(goal == "gain"){
            $(".tc-w-50:last-child span").html('gain');
			$(".isGoal").removeClass('d-none');
			$("#p15").html((tdee * 1.05).toFixed(0));
			$("#p20").html((tdee * 1.10).toFixed(0));
			$("#p25").html((tdee * 1.15).toFixed(0));
            $("#tdee_goal").html((tdee+(20*(tdee/100))).toFixed(0));
		}else {
            $(".isGoal").addClass('d-none');
        }
        $('html, body').animate({
            scrollTop: $("#result").offset().top
        }, 10);
    });
// ]]></script>

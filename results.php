<!DOCTYPE HTML>
<html>
	<head>
		<title>Tina A - Communication Quiz - Results</title>	
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<style>
			body {
				background: -webkit-linear-gradient(to left, #57BC90, #77C9D4);
				background: linear-gradient(to left, #57BC90, #77C9D4);
			}
		</style>
	</head>
	<body>
		<!-- Nav -->
			<div class = "page-wrap">
				<header>
			<a href="../index.html"><svg id = "homelink" width="103px" height="103px" viewBox="233 33 103 103" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    		<path d="M308.445312,66.8203125 L313.226562,62.109375 L335.65625,84.2578125 L312.382812,107.742188 L307.460938,102.960938 C309.523448,100.47655 311.140619,97.6289223 312.3125,94.4179688 C313.484381,91.2070152 314.070312,87.8203303 314.070312,84.2578125 C314.070312,77.8359054 312.195331,72.0234635 308.445312,66.8203125 Z M302.539062,72.7265625 C304.648448,76.0547041 305.703125,79.8984157 305.703125,84.2578125 C305.703125,89.4140883 304.367201,93.6796706 301.695312,97.0546875 L289.882812,85.2421875 L302.539062,72.7265625 Z M272.796875,102.398438 L283.414062,92.0625 L294.523438,103.101562 C291.523422,104.929697 288.148456,105.84375 284.398438,105.84375 C280.273417,105.84375 276.406268,104.695324 272.796875,102.398438 Z M266.890625,108.445312 C272.093776,112.289082 277.929655,114.210938 284.398438,114.210938 C287.164076,114.210938 289.953111,113.765629 292.765625,112.875 C295.578139,111.984371 298.22655,110.742195 300.710938,109.148438 L305.703125,114.351562 L284.398438,135.65625 L261.96875,113.507812 L266.890625,108.445312 Z M266.257812,95.7890625 C264.054676,91.9452933 262.953125,88.1015817 262.953125,84.2578125 C262.953125,80.9296709 263.820304,77.5781419 265.554688,74.203125 L276.664062,85.2421875 L266.257812,95.7890625 Z M260.210938,101.835938 L255.5,106.6875 L233,84.2578125 L254.445312,63.09375 L259.507812,68.015625 C256.226546,72.7500237 254.585938,78.164032 254.585938,84.2578125 C254.585938,90.6797196 256.460919,96.539036 260.210938,101.835938 Z M295.929688,66.2578125 L283.414062,78.7734375 L271.742188,67.1015625 C275.117204,64.4296741 279.335912,63.09375 284.398438,63.09375 C288.757834,63.09375 292.601546,64.148427 295.929688,66.2578125 Z M301.695312,60.3515625 C299.445301,58.5703036 296.773453,57.1640677 293.679688,56.1328125 C290.585922,55.1015573 287.492203,54.5859375 284.398438,54.5859375 C277.460903,54.5859375 271.273465,56.7421659 265.835938,61.0546875 L260.984375,56.34375 L284.398438,33 L306.757812,55.2890625 L301.695312,60.3515625 Z" id="t" stroke="none" fill="" fill-rule="evenodd"></path>
			</svg></a>
		</header>
		<!-- Main -->
		
		<?php   
        	  
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];
            $answer11 = $_POST['question-11-answers'];
            $answer12 = $_POST['question-12-answers'];
            $answer13 = $_POST['question-13-answers'];
            $answer14 = $_POST['question-14-answers'];
            $answer15 = $_POST['question-15-answers'];
            $answer16 = $_POST['question-16-answers'];
            $answer17 = $_POST['question-17-answers'];
            $answer18 = $_POST['question-18-answers']; 
            $answer19 = $_POST['question-19-answers'];
            $answer20 = $_POST['question-20-answers']; 
            
            $dCount = 0;
            $nCount = 0;
            $aCount = 0;
            $cCount = 0;
            $ansCount = 0;
            
            if ($answer1 == "A") { $dCount++; $ansCount++;}
            if ($answer1 == "B") { $nCount++; $ansCount++;}
            if ($answer1 == "C") { $aCount++; $ansCount++;}
            if ($answer1 == "D") { $cCount++; $ansCount++;}
            
            if ($answer2 == "A") { $nCount++; $ansCount++;}
            if ($answer2 == "B") { $dCount++; $ansCount++;}
            if ($answer2 == "C") { $aCount++; $ansCount++;}
            if ($answer2 == "D") { $cCount++; $ansCount++;}
            
            if ($answer3 == "A") { $nCount++; $ansCount++;}
            if ($answer3 == "B") { $aCount++; $ansCount++;}
            if ($answer3 == "C") { $dCount++; $ansCount++;}
            if ($answer3 == "D") { $cCount++; $ansCount++;}
            
            if ($answer4 == "A") { $cCount++; $ansCount++;}
            if ($answer4 == "B") { $aCount++; $ansCount++;}
            if ($answer4 == "C") { $nCount++; $ansCount++;}
            if ($answer4 == "D") { $dCount++; $ansCount++;}
            
            if ($answer5 == "A") { $aCount++; $ansCount++;}
            if ($answer5 == "B") { $nCount++; $ansCount++;}
            if ($answer5 == "C") { $cCount++; $ansCount++;}
            if ($answer5 == "D") { $dCount++; $ansCount++;}
            
            if ($answer6 == "A") { $dCount++; $ansCount++;}
            if ($answer6 == "B") { $nCount++; $ansCount++;}
            if ($answer6 == "C") { $aCount++; $ansCount++;}
            if ($answer6 == "D") { $cCount++; $ansCount++;}
            
 			if ($answer7 == "A") { $nCount++; $ansCount++;}
            if ($answer7 == "B") { $aCount++; $ansCount++;}
            if ($answer7 == "C") { $cCount++; $ansCount++;}
            if ($answer7 == "D") { $dCount++; $ansCount++;}
            
            if ($answer8 == "A") { $aCount++; $ansCount++;}
            if ($answer8 == "B") { $dCount++; $ansCount++;}
            if ($answer8 == "C") { $cCount++; $ansCount++;}
            if ($answer8 == "D") { $nCount++; $ansCount++;}
            
            if ($answer9 == "A") { $cCount++; $ansCount++;}
            if ($answer9 == "B") { $nCount++; $ansCount++;}
            if ($answer9 == "C") { $dCount++; $ansCount++;}
            if ($answer9 == "D") { $aCount++; $ansCount++;}
            
            if ($answer10 == "A") { $cCount++; $ansCount++;}
            if ($answer10 == "B") { $aCount++; $ansCount++;}
            if ($answer10 == "C") { $dCount++; $ansCount++;}
            if ($answer10 == "D") { $nCount++; $ansCount++;}
            
            if ($answer11 == "A") { $nCount++; $ansCount++;}
            if ($answer11 == "B") { $aCount++; $ansCount++;}
            if ($answer11 == "C") { $dCount++; $ansCount++;}
            if ($answer11 == "D") { $cCount++; $ansCount++;}
                
            if ($answer12 == "A") { $aCount++; $ansCount++;}
            if ($answer12 == "B") { $nCount++; $ansCount++;}
            if ($answer12 == "C") { $cCount++; $ansCount++;}
            if ($answer12 == "D") { $dCount++; $ansCount++;}
            
            if ($answer13 == "A") { $dCount++; $ansCount++;}
            if ($answer13 == "B") { $aCount++; $ansCount++;}
            if ($answer13 == "C") { $cCount++; $ansCount++;}
            if ($answer13 == "D") { $nCount++; $ansCount++;}
            
            if ($answer14 == "A") { $nCount++; $ansCount++;}
            if ($answer14 == "B") { $cCount++; $ansCount++;}
            if ($answer14 == "C") { $aCount++; $ansCount++;}
            if ($answer14 == "D") { $dCount++; $ansCount++;}
            
            if ($answer15 == "A") { $nCount++; $ansCount++;}
            if ($answer15 == "B") { $cCount++; $ansCount++;}
            if ($answer15 == "C") { $aCount++; $ansCount++;}
            if ($answer15 == "D") { $dCount++; $ansCount++;}
            
            if ($answer16 == "A") { $dCount++; $ansCount++;}
            if ($answer16 == "B") { $nCount++; $ansCount++;}
            if ($answer16 == "C") { $aCount++; $ansCount++;}
            if ($answer16 == "D") { $cCount++; $ansCount++;}
            
            if ($answer17 == "A") { $dCount++; $ansCount++;}
            if ($answer17 == "B") { $nCount++; $ansCount++;}
            if ($answer17 == "C") { $cCount++; $ansCount++;}
            if ($answer17 == "D") { $aCount++; $ansCount++;}
            
            if ($answer18 == "A") { $cCount++; $ansCount++;}
            if ($answer18 == "B") { $nCount++; $ansCount++;}
            if ($answer18 == "C") { $aCount++; $ansCount++;}
            if ($answer18 == "D") { $cCount++; $ansCount++;}
            
            if ($answer19 == "A") { $cCount++; $ansCount++;}
            if ($answer19 == "B") { $dCount++; $ansCount++;}
            if ($answer19 == "C") { $aCount++; $ansCount++;}
            if ($answer19 == "D") { $nCount++; $ansCount++;}
            
            if ($answer20 == "A") { $cCount++; $ansCount++;}
            if ($answer20 == "B") { $nCount++; $ansCount++;}
            if ($answer20 == "C") { $aCount++; $ansCount++;}
            if ($answer20 == "D") { $dCount++; $ansCount++;}
			
			if ($ansCount == 0) {$ansCount = 20; echo "<p id = 'warning'>Oops! It looks like you accessed this page without taking the quiz or accidentally refreshed your browser.</p>";}
			
		    $dCount = round($dCount/$ansCount * 100, 0);
		    $aCount = round($aCount/$ansCount * 100, 0);
            $cCount = round($cCount/$ansCount * 100, 0);
            $nCount = round($nCount/$ansCount * 100, 0);   
            
          	?>

		<div class="container-results">
  			<h1>Here are your results:</h1>
			<div class="chart" id = "chart1" data-percent="0"></div>
  			<div class="chart" id = "chart2" data-percent="0"></div>
  			<div class="chart" id = "chart3" data-percent="0"></div>
  			<div class="chart" id = "chart4" data-percent="0"></div>
		</div>
		
		<div class = "explanation">
			<h2 class = "results">Demonstrators</h2>
			<p>Demonstrators are people-oriented, fast-paced, and enthusiastic. They usually have more open and casual 
			body language. They tend to be animated and outgoing and prefer an informal atmosphere. Demonstrators can 
			be outrageous, spontaneous, excitable and sociable. They are ideas people who like to be in the limelight. 
			If over-balanced in this style, some people may be unreliable, self-centered, overly optimistic, 
			and indiscriminate.</p>
			<p>Common traits: </p>
			<ul>
				<li>Are somewhat disorganized;</li>
				<li>Have trouble being on time and keeping track of detail;</li>
				<li>Wear bright colors;</li>
				<li>Sit in an open posture;</li>
				<li>Take the initiative in the conversation;</li>
				<li>Laugh easily and loudly;</li>
				<li>Are fun-loving; and</li>
				<li>Like to talk about themselves.</li>
			</ul>
			<p>Types of professions where we find people with this style: salesperson; trial lawyer; entertainer; public 
			relations officer; advertising executive; social director.</p>
		</div>
		
		<div class = "explanation">
			<h2 class = "results">Assertors</h2>
			<p>Assertors are fast-paced and direct (like Demonstrators) but are more task-oriented than people-oriented. 
			They tend to be hard working, ambitious, and easily take on leadership roles. They are good at making decisions 
			quickly and efficiently. They are goal-oriented, assertive, and confident. Assertors are the take-charge people 
			who let nothing stop them. If over-balanced in this style, some people may be too impatient, competitive, and 
			judgmental.</p>
			<p>Common traits: </p>
			<ul>
				<li>Like timeliness and efficiency;</li>
				<li>Look and appear powerful and formal;</li>
				<li>Be highly discriminating in many areas;</li>
				<li>Laugh less frequently than demonstrators;</li>
				<li>Maintain a more serious demeanor;</li>
				<li>Take a leadership role in most situations;</li>
				<li>Ask pointed or challenging questions; and</li>
				<li>Have strong opinions and creative ideas to share.</li>
			</ul>			
			<p>Types of professions where we find many Assertors: corporate CEO; politician; stockbroker; lawyer; 
			drill sergeant; film/TV director; entrepreneur.</p><br />			
		</div>
		
		<div class = "explanation">
			<h2 class = "results">Contemplators</h2>	
			<p>Contemplators are task-oriented like Assertors. However, they are more indirect and slow-paced. Contemplators tend to be 
			analytical, detail-oriented, thinker types. They are persistent, good problem solvers, and pride themselves on their 
			orderliness and accuracy. Often seen alone, they tend to have quiet, low-key personalities. If over-balanced in this style 
			some people may be too withdrawn, rigid, closed-minded, and overly pessimistic.</p>
			<p>Common traits: </p>
			<ul>
				<li>Wear conservative, simple, functional clothing;</li>
				<li>Sit in a closed posture;</li>
				<li>Keep to themselves;</li>
				<li>Wait for others to initiate conversations;</li>
				<li>Take copious notes;</li>
				<li>Stay serious; and</li>
				<li>Like to hear facts, figures, statistics and proof.</li>
			</ul>			
			<p>Types of professions where we find many Contemplators: accountant; secretary; bookkeeper; engineer; electrician; 
			plumber; jeweler; scientist.</p><br />
		</div>

		<div class="explanation">
			<h2 class = "results">Narrators</h2>	
			<p>Narrators are slow-paced and indirect like Contemplators, but they are more people-oriented like Demonstrators. 
			They are warm, friendly, gentle and cooperative. They highly value relationships over goals. They are good at 
			listening, have a good temperament, and tend to be open-minded. Most people find them to be loving, and emotionally
			intuitive. If over-balanced in this style, some people may be overly meek and easily sidetracked.</p>
			<p>Common traits: </p>
			<ul>
				<li>Come across as very accommodating and helpful;</li>
				<li>Wear casual, simple clothing;</li>
				<li>Take the initiative to create relationships;</li>
				<li>Enjoy both talking and listening; </li>
				<li>Display pictures of family;</li>
				<li>Laugh quietly and often (but sometimes just to be polite); and</li>
				<li>Show gratitude easily.</li>
			</ul>			
			<p>Types of professions where we find many Narrators: counselor; teacher; minister; human resources manager; nurse; social worker.</p><br />
		</div>
		</div>
		<footer>&copy; 2017 Tina Anastopoulos. Content from <a href="https://www.ioaging.org">IOA</a>.</footer>
		<script src="../assets/js/jquery.min.js"></script>
		<script src="http://rendro.github.io/easy-pie-chart/javascripts/jquery.easy-pie-chart.js"></script>
		<script>
			/******* results ********/

			var c1 = <?php echo $dCount ?>; 
			var c2 = <?php echo $aCount ?>;  
			var c3 = <?php echo $cCount ?>;  
			var c4 = <?php echo $nCount ?>;  

			$(function() {
  				$('.chart').easyPieChart({
    				scaleColor: false,
    				lineWidth: 25,
    				lineCap: 'round',
    				barColor: '#00ffff',
    				size: 130,
    				animate: 500,
  				});
			});

			function updateChart(chartId,pct,lbl) {
				document.getElementById(chartId).setAttribute("data-percent", pct);
				document.getElementById(chartId).innerHTML = pct+"%"+"</br>"+"<span>"+lbl+"</span";
			}

			updateChart("chart1",c1,"DEMONSTRATOR");
			updateChart("chart2",c2,"ASSERTOR");
			updateChart("chart3",c3,"CONTEMPLATOR");
			updateChart("chart4",c4,"NARRATOR");
		</script>
	</body>
</html>

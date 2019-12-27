<html> 
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="css/style.css" /> 
		<link rel="stylesheet" href="css/bootstrap.min.css" /> 
		<script src="js/bootstrap.min.js"></script>
		<script src="js/index.js"></script>
		<title>Med Quiz</title> 
	</head>

	<body>
		<div class="main-container">
			<div class="question-categories">
				<?php include 'util.php';?>
				<a href="index.php?section=problem-list&subsection=main" class="section-link selected">Creating Problem List</a>
				<ul class="question-list" >
					<li id="case-one"><a href="index.php?section=problem-list&subsection=case-one" <?php subsection_selected("case-one") ?>>Case 1</a></li>
					<li id="lump-split"><a href="index.php?section=problem-list&subsection=lump-split"<?php subsection_selected("lump-split") ?> class="section-link">Lumping and Splitting</a></li>
					<li id="case-two"><a href="index.php?section=problem-list&subsection=case-two" <?php subsection_selected("case-two") ?> class="section-link">Case 2</a></li>
					<li id="recap"><a href="index.php?section=problem-list&subsection=recap" <?php subsection_selected("recap") ?> class="section-link">Recap</a></li>
					<li id="case-three"><a href="index.php?section=problem-list&subsection=case-three" <?php subsection_selected("case-three") ?> class="section-link">Case 3</a></li>
					<li id="case-four"><a href="index.php?section=problem-list&subsection=case-four" <?php subsection_selected("case-four") ?> class="section-link">Case 4</a></li>
					<li id="conclusion"><a href="index.php?section=problem-list&subsection=conclusion" <?php subsection_selected("conclusion") ?> class="section-link">Conclusion</a></li>
				</ul>
			</div>
			<div class="sub-container">
			<div class="content-container"> 
				<div class="content">
					<?php 
					if (isset($_GET['section']) && isset($_GET['subsection'])) {
						if ($_GET['section'] == "problem-list") {
							if ($_GET['subsection'] == "main") {
								require("problem-list.php");
							} else if ($_GET['subsection'] == "case-one") {
								require("case-one.php");
							} else if ($_GET['subsection'] == "lump-split") {
								require("lump-split.php");
							} else if ($_GET['subsection'] == "case-two") {
								require("case-two.php");
							} else if ($_GET['subsection'] == "recap") {
								require("recap.php");
							} else if ($_GET['subsection'] == "case-three") {
								require("case-three.php");
							} else if ($_GET['subsection'] == "case-four") {
								require("case-four.php");
							} else if ($_GET['subsection'] == "conclusion") {
								require("conclusion.php");
							}
						}
					} else {
							header('Location: /medquiz/index.php?section=problem-list&subsection=main');
					}
					?>
				</div>
			</div>
					<div class="nav-buttons">
						<button id="prev-button" type="button" class="btn btn-primary"> prev page </button>
						<button id="next-button" type="button" class="btn btn-primary"> next page </button>
					</div>
		</div>

		</div>
	</body>
</html>
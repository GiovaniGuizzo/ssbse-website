<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0022) -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>1st International Symposium on Search Based Software Engineering</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <link rel="stylesheet" href="styles/main.css" type="text/css">
    <link rel="stylesheet" href="styles/styles2009.css" type="text/css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>
<body>
<div id="page">
    <div id="banner">
        <div style="float: left;">
            <!-- <img style="vertical-align: bottom;" src="/images/cumberland_window.jpg" alt="Cumberland Lodge Window"/> -->
	    <img style="vertical-align: bottom;" id="logo" src="images/SSBSE_logo_small.png" alt="SSBSE Logo">
        </div>

        <div id="bannertext">
            <h1>SSBSE 2009</h1>
            <h2>1<sup>st</sup> International Symposium on Search Based Software Engineering</h2>
            <h3>Cumberland Lodge, Windsor, UK</h3>
            <h3>Wednesday 13<sup>th</sup> May - Friday 15<sup>th</sup> May</h3>
        </div>
        <div class="clearboth">&nbsp;</div>
    </div> <!-- end banner -->
    <div id="content">
    <div id="contenttitle">
        <h1>Software Engineering Experts' Panel: The Status and Future of SBSE in the Software Engineering Community</h1>
    </div>
    <div id="menucolumn">
        <div>
<ul class="top">
            <li class="menuitem"><a href="index.html">Home</a></li>
            <li class="menuitem"><a href="about.html">About SSBSE 2009</a></li>
            <li class="menuitem"><a href="register.html">Registration</a></li>
            <li class="menuitem"><a href="program.html">Program</a></li>
            <li class="menuitem"><a href="resources.html">Symposium Resources</a></li>
            <li class="menuitem"><a href="cfpart.html">Call for Participation</a></li>
            <li class="menuitem">Call for Papers:
<ul class="sub">
            <li class="menuitem"><a href="cfpreg.html">Regular Papers</a></li>
            <li class="menuitem"><a href="phdtrack.html">PhD Track</a></li>
            <li class="menuitem"><a href="cfpfast.html">Fast Abstracts</a></li>
</ul>
</li>
            <li class="menuitem"><a href="keynote.html">Keynote Speakers</a></li>
            <li class="menuitem"><a href="expert.html">Experts' Panel</a></li>
            <li class="menuitem">Paper Submission:
<ul class="sub">
            <li class="menuitem"><a href="submissionreg.html">Regular Papers</a></li>
            <li class="menuitem"><a href="submissionfast.html">Fast Abstracts</a></li>
</ul>
</li>
            <li class="menuitem"><a href="venue.html">Venue</a></li>
            <li class="menuitem"><a href="travel.html">Travel Information</a></li>
            <li class="menuitem"><a href="aboutsbse.html">About SBSE</a></li>
            <li class="menuitem"><a href="organisers.html">Organisers</a></li>
            <li class="menuitem"><a href="sponsors.html">Sponsors</a></li>
            <li class="menuitem"><a href="specialissue.html">EMSE Special Issue</a></li>
    </ul>
            <img id="menubottom" src="images/menu_bottom_3.png" alt="menu bottom corners">
        </div>
    </div>
    <div id="maincontainer">
    
    
    
    <div id="maincolumn">

            <p>We are very pleased to announce a special panel discussion as part of the symposium program.  
	Five world-leading experts on software engineering will discuss the current state of search-based
	software engineering research, identify challenges to the research agenda, and assess the potential 
	impact of SBSE on software engineering practice. </p>

	<p>The panellists are:</p>

ENDHTML;

    $people = array();

    $person['name'] = "Norman Fenton";
    $person['desc'] = "Professor of Computer Science, Queen Mary, University of London, UK";
    $person['imgurl'] = "/images/norman-fenton-small.jpg";
    $person['homepage'] = "http://www.dcs.qmul.ac.uk/~norman/";
    $people[] = $person;

    $person['name'] = "Anthony Finkelstein";
    $person['desc'] = "Professor of Software Systems Engineering, University College London, UK";
    $person['imgurl'] = "/images/anthony-finkelstein-small.jpg";
    $person['homepage'] = "http://www.cs.ucl.ac.uk/staff/A.Finkelstein";
    $people[] = $person;

    $person['name'] = "Paolo Inveradi";
    $person['desc'] = "Professor, Universit&agrave;  dell'Aquila, Italy";
    $person['imgurl'] = "/images/paolo-inveradi-small.jpg";
    $person['homepage'] = "http://www.di.univaq.it/inverard/paola.html";
    $people[] = $person;

    $person['name'] = "Mary Lou Soffa";
    $person['desc'] = "Owen R. Cheatham Professor, University of Virginia, USA";
    $person['imgurl'] = "/images/mary-lous-offa-small.jpg";
    $person['homepage'] = "http://www.cs.virginia.edu/~soffa/";
    $people[] = $person;

    $person['name'] = "Ian Sommerville";
    $person['desc'] = "Professor of Software Engineering, St Andrews University, UK";
    $person['imgurl'] = "/images/ian-sommerville-small.jpg";
    $person['homepage'] = "http://www.cs.st-andrews.ac.uk/~ifs/";
    $people[] = $person;

    $contentinfo['maincolumn'] .= genPeopleList($people, 80);

    $contentinfo['maincolumn'] .=<<<ENDHTML

	<p>We envisage that the discussion led by this distinguished panel will help to inform the direction that the 
	SBSE community takes as it continues to grow and mature.  Position statements from the panellists will be 
	published on the on this website in advance of the symposium as well as in the conference proceedings.  
	We encourage attendees to participate in this discussion at the symposium itself, and through the submission of fast 
	abstracts detailing their positions on key SBSE themes.</p>

ENDHTML;

    echo genPage($contentinfo);
?>

	
    </div> <!-- end main column -->
    </div> <!-- end main container -->    <div class="clearboth">&nbsp;</div>
    </div> <!-- end content -->
    <div id="footer">
        <a href="http://www.berner-mattner.com/"><img src="images/berner_mattner.png" alt="Berner Mattner logo"></a>
        <a href="http://www.sogeti.com/"><img src="images/Sogeti2.png" alt="Sogeti logo"></a><br>
        <a href="http://www.epsrc.ac.uk/"><img src="images/EPSRC_mono_72dpi.jpg" alt="EPSRC logo"></a>
    </div>
</div> <!-- end page -->


</body>
</html>
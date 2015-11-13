<!DOCTYPE html>
<html lang = "en">

<head>

<meta charset = "utf-8"/>
<meta name = "description"		content = "Home Page of Exza Tech Solutions"/>
<meta name = "keywords"		content = "Exza Tech Solutions, Information Technology Solutions, Solutions, Web Solutions, Java Solutions, Dot Net, C,C++"/>
<meta name = "author"	content = "Ronak Shah"/>

<title> EXZA Tech Solutions </title>
<link  href="styles/mystyle.css" rel="stylesheet" type="text/css"/>
<script src="script/jobs.js"></script>
</head>

<body>

<?php
include("headernav.php");
?>

<section class= "contentjob">
<!--Refence to background image-->
<p>Reference:<a href = "https://annacostafood.wordpress.com/2012/10/">background image</a></p>

<aside class = "move">
<!--An photo which is being asked to include-->
<img  src="images/software.jpg" alt="Image for Representational purpose " width="400" height="400"/>
<p>Reference:<a href = "http://mashable.com/2010/12/20/constantly-changing-technologies/">image</a></p>
</aside>

<form id="job1form" action="enquire.php">
<p><label for = "job1ref"></label></p>
<input type ="radio" name = "RefNo" id = "job1ref" value = "25698" checked ="checked"/>

<p><label for = "job1title"></label></p>
<input type ="radio" name = "Job1nameTitle" id = "job1title" value = "Software Developer" checked ="checked"/>

<h2>Software Developer</h2>
<p>
<!--Details regarding position-->
At Exza Tech Solution there is an multiple opening for software developer, related information is given below candidates eligible for this job can apply for this job and we will get back to you in a weeks time.
</p>
<ol>
<li><h3>Job Ref No:</h3><p id = "job2ref"> 29172 </p></li>

<li><h3>Job Type:</h3>	Entry Level.Full-Time</li>

<li><h3>Contact person:</h3> Sam Scott-sam@exza.com</li>

<li><h3>Postion :</h3> Software Developer</li>


<li><h3>About the Role </h3>
<p>For this role you will have to utilize your strong programming skills.
</p></li>
<li><h3>Responsibility:</h3>
<ul>

<li>A tertiary qualification in a Software Engineering / IT is regarded essential, with any business qualifications given high regard.</li>
<li>Demonstrated experience developing Web and/or Windows Forms applications using Microsoft's .NET Framework (C#) and Visual Studio 2003/2008/2010/2012.</li> 
<li>Hands on MS SQL Server 2005/2008/2008R2/2012.</li>
<li>Object-oriented programming and design techniques.</li>
<li>Understanding of Web technologies (HTML, JavaScript, JQuery, CSS, DHTML, AJAX, XML, and XSL).</li> 
<li>Well-developed oral and written communication skills.</li>
<li>Excellent analytical, mathematical, and creative problem-solving skills.</li> 
<li>Strong interpersonal skills, including the ability to collaborate effectively with colleagues.</li> 
<li>A positive attitude towards challenges.</li>
<li>Reference:<a href = "http://www.seek.com.au/job/27377478">content</a></li>

</ul>
</li>



<li><h3>Personal Attribute Sought:</h3>
<h4>Essential Skills</h4>
<ul>
<li>Graduate degree with good score.</li>
<li>Computer Knowledge.</li>
<li>Hands on Microsoft Office.</li>
<li>Excellent communication skills</li>
<li>Good interpersonal skills and ready to work in a Team.</li>
<li>positive mindset and readiness to get job done on time.</li>
<li>Ready to move anywhere in the country for organisation.</li>
<li>Ready to do Night shifts.</li>
</ul>
<h4>Desirable Skills</h4>
<ul>

<li>Experience will be handy.</li>
<li>Programming knowledge in .Net will be considered</li>
<li>Familiarity with computer hardware and software.</li>
<li>Previous experience with Financial systems is advantageous.</li>

</ul>
</li>
</ol>

<!--This will direct to the  apply page-->
<p>
We would like to take this opportunity to thank you in advance for your application and advise that only candidates that meet the position requirements and are an Australian Resident will be contacted.
</p>

<input type = "submit" value = "Apply"/>
</form>
</section>

<hr/>

<!-- In the footer organizations copy-right rights is being mentioned and designers name-->
<footer>
<?php
include("footer.php");
?>

</footer>

</body>
</html>
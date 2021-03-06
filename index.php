
<!DOCTYPE html>
<html lang = "en">

<head>

<meta charset = "utf-8"/>
<meta name = "description"		content = "Home Page of Exza Tech Solutions"/>
<meta name = "keywords"		content = "Exza Tech Solutions, Information Technology Solutions, Solutions, Web Solutions, Java Solutions, Dot Net, C,C++"/>
<meta name = "author"	content = "Ronak Shah"/>
<title> EXZA Tech Solutions </title>
<link  href="styles/mystyle.css" rel="stylesheet" type="text/css"/>
<script src="jobs.js"></script>
</head>
<!--Assignment 1 Student ID - 4949773 Name - Ronak Shah-->
<body>

<?php
include("headernav.php");
?>

<section>
<!--navigation links to move easily within page and reference of background image-->
<aside>
<p>Reference:<a class = "external" href = "https://annacostafood.wordpress.com/2012/10/">background image</a></p>
<ul id= "verticalnav">
<li><a href = "#digi">Digital Marketing</a></li>
<li><a href = "#web">Website Design</a></li>
<li><a href = "#sup">IT Support</a></li>
</ul>
</aside>

<ul id= "verticalnav1">
<li> List of Available Positions:</li>
<li><a href = "job1.php">Customer Support Service</a></li>
<li><a href = "job2.php">Software Developer</a></li>
</ul>

<!--Company Introduction-->
</section>
<section id = "content">
<p>Exza Tech solutions is an IT company bas on web infrastructure. An client oriented organisations which always goes step forward to deliver productivity to the customers.
</p> 
<p>With many customers in fortune 500, company is growing faster then ever. Exza Tech solutions believe in quality instead of quantity. With friendly and professional staff Exza solutions is fastest emerging organisation.We deliver an world class and cost effective solutions to our clients.
</p>


<!--Company's various function is being explained in three different articles -->
<!-- And related data like Image and content with their references is being provided in following articles-->
<article id ="digi">
<img  src = "images/seo.jpg" alt = "Photo of digital marketing" width = "300" height = "300"/>

<h2>Digital Marketing</h2>
<p> Exza provides out of the world digital marketing and SEO services, social media marketing, Adwords management, Web design and development. Exza also specializes in high-end IT Support and computer repair with broad experience of over 10 years. At Introtech, we are passionate about enabling our valued clients to focus on their core abilities, while leaving their internet marketing, business IT support, and managed IT service matters to experts.
</p>
<p>Reference:<a class = "external" href = "http://www.introtech.com.au/">Image and content</a></p>
</article>

<article id ="web">
<img  src = "images/web.jpg" alt = "Photo for Web Designing" width = "300" height = "300"/>
<h2>Website Design</h2>
<p>An idea can change your life, convert your ideas into stunning websites!We understand the importance of increased online visibility for the growth of a company in today’s competitive economic market.With Introtech get recognized by your Potential customers and let yourself become unique in clusters of competitors.We have pool of experts in related fields.Our web designers are highly expert in designing and building user-friendly websites.</p>
<p>Reference:<a class = "external" href = "http://www.introtech.com.au/">Image and content</a></p>
</article>


<article id ="sup">
<img  src = "images/it_support.jpg" alt = "Photo for IT Support" width = "300" height = "300"/>
<h2>IT Support</h2>
<p>With Exza IT support, you can have your IT systems fully managed and get long-term advice regarding IT-related business issues. If you are in need of getting the most out of your IT systems, need temporary or ongoing technical support, or you simply want to excel in competition and want your IT support to get hold of you back, then you are at right place. We can provide 24/7 remote IT support to monitor your critical systems.</p>
<p>Reference:<a class = "external" href = "http://www.introtech.com.au/">Image and content</a></p>
</article>




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
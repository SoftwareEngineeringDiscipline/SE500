<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Tue Oct 20 2015 18:37:42 GMT+0000 (UTC) -->
<html data-wf-site="5615631c7481d047217c335f" data-wf-page="56157233ecd841d67a8f12df">
<head>
  <meta charset="utf-8">
  <title>Search Results</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/webflow.css">
  <link rel="stylesheet" type="text/css" href="../css/jaidens-supercool-site.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]
      }
    });
  </script>
  <script type="text/javascript" src="../js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/favicon.ico">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/img/webclip.png">
</head>
<!-- @author Tiffany
<?php

 //connect  to the database 
 $con = mysql_connect("192.168.1.128/phpmyadmin","spr_erau","$PRfall2015@ERAU");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else echo " succed logging into the database!";
?>

 //-select  the database to use 

 //-query  the database table 

 //-run  the query against the mysql query function 


 

	
if(!isset($_POST['email-form'])){
	header("Location:index.php");
}

$search_sql = "SELECT * FROM stock WHERE name LIKE '%".$_POST[search])"%' OR description LIKE '%".$_POST[search])"%'"  ;
$search_query = mysql_query($search_sql);
if(mysql_num_rows($search_query)!= 0){
$search_rs = mysql_fetch_assoc($search_query);
}

<!-- mySQL
SELECT * FROM stock WHERE name LIKE '%skirt%' OR description LIKE '%skirt%'
 -->

		<p>Search results</p>
<?php if(mysql_num_rows($search_query)!=0){
	do{
		?>
		<p><?php echo $search_rs['name']; ?> </p>
	
	}while($search_rs = mysql_fetch_assoc($search_query));

}else{
	echo "No results found";
}



?>
-->
<body>
  <div class="w-section head-panel">
    <div class="w-container top-menu">
      <div class="w-row toprow">
        <div class="w-col w-col-8"></div>
        <div class="w-col w-col-2 about-column"><a class="about" href="../about/about.html">About</a>
        </div>
        <div class="w-col w-col-2">
          <div class="w-dropdown" data-delay="0">
            <div class="w-dropdown-toggle topmenu">
              <div><span class="in-image-text">Jaiden91</span>
              </div>
              <div class="w-icon-dropdown-toggle usermenu"></div>
            </div>
            <nav class="w-dropdown-list"><a class="w-dropdown-link" href="#">Not you?</a><a class="w-dropdown-link" href="../user/user.html">Profile</a><a class="w-dropdown-link" href="../newedituser/neweditproject.html">Settings</a><a class="w-dropdown-link" href="../neweditproject/newedituser.html">New Project</a>
            </nav>
          </div>
        </div>
      </div>
    </div><img class="top-image" src="../images/Function room2.jpg">
  </div>
  <div class="w-section search-page-search">
    <div class="w-container">
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form">
          <div class="w-row">
            <div class="w-col w-col-2">
              <h1 class="searchpagetitle"><a class="smallheaderlink" href="../index.html">Project Hunter</a><a class="smallheaderlink" href="../index.html"></a></h1>
            </div>
            <div class="w-col w-col-8">
              <input class="w-input" id="Project-Search" type="text" placeholder="Cool Project" name="Project-Search" data-name="Project Search">
            </div>
            <div class="w-col w-col-2">
              <input class="w-button" type="submit" value="Submit" data-wait="Please wait...">
            </div>
          </div>
          <div>
            <div class="w-row">
              <div class="w-col w-col-7"></div>
              <div class="w-col w-col-3">
                <h5>Order Search</h5>
              </div>
              <div class="w-col w-col-2"><a href="../advancedsearch/advanced-search.html">Advanced Search</a>
              </div>
            </div>
            <div class="w-row">
              <div class="w-col w-col-7"></div>
              <div class="w-col w-col-3">
                <select class="w-select ordersearch" id="OrderSearch" name="OrderSearch" data-name="OrderSearch">
                  <option value="RH">Rating (High - Low)</option>
                  <option value="RL">Rating (Low - Hi)</option>
                  <option value="LH">Level (High - Low)</option>
                  <option value="LL">Level (low - High)</option>
                  <option value="VH">Views (High - Low)</option>
                  <option value="VL">Views (Low - High)</option>
                  <option value="DH">Dates (Eariler first)</option>
                  <option value="DL">Dates (Oldest first)</option>
                </select>
              </div>
              <div class="w-col w-col-2"><a class="w-button" href="#">Save Search</a>
              </div>
            </div>
          </div>
        </form>
        <div class="w-form-done">
          <p>Thank you! Your submission has been received!</p>
        </div>
        <div class="w-form-fail">
          <p>Oops! Something went wrong while submitting the form</p>
        </div>
      </div>
      <div>
        <h1 class="results-heading">4 Results Displayed Below</h1>
      </div>
    </div>
  </div>
  <div class="w-section results-section">
    <div class="w-container result">
      <div class="w-row">
        <div class="w-col w-col-2"><img class="resultimage" src="../images/ExampleImage1.jpeg">
        </div>
        <div class="w-col w-col-10">
          <div class="w-row">
            <div class="w-col w-col-7 projectheadingcolumn">
              <h3 class="resultheading">Amazing Fantastic Project</h3>
              <div>Created by P. J. Kim. A, R, Cullen. 2015</div>
            </div>
            <div class="w-col w-col-5">
              <div>Includes: SRS, Source Code, Proposal</div>
              <div><img src="../images/star rating.jpg">
              </div>
            </div>
          </div>
          <div class="result-text">This Exciting Project Seeks to demonstrate blah blah blah blah blah blah blah blah&nbsp;blah blah blah blahblah blah blah blahblah blah blah blahblah blah blah blahblah blah blah blahblah blah blah blahblah blah blah blahblah blah blah blahblah blah blah blahblah blah blah blahblah blah blah blahblah blah blah blah ....&nbsp;</div>
        </div>
      </div>
      <div>
        <div class="w-row">
          <div class="w-col w-col-2"><img class="resultimage" src="../images/ExampleImage2.jpeg">
          </div>
          <div class="w-col w-col-10">
            <div class="w-row">
              <div class="w-col w-col-7">
                <h3 class="resultheading">Revolutionary Payment system</h3>
                <div>Created by M. L. Tight</div>
              </div>
              <div class="w-col w-col-5">
                <div>Includes: Idea Only</div>
                <div><img src="../images/star rating.jpg">
                </div>
              </div>
            </div>
            <div>I would like someone to attempt to redesign the card payment system to allow blah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blahblah blah...</div>
          </div>
        </div>
        <div>
          <div class="w-row">
            <div class="w-col w-col-2"><img class="resultimage" src="../images/ExampleImage3.jpg">
            </div>
            <div class="w-col w-col-10">
              <div class="w-row">
                <div class="w-col w-col-7">
                  <h3 class="resultheading">Protecting against SQL Inject...</h3>
                  <div>
                    <div>Created by M. L. Alphabet</div>
                  </div>
                </div>
                <div class="w-col w-col-5">
                  <div>Includes: Requirements, Description</div>
                  <div><img src="../images/star rating.jpg">
                  </div>
                </div>
              </div>
              <div>An exciting new method designed to protect against a form of attack that has long since been made irrelevant by modern security techniques. Blah Blah&nbsp;Blah BlahBlah BlahBlah BlahBlah BlahBlah BlahBlah BlahBlah BlahBlah BlahBlah BlahBlah BlahBlah BlahBlah BlahBlah BlahBlah BlahBlah BlahBlah Blah ...</div>
            </div>
          </div>
          <div>
            <div class="w-row">
              <div class="w-col w-col-2"><img class="resultimage" src="../images/exampleimage4.jpg">
              </div>
              <div class="w-col w-col-10">
                <div class="w-row">
                  <div class="w-col w-col-7">
                    <h3 class="resultheading">Optimising Control of Death Ray</h3>
                    <div>
                      <div>Created by Dr. Evil</div>
                    </div>
                  </div>
                  <div class="w-col w-col-5">
                    <div>Includes: Requirements, Idea</div>
                    <div><img src="../images/star rating.jpg">
                    </div>
                  </div>
                </div>
                <div>
                  <div>My Death Ray is not functioning well enough to reliably hit targets from orbit. I am seeking assistance to calibrate its targeting. Suitable for PhD level students looking for a career in..... EVIL. muahahah</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section bottom-text">
    <div class="w-container">
      <div class="results-text">4 to 4 of 4 Results</div>
      <div class="search-navigate">&lt;- Previous&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Next -&gt;</div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>
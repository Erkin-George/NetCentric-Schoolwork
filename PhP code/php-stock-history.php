<?php
ob_start();

//
header("Expires: Mon, 26 Jul 1997 05::00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified 
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1 
header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache");   // HTTP/1.0
// hello3.php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Erkin's Website on Stock</title>
        <link href="/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS-frontpage.css">
    </head> 
    <body>
<nav class="navbar navbar-fixed-top">
<div id="fixed">
        <ul>
            <li> <a href="/default.php"> Home </a> </li>
            <li> <a href="/quote-stock.html">Quote Stock </a> </li>
            <li> <a href="/php-stock-history.php"> Stock History </a> </li>
            <li> <a href="/symbol-lookup.html"> Symbol Lookup </a> </li>
            <li> <a href="/about.html"> About</a> </li>
        </ul>
</div>
</nav>
<h1> <center> Stock History <center> </h1>
<div class="table"><center><h2 align="center">Microsoft Corporation (MSFT) </h2>
<form>
	<input type="text" name="search" placeholder="Look up Stock History">
</form>
<button> Quote </button>
<button> History </button>
	    		<table style="width: 70%; height: 100%;">
		    		<thead>
			    		<tr>
				    		<th>Date</th>
				    		<th>Last</th>
				    		<th>Change</th>
				    		<th>% Change</th>
				    		<th>Volume</th>
			    		</tr>
		    		</thead>
					<tbody>
						<tr>
							<th>04/28/2017</th>
							<th>68.46</th>
							<th>+0.19</th>
							<th>+0.28</th>
							<th>39,537,979</th>
						</tr>
						<tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
						<tr>
							<th>04/26/2017</th>
							<th>67.83</th>
							<th>-0.19</th>
							<th>-0.13</th>
							<th>26,167,644</th>
						</tr>
						<tr>
							<th>04/25/2017</th>
							<th>67.92</th>
							<th>+0.39</th>
							<th>+0.58</th>
							<th>30,230,328</th>
						</tr>
                        <tr>
                            <th>04/24/2017</th>
                            <th>67.53</th>
                            <th>+1.13</th>
                            <th>+1.70</th>
                            <th>29,724,504</th>
                        </tr>
                        <tr>
                            <th>04/21/2017</th>
                            <th>66.40</th>
                            <th>+0.90</th>
                            <th>+1.37</th>
                            <th>29,724,504</th>
                        </tr>
                        <tr> 
                            <th>04/20/2017</th>
                            <th>65.50</th>
                            <th>+0.46</th>
                            <th>+0.71</th>
                            <th>22,298,360</th>
                        </tr>
                        <tr>
                            <th>04/19/2017</th>
                            <th>65.04</th>
                            <th>-0.35</th>
                            <th>-0.54</th>
                            <th>26,984,943</th>
                        </tr>
                        <tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
						<tr>
							<th>04/26/2017</th>
							<th>67.83</th>
							<th>-0.19</th>
							<th>-0.13</th>
							<th>26,167,644</th>
						</tr>
						<tr>
							<th>04/25/2017</th>
							<th>67.92</th>
							<th>+0.39</th>
							<th>+0.58</th>
							<th>30,230,328</th>
						</tr>
                        <tr>
                            <th>04/24/2017</th>
                            <th>67.53</th>
                            <th>+1.13</th>
                            <th>+1.70</th>
                            <th>29,724,504</th>
                        </tr>
                        <tr>
                            <th>04/21/2017</th>
                            <th>66.40</th>
                            <th>+0.90</th>
                            <th>+1.37</th>
                            <th>29,724,504</th>
                        </tr>
                        <tr> 
                            <th>04/20/2017</th>
                            <th>65.50</th>
                            <th>+0.46</th>
                            <th>+0.71</th>
                            <th>22,298,360</th>
                        </tr>
                        <tr>
                            <th>04/19/2017</th>
                            <th>65.04</th>
                            <th>-0.35</th>
                            <th>-0.54</th>
                            <th>26,984,943</th>
                        </tr>
                         <tr> 
                            <th>04/20/2017</th>
                            <th>65.50</th>
                            <th>+0.46</th>
                            <th>+0.71</th>
                            <th>22,298,360</th>
                        </tr>
                        <tr>
                            <th>04/19/2017</th>
                            <th>65.04</th>
                            <th>-0.35</th>
                            <th>-0.54</th>
                            <th>26,984,943</th>
                        </tr>
                         <tr> 
                            <th>04/20/2017</th>
                            <th>65.50</th>
                            <th>+0.46</th>
                            <th>+0.71</th>
                            <th>22,298,360</th>
                        </tr>
                        <tr>
                            <th>04/19/2017</th>
                            <th>65.04</th>
                            <th>-0.35</th>
                            <th>-0.54</th>
                            <th>26,984,943</th>
                        </tr>
                         <tr> 
                            <th>04/20/2017</th>
                            <th>65.50</th>
                            <th>+0.46</th>
                            <th>+0.71</th>
                            <th>22,298,360</th>
                        </tr>
                        <tr>
                            <th>04/19/2017</th>
                            <th>65.04</th>
                            <th>-0.35</th>
                            <th>-0.54</th>
                            <th>26,984,943</th>
                        </tr>
                         <tr> 
                            <th>04/20/2017</th>
                            <th>65.50</th>
                            <th>+0.46</th>
                            <th>+0.71</th>
                            <th>22,298,360</th>
                        </tr>
                        <tr>
                            <th>04/19/2017</th>
                            <th>65.04</th>
                            <th>-0.35</th>
                            <th>-0.54</th>
                            <th>26,984,943</th>
                        </tr>
                        <tr>
							<th>04/28/2017</th>
							<th>68.46</th>
							<th>+0.19</th>
							<th>+0.28</th>
							<th>39,537,979</th>
						</tr>
						<tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
                        <tr>
							<th>04/28/2017</th>
							<th>68.46</th>
							<th>+0.19</th>
							<th>+0.28</th>
							<th>39,537,979</th>
						</tr>
						<tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
                        <tr>
							<th>04/28/2017</th>
							<th>68.46</th>
							<th>+0.19</th>
							<th>+0.28</th>
							<th>39,537,979</th>
						</tr>
						<tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
                        <tr>
							<th>04/28/2017</th>
							<th>68.46</th>
							<th>+0.19</th>
							<th>+0.28</th>
							<th>39,537,979</th>
						</tr>
						<tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
                        <tr>
							<th>04/28/2017</th>
							<th>68.46</th>
							<th>+0.19</th>
							<th>+0.28</th>
							<th>39,537,979</th>
						</tr>
						<tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
                        <tr>
							<th>04/28/2017</th>
							<th>68.46</th>
							<th>+0.19</th>
							<th>+0.28</th>
							<th>39,537,979</th>
						</tr>
						<tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
                        <tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
                        <tr>
							<th>04/28/2017</th>
							<th>68.46</th>
							<th>+0.19</th>
							<th>+0.28</th>
							<th>39,537,979</th>
						</tr>
						<tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
                        <tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
                        <tr>
							<th>04/28/2017</th>
							<th>68.46</th>
							<th>+0.19</th>
							<th>+0.28</th>
							<th>39,537,979</th>
						</tr>
						<tr>
							<th>04/27/2017</th>
							<th>68.27</th>
							<th>+0.44</th>
							<th>+0.65</th>
							<th>34,348,717</th>
						</tr>
					</tbody>
	    		</table>			
		</center>
</div>

<div class"row">
    <div class="span1 offset4">
<footer class="footer"> &copy Erkin George - Seattle Pacific University 2017 &copy</footer>
    </div>
</div>

</html>

<?php  // This is the LAST section in a PHP webpage file 
ob_end_flush(); 
?>
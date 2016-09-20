
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<!--GPA Calculation-->
<!--doni hardy & Vaino Kodas Copyright 2011 -->
 
 <title> GPA Calculator </title>
 </head><body bgcolor="white">
	<p></p><p>
	<table  class="gpabackground"><tbody><tr><td>
	<h1 style="text-align: center;"><font color="666"> GPA Calculator</font></h1>
<font color="white">  
   <script type="text/javascript">
   
	function newline()
	{
	document.getElementById('resultBox').value=document.getElementById('resultBox').value+ '\n';
	}
	</script>

  <link rel="stylesheet" href="css/styles.css">

	</font><p>
    </p><center><font color="white"></font>
	<table class="gpabackground1">
	<tbody><tr>
	<th rowspan="3"><p><font color="black">
	Enter your scores in the boxes indicated: </font></p></th>
	<td><font color="black">Enter your completed credit hours: <input id="currentcreditBox" value="60" size="5" type="text">
	</font></td></tr>
	<tr>
	<td><font color="black">Enter your current GPA:  <input id="currentgpaBox" value="2" size="5" type="text"></font></td>
	</tr>
	<tr>
	<td><font color="black">Enter your desired GPA: <input id="desiredgpaBox" value="2.5" size="5" type="text"></font></td>
	</tr>
	</tbody></table><p></p><p>
<font color="black">		
	<input value="Click here for results" onclick="var cch, cgpa, dgpa;
		cch=document.getElementById('currentcreditBox').value;
		cgpa=document.getElementById('currentgpaBox').value;
		dgpa=document.getElementById('desiredgpaBox').value;
		cch=parseFloat(cch);
		cgpa=parseFloat(cgpa);
		dgpa=parseFloat(dgpa);
		houranswer= ' ';
		
		if (cch<=0) {
			houranswer=houranswer + '\n' + 'Your current credit hours must be greater than zero.';
			}
			
		else if (cgpa<0 || dgpa<0) {
			houranswer=houranswer + '\n' + 'Please enter a GPA of 0 or greater.';
			}
		
		else if (cgpa==dgpa) {
			houranswer=houranswer + '\n' + ' Your desired GPA already matches your current GPA.';
			}
		
		else if (dgpa==4.0 && cgpa!=4.0) {
			houranswer=houranswer + '\n' + ' Not possible.';
			}
		
		else for (gpacount=4; gpacount>-.1; gpacount=gpacount-0.25) {
			nch=(cch*(cgpa-dgpa)/(dgpa-gpacount));
			nch=Math.ceil(nch);
			
			if (nch>0) {
			houranswer=houranswer + '\n' + ' You need ' + nch + ' credit hours with a GPA of ' + gpacount + ' to get an overall GPA of ' + dgpa ;
			}
			
			}
		document.getElementById('resultBox').value=houranswer;" type="button"></font></p>
	<p></p><p><textarea id="resultBox" rows="8" cols="75" type="text"> 
		</textarea>
	</p>
	<p><font color="666"><i>If text box is blank, there is no solution.	</font></i></p></center><center><h5>© 2011</h5></center></td></tr></tbody></table></p><p></p>
		
		</body></html>
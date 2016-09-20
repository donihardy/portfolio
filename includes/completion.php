
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<!--Completion Rate Calculation-->
<!--doni hardy & Vaino Kodas Copyright November 18, 2011 -->
<!--From an excel version copyright June 26, 2011 -->
 
 <title> Completion Rate Calculator </title>
 </head><body bgcolor="white">
	<p></p><p>
	<table class="gpabackground"><tbody><tr><td>
	<h1 style="text-align: center;"><font color="white"> Completion Rate Calculator</font></h1>

<font color="white">  
   <script type="text/javascript">
   
	function newline()
	{
	document.getElementById('resultBox').value=document.getElementById('resultBox').value+ '\n';
	}
	</script>
		  
	</font><p>
    </p><center><table bgcolor="8fbc3f" border="1" bordercolor="666" cellpadding="5" cellspacing="5" width="95%">
	<tbody><tr>
	<th rowspan="3"><p><font color="black">
	Enter your info in the boxes indicated: </font></p></th>
	
	<tr>

	<td><font color="black">Enter your attempted credit hours:  <input id="takenBox" value="60" size="5" type="text"></font></td>
	</tr>
	<td><font color="black">Enter your completed credit hours: <input id="completedBox" value="40" size="5" type="text">
	</font></td></tr>
	</tbody></table><p></p><p>
<font color="black">
	<input value="Click here for results" onclick="var completed, attempted, needed, current;
		completed=document.getElementById('completedBox').value;
		attempted=document.getElementById('takenBox').value;
		completed=parseFloat(completed);
		attempted=parseFloat(attempted);
		needed=parseFloat(needed);
		needed=needed.toFixed(3);
		current=parseFloat(current);
		completionanswer= ' ';
		
		if (attempted<completed) {
			completionanswer=completionanswer + '\n' + 'Attempted credit hours must be greater or equal to completed credit hours.';
			}
			
		else if (completed<0) {
			completionanswer=completionanswer + '\n' + 'Your current credit hours must be greater than zero.';
			}
			
		else if (attempted<0) {
			completionanswer=completionanswer + '\n' + 'Please enter the attempted credit hours of 0 or greater.';
			}
			
		else {
			
			current=((completed/attempted) * 100);
			current=current.toFixed(3);	
			completionanswer=completionanswer + '\n' + ' Your completion rate is: ' + current + '%.';
			if (current>=66.667) {
				completionanswer=completionanswer + '\n' + ' Your completion rate is already greater or equal to 66.667%.';
			}
			
			else {
				needed=(2* attempted)-(3 * completed);
				needed=Math.ceil(needed);
				completionanswer=completionanswer + '\n' + ' You need ' + needed + ' credit hours to reach 66.667%.';
			}
			}
		
		document.getElementById('resultBox').value=completionanswer;" type="button"></font></p>
	<p></p><p><textarea id="resultBox" rows="3" cols="75" type="text"> 
		</textarea>

	</p>
	<p><font color="white">If text box is blank, there is no solution.	</font></p></center><center><h5>© 2011</h5></center></td></tr></tbody></table></p><p></p>
		
		</body></html>
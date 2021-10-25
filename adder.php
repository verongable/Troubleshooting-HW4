<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> <form action="" method="POST">
<label for="num1">Enter the first number:</label><input type="number" name="num1"><br>
<label for="num2">Enter the second number:</label><input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"></form>

<?php

if (isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    $myTotal = $num1 + $num2;

    echo '<h2>You added '.$num1.' and '.$num2.'';
    echo '<p> and the answer is <br><p style="color:red;">'.$myTotal.'!</p>';
    echo'<p><a href="">Reset page</a>';
}
?>
</body>
</html>
<!--Line 7: variables inside of echo did not have proper apostrophes-->
<!--Line 8: Missing period before variable. Includes unecessary quotation marks. Variables need to be inside of apostrophes. No apostrophe after closing p-tag.-->
<!--Line 9: Missing semi-colon at end of line-->
<!--Line 10: $num1 does NOT need to be capitalized-->
<!--Line 10: Input type should be number-->
<!--Line 11: Input type should be number-->
<!--Line 14: Comments do not belong inside php tags -->
<!--Line 21: Unnecessary / in opening form-tag-->
<!--Line 21: Form-tag is missing method-->
<!--Line 22: Missing label-tag at start of line-->
<!--Line 22: Label tag is missing 'for' value-->
<!--Line 22: $Num2 should NOT be capitalized-->
<!--Line 22: Unecessary '-' infront of '='-->
<!--Line 23: Closing label-tag located infront of line. Missing opening label-tag-->
<!--Line 23: Label tag is missing 'for' value-->
<!--Line 23: There should be a p-tag in the style-tag-->
<!--Line 24: Value is missing closing quotation marks-->
<!-- Line 37: ?> was in the wrong spot. It needs to be closed INSIDE THE BODY TAG. Not outside--> 
<!--Line 51: Unecessary punctuations-->
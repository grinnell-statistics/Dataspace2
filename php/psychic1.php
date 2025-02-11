<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="formStyleUpdatedTwoLine.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
    <div class="form-style-5">
        <head>
          <meta charset = "utf-8">
          <title></title>
        </head>
        <body style="font-size: 16px; line-height: 1.5;font-style:'Oswald">
          <form action = "greenhouse1data.php" method="post">

              1.1 Looking at the histogram shown using the settings shown above, how many people used the Group ID, “sample1”?
              <br>
            <label class="container"> 
              <input type="radio" name = "question1" <?php if (isset($question1) and $question1 == "A") echo "checked";?> value="5">5
              <span class="checkmark"></span> 
            </label>
            
            <label class="container"> 
              <input type="radio" name = "question1" <?php if (isset($question1) and $question1 == "B") echo "checked";?> value="20">20
              <span class="checkmark"></span> 
            </label> 
            <label class="container"> 
              <input type="radio" name = "question1" <?php if (isset($question1) and $question1 == "C") echo "checked";?> value="23">23 
              <span class="checkmark"></span> 
            </label>
            
            <label class="container"> 
              <input type="radio" name = "question1" <?php if (isset($question1) and $question1 == "D") echo "checked";?> value="26">26 
              <span class="checkmark"></span> 
            </label>
              <br>

              1.2 How many of the sample1 players got every guess wrong?
              <br>
            <label class="container"> 
              <input type="radio" name = "question2" <?php if (isset($question2) and $question2 == "A") echo "checked";?> value="0">0
              <span class="checkmark"></span> 
            </label>

            <label class="container"> 
              <input type="radio" name = "question2" <?php if (isset($question2) and $question2 == "B") echo "checked";?> value="2">2
              <span class="checkmark"></span> 
            </label>
  
            <label class = "container">
              <input type="radio" name = "question2" <?php if (isset($question2) and $question2 == "C") echo "checked";?> value="3">3
              <span class="checkmark"></span> 
            </label>
              
            <label class = "container">
              <input type="radio" name = "question2" <?php if (isset($question2) and $question2 == "D") echo "checked";?> value="4">4
              <span class="checkmark"></span> 
            </label>
              <br>

              1.3 What proportion of the sample1 players got the correct card 4 or more times? If you are not sure, you can use the “as extreme as” slider on the left side of the app and then find the proportion displayed with the sample data.
              <br>
              
            <label class="container"> 
              <input type="radio" name = "question3" <?php if (isset($question3) and $question3 == "A") echo "checked";?> value="0.00">0.00
              <span class="checkmark"></span> 
            </label>
            
            <label class="container"> 
              <input type="radio" name = "question3" <?php if (isset($question3) and $question3 == "B") echo "checked";?> value="0.04">0.04
              <span class="checkmark"></span> 
            </label> 
            <label class="container"> 
              <input type="radio" name = "question3" <?php if (isset($question3) and $question3 == "C") echo "checked";?> value="0.05">0.05
              <span class="checkmark"></span> 
            </label>
            
            <label class="container"> 
              <input type="radio" name = "question3" <?php if (isset($question3) and $question3 == "D") echo "checked";?> value="0.10">0.10
              <span class="checkmark"></span> 
            </label>
              <br>

              1.4 Assuming that a person has no special abilities, how likely is it for a person to randomly select the right card in one attempt?
              <br>
              
            <label class="container"> 
              <input type="radio" name = "question4" <?php if (isset($question4) and $question4 == "A") echo "checked";?> value="1 out of 2 = 50%">1 out of 2 = 50%
              <span class="checkmark"></span> 
            </label>
            
            <label class="container"> 
              <input type="radio" name = "question4" <?php if (isset($question4) and $question4 == "B") echo "checked";?> value="1 out of 3 = 33%">1 out of 3 = 33%
              <span class="checkmark"></span> 
            </label> 
            <label class="container"> 
              <input type="radio" name = "question4" <?php if (isset($question4) and $question4 == "C") echo "checked";?> value="1 out 4 = 25%">1 out 4 = 25%
              <span class="checkmark"></span> 
            </label>
            
            <label class="container"> 
              <input type="radio" name = "question4" <?php if (isset($question4) and $question4 == "D") echo "checked";?> value="1 out of 5 = 20%">1 out of 5 = 20%
              <span class="checkmark"></span> 
            </label>
              <br>  

              1.5 Change the Group ID from “sample1” to “all,” which shows the results of thousands of players who had played the game under these conditions (we are assuming they all had no special abilities). Assuming that only chance is involved in picking the right card, how likely is it for a person to get 4 or more correct? Move the “at least as extreme as” slider in the App to find this.
              <br>
              
            <label class="container"> 
              <input type="radio" name = "question5" <?php if (isset($question4) and $question4 == "A") echo "checked";?> value="We would expect no people to get 4 or more correct.">We would expect no people to get 4 or more correct.
              <span class="checkmark"></span> 
            </label>
            <br>
            <label class="container"> 
              <input type="radio" name = "question5" <?php if (isset($question4) and $question4 == "B") echo "checked";?> value="We would expect 3% of people to get 4 or more correct.">We would expect 3% of people to get 4 or more correct.
              <span class="checkmark"></span> 
            </label> 
            <br>
            <label class="container"> 
              <input type="radio" name = "question5" <?php if (isset($question4) and $question4 == "C") echo "checked";?> value="1We would expect 12% of people to get 4 or more correct.">We would expect 12% of people to get 4 or more correct.
              <span class="checkmark"></span> 
            </label>
            <br>
            <label class="container"> 
              <input type="radio" name = "question5" <?php if (isset($question4) and $question4 == "D") echo "checked";?> value="We would expect 23% people to get 4 or more correct.">We would expect 23% people to get 4 or more correct.
              <span class="checkmark"></span> 
            </label>
              
              <br>    
             1.6 Assuming a person has no special abilities and they have 10 attempts, how many times would they correctly guess?<br>
                
                        <label class="container"> 
        <input type="radio" name = "question6" <?php if (isset($question4) and $question4 == "A") echo "checked";?> value="We would expect each person to get exactly 0 correct; thus each person should get exactly 0 correct guesses in 10 attempts because they have no special abilities.">We would expect each person to get exactly 0 correct; thus each person should get exactly 0 correct guesses in 10 attempts because they have no special abilities.
              <span class="checkmark"></span> 
                </label>
                <br>
                <label class="container"> 
                  <input type="radio" name = "question6" <?php if (isset($question4) and $question4 == "B") echo "checked";?> value="We would expect each person to get exactly 20% correct; thus each person should get exactly 2 correct guesses in 10 attempts.">We would expect each person to get exactly 20% correct; thus each person should get exactly 2 correct guesses in 10 attempts.
                  <span class="checkmark"></span> 
                </label> 
                <br>
                <label class="container"> 
                  <input type="radio" name = "question6" <?php if (isset($question4) and $question4 == "C") echo "checked";?> value="Due to random chance, we would expect each person to get about 20% correct. However, there would be some random variation, meaning some would get a few less and others would get a few more correct just by random chance.">Due to random chance, we would expect each person to get about 20% correct. However, there would be some random variation, meaning some would get a few less and others would get a few more correct just by random chance.
                  <span class="checkmark"></span> 
                </label>
                <br>
                <label class="container"> 
                  <input type="radio" name = "question6" <?php if (isset($question4) and $question4 == "D") echo "checked";?> value="We would expect each person to get about 50% correct. However, there would be some random variation, meaning some would get a few less and others would get a few more correct just by random chance.">We would expect each person to get about 50% correct. However, there would be some random variation, meaning some would get a few less and others would get a few more correct just by random chance.
                  <span class="checkmark">
                </span> 
            </label>
             
              <input type="submit" value = "Check your answers" name = greenhouse1data>
          </form>
          <br>
        </body>
    </div>
</html>

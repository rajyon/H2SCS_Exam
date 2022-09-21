<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <title>H2SCS Exam - PHP Developer</title>
</head>

<body onload="randomizeList()">
<form action="check_result.php" method="POST">
    <ol id="myQuestions">
        <!-- QUESTION #1 -->
        <li class="question_card">
            <div>
                <p>
                    You went to a party last night and when you
                    arrived to school the next day, everybody is
                    talking about something you didn’t do. What
                    will you do?
                </p>
            </div>
            <div>
                <label><b>A.</b> Avoid everything and go with your friends</label><br>
                <label><b>B.</b> Go and talk with the person that started the rumors</label><br>
                <label><b>C.</b> Go and talk with the teacher</label><br>
            </div>
            <hr>
            <div class="answers">
                <label for="answer_1">Answer:</label>
                <input type="text" onchange="validateAnswer(this.id)" id="answer_1" name="form_answer[]" maxlength="1" required/>
            </div>
            <hr>
        </li>
        <!-- QUESTION #2 -->
        <li class="question_card">
            <div>
                <p>
                    What quality do you excel the most?
                </p>
            </div>
            <div>
                <label><b>A.</b> Empathy</label><br>
                <label><b>B.</b> Curiosity</label><br>
                <label><b>C.</b> Perseverance</label><br>
            </div>
            <hr>
            <div class="answers">
                <label for="answer_2">Answer:</label>
                <input type="text" onchange="validateAnswer(this.id)" id="answer_2" name="form_answer[]" maxlength="1" required/>
            </div>
            <hr>
        </li>
        <!-- QUESTION #3 -->
        <li class="question_card">
            <div>
                <p>
                    You are walking down the street when you see
                    an old lady trying to cross, what will you do?
                </p>
            </div>
            <div>
                <label><b>A.</b> Go and help her</label><br>
                <label><b>B.</b> Go for a policeman and ask him to help</label><br>
                <label><b>C.</b> Keep walking ahead</label><br>
            </div>
            <hr>
            <div class="answers">
                <label for="answer_3">Answer:</label>
                <input type="text" onchange="validateAnswer(this.id)" id="answer_3" name="form_answer[]" maxlength="1" required/>
            </div>
            <hr>
        </li>
        <!-- QUESTION #4 -->
        <li class="question_card">
            <div>
                <p>
                    You had a very difficult day at school, you will
                    maintain a ____ attitude
                </p>
            </div>
            <div>
                <label><b>A.</b> Depends on the situation</label><br>
                <label><b>B.</b> Positive</label><br>
                <label><b>C.</b> Negative</label><br>
            </div>
            <hr>
            <div class="answers">
                <label for="answer_4">Answer:</label>
                <input type="text" onchange="validateAnswer(this.id)" id="answer_4" name="form_answer[]" maxlength="1" required/>
            </div>
            <hr>
        </li>
        <!-- QUESTION #5 -->
        <li class="question_card">
            <div>
                <p>
                    You are at a party and a friend of yours comes
                    over and offers you a drink, what do you do?
                </p>
            </div>
            <div>
                <label><b>A.</b> Say no thanks</label><br>
                <label><b>B.</b> Drink it until it is finished</label><br>
                <label><b>C.</b> Ignore him and get angry at him</label><br>
            </div>
            <hr>
            <div class="answers">
                <label for="answer_5">Answer:</label>
                <input type="text" onchange="validateAnswer(this.id)" id="answer_5" name="form_answer[]" maxlength="1" required/>
            </div>
            <hr>
        </li>
        <!-- QUESTION #6 -->
        <li class="question_card">
            <div>
                <p>
                    You just started in a new school, you will...
                </p>
            </div>
            <div>
                <label><b>A.</b> Go and talk with the person next to you</label><br>
                <label><b>B.</b> Wait until someone comes over you</label><br>
                <label><b>C.</b> Not talk to anyone</label><br>
            </div>
            <hr>
            <div class="answers">
                <label for="answer_6">Answer:</label>
                <input type="text" onchange="validateAnswer(this.id)" id="answer_6" name="form_answer[]" maxlength="1" required/>
            </div>
            <hr>
        </li>
        <!-- QUESTION #7 -->
        <li class="question_card">
            <div>
                <p>
                    In a typical Friday, you would like to..
                </p>
            </div>
            <div>
                <label><b>A.</b> Go out with your close friends to eat</label><br>
                <label><b>B.</b> Go to a social club and meet more people</label><br>
                <label><b>C.</b> Invite one of your friends to your house</label><br>
            </div>
            <hr>
            <div class="answers">
                <label for="answer_7">Answer:</label>
                <input type="text" onchange="validateAnswer(this.id)" id="answer_7" name="form_answer[]" maxlength="1" required/>
            </div>
            <hr>
        </li>
        <!-- QUESTION #8 -->
        <li class="question_card">
            <div>
                <p>
                    Your relationship with your parents is..
                </p>
            </div>
            <div>
                <label><b>A.</b> I like both equally</label><br>
                <label><b>B.</b> I like both equally</label><br>
                <label><b>C.</b> I like my Mom the most</label><br>
            </div>
            <hr>
            <div class="answers">
                <label for="answer_8">Answer:</label>
                <input type="text" onchange="validateAnswer(this.id)" id="answer_8" name="form_answer[]" maxlength="1" required/>
            </div>
            <hr>
        </li>
    </ol>
    <div id="form_submit">
        <input type="submit" id="btn_submit" name="btn_submit" value="Submit">
    </div>
</form>
<div id="test"></div>
</body>

</html>
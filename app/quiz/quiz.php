<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="../jquery-3.5.1.js"></script>
    <title>Document</title>
</head>
<body>
<div class="home_box custom-box">
    <h3>Instruction:</h3>
    <p>Total number of question: <span class="total-question"></span></p>
    <button type="button" class="btn" onclick="start()" >Start Quiz</button>

</div>
<div class="quiz-box custom-box hide">
    <div class="question-number">

    </div>
    <div class="question-text">

    </div>
    <div id="btn-grid" class="option-container">

    </div>
    <div class="next-question-btn">
        <button type="button" class="btn" onclick="next()">Next</button>
    </div>
    <div class="answers-indicator">

    </div>
</div>

<div class="result-box custom-box hide">
    <h1>Quiz Result</h1>
    <table>
        <tr>
            <td>Total Question</td>
            <td><span class="total-question"></span></td>
        </tr>
        <tr>
            <td>Attempt</td>
            <td><span class="total-attempt"></span></td>
        </tr>
        <tr>
            <td>Correct</td>
            <td><span class="total-correct"></span></td>
        </tr>
        <tr>
            <td>Wrong</td>
            <td><span class="total-wrong"></span></td>
        </tr>
        <tr>
            <td>Percentage</td>
            <td><span class="percentage"></span></td>
        </tr>
        <tr>
            <td>Your Total Score</td>
            <td><span class="total-score"></span></td>
        </tr>
    </table>
    <button type="button" class="btn" onclick="tryAgainQuiz()">Try Again</button>
    <button type="button" class="btn" onclick="goToHome()">Go to home</button>
</div>
<script src="js/question.js"></script>
<script src="js/app.js"></script>


</body>
</html>

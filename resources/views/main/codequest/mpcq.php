<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>APD - Mulitple Choice Challenge</title>
        <link rel = "stylesheet" href = "mpcq.css">
        <link rel = "icon" href = "apdicon.png">
        <script src="https://kit.fontawesome.com/b3459fa126.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home" style = "color: white;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/codequest" style = "color: white;">Code Quest</a>
                </li>
            </ul>
            <a class="navbar-brand" href="#">
                <img src="apdlogo.png" alt="APD logo" width="300" height="70" class="d-inline-block align-text-top">
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/news" style = "color: white;">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about" style = "color: white;">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
    <div id="question-container" class="hide">
      <div id="question">Question</div>
      <div id="answer-buttons" class="btn-grid">
        <button class="btn">Answer 1</button>
        <button class="btn">Answer 2</button>
        <button class="btn">Answer 3</button>
        <button class="btn">Answer 4</button>
      </div>
    </div>
    <div class="controls">
      <button id="start-btn" class="start-btn btn">Start</button>
      <button id="next-btn" class="next-btn btn hide">Next</button>
    </div>
  </div>

    <script>
        const startButton = document.getElementById('start-btn')
        const nextButton = document.getElementById('next-btn')
        const questionContainerElement = document.getElementById('question-container')
        const questionElement = document.getElementById('question')
        const answerButtonsElement = document.getElementById('answer-buttons')

        let shuffledQuestions, currentQuestionIndex

        startButton.addEventListener('click', startGame)
        nextButton.addEventListener('click', () => {
        currentQuestionIndex++
        setNextQuestion()
        })

        function startGame() {
        startButton.classList.add('hide')
        shuffledQuestions = questions.sort(() => Math.random() - .5)
        currentQuestionIndex = 0
        questionContainerElement.classList.remove('hide')
        setNextQuestion()
        }

        function setNextQuestion() {
        resetState()
        showQuestion(shuffledQuestions[currentQuestionIndex])
        }

        function showQuestion(question) {
        questionElement.innerText = question.question
        question.answers.forEach(answer => {
            const button = document.createElement('button')
            button.innerText = answer.text
            button.classList.add('btn')
            if (answer.correct) {
            button.dataset.correct = answer.correct
            }
            button.addEventListener('click', selectAnswer)
            answerButtonsElement.appendChild(button)
        })
        }

        function resetState() {
        clearStatusClass(document.body)
        nextButton.classList.add('hide')
        while (answerButtonsElement.firstChild) {
            answerButtonsElement.removeChild(answerButtonsElement.firstChild)
        }
        }

        function selectAnswer(e) {
        const selectedButton = e.target
        const correct = selectedButton.dataset.correct
        setStatusClass(document.body, correct)
        Array.from(answerButtonsElement.children).forEach(button => {
            setStatusClass(button, button.dataset.correct)
        })
        if (shuffledQuestions.length > currentQuestionIndex + 1) {
            nextButton.classList.remove('hide')
        } else {
            startButton.innerText = 'Restart'
            startButton.classList.remove('hide')
        }
        }

        function setStatusClass(element, correct) {
        clearStatusClass(element)
        if (correct) {
            element.classList.add('correct')
        } else {
            element.classList.add('wrong')
        }
        }

        function clearStatusClass(element) {
        element.classList.remove('correct')
        element.classList.remove('wrong')
        }

        const questions = [
        {
            question: 'What is 2 + 2?',
            answers: [
            { text: '4', correct: true },
            { text: '22', correct: false }
            ]
        },
        {
            question: 'Who is the best YouTuber?',
            answers: [
            { text: 'Web Dev Simplified', correct: true },
            { text: 'Traversy Media', correct: true },
            { text: 'Dev Ed', correct: true },
            { text: 'Fun Fun Function', correct: true }
            ]
        },
        {
            question: 'Is web development fun?',
            answers: [
            { text: 'Kinda', correct: false },
            { text: 'YES!!!', correct: true },
            { text: 'Um no', correct: false },
            { text: 'IDK', correct: false }
            ]
        },
        {
            question: 'What is 4 * 2?',
            answers: [
            { text: '6', correct: false },
            { text: '8', correct: true }
            ]
        }
        ]
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
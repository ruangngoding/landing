const questions = [
    {
        question: "Apa singkatan dari HTML?",
        answers: [
            { text: "Hyper Transfer Markup Language", correct: false},
            { text: "Hyper Text Markup Language", correct: true},
            { text: "High-level Text Markup Language", correct: false},
            { text: "Hyperlink and Text Markup Language", correct: false},
        ]
    },
    {
        question: "Tag HTML untuk membuat paragraf adalah?",
        answers: [
            { text: "&ltpg&gt", correct: false},
            { text: "&ltpara&gt", correct: false},
            { text: "&ltparagraph&gt", correct: false},
            { text: "&ltp&gt", correct: true},
        ]
    },
    {
        question: "Tag HTML untuk membuat heading level 2 adalah?",
        answers: [
            { text: "&lth2&gt", correct: true},
            { text: "&lth1&gt", correct: false},
            { text: "&ltheader&gt", correct: false},
            { text: "&lthead2&gt", correct: false},
        ]
    },
    {
        question: "Apa yang dimaksud dengan atribut src dalam tag <img>?",
        answers: [
            { text: "Script", correct: false},
            { text: "Stylesheet", correct: false},
            { text: "Sumber gambar", correct: true},
            { text: "Size", correct: false},
        ]
    },
    {
        question: "Bagaimana cara menampilkan baris baru di dalam HTML tanpa membuat paragraf baru?",
        answers: [
            { text: "Menggunakan tag &ltp&gt", correct: false},
            { text: "Menggunakan tag &ltnl&gt", correct: false},
            { text: "Menggunakan tag &ltbr&gt", correct: true},
            { text: "Menggunakan tag &ltnewline&gt", correct: false},
        ]
    }

];

const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz() {
    currentQuestionIndex = 0;
    score = 0;
    nextButton.innerHTML = "Lanjut";
    showQuestion();
}

function showQuestion() {
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.
    question;

    currentQuestion.answers.forEach(answer =>{
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        answerButtons.appendChild(button);
        if(answer.correct){
            button.dataset.correct = answer.correct
        }
        button.addEventListener("click", selectAnswer);
    })
}

function resetState() {
    nextButton.style.display = "none";
    while(answerButtons.firstChild){
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAnswer(e) {
    const selectedBtn = e.target;
    const isCorrect = selectedBtn.dataset.correct === "true";
    if(isCorrect){
        selectedBtn.classList.add("correct");
        score++;
    }else{
        selectedBtn.classList.add("incorrect");
    }
    Array.from(answerButtons.children).forEach(button => {
        if(button.dataset.correct === "true"){
            button.classList.add("correct");
        }
        button.disabled = true;
    });
    nextButton.style.display = "block";
}

function showScore(){
    resetState();
    questionElement.innerHTML = `Kamu benar ${score} dari ${questions.length}!`;
}

function handleNextButton() {
    currentQuestionIndex++;
    if(currentQuestionIndex < questions.length){
        showQuestion();
    }else{
        showScore();
    }
};

nextButton.addEventListener("click", ()=>{
    if(currentQuestionIndex < questions.length){
        handleNextButton();
    }else{
        startQuiz();
    }
});

startQuiz();
const questions = [
    {
        question: "Apa singkatan dari CSS?",
        answers: [
            { text: "Creative Style Sheets", correct: false},
            { text: "Computer Style Sheets", correct: false},
            { text: "Colorful Style Sheets", correct: false},
            { text: "Cascading Style Sheets", correct: true},
        ]
    },
    {
        question: "Bagaimana cara menyisipkan CSS secara internal di dalam HTML?",
        answers: [
            { text: "Dengan tag &lt;style&gt;", correct: true},
            { text: "Dengan tag &lt;link&gt;", correct: false},
            { text: "Dengan tag &lt;css&gt;", correct: false},
            { text: "Dengan tag &lt;script&gt;", correct: false},
        ]
    },
    {
        question: "Apa fungsi dari properti CSS \"font-size\"?",
        answers: [
            { text: "Mengatur warna font", correct: false},
            { text: "Mengatur gaya font", correct: false},
            { text: "Mengatur ukuran font", correct: true},
            { text: "Mengatur spasi antar huruf", correct: false},
        ]
    },
    {
        question: "Bagaimana cara memilih semua elemen &lt;p&gt; di dalam CSS?",
        answers: [
            { text: "p:all", correct: false},
            { text: "all:p", correct: false},
            { text: "p *", correct: false},
            { text: "p", correct: true},
        ]
    },
    {
        question: "Apa yang dimaksud dengan \"box model\" dalam CSS?",
        answers: [
            { text: "Model untuk membuat kotak dalam HTML", correct: false},
            { text: "Model untuk membangun layout dengan menggunakan elemen kotak", correct: true},
            { text: "Model untuk membuat garis-garis dalam CSS", correct: false},
            { text: "Model untuk mengatur warna latar belakang", correct: false},
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
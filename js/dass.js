let currentQuestion = 1;
let question21 = 1;
let values = [];
function prevQuestion() {
  if (currentQuestion > 1) {
    currentQuestion -= 4;
    question21 -= 1;
    showQuestion();
  }
}

function nextQuestion() {
  if (currentQuestion <= 16) {
    // Ubah 16 menjadi nilai yang sesuai (20 - 4)
    currentQuestion += 4;
    question21 += 1;
    showQuestion();
  }
}
function calculateTotal(array) {
  return array.reduce((total, currentValue) => total + currentValue, 0);
}

function submitForm() {
  var stress = [
    parseInt(document.querySelector('input[name="q1"]:checked').value),
    parseInt(document.querySelector('input[name="q6"]:checked').value),
    parseInt(document.querySelector('input[name="q8"]:checked').value),
    parseInt(document.querySelector('input[name="q11"]:checked').value),
    parseInt(document.querySelector('input[name="q12"]:checked').value),
    parseInt(document.querySelector('input[name="q14"]:checked').value),
    parseInt(document.querySelector('input[name="q18"]:checked').value),
  ];

  var depresi = [
    parseInt(document.querySelector('input[name="q3"]:checked').value),
    parseInt(document.querySelector('input[name="q5"]:checked').value),
    parseInt(document.querySelector('input[name="q10"]:checked').value),
    parseInt(document.querySelector('input[name="q13"]:checked').value),
    parseInt(document.querySelector('input[name="q16"]:checked').value),
    parseInt(document.querySelector('input[name="q17"]:checked').value),
  ];

  var anxiety = [
    parseInt(document.querySelector('input[name="q2"]:checked').value),
    parseInt(document.querySelector('input[name="q4"]:checked').value),
    parseInt(document.querySelector('input[name="q7"]:checked').value),
    parseInt(document.querySelector('input[name="q9"]:checked').value),
    parseInt(document.querySelector('input[name="q15"]:checked').value),
    parseInt(document.querySelector('input[name="q19"]:checked').value),
    parseInt(document.querySelector('input[name="q20"]:checked').value),
  ];
  var totalAnxiety = calculateTotal(anxiety);
  var totalStress = calculateTotal(stress);
  var totalDepresi = calculateTotal(depresi);

  // Build the URL with parameters
  var url =
    "hasildass.php" +
    "?totalAnxiety=" +
    totalAnxiety +
    "&totalStress=" +
    totalStress +
    "&totalDepresi=" +
    totalDepresi;

  // Redirect to hasildass.html
  window.location.href = url;
}

function showQuestion() {
  const questions = document.querySelectorAll(".question");
  questions.forEach(question => (question.style.display = "none"));

  for (let i = currentQuestion; i < currentQuestion + 4; i++) {
    const questionElement = document.getElementById(`question${i}`);
    if (questionElement) {
      questionElement.style.display = "block";
    }
  }
  const progressbar = document.querySelector(".progressbar");
  progressbar.setAttribute("aria-valuenow", question21.toString());
  progressbar.setAttribute("aria-valuetext", `Question ${question21} of 20`);

  const progressBarSteps = document.querySelectorAll(".progressbar__step");
  progressBarSteps.forEach((step, index) => {
    if (index < question21) {
      step.classList.add("active");
    } else {
      step.classList.remove("active");
    }
  });

  const prevButton = document.getElementById("prevButton");
  const nextButton = document.getElementById("nextButton");

  if (question21 === 5) {
    // Ubah 6 menjadi nilai yang sesuai (jumlah pertanyaan / 4)
    nextButton.innerHTML = "Submit";
    nextButton.onclick = function () {
      submitForm();
    };
  } else {
    nextButton.innerHTML = "Next";
  }
}

showQuestion();

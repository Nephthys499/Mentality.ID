const navbarNav = document.querySelector(".navbar-nav1");
document.querySelector("#hamburger-menu1").onclick = () => {
  navbarNav.classList.toggle("active");
};
const hamburger = document.querySelector("#hamburger-menu1");
document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
let currentQuestion = 1;
let question21 = 1;
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
let questionnaire = document.getElementById("questionnaire");
let values = [];

function submitForm() {
  for (let i = 1; i <= 20; i++) {
    let question = document.getElementsByName(`q${i}`);
    for (let j = 0; j < question.length; j++) {
      if (question[j].checked) {
        values.push(parseInt(question[j].value)); // Parse the value to an integer and add to values array
      }
    }
  }

  // Calculate total score
  total = values.reduce((acc, cur) => acc + cur, 0);

  if (total > 8) {
    window.location.href = "dass.php";
  } else {
    window.location.href = "hasil.php";
  }
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

  if (question21 == 5) {
    nextButton.innerHTML = "Submit";
    nextButton.onclick = function () {
      submitForm();
    };
  } else {
    nextButton.innerHTML = "Next";
  }
}

showQuestion();

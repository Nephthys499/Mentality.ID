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
  for (let i = 1; i <= 21; i++) {
    let question = document.getElementsByName(`q${i}`);
    for (let j = 0; j < question.length; j++) {
      if (question[j].checked) {
        values.push(question[j].value);
      }
    }
  }
  console.log(values);
  if (values.includes("G1") && values.includes("G2") && values.includes("G9")) {
    let result =
      "Atur Pola makan\nDiet Bebas Garam\nOlahraga teratur\nJaga berat badan ideal\nPenolakan kebiasaan buruk\nHubungi dokter";
    let saran =
      "Kebutaan\nTimbul masalah pada ginjal\nMasalah pada otak, stroke atau demensia\nGangguan pada jantung seperti arteri koroner\nMasalah pada pembuluh darah seperti aneurisma";

    // Gabungkan variabel result dan saran menjadi satu URL
    let url = `hasil.html?result=${encodeURIComponent(
      result
    )}&saran=${encodeURIComponent(saran)}`;

    // Arahkan ke halaman hasil.html dengan URL yang telah digabungkan
    window.location.href = url;
  } else if (
    values.includes("G3") &&
    values.includes("G4") &&
    values.includes("G9") &&
    values.includes("G10") &&
    values.includes("G11")
  ) {
    let result =
      "Diet Bebas garam\nPenolakan kebiasaan buruk\nMenghindari stres\nObat antihipertensi\nHubungi dokter";
    let saran =
      "Mikroinfark pada otak\nSklerosis ginjal\nHipertrofi otot jantung";
    let url = `hasil.html?result=${encodeURIComponent(
      result
    )}&saran=${encodeURIComponent(saran)}`;
    window.location.href = url;
  } else if (
    values.includes("G5") &&
    values.includes("G6") &&
    values.includes("G9") &&
    values.includes("G10") &&
    values.includes("G11") &&
    values.includes("G12") &&
    values.includes("G13") &&
    values.includes("G14")
  ) {
    let result = "Konsumsi obat secara teratur\nHubungi dokter";
    let saran = "Aterosklerosis\nTrombosis otak\nPendarahan diberbagai organ";
    // Gabungkan variabel result dan saran menjadi satu URL
    let url = `hasil.html?result=${encodeURIComponent(
      result
    )}&saran=${encodeURIComponent(saran)}`;

    // Arahkan ke halaman hasil.html dengan URL yang telah digabungkan
    window.location.href = url;
  } else if (
    values.includes("G7") &&
    values.includes("G8") &&
    values.includes("G15") &&
    values.includes("G16") &&
    values.includes("G17") &&
    values.includes("G18") &&
    values.includes("G19") &&
    values.includes("G20")
  ) {
    let result =
      "Segera menghubungi dokter untuk tindakan lebih lanjut\nDiet bebas garam\nOlahraga teratur";
    let saran =
      "Diseksi aorta akut\nEdema Paru akut\nInfark miokard atau angina pektoris\nGagal ginjal akut\nTumor pada kelenjar adrenal";
    // Gabungkan variabel result dan saran menjadi satu URL
    let url = `hasil.html?result=${encodeURIComponent(
      result
    )}&saran=${encodeURIComponent(saran)}`;

    // Arahkan ke halaman hasil.html dengan URL yang telah digabungkan
    window.location.href = url;
  } else {
    let result = "Segera periksa ke dokter";
    let saran = "Segera periksa ke dokter";
    // Gabungkan variabel result dan saran menjadi satu URL
    let url = `hasil.html?result=${encodeURIComponent(
      result
    )}&saran=${encodeURIComponent(saran)}`;

    // Arahkan ke halaman hasil.html dengan URL yang telah digabungkan
    window.location.href = url;
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

  if (currentQuestion === 20) {
    nextButton.innerHTML = "Submit";
    nextButton.onclick = function () {
      submitForm();
    };
  } else {
    nextButton.innerHTML = "Next";
  }
}

showQuestion();

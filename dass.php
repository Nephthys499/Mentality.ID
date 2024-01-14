<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kuisioner DASS21</title>
    <link rel="stylesheet" href="css/dass.css" />
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar1">
      <a href="#" class="navbar-logo1"
        ><span id="span2">Mentality</span><span id="span1">.ID</span></a
      >
      <div class="navbar-nav1">
        <a href="index.php#">Home</a>
        <a href="index.php#about1">About</a>
        <a href="index.php#Menu">Menu</a>
        <a href="index.php#Music">Music</a>
        <a href="/index.php#contact">Contact</a>
      </div>
      <div class="navbar-extra1">
        <a href="#" id="hamburger-menu1"> <i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->
    <a
      href="https://github.com/alexandracaulea/freecodecamp-projects/tree/master/Responsive-Web-Design-Projects/Build%20a%20Survey%20Form"
      href="test1.css"
      target="_blank"
      rel="noopener noreferrer"
      class="github-corner"
      aria-label="View source on GitHub">
    </a>
    <div class="container">
      <!-- <header class="header">
        
        <div class="header__content">
          <h1 id="title" class="header__title">
            Mental Health Diagnosis Questionnaire
          </h1>
          <p id="description" class="header__description">
            Please complete the questionnaire accurately to enable the system to
            generate precise mental health diagnosis results.
          </p>
        </div>
      </header> -->
      <main class="main">
        <form
          action="#"
          method="GET"
          id="questionnaire"
          class="survey"
          novalidate>
          <div class="textinfo">
            <h1>DASS21 Kuisioner</h1>
          </div>
          <div
            class="progressbar"
            role="progressbar"
            aria-valuemin="1"
            aria-valuemax="20">
            <div class="progressbar__step active"></div>
            <div class="progressbar__step"></div>
            <div class="progressbar__step"></div>
            <div class="progressbar__step"></div>
            <div class="progressbar__step"></div>
          </div>
          <div class="question" id="question1">
            <label for="q1">
              <h3>Pertanyaan 1:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda sering menderita sakit
                kepala?
              </p></label
            >
            <label
            ><input type="radio" id="q1" name="q1" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q1" name="q1"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q1" name="q1"  value="2" /><span
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q1" name="q1"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question2">
            <label for="q2">
              <h3>Pertanyaan 2:</h3>
              <p>
                Apakah dalam sebulan belakangan ini nafsu makan Anda turun?
              </p></label
            >
            <label
            ><input type="radio" id="q2" name="q2" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q2" name="q2"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q2" name="q2"  value="2" /><span
                >Sering</span
              ><br
            /></label>
            <label
            ><input type="radio" id="q2" name="q2"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question3">
            <label for="q3">
              <h3>Pertanyaan 3:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda sulit tidur?
              </p></label
            >
            <label
            ><input type="radio" id="q3" name="q3" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q3" name="q3"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q3" name="q3"  value="2" /><span
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q3" name="q3"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question4">
            <label for="q4">
              <h3>Pertanyaan 4:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda sering ketakutan?
              </p></label
            >
            <label
            ><input type="radio" id="q4" name="q4" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q4" name="q4"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q4" name="q4"  value="2" /><span
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q4" name="q4"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question5">
            <label for="q5">
              <h3>Pertanyaan 5:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda merasa gugup tegang
                atau khawatir?
              </p></label
            >
            <label
            ><input type="radio" id="q5" name="q5" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q5" name="q5"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q5" name="q5"  value="2" /><span
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q5" name="q5"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question6">
            <label for="q6">
              <h3>Pertanyaan 6:</h3>
              <p>
                Apakah dalam sebulan belakangan ini tangan Anda sering gemetar?
              </p></label
            >
            <label
              ><input type="radio" id="q6" name="q6" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q6" name="q6"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q6" name="q6"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q6" name="q6"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question7">
            <label for="q7">
              <h3>Pertanyaan 7:</h3>
              <p>
                Apakah dalam sebulan belakangan ini pencernaan Anda terganggu?
              </p></label
            >
            <label
              ><input type="radio" id="q7" name="q7" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q7" name="q7"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q7" name="q7"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q7" name="q7"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question8">
            <label for="q8">
              <h3>Pertanyaan 8:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda sulit berpikir jernih?
              </p></label
            >
            <label
              ><input type="radio" id="q8" name="q8" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q8" name="q8"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q8" name="q8"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q8" name="q8"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question9">
            <label for="q9">
              <h3>Pertanyaan 9:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda merasa tidak bahagia?
              </p></label
            >
            <label
              ><input type="radio" id="q9" name="q9" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q9" name="q9"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q9" name="q9"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q9" name="q9"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question10">
            <label for="q10">
              <h3>Pertanyaan 10:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda menjadi sering
                menangis?
              </p></label
            >
            <label
              ><input type="radio" id="q10" name="q10" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q10" name="q10"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q10" name="q10"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q10" name="q10"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question11">
            <label for="q11">
              <h3>Pertanyaan 11:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda kurang menikmati
                kegiatan Anda sehari-hari?
              </p></label
            >
            <label
              ><input type="radio" id="q11" name="q11" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q11" name="q11"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q11" name="q11"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q11" name="q11"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question12">
            <label for="q12">
              <h3>Pertanyaan 12:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda sulit mengambil
                keputusan?
              </p></label
            >
            <label
              ><input type="radio" id="q12" name="q12" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q12" name="q12"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q12" name="q12"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q12" name="q12"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question13">
            <label for="q13">
              <h3>Pertanyaan 13:</h3>
              <p>
                Apakah dalam sebulan belakangan ini pekerjaan rutin Anda
                terganggu?
              </p></label
            >
            <label
              ><input type="radio" id="q13" name="q13" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q13" name="q13"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q13" name="q13"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q13" name="q13"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question14">
            <label for="q14">
              <h3>Pertanyaan 14:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda tidak mampu melakukan
                hal-hal yang bermanfaat?
              </p></label
            >
            <label
              ><input type="radio" id="q14" name="q14" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q14" name="q14"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q14" name="q14"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q14" name="q14"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question15">
            <label for="q15">
              <h3>Pertanyaan 15:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda kehilangan minat
                terhadap berbagai hal?
              </p></label
            >
            <label
              ><input type="radio" id="q15" name="q15" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q15" name="q15"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q15" name="q15"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q15" name="q15"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question16">
            <label for="q16">
              <h3>Pertanyaan 16:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda merasa diri Anda tidak
                berharga?
              </p></label
            >
            <label
              ><input type="radio" id="q16" name="q16" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q16" name="q16"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q16" name="q16"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q16" name="q16"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question17">
            <label for="q17">
              <h3>Pertanyaan 17:</h3>
              <p>
                Apakah dalam sebulan belakangan ini dalam benak Anda ada pikiran
                untuk mengakhiri hidup?
              </p></label
            >
            <label
              ><input type="radio" id="q17" name="q17" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q17" name="q17"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q17" name="q17"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q17" name="q17"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question18">
            <label for="q18">
              <h3>Pertanyaan 18:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda merasa lelah
                berkepanjangan?
              </p></label
            >
            <label
              ><input type="radio" id="q18" name="q18" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q18" name="q18"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q18" name="q18"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q18" name="q18"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question19">
            <label for="q19">
              <h3>Pertanyaan 19:</h3>
              <p>
                Apakah dalam sebulan belakangan ini lambung Anda terasa tidak
                nyaman?
              </p></label
            >
            <label
              ><input type="radio" id="q19" name="q19" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q19" name="q19"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q19" name="q19"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q19" name="q19"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="question" id="question20">
            <label for="q20">
              <h3>Pertanyaan 20:</h3>
              <p>
                Apakah dalam sebulan belakangan ini Anda gampang capek?
              </p></label
            >
            <label
              ><input type="radio" id="q20" name="q20" value="0" /> <span>Tidak pernah</span
            ><br
            /></label>
            <label
              ><input type="radio" id="q20" name="q20"  value="1" /><span
                >jarang</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q20" name="q20"  value="2" /><span 
                >Sering</span
              ><br
            /></label>
            <label
              ><input type="radio" id="q20" name="q20"  value="3" /><span
                >Sangat sering</span
              ><br
            /></label>
          </div>
          <div class="buttons">
            <button type="button" id="prevButton" onclick="prevQuestion()">
              Previous
            </button>
            <button type="button" id="nextButton" onclick="nextQuestion()">
              Next
            </button>
          </div>
        </form>
    <div id="result"></div>
      </main>
    </div>
    <script src="js/dass.js"></script>
    <script src="js/script.js"></script>

     <script>
        feather.replace();
    </script>
  </body>
</html>

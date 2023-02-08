<?php
$name = 'Дмитрий';
$profession = 'Ведущий инженер';
$city = 'Мозырь';
$country = 'Республика Беларусь';
$email = 'dzmitrij@mozyr.by';
$phone = '+375291234567';

$skills = [['skill_name' => 'Control Builder Honeywell C300',
            'percent' => '85%'],
           ['skill_name' => 'Control Builder ABB AC800M',
            'percent' => '35%'],
           ['skill_name' => 'Control Builder Honeywell Safety Builder',
            'percent' => '90%'],
           ['skill_name' => 'Simatic Manager Siemens',
            'percent' => '50%']
          ];

$languages = [['language_name' => 'Английский',
               'percent' => '45%'],
              ['language_name' => 'Русский',
              'percent' => '100%'],
              ['language_name' => 'Белорусский',
              'percent' => '80%']
             ];

$work_exp = [['work_name' => 'Слесарь по КИПиА',
                    'date' => '08/2010 - 04/2012',
                    'description' => "Выполнение работ по техническому обслуживанию и ремонту оборудования АСУТП
                    на базе контроллеров ABB, Siemens S7-300, Triconex."], 
             ['work_name' => "Инженер-электроник",
             'date' => '04/2012 - 12/2021',
             'description' => "Планирование, организация и проведение технического обслуживания и ремонта оборудования АСУТП
             на базе котроллеров ABB, Siemens S7-400, Honewell C300/Safety Manager, Allen-Bradley. Администрирование компьютерной
             техники и оргтехники АСУТП. Реализация с помощью специализированного программного комплекса проектных решений при
             модернизации АСУТП."],
             ['work_name' => "Ведущий иженер",
             'date' => '12/2021',
             'description' => "Организация работ при строительстве новых технологических объектов (комплекса), взаимодействие
             с иностранными специалистами и подрядными организациями. Планирование, организация и проведение технического обслуживания
             и ремонта оборудования АСУТП на базе котроллеров ABB, Siemens S7-400/S7-1200, Honewell C300/Safety Manager.
             Разработка технических условий и проектных решений при модернизации АСУТП."]
            ];
          
?>

<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://thumbs.dreamstime.com/b/%D0%B8%D0%BD%D0%B6%D0%B5%D0%BD%D0%B5%D1%80-%D0%BC%D1%83%D0%BB%D1%8C%D1%82%D1%84%D0%B8%D0%BB%D1%8C%D0%BC%D0%B0-%D0%BB%D0%BE%D0%B3%D0%BE%D1%82%D0%B8%D0%BF-%D0%B8%D0%BD%D0%B6%D0%B5%D0%BD%D0%B5%D1%80%D0%B0-130577241.jpg"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2> <?= $name ?> </h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i> <?= $profession ?> </p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $city ?>, <?= $country ?> </p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i> <?= $email ?> </p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i> <?= $phone ?> </p>
 
            <hr>
            <?php for ($i = count($skills) - 1; $i >= 0; $i--): ?>
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <p> <?= $skills[$i]['skill_name'] ?> </p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style= <?= $skills[$i]['percent'] ?> > <?= $skills[$i]['percent'] ?> </div>
            </div>
            <?php endfor ?>
            <br>
 
            <?php for ($i = count($languages) - 1; $i >= 0; $i--): ?>
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p> <?= $languages[$i]['language_name'] ?> </p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style= "height:24px;width: <?= $languages[$i]['percent'] ?> " ></div>
            </div>
            <?php endfor ?>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <?php for ($i = count($work_exp) - 1; $i >= 0; $i--): ?>
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
              <div class="w3-container">
            <h5 class="w3-opacity"><b> <?= $work_exp[$i]['work_name'] ?> </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> <?= $work_exp[$i]['date'] ?> 
            <?php if ($i == count($work_exp) - 1): ?>
            - <span class="w3-tag w3-teal w3-round">Current</span>
            <?php endif ?>
            </h6>
            <p> <?= $work_exp[$i]['description'] ?> </p>
            <?php if ($i > 0 && $i < count($work_exp)): ?>
              <hr>
            <?php endif ?>
          </div>
          <?php endfor ?>
        </div>
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2022 - Сейчас</h6>
            <p>IT инженер</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Белорусский государственный технологический университет</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2005 - 2010</h6>
            <p>Инженер по автоматизации</p>
            <hr>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>
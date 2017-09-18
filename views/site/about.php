<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About me';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
      <div class="col-xs-3">
        <img src="<?php echo Yii::getAlias('@web').'/assets/images/jackie.jpg' ?>" alt="Jackie" id="prof-pic" class="img-rounded">
      </div>
      <div class="col-xs-9">
        <h4>Jackie Ellenberger</h4>
        <p>
          A web developer who lives for those “Eureka!” moments. When I’m not coding I’m playing table-top and board games.
        </p>
        <p>
          I began coding in highschool, where I taught myself Java and C++.
          I enjoyed the puzzle solving aspect of programming, so I took my studies further by entering the Computer Science
          program at Douglas College. When I finished my 2-year diploma at the college, I still wanted to further my knowledge
          of web development. I discovered Code Core where I earned a certification in web development.
        </p>
      </div>
    </div>


    <h3>Technical Skills</h3>
    <p><strong>Languages:</strong> Ruby, HTML5 &amp; CSS3, JavaScript, AJAX, JSON, PHP</p>
    <p><strong>Frameworks:</strong> Rails, Node.js, jQuery, CodeIgniter, Bootstrap<p>
    <p><strong>Databases:</strong> MySQL, PostgreSQL, MongoDB<p>
    <p><strong>Concepts:</strong> MVC design, Object-Oriented Programming, REST</p>

    <h3>Education</h3>

    <table class="table">
      <tr>
        <th>Web Development Certificate</th><td>Vancouver</td>
      </tr>
      <tr>
        <td>CodeCore Developer Bootcamp</td><td>June - Aug 2017</td>
      </tr>
      <tr>
        <th>Computer Science Diploma</th><td>New Westminster</td>
      </tr>
      <tr>
        <td>Douglas College</td><td>Graduated Feb 2017</td>
      </tr>
    </table>

</div>

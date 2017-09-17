<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About me';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <h3>Technical Skills</h3>
    <p><strong>Languages:</strong> Ruby, HTML5 &amp; CSS3, JavaScript, AJAX, JSON, PHP</p>
    <p><strong>Frameworks:</strong> Rails, Node.js, jQuery, CodeIgniter, Bootstrap<p>
    <p><strong>Databases:</strong> MySQL, PostgreSQL, MongoDB<p>
    <p><strong>Concepts:</strong> MVC design, Object-Oriented Programming, REST</p>

    <h3>Education</h3>

    <table class="table">
      <tr>
        <td><strong>Web Development Certificate</strong></td><td>Vancouver</td>
      </tr>
      <tr>
        <td>CodeCore Developer Bootcamp</td><td>June - Aug 2017</td>
      </tr>
      <tr>
        <td><strong>Computer Science Diploma</strong></td><td>New Westminster</td>
      </tr>
      <tr>
        <td>Douglas College</td><td>Graduated Feb 2017</td>
      </tr>
    </table>

</div>

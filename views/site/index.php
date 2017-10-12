<?php

/* @var $this yii\web\View */

$this->title = 'Jackie Ellenberger';

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Jackie Ellenberger</h1>

        <p>Full-Stack developer in the Vancouver area.</p>
        <div class="container soc-media">
          <p><a href="https://github.com/jackie-ell"><span class="fa fa-github"></span>GitHub</a></p>
          <p><a href="https://www.linkedin.com/in/jackie-ell/"><span class="fa fa-linkedin-square"></span>LinkedIn</a></p>
          <p><a href="https://angel.co/jackie-ellenberger"><span class="fa fa-angellist"></span>AngelList</a></p>
          <p><a href="mailto:jackie.ellenberger@gmail.com"><span class="fa fa-envelope"></span>Email</a></p>
        </div>
    </div>



    <div class="body-content">
      <div class="panel panel-default">
        <div id="filter-list" class="panel-body">

        </div>
      </div>
        <div class="row project-list">
            <div class="col-xs-12 col-md-4">
              <div class="thumbnail">
                <img src="<?php echo Yii::getAlias('@web').'/assets/images/code-drillz.png' ?>" alt="natural disaster img" class="img-thumbnail project"/>
                <div class="caption">
                  <span class="label label-primary">Ruby on Rails</span>
                  <span class="label label-primary">PostgreSQL</span>
                  <span class="label label-primary">Bootstrap</span>
                  <span class="label label-primary">HTML5 &amp; CSS3</span>
                  <span class="label label-primary">JavaScript</span>
                  <h3>Code Drillz</h3>
                  <p>A quizzing site made to test users in various tech-related topics. This was a collaborative project created with Ruby on Rails, Bootstrap, HTML5, CSS3 and JavaScript. My role involved creating and managing Rails controllers, and preparing views for the front-end team to style.</p>
                  <p>
                    <a class="btn btn-primary" href="https://railsonfire.herokuapp.com/">View &raquo;</a>
                    <a class="btn btn-default" href="https://github.com/jackie-ell/ROF">Source &raquo;</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="thumbnail">
                <img src="https://raw.githubusercontent.com/jackie-ell/natural-disasters/master/public/images/Screen%20Shot%202017-09-13%20at%201.11.04%20PM.png" alt="natural disaster img" class="img-thumbnail project"/>
                <div class="caption">
                  <span class="label label-primary">Node.js</span>
                  <span class="label label-primary">Express.js</span>
                  <span class="label label-primary">MongoDB</span>
                  <h3>Natural Disaster API</h3>
                  <p>An API that allows developers to quickly fetch thousands of rows of data on various natural disasters. The data is formatted in GeoJSON which allows it to be imported into the Google Maps API. This was a personal project created with Node.js, Express.js, and MongoDB, with a heavy emphasis on data scrapers.</p>
                  <p><a class="btn btn-default" href="https://github.com/jackie-ell/natural-disasters">Source &raquo;</a></p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="thumbnail">
                <img src="https://raw.githubusercontent.com/jackie-ell/natural-disasters-spa/master/public/Screen%20Shot%202017-09-07%20at%2012.08.15%20PM.png" alt="natural disaster spa img" class="img-thumbnail project"/>
                <div class="caption">
                  <span class="label label-primary">HTML5 &amp; CSS3</span>
                  <span class="label label-primary">JavaScript</span>
                  <span class="label label-primary">Google Maps API</span>
                  <h3>Natural Disaster SPA</h3>
                  <p>Single page front-end application to demonstrate my Natural Disasters API by importing the data into the Google Maps API. This project was built with HTML5, CSS3, and JavaScript.</p>
                  <p><a class="btn btn-default" href="https://github.com/jackie-ell/natural-disasters">Source &raquo;</a></p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="thumbnail">
                <img src="https://raw.githubusercontent.com/jackie-ell/github-top5-list/master/public/image.png" alt="github top5 img" class="img-thumbnail project"/>
                <div class="caption">
                  <span class="label label-primary">Ruby on Rails</span>
                  <span class="label label-primary">HTML5 &amp; CSS3</span>
                  <span class="label label-primary">Bootstrap</span>
                  <span class="label label-primary">JavaScript</span>
                  <span class="label label-primary">GitHub API</span>
                  <h3>GitHub Top 5</h3>
                  <p>Allows the user to search on a GitHub username they put into the URL. The page then shows the given GitHub user's top 5 repositories, sorted by various parameters. This project was built in Ruby on Rails and used the GitHub API. Some challenges included caching API results to avoid the rate limit.</p>
                  <p><a class="btn btn-default" href="https://github.com/jackie-ell/github-top5-list">Source &raquo;</a></p>
                </div>
              </div>
            </div>
        </div>

        <div class="overlay">
          <div class="pic-box">
            <img id="blowup-pic" src="" alt="blow up pic">
          </div>
        </div>

    </div>
</div>

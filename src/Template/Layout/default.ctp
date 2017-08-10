<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>



    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('font-awesome.min') ?>
    <?= $this->Html->css('animate') ?>
    <?= $this->Html->css('main') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('dataTables') ?>
    <?php echo $this->Html->css('../font-awesome/css/font-awesome'); ?>

    <?= $this->Html->script('jquery-3.2.1') ?>
    <?php echo $this->Html->css('../bootstrap/css/bootstrap.min'); ?>
    <?php echo $this->Html->script('../bootstrap/js/bootstrap.min'); ?>
    <?php echo $this->Html->script(array('angular/angular.js','angular/1.5.6-angular-route.min.js','angular/app/app')); ?>
    <?php echo $this->Html->script('../angular-smart-table/dist/smart-table'); ?>
    <?php //echo $this->Html->script('modernizr-2.6.2.min'); ?>




    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<header id="header_fede">
  <nav  data-topbar role="navigation">
      <ul class="title-area large-3 medium-4 columns">
          <li class="name">
              <h1><a href=""><?= $this->fetch('title') ?></a></h1>
          </li>
      </ul>
      <div class="toggle-navigation toggle-left">
          <ul>
            <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
              <i class="fa fa-bars"></i>
          </button>
        </ul>
      <div class="top-bar-section">
      </div>

  </nav>

  </div>
</header>
<body ng-app="mainApp">

    <?php echo $this->Element('menu'); ?>
    <!-- <div> -->
      <div class="container clearfix">
      <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
var addOrRemove = false;
  $( "#toggle-left" ).click(function() {
    // debugger;
    // $( "#sidebar" ).toggleClass( 'sidebar sidebar-toggle', addOrRemove );
    if ( addOrRemove ) {
      addOrRemove = false;
      $( "#sidebar" ).removeClass( 'sidebar sidebar-toggle' );
      $( "#sidebar" ).addClass( 'sidebar' );
    } else {
      addOrRemove = true;
      $( "#sidebar" ).removeClass( 'sidebar' );
      $( "#sidebar" ).addClass( 'sidebar sidebar-toggle' );
    }

  });
});
</script>

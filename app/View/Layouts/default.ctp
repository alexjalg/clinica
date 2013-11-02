<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
    <head>

        <?php echo $this->Html->charset(); ?>


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title>Ocumedic</title>

        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array('bootstrap.min', 'bootstrap-theme.min', 'theme'));
        echo $this->Html->script(array('jquery', 'bootstrap.min', 'holder'));        

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../../assets/js/html5shiv.js"></script>
          <script src="../../assets/js/respond.min.js"></script>
        <![endif]-->
        <?php echo $this->Js->writeBuffer(array('cache'=>TRUE)) ?>
    </head>
    <body>
        <div id="container">

            <?php if ($logged_in): ?>
                <div id="header">
                    <!-- Fixed navbar -->
                    <div class="navbar navbar-inverse navbar-fixed-top">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">OCUMEDIC</a>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown active">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimientos <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <?php echo $this->Html->link('Clientes', array('controller' => 'clientes', 'action' => 'index')) ?>
                                            </li>
                                            <li>
                                                <?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'index')) ?>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Citas</a></li> 
                                    <li><a href="#">Cobranzas</a></li> 
                                </ul> 
                                
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <?php if ($logged_in): ?>
                                        <li class="active">
                                            <a href="#">
                                                Bienvenido <?php echo $current_user['username']; ?>
                                            </a>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout')) ?>
                                        </li>
                                        <?php else: ?>
                                            <?php // echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?>
                                        <?php endif; ?>    
                                    </li>
                                </ul>                                
                            </div><!--/.nav-collapse -->
                        </div>                        
                    </div>
                </div>
            <?php endif ?>

            <div class="container theme-showcase">

                <?php echo $this->Session->flash(); ?>
                <?php echo $this->Session->flash('auth'); ?>

                <?php echo $this->fetch('content'); ?>

            </div>

        </div>
        <?php // echo $this->element('sql_dump'); ?>
    </body>
</html>



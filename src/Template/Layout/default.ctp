<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
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

    <!--<?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>-->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

            <!--BootSTRAP -->
        <link href="<?php echo $this->request->webroot;?>vendors/bootstrap/dist/css/bootstrap.min.css"
        rel="stylesheet">

        <!--Font Awesome-->
        <link href="<?php echo $this->request->webroot;?>vendors/font-awesome/css/font-awesome.min.css"
        rel="stylesheet">

         <!--NProgress-->
        <link href="<?php echo $this->request->webroot;?>vendors/nprogress/css/nprogress.css"
        rel="stylesheet">

        <!--bootstrap-wysiwyg-->
        <link href="<?php echo $this->request->webroot;?>vendors/google-code-prettify/bin/prettify.min.css"
        rel="stylesheet">

         <!--Custom styling plus plugins-->
        <link href="<?php echo $this->request->webroot;?>build/css/custom.min.css"
        rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php echo $this->element('sidebar'); ?>
            <?php echo $this->element('top_bar'); ?>
            <?php echo $this->element('content'); ?>
            <?php echo $this->element('footer'); ?>
        </div>

    </div>

    <!-- jQuery -->
    <script src="<?php echo $this->request->webroot;?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo $this->request->webroot;?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo $this->request->webroot;?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo $this->request->webroot;?>/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo $this->request->webroot;?>/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo $this->request->webroot;?>/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo $this->request->webroot;?>/vendors/google-code-prettify/src/prettify.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo $this->request->webroot;?>/build/js/custom.min.js"></script>
</body>

</html>

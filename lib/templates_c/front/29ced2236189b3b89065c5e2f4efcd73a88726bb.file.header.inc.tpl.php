<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-15 11:57:09
         compiled from "templates\front\header.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3043355264123953f48-75252896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29ced2236189b3b89065c5e2f4efcd73a88726bb' => 
    array (
      0 => 'templates\\front\\header.inc.tpl',
      1 => 1431679478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3043355264123953f48-75252896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55264123a5d989_60373570',
  'variables' => 
  array (
    'seo_keywords' => 0,
    'seo_descr' => 0,
    'site_settings' => 0,
    'seo_title' => 0,
    'site_css' => 0,
    'menu' => 0,
    'first_level' => 0,
    'last_level' => 0,
    'menu_active' => 0,
    'final_level' => 0,
    'title' => 0,
    'error' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55264123a5d989_60373570')) {function content_55264123a5d989_60373570($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['seo_keywords']->value;?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['seo_descr']->value;?>
">
    <meta name="author" content="Boldrich.ru">
    <link rel="shortcut icon" href="/images/<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['site_favicon'];?>
">

    <title><?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['site_title'];?>
</title>

    <link rel="stylesheet" type="text/css" href="/dist/bootstrap/dist/css/bootstrap.min.css">
    <link href="/dist/smartmenus/jquery.smartmenus.bootstrap.css" rel="stylesheet">

    <!-- Временный стиль-->
    <link rel="stylesheet" type="text/css" href="/dist/config/style.css">
    <!-- Конец Временный стиль-->

    <link rel="stylesheet" type="text/css" href="/dist/sweetalert2/sweetalert2.css">
    
    <?php echo $_smarty_tpl->tpl_vars['site_css']->value;?>


    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <!-- Счетчики метрики-->

        <!-- Google Analytics-->
            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['google_analytics'];?>

        <!-- END of Google Analytics-->

        <!-- Yandex metrika-->
            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['yandex_metrika'];?>

        <!-- END of Yandex metrika-->

        <!-- Other metrik-->
            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['other_metrika'];?>

        <!-- END of Other metrik-->

    <!-- Конец Счетчики метрики-->

    <!-- Код соц. кнопок -->
    <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['fb_header'];?>

    <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['vk_header'];?>

    <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['gplus_header'];?>

    <!-- Конец Код соц. кнопок-->

</head>

<body>
<div class="container">
    <header>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['admin_title'];?>
</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">

                    <?php  $_smarty_tpl->tpl_vars['first_level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['first_level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['first_level']->key => $_smarty_tpl->tpl_vars['first_level']->value) {
$_smarty_tpl->tpl_vars['first_level']->_loop = true;
?>

                        <?php if (isset($_smarty_tpl->tpl_vars['first_level']->value['childs'])) {?>

                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['first_level']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['first_level']->value['title'];?>
</a>
                                <ul class="dropdown-menu">
                                    
                                    <?php  $_smarty_tpl->tpl_vars['last_level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['last_level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['first_level']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['last_level']->key => $_smarty_tpl->tpl_vars['last_level']->value) {
$_smarty_tpl->tpl_vars['last_level']->_loop = true;
?>

                                        <?php if (isset($_smarty_tpl->tpl_vars['last_level']->value['childs'])) {?>

                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['last_level']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['last_level']->value['title'];?>
</a>
                                                <ul class="dropdown-menu">
                                                    
                                                    <?php  $_smarty_tpl->tpl_vars['final_level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['final_level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_level']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['final_level']->key => $_smarty_tpl->tpl_vars['final_level']->value) {
$_smarty_tpl->tpl_vars['final_level']->_loop = true;
?>

                                                        <li <?php if ($_smarty_tpl->tpl_vars['menu_active']->value==$_smarty_tpl->tpl_vars['final_level']->value['target']) {?> class="active" <?php }?>>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['final_level']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['final_level']->value['title'];?>
</a>
                                                        </li>

                                                    <?php } ?>

                                                    
                                                </ul>
                                            </li>

                                        <?php } else { ?>

                                            <li <?php if ($_smarty_tpl->tpl_vars['menu_active']->value==$_smarty_tpl->tpl_vars['last_level']->value['target']) {?> class="active" <?php }?>>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['last_level']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['last_level']->value['title'];?>
</a>
                                            </li>

                                        <?php }?>

                                    <?php } ?>

                                    
                                </ul>
                            </li>

                        <?php } else { ?>

                            <li <?php if ($_smarty_tpl->tpl_vars['menu_active']->value==$_smarty_tpl->tpl_vars['first_level']->value['target']) {?> class="active" <?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['first_level']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['first_level']->value['title'];?>
</a>
                            </li>
                        
                        <?php }?>
                        
                    <?php } ?>

                    </ul>
                </div>
            </div>
        </nav>

        <div class ='col-md-2'>
            <img src="/images/<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['site_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['site_title'];?>
">
        </div>
        <div class ='col-md-10'>
            <div class="jumbotron">
                <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
            </div>
        </div>

        <div class="clearfix"></div>

        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)||isset($_smarty_tpl->tpl_vars['message']->value)) {?>
            <div class="row"> 

                <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?> 
                    <div class ='col-md-12'>
                        <div class='alert alert-danger'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                        </div>
                    </div>
                <?php }?>

                <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
                    <div class ='col-md-12'>
                        <div class='alert alert-success'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                        </div>
                    </div>
                <?php }?>
                
            </div>
            <div class="clearfix"></div>
        <?php }?>

    </header>

    <div class="row">
    <!--конец хедера--><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-15 13:02:53
         compiled from "templates\front\category.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183935529fcc6ef24a6-09197771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de4ef16202bd15de3b92ec2c8a005446e7a025e4' => 
    array (
      0 => 'templates\\front\\category.page.tpl',
      1 => 1431683556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183935529fcc6ef24a6-09197771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5529fcc703cac2_45733095',
  'variables' => 
  array (
    'title' => 0,
    'records' => 0,
    'record' => 0,
    'category_url' => 0,
    'Page' => 0,
    'Prev_Page' => 0,
    'pag_urls' => 0,
    'pag_url' => 0,
    'Next_Page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5529fcc703cac2_45733095')) {function content_5529fcc703cac2_45733095($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<aside class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
    </ol>
</aside>

<section>

    <?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value) {
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>

    <article class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['record']->value['title'];?>
</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12"> <?php echo $_smarty_tpl->tpl_vars['record']->value['descr'];?>
</div>
                </div>
            </div>
            <div class="panel-footer"><?php echo $_smarty_tpl->tpl_vars['record']->value['datetime'];?>
 <a href="/<?php echo $_smarty_tpl->tpl_vars['category_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['record']->value['url'];?>
">Подробнее</a></div>
        </div>
    </article>

    <?php } ?>

</section>

<?php if (isset($_smarty_tpl->tpl_vars['Page']->value)) {?>

<section class="col-lg-12 col-md-12 col-xs-12">
    <nav>
        <ul class="pagination">

            <?php if (isset($_smarty_tpl->tpl_vars['Prev_Page']->value)) {?>

            <li>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['category_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Prev_Page']->value;?>
" aria-label="Пред.">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            <?php }?>

            <?php  $_smarty_tpl->tpl_vars['pag_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pag_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pag_urls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pag_url']->key => $_smarty_tpl->tpl_vars['pag_url']->value) {
$_smarty_tpl->tpl_vars['pag_url']->_loop = true;
?>

                <?php if ($_smarty_tpl->tpl_vars['pag_url']->value==$_smarty_tpl->tpl_vars['Page']->value) {?>

                <li class='active'><a href='#'><?php echo $_smarty_tpl->tpl_vars['pag_url']->value;?>
</a></li>

                <?php } else { ?>

                <li><a href="/<?php echo $_smarty_tpl->tpl_vars['category_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pag_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pag_url']->value;?>
</a></li>

                <?php }?>

            <?php } ?>

            <?php if (isset($_smarty_tpl->tpl_vars['Next_Page']->value)) {?>

            <li>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['category_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Next_Page']->value;?>
" aria-label="След.">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>

            <?php }?>

        </ul>
    </nav>
</section>

<?php }?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 20:25:16
         compiled from "templates\admin\gallerylist.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250835525647c801c12-32573655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c80055448c67e1806ab8fbb68c0b83e10c15c908' => 
    array (
      0 => 'templates\\admin\\gallerylist.page.tpl',
      1 => 1428513904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250835525647c801c12-32573655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5525647c8c12c7_08344733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5525647c8c12c7_08344733')) {function content_5525647c8c12c7_08344733($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-12">

    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value['type']==2) {?>
                
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
?hd=1&rel=0" allowfullscreen></iframe>
                        </div>
                        <div class="caption">
                        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                        <a href="/admin/gallery/del/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-danger btn-circle" style="margin-left:5px;"><i class="fa fa-trash-o"></i></a>
                        </h3>
                        <p><span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['item']->value['datetime'];?>
</span></p>
                        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['descr'];?>
</p>
                        </div>
                    </div>
                </div>

            <?php } else { ?>

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="embed-responsive embed-responsive-4by3">
                            <a href="/admin/gallery/updgallery/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="img-thumbnail thumb-div" >
                                <img class="img-responsive thumb-img" src="/thumb/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
"  alt="Banana">
                            </a>
                        </div>
                        <div class="caption">
                            <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                            <a href="/admin/gallery/updgallery/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></a>
                            <a href="/admin/gallery/del/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-danger btn-circle" style="margin-left:5px;"><i class="fa fa-trash-o"></i></a>
                            </h3>
                            <p><span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['item']->value['datetime'];?>
</span></p>
                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['descr'];?>

                            </p>
                        </div>
                    </div>
                </div>

            <?php }?>

        <?php } ?>

</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 15:55:46
         compiled from "templates\admin\galleryvideoadd.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24000552919a47f82b3-84658469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa12c9fc9f70779985837cf9b4736f1f6d67f870' => 
    array (
      0 => 'templates\\admin\\galleryvideoadd.page.tpl',
      1 => 1429707342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24000552919a47f82b3-84658469',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552919a487cfd0_06126437',
  'variables' => 
  array (
    'date' => 0,
    'gallery_list' => 0,
    'gallery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552919a487cfd0_06126437')) {function content_552919a487cfd0_06126437($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Добавить видео</h3>
        </div>
        <form role="form" action="/admin/gallerylist/add" method="post">
            <div class="panel-body" id="gallery_add">

                    <input type="hidden" name="seo_title" value="">
                    <input type="hidden" name="seo_descr" value="">
                    <input type="hidden" name="seo_keywords" value="">
                    <input type="hidden" id="url" name="url" value="">
                
                    <div class="form-group">
                        <label>Ссылка на YouTube</label>
                        <input type="text" id="gallery_button_add" name="file" class="form-control"
                        oninput="document.getElementById('url').value=this.value;"
                        onkeydown="document.getElementById('url').value=this.value;"
                        placeholder="Пример: jocClWzzgmk" autocomplete="off" required>
                    </div>


                    <div class="form-group">
                        <label>Дата</label>
                        <input type="text" id="pick_date" class="form-control date" name="datetime" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" placeholder="гггг.мм.дд" autocomplete="off">
                    </div>

                    <div class="form-group" >
                        <label>Заголовок</label>
                        <input type="text" id="add_title" class="form-control" name="title" placeholder="Название видео" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Галерея</label>

                        <select class="form-control" name="gallery_list_id" id="gallery_param_gallery_list">

                            <?php  $_smarty_tpl->tpl_vars['gallery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gallery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->key => $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['gallery']->_loop = true;
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['gallery']->value['title'];?>
</option>

                            <?php } ?>

                        </select>

                    </div>

                    <div class="form-group" >
                        <label>Описание</label>
                        <textarea id="add_descr" class="form-control" name="descr" rows="3"></textarea>
                    </div>

                    <input type=hidden name="type" value='2'>

            </div>
            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Добавить</button>
            </div>
        </form>
    </div>

</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
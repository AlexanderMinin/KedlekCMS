<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-09 20:21:27
         compiled from "templates\admin\configanalytics.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30434554e421722a761-35920637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d33da14fb1993647ff8f06bbaa144e4006205ec' => 
    array (
      0 => 'templates\\admin\\configanalytics.page.tpl',
      1 => 1431192082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30434554e421722a761-35920637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554e421727c7f9_32018186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554e421727c7f9_32018186')) {function content_554e421727c7f9_32018186($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form role="form" action="/admin/config/update" method="post">
 
    <div class="col-lg-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки счетчиков аналитики</h3>
            </div>
            <div class="panel-body">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa  fa-google-plus fa-fw"></i> Google analytics</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Код счетчика</label>
                            <textarea class="form-control" name="config[google_analytics]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['google_analytics'];?>
</textarea>
                        </div>

                    </div>
                </div>

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa  fa-share-alt fa-fw"></i> Яндекс Метрика</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Код счетчика</label>
                            <textarea class="form-control" name="config[yandex_metrika]" rows="7"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['yandex_metrika'];?>
</textarea>
                        </div>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa  fa-bar-chart-o fa-fw"></i> Другая аналитика</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Код счетчика</label>
                            <textarea class="form-control" name="config[other_metrika]" rows="7"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['other_metrika'];?>
</textarea>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="clearfix"></div>

    <div class="col-lg-6">
      <div class="well center-block">
        <button type="submit" id="config_save_button" class="btn btn-success btn-lg btn-block">Обновить настройки</button>
      </div>
    </div>

</form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>

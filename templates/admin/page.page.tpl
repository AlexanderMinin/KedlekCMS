{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<form role="form" action="/admin/pages/update" method="post">
    
    <input type="hidden" id="id_page" name="id" value="{$item.id}">

    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Параметры страницы</h3>
            </div>
            <div class="panel-body" id="page_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input type="text" id="page_param_title" class="form-control" 
                    oninput="document.getElementById('seo_param_title').value=this.value;"
                    onkeydown="document.getElementById('seo_param_title').value=this.value;"
                    value="{$item.title}"
                    name="title" placeholder="Заголовок страницы"  autocomplete="off" require>
                </div>

                <div class="form-group">
                    <label>URL страницы</label>
                    <input id="page_param_url" type="text" class="form-control" name="url" placeholder="stranica" value="{$item.url}"  autocomplete="off" require>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">SEO настройки</h3>
            </div>
            <div class="panel-body" id="seo_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input id="seo_param_title" type="text" class="form-control" name="seo_title" placeholder="Заголовок страницы" value="{$item.seo_title}"  autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <input id="seo_param_descr" type="text" class="form-control" name="seo_descr" placeholder="Заголовок страницы" value="{$item.seo_descr}"  autocomplete="off">
                </div>

                <div class="form-group" id="seo_param_keywords">
                    <label>Ключевые слова</label><br/>
                    <input type="text" class="form-control" data-role="tagsinput" name="seo_keywords" value="{$item.seo_keywords}"  autocomplete="off">
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Содержимое страницы</h3>
            </div>
            <div class="panel-body" id="page_text">   
                <textarea class="form-control moxiecut" name="text" rows="3">{$item.text}</textarea>
            </div>
            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Сохранить страницу</button>
            </div>
        </div>
    </div>

</form>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}
<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/Reference/show.latte

class Templateb0210d39089bf1c4d808f1eaba69dfb2 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5ad8397f79', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbbaf9f7a7db_content')) { function _lbbaf9f7a7db_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="box">
            <p><a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:show"), ENT_COMPAT) ?>
">← späť na výpis referencií</a></p>
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center"><?php echo Latte\Runtime\Filters::escapeHtml($reference->title, ENT_NOQUOTES) ?>

                    <hr>
                    <small><?php echo Latte\Runtime\Filters::escapeHtml($template->date($reference->created_at, 'F j, Y'), ENT_NOQUOTES) ?></small>
                </h2>

                <p><?php echo Latte\Runtime\Filters::escapeHtml($reference->content, ENT_NOQUOTES) ?></p>
            </div>

            <div class="col-lg-12">
<?php if ($user->loggedIn) { ?>                <a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("edit", array($reference->id)), ENT_COMPAT) ?>
">Upravit príspevok</a>
<?php } ?>
            </div>
            <div class="col-lg-12">
<?php if ($user->loggedIn) { ?>                <a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("delete!"), ENT_COMPAT) ?>
">Zmazať príspevok</a>
<?php } ?>
            </div>
            <div class="clearfix"></div>

                        <div class="thumbnails group">
<?php $iterations = 0; foreach ($galery as $img) { ?>
                    <div class="thumbnailImg">
                        <div>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->imgUrl), ENT_COMPAT) ?>" data-lightbox="lalal">
                                <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->imgUrl), ENT_COMPAT) ?>" width="70%" height="120px">
                            </a>
                        </div>
                        <div>
<?php if ($user->loggedIn) { ?>                            <a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("deleteImage!", array($img->id,$img->reference_id,$img->name)), ENT_COMPAT) ?>
">X</a>
<?php } ?>
                       
<?php if ($user->loggedIn) { ?>                            <a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("setMainImg!", array($img->id,$img->reference_id)), ENT_COMPAT) ?>
">Nastaviť ako hlavný</a>
<?php } ?>
                        </div>   
                    </div>
<?php $iterations++; } ?>
            </div>


            <div class="clearfix"></div>
            <div class="col-lg-12" style="margin-top: 5%">
<?php if ($user->loggedIn) { $_l->tmp = $_control->getComponent("uploadForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ;} ?>
            </div>



        </div>
    </div>

</div>

<div id="lightBoxBg" onclick="dismiss()">

</div>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}
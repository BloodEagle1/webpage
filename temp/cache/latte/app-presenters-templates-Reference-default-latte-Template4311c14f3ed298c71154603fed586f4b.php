<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/Reference/default.latte

class Template4311c14f3ed298c71154603fed586f4b extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5f06aa4adf', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lbf6950546e1_title')) { function _lbf6950546e1_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Referencia<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb885c55ca49_content')) { function _lb885c55ca49_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="box">
            <p><a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:default", array($referenceChoose = $reference->type)), ENT_COMPAT) ?>
">← späť na výpis referencií</a></p>
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center"><?php echo Latte\Runtime\Filters::escapeHtml($reference->title, ENT_NOQUOTES) ?>

                    <hr>
                    <small><?php echo Latte\Runtime\Filters::escapeHtml($template->date($reference->created_at, 'F j, Y'), ENT_NOQUOTES) ?></small>
                </h2>

                <p><strong>Použité technológie: </strong><?php echo $template->nl2br(Latte\Runtime\Filters::escapeHtml($reference->technologies, ENT_NOQUOTES)) ?></p>
                <p><strong>Použité zariadenia: </strong><?php echo $template->nl2br(Latte\Runtime\Filters::escapeHtml($reference->devices, ENT_NOQUOTES)) ?></p>
            </div>

            <div class="col-lg-12 button">
<?php if ($user->loggedIn) { ?>                <a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("edit", array($reference->id)), ENT_COMPAT) ?>
">Upravit referenciu</a>
<?php } ?>
            </div>
            <div class="col-lg-12 button">
<?php if ($user->loggedIn) { ?>                <a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("delete!"), ENT_COMPAT) ?>
">Zmazať referenciu</a>
<?php } ?>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 galery">
<?php $iterations = 0; foreach ($galery as $img) { ?>
                    <div class="col-md-4 thumbnail" <?php if ($user->loggedIn) { ?>
id="galeryGroupL" <?php } ?> id="galeryGroup">
                        <div>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->imgUrl), ENT_COMPAT) ?>" data-lightbox="lalal">
                                <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->imgUrl), ENT_COMPAT) ?>" id="galeryImg">
                            </a>
                        </div>
                        <div>
<?php if ($user->loggedIn) { ?>                            <a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("deleteImage!", array($img->id,$img->reference_id,$img->name)), ENT_COMPAT) ?>
">X</a>
<?php } if ($img->mainImg == 0) { if ($user->loggedIn) { ?>                                <a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("setMainImg!", array($img->id,$img->reference_id)), ENT_COMPAT) ?>
">Nastaviť ako hlavný</a>
<?php } } if ($img->mainImg == 1) { if ($user->loggedIn) { ?>                                <a class="btn btn-success" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("setMainImg!", array($img->id,$img->reference_id)), ENT_COMPAT) ?>
">Nastavený ako hlavný</a>
<?php } } ?>
                        </div>   
                    </div>  
<?php $iterations++; } ?>
                <div class="col-lg-4">
<?php if ($user->loggedIn) { $_l->tmp = $_control->getComponent("uploadForm"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ;} ?>
                </div>
            </div>
        </div>
    </div>
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
call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>



<?php call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}
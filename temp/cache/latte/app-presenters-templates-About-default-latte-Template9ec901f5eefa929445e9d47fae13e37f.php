<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/About/default.latte

class Template9ec901f5eefa929445e9d47fae13e37f extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('87096f6c40', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb7660fee855_title')) { function _lb7660fee855_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>O nás<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb3e3a29b1a5_content')) { function _lb3e3a29b1a5_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container"> 
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>O nás</strong>
                </h2>
                <hr>
            </div>
<?php $iterations = 0; foreach ($about as $about) { ?>
                <div class="col-lg-12">
                    <p><?php echo $template->nl2br(Latte\Runtime\Filters::escapeHtml($about->content, ENT_NOQUOTES)) ?></p>
                </div>

                <div class="col-lg-12">
<?php if ($user->loggedIn) { ?>                    <a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("edit", array($about->id)), ENT_COMPAT) ?>
">Upraviť</a>
<?php } ?>
                </div>
<?php $iterations++; } ?>
            <div class="clearfix"></div>
            <div class="col-lg-12 galery">
<?php $iterations = 0; foreach ($certifications as $certification) { ?>
                    <div class="col-md-4 thumbnail" id="galeryGroup">
                        <div>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($certification->certifUrl), ENT_COMPAT) ?>" data-lightbox="lalal">
                                <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($certification->certifUrl), ENT_COMPAT) ?>" id="galeryImg">
                            </a>
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
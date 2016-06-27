<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/Homepage/setImgs.latte

class Templatecb017f339d11ead4a904a096a1840d7d extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('90bd0b588f', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb4f6172680a_title')) { function _lb4f6172680a_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Edit úvodných obrázkov<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb26ad5ecac7_content')) { function _lb26ad5ecac7_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container"> 
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
            <p><a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:default"), ENT_COMPAT) ?>
">← späť na úvod</a></p>
            </div>
            
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
<?php if ($img->homeImg == 0 || $img->homeImg == 2 || $img->homeImg == 3) { if ($user->loggedIn) { ?>
                                    <a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("setHomeImg!", array($img->id,$homeImg = 1)), ENT_COMPAT) ?>
">1</a>
<?php } } if ($img->homeImg == 1) { if ($user->loggedIn) { ?>                                    <a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("setHomeImg!", array($img->id,$homeImg = 1)), ENT_COMPAT) ?>
">1</a>
<?php } } if ($img->homeImg == 0 || $img->homeImg == 1 || $img->homeImg == 3) { if ($user->loggedIn) { ?>
                                    <a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("setHomeImg!", array($img->id,$homeImg = 2)), ENT_COMPAT) ?>
">2</a>
<?php } } if ($img->homeImg == 2) { if ($user->loggedIn) { ?>                                    <a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("setHomeImg!", array($img->id,$homeImg = 2)), ENT_COMPAT) ?>
">2</a>
<?php } } if ($img->homeImg == 0 || $img->homeImg == 1 || $img->homeImg == 2) { if ($user->loggedIn) { ?>
                                    <a class="btn btn-default" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("setHomeImg!", array($img->id,$homeImg = 3)), ENT_COMPAT) ?>
">3</a>
<?php } } if ($img->homeImg == 3) { if ($user->loggedIn) { ?>                                    <a class="btn btn-danger" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("setHomeImg!", array($img->id,$homeImg = 3)), ENT_COMPAT) ?>
">3</a>
<?php } } ?>
                            </div>   
                        </div>
<?php $iterations++; } ?>
                
                
            </div>
                <div class="col-lg-12">
            <p></p>
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
call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>

<?php call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}
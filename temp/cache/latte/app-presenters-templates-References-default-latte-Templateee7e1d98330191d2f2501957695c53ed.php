<?php
// source: C:\wamp\www\web\app\presenters/templates/References/default.latte

class Templateee7e1d98330191d2f2501957695c53ed extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('2cc3046d7e', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb06c3ce377e_title')) { function _lb06c3ce377e_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Referencie<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb9de4903bd3_content')) { function _lb9de4903bd3_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
<?php if ($user->loggedIn) { ?>                <a class="btn btn-success" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Reference:create"), ENT_COMPAT) ?>
">Vytvoriť novú referenciu</a>
<?php } ?>
                <hr><h2 class="intro-text text-center">
                    Referencie <strong> <?php echo Latte\Runtime\Filters::escapeHtml($referenceChoose, ENT_NOQUOTES) ?></strong>
                </h2>
                <hr>
<?php $iterations = 0; foreach ($references as $reference) { ?>                <div class="col-lg-12">
                    <div class="col-md-8 text-center">
                        <h3><?php echo Latte\Runtime\Filters::escapeHtml($reference->title, ENT_NOQUOTES) ?>

                            <br>
                            <small><?php echo Latte\Runtime\Filters::escapeHtml($template->date($reference->created_at, 'F j, Y'), ENT_NOQUOTES) ?></small>
                        </h3>
                        <p class="text-left"><strong>Použité technológie: </strong><?php echo $template->truncate($reference->technologies, 60) ?></p> 
                        <p class="text-left"><strong>Použité zariadenia: </strong><?php echo $template->truncate($reference->devices, 60) ?></p>
                    </div>
                    <div class="col-md-4  mainImg"> 
<?php $iterations = 0; foreach ($galery as $img) { if ($reference->id == $img->reference_id && $img->mainImg == 1) { ?>                        <div class="thumbnail">
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ;echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->imgUrl), ENT_COMPAT) ?>" data-lightbox="l">
                                <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ;echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($img->imgUrl), ENT_COMPAT) ?>" class="mImg" alt="">        
                            </a>
                        </div>
<?php } $iterations++; } ?>
                    </div>
                    <div class="col-lg-8 text-center">
                        <a class="btn btn-default btn-lg" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Reference:default", array($reference->id)), ENT_COMPAT) ?>
">Ukázať viac</a>
                    </div>
                </div>
<?php $iterations++; } ?>
                <div class="col-lg-12 text-center">
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
<?php
// source: C:\wamp\www\web\app\presenters/templates/References/choose.latte

class Template067642d4c9652dbe354d86f06c85bd68 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('fc9fd1112d', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lbc9f021c093_title')) { function _lbc9f021c093_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Druh referencie<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb8082d185ab_content')) { function _lb8082d185ab_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr><h2 class="intro-text text-center">
                    <strong>Referencie</strong>
                </h2>             
                <hr>
            </div>

            <div class="col-lg-12">
                <h2 class="intro-text text-center">
                    <small>Referenčné stavby</small>
                </h2>
            </div>

            <table class="table table-bordered table-responsive text-center"> 
                <tbody>
                    <tr>
                        <td>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:default", array($referenceChoose='Vykurovanie')), ENT_COMPAT) ?>
">
                                <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/img/ref-kurenie.gif" class="img-thumbnail img-responsive" style="width: 100%" alt="">
                            </a>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:default", array($referenceChoose='Vykurovanie')), ENT_COMPAT) ?>
"> Vykurovanie</a>
                        </td>  
                        <td>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:default", array($referenceChoose='Voda')), ENT_COMPAT) ?>
">
                                <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/img/ref-voda.gif" class="img-thumbnail img-responsive" style="width: 100%" alt="">   
                            </a>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:default", array($referenceChoose='Voda')), ENT_COMPAT) ?>
"> Voda</a>
                        </td>
                        <td>
                            <a  href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:default", array($referenceChoose='Solar')), ENT_COMPAT) ?>
">
                                <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/img/ref-solar.gif" class="img-thumbnail img-responsive" style="width: 100%" alt="">   
                            </a>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:default", array($referenceChoose='Solar')), ENT_COMPAT) ?>
"> Solar</a>
                        </td>
                        <td>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:default", array($referenceChoose='Cerpadla')), ENT_COMPAT) ?>
">
                                <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/img/ref-cerpadla.gif" class="img-thumbnail img-responsive" style="width: 100%" alt="">
                            </a>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("References:default", array($referenceChoose='Cerpadla')), ENT_COMPAT) ?>
"> Čerpadlá</a>
                        </td>

                </tbody>
            </table>
            <div style="padding-top: 10%">
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
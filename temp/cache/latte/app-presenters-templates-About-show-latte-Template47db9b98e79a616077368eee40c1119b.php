<?php
// source: C:\wamp\www\bakalarka_web\app\presenters/templates/About/show.latte

class Template47db9b98e79a616077368eee40c1119b extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('edafa2784a', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb4e68b1cca4_content')) { function _lb4e68b1cca4_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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

            <div class="col-lg-12">
                <p>This is a great place to introduce your company or project and describe what you do.</p>
                <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accudafadafffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffsantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Our
                    <strong>Team</strong>
                </h2>
                <hr>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class="clearfix"></div>
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
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}
<?php

/* home.html.twig */
class __TwigTemplate_34234fbdfa5633c622342aa0db4af1f38edd7258ddf08fe7d05807dbba929fd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<section class=\"home-hero\">
\t\t<div class=\"home-hero-content\">
\t\t\t";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>

\t\t";
        // line 10
        echo "\t\t<a href=\"#work-anchor\" class=\"intro-scroll-container\" data-0=\"opacity:1;bottom: 10%;\" data-500=\"opacity:0;bottom:62%;\">
\t\t\t<div class=\"intro-scroll\"></div>
\t\t\t\t<div class=\"intro-scroll-arrow\"></div>
\t\t\t<div class=\"intro-scroll-text\">
\t\t\t  <span>View</span>
\t\t\t  <span>Work</span>
\t\t\t</div>
\t\t</a>
\t</section>

\t<section class=\"home-work\" id=\"work-anchor\">
\t\t<div class=\"home-work-feed\">
\t\t\t<ul>
\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "find", array(0 => "/"), "method"), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ($this->getAttribute($context["p"], "visible", array())) {
                // line 24
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 25
                echo $this->getAttribute($context["p"], "url", array());
                echo "\">
\t\t\t\t\t\t<div class=\"work-item-background\">
\t\t\t\t\t\t\t<h3>";
                // line 27
                echo $this->getAttribute($context["p"], "title", array());
                echo "</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</ul>
\t\t</div>
\t</section>

\t";
        // line 37
        echo "\t\t<div class=\"home-bkg\" style=\"background-image: url('";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "background_img", array());
        echo "');\"></div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  81 => 32,  69 => 27,  64 => 25,  61 => 24,  56 => 23,  41 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<section class="home-hero">*/
/* 		<div class="home-hero-content">*/
/* 			{{ page.content }}*/
/* 		</div>*/
/* */
/* 		{# Scroll Image #}*/
/* 		<a href="#work-anchor" class="intro-scroll-container" data-0="opacity:1;bottom: 10%;" data-500="opacity:0;bottom:62%;">*/
/* 			<div class="intro-scroll"></div>*/
/* 				<div class="intro-scroll-arrow"></div>*/
/* 			<div class="intro-scroll-text">*/
/* 			  <span>View</span>*/
/* 			  <span>Work</span>*/
/* 			</div>*/
/* 		</a>*/
/* 	</section>*/
/* */
/* 	<section class="home-work" id="work-anchor">*/
/* 		<div class="home-work-feed">*/
/* 			<ul>*/
/* 			{% for p in page.find('/').children if p.visible %}*/
/* 				<li>*/
/* 					<a href="{{p.url}}">*/
/* 						<div class="work-item-background">*/
/* 							<h3>{{ p.title }}</h3>*/
/* 						</div>*/
/* 					</a>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* 	{# Background Image #}*/
/* 		<div class="home-bkg" style="background-image: url('{{ header.background_img }}');"></div>*/
/* {% endblock %}*/
/* */

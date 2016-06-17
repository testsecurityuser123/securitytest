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
        echo "\t<section class=\"home-hero\" id=\"welcome\">
\t\t<div class=\"home-hero-content\">
\t\t\t";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>

\t\t";
        // line 10
        echo "\t\t<a href=\"#work\" class=\"intro-scroll-container\" data-center-center=\"opacity:1;transform:translateY(0%);\" data-top-bottom=\"opacity:0;transform:translateY(250%);\">
\t\t\t<div class=\"intro-scroll\"></div>
\t\t\t\t<div class=\"intro-scroll-arrow\"></div>
\t\t\t<div class=\"intro-scroll-text\">
\t\t\t  <span>View</span>
\t\t\t  <span>Work</span>
\t\t\t</div>
\t\t</a>
\t</section>

\t<section class=\"home-work\" id=\"work\">
\t\t<div class=\"home-work-feed\">

\t\t\t<ul
\t\t\t\t";
        // line 33
        echo "\t\t\t>
\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "findTaxonomy", array(0 => array("category" => "work")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 35
            echo "\t\t\t\t";
            $context["first_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
            // line 36
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">
\t\t\t\t\t\t<div class=\"work-item-background\">
\t\t\t\t\t\t\t<h3>";
            // line 39
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h3>
\t\t\t\t\t\t\t";
            // line 41
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"work-item-background-image\" style=\"background-image: url(' ";
            // line 42
            echo $this->getAttribute((isset($context["first_image"]) ? $context["first_image"] : null), "url", array());
            echo " ');\"></div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t</ul>
\t\t</div>
\t</section>

\t<section class=\"home-about\" id=\"about\">
\t\t<div class=\"home-about-container\">

\t\t\t<div class=\"home-about-main-container\">
\t\t\t\t<h3>";
        // line 54
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about_title", array());
        echo "</h3>
\t\t\t\t<p>";
        // line 55
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about_description", array());
        echo "</p>


\t\t\t\t<div class=\"home-about-social-container\">
\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about_social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 60
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["social"], "url", array())) {
                // line 61
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["social"], "url", array());
                echo "\" class=\"home-about-social social-";
                echo $this->getAttribute($context["social"], "class", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["social"], "class", array());
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"home-about-side-container\">
\t\t\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about_sidebar", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 69
            echo "\t\t\t\t\t<div class=\"home-about-sidebar\">
\t\t\t\t\t\t";
            // line 70
            if ($this->getAttribute($context["attribute"], "title", array())) {
                // line 71
                echo "\t\t\t\t\t\t\t<h6>";
                echo $this->getAttribute($context["attribute"], "title", array());
                echo "</h6>
\t\t\t\t\t\t";
            }
            // line 73
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["attribute"], "description", array())) {
                // line 74
                echo "\t\t\t\t\t\t\t<p>";
                echo $this->getAttribute($context["attribute"], "description", array());
                echo "</p>
\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"home-about-background-image\" style=\"background-image: url(' ";
        // line 80
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "about_background_img", array());
        echo " ');\" data-0-end=\"transform:scale(1.05);opacity:0.05;z-index:1;\" data-600-end=\"transform:scale(1);opacity:0.0;z-index:0\"></div>
\t</section>



\t";
        // line 86
        echo "\t\t<div class=\"home-bkg\" style=\"background-image: url('";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "header_background_img", array());
        echo "');\" data-0p=\"transform:scale(1.05);opacity:0.1;z-index:1;\" data-100p=\"transform:scale(1);opacity:0.0;z-index:0;\"></div>
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
        return array (  185 => 86,  177 => 80,  173 => 78,  166 => 76,  160 => 74,  157 => 73,  151 => 71,  149 => 70,  146 => 69,  142 => 68,  136 => 64,  130 => 63,  120 => 61,  117 => 60,  113 => 59,  106 => 55,  102 => 54,  92 => 46,  82 => 42,  79 => 41,  75 => 39,  70 => 37,  67 => 36,  64 => 35,  60 => 34,  57 => 33,  41 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<section class="home-hero" id="welcome">*/
/* 		<div class="home-hero-content">*/
/* 			{{ page.content }}*/
/* 		</div>*/
/* */
/* 		{# Scroll Image #}*/
/* 		<a href="#work" class="intro-scroll-container" data-center-center="opacity:1;transform:translateY(0%);" data-top-bottom="opacity:0;transform:translateY(250%);">*/
/* 			<div class="intro-scroll"></div>*/
/* 				<div class="intro-scroll-arrow"></div>*/
/* 			<div class="intro-scroll-text">*/
/* 			  <span>View</span>*/
/* 			  <span>Work</span>*/
/* 			</div>*/
/* 		</a>*/
/* 	</section>*/
/* */
/* 	<section class="home-work" id="work">*/
/* 		<div class="home-work-feed">*/
/* */
/* 			<ul*/
/* 				{# data-bottom-top="*/
/* 					transform:translateY(50%);*/
/* 					-webkit-transform:translateY(50%);*/
/* 					-moz-transform:translateY(50%)"*/
/* */
/* 				data-center-top="*/
/* 					transform:translateY(0);*/
/* 					-webkit-transform:translateY(0);*/
/* 					-moz-transform:translateY(0);" #}*/
/* 			>*/
/* 			{% for p in taxonomy.findTaxonomy({'category':'work'}) %}*/
/* 				{% set first_image = p.media.images|first %}*/
/* 				<li>*/
/* 					<a href="{{p.url}}">*/
/* 						<div class="work-item-background">*/
/* 							<h3>{{ p.title }}</h3>*/
/* 							{# {{ first_image }} #}*/
/* 						</div>*/
/* 						<div class="work-item-background-image" style="background-image: url(' {{ first_image.url }} ');"></div>*/
/* 					</a>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* 	<section class="home-about" id="about">*/
/* 		<div class="home-about-container">*/
/* */
/* 			<div class="home-about-main-container">*/
/* 				<h3>{{ page.header.about_title }}</h3>*/
/* 				<p>{{ page.header.about_description }}</p>*/
/* */
/* */
/* 				<div class="home-about-social-container">*/
/* 				{% for social in page.header.about_social %}*/
/* 						{% if social.url %}*/
/* 							<a href="{{ social.url }}" class="home-about-social social-{{ social.class }}" target="_blank">{{ social.class }}</a>*/
/* 						{% endif %}*/
/* 				{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="home-about-side-container">*/
/* 				{% for attribute in page.header.about_sidebar %}*/
/* 					<div class="home-about-sidebar">*/
/* 						{% if attribute.title %}*/
/* 							<h6>{{ attribute.title }}</h6>*/
/* 						{% endif %}*/
/* 						{% if attribute.description %}*/
/* 							<p>{{ attribute.description }}</p>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="home-about-background-image" style="background-image: url(' {{ header.about_background_img }} ');" data-0-end="transform:scale(1.05);opacity:0.05;z-index:1;" data-600-end="transform:scale(1);opacity:0.0;z-index:0"></div>*/
/* 	</section>*/
/* */
/* */
/* */
/* 	{# Background Image #}*/
/* 		<div class="home-bkg" style="background-image: url('{{ header.header_background_img }}');" data-0p="transform:scale(1.05);opacity:0.1;z-index:1;" data-100p="transform:scale(1);opacity:0.0;z-index:0;"></div>*/
/* {% endblock %}*/
/* */

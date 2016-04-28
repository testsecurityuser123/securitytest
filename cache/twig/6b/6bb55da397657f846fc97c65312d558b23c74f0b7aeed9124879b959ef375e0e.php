<?php

/* modular/project-phone-feature.html.twig */
class __TwigTemplate_608fcd4b555a42a0c12dacd97b76b60a9a21a97d5e52dd6f24d0ae457c0407e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"project-pf\">
\t<div class=\"project-pf-container\">
\t\t<div class=\"project-pf-phone-container\">
\t\t\t<div class=\"project-pf-phone\"><iframe src=\"";
        // line 4
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_iframe", array());
        echo "\"></iframe><div class=\"project-pf-phone-image\" style=\"background-image: url(' ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_phoneimg", array());
        echo "')\"></div></div>
\t\t</div>
\t\t<div class=\"project-pf-content-container\">
\t\t\t<h4>";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h4>
\t\t\t<p>";
        // line 8
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</p>
\t\t\t<a href=\"";
        // line 9
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_button_link", array());
        echo "\" target=\"_blank\" class=\"btn btn-arrow-r\">";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_button_text", array());
        echo "</a>
\t\t</div>
\t</div>

\t<div class=\"project-pf-background\" style=\"background-image: url(' ";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_background_image", array());
        echo "');\"></div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/project-phone-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  42 => 9,  38 => 8,  34 => 7,  24 => 4,  19 => 1,);
    }
}
/* <section class="project-pf">*/
/* 	<div class="project-pf-container">*/
/* 		<div class="project-pf-phone-container">*/
/* 			<div class="project-pf-phone"><iframe src="{{ header.project_pf_iframe }}"></iframe><div class="project-pf-phone-image" style="background-image: url(' {{ page.url(true) }}/{{ header.project_pf_phoneimg }}')"></div></div>*/
/* 		</div>*/
/* 		<div class="project-pf-content-container">*/
/* 			<h4>{{ page.title }}</h4>*/
/* 			<p>{{ content }}</p>*/
/* 			<a href="{{ header.project_pf_button_link }}" target="_blank" class="btn btn-arrow-r">{{ header.project_pf_button_text }}</a>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="project-pf-background" style="background-image: url(' {{ page.url(true) }}/{{ header.project_pf_background_image }}');"></div>*/
/* </section>*/
/* */
/* */

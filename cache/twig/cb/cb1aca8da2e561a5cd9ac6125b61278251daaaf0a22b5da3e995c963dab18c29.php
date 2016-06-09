<?php

/* modular/project-gallery.html.twig */
class __TwigTemplate_7ce5b8c49e65b7e088fd718b516944c6391bbdf0a6ba2d2fd2642a2279c87642 extends Twig_Template
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
        echo "<section class=\"project-gal\">
\t<div class=\"project-gal-container\">
\t\t";
        // line 3
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_gal_half_1", array())) {
            // line 4
            echo "\t\t\t<div class=\"project-gal-half-image\" style=\"background-image: url(' ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_gal_half_1", array());
            echo "');\"></div>
\t\t";
        }
        // line 6
        echo "\t\t";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_gal_half_2", array())) {
            // line 7
            echo "\t\t\t<div class=\"project-gal-half-image\" style=\"background-image: url(' ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_gal_half_2", array());
            echo "');\"></div>
\t\t";
        }
        // line 9
        echo "\t\t";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_gal_full", array())) {
            // line 10
            echo "\t\t\t<div class=\"project-gal-full-image\" style=\"background-image: url(' ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_gal_full", array());
            echo "');\"></div>
\t\t";
        }
        // line 12
        echo "\t\t
\t</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/project-gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  47 => 10,  44 => 9,  36 => 7,  33 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <section class="project-gal">*/
/* 	<div class="project-gal-container">*/
/* 		{% if header.project_gal_half_1 %}*/
/* 			<div class="project-gal-half-image" style="background-image: url(' {{ page.url(true) }}/{{ header.project_gal_half_1 }}');"></div>*/
/* 		{% endif %}*/
/* 		{% if header.project_gal_half_2 %}*/
/* 			<div class="project-gal-half-image" style="background-image: url(' {{ page.url(true) }}/{{ header.project_gal_half_2 }}');"></div>*/
/* 		{% endif %}*/
/* 		{% if header.project_gal_full %}*/
/* 			<div class="project-gal-full-image" style="background-image: url(' {{ page.url(true) }}/{{ header.project_gal_full }}');"></div>*/
/* 		{% endif %}*/
/* 		*/
/* 	</div>*/
/* </section>*/
/* */
/* */

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/project-intro.html.twig */
class __TwigTemplate_806fbe42b55a8774c2e0157006e15983d3d0102576fb40daf3c6ee769c090f9a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section class=\"project-intro\">
\t<div class=\"project-intro-container\">

\t\t<div class=\"project-intro-info-container\">
\t\t\t<div class=\"project-intro-info\" data-start=\"opacity:1;;transform:translateY(0%);\" data-top-bottom=\"opacity:0;;transform:translateY(50%);\">
\t\t\t\t<h2>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
\t\t\t\t";
        // line 7
        echo ($context["content"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div class=\"project-intro-image-container\">

\t\t\t<div class=\"project-intro-image-laptop\" style=\"background-image: url(' ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_img_laptop", []);
        echo "');\" data-start=\"background-position:center -.5%;\" data-top-bottom=\"background-position:center 10%;\"></div>

\t\t\t";
        // line 15
        if ($this->getAttribute(($context["header"] ?? null), "project_img_phone", [])) {
            // line 16
            echo "\t\t\t<div class=\"project-intro-image-phone\" style=\"background-image: url(' ";
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "/";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_phone", []);
            echo "');\" data-start=\"background-position:63% -.5%;\" data-top-bottom=\"background-position:63% 15%\"></div>
\t\t\t";
        }
        // line 18
        echo "\t\t</div>

\t</div>
\t<div class=\"project-intro-background-image\" style=\"background-image: url(' ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_intro_background_image", []);
        echo "');\" data-0p=\"transform:scale(1.05);opacity:0.075;z-index:1;\" data-50p=\"transform:scale(1);opacity:0.0;z-index:0;\"></div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/project-intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  67 => 18,  59 => 16,  57 => 15,  50 => 13,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"project-intro\">
\t<div class=\"project-intro-container\">

\t\t<div class=\"project-intro-info-container\">
\t\t\t<div class=\"project-intro-info\" data-start=\"opacity:1;;transform:translateY(0%);\" data-top-bottom=\"opacity:0;;transform:translateY(50%);\">
\t\t\t\t<h2>{{ page.title }}</h2>
\t\t\t\t{{ content }}
\t\t\t</div>
\t\t</div>

\t\t<div class=\"project-intro-image-container\">

\t\t\t<div class=\"project-intro-image-laptop\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_img_laptop }}');\" data-start=\"background-position:center -.5%;\" data-top-bottom=\"background-position:center 10%;\"></div>

\t\t\t{% if header.project_img_phone %}
\t\t\t<div class=\"project-intro-image-phone\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_img_phone }}');\" data-start=\"background-position:63% -.5%;\" data-top-bottom=\"background-position:63% 15%\"></div>
\t\t\t{% endif %}
\t\t</div>

\t</div>
\t<div class=\"project-intro-background-image\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_intro_background_image }}');\" data-0p=\"transform:scale(1.05);opacity:0.075;z-index:1;\" data-50p=\"transform:scale(1);opacity:0.0;z-index:0;\"></div>
</section>
", "modular/project-intro.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-intro.html.twig");
    }
}

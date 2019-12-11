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

/* modular/project-phone-feature.html.twig */
class __TwigTemplate_b821bfa983e18674ca2ec1bd9bb70e81908709288a186061a356d18285c0caca extends \Twig\Template
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
        echo "<section class=\"project-pf\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-pf-container\">
\t\t<div class=\"project-pf-phone-container\">
\t\t\t<div class=\"project-pf-phone\">
\t\t\t\t";
        // line 5
        if ($this->getAttribute(($context["header"] ?? null), "project_pf_iframe", [])) {
            // line 6
            echo "\t\t\t\t\t<iframe src=\"";
            echo $this->getAttribute(($context["header"] ?? null), "project_pf_iframe", []);
            echo "\"></iframe>
\t\t\t\t";
        }
        // line 8
        echo "\t\t\t\t<div class=\"project-pf-phone-image\" style=\"background-image: url(' ";
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_pf_phoneimg", []);
        echo "')\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"project-pf-content-container\">
\t\t\t<div class=\"project-pf-content-inner-container\">
\t\t\t\t<h3>";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3>
\t\t\t\t<p>";
        // line 14
        echo ($context["content"] ?? null);
        echo "</p>
\t\t\t\t";
        // line 15
        if ($this->getAttribute(($context["header"] ?? null), "project_pf_button_link", [])) {
            // line 16
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute(($context["header"] ?? null), "project_pf_button_link", []);
            echo "\" target=\"_blank\" class=\"btn btn-arrow-r\">";
            echo $this->getAttribute(($context["header"] ?? null), "project_pf_button_text", []);
            echo "</a>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"project-pf-background\" style=\"background-image: url(' ";
        // line 22
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_pf_background_image", []);
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
        return array (  79 => 22,  73 => 18,  65 => 16,  63 => 15,  59 => 14,  55 => 13,  44 => 8,  38 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"project-pf\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-pf-container\">
\t\t<div class=\"project-pf-phone-container\">
\t\t\t<div class=\"project-pf-phone\">
\t\t\t\t{% if header.project_pf_iframe %}
\t\t\t\t\t<iframe src=\"{{ header.project_pf_iframe }}\"></iframe>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"project-pf-phone-image\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_pf_phoneimg }}')\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"project-pf-content-container\">
\t\t\t<div class=\"project-pf-content-inner-container\">
\t\t\t\t<h3>{{ page.title }}</h3>
\t\t\t\t<p>{{ content }}</p>
\t\t\t\t{% if header.project_pf_button_link %}
\t\t\t\t\t<a href=\"{{ header.project_pf_button_link }}\" target=\"_blank\" class=\"btn btn-arrow-r\">{{ header.project_pf_button_text }}</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"project-pf-background\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_pf_background_image }}');\"></div>
</section>

", "modular/project-phone-feature.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-phone-feature.html.twig");
    }
}

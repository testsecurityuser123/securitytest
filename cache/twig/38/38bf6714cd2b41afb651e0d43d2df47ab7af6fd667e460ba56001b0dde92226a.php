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

/* modular/project-phone-slider.html.twig */
class __TwigTemplate_ab07dc16d4b71b3681079aa11276f5669d5ca1ace00343ea73030e784b85a8d8 extends \Twig\Template
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
        echo "<section class=\"project-ps\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-ps-container\">
\t\t<div class=\"project-ps-phone-container\">
\t\t\t";
        // line 10
        echo "
\t\t\t<div class=\"project-ps-slider\">
\t\t\t  \t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "project_ps_slides", []));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 13
            echo "\t\t\t\t  \t<a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "/";
            echo $this->getAttribute($context["slide"], "image", []);
            echo "\" class=\"project-ps-slide\">
\t\t\t\t  \t\t<div class=\"project-ps-slide-image\">
\t\t\t\t  \t\t\t<img src=\"";
            // line 15
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "/";
            echo $this->getAttribute($context["slide"], "image", []);
            echo "\" alt=\"";
            echo $this->getAttribute($context["slide"], "alt", []);
            echo "\">
\t\t\t\t  \t\t</div>
\t\t\t\t  \t</a>
\t\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t</div>
\t\t</div>



\t\t<div class=\"project-ps-content-container\">
\t\t\t<div class=\"project-ps-content-inner-container\">
\t\t\t\t<h3>";
        // line 26
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3>
\t\t\t\t<p>";
        // line 27
        echo ($context["content"] ?? null);
        echo "</p>
\t\t\t\t";
        // line 28
        if ($this->getAttribute(($context["header"] ?? null), "project_ps_button_link", [])) {
            // line 29
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute(($context["header"] ?? null), "project_ps_button_link", []);
            echo "\" target=\"_blank\" class=\"btn btn-arrow-r\">";
            echo $this->getAttribute(($context["header"] ?? null), "project_ps_button_text", []);
            echo "</a>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"project-ps-background\" style=\"background-image: url(' ";
        // line 35
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_ps_background_image", []);
        echo "');\"></div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/project-phone-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 35,  92 => 31,  84 => 29,  82 => 28,  78 => 27,  74 => 26,  65 => 19,  51 => 15,  43 => 13,  39 => 12,  35 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"project-ps\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-ps-container\">
\t\t<div class=\"project-ps-phone-container\">
\t\t\t{# <div class=\"project-ps-phone\">
\t\t\t\t{% if header.project_ps_iframe %}
\t\t\t\t\t<iframe src=\"{{ page.url(true) }}/{{ header.project_ps_iframe }}\"></iframe>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"project-ps-phone-image\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_ps_phoneimg }}')\"></div>
\t\t\t</div> #}

\t\t\t<div class=\"project-ps-slider\">
\t\t\t  \t{% for slide in page.header.project_ps_slides %}
\t\t\t\t  \t<a href=\"{{ page.url(true) }}/{{ slide.image }}\" class=\"project-ps-slide\">
\t\t\t\t  \t\t<div class=\"project-ps-slide-image\">
\t\t\t\t  \t\t\t<img src=\"{{ page.url(true) }}/{{ slide.image }}\" alt=\"{{ slide.alt }}\">
\t\t\t\t  \t\t</div>
\t\t\t\t  \t</a>
\t\t\t  \t{% endfor %}
\t\t\t</div>
\t\t</div>



\t\t<div class=\"project-ps-content-container\">
\t\t\t<div class=\"project-ps-content-inner-container\">
\t\t\t\t<h3>{{ page.title }}</h3>
\t\t\t\t<p>{{ content }}</p>
\t\t\t\t{% if header.project_ps_button_link %}
\t\t\t\t\t<a href=\"{{ header.project_ps_button_link }}\" target=\"_blank\" class=\"btn btn-arrow-r\">{{ header.project_ps_button_text }}</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"project-ps-background\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_ps_background_image }}');\"></div>
</section>
", "modular/project-phone-slider.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-phone-slider.html.twig");
    }
}

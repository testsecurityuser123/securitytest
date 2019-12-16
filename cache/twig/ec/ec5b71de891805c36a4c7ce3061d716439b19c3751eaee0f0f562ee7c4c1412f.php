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

/* modular/project-desktop-slider.html.twig */
class __TwigTemplate_92e3ee3fc4e15da8843ea6ba6e6a936fd12c4e166de51c7748af68932efeb754 extends \Twig\Template
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
        echo "<section class=\"project-ds ";
        if ($this->getAttribute(($context["header"] ?? null), "project_ds_no_padding", [])) {
            echo "no-pad";
        }
        echo "\">
\t<div class=\"project-ds-container\">
\t\t<div class=\"project-ds-content-container\">
\t\t\t<div class=\"project-ds-content-inner-container\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t\t\t\t<!-- <h3>";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3> -->
\t\t\t\t<p>";
        // line 6
        echo ($context["content"] ?? null);
        echo "</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"project-ds-slider-container\">

\t\t\t<div class=\"project-ds-slider\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t\t\t  \t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "project_ds_slides", []));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 14
            echo "\t\t\t\t  \t<a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "/";
            echo $this->getAttribute($context["slider"], "image", []);
            echo "\" class=\"project-ds-slide\">
\t\t\t\t  \t\t<div class=\"project-ds-slide-image\">
\t\t\t\t  \t\t\t<img src=\"";
            // line 16
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "/";
            echo $this->getAttribute($context["slider"], "image", []);
            echo "\" alt=\"";
            echo $this->getAttribute($context["slider"], "alt", []);
            echo "\">
\t\t\t\t  \t\t</div>
\t\t\t\t  \t</a>
\t\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</div>
\t\t</div>

\t</div>
\t<div class=\"project-ds-background\" style=\"background-image: url(' ";
        // line 24
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_ds_background_image", []);
        echo "');\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:0.05;\"></div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/project-desktop-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  80 => 20,  66 => 16,  58 => 14,  54 => 13,  44 => 6,  40 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"project-ds {% if header.project_ds_no_padding %}no-pad{% endif %}\">
\t<div class=\"project-ds-container\">
\t\t<div class=\"project-ds-content-container\">
\t\t\t<div class=\"project-ds-content-inner-container\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t\t\t\t<!-- <h3>{{ page.title }}</h3> -->
\t\t\t\t<p>{{ content }}</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"project-ds-slider-container\">

\t\t\t<div class=\"project-ds-slider\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t\t\t  \t{% for slider in page.header.project_ds_slides %}
\t\t\t\t  \t<a href=\"{{ page.url(true) }}/{{ slider.image }}\" class=\"project-ds-slide\">
\t\t\t\t  \t\t<div class=\"project-ds-slide-image\">
\t\t\t\t  \t\t\t<img src=\"{{ page.url(true) }}/{{ slider.image }}\" alt=\"{{ slider.alt }}\">
\t\t\t\t  \t\t</div>
\t\t\t\t  \t</a>
\t\t\t  \t{% endfor %}
\t\t\t</div>
\t\t</div>

\t</div>
\t<div class=\"project-ds-background\" style=\"background-image: url(' {{ page.url(true) }}/{{ header.project_ds_background_image }}');\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:0.05;\"></div>
</section>
", "modular/project-desktop-slider.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-desktop-slider.html.twig");
    }
}

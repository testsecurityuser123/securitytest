<?php

/* modular/project-desktop-slider.html.twig */
class __TwigTemplate_e3ff126159a916b2bf972eebb11d4a99eb7d0b0a147fa4bc1f6919425834aafd extends Twig_Template
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
        echo "<section class=\"project-ds\">
\t<div class=\"project-ds-container\">
\t\t<div class=\"project-ds-content-container\">
\t\t\t<div class=\"project-ds-content-inner-container\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t\t\t\t<h3>";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h3>
\t\t\t\t<p>";
        // line 6
        echo ($context["content"] ?? null);
        echo "</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"project-ds-slider-container\">
\t
\t\t\t<div class=\"project-ds-slider\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t\t\t  \t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "project_ds_slides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 14
            echo "\t\t\t\t  \t<a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute($context["slider"], "image", array());
            echo "\" class=\"project-ds-slide\">
\t\t\t\t  \t\t<div class=\"project-ds-slide-image\">
\t\t\t\t  \t\t\t<img src=\"";
            // line 16
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute($context["slider"], "image", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["slider"], "alt", array());
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
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_ds_background_image", array());
        echo "');\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:0.05;\"></div>
</section>";
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
        return array (  71 => 24,  65 => 20,  51 => 16,  43 => 14,  39 => 13,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"project-ds\">
\t<div class=\"project-ds-container\">
\t\t<div class=\"project-ds-content-container\">
\t\t\t<div class=\"project-ds-content-inner-container\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t\t\t\t<h3>{{ page.title }}</h3>
\t\t\t\t<p>{{ content }}</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"project-ds-slider-container\">
\t
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
</section>", "modular/project-desktop-slider.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-desktop-slider.html.twig");
    }
}

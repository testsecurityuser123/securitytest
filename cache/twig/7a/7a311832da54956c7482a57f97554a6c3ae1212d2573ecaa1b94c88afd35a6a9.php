<?php

/* modular/project-image-right-card-slider.html.twig */
class __TwigTemplate_20e5aec8747e172a80b0b926b0444adcac65fa0a98b7904261a5635291a1e868 extends Twig_Template
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
        echo "<section class=\"project-image-right-cs\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-image-right-cs-container\">

\t\t<div class=\"project-image-right-cs-slider-container\" >

\t\t\t<div class=\"project-image-right-cs-slider\">
\t\t\t  \t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "project_img_r_cs_slides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 8
            echo "\t\t\t\t  \t<a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute($context["slide"], "image", array());
            echo "\" class=\"project-image-right-cs-slide\">
\t\t\t\t  \t\t<div class=\"project-image-right-cs-slide-image\">
\t\t\t\t  \t\t\t<img src=\"";
            // line 10
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute($context["slide"], "image", array());
            echo "\" alt=\"";
            echo $this->getAttribute(($context["slider"] ?? null), "alt", array());
            echo "\">
\t\t\t\t  \t\t</div>
\t\t\t\t  \t</a>
\t\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</div>

\t\t</div>

\t\t<div class=\"project-image-right-cs-content-container\">
\t\t\t<div class=\"project-image-right-cs-content-inner-container\">
\t\t\t\t";
        // line 20
        echo ($context["content"] ?? null);
        echo "
\t\t\t\t";
        // line 21
        if ($this->getAttribute(($context["header"] ?? null), "project_img_r_cs_button_link", array())) {
            // line 22
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_r_cs_button_link", array());
            echo "\" target=\"_blank\" class=\"btn btn-arrow-r\">";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_r_cs_button_text", array());
            echo "</a>
\t\t\t\t";
        }
        // line 24
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<div
\t\tclass=\"project-image-right-cs-background\"
\t\tstyle=\"background-image: url(' ";
        // line 30
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute(($context["header"] ?? null), "project_img_r_cs_background_image", array());
        echo "');\">
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/project-image-right-card-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 24,  67 => 22,  65 => 21,  61 => 20,  53 => 14,  39 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"project-image-right-cs\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-image-right-cs-container\">

\t\t<div class=\"project-image-right-cs-slider-container\" >

\t\t\t<div class=\"project-image-right-cs-slider\">
\t\t\t  \t{% for slide in page.header.project_img_r_cs_slides %}
\t\t\t\t  \t<a href=\"{{ page.url(true) }}/{{ slide.image }}\" class=\"project-image-right-cs-slide\">
\t\t\t\t  \t\t<div class=\"project-image-right-cs-slide-image\">
\t\t\t\t  \t\t\t<img src=\"{{ page.url(true) }}/{{ slide.image }}\" alt=\"{{ slider.alt }}\">
\t\t\t\t  \t\t</div>
\t\t\t\t  \t</a>
\t\t\t  \t{% endfor %}
\t\t\t</div>

\t\t</div>

\t\t<div class=\"project-image-right-cs-content-container\">
\t\t\t<div class=\"project-image-right-cs-content-inner-container\">
\t\t\t\t{{ content }}
\t\t\t\t{% if header.project_img_r_cs_button_link %}
\t\t\t\t\t<a href=\"{{ header.project_img_r_cs_button_link }}\" target=\"_blank\" class=\"btn btn-arrow-r\">{{ header.project_img_r_cs_button_text }}</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>

\t<div
\t\tclass=\"project-image-right-cs-background\"
\t\tstyle=\"background-image: url(' {{ page.url(true) }}/{{ header.project_img_r_cs_background_image }}');\">
\t</div>
</section>
", "modular/project-image-right-card-slider.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-image-right-card-slider.html.twig");
    }
}

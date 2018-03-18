<?php

/* modular/project-card-slider-right.html.twig */
class __TwigTemplate_63b2ffb7fa002fafd4defdfd4f0b4fff27a3b7b4cf07a7f4ebee2df1f1e7a9d5 extends Twig_Template
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
        echo "<section class=\"project-cs-right\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-cs-right-container\">

\t\t<div class=\"project-cs-right-slider-container\" >

\t\t\t<div class=\"project-cs-right-slider\" ";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "project_r_cs_adjust", array())) {
            echo "style=\"margin-top:";
            echo $this->getAttribute(($context["header"] ?? null), "project_r_cs_adjust", array());
            echo ";\"";
        }
        echo ">
\t\t\t  \t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "project_img_r_cs_slides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 8
            echo "\t\t\t\t  \t\t<div class=\"project-cs-right-slide\">
\t\t\t\t  \t\t\t<span>";
            // line 9
            echo $this->getAttribute($context["slide"], "subhead", array());
            echo "</span>
\t\t\t\t\t\t\t\t<p>";
            // line 10
            echo $this->getAttribute($context["slide"], "headline", array());
            echo "<p>
\t\t\t\t\t\t\t\t\t";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["slide"], "users", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 12
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"project-cs-right-slide-userImage\" style=\"background-image: url(' ";
                echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
                echo "/";
                echo $this->getAttribute($context["user"], "image", array());
                echo " ');\"></div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t\t\t  \t\t</div>
\t\t\t\t  \t<!-- </a> -->
\t\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t</div>

\t\t</div>

\t\t<div class=\"project-cs-right-content-container\">
\t\t\t<div class=\"project-cs-right-content-inner-container\">
\t\t\t\t";
        // line 23
        echo ($context["content"] ?? null);
        echo "
\t\t\t\t";
        // line 24
        if ($this->getAttribute(($context["header"] ?? null), "project_img_r_cs_button_link", array())) {
            // line 25
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_r_cs_button_link", array());
            echo "\" target=\"_blank\" class=\"btn btn-arrow-r\">";
            echo $this->getAttribute(($context["header"] ?? null), "project_img_r_cs_button_text", array());
            echo "</a>
\t\t\t\t";
        }
        // line 27
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<div
\t\tclass=\"project-cs-right-background\"
\t\tstyle=\"background-image: url(' ";
        // line 33
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
        return "modular/project-card-slider-right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  94 => 27,  86 => 25,  84 => 24,  80 => 23,  72 => 17,  64 => 14,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  38 => 8,  34 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"project-cs-right\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-cs-right-container\">

\t\t<div class=\"project-cs-right-slider-container\" >

\t\t\t<div class=\"project-cs-right-slider\" {% if header.project_r_cs_adjust %}style=\"margin-top:{{ header.project_r_cs_adjust }};\"{% endif %}>
\t\t\t  \t{% for slide in page.header.project_img_r_cs_slides %}
\t\t\t\t  \t\t<div class=\"project-cs-right-slide\">
\t\t\t\t  \t\t\t<span>{{ slide.subhead}}</span>
\t\t\t\t\t\t\t\t<p>{{ slide.headline }}<p>
\t\t\t\t\t\t\t\t\t{% for user in slide.users %}
\t\t\t\t\t\t\t\t\t\t<div class=\"project-cs-right-slide-userImage\" style=\"background-image: url(' {{ page.url(true) }}/{{ user.image }} ');\"></div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t  \t\t</div>
\t\t\t\t  \t<!-- </a> -->
\t\t\t  \t{% endfor %}
\t\t\t</div>

\t\t</div>

\t\t<div class=\"project-cs-right-content-container\">
\t\t\t<div class=\"project-cs-right-content-inner-container\">
\t\t\t\t{{ content }}
\t\t\t\t{% if header.project_img_r_cs_button_link %}
\t\t\t\t\t<a href=\"{{ header.project_img_r_cs_button_link }}\" target=\"_blank\" class=\"btn btn-arrow-r\">{{ header.project_img_r_cs_button_text }}</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>

\t<div
\t\tclass=\"project-cs-right-background\"
\t\tstyle=\"background-image: url(' {{ page.url(true) }}/{{ header.project_img_r_cs_background_image }}');\">
\t</div>
</section>
", "modular/project-card-slider-right.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-card-slider-right.html.twig");
    }
}

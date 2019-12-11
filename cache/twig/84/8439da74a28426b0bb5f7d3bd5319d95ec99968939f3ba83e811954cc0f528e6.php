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

/* modular/project-description.html.twig */
class __TwigTemplate_52b90bab23d26168599634ecbf12faa495b94c1f0e55417cd0d8998c334385b7 extends \Twig\Template
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
        echo "<section class=\"project-desc\">
\t<div class=\"project-desc-container\" data-start=\"opacity:0;\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">

\t\t<div class=\"project-desc-main-container\">
\t\t\t<h3>";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3>
\t\t\t<p>";
        // line 6
        echo ($context["content"] ?? null);
        echo "</p>
\t\t</div>

\t\t<div class=\"project-desc-side-container\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "project_attributes", []));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 11
            echo "\t\t\t\t<div class=\"project-desc-attribute\">
\t\t\t\t\t";
            // line 12
            if ($this->getAttribute($context["attribute"], "title", [])) {
                // line 13
                echo "\t\t\t\t\t\t<h6>";
                echo $this->getAttribute($context["attribute"], "title", []);
                echo "</h6>
\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["attribute"], "description", [])) {
                // line 16
                echo "\t\t\t\t\t\t<p>";
                echo $this->getAttribute($context["attribute"], "description", []);
                echo "</p>
\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</div>
\t</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/project-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  71 => 18,  65 => 16,  62 => 15,  56 => 13,  54 => 12,  51 => 11,  47 => 10,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"project-desc\">
\t<div class=\"project-desc-container\" data-start=\"opacity:0;\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">

\t\t<div class=\"project-desc-main-container\">
\t\t\t<h3>{{ page.title }}</h3>
\t\t\t<p>{{ content }}</p>
\t\t</div>

\t\t<div class=\"project-desc-side-container\">
\t\t\t{% for attribute in page.header.project_attributes %}
\t\t\t\t<div class=\"project-desc-attribute\">
\t\t\t\t\t{% if attribute.title %}
\t\t\t\t\t\t<h6>{{ attribute.title }}</h6>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if attribute.description %}
\t\t\t\t\t\t<p>{{ attribute.description }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</section>

", "modular/project-description.html.twig", "/Applications/MAMP/htdocs/portfolio-grav/user/themes/fangman-v1/templates/modular/project-description.html.twig");
    }
}

<?php

/* modular/project-description.html.twig */
class __TwigTemplate_89edfba5549abf7307941b7c6c9a80acb3e84d0db0a20f3b63bf256f6f72f971 extends Twig_Template
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
        echo "<section class=\"project-desc\">
\t<div class=\"project-desc-container\" data-start=\"opacity:0;\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">

\t\t<div class=\"project-desc-main-container\">
\t\t\t<h3>";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h3>
\t\t\t<p>";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</p>
\t\t</div>

\t\t<div class=\"project-desc-side-container\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "project_attributes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 11
            echo "\t\t\t\t<div class=\"project-desc-attribute\">
\t\t\t\t\t";
            // line 12
            if ($this->getAttribute($context["attribute"], "title", array())) {
                // line 13
                echo "\t\t\t\t\t\t<h6>";
                echo $this->getAttribute($context["attribute"], "title", array());
                echo "</h6>
\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["attribute"], "description", array())) {
                // line 16
                echo "\t\t\t\t\t\t<p>";
                echo $this->getAttribute($context["attribute"], "description", array());
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
        return array (  67 => 20,  60 => 18,  54 => 16,  51 => 15,  45 => 13,  43 => 12,  40 => 11,  36 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"project-desc\">
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

", "modular/project-description.html.twig", "/home6/ichaemt0/public_html/user/themes/fangman-v1/templates/modular/project-description.html.twig");
    }
}

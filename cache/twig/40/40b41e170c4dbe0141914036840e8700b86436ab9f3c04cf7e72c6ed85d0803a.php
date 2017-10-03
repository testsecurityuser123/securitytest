<?php

/* modular.html.twig */
class __TwigTemplate_c544341478f7c8f504a1b6b33aab9047c57be0eccf5239c4fe1298a726bdc8c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 6
            echo "        ";
            echo $this->getAttribute($context["module"], "content", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    ";
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  40 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    {{ page.content }}
    {% for module in page.collection() %}
        {{ module.content }}
    {% endfor %}
    {# <section class=\"project-foot\">
\t\t<div class=\"project-foot-container\">
\t\t\t<a href=\"{{ page.taxonomy.category('work').nextSibling.url }}\" class=\"project-foot-prev project-foot-arrow\">Previous Project</a>
\t\t\t
\t\t\t<a href=\"{{ base_url }}/#work-anchor\" class=\"project-foot-back\">
\t\t\t\t<div class=\"project-foot-back-icon\"></div>
\t\t\t\t<span>All Work</span>
\t\t\t</a>

\t\t\t<a href=\"{{ page.adjacentSibling(-1).url }}\" class=\"project-foot-next project-foot-arrow\">Next Project</a>
\t\t</div>


\t</section> #}
{% endblock %}", "modular.html.twig", "/home6/ichaemt0/public_html/user/themes/fangman-v1/templates/modular.html.twig");
    }
}

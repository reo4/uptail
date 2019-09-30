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

/* error.html.twig */
class __TwigTemplate_68af8c7fc1075d5f61d6bb16d6ae0a81832fc7790958b87f7713481522324a5c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'header_navigation' => [$this, 'block_header_navigation'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header_navigation($context, array $blocks = [])
    {
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "\t<div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <div id=\"error\">
              <div>
                 <h2>Error ";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h2>
                 <h3>
                    ";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                </h3>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  55 => 9,  48 => 4,  45 => 3,  40 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block header_navigation %}{% endblock %}
{% block content %}
\t<div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 text-center\">
            <div id=\"error\">
              <div>
                 <h2>Error {{ page.header.http_response_code }}</h2>
                 <h3>
                    {{ page.content }}
                </h3>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "error.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\error.html.twig");
    }
}

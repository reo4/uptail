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

/* modular.html.twig */
class __TwigTemplate_dd9dd85ac2a58117146135b0419c89c020eb296aeeb3712ae088c09b2243f202 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", []) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", [])));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        // line 8
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo "\t    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 11
            echo "\t    \t";
            $context["hide"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($context["module"], "header", []), "hide", []), false);
            // line 12
            echo "\t    \t";
            if ( !($context["hide"] ?? null)) {
                // line 13
                echo "\t        ";
                echo $this->getAttribute($context["module"], "content", []);
                echo "
\t    \t";
            }
            // line 15
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t";
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), [" " => "_"]);
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
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
        return array (  84 => 4,  80 => 16,  74 => 15,  68 => 13,  65 => 12,  62 => 11,  58 => 10,  53 => 9,  46 => 8,  43 => 7,  38 => 1,  36 => 3,  30 => 1,);
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

{% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}


{% block body %}
\t{% block content %}
\t    {{ page.content }}
\t    {% for module in page.collection() %}
\t    \t{% set hide = module.header.hide|defined(false) %}
\t    \t{% if not hide %}
\t        {{ module.content }}
\t    \t{% endif %}
\t    {% endfor %}
\t{% endblock %}
{% endblock %}
", "modular.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\modular.html.twig");
    }
}

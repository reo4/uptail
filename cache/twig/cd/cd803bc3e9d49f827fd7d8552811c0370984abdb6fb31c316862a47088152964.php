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

/* partials/navigation.html.twig */
class __TwigTemplate_881004a6a4f4f10574c3766e6e61c6943347513d101538e898df39984703ee45 extends \Twig\Template
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
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-fixed-top navbar-shrink\">
\t<div
\t\tclass=\"container-fluid\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header page-scroll\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<div class=\"brand-box\">
\t\t\t\t<a class=\"navbar-brand page-scroll\" href=\"#\">
\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "brand", []));
        foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
            // line 16
            echo "\t\t\t\t\t\t<span class=\"";
            echo ("brand-" . strtolower($context["word"]));
            echo "\">";
            echo $context["word"];
            echo "</span>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t</a>
\t\t\t\t<p>
\t\t\t\t\t<strong>Smart solutions for retail</strong>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li class=\"active\">
\t\t\t\t\t<a href=\"#page-top\">Home</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "links", []));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 32
            echo "\t\t\t\t\t";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["link"], "url", []), "http")) {
                // line 33
                echo "\t\t\t\t\t\t";
                $context["domain"] = "";
                // line 34
                echo "\t\t\t\t\t";
            } elseif ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["link"], "url", []), "#")) {
                // line 35
                echo "\t\t\t\t\t\t";
                $context["domain"] = "";
                // line 36
                echo "\t\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t\t";
                $context["domain"] = ($context["base_url_absolute"] ?? null);
                // line 38
                echo "\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"page-scroll\" href=\"";
            // line 40
            echo ($context["domain"] ?? null);
            echo $this->getAttribute($context["link"], "url", []);
            echo "\" ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["link"], "url", []), "http")) {
                echo " target=\"_blank\" ";
            }
            echo ">";
            echo $this->getAttribute($context["link"], "title", []);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t</ul>
\t\t</div>
\t\t<!-- /.navbar-collapse -->
\t</div>
\t<!-- /.container-fluid -->
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  104 => 40,  101 => 39,  98 => 38,  95 => 37,  92 => 36,  89 => 35,  86 => 34,  83 => 33,  80 => 32,  76 => 31,  61 => 18,  50 => 16,  46 => 15,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Navigation -->
<nav class=\"navbar navbar-default navbar-fixed-top navbar-shrink\">
\t<div
\t\tclass=\"container-fluid\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header page-scroll\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<div class=\"brand-box\">
\t\t\t\t<a class=\"navbar-brand page-scroll\" href=\"#\">
\t\t\t\t\t{% for word in site.brand %}
\t\t\t\t\t\t<span class=\"{{'brand-' ~ strtolower(word) }}\">{{word}}</span>
\t\t\t\t\t{% endfor %}
\t\t\t\t</a>
\t\t\t\t<p>
\t\t\t\t\t<strong>Smart solutions for retail</strong>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t<li class=\"active\">
\t\t\t\t\t<a href=\"#page-top\">Home</a>
\t\t\t\t</li>
\t\t\t\t{% for link in site.links %}
\t\t\t\t\t{% if link.url | contains('http') %}
\t\t\t\t\t\t{% set domain = '' %}
\t\t\t\t\t{% elseif link.url | contains('#') %}
\t\t\t\t\t\t{% set domain = '' %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% set domain = base_url_absolute %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"page-scroll\" href=\"{{ domain }}{{ link.url }}\" {% if link.url | contains('http') %} target=\"_blank\" {% endif %}>{{ link.title }}</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t\t<!-- /.navbar-collapse -->
\t</div>
\t<!-- /.container-fluid -->
</nav>
", "partials/navigation.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\partials\\navigation.html.twig");
    }
}

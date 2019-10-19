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

/* partials/base.html.twig */
class __TwigTemplate_42d49ceca9ab7252372a5f4d53e13e0e08dabc6768293823fa8610135866c0ea extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javasripts' => [$this, 'block_javasripts'],
            'assets' => [$this, 'block_assets'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts_bottom' => [$this, 'block_javascripts_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "
  ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
  ";
        // line 24
        $this->displayBlock('javasripts', $context, $blocks);
        // line 33
        echo "
  ";
        // line 34
        $this->displayBlock('assets', $context, $blocks);
        // line 38
        echo "</head>
<body id=\"page-top\" class=\"index\">

  ";
        // line 41
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 44
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
  ";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 51
        echo "
  ";
        // line 52
        $this->displayBlock('javascripts_bottom', $context, $blocks);
        // line 55
        echo "</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "  <meta charset=\"utf-8\" />
  <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
  ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\" />
  ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 13
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/global.css", 1 => 100], "method");
        // line 14
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/vidbg.css", 1 => 100], "method");
        // line 15
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 16
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css", 1 => 100], "method");
        // line 17
        echo "    <link href=\"//fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='//fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href=\"//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link href='//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  ";
    }

    // line 24
    public function block_javasripts($context, array $blocks = [])
    {
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => ["priority" => 101]], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/bootstrap.min.js", 1 => ["priority" => 100, "group" => "bottom"]], "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.easing.min.js", 1 => ["group" => "bottom"]], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/classie.js", 1 => ["group" => "bottom"]], "method");
        // line 29
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/cbpAnimatedHeader.js", 1 => ["group" => "bottom"]], "method");
        // line 30
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vidbg.js", 1 => ["group" => "bottom"]], "method");
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/agency.js", 1 => ["group" => "bottom"]], "method");
        // line 32
        echo "  ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 34
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 36
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
  ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 41
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 42
        echo "    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 42)->display($context);
        // line 43
        echo "  ";
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        // line 45
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "  ";
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
    }

    // line 48
    public function block_footer($context, array $blocks = [])
    {
        // line 49
        echo "    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 49)->display($context);
        // line 50
        echo "  ";
    }

    // line 52
    public function block_javascripts_bottom($context, array $blocks = [])
    {
        // line 53
        echo "  ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "  
  ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 53,  223 => 52,  219 => 50,  216 => 49,  213 => 48,  208 => 45,  204 => 46,  201 => 45,  198 => 44,  194 => 43,  191 => 42,  188 => 41,  181 => 36,  176 => 35,  173 => 34,  164 => 32,  161 => 31,  158 => 30,  155 => 29,  152 => 28,  149 => 27,  146 => 26,  143 => 25,  140 => 24,  131 => 17,  128 => 16,  125 => 15,  122 => 14,  119 => 13,  116 => 12,  110 => 9,  107 => 8,  105 => 7,  97 => 6,  94 => 5,  91 => 4,  84 => 55,  82 => 52,  79 => 51,  77 => 48,  74 => 47,  71 => 44,  69 => 41,  64 => 38,  62 => 34,  59 => 33,  57 => 24,  54 => 23,  52 => 12,  49 => 11,  47 => 4,  42 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
  {% block head %}
  <meta charset=\"utf-8\" />
  <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
  {% include 'partials/metadata.html.twig' %}
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon.png') }}\" />
  {% endblock %}

  {% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/global.css',100) %}
    {% do assets.addCss('theme://css/vidbg.css',100) %}
    {% do assets.addCss('theme://css/custom.css',100) %}
    {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
    <link href=\"//fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
    <link href='//fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href=\"//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    <link href='//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  {% endblock %}

  {% block javasripts %}
    {% do assets.addJs('jquery',{'priority':101}) %}
    {% do assets.addJs('theme://js/bootstrap.min.js',{'priority':100,'group':'bottom'}) %}
    {% do assets.addJs('theme://js/jquery.easing.min.js',{'group':'bottom'}) %}
    {% do assets.addJs('theme://js/classie.js',{'group':'bottom'}) %}
    {% do assets.addJs('theme://js/cbpAnimatedHeader.js',{'group':'bottom'}) %}
    {% do assets.addJs('theme://js/vidbg.js',{'group':'bottom'}) %}
    {% do assets.addJs('theme://js/agency.js',{'group':'bottom'}) %}
  {% endblock %}

  {% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
  {% endblock %}
</head>
<body id=\"page-top\" class=\"index\">

  {% block header_navigation %}
    {% include 'partials/navigation.html.twig' %}
  {% endblock %}
  {% block body %}
    {% block content %}{% endblock %}
  {% endblock %}

  {% block footer %}
    {% include 'partials/footer.html.twig' %}
  {% endblock %}

  {% block javascripts_bottom %}
  {{ assets.js('bottom')|raw }}  
  {% endblock %}
</body>
</html>
", "partials/base.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\partials\\base.html.twig");
    }
}

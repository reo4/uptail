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
class __TwigTemplate_d954dc75dede954596840a8dbe56325db95a1973cdfe107053cfc0bc2750a0ef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body_classes' => [$this, 'block_body_classes'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'hero' => [$this, 'block_hero'],
            'body' => [$this, 'block_body'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->bodyClassFunc([0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("production-mode")) ? (".min.css") : (".css"));
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">

\t<head>
\t\t";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 24
        echo "
\t\t";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
\t\t";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "
\t\t";
        // line 45
        $this->displayBlock('assets', $context, $blocks);
        // line 49
        echo "\t</head>

\t<body id=\"top\" class=\"";
        // line 51
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
\t\t<div id=\"page-wrapper\">
\t\t\t";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 86
        echo "
\t\t\t";
        // line 87
        $this->displayBlock('hero', $context, $blocks);
        // line 88
        echo "
\t\t\t<section id=\"start\">
\t\t\t\t";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "\t\t\t</section>

\t\t</div>

\t\t";
        // line 104
        $this->displayBlock('footer', $context, $blocks);
        // line 107
        echo "
\t\t<div class=\"mobile-container\">
\t\t\t<div class=\"overlay\" id=\"overlay\">
\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t";
        // line 111
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 111)->display(twig_array_merge($context, ["mobile" => true]));
        // line 112
        echo "\t\t\t\t</div>
\t\t\t\t<nav class=\"overlay-menu\">
\t\t\t\t\t";
        // line 114
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 114)->display(twig_array_merge($context, ["tree" => true]));
        // line 115
        echo "\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 119
        $this->displayBlock('bottom', $context, $blocks);
        // line 122
        echo "
\t</body>

</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'head');
    }

    // line 8
    public function block_head_deferred($context, array $blocks = array())
    {
        // line 9
        echo "\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<title>
\t\t\t\t";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            // line 12
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo "
\t\t\t\t\t|
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t\t";
        // line 19
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 19)->display($context);
        // line 20
        echo "
\t\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\"/>
\t\t\t<link rel=\"canonical\" href=\"";
        // line 22
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\"/>
\t\t";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 26
        echo "\t\t\t<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
\t\t\t";
        // line 27
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/spectre.css"], "method");
        // line 28
        echo "\t\t\t";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.exp")) {
            // line 29
            echo "\t\t\t\t";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/spectre-exp.css"], "method");
            // line 30
            echo "\t\t\t";
        }
        // line 31
        echo "\t\t\t";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("spectre.icons")) {
            // line 32
            echo "\t\t\t\t";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/spectre-icons.css"], "method");
            // line 33
            echo "\t\t\t";
        }
        // line 34
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/theme.css"], "method");
        // line 35
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 36
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
        // line 37
        echo "\t\t";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        // line 40
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 41
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 42
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 43
        echo "\t\t";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 45
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
\t\t\t";
        // line 47
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
\t\t";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 51
    public function block_body_classes($context, array $blocks = [])
    {
        echo ($context["body_classes"] ?? null);
    }

    public function block_header($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'header');
    }

    // line 53
    public function block_header_deferred($context, array $blocks = array())
    {
        // line 54
        echo "\t\t\t\t<section id=\"header\" class=\"section scrolled\">
\t\t\t\t\t<section class=\"container-fluid ";
        // line 55
        echo ($context["grid_size"] ?? null);
        echo "\">
\t\t\t\t\t\t<nav class=\"navbar\">
\t\t\t\t\t\t\t<section class=\"navbar-section logo\">
\t\t\t\t\t\t\t\t";
        // line 58
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"navbar-section desktop-menu\">

\t\t\t\t\t\t\t\t<nav class=\"dropmenu animated\">
\t\t\t\t\t\t\t\t\t";
        // line 63
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 66
        echo "\t\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t\t";
        // line 68
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t<span class=\"login-status-wrapper\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t";
            // line 71
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 71)->display($context);
            echo "</span>
\t\t\t\t\t\t\t\t";
        }
        // line 73
        echo "
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<div class=\"mobile-menu\">
\t\t\t\t\t<div class=\"button_container\" id=\"toggle\">
\t\t\t\t\t\t<span class=\"top\"></span>
\t\t\t\t\t\t<span class=\"middle\"></span>
\t\t\t\t\t\t<span class=\"bottom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 63
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 64
        echo "\t\t\t\t\t\t\t\t\t\t";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 64)->display($context);
        // line 65
        echo "\t\t\t\t\t\t\t\t\t";
    }

    // line 87
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 90
    public function block_body($context, array $blocks = [])
    {
        // line 91
        echo "\t\t\t\t\t<section id=\"body-wrapper\" class=\"section\">
\t\t\t\t\t\t<section class=\"container ";
        // line 92
        echo ($context["grid_size"] ?? null);
        echo "\">
\t\t\t\t\t\t\t";
        // line 93
        $this->displayBlock('messages', $context, $blocks);
        // line 96
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('content', $context, $blocks);
        // line 97
        echo "\t\t\t\t\t\t</section>
\t\t\t\t\t</section>
\t\t\t\t";
    }

    // line 93
    public function block_messages($context, array $blocks = [])
    {
        // line 94
        echo "\t\t\t\t\t\t\t\t";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 94);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 95
        echo "\t\t\t\t\t\t\t";
    }

    // line 96
    public function block_content($context, array $blocks = [])
    {
    }

    // line 104
    public function block_footer($context, array $blocks = [])
    {
        // line 105
        echo "\t\t\t";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 105)->display($context);
        // line 106
        echo "\t\t";
    }

    // line 119
    public function block_bottom($context, array $blocks = [])
    {
        // line 120
        echo "\t\t\t";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
\t\t";
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
        return array (  393 => 120,  390 => 119,  386 => 106,  383 => 105,  380 => 104,  375 => 96,  371 => 95,  360 => 94,  357 => 93,  351 => 97,  348 => 96,  346 => 93,  342 => 92,  339 => 91,  336 => 90,  331 => 87,  327 => 65,  324 => 64,  321 => 63,  304 => 73,  299 => 71,  295 => 69,  293 => 68,  289 => 66,  287 => 63,  281 => 59,  279 => 58,  273 => 55,  270 => 54,  267 => 53,  256 => 51,  249 => 47,  244 => 46,  241 => 45,  232 => 43,  229 => 42,  226 => 41,  223 => 40,  220 => 39,  216 => 37,  213 => 36,  210 => 35,  207 => 34,  204 => 33,  201 => 32,  198 => 31,  195 => 30,  192 => 29,  189 => 28,  187 => 27,  184 => 26,  181 => 25,  174 => 22,  170 => 21,  167 => 20,  165 => 19,  157 => 15,  150 => 12,  148 => 11,  144 => 9,  141 => 8,  127 => 122,  125 => 119,  119 => 115,  117 => 114,  113 => 112,  111 => 111,  105 => 107,  103 => 104,  97 => 100,  95 => 90,  91 => 88,  89 => 87,  86 => 86,  84 => 53,  79 => 51,  75 => 49,  73 => 45,  70 => 44,  68 => 39,  65 => 38,  63 => 25,  60 => 24,  58 => 8,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">

\t<head>
\t\t{% block head deferred %}
\t\t\t<meta charset=\"utf-8\"/>
\t\t\t<title>
\t\t\t\t{% if page.title %}
\t\t\t\t\t{{ page.title|e('html') }}
\t\t\t\t\t|
\t\t\t\t{% endif %}
\t\t\t\t{{ site.title|e('html') }}</title>

\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t\t{% include 'partials/metadata.html.twig' %}

\t\t\t<link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\"/>
\t\t\t<link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>
\t\t{% endblock head %}

\t\t{% block stylesheets %}
\t\t\t<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
\t\t\t{% do assets.addCss('theme://css-compiled/spectre.css') %}
\t\t\t{% if theme_var('spectre.exp') %}
\t\t\t\t{% do assets.addCss('theme://css-compiled/spectre-exp.css')  %}
\t\t\t{% endif %}
\t\t\t{% if theme_var('spectre.icons') %}
\t\t\t\t{%  do assets.addCss('theme://css-compiled/spectre-icons.css') %}
\t\t\t{% endif %}
\t\t\t{% do assets.addCss('theme://css-compiled/theme.css') %}
\t\t\t{% do assets.addCss('theme://css/custom.css') %}
\t\t\t{% do assets.addCss('theme://css/line-awesome.min.css') %}
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{% do assets.addJs('jquery', 101) %}
\t\t\t{% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
\t\t\t{% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
\t\t{% endblock %}

\t\t{% block assets deferred %}
\t\t\t{{ assets.css()|raw }}
\t\t\t{{ assets.js()|raw }}
\t\t{% endblock %}
\t</head>

\t<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
\t\t<div id=\"page-wrapper\">
\t\t\t{% block header deferred %}
\t\t\t\t<section id=\"header\" class=\"section scrolled\">
\t\t\t\t\t<section class=\"container-fluid {{ grid_size }}\">
\t\t\t\t\t\t<nav class=\"navbar\">
\t\t\t\t\t\t\t<section class=\"navbar-section logo\">
\t\t\t\t\t\t\t\t{% include 'partials/logo.html.twig' %}
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t<section class=\"navbar-section desktop-menu\">

\t\t\t\t\t\t\t\t<nav class=\"dropmenu animated\">
\t\t\t\t\t\t\t\t\t{% block header_navigation %}
\t\t\t\t\t\t\t\t\t\t{% include 'partials/navigation.html.twig' %}
\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t\t{% if config.plugins.login.enabled and grav.user.username %}
\t\t\t\t\t\t\t\t\t<span class=\"login-status-wrapper\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t{% include 'partials/login-status.html.twig' %}</span>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<div class=\"mobile-menu\">
\t\t\t\t\t<div class=\"button_container\" id=\"toggle\">
\t\t\t\t\t\t<span class=\"top\"></span>
\t\t\t\t\t\t<span class=\"middle\"></span>
\t\t\t\t\t\t<span class=\"bottom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endblock %}

\t\t\t{% block hero %}{% endblock %}

\t\t\t<section id=\"start\">
\t\t\t\t{% block body %}
\t\t\t\t\t<section id=\"body-wrapper\" class=\"section\">
\t\t\t\t\t\t<section class=\"container {{ grid_size }}\">
\t\t\t\t\t\t\t{% block messages %}
\t\t\t\t\t\t\t\t{% include 'partials/messages.html.twig' ignore missing %}
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t{% block content %}{% endblock %}
\t\t\t\t\t\t</section>
\t\t\t\t\t</section>
\t\t\t\t{% endblock %}
\t\t\t</section>

\t\t</div>

\t\t{% block footer %}
\t\t\t{% include 'partials/footer.html.twig' %}
\t\t{% endblock %}

\t\t<div class=\"mobile-container\">
\t\t\t<div class=\"overlay\" id=\"overlay\">
\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t{% include 'partials/logo.html.twig' with {mobile: true} %}
\t\t\t\t</div>
\t\t\t\t<nav class=\"overlay-menu\">
\t\t\t\t\t{% include 'partials/navigation.html.twig' with {tree: true} %}
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>

\t\t{% block bottom %}
\t\t\t{{ assets.js('bottom')|raw }}
\t\t{% endblock %}

\t</body>

</html>
", "partials/base.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\quark\\templates\\partials\\base.html.twig");
    }
}

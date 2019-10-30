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
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <div class=\"brand-box\">
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "brand", []));
        foreach ($context['_seq'] as $context["_key"] => $context["word"]) {
            // line 15
            echo "                        <span class=\"";
            echo ("brand-" . strtolower($context["word"]));
            echo "\">";
            echo $context["word"];
            echo "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['word'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </a>
                <p><strong>Smart solutions for retail</strong></p>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"active\">
                    <a href=\"#page-top\">Home</a>
                </li>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "links", []));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 29
            echo "                    ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["link"], "url", []), "http")) {
                // line 30
                echo "                        ";
                $context["domain"] = "";
                // line 31
                echo "                            ";
            } elseif ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["link"], "url", []), "#")) {
                // line 32
                echo "                            ";
                $context["domain"] = "";
                // line 33
                echo "                                ";
            } else {
                // line 34
                echo "                                ";
                $context["domain"] = ($context["base_url_absolute"] ?? null);
                // line 35
                echo "                                ";
            }
            // line 36
            echo "                                <li><a class=\"page-scroll\" href=\"";
            echo ($context["domain"] ?? null);
            echo $this->getAttribute($context["link"], "url", []);
            echo "\" ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["link"], "url", []), "http")) {
                echo "target=\"_blank\"";
            }
            echo ">";
            echo $this->getAttribute($context["link"], "title", []);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>";
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
        return array (  114 => 38,  98 => 36,  95 => 35,  92 => 34,  89 => 33,  86 => 32,  83 => 31,  80 => 30,  77 => 29,  73 => 28,  60 => 17,  49 => 15,  45 => 14,  30 => 1,);
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
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <div class=\"brand-box\">
                <a class=\"navbar-brand page-scroll\" href=\"#page-top\">
                    {% for word in page.header.brand %}
                        <span class=\"{{'brand-' ~ strtolower(word) }}\">{{word}}</span>
                    {% endfor %}
                </a>
                <p><strong>Smart solutions for retail</strong></p>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"active\">
                    <a href=\"#page-top\">Home</a>
                </li>
                {% for link in site.links %}
                    {% if link.url | contains('http') %}
                        {% set domain = '' %}
                            {% elseif link.url | contains('#') %}
                            {% set domain = '' %}
                                {% else %}
                                {% set domain = base_url_absolute %}
                                {% endif %}
                                <li><a class=\"page-scroll\" href=\"{{ domain }}{{ link.url }}\" {% if link.url | contains('http') %}target=\"_blank\"{% endif %}>{{ link.title }}</a></li>
                            {% endfor %}
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>", "partials/navigation.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\partials\\navigation.html.twig");
    }
}

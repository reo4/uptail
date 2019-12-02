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

/* partials/blog-item.html.twig */
class __TwigTemplate_37b9d559031a52bb2528a187bf168f17c7eecf5402aae25c9b08bd355935e6f3 extends \Twig\Template
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
        echo "<div class=\"content-item h-entry\">

\t";
        // line 3
        if ( !($context["hero_image_name"] ?? null)) {
            // line 4
            echo "\t\t<div class=\"content-title text-center\">
\t\t\t";
            // line 5
            $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-item.html.twig", 5)->display(twig_array_merge($context, ["title_level" => "h2"]));
            // line 6
            echo "\t\t\t";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", [])) {
                // line 7
                echo "\t\t\t\t<h3>";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []);
                echo "</h3>
\t\t\t";
            }
            // line 9
            echo "\t\t\t";
            $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-item.html.twig", 9)->display($context);
            // line 10
            echo "\t\t\t";
            $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-item.html.twig", 10)->display($context);
            // line 11
            echo "\t\t</div>
\t";
        }
        // line 13
        echo "\t<div class=\"e-content\">
\t\t";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t</div>

\t";
        // line 17
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "continue_link", []) === true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "comments", []), "enabled", []))) {
            // line 18
            echo "\t\t";
            $this->loadTemplate("partials/comments.html.twig", "partials/blog-item.html.twig", 18)->display($context);
            // line 19
            echo "\t";
        }
        // line 20
        echo "</div>

<p class=\"prev-next text-center\">
\t";
        // line 23
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
            // line 24
            echo "\t\t<a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
            echo "\">
\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t";
            // line 26
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.PREV_POST");
            echo "</a>
\t";
        }
        // line 28
        echo "
\t";
        // line 29
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
            // line 30
            echo "\t\t<a class=\"btn\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_QUARK.BLOG.ITEM.NEXT_POST");
            echo "
\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t</a>
\t";
        }
        // line 34
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  100 => 30,  98 => 29,  95 => 28,  90 => 26,  84 => 24,  82 => 23,  77 => 20,  74 => 19,  71 => 18,  69 => 17,  63 => 14,  60 => 13,  56 => 11,  53 => 10,  50 => 9,  44 => 7,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-item h-entry\">

\t{% if not hero_image_name %}
\t\t<div class=\"content-title text-center\">
\t\t\t{% include 'partials/blog/title.html.twig' with {title_level: 'h2'} %}
\t\t\t{% if page.header.subtitle %}
\t\t\t\t<h3>{{ page.header.subtitle }}</h3>
\t\t\t{% endif %}
\t\t\t{% include 'partials/blog/date.html.twig' %}
\t\t\t{% include 'partials/blog/taxonomy.html.twig' %}
\t\t</div>
\t{% endif %}
\t<div class=\"e-content\">
\t\t{{ page.content|raw }}
\t</div>

\t{% if page.header.continue_link is same as(true) and config.plugins.comments.enabled %}
\t\t{% include 'partials/comments.html.twig' %}
\t{% endif %}
</div>

<p class=\"prev-next text-center\">
\t{% if not page.isLast %}
\t\t<a class=\"btn\" href=\"{{ page.prevSibling.url }}\">
\t\t\t<i class=\"fa fa-angle-left\"></i>
\t\t\t{{ 'THEME_QUARK.BLOG.ITEM.PREV_POST'|t }}</a>
\t{% endif %}

\t{% if not page.isFirst %}
\t\t<a class=\"btn\" href=\"{{ page.nextSibling.url }}\">{{ 'THEME_QUARK.BLOG.ITEM.NEXT_POST'|t }}
\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t</a>
\t{% endif %}
</p>
", "partials/blog-item.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\quark\\templates\\partials\\blog-item.html.twig");
    }
}

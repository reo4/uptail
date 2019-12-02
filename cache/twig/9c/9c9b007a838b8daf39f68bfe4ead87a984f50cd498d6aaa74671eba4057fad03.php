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

/* partials/blog-list-item.html.twig */
class __TwigTemplate_dbd9f19f5342f12524fe7a72c250ff5565e63ad94b07fce2ae940b0e18ab3cc3 extends \Twig\Template
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
        echo "<div class=\"card\">
\t";
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "\t";
        if (($context["image"] ?? null)) {
            // line 4
            echo "\t\t<div class=\"card-image\">
\t\t\t<a href=\"";
            // line 5
            echo $this->getAttribute(($context["page"] ?? null), "url", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropZoom", [0 => 800, 1 => 400], "method"), "html", []);
            echo "</a>
\t\t</div>
\t";
        }
        // line 8
        echo "\t<div class=\"card-header\">
\t\t<div class=\"card-subtitle text-gray\">
\t\t\t";
        // line 10
        $this->loadTemplate("partials/blog/date.html.twig", "partials/blog-list-item.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t\t<div class=\"card-title\">
\t\t\t";
        // line 13
        $this->loadTemplate("partials/blog/title.html.twig", "partials/blog-list-item.html.twig", 13)->display(twig_array_merge($context, ["title_level" => "h5"]));
        // line 14
        echo "\t\t</div>
\t</div>
\t<div class=\"card-body\">
\t\t";
        // line 17
        if (($this->getAttribute(($context["page"] ?? null), "summary", []) != $this->getAttribute(($context["page"] ?? null), "content", []))) {
            // line 18
            echo "\t\t\t";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
\t\t";
        } else {
            // line 20
            echo "\t\t\t";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
\t\t";
        }
        // line 22
        echo "\t</div>
\t<div class=\"card-footer\">
\t\t";
        // line 24
        $this->loadTemplate("partials/blog/taxonomy.html.twig", "partials/blog-list-item.html.twig", 24)->display($context);
        // line 25
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  84 => 24,  80 => 22,  74 => 20,  68 => 18,  66 => 17,  61 => 14,  59 => 13,  55 => 11,  53 => 10,  49 => 8,  41 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
\t{% set image = page.media.images|first %}
\t{% if image %}
\t\t<div class=\"card-image\">
\t\t\t<a href=\"{{ page.url }}\">{{ image.cropZoom(800,400).html|raw }}</a>
\t\t</div>
\t{% endif %}
\t<div class=\"card-header\">
\t\t<div class=\"card-subtitle text-gray\">
\t\t\t{% include 'partials/blog/date.html.twig' %}
\t\t</div>
\t\t<div class=\"card-title\">
\t\t\t{% include 'partials/blog/title.html.twig' with {title_level: 'h5'} %}
\t\t</div>
\t</div>
\t<div class=\"card-body\">
\t\t{% if page.summary != page.content %}
\t\t\t{{ page.summary|raw }}
\t\t{% else %}
\t\t\t{{ page.content|raw }}
\t\t{% endif %}
\t</div>
\t<div class=\"card-footer\">
\t\t{% include 'partials/blog/taxonomy.html.twig' %}
\t</div>
</div>
", "partials/blog-list-item.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\quark\\templates\\partials\\blog-list-item.html.twig");
    }
}

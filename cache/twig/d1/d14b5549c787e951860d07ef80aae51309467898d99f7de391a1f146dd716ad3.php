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

/* modular/what_is_new.html.twig */
class __TwigTemplate_fac07aa4ad2cd6f89a10d3522199792c8db68d3e674d4cae4e91ae2d6d49e9b1 extends \Twig\Template
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
        echo "<section id=\"";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "menu", []);
        echo "\" class=\"bg-light-gray\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t";
        // line 5
        echo ($context["content"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolios", []));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 10
            echo "\t\t\t\t<div class=\"col-md-4 col-sm-6 portfolio-item\">
\t\t\t\t\t<a href=\"#portfolioModal";
            // line 11
            echo $this->getAttribute($context["portfolio"], "modalid", []);
            echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
\t\t\t\t\t\t<div class=\"portfolio-hover\">
\t\t\t\t\t\t\t<div class=\"portfolio-hover-content\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus fa-3x\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"";
            // line 17
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "thumbnail", []), [], "array"), "url", []);
            echo "\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"portfolio-caption\">
\t\t\t\t\t\t<h4>";
            // line 20
            echo $this->getAttribute($context["portfolio"], "title", []);
            echo "</h4>
\t\t\t\t\t\t<p class=\"text-muted\">";
            // line 21
            echo $this->getAttribute($context["portfolio"], "subtitle", []);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t</div>
\t</div>
</section>


";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolios", []));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 32
            echo "\t<div class=\"portfolio-modal modal fade\" id=\"portfolioModal";
            echo $this->getAttribute($context["portfolio"], "modalid", []);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"close-modal\" data-dismiss=\"modal\">
\t\t\t\t<div class=\"lr\">
\t\t\t\t\t<div class=\"rl\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<h2>";
            // line 43
            echo $this->getAttribute($context["portfolio"], "title", []);
            echo "</h2>
\t\t\t\t\t\t\t<hr class=\"star-primary\">
\t\t\t\t\t\t\t<img src=\"";
            // line 45
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "img", []), [], "array"), "url", []);
            echo "\" class=\"img-responsive img-centered\" alt=\"";
            echo $this->getAttribute($context["portfolio"], "alt", []);
            echo "\">
\t\t\t\t\t\t\t<p>";
            // line 46
            echo $this->getAttribute($context["portfolio"], "description", []);
            echo "</p>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Contact for details</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/what_is_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 46,  113 => 45,  108 => 43,  93 => 32,  89 => 31,  82 => 26,  71 => 21,  67 => 20,  61 => 17,  52 => 11,  49 => 10,  45 => 9,  38 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{page.header.menu}}\" class=\"bg-light-gray\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t{{ content }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t{% for portfolio in page.header.portfolios %}
\t\t\t\t<div class=\"col-md-4 col-sm-6 portfolio-item\">
\t\t\t\t\t<a href=\"#portfolioModal{{ portfolio.modalid }}\" class=\"portfolio-link\" data-toggle=\"modal\">
\t\t\t\t\t\t<div class=\"portfolio-hover\">
\t\t\t\t\t\t\t<div class=\"portfolio-hover-content\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus fa-3x\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"{{ page.media[portfolio.thumbnail].url }}\" class=\"img-responsive\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"portfolio-caption\">
\t\t\t\t\t\t<h4>{{ portfolio.title }}</h4>
\t\t\t\t\t\t<p class=\"text-muted\">{{ portfolio.subtitle }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t{% endfor %}
\t\t</div>
\t</div>
</section>


{% for portfolio in page.header.portfolios %}
\t<div class=\"portfolio-modal modal fade\" id=\"portfolioModal{{ portfolio.modalid }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"close-modal\" data-dismiss=\"modal\">
\t\t\t\t<div class=\"lr\">
\t\t\t\t\t<div class=\"rl\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8 col-lg-offset-2\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<h2>{{ portfolio.title }}</h2>
\t\t\t\t\t\t\t<hr class=\"star-primary\">
\t\t\t\t\t\t\t<img src=\"{{ page.media[portfolio.img].url }}\" class=\"img-responsive img-centered\" alt=\"{{ portfolio.alt }}\">
\t\t\t\t\t\t\t<p>{{ portfolio.description }}</p>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Contact for details</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endfor %}
", "modular/what_is_new.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\modular\\what_is_new.html.twig");
    }
}

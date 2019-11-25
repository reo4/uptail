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

/* modular/services.html.twig */
class __TwigTemplate_093f408ac5471e943fad4e302cda2d41381946ebf4076d0059223ccf6114f30d extends \Twig\Template
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
        echo "\" class=\"bg-white\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t";
        // line 5
        echo ($context["content"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row text-center\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 10
            echo "\t\t\t\t<div class=\"col-md-4 mb-5\">
\t\t\t\t\t";
            // line 11
            if ($this->getAttribute($context["service"], "icon", [])) {
                // line 12
                echo "\t\t\t\t\t\t<span class=\"fa-stack fa-4x\">
\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t<i class=\"fa fa-";
                // line 14
                echo $this->getAttribute($context["service"], "icon", []);
                echo " fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["service"], "header", [])) {
                // line 18
                echo "\t\t\t\t\t\t<h4 class=\"service-heading\">";
                echo $this->getAttribute($context["service"], "header", []);
                echo "</h4>
\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["service"], "text", [])) {
                // line 21
                echo "\t\t\t\t\t\t<p class=\"text-muted\">";
                echo $this->getAttribute($context["service"], "text", []);
                echo "</p>
\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  82 => 23,  76 => 21,  73 => 20,  67 => 18,  64 => 17,  58 => 14,  54 => 12,  52 => 11,  49 => 10,  45 => 9,  38 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"{{page.header.menu}}\" class=\"bg-white\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t{{ content }}
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row text-center\">
\t\t\t{% for service in page.header.services %}
\t\t\t\t<div class=\"col-md-4 mb-5\">
\t\t\t\t\t{% if service.icon %}
\t\t\t\t\t\t<span class=\"fa-stack fa-4x\">
\t\t\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t\t<i class=\"fa fa-{{ service.icon }} fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if service.header %}
\t\t\t\t\t\t<h4 class=\"service-heading\">{{ service.header }}</h4>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if service.text %}
\t\t\t\t\t\t<p class=\"text-muted\">{{ service.text }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</section>
", "modular/services.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\modular\\services.html.twig");
    }
}

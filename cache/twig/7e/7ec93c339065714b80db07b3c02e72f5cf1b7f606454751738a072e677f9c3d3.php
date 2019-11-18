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

/* partials/footer.html.twig */
class __TwigTemplate_56aaa8488846c72e6f82818bafb831744a27c74608ae4af386740cc5249a82a7 extends \Twig\Template
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
        echo "<footer>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<span class=\"copyright\" style=\"color: black;\">Copyright &copy;
\t\t\t\t\t";
        // line 6
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "
\t\t\t\t\t2017</span>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<ul class=\"list-inline social-buttons\">
\t\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
            // line 12
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 13
            echo $this->getAttribute($context["network"], "url", []);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-";
            // line 14
            echo $this->getAttribute($context["network"], "title", []);
            echo "\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<ul class=\"list-inline quicklinks\">
\t\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "quicklinks", []));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 23
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->absoluteUrlFilter($this->getAttribute($context["link"], "url", []));
            echo "\">";
            echo $this->getAttribute($context["link"], "title", []);
            echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  79 => 24,  76 => 23,  72 => 22,  66 => 18,  56 => 14,  52 => 13,  49 => 12,  45 => 11,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<span class=\"copyright\" style=\"color: black;\">Copyright &copy;
\t\t\t\t\t{{ site.title }}
\t\t\t\t\t2017</span>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<ul class=\"list-inline social-buttons\">
\t\t\t\t\t{% for network in site.social %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ network.url }}\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-{{ network.title }}\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<ul class=\"list-inline quicklinks\">
\t\t\t\t\t{% for link in site.quicklinks %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ link.url | absolute_url }}\">{{ link.title }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
", "partials/footer.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\partials\\footer.html.twig");
    }
}

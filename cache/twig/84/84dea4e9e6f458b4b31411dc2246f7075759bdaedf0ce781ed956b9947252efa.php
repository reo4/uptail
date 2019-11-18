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
class __TwigTemplate_b16c601d40b7dbde2d07fb403434e0bf8b818d46ef34dc7df4cedf7efc10d8a4 extends \Twig\Template
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
        // line 6
        echo "
<footer>
\t<div class=\"footer-wrapper\">
\t\t<span class=\"copyright\" style=\"color: black;\">Copyright &copy;
\t\t\t";
        // line 10
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "
\t\t\t2017</span>
\t\t<ul class=\"list-inline social-buttons\">
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
            // line 14
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 15
            echo $this->getAttribute($context["network"], "url", []);
            echo "\">
\t\t\t\t\t\t<i class=\"fa fa-";
            // line 16
            echo $this->getAttribute($context["network"], "title", []);
            echo "\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</ul>
\t\t<ul
\t\t\tclass=\"list-inline quicklinks\">
\t\t\t";
        // line 24
        echo "\t\t\t<li>
\t\t\t\t<a href=\"/uptail\">Home</a>
\t\t\t\t<a href=\"/uptail/#solutions\">Solutions</a>
\t\t\t\t<a href=\"/uptail/#services\">Services</a>
\t\t\t\t<a href=\"/uptail/#contact\">Contact Us</a>
\t\t\t</li>
\t\t\t";
        // line 31
        echo "\t\t</ul>
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
        return array (  76 => 31,  68 => 24,  63 => 20,  53 => 16,  49 => 15,  46 => 14,  42 => 13,  36 => 10,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# <section id=\"footer\" class=\"section bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart-o pulse \"></i> by <a href=\"https://trilby.media\">Trilby Media</a>.</p>
    </section>
</section> #}

<footer>
\t<div class=\"footer-wrapper\">
\t\t<span class=\"copyright\" style=\"color: black;\">Copyright &copy;
\t\t\t{{ site.title }}
\t\t\t2017</span>
\t\t<ul class=\"list-inline social-buttons\">
\t\t\t{% for network in site.social %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ network.url }}\">
\t\t\t\t\t\t<i class=\"fa fa-{{ network.title }}\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>
\t\t<ul
\t\t\tclass=\"list-inline quicklinks\">
\t\t\t{# {% for link in site.quicklinks %} #}
\t\t\t<li>
\t\t\t\t<a href=\"/uptail\">Home</a>
\t\t\t\t<a href=\"/uptail/#solutions\">Solutions</a>
\t\t\t\t<a href=\"/uptail/#services\">Services</a>
\t\t\t\t<a href=\"/uptail/#contact\">Contact Us</a>
\t\t\t</li>
\t\t\t{# {% endfor %} #}
\t\t</ul>
\t</div>
</footer>
", "partials/footer.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\quark\\templates\\partials\\footer.html.twig");
    }
}

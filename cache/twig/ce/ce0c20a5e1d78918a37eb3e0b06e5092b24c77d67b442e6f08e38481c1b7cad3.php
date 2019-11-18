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
class __TwigTemplate_bc1b348f1a3a49eb9af752db1c94ef36e7aa33b1888eabf007185023dad11e37 extends \Twig\Template
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
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/navigation.html.twig", 1)->unwrap();
        // line 2
        echo "
<ul ";
        // line 3
        echo ((($context["tree"] ?? null)) ? ("class=\"tree\"") : (""));
        echo ">
\t<li>
\t\t<a href=\"/uptail/#\">Home</a>
\t</li>
\t<li>
\t\t<a href=\"/uptail/#solutions\">Solutions</a>
\t</li>
\t<li>
\t\t<a href=\"/uptail/#services\">Services</a>
\t</li>
\t<li>
\t\t<a href=\"/uptail/#contact\">Contact Us</a>
\t</li>
\t<li>
\t\t<a href=\"/uptail/blog\" class=\"active\">blog</a>
\t</li>
</ul>
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
        return array (  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
\t<li>
\t\t<a href=\"/uptail/#\">Home</a>
\t</li>
\t<li>
\t\t<a href=\"/uptail/#solutions\">Solutions</a>
\t</li>
\t<li>
\t\t<a href=\"/uptail/#services\">Services</a>
\t</li>
\t<li>
\t\t<a href=\"/uptail/#contact\">Contact Us</a>
\t</li>
\t<li>
\t\t<a href=\"/uptail/blog\" class=\"active\">blog</a>
\t</li>
</ul>
", "partials/navigation.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\quark\\templates\\partials\\navigation.html.twig");
    }
}

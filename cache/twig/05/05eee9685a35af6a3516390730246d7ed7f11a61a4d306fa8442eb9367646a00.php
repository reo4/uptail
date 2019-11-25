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

/* modular/header.html.twig */
class __TwigTemplate_22b8902a569320c49abd4b431d4412e73c8762748f5a1b912e2c1fa80d92f91e extends \Twig\Template
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
        echo "<header id=\"header\">
\t<div class=\"container\">
\t\t<video autoplay muted loop id=\"myVideo\">
\t\t\t<source src=";
        // line 4
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://videos/cover.mp4");
        echo " type=\"video/mp4\">
\t\t\tYour browser does not support HTML5 video.
\t\t</video>
\t\t<div class=\"intro-text\">
\t\t\t<h2 class=\"head\">";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "head", []);
        echo "</h2>
\t\t\t<div class=\"bottom-section\">
\t\t\t\t<h4>";
        // line 10
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []);
        echo "</h4>
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 12
            echo "\t\t\t\t\t<a class=\"btn btn-xl\" href=\"";
            echo $this->getAttribute($context["button"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</header>
";
    }

    public function getTemplateName()
    {
        return "modular/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  55 => 12,  51 => 11,  47 => 10,  42 => 8,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\">
\t<div class=\"container\">
\t\t<video autoplay muted loop id=\"myVideo\">
\t\t\t<source src={{url('theme://videos/cover.mp4')}} type=\"video/mp4\">
\t\t\tYour browser does not support HTML5 video.
\t\t</video>
\t\t<div class=\"intro-text\">
\t\t\t<h2 class=\"head\">{{page.header.head}}</h2>
\t\t\t<div class=\"bottom-section\">
\t\t\t\t<h4>{{page.header.description}}</h4>
\t\t\t\t{% for button in page.header.buttons %}
\t\t\t\t\t<a class=\"btn btn-xl\" href=\"{{ button.url }}\">{{ button.text }}</a>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
</header>
", "modular/header.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\modular\\header.html.twig");
    }
}

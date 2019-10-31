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
        echo "<header class=\"video-wrapper\">
    <div class=\"container\">
        <div class=\"intro-text\">
            <h2 class=\"head\">";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "head", []);
        echo "</h2>
            <div class=\"bottom-section\">
\t            <h4>";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []);
        echo "</h4>
\t            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 8
            echo "\t                <a class=\"btn btn-xl\" href=\"";
            echo $this->getAttribute($context["button"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a>
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </div>
        </div>
    </div>
</header>";
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
        return array (  59 => 10,  48 => 8,  44 => 7,  40 => 6,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"video-wrapper\">
    <div class=\"container\">
        <div class=\"intro-text\">
            <h2 class=\"head\">{{page.header.head}}</h2>
            <div class=\"bottom-section\">
\t            <h4>{{page.header.description}}</h4>
\t            {% for button in page.header.buttons %}
\t                <a class=\"btn btn-xl\" href=\"{{ button.url }}\">{{ button.text }}</a>
\t            {% endfor %}
            </div>
        </div>
    </div>
</header>", "modular/header.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\modular\\header.html.twig");
    }
}

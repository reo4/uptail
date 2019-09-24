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

/* modular/clients.html.twig */
class __TwigTemplate_04b0d8c8fcbf6bf00c526f434c8c6bc5118a0b8da7c04dc90b7b033353239425 extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col-lg-12 text-center\">
        ";
        // line 3
        echo ($context["content"] ?? null);
        echo "
    </div>
</div>
<aside class=\"clients\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "clients", []));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 10
            echo "                <div class=\"col-md-3 col-sm-6\">
                    <a href=\"";
            // line 11
            echo $this->getAttribute($context["client"], "url", []);
            echo "\">
                        <img src=\"";
            // line 12
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["client"], "logo", []), [], "array"), "url", []);
            echo "\" class=\"img-responsive img-centered\" alt=\"\">
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo " 
        </div>
    </div>
</aside>";
    }

    public function getTemplateName()
    {
        return "modular/clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  54 => 12,  50 => 11,  47 => 10,  43 => 9,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-12 text-center\">
        {{ content }}
    </div>
</div>
<aside class=\"clients\">
    <div class=\"container\">
        <div class=\"row\">
            {% for client in page.header.clients %}
                <div class=\"col-md-3 col-sm-6\">
                    <a href=\"{{ client.url }}\">
                        <img src=\"{{ page.media[client.logo].url }}\" class=\"img-responsive img-centered\" alt=\"\">
                    </a>
                </div>
            {% endfor %} 
        </div>
    </div>
</aside>", "modular/clients.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\modular\\clients.html.twig");
    }
}

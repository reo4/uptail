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
class __TwigTemplate_d5c031afb978cac4c5229df9f469dcb658b8ad869b7264582e99966709c3f492 extends \Twig\Template
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
        echo "\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"row text-center\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 10
            echo "            <div class=\"col-md-4 mb-5\">
                ";
            // line 11
            if ($this->getAttribute($context["service"], "icon", [])) {
                // line 12
                echo "                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-";
                // line 14
                echo $this->getAttribute($context["service"], "icon", []);
                echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                ";
            }
            // line 17
            echo "                ";
            if ($this->getAttribute($context["service"], "header", [])) {
                // line 18
                echo "                    <h4 class=\"service-heading\">";
                echo $this->getAttribute($context["service"], "header", []);
                echo "</h4>
                ";
            }
            // line 20
            echo "                ";
            if ($this->getAttribute($context["service"], "text", [])) {
                // line 21
                echo "                    <p class=\"text-muted\">";
                echo $this->getAttribute($context["service"], "text", []);
                echo "</p>
                ";
            }
            // line 23
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</div>
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
        return new Source("<section id=\"{{page.header.menu}}\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content }}
        </div>
    </div>
    <div class=\"row text-center\">
        {% for service in page.header.services %}
            <div class=\"col-md-4 mb-5\">
                {% if service.icon %}
                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-{{ service.icon }} fa-stack-1x fa-inverse\"></i>
                    </span>
                {% endif %}
                {% if service.header %}
                    <h4 class=\"service-heading\">{{ service.header }}</h4>
                {% endif %}
                {% if service.text %}
                    <p class=\"text-muted\">{{ service.text }}</p>
                {% endif %}
            </div>
        {% endfor %}
    </div>
</div>
</section>
", "modular/services.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\modular\\services.html.twig");
    }
}

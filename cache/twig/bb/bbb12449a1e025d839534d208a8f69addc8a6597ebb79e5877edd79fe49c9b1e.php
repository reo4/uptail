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

/* modular/team.html.twig */
class __TwigTemplate_6df7f5fb25936ae96bdb2aaaa7e2c1d0a574b2daa228eb71b3e607adad46a087 extends \Twig\Template
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
        echo "<section id=\"team\" class=\"bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "people", []));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 10
            echo "            <div class=\"col-sm-4\">
                <div class=\"team-member\">
                    <img src=\"";
            // line 12
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["member"], "pic", []), [], "array"), "url", []);
            echo "\" class=\"img-responsive img-circle\" alt=\"\">
                    <h4>";
            // line 13
            echo $this->getAttribute($context["member"], "name", []);
            echo "</h4>
                    <p class=\"text-muted\">";
            // line 14
            echo $this->getAttribute($context["member"], "position", []);
            echo "</p>
                    <ul class=\"list-inline social-buttons\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["member"], "social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
                // line 17
                echo "                            <li><a href=\"";
                echo $this->getAttribute($context["network"], "url", []);
                echo "\"><i class=\"fa fa-";
                echo $this->getAttribute($context["network"], "title", []);
                echo "\"></i></a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
                        </ul>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <p class=\"large text-muted\">";
        // line 27
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "description", []);
        echo "</p>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  89 => 23,  79 => 19,  68 => 17,  64 => 16,  59 => 14,  55 => 13,  51 => 12,  47 => 10,  43 => 9,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"team\" class=\"bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content }}
        </div>
    </div>
    <div class=\"row\">
        {% for member in page.header.people %}
            <div class=\"col-sm-4\">
                <div class=\"team-member\">
                    <img src=\"{{ page.media[member.pic].url }}\" class=\"img-responsive img-circle\" alt=\"\">
                    <h4>{{ member.name }}</h4>
                    <p class=\"text-muted\">{{ member.position }}</p>
                    <ul class=\"list-inline social-buttons\">
                        {% for network in member.social %}
                            <li><a href=\"{{ network.url }}\"><i class=\"fa fa-{{ network.title }}\"></i></a>
                            {% endfor %}

                        </ul>
                    </div>
                </div>
            {% endfor %}  
        </div>
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                <p class=\"large text-muted\">{{ page.header.description }}</p>
            </div>
        </div>
    </div>
</section>", "modular/team.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\modular\\team.html.twig");
    }
}

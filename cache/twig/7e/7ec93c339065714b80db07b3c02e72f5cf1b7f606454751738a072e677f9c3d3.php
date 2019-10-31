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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <span class=\"copyright\" style=\"color: black;\">Copyright &copy; ";
        // line 5
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo " 2017</span>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
            // line 10
            echo "                        <li><a href=\"";
            echo $this->getAttribute($context["network"], "url", []);
            echo "\"><i class=\"fa fa-";
            echo $this->getAttribute($context["network"], "title", []);
            echo "\"></i></a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </ul>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline quicklinks\">
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "quicklinks", []));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 18
            echo "                        <li><a href=\"";
            echo $this->getAttribute($context["link"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["link"], "title", []);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </ul>
            </div>
        </div>
    </div>
</footer>";
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
        return array (  81 => 21,  69 => 18,  65 => 17,  59 => 13,  47 => 10,  43 => 9,  36 => 5,  30 => 1,);
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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <span class=\"copyright\" style=\"color: black;\">Copyright &copy; {{ site.title }} 2017</span>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                    {% for network in site.social %}
                        <li><a href=\"{{ network.url }}\"><i class=\"fa fa-{{ network.title }}\"></i></a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline quicklinks\">
                    {% for link in site.quicklinks %}
                        <li><a href=\"{{ link.url }}\">{{ link.title }}</a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</footer>", "partials/footer.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\partials\\footer.html.twig");
    }
}

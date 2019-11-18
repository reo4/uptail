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

/* partials/relatedpages.html.twig */
class __TwigTemplate_e1d8721e786a5c8969981bc2bc20cc9e50e4f067a873b9505cb976f9476abe07 extends \Twig\Template
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
        echo "<ul class=\"related-pages menu\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["related_pages"] ?? null));
        foreach ($context['_seq'] as $context["related_path"] => $context["score"]) {
            // line 3
            echo "        ";
            $context["related"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", [], "array"), "get", [0 => $context["related_path"]], "method");
            // line 4
            echo "        ";
            if (($context["related"] ?? null)) {
                // line 5
                echo "            <li class=\"menu-item\">
                ";
                // line 6
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "show_score", [])) {
                    // line 7
                    echo "                    <div class=\"menu-badge\">
                        <span class=\"label lable-primary\">";
                    // line 8
                    echo $context["score"];
                    echo "</span>
                    </div>
                ";
                }
                // line 11
                echo "                <a href=\"";
                echo $this->getAttribute(($context["related"] ?? null), "url", []);
                echo "\" title=\"";
                echo $this->getAttribute(($context["related"] ?? null), "title", []);
                echo "\">";
                echo $this->getAttribute(($context["related"] ?? null), "title", []);
                echo "</a>
            </li>
        ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['related_path'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/relatedpages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  68 => 14,  57 => 11,  51 => 8,  48 => 7,  46 => 6,  43 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"related-pages menu\">
    {% for related_path, score in related_pages %}
        {% set related = grav['pages'].get(related_path) %}
        {% if related %}
            <li class=\"menu-item\">
                {% if config.plugins.relatedpages.show_score %}
                    <div class=\"menu-badge\">
                        <span class=\"label lable-primary\">{{ score }}</span>
                    </div>
                {% endif %}
                <a href=\"{{ related.url }}\" title=\"{{ related.title }}\">{{ related.title }}</a>
            </li>
        {% endif %}
    {% endfor %}
</ul>", "partials/relatedpages.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\quark\\templates\\partials\\relatedpages.html.twig");
    }
}

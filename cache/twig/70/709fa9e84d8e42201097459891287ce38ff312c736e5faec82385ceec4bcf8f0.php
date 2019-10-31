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

/* modular/portfolio.html.twig */
class __TwigTemplate_2931af388c4940e8d1fc38aa0826566d99ba2acffc1c2bbcac42094b346f3070 extends \Twig\Template
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
        echo " <section id=\"";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "menu", []);
        echo "\" class=\"bg-light-gray\">
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolios", []));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 10
            echo "            <div class=\"col-md-4 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal";
            // line 11
            echo $this->getAttribute($context["portfolio"], "modalid", []);
            echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"portfolio-hover\">
                        <div class=\"portfolio-hover-content\">
                            <i class=\"fa fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"";
            // line 17
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "thumbnail", []), [], "array"), "url", []);
            echo "\" class=\"img-responsive\" alt=\"\">
                </a>
                <div class=\"portfolio-caption\">
                    <h4>";
            // line 20
            echo $this->getAttribute($context["portfolio"], "title", []);
            echo "</h4>
                    <p class=\"text-muted\">";
            // line 21
            echo $this->getAttribute($context["portfolio"], "subtitle", []);
            echo "</p>
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
</div>
</section>


 ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolios", []));
        foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
            // line 32
            echo "    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal";
            echo $this->getAttribute($context["portfolio"], "modalid", []);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>";
            // line 44
            echo $this->getAttribute($context["portfolio"], "title", []);
            echo "</h2>
                            <hr class=\"star-primary\">
                            <img src=\"";
            // line 46
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["portfolio"], "img", []), [], "array"), "url", []);
            echo "\" class=\"img-responsive img-centered\" alt=\"";
            echo $this->getAttribute($context["portfolio"], "alt", []);
            echo "\">
                            <p>";
            // line 47
            echo $this->getAttribute($context["portfolio"], "description", []);
            echo "</p>
                            ";
            // line 62
            echo "                            <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Contact for details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 62,  120 => 47,  114 => 46,  109 => 44,  93 => 32,  89 => 31,  82 => 26,  71 => 21,  67 => 20,  61 => 17,  52 => 11,  49 => 10,  45 => 9,  38 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" <section id=\"{{page.header.menu}}\" class=\"bg-light-gray\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            {{ content }}
        </div>
    </div>
    <div class=\"row\">
        {% for portfolio in page.header.portfolios %}
            <div class=\"col-md-4 col-sm-6 portfolio-item\">
                <a href=\"#portfolioModal{{ portfolio.modalid }}\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"portfolio-hover\">
                        <div class=\"portfolio-hover-content\">
                            <i class=\"fa fa-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"{{ page.media[portfolio.thumbnail].url }}\" class=\"img-responsive\" alt=\"\">
                </a>
                <div class=\"portfolio-caption\">
                    <h4>{{ portfolio.title }}</h4>
                    <p class=\"text-muted\">{{ portfolio.subtitle }}</p>
                </div>
            </div>

        {% endfor %}
    </div>
</div>
</section>


 {% for portfolio in page.header.portfolios %}
    <div class=\"portfolio-modal modal fade\" id=\"portfolioModal{{ portfolio.modalid }}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-content\">
            <div class=\"close-modal\" data-dismiss=\"modal\">
                <div class=\"lr\">
                    <div class=\"rl\">
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2\">
                        <div class=\"modal-body\">
                            <h2>{{ portfolio.title }}</h2>
                            <hr class=\"star-primary\">
                            <img src=\"{{ page.media[portfolio.img].url }}\" class=\"img-responsive img-centered\" alt=\"{{ portfolio.alt }}\">
                            <p>{{ portfolio.description }}</p>
                            {# <ul class=\"list-inline item-details\">
                                <li>Client:
                                    <strong><a href=\"http://startbootstrap.com\">{{ portfolio.client }}</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href=\"http://startbootstrap.com\">{{ portfolio.projectdate }}</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href=\"http://startbootstrap.com\">{{ portfolio.category }}</a>
                                    </strong>
                                </li>
                            </ul> #}
                            <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Contact for details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endfor %}", "modular/portfolio.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\modular\\portfolio.html.twig");
    }
}

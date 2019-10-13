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

/* partials/logo.html.twig */
class __TwigTemplate_df279cb24d2d29da959c562b4bb5fcd210e36506839a88a1bf75fb6be53a6ee9 extends \Twig\Template
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
        $context["logo"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc(((($context["mobile"] ?? null)) ? ("custom_logo_mobile") : ("custom_logo")));
        // line 2
        echo "<a href=\"";
        echo ($context["home_url"] ?? null);
        echo "\" class=\"navbar-brand mr-10\">
\tUptail
";
        // line 10
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set logo = theme_var(mobile ? 'custom_logo_mobile' : 'custom_logo') %}
<a href=\"{{ home_url }}\" class=\"navbar-brand mr-10\">
\tUptail
{# {% if logo %}
  {% set logo_file = (logo|first).name %}
  <img src=\"{{ url('theme://images/logo/' ~ logo_file)  }}\" alt=\"{{ site.name }}\" />
{% else %}
  {% include('@images/grav-logo.svg') %}
{% endif %} #}
</a>", "partials/logo.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\quark\\templates\\partials\\logo.html.twig");
    }
}

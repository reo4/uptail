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

/* modular/form.html.twig */
class __TwigTemplate_a5058900a16ff089a5fcc5363611f5b071e22081b99dc884719b412e2d382593 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form_classes' => [$this, 'block_form_classes'],
            'inner_markup_fields_start' => [$this, 'block_inner_markup_fields_start'],
            'inner_markup_fields_end' => [$this, 'block_inner_markup_fields_end'],
            'inner_markup_buttons_start' => [$this, 'block_inner_markup_buttons_start'],
            'button_classes' => [$this, 'block_button_classes'],
            'inner_markup_buttons_end' => [$this, 'block_inner_markup_buttons_end'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"contact\">
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
        // line 10
        if ((null === ($context["form"] ?? null))) {
            // line 11
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "form"], "method");
        }
        // line 13
        echo "
";
        // line 14
        $this->loadTemplate("partials/form-messages.html.twig", "modular/form.html.twig", 14)->display($context);
        // line 15
        echo "
";
        // line 16
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 17
        $context["multipart"] = "";
        // line 18
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", [])), "POST");
        // line 19
        echo "
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 21
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", []) == "file"))) {
                // line 22
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 23
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
        // line 26
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", [])) ? ((($context["base_url"] ?? null) . $this->getAttribute(($context["form"] ?? null), "action", []))) : (((($context["base_url"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", [])) . $this->getAttribute(($context["uri"] ?? null), "params", []))));
        // line 27
        echo "
";
        // line 28
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 29
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 31
        echo "
<form name=\"";
        // line 32
        echo $this->getAttribute(($context["form"] ?? null), "name", []);
        echo "\"
      action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\"
      method=\"";
        // line 34
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
      ";
        // line 35
        if ($this->getAttribute(($context["form"] ?? null), "id", [])) {
            echo "id=\"";
            echo $this->getAttribute(($context["form"] ?? null), "id", []);
            echo "\"";
        }
        // line 36
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 39
        echo ">

  ";
        // line 41
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 42
        echo "
  <div class=\"col-md-6\">
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 45
            echo "      ";
            if (($this->getAttribute($context["field"], "position", []) == "left")) {
                // line 46
                echo "        ";
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                // line 47
                echo "        <div class=\"form-group\">
          ";
                // line 48
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
                try {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                     $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), "modular/form.html.twig", 48);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
                }
                // line 49
                echo "        </div>
      ";
            }
            // line 51
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "  </div>
  <div class=\"col-md-6\">
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 55
            echo "      ";
            if (($this->getAttribute($context["field"], "position", []) == "right")) {
                // line 56
                echo "        ";
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                // line 57
                echo "        <div class=\"form-group\">
          ";
                // line 58
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
                try {
                    $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =                     $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), "modular/form.html.twig", 58);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
                    $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
                }
                // line 59
                echo "        </div>
      ";
            }
            // line 61
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "  </div>

  ";
        // line 64
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "modular/form.html.twig", 64)->display($context);
        // line 65
        echo "
  ";
        // line 66
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 67
        echo "
  ";
        // line 68
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 71
        echo "
  <div class=\"col-lg-12 text-center\">
    <div class=\"form-group\">
      ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 75
            echo "          ";
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "<div class=\"";
                echo $this->getAttribute($context["button"], "outerclasses", []);
                echo "\">";
            }
            // line 76
            echo "              ";
            if ($this->getAttribute($context["button"], "url", [])) {
                // line 77
                echo "                  <a href=\"";
                echo (((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $this->getAttribute($context["button"], "url", [])) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "http") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) ? ($this->getAttribute($context["button"], "url", [])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", []))));
                echo "\">
              ";
            }
            // line 79
            echo "              <button
                    ";
            // line 80
            if ($this->getAttribute($context["button"], "id", [])) {
                echo "id=\"";
                echo $this->getAttribute($context["button"], "id", []);
                echo "\"";
            }
            // line 81
            echo "                    ";
            $this->displayBlock('button_classes', $context, $blocks);
            // line 84
            echo "                    ";
            if ($this->getAttribute($context["button"], "disabled", [])) {
                echo "disabled=\"disabled\"";
            }
            // line 85
            echo "
                    type=\"";
            // line 86
            echo (($this->getAttribute($context["button"], "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", []), "submit")) : ("submit"));
            echo "\"

                    ";
            // line 88
            if ($this->getAttribute($context["button"], "task", [])) {
                // line 89
                echo "                        name=\"task\" value=\"";
                echo $this->getAttribute($context["button"], "task", []);
                echo "\"
                    ";
            }
            // line 91
            echo "                >
                    ";
            // line 92
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($context["button"], "value", [])), "Submit");
            echo "
              </button>
              ";
            // line 94
            if ($this->getAttribute($context["button"], "url", [])) {
                // line 95
                echo "                  </a>
              ";
            }
            // line 97
            echo "          ";
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "</div>";
            }
            // line 98
            echo "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "    </div>
  </div>

  ";
        // line 102
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 105
        echo "
  ";
        // line 106
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    // line 36
    public function block_form_classes($context, array $blocks = [])
    {
        // line 37
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "classes", [])) {
            echo "class=\"";
            echo $this->getAttribute(($context["form"] ?? null), "classes", []);
            echo "\"";
        }
        // line 38
        echo "      ";
    }

    // line 41
    public function block_inner_markup_fields_start($context, array $blocks = [])
    {
    }

    // line 66
    public function block_inner_markup_fields_end($context, array $blocks = [])
    {
    }

    // line 68
    public function block_inner_markup_buttons_start($context, array $blocks = [])
    {
        // line 69
        echo "  <div class=\"buttons\">
  ";
    }

    // line 81
    public function block_button_classes($context, array $blocks = [])
    {
        // line 82
        echo "                    class=\"";
        echo (($this->getAttribute(($context["button"] ?? null), "classes", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "classes", []), "button")) : ("button"));
        echo "\"
                    ";
    }

    // line 102
    public function block_inner_markup_buttons_end($context, array $blocks = [])
    {
        // line 103
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 103,  431 => 102,  424 => 82,  421 => 81,  416 => 69,  413 => 68,  408 => 66,  403 => 41,  399 => 38,  392 => 37,  389 => 36,  382 => 106,  379 => 105,  377 => 102,  372 => 99,  358 => 98,  353 => 97,  349 => 95,  347 => 94,  342 => 92,  339 => 91,  333 => 89,  331 => 88,  326 => 86,  323 => 85,  318 => 84,  315 => 81,  309 => 80,  306 => 79,  300 => 77,  297 => 76,  290 => 75,  273 => 74,  268 => 71,  266 => 68,  263 => 67,  261 => 66,  258 => 65,  256 => 64,  252 => 62,  238 => 61,  234 => 59,  224 => 58,  221 => 57,  218 => 56,  215 => 55,  198 => 54,  194 => 52,  180 => 51,  176 => 49,  166 => 48,  163 => 47,  160 => 46,  157 => 45,  140 => 44,  136 => 42,  134 => 41,  130 => 39,  127 => 36,  121 => 35,  115 => 34,  111 => 33,  107 => 32,  104 => 31,  100 => 29,  98 => 28,  95 => 27,  93 => 26,  90 => 25,  83 => 23,  80 => 22,  77 => 21,  73 => 20,  70 => 19,  68 => 18,  66 => 17,  64 => 16,  61 => 15,  59 => 14,  56 => 13,  52 => 11,  50 => 10,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"contact\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        {{ content }}
      </div>
    </div>
    <div class=\"row\">

{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : base_url ~ page.route ~ uri.params %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

<form name=\"{{ form.name }}\"
      action=\"{{ action }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% if form.id %}id=\"{{ form.id }}\"{% endif %}
      {% block form_classes %}
      {% if form.classes %}class=\"{{ form.classes }}\"{% endif %}
      {% endblock %}
>

  {% block inner_markup_fields_start %}{% endblock %}

  <div class=\"col-md-6\">
    {% for field in form.fields %}
      {% if field.position == 'left' %}
        {% set value = form.value(field.name) %}
        <div class=\"form-group\">
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        </div>
      {% endif %}
    {% endfor %}
  </div>
  <div class=\"col-md-6\">
    {% for field in form.fields %}
      {% if field.position == 'right' %}
        {% set value = form.value(field.name) %}
        <div class=\"form-group\">
          {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
        </div>
      {% endif %}
    {% endfor %}
  </div>

  {% include \"forms/fields/formname/formname.html.twig\" %}

  {% block inner_markup_fields_end %}{% endblock %}

  {% block inner_markup_buttons_start %}
  <div class=\"buttons\">
  {% endblock %}

  <div class=\"col-lg-12 text-center\">
    <div class=\"form-group\">
      {% for button in form.buttons %}
          {% if button.outerclasses is defined %}<div class=\"{{ button.outerclasses }}\">{% endif %}
              {% if button.url %}
                  <a href=\"{{ button.url starts with 'http' ? button.url : url(button.url) }}\">
              {% endif %}
              <button
                    {% if button.id %}id=\"{{ button.id }}\"{% endif %}
                    {% block button_classes %}
                    class=\"{{ button.classes|default('button') }}\"
                    {% endblock %}
                    {% if button.disabled %}disabled=\"disabled\"{% endif %}

                    type=\"{{ button.type|default('submit') }}\"

                    {% if button.task %}
                        name=\"task\" value=\"{{ button.task }}\"
                    {% endif %}
                >
                    {{ button.value|t|default('Submit') }}
              </button>
              {% if button.url %}
                  </a>
              {% endif %}
          {% if button.outerclasses is defined %}</div>{% endif %}
      {% endfor %}
    </div>
  </div>

  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}

  {{ nonce_field('form', 'form-nonce')|raw }}
</form>
", "modular/form.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\modular\\form.html.twig");
    }
}

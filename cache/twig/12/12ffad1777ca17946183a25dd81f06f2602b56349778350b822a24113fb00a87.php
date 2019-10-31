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
class __TwigTemplate_e3ad68762fb531e8309bc54349c03ea9e9563d17a95cbaadad477bee0f2b319f extends \Twig\Template
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
        // line 9
        if ((null === ($context["form"] ?? null))) {
            // line 10
            echo "          ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", []), "getFlashObject", [0 => "form"], "method");
            // line 11
            echo "      ";
        }
        // line 12
        echo "
      ";
        // line 13
        $this->loadTemplate("partials/form-messages.html.twig", "modular/form.html.twig", 13)->display($context);
        // line 14
        echo "
      ";
        // line 15
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 16
        echo "      ";
        $context["multipart"] = "";
        // line 17
        echo "      ";
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", [])), "POST");
        // line 18
        echo "
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 20
            echo "          ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", []) == "file"))) {
                // line 21
                echo "              ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 22
                echo "          ";
            }
            // line 23
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
      ";
        // line 25
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", [])) ? ((($context["base_url"] ?? null) . $this->getAttribute(($context["form"] ?? null), "action", []))) : (((($context["base_url"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", [])) . $this->getAttribute(($context["uri"] ?? null), "params", []))));
        // line 26
        echo "
      ";
        // line 27
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 28
            echo "          ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
            // line 29
            echo "      ";
        }
        // line 30
        echo "
      <form name=\"";
        // line 31
        echo $this->getAttribute(($context["form"] ?? null), "name", []);
        echo "\"
            action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\"
            method=\"";
        // line 33
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
            ";
        // line 34
        if ($this->getAttribute(($context["form"] ?? null), "id", [])) {
            echo "id=\"";
            echo $this->getAttribute(($context["form"] ?? null), "id", []);
            echo "\"";
        }
        // line 35
        echo "            ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 38
        echo "      >

        ";
        // line 40
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 41
        echo "
        <div class=\"col-md-6\">
          ";
        // line 43
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
            // line 44
            echo "            ";
            if (($this->getAttribute($context["field"], "position", []) == "left")) {
                // line 45
                echo "              ";
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                // line 46
                echo "              <div class=\"form-group\">
                ";
                // line 47
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
                try {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                     $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), "modular/form.html.twig", 47);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                    $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
                }
                // line 48
                echo "              </div>
            ";
            }
            // line 50
            echo "          ";
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
        // line 51
        echo "        </div>
        <div class=\"col-md-6\">
          ";
        // line 53
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
            // line 54
            echo "            ";
            if (($this->getAttribute($context["field"], "position", []) == "right")) {
                // line 55
                echo "              ";
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", [0 => $this->getAttribute($context["field"], "name", [])], "method");
                // line 56
                echo "              <div class=\"form-group\">
                ";
                // line 57
                $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = null;
                try {
                    $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 =                     $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", [])) . "/") . $this->getAttribute($context["field"], "type", [])) . ".html.twig"), "modular/form.html.twig", 57);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) {
                    $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144->display($context);
                }
                // line 58
                echo "              </div>
            ";
            }
            // line 60
            echo "          ";
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
        // line 61
        echo "        </div>

        ";
        // line 63
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "modular/form.html.twig", 63)->display($context);
        // line 64
        echo "
        ";
        // line 65
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 66
        echo "
        ";
        // line 67
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 70
        echo "
        <div class=\"col-lg-12 text-center\">
          <div class=\"form-group\">
            ";
        // line 73
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
            // line 74
            echo "                ";
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "<div class=\"";
                echo $this->getAttribute($context["button"], "outerclasses", []);
                echo "\">";
            }
            // line 75
            echo "                    ";
            if ($this->getAttribute($context["button"], "url", [])) {
                // line 76
                echo "                        <a href=\"";
                echo (((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $this->getAttribute($context["button"], "url", [])) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "http") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) ? ($this->getAttribute($context["button"], "url", [])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", []))));
                echo "\">
                    ";
            }
            // line 78
            echo "                    <button
                          ";
            // line 79
            if ($this->getAttribute($context["button"], "id", [])) {
                echo "id=\"";
                echo $this->getAttribute($context["button"], "id", []);
                echo "\"";
            }
            // line 80
            echo "                          ";
            $this->displayBlock('button_classes', $context, $blocks);
            // line 83
            echo "                          ";
            if ($this->getAttribute($context["button"], "disabled", [])) {
                echo "disabled=\"disabled\"";
            }
            // line 84
            echo "
                          type=\"";
            // line 85
            echo (($this->getAttribute($context["button"], "type", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", []), "submit")) : ("submit"));
            echo "\"

                          ";
            // line 87
            if ($this->getAttribute($context["button"], "task", [])) {
                // line 88
                echo "                              name=\"task\" value=\"";
                echo $this->getAttribute($context["button"], "task", []);
                echo "\"
                          ";
            }
            // line 90
            echo "                      >
                          ";
            // line 91
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($context["button"], "value", [])), "Submit");
            echo "
                    </button>
                    ";
            // line 93
            if ($this->getAttribute($context["button"], "url", [])) {
                // line 94
                echo "                        </a>
                    ";
            }
            // line 96
            echo "                ";
            if ($this->getAttribute($context["button"], "outerclasses", [], "any", true, true)) {
                echo "</div>";
            }
            // line 97
            echo "            ";
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
        // line 98
        echo "          </div>
        </div>

        ";
        // line 101
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 104
        echo "
        ";
        // line 105
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
      </form>

    </div>
  </div>
</section>
";
    }

    // line 35
    public function block_form_classes($context, array $blocks = [])
    {
        // line 36
        echo "            ";
        if ($this->getAttribute(($context["form"] ?? null), "classes", [])) {
            echo "class=\"";
            echo $this->getAttribute(($context["form"] ?? null), "classes", []);
            echo "\"";
        }
        // line 37
        echo "            ";
    }

    // line 40
    public function block_inner_markup_fields_start($context, array $blocks = [])
    {
    }

    // line 65
    public function block_inner_markup_fields_end($context, array $blocks = [])
    {
    }

    // line 67
    public function block_inner_markup_buttons_start($context, array $blocks = [])
    {
        // line 68
        echo "        <div class=\"buttons\">
        ";
    }

    // line 80
    public function block_button_classes($context, array $blocks = [])
    {
        // line 81
        echo "                          class=\"";
        echo (($this->getAttribute(($context["button"] ?? null), "classes", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "classes", []), "button")) : ("button"));
        echo "\"
                          ";
    }

    // line 101
    public function block_inner_markup_buttons_end($context, array $blocks = [])
    {
        // line 102
        echo "        </div>
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
        return array (  445 => 102,  442 => 101,  435 => 81,  432 => 80,  427 => 68,  424 => 67,  419 => 65,  414 => 40,  410 => 37,  403 => 36,  400 => 35,  389 => 105,  386 => 104,  384 => 101,  379 => 98,  365 => 97,  360 => 96,  356 => 94,  354 => 93,  349 => 91,  346 => 90,  340 => 88,  338 => 87,  333 => 85,  330 => 84,  325 => 83,  322 => 80,  316 => 79,  313 => 78,  307 => 76,  304 => 75,  297 => 74,  280 => 73,  275 => 70,  273 => 67,  270 => 66,  268 => 65,  265 => 64,  263 => 63,  259 => 61,  245 => 60,  241 => 58,  231 => 57,  228 => 56,  225 => 55,  222 => 54,  205 => 53,  201 => 51,  187 => 50,  183 => 48,  173 => 47,  170 => 46,  167 => 45,  164 => 44,  147 => 43,  143 => 41,  141 => 40,  137 => 38,  134 => 35,  128 => 34,  122 => 33,  118 => 32,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  103 => 27,  100 => 26,  98 => 25,  95 => 24,  89 => 23,  86 => 22,  83 => 21,  80 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  49 => 9,  42 => 5,  36 => 1,);
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

    </div>
  </div>
</section>
", "modular/form.html.twig", "D:\\Xampp\\htdocs\\uptail\\user\\themes\\agency\\templates\\modular\\form.html.twig");
    }
}

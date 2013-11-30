<?php

/* SonataAdminBundle:Form:silex_form_div_layout.html.twig */
class __TwigTemplate_195487f4de24a4801c9f65e21e98994a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_label' => array($this, 'block_form_label'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 41
        echo "
";
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('form_label', $context, $blocks);
        // line 64
        echo "
";
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_row', $context, $blocks);
        // line 78
        echo "
";
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 3
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 6
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " class=\"inputs-list\">
        ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 8
                echo "            <li>
                ";
                // line 9
                ob_start();
                // line 10
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 12
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : $this->getContext($context, "form_widget_content"))));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        </ul>
    ";
        } else {
            // line 17
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 18
            if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
                // line 19
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</option>
        ";
            }
            // line 21
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 22
                echo "            ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 23
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 24
                if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) && (!(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")))))) {
                    // line 25
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
            ";
                }
                // line 27
                echo "        ";
            }
            // line 28
            echo "        ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 29
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 35
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 36
        ob_start();
        // line 37
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 38
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_form_label($context, array $blocks = array())
    {
        // line 45
        ob_start();
        // line 46
        echo "    ";
        if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
            // line 47
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 48
            echo "    ";
        }
        // line 49
        echo "    ";
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 50
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : ("")) . " required")));
            // line 51
            echo "    ";
        }
        // line 52
        echo "    ";
        if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : $this->getContext($context, "in_list_checkbox"))) && array_key_exists("widget", $context))) {
            // line 53
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 54
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo "
            <span>
                ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </span>
        </label>
    ";
        } else {
            // line 60
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 67
    public function block_form_row($context, array $blocks = array())
    {
        // line 68
        ob_start();
        // line 69
        echo "    <div class=\"control-group ";
        echo (((0 < twig_length_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')))) ? ("error") : (""));
        echo " \">
        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"controls\">
            ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 81
    public function block_form_errors($context, array $blocks = array())
    {
        // line 82
        ob_start();
        // line 83
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 84
            echo "        ";
            if (((!$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) || twig_in_filter("repeated", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes", array(), "array")))) {
                // line 85
                echo "            <div class=\"control-group error\">
        ";
            }
            // line 87
            echo "        <span class=\"help-inline\">
            ";
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 89
                echo "                ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                    // line 90
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"), "html", null, true);
                    echo "
                ";
                }
                // line 92
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "        </span>
        ";
            // line 94
            if (((!$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) || twig_in_filter("repeated", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "block_prefixes", array(), "array")))) {
                // line 95
                echo "            </div>
        ";
            }
            // line 97
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  344 => 97,  340 => 95,  338 => 94,  335 => 93,  321 => 92,  315 => 90,  295 => 88,  292 => 87,  288 => 85,  282 => 83,  280 => 82,  277 => 81,  259 => 70,  249 => 67,  215 => 54,  190 => 50,  184 => 48,  181 => 47,  178 => 46,  161 => 38,  124 => 23,  146 => 59,  118 => 21,  104 => 43,  100 => 42,  170 => 63,  152 => 62,  137 => 27,  153 => 35,  155 => 64,  129 => 24,  97 => 42,  58 => 20,  90 => 38,  134 => 51,  126 => 47,  114 => 47,  110 => 18,  77 => 8,  113 => 50,  20 => 23,  53 => 80,  34 => 41,  195 => 72,  188 => 16,  185 => 15,  175 => 11,  150 => 74,  148 => 72,  127 => 53,  81 => 35,  23 => 24,  84 => 34,  76 => 30,  65 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 84,  283 => 88,  278 => 86,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 78,  241 => 77,  229 => 73,  220 => 56,  214 => 69,  177 => 65,  169 => 60,  140 => 28,  132 => 63,  128 => 49,  107 => 53,  61 => 21,  273 => 96,  269 => 94,  254 => 69,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 60,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 12,  159 => 64,  143 => 29,  135 => 53,  119 => 47,  102 => 17,  71 => 30,  67 => 15,  63 => 4,  59 => 21,  93 => 36,  88 => 12,  78 => 30,  87 => 38,  46 => 10,  38 => 8,  44 => 9,  21 => 2,  25 => 3,  94 => 42,  89 => 35,  85 => 34,  75 => 31,  68 => 6,  56 => 81,  27 => 3,  31 => 4,  26 => 12,  201 => 92,  196 => 52,  183 => 82,  171 => 10,  166 => 9,  163 => 8,  158 => 37,  156 => 36,  151 => 63,  142 => 56,  138 => 58,  136 => 56,  121 => 22,  117 => 51,  105 => 48,  91 => 27,  62 => 35,  49 => 12,  28 => 3,  24 => 2,  19 => 2,  79 => 33,  72 => 28,  69 => 28,  47 => 9,  40 => 44,  37 => 43,  22 => 3,  246 => 90,  157 => 59,  145 => 68,  139 => 57,  131 => 25,  123 => 47,  120 => 39,  115 => 51,  111 => 33,  108 => 44,  101 => 43,  98 => 15,  96 => 41,  83 => 34,  74 => 14,  66 => 15,  55 => 16,  52 => 13,  50 => 78,  43 => 12,  41 => 7,  35 => 8,  32 => 35,  29 => 34,  209 => 82,  203 => 78,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 66,  176 => 45,  173 => 44,  168 => 72,  164 => 59,  162 => 60,  154 => 58,  149 => 51,  147 => 57,  144 => 49,  141 => 48,  133 => 49,  130 => 50,  125 => 53,  122 => 46,  116 => 41,  112 => 19,  109 => 49,  106 => 45,  103 => 52,  99 => 51,  95 => 42,  92 => 40,  86 => 37,  82 => 10,  80 => 9,  73 => 7,  64 => 24,  60 => 3,  57 => 32,  54 => 10,  51 => 13,  48 => 67,  45 => 66,  42 => 64,  39 => 7,  36 => 27,  33 => 4,  30 => 2,);
    }
}

<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_a3cf7ec5577ccbd7038101bbd13fb242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "edit", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) {
                    // line 18
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 20
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 22
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 23
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 27
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
    }

    // line 31
    public function block_relation_link($context, array $blocks = array())
    {
        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        echo "</a>";
    }

    // line 35
    public function block_relation_value($context, array $blocks = array())
    {
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  456 => 143,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 118,  388 => 117,  377 => 115,  371 => 113,  361 => 107,  358 => 106,  349 => 103,  347 => 102,  342 => 101,  339 => 100,  336 => 99,  332 => 97,  329 => 95,  326 => 93,  324 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  289 => 81,  272 => 76,  250 => 67,  233 => 62,  228 => 59,  223 => 58,  200 => 55,  191 => 50,  318 => 144,  306 => 140,  303 => 139,  300 => 138,  286 => 80,  274 => 77,  265 => 125,  263 => 71,  260 => 123,  256 => 120,  248 => 115,  242 => 112,  236 => 63,  216 => 99,  197 => 54,  192 => 87,  165 => 76,  160 => 75,  70 => 33,  344 => 97,  340 => 95,  338 => 94,  335 => 93,  321 => 91,  315 => 90,  295 => 88,  292 => 134,  288 => 85,  282 => 79,  280 => 130,  277 => 78,  259 => 70,  249 => 67,  215 => 54,  190 => 50,  184 => 47,  181 => 47,  178 => 45,  161 => 38,  124 => 31,  146 => 34,  118 => 28,  104 => 23,  100 => 42,  170 => 78,  152 => 38,  137 => 27,  153 => 71,  155 => 64,  129 => 24,  97 => 42,  58 => 20,  90 => 18,  134 => 51,  126 => 47,  114 => 47,  110 => 25,  77 => 8,  113 => 50,  20 => 23,  53 => 80,  34 => 16,  195 => 72,  188 => 16,  185 => 85,  175 => 43,  150 => 74,  148 => 72,  127 => 32,  81 => 25,  23 => 24,  84 => 16,  76 => 13,  65 => 5,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 131,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 142,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 84,  283 => 88,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 77,  229 => 73,  220 => 56,  214 => 98,  177 => 65,  169 => 60,  140 => 28,  132 => 59,  128 => 58,  107 => 24,  61 => 21,  273 => 96,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 102,  221 => 77,  219 => 100,  217 => 75,  208 => 57,  204 => 72,  179 => 12,  159 => 64,  143 => 29,  135 => 35,  119 => 28,  102 => 17,  71 => 30,  67 => 185,  63 => 4,  59 => 165,  93 => 36,  88 => 12,  78 => 24,  87 => 17,  46 => 21,  38 => 17,  44 => 74,  21 => 2,  25 => 3,  94 => 42,  89 => 35,  85 => 34,  75 => 39,  68 => 6,  56 => 81,  27 => 3,  31 => 15,  26 => 12,  201 => 92,  196 => 52,  183 => 82,  171 => 10,  166 => 9,  163 => 8,  158 => 74,  156 => 36,  151 => 63,  142 => 56,  138 => 36,  136 => 60,  121 => 29,  117 => 51,  105 => 27,  91 => 27,  62 => 166,  49 => 112,  28 => 14,  24 => 2,  19 => 2,  79 => 14,  72 => 199,  69 => 198,  47 => 75,  40 => 44,  37 => 54,  22 => 3,  246 => 90,  157 => 41,  145 => 68,  139 => 31,  131 => 25,  123 => 30,  120 => 56,  115 => 27,  111 => 33,  108 => 44,  101 => 22,  98 => 21,  96 => 41,  83 => 34,  74 => 14,  66 => 15,  55 => 16,  52 => 17,  50 => 78,  43 => 20,  41 => 7,  35 => 16,  32 => 13,  29 => 11,  209 => 95,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 86,  182 => 84,  176 => 81,  173 => 42,  168 => 72,  164 => 59,  162 => 60,  154 => 58,  149 => 36,  147 => 68,  144 => 33,  141 => 66,  133 => 49,  130 => 50,  125 => 53,  122 => 46,  116 => 41,  112 => 26,  109 => 49,  106 => 45,  103 => 52,  99 => 26,  95 => 20,  92 => 19,  86 => 43,  82 => 10,  80 => 41,  73 => 7,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 24,  48 => 67,  45 => 66,  42 => 62,  39 => 61,  36 => 27,  33 => 4,  30 => 2,);
    }
}

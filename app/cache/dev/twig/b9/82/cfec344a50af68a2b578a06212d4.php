<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig */
class __TwigTemplate_b982cfec344a50af68a2b578a06212d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 121,  299 => 112,  293 => 109,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  253 => 95,  237 => 86,  232 => 84,  222 => 81,  210 => 75,  174 => 64,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  456 => 143,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 118,  388 => 117,  377 => 115,  371 => 113,  361 => 107,  358 => 106,  349 => 103,  347 => 102,  342 => 101,  339 => 100,  336 => 99,  332 => 97,  329 => 95,  326 => 93,  324 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  289 => 81,  272 => 76,  250 => 93,  233 => 62,  228 => 83,  223 => 58,  200 => 55,  191 => 69,  318 => 122,  306 => 140,  303 => 139,  300 => 138,  286 => 80,  274 => 77,  265 => 99,  263 => 71,  260 => 98,  256 => 96,  248 => 115,  242 => 112,  236 => 63,  216 => 99,  197 => 70,  192 => 87,  165 => 59,  160 => 58,  70 => 33,  344 => 97,  340 => 95,  338 => 94,  335 => 93,  321 => 123,  315 => 90,  295 => 88,  292 => 134,  288 => 107,  282 => 79,  280 => 130,  277 => 78,  259 => 70,  249 => 67,  215 => 78,  190 => 50,  184 => 47,  181 => 47,  178 => 45,  161 => 38,  124 => 31,  146 => 34,  118 => 28,  104 => 23,  100 => 36,  170 => 78,  152 => 38,  137 => 27,  153 => 56,  155 => 64,  129 => 24,  97 => 42,  58 => 23,  90 => 18,  134 => 51,  126 => 47,  114 => 47,  110 => 40,  77 => 8,  113 => 41,  20 => 23,  53 => 80,  34 => 16,  195 => 72,  188 => 16,  185 => 68,  175 => 43,  150 => 55,  148 => 72,  127 => 32,  81 => 25,  23 => 24,  84 => 16,  76 => 13,  65 => 5,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 131,  402 => 130,  398 => 119,  393 => 126,  387 => 122,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 142,  309 => 117,  305 => 115,  298 => 91,  294 => 90,  285 => 84,  283 => 88,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 77,  229 => 73,  220 => 80,  214 => 98,  177 => 65,  169 => 60,  140 => 28,  132 => 59,  128 => 58,  107 => 24,  61 => 25,  273 => 96,  269 => 100,  254 => 68,  243 => 89,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 102,  221 => 77,  219 => 100,  217 => 79,  208 => 57,  204 => 73,  179 => 66,  159 => 64,  143 => 29,  135 => 35,  119 => 43,  102 => 37,  71 => 30,  67 => 28,  63 => 24,  59 => 165,  93 => 36,  88 => 12,  78 => 29,  87 => 17,  46 => 21,  38 => 17,  44 => 19,  21 => 11,  25 => 3,  94 => 42,  89 => 35,  85 => 34,  75 => 28,  68 => 6,  56 => 24,  27 => 3,  31 => 15,  26 => 13,  201 => 72,  196 => 52,  183 => 82,  171 => 63,  166 => 9,  163 => 8,  158 => 74,  156 => 57,  151 => 63,  142 => 56,  138 => 50,  136 => 60,  121 => 29,  117 => 51,  105 => 27,  91 => 27,  62 => 166,  49 => 112,  28 => 14,  24 => 12,  19 => 11,  79 => 14,  72 => 199,  69 => 198,  47 => 21,  40 => 13,  37 => 54,  22 => 3,  246 => 90,  157 => 41,  145 => 52,  139 => 31,  131 => 48,  123 => 30,  120 => 56,  115 => 27,  111 => 33,  108 => 39,  101 => 22,  98 => 21,  96 => 41,  83 => 34,  74 => 14,  66 => 25,  55 => 22,  52 => 17,  50 => 22,  43 => 20,  41 => 18,  35 => 16,  32 => 15,  29 => 11,  209 => 95,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 86,  182 => 84,  176 => 65,  173 => 42,  168 => 60,  164 => 59,  162 => 60,  154 => 58,  149 => 36,  147 => 68,  144 => 33,  141 => 66,  133 => 49,  130 => 50,  125 => 45,  122 => 44,  116 => 41,  112 => 26,  109 => 49,  106 => 45,  103 => 52,  99 => 26,  95 => 20,  92 => 19,  86 => 43,  82 => 33,  80 => 41,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 24,  48 => 67,  45 => 66,  42 => 18,  39 => 61,  36 => 17,  33 => 4,  30 => 14,);
    }
}

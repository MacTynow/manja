<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig */
class __TwigTemplate_88055cbd99f13b6504421c509667b9d1 extends Twig_Template
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
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT"), "method"))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 158,  396 => 157,  383 => 150,  366 => 142,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 135,  325 => 125,  308 => 118,  276 => 102,  270 => 100,  267 => 98,  245 => 88,  239 => 86,  234 => 84,  218 => 77,  202 => 73,  167 => 60,  194 => 87,  186 => 82,  316 => 121,  299 => 112,  293 => 109,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  253 => 95,  237 => 85,  232 => 83,  222 => 81,  210 => 75,  174 => 64,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 203,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 132,  486 => 130,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  456 => 143,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 156,  388 => 117,  377 => 147,  371 => 144,  361 => 107,  358 => 106,  349 => 103,  347 => 102,  342 => 133,  339 => 100,  336 => 99,  332 => 97,  329 => 126,  326 => 93,  324 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 82,  289 => 109,  272 => 76,  250 => 93,  233 => 62,  228 => 83,  223 => 58,  200 => 55,  191 => 69,  318 => 122,  306 => 140,  303 => 139,  300 => 138,  286 => 80,  274 => 77,  265 => 99,  263 => 71,  260 => 94,  256 => 96,  248 => 115,  242 => 112,  236 => 63,  216 => 99,  197 => 70,  192 => 87,  165 => 71,  160 => 69,  70 => 33,  344 => 97,  340 => 95,  338 => 94,  335 => 129,  321 => 124,  315 => 90,  295 => 88,  292 => 134,  288 => 107,  282 => 79,  280 => 130,  277 => 78,  259 => 70,  249 => 89,  215 => 78,  190 => 50,  184 => 47,  181 => 79,  178 => 45,  161 => 70,  124 => 31,  146 => 34,  118 => 28,  104 => 23,  100 => 36,  170 => 61,  152 => 38,  137 => 58,  153 => 56,  155 => 55,  129 => 56,  97 => 42,  58 => 23,  90 => 34,  134 => 58,  126 => 47,  114 => 47,  110 => 47,  77 => 8,  113 => 41,  20 => 23,  53 => 80,  34 => 16,  195 => 72,  188 => 68,  185 => 65,  175 => 76,  150 => 64,  148 => 63,  127 => 55,  81 => 25,  23 => 18,  84 => 38,  76 => 57,  65 => 29,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 131,  402 => 130,  398 => 119,  393 => 126,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 142,  309 => 117,  305 => 115,  298 => 91,  294 => 111,  285 => 84,  283 => 106,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 77,  229 => 73,  220 => 80,  214 => 75,  177 => 63,  169 => 73,  140 => 28,  132 => 57,  128 => 58,  107 => 24,  61 => 25,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 80,  224 => 102,  221 => 78,  219 => 100,  217 => 79,  208 => 74,  204 => 73,  179 => 66,  159 => 69,  143 => 29,  135 => 35,  119 => 28,  102 => 39,  71 => 30,  67 => 27,  63 => 50,  59 => 23,  93 => 68,  88 => 12,  78 => 35,  87 => 17,  46 => 35,  38 => 17,  44 => 19,  21 => 12,  25 => 3,  94 => 42,  89 => 39,  85 => 34,  75 => 28,  68 => 30,  56 => 24,  27 => 3,  31 => 15,  26 => 14,  201 => 72,  196 => 71,  183 => 82,  171 => 63,  166 => 9,  163 => 8,  158 => 74,  156 => 67,  151 => 63,  142 => 60,  138 => 36,  136 => 48,  121 => 52,  117 => 41,  105 => 46,  91 => 27,  62 => 28,  49 => 21,  28 => 14,  24 => 13,  19 => 11,  79 => 14,  72 => 25,  69 => 24,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 90,  157 => 41,  145 => 52,  139 => 49,  131 => 48,  123 => 53,  120 => 56,  115 => 49,  111 => 33,  108 => 47,  101 => 73,  98 => 43,  96 => 41,  83 => 34,  74 => 33,  66 => 25,  55 => 21,  52 => 21,  50 => 20,  43 => 19,  41 => 18,  35 => 16,  32 => 16,  29 => 15,  209 => 95,  203 => 56,  199 => 53,  193 => 70,  189 => 71,  187 => 86,  182 => 64,  176 => 76,  173 => 62,  168 => 60,  164 => 71,  162 => 57,  154 => 66,  149 => 36,  147 => 68,  144 => 61,  141 => 66,  133 => 49,  130 => 56,  125 => 44,  122 => 44,  116 => 41,  112 => 48,  109 => 49,  106 => 40,  103 => 45,  99 => 26,  95 => 42,  92 => 19,  86 => 64,  82 => 33,  80 => 41,  73 => 29,  64 => 23,  60 => 22,  57 => 22,  54 => 18,  51 => 21,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 4,  30 => 15,);
    }
}

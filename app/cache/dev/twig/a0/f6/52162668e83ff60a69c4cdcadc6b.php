<?php

/* SonataAdminBundle:CRUD:base_list_flat_field.html.twig */
class __TwigTemplate_a0f652162668e83ff60a69c4cdcadc6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<span class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type"), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if (((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name") == "show")) ? ("VIEW") : (twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")))), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name")), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</span>
";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 176,  545 => 173,  532 => 168,  517 => 161,  513 => 160,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 123,  419 => 98,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 131,  302 => 114,  296 => 111,  205 => 59,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  687 => 178,  683 => 272,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  620 => 209,  606 => 208,  600 => 206,  589 => 201,  579 => 198,  576 => 197,  555 => 195,  552 => 194,  546 => 191,  544 => 190,  540 => 171,  537 => 178,  534 => 169,  521 => 163,  515 => 161,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 141,  448 => 139,  441 => 105,  438 => 137,  432 => 135,  426 => 102,  417 => 130,  410 => 96,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  369 => 136,  363 => 123,  354 => 119,  333 => 117,  320 => 75,  313 => 73,  287 => 64,  271 => 58,  226 => 67,  198 => 22,  172 => 52,  225 => 89,  207 => 29,  690 => 179,  676 => 262,  674 => 232,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 210,  595 => 203,  588 => 350,  581 => 199,  577 => 344,  575 => 341,  573 => 196,  567 => 337,  557 => 177,  550 => 193,  538 => 319,  531 => 312,  526 => 164,  518 => 307,  514 => 306,  509 => 159,  504 => 158,  481 => 290,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 132,  415 => 97,  346 => 196,  331 => 187,  304 => 174,  257 => 149,  213 => 86,  399 => 158,  396 => 234,  383 => 224,  366 => 156,  359 => 140,  357 => 125,  352 => 121,  348 => 136,  345 => 135,  325 => 125,  308 => 118,  276 => 102,  270 => 100,  267 => 156,  245 => 49,  239 => 94,  234 => 84,  218 => 77,  202 => 73,  167 => 60,  194 => 87,  186 => 54,  316 => 74,  299 => 112,  293 => 109,  284 => 106,  281 => 61,  279 => 104,  275 => 77,  253 => 148,  237 => 85,  232 => 136,  222 => 81,  210 => 30,  174 => 53,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 166,  516 => 161,  512 => 160,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  492 => 295,  486 => 292,  483 => 129,  473 => 150,  467 => 134,  465 => 147,  462 => 146,  456 => 142,  451 => 140,  446 => 122,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 156,  388 => 107,  377 => 82,  371 => 144,  361 => 127,  358 => 106,  349 => 103,  347 => 118,  342 => 133,  339 => 100,  336 => 113,  332 => 97,  329 => 126,  326 => 76,  324 => 116,  319 => 90,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  289 => 109,  272 => 76,  250 => 93,  233 => 62,  228 => 83,  223 => 66,  200 => 55,  191 => 273,  318 => 122,  306 => 140,  303 => 139,  300 => 113,  286 => 80,  274 => 77,  265 => 99,  263 => 57,  260 => 94,  256 => 54,  248 => 115,  242 => 140,  236 => 93,  216 => 99,  197 => 56,  192 => 55,  165 => 110,  160 => 48,  70 => 25,  344 => 97,  340 => 95,  338 => 94,  335 => 188,  321 => 183,  315 => 90,  295 => 66,  292 => 134,  288 => 108,  282 => 80,  280 => 79,  277 => 59,  259 => 55,  249 => 70,  215 => 32,  190 => 50,  184 => 47,  181 => 79,  178 => 45,  161 => 70,  124 => 31,  146 => 63,  118 => 46,  104 => 67,  100 => 43,  170 => 61,  152 => 65,  137 => 60,  153 => 48,  155 => 66,  129 => 42,  97 => 41,  58 => 22,  90 => 34,  134 => 58,  126 => 55,  114 => 89,  110 => 36,  77 => 34,  113 => 48,  20 => 11,  53 => 24,  34 => 16,  195 => 72,  188 => 68,  185 => 65,  175 => 72,  150 => 64,  148 => 44,  127 => 34,  81 => 30,  23 => 12,  84 => 36,  76 => 32,  65 => 25,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 136,  430 => 103,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 126,  393 => 125,  387 => 123,  384 => 116,  381 => 122,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 122,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 70,  298 => 173,  294 => 111,  285 => 81,  283 => 166,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 47,  229 => 73,  220 => 65,  214 => 61,  177 => 119,  169 => 51,  140 => 41,  132 => 43,  128 => 58,  107 => 46,  61 => 27,  273 => 101,  269 => 75,  254 => 91,  243 => 68,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 134,  224 => 35,  221 => 88,  219 => 33,  217 => 87,  208 => 60,  204 => 28,  179 => 171,  159 => 49,  143 => 29,  135 => 93,  119 => 31,  102 => 142,  71 => 32,  67 => 24,  63 => 20,  59 => 23,  93 => 138,  88 => 37,  78 => 29,  87 => 17,  46 => 19,  38 => 19,  44 => 21,  21 => 11,  25 => 13,  94 => 40,  89 => 39,  85 => 32,  75 => 32,  68 => 24,  56 => 25,  27 => 12,  31 => 19,  26 => 14,  201 => 57,  196 => 71,  183 => 74,  171 => 102,  166 => 50,  163 => 49,  158 => 67,  156 => 93,  151 => 45,  142 => 42,  138 => 94,  136 => 39,  121 => 75,  117 => 49,  105 => 45,  91 => 75,  62 => 24,  49 => 20,  28 => 22,  24 => 13,  19 => 11,  79 => 34,  72 => 31,  69 => 30,  47 => 25,  40 => 15,  37 => 21,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 59,  131 => 48,  123 => 52,  120 => 47,  115 => 45,  111 => 40,  108 => 144,  101 => 37,  98 => 140,  96 => 139,  83 => 64,  74 => 33,  66 => 30,  55 => 21,  52 => 20,  50 => 23,  43 => 16,  41 => 23,  35 => 20,  32 => 15,  29 => 13,  209 => 95,  203 => 82,  199 => 80,  193 => 70,  189 => 177,  187 => 75,  182 => 172,  176 => 76,  173 => 62,  168 => 60,  164 => 71,  162 => 57,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 95,  133 => 49,  130 => 35,  125 => 40,  122 => 44,  116 => 30,  112 => 48,  109 => 44,  106 => 35,  103 => 38,  99 => 42,  95 => 42,  92 => 61,  86 => 65,  82 => 36,  80 => 35,  73 => 27,  64 => 28,  60 => 19,  57 => 18,  54 => 25,  51 => 16,  48 => 15,  45 => 14,  42 => 16,  39 => 25,  36 => 17,  33 => 13,  30 => 15,);
    }
}

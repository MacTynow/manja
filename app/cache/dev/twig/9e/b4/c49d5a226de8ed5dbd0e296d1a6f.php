<?php

/* SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig */
class __TwigTemplate_9eb4c49d5a226de8ed5dbd0e296d1a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "has", array(0 => "batch"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest")))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "elements")) - ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "has", array(0 => "_action"), "method") && (!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "isXmlHttpRequest")))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\">
        ";
            // line 24
            echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "_action", array(), "array"));
            echo "
    </td>
";
        }
    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  687 => 178,  683 => 272,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  620 => 209,  606 => 208,  600 => 206,  589 => 201,  579 => 198,  576 => 197,  555 => 195,  552 => 194,  546 => 191,  544 => 190,  540 => 188,  537 => 178,  534 => 177,  521 => 163,  515 => 161,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 141,  448 => 139,  441 => 138,  438 => 137,  432 => 135,  426 => 134,  417 => 130,  410 => 129,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  369 => 157,  363 => 123,  354 => 119,  333 => 112,  320 => 75,  313 => 73,  287 => 64,  271 => 58,  226 => 36,  198 => 22,  172 => 112,  225 => 89,  207 => 29,  690 => 179,  676 => 262,  674 => 232,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 210,  595 => 203,  588 => 350,  581 => 199,  577 => 344,  575 => 341,  573 => 196,  567 => 337,  557 => 330,  550 => 193,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 159,  504 => 302,  481 => 290,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 132,  415 => 247,  346 => 196,  331 => 187,  304 => 174,  257 => 149,  213 => 86,  399 => 158,  396 => 234,  383 => 224,  366 => 156,  359 => 140,  357 => 120,  352 => 138,  348 => 136,  345 => 135,  325 => 125,  308 => 118,  276 => 102,  270 => 100,  267 => 156,  245 => 49,  239 => 94,  234 => 84,  218 => 77,  202 => 73,  167 => 60,  194 => 87,  186 => 111,  316 => 74,  299 => 112,  293 => 109,  284 => 106,  281 => 61,  279 => 104,  275 => 103,  253 => 148,  237 => 85,  232 => 136,  222 => 81,  210 => 30,  174 => 118,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 166,  516 => 161,  512 => 160,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 295,  486 => 292,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  456 => 142,  451 => 140,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 156,  388 => 117,  377 => 147,  371 => 144,  361 => 122,  358 => 106,  349 => 103,  347 => 115,  342 => 133,  339 => 100,  336 => 113,  332 => 97,  329 => 126,  326 => 76,  324 => 92,  319 => 90,  311 => 89,  307 => 71,  297 => 84,  291 => 65,  289 => 109,  272 => 158,  250 => 93,  233 => 62,  228 => 83,  223 => 58,  200 => 55,  191 => 273,  318 => 122,  306 => 140,  303 => 139,  300 => 68,  286 => 80,  274 => 77,  265 => 99,  263 => 57,  260 => 94,  256 => 54,  248 => 115,  242 => 140,  236 => 93,  216 => 99,  197 => 79,  192 => 87,  165 => 110,  160 => 68,  70 => 25,  344 => 97,  340 => 95,  338 => 94,  335 => 188,  321 => 183,  315 => 90,  295 => 66,  292 => 134,  288 => 107,  282 => 79,  280 => 130,  277 => 59,  259 => 55,  249 => 50,  215 => 32,  190 => 50,  184 => 47,  181 => 79,  178 => 45,  161 => 70,  124 => 31,  146 => 63,  118 => 46,  104 => 67,  100 => 40,  170 => 61,  152 => 65,  137 => 60,  153 => 48,  155 => 66,  129 => 42,  97 => 41,  58 => 22,  90 => 34,  134 => 58,  126 => 55,  114 => 89,  110 => 36,  77 => 34,  113 => 37,  20 => 11,  53 => 20,  34 => 17,  195 => 72,  188 => 68,  185 => 65,  175 => 72,  150 => 64,  148 => 63,  127 => 76,  81 => 16,  23 => 12,  84 => 38,  76 => 32,  65 => 29,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 136,  430 => 137,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 128,  402 => 130,  398 => 126,  393 => 125,  387 => 123,  384 => 116,  381 => 122,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 105,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 70,  298 => 173,  294 => 111,  285 => 84,  283 => 166,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 47,  229 => 73,  220 => 80,  214 => 75,  177 => 119,  169 => 71,  140 => 44,  132 => 43,  128 => 58,  107 => 24,  61 => 28,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 134,  224 => 35,  221 => 88,  219 => 33,  217 => 87,  208 => 124,  204 => 28,  179 => 171,  159 => 49,  143 => 29,  135 => 93,  119 => 39,  102 => 43,  71 => 32,  67 => 24,  63 => 29,  59 => 23,  93 => 68,  88 => 38,  78 => 26,  87 => 17,  46 => 22,  38 => 19,  44 => 17,  21 => 12,  25 => 13,  94 => 40,  89 => 39,  85 => 32,  75 => 34,  68 => 30,  56 => 21,  27 => 12,  31 => 16,  26 => 14,  201 => 72,  196 => 71,  183 => 74,  171 => 102,  166 => 70,  163 => 109,  158 => 67,  156 => 93,  151 => 99,  142 => 60,  138 => 94,  136 => 58,  121 => 75,  117 => 47,  105 => 44,  91 => 39,  62 => 24,  49 => 23,  28 => 14,  24 => 13,  19 => 11,  79 => 31,  72 => 25,  69 => 31,  47 => 22,  40 => 15,  37 => 18,  22 => 12,  246 => 90,  157 => 41,  145 => 60,  139 => 59,  131 => 48,  123 => 48,  120 => 47,  115 => 45,  111 => 40,  108 => 45,  101 => 37,  98 => 36,  96 => 19,  83 => 36,  74 => 33,  66 => 30,  55 => 25,  52 => 24,  50 => 19,  43 => 20,  41 => 19,  35 => 22,  32 => 16,  29 => 15,  209 => 95,  203 => 82,  199 => 80,  193 => 70,  189 => 177,  187 => 75,  182 => 172,  176 => 76,  173 => 62,  168 => 60,  164 => 71,  162 => 57,  154 => 66,  149 => 62,  147 => 46,  144 => 45,  141 => 95,  133 => 49,  130 => 57,  125 => 40,  122 => 44,  116 => 41,  112 => 48,  109 => 44,  106 => 35,  103 => 38,  99 => 42,  95 => 42,  92 => 61,  86 => 37,  82 => 36,  80 => 35,  73 => 24,  64 => 28,  60 => 19,  57 => 27,  54 => 25,  51 => 24,  48 => 19,  45 => 18,  42 => 16,  39 => 15,  36 => 14,  33 => 13,  30 => 15,);
    }
}
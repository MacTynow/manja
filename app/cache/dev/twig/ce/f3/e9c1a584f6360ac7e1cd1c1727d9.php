<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_cef3e9c1a584f6360ac7e1cd1c1727d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 19
        echo "    </div>
";
    }

    // line 22
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"sonata-ba-delete\">

        <h1>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "

        <div class=\"well well-small form-actions\">
            <form method=\"POST\" action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                <button type=\"submit\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                ";
        // line 37
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 38
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                    <a class=\"btn btn-success\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                        <i class=\"icon-white icon-edit\"></i>
                        ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 44
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 100,  343 => 91,  330 => 87,  327 => 86,  310 => 81,  262 => 63,  180 => 104,  12 => 34,  553 => 176,  545 => 173,  532 => 168,  517 => 161,  513 => 160,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 123,  419 => 98,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 83,  367 => 99,  302 => 78,  296 => 76,  205 => 59,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  687 => 178,  683 => 272,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  620 => 209,  606 => 208,  600 => 206,  589 => 201,  579 => 198,  576 => 197,  555 => 195,  552 => 194,  546 => 191,  544 => 190,  540 => 171,  537 => 178,  534 => 169,  521 => 163,  515 => 161,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 141,  448 => 139,  441 => 105,  438 => 137,  432 => 135,  426 => 102,  417 => 130,  410 => 96,  401 => 127,  390 => 124,  375 => 168,  373 => 159,  369 => 136,  363 => 123,  354 => 119,  333 => 117,  320 => 84,  313 => 82,  287 => 72,  271 => 66,  226 => 67,  198 => 22,  172 => 52,  225 => 89,  207 => 29,  690 => 179,  676 => 262,  674 => 232,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 210,  595 => 203,  588 => 350,  581 => 199,  577 => 344,  575 => 341,  573 => 196,  567 => 337,  557 => 177,  550 => 193,  538 => 319,  531 => 312,  526 => 164,  518 => 307,  514 => 306,  509 => 159,  504 => 158,  481 => 290,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 132,  415 => 97,  346 => 92,  331 => 187,  304 => 79,  257 => 61,  213 => 86,  399 => 158,  396 => 234,  383 => 224,  366 => 156,  359 => 140,  357 => 125,  352 => 94,  348 => 136,  345 => 135,  325 => 125,  308 => 118,  276 => 102,  270 => 100,  267 => 156,  245 => 49,  239 => 94,  234 => 84,  218 => 77,  202 => 73,  167 => 60,  194 => 87,  186 => 54,  316 => 74,  299 => 112,  293 => 75,  284 => 106,  281 => 61,  279 => 104,  275 => 77,  253 => 148,  237 => 85,  232 => 136,  222 => 81,  210 => 30,  174 => 60,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 166,  516 => 161,  512 => 160,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  492 => 295,  486 => 292,  483 => 129,  473 => 150,  467 => 134,  465 => 147,  462 => 146,  456 => 142,  451 => 140,  446 => 122,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 156,  388 => 107,  377 => 82,  371 => 144,  361 => 97,  358 => 106,  349 => 103,  347 => 118,  342 => 133,  339 => 100,  336 => 113,  332 => 88,  329 => 126,  326 => 76,  324 => 116,  319 => 90,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  289 => 109,  272 => 76,  250 => 93,  233 => 62,  228 => 83,  223 => 27,  200 => 55,  191 => 273,  318 => 122,  306 => 140,  303 => 139,  300 => 113,  286 => 80,  274 => 77,  265 => 64,  263 => 57,  260 => 62,  256 => 54,  248 => 115,  242 => 140,  236 => 93,  216 => 25,  197 => 56,  192 => 23,  165 => 110,  160 => 52,  70 => 25,  344 => 97,  340 => 90,  338 => 94,  335 => 188,  321 => 183,  315 => 83,  295 => 66,  292 => 134,  288 => 108,  282 => 80,  280 => 69,  277 => 68,  259 => 55,  249 => 55,  215 => 32,  190 => 50,  184 => 47,  181 => 79,  178 => 45,  161 => 70,  124 => 43,  146 => 63,  118 => 46,  104 => 67,  100 => 42,  170 => 61,  152 => 65,  137 => 47,  153 => 48,  155 => 66,  129 => 42,  97 => 37,  58 => 22,  90 => 34,  134 => 58,  126 => 55,  114 => 46,  110 => 41,  77 => 30,  113 => 42,  20 => 11,  53 => 24,  34 => 16,  195 => 72,  188 => 21,  185 => 20,  175 => 72,  150 => 64,  148 => 44,  127 => 34,  81 => 36,  23 => 1,  84 => 36,  76 => 34,  65 => 29,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 136,  430 => 103,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 126,  393 => 125,  387 => 123,  384 => 116,  381 => 122,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 95,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 70,  298 => 173,  294 => 111,  285 => 81,  283 => 70,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 73,  220 => 65,  214 => 61,  177 => 119,  169 => 58,  140 => 41,  132 => 44,  128 => 47,  107 => 40,  61 => 27,  273 => 101,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 134,  224 => 35,  221 => 88,  219 => 33,  217 => 87,  208 => 60,  204 => 28,  179 => 171,  159 => 49,  143 => 48,  135 => 93,  119 => 44,  102 => 39,  71 => 32,  67 => 31,  63 => 30,  59 => 29,  93 => 40,  88 => 32,  78 => 36,  87 => 38,  46 => 9,  38 => 18,  44 => 20,  21 => 11,  25 => 12,  94 => 40,  89 => 34,  85 => 37,  75 => 21,  68 => 27,  56 => 25,  27 => 14,  31 => 15,  26 => 13,  201 => 57,  196 => 71,  183 => 74,  171 => 102,  166 => 57,  163 => 49,  158 => 67,  156 => 93,  151 => 45,  142 => 42,  138 => 94,  136 => 39,  121 => 42,  117 => 49,  105 => 45,  91 => 75,  62 => 30,  49 => 23,  28 => 14,  24 => 13,  19 => 11,  79 => 33,  72 => 19,  69 => 19,  47 => 22,  40 => 24,  37 => 23,  22 => 11,  246 => 54,  157 => 47,  145 => 53,  139 => 51,  131 => 48,  123 => 52,  120 => 47,  115 => 40,  111 => 41,  108 => 144,  101 => 37,  98 => 42,  96 => 139,  83 => 32,  74 => 29,  66 => 26,  55 => 24,  52 => 24,  50 => 21,  43 => 26,  41 => 19,  35 => 17,  32 => 14,  29 => 15,  209 => 24,  203 => 82,  199 => 80,  193 => 70,  189 => 177,  187 => 75,  182 => 172,  176 => 102,  173 => 62,  168 => 60,  164 => 54,  162 => 57,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 95,  133 => 49,  130 => 35,  125 => 46,  122 => 45,  116 => 43,  112 => 48,  109 => 44,  106 => 35,  103 => 44,  99 => 42,  95 => 37,  92 => 35,  86 => 33,  82 => 23,  80 => 25,  73 => 27,  64 => 31,  60 => 27,  57 => 15,  54 => 26,  51 => 14,  48 => 15,  45 => 26,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}

<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_f4d6a31c60d3bd9500b55d61371c7d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : $this->getContext($context, "changedEntity")), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  690 => 410,  676 => 401,  674 => 397,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 330,  550 => 326,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  481 => 290,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  346 => 196,  331 => 187,  304 => 174,  257 => 149,  213 => 126,  399 => 158,  396 => 234,  383 => 224,  366 => 210,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 135,  325 => 125,  308 => 118,  276 => 102,  270 => 100,  267 => 156,  245 => 88,  239 => 86,  234 => 84,  218 => 77,  202 => 73,  167 => 60,  194 => 87,  186 => 111,  316 => 121,  299 => 112,  293 => 109,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  253 => 148,  237 => 85,  232 => 136,  222 => 81,  210 => 75,  174 => 64,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 404,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  492 => 295,  486 => 292,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  456 => 273,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 156,  388 => 117,  377 => 147,  371 => 144,  361 => 208,  358 => 106,  349 => 103,  347 => 102,  342 => 133,  339 => 100,  336 => 99,  332 => 97,  329 => 126,  326 => 185,  324 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  291 => 169,  289 => 109,  272 => 158,  250 => 93,  233 => 62,  228 => 83,  223 => 58,  200 => 55,  191 => 69,  318 => 122,  306 => 140,  303 => 139,  300 => 138,  286 => 80,  274 => 77,  265 => 99,  263 => 71,  260 => 94,  256 => 96,  248 => 115,  242 => 140,  236 => 63,  216 => 99,  197 => 119,  192 => 87,  165 => 71,  160 => 69,  70 => 33,  344 => 97,  340 => 95,  338 => 94,  335 => 188,  321 => 183,  315 => 90,  295 => 88,  292 => 134,  288 => 107,  282 => 79,  280 => 130,  277 => 78,  259 => 70,  249 => 89,  215 => 78,  190 => 50,  184 => 47,  181 => 79,  178 => 45,  161 => 70,  124 => 31,  146 => 34,  118 => 28,  104 => 67,  100 => 36,  170 => 61,  152 => 92,  137 => 58,  153 => 56,  155 => 55,  129 => 56,  97 => 63,  58 => 23,  90 => 34,  134 => 58,  126 => 47,  114 => 71,  110 => 47,  77 => 27,  113 => 41,  20 => 23,  53 => 80,  34 => 16,  195 => 72,  188 => 68,  185 => 65,  175 => 76,  150 => 64,  148 => 63,  127 => 76,  81 => 25,  23 => 18,  84 => 38,  76 => 57,  65 => 29,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 119,  393 => 126,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 84,  283 => 166,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 77,  229 => 73,  220 => 80,  214 => 75,  177 => 63,  169 => 73,  140 => 28,  132 => 57,  128 => 58,  107 => 24,  61 => 25,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 134,  224 => 102,  221 => 78,  219 => 129,  217 => 79,  208 => 124,  204 => 73,  179 => 107,  159 => 69,  143 => 29,  135 => 81,  119 => 28,  102 => 39,  71 => 30,  67 => 27,  63 => 50,  59 => 23,  93 => 68,  88 => 60,  78 => 53,  87 => 17,  46 => 35,  38 => 17,  44 => 19,  21 => 12,  25 => 3,  94 => 42,  89 => 39,  85 => 30,  75 => 28,  68 => 30,  56 => 40,  27 => 3,  31 => 14,  26 => 20,  201 => 72,  196 => 71,  183 => 82,  171 => 102,  166 => 100,  163 => 8,  158 => 74,  156 => 93,  151 => 63,  142 => 60,  138 => 36,  136 => 48,  121 => 75,  117 => 41,  105 => 46,  91 => 27,  62 => 24,  49 => 21,  28 => 13,  24 => 13,  19 => 11,  79 => 14,  72 => 25,  69 => 50,  47 => 19,  40 => 18,  37 => 17,  22 => 12,  246 => 90,  157 => 41,  145 => 52,  139 => 49,  131 => 48,  123 => 53,  120 => 56,  115 => 49,  111 => 33,  108 => 47,  101 => 73,  98 => 43,  96 => 41,  83 => 34,  74 => 52,  66 => 25,  55 => 22,  52 => 21,  50 => 20,  43 => 33,  41 => 18,  35 => 16,  32 => 16,  29 => 21,  209 => 95,  203 => 122,  199 => 53,  193 => 70,  189 => 71,  187 => 86,  182 => 64,  176 => 76,  173 => 62,  168 => 60,  164 => 71,  162 => 57,  154 => 66,  149 => 36,  147 => 90,  144 => 61,  141 => 66,  133 => 49,  130 => 56,  125 => 44,  122 => 44,  116 => 41,  112 => 48,  109 => 69,  106 => 40,  103 => 45,  99 => 26,  95 => 42,  92 => 61,  86 => 64,  82 => 33,  80 => 41,  73 => 29,  64 => 23,  60 => 22,  57 => 22,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 4,  30 => 15,);
    }
}

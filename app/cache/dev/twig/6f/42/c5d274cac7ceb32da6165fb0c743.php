<?php

/* ManjaSourcingBundle:Sourcing:add_chain.html.twig */
class __TwigTemplate_6f42c5d274cac7ceb32da6165fb0c743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ManjaSourcingBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ManjaSourcingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Add a chain - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h2>Add a chain</h2>
    
    ";
        // line 10
        $this->env->loadTemplate("ManjaSourcingBundle:Sourcing:form.html.twig")->display($context);
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "ManjaSourcingBundle:Sourcing:add_chain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 59,  118 => 45,  104 => 43,  100 => 42,  170 => 63,  152 => 62,  137 => 55,  153 => 64,  155 => 64,  129 => 48,  97 => 42,  58 => 20,  90 => 38,  134 => 51,  126 => 47,  114 => 47,  110 => 46,  77 => 33,  113 => 50,  20 => 23,  53 => 30,  34 => 4,  195 => 72,  188 => 16,  185 => 15,  175 => 11,  150 => 74,  148 => 72,  127 => 53,  81 => 35,  23 => 24,  84 => 34,  76 => 30,  65 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 59,  132 => 63,  128 => 49,  107 => 53,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 12,  159 => 64,  143 => 56,  135 => 53,  119 => 47,  102 => 39,  71 => 30,  67 => 15,  63 => 15,  59 => 21,  93 => 36,  88 => 6,  78 => 30,  87 => 38,  46 => 10,  38 => 8,  44 => 9,  21 => 2,  25 => 3,  94 => 42,  89 => 35,  85 => 34,  75 => 31,  68 => 27,  56 => 9,  27 => 5,  31 => 4,  26 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 10,  166 => 9,  163 => 8,  158 => 67,  156 => 66,  151 => 63,  142 => 56,  138 => 58,  136 => 56,  121 => 52,  117 => 51,  105 => 48,  91 => 27,  62 => 35,  49 => 12,  28 => 3,  24 => 7,  19 => 2,  79 => 33,  72 => 28,  69 => 28,  47 => 9,  40 => 15,  37 => 8,  22 => 3,  246 => 90,  157 => 59,  145 => 68,  139 => 57,  131 => 52,  123 => 47,  120 => 39,  115 => 51,  111 => 33,  108 => 44,  101 => 43,  98 => 46,  96 => 41,  83 => 34,  74 => 14,  66 => 15,  55 => 16,  52 => 13,  50 => 12,  43 => 12,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 60,  154 => 58,  149 => 51,  147 => 57,  144 => 49,  141 => 48,  133 => 49,  130 => 50,  125 => 53,  122 => 46,  116 => 41,  112 => 43,  109 => 49,  106 => 45,  103 => 52,  99 => 51,  95 => 42,  92 => 40,  86 => 37,  82 => 33,  80 => 34,  73 => 32,  64 => 24,  60 => 20,  57 => 32,  54 => 10,  51 => 13,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 27,  33 => 4,  30 => 2,);
    }
}

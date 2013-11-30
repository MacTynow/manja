<?php

/* ManjaSourcingBundle:Sourcing:accessorie_piece.html.twig */
class __TwigTemplate_ad0a0b469ef128654de55740bb007a66 extends Twig_Template
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
        echo "    Accessories Piece - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("manja_sourcing_add", array("data" => "accessorie_piece"));
        echo "\" class=\"btn\">Add accessorie</a>

    <hr/>

    ";
        // line 12
        $this->env->loadTemplate("ManjaSourcingBundle:Sourcing:sourcing_list.html.twig")->display($context);
        // line 13
        echo "
    <table id=\"table1\" class=\"table table-bordered table-striped table-condensed\">
    <thead>
        <tr>
            <th>id</th>
            <th>Type</th>
            <th>Name</th>
            <th>Base Material</th>
            <th>Finish</th>
            <th>Shape</th>
            <th>Sizes</th>
            <th>Price /lot</th>            
            <th>Price /piece</th>            
            <th>Price /gram</th>            
            <th>Supplier</th>            
        </tr>
    </thead>
    <tbody>
    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "        <tr
            <td>
            <div class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getIdSrcAccPiece", array(), "method"), "html", null, true);
            echo " <span class=\"caret\"></span> </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Edit</a></li>
                    <li><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manja_sourcing_remove", array("category" => "accessorie", "id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getIdSrcAccPiece", array(), "method"))), "html", null, true);
            echo "\">Delete</a></li>
                </ul>
            </div>
            </td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getType", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getName", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getBaseMaterial", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getFinish", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getShape", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getSize1", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getSize2", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getSize3", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getSizeSection", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getPriceLot", array(), "method"), "getPrice", array(), "method"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getPieceLot", array(), "method"), "html", null, true);
            echo ")</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getPricePiece", array(), "method"), "getPrice", array(), "method"), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getPriceGram", array(), "method"), "getPrice", array(), "method"), "html", null, true);
            echo "</td>
            <td>
            <div class=\"modal hide fade\" id=\"infos\">
                <div class=\"modal-header\"> <a class=\"close\" data-dismiss=\"modal\">×</a>
                    <h3>Details</h3>
                </div>
                <div class=\"modal-body\">
                </div>
                <div class=\"modal-footer\"> <a class=\"btn btn-info\" data-dismiss=\"modal\">Close</a> </div>
            </div>
            <a data-toggle=\"modal\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("manja_sourcing_item_sheet", array("category" => "supplier", "id" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getFurnisher", array(), "method"), "getIdsupplier", array(), "method"))), "html", null, true);
            echo "\" data-target=\"#infos\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getFurnisher", array(), "method"), "getCompany", array(), "method"), "html", null, true);
            echo "</a>
            </td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </tbody> 
    </table>
 ";
    }

    public function getTemplateName()
    {
        return "ManjaSourcingBundle:Sourcing:accessorie_piece.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 59,  118 => 45,  104 => 43,  100 => 42,  170 => 63,  152 => 62,  137 => 55,  153 => 64,  155 => 64,  129 => 48,  97 => 42,  58 => 20,  90 => 38,  134 => 51,  126 => 47,  114 => 47,  110 => 46,  77 => 33,  113 => 46,  20 => 23,  53 => 30,  34 => 4,  195 => 72,  188 => 16,  185 => 15,  175 => 11,  150 => 74,  148 => 72,  127 => 53,  81 => 35,  23 => 24,  84 => 34,  76 => 32,  65 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 59,  132 => 51,  128 => 49,  107 => 53,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 12,  159 => 64,  143 => 56,  135 => 53,  119 => 47,  102 => 44,  71 => 30,  67 => 15,  63 => 15,  59 => 21,  93 => 41,  88 => 6,  78 => 21,  87 => 38,  46 => 10,  38 => 8,  44 => 12,  21 => 2,  25 => 3,  94 => 42,  89 => 39,  85 => 36,  75 => 31,  68 => 26,  56 => 9,  27 => 5,  31 => 4,  26 => 12,  201 => 92,  196 => 90,  183 => 82,  171 => 10,  166 => 9,  163 => 8,  158 => 67,  156 => 66,  151 => 63,  142 => 56,  138 => 58,  136 => 56,  121 => 52,  117 => 44,  105 => 44,  91 => 27,  62 => 35,  49 => 19,  28 => 3,  24 => 7,  19 => 2,  79 => 33,  72 => 31,  69 => 28,  47 => 9,  40 => 15,  37 => 8,  22 => 2,  246 => 90,  157 => 59,  145 => 46,  139 => 57,  131 => 52,  123 => 47,  120 => 39,  115 => 51,  111 => 33,  108 => 44,  101 => 43,  98 => 45,  96 => 41,  83 => 34,  74 => 14,  66 => 15,  55 => 16,  52 => 13,  50 => 12,  43 => 12,  41 => 7,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 60,  154 => 58,  149 => 51,  147 => 57,  144 => 49,  141 => 48,  133 => 49,  130 => 50,  125 => 53,  122 => 46,  116 => 41,  112 => 43,  109 => 45,  106 => 45,  103 => 52,  99 => 51,  95 => 42,  92 => 40,  86 => 37,  82 => 32,  80 => 34,  73 => 32,  64 => 22,  60 => 20,  57 => 32,  54 => 10,  51 => 16,  48 => 11,  45 => 17,  42 => 8,  39 => 7,  36 => 27,  33 => 4,  30 => 2,);
    }
}
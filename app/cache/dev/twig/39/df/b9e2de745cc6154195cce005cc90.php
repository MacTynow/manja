<?php

/* ::layout.html.twig */
class __TwigTemplate_39dfb9e2de745cc6154195cce005cc90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
        ";
        // line 15
        $this->displayBlock('javascript', $context, $blocks);
        // line 20
        echo "    </head>
   
   
    
    
<body> 
<div class=\"sonata-bc\">
<div class=\"container-fluid\">

<div class=\"row-fluid\">
<div class=\"span12\">   
<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        ";
        // line 33
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 34
            echo "            <ul class=\"nav\">
            <li><a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_homepage");
            echo "\">Home</a></li>
            <li class=\"dropdown\"> <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Sourcing<b class=\"caret\"></b> </a>
                <ul class=\"dropdown-menu\">
                    ";
            // line 39
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_list", array("data" => "supplier"));
            echo "\">Suppliers</a></li>
                    <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_list", array("data" => "contact"));
            echo "\">Contacts</a></li>
                    <li class=\"divider\"></li>
                    <li class=\"dropdown-submenu\">
                        <a href=\"\">Accessories</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_list", array("data" => "accessorie_length"));
            echo "\">Length</a></li>
                            <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_list", array("data" => "accessorie_piece"));
            echo "\">Piece</a></li>
                        </ul>
                    </li>
                    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_list", array("data" => "chain"));
            echo "\">Chains</a></li>
                    <li><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_list", array("data" => "diamond"));
            echo "\">Diamonds</a></li>
                    <li><a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_list", array("data" => "finding"));
            echo "\">Findings</a></li>
                    <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_list", array("data" => "metal"));
            echo "\">Metal</a></li>
                    <li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_list", array("data" => "pearl"));
            echo "\">Pearls</a></li>
                    <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_list", array("data" => "stone"));
            echo "\">Stones</a></li>
                    <li><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("manja_sourcing_list", array("data" => "stone_variety"));
            echo "\">Stone Variety</a></li>
                </ul>
            <li><a href=\"#\">Stock</a></li>
            </ul>
            <span class=\"login-blurb\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " - </span>
            <ul class=\"nav pull-right\">
                <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a></li>
            </ul>
        ";
        } else {
            // line 64
            echo "            <ul class=\"nav\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></ul>
        ";
        }
        // line 65
        echo " 
    </div>
</div>
</div>
</div>
</div>

";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "</div>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo " Manja Thai ";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/DataTables/media/css/jquery.dataTables.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/manjasourcing/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 15
    public function block_javascript($context, array $blocks = array())
    {
        // line 16
        echo "            <script type=\"text/javascript\" language=\"javascript\" src=\"/Symfony/web/js/DataTables/media/js/jquery.js\"></script>
            <script type=\"text/javascript\" language=\"javascript\" src=\"/Symfony/web/js/DataTables/media/js/jquery.dataTables.js\"></script>
            <script src=\"/Symfony/web/bootstrap/js/bootstrap.min.js \"></script>
        ";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 72,  188 => 16,  185 => 15,  175 => 11,  150 => 74,  148 => 72,  127 => 61,  81 => 45,  23 => 1,  84 => 34,  76 => 29,  65 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 53,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 12,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 16,  67 => 15,  63 => 15,  59 => 34,  93 => 28,  88 => 6,  78 => 21,  87 => 25,  46 => 11,  38 => 6,  44 => 12,  21 => 2,  25 => 3,  94 => 28,  89 => 20,  85 => 46,  75 => 17,  68 => 39,  56 => 9,  27 => 4,  31 => 6,  26 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 10,  166 => 9,  163 => 8,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 49,  62 => 35,  49 => 19,  28 => 5,  24 => 4,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 15,  37 => 14,  22 => 1,  246 => 90,  157 => 6,  145 => 46,  139 => 65,  131 => 52,  123 => 47,  120 => 40,  115 => 55,  111 => 54,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 14,  50 => 10,  43 => 8,  41 => 9,  35 => 8,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 64,  130 => 41,  125 => 44,  122 => 59,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 52,  99 => 51,  95 => 50,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 40,  64 => 17,  60 => 6,  57 => 33,  54 => 10,  51 => 9,  48 => 13,  45 => 17,  42 => 20,  39 => 9,  36 => 5,  33 => 7,  30 => 6,);
    }
}

<?php

/* WebProfilerBundle:Collector:config.html.twig */
class __TwigTemplate_ca8bb7e3fc8736fa6ca863e352bbdeda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <a href=\"http://symfony.com/\">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\">
            <span>
                ";
        // line 9
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname")) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion"), "html", null, true);
            echo "
                ";
        } else {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
            echo "
                ";
        }
        // line 14
        echo "            </span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname")) {
            // line 19
            echo "            <div class=\"sf-toolbar-info-piece\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname"), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion"), "html", null, true);
            echo "</b>
            </div>
        ";
        }
        // line 23
        echo "        <div class=\"sf-toolbar-info-piece\">
            Symfony <b>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
        echo "</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <a href=\"http://symfony.com/doc/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
        echo "/index.html\" rel=\"help\">Symfony Documentation</a>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">
            <img width=\"26\" height=\"28\" alt=\"PHP\" src=\"data:image/png;base64,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\">
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "    ";
        ob_start();
        // line 39
        echo "        ";
        ob_start();
        // line 40
        echo "            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP</b>
                <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 46
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug")) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 47
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator")) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sapiName"), "html", null, true);
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 54
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 55
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 56
        echo "
    ";
        // line 58
        echo "    ";
        ob_start();
        echo "sf-toolbar-status sf-toolbar-status-";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug")) ? ("green") : ("red"));
        $context["debug_status_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "    ";
        ob_start();
        // line 60
        echo "        <img width=\"21\" height=\"28\" alt=\"Environment\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAZlBMVEX///////////////////////////////////////////////////////////////////////////////////////////+ZmZmZmZlISEhJSUmdnZ1HR0fR0dFZWVlpaWlfX18/Pz+puygPAAAAIXRSTlMACwwlJygpLzIzNjs8QEtMUmd6e32AucDBw8fIydTm6u5l8MjvAAAAo0lEQVR42r2P2Q6CMBBFL6XsZRGRfZv//0nbDBNEE19MnJeTc5ILKf58ahiUwzy/AJpIWwREwQnEXRdbGCLjrO+djWRvVMiJcigxB7viGogxDdJpSmHEmCVPS7YczJvgUu+CS30IvtbNYZMvsGVo2mVpG/kbm4auiCpdcC3YPCAhSpAdUzaAn6qPKZtUT6ZSzb4bi2hdo9MQ1nX4ASjfV+/4/Z40pyCHrNTbIgAAAABJRU5ErkJggg==\">
        <span class=\"sf-toolbar-info-piece-additional-detail ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
        echo "\"> </span>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "</span>
        ";
        // line 63
        if ((("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname")) || ("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env")))) {
            // line 64
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-info-with-delimiter\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"), "html", null, true);
            echo "</span>
                <span>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 69
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 70
        echo "    ";
        ob_start();
        // line 71
        echo "        ";
        ob_start();
        // line 72
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"))) {
            // line 73
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Name</b>
                    <span>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 78
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"))) {
            // line 79
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 84
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug"))) {
            // line 85
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
            echo "\">";
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug")) ? ("en") : ("dis"));
            echo "abled</span>
                </div>
            ";
        }
        // line 90
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token</b>
                <span>
                    ";
        // line 93
        if ((isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))) {
            // line 94
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token"), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 96
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token"), "html", null, true);
            echo "
                    ";
        }
        // line 98
        echo "                </span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 101
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 102
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 105
    public function block_menu($context, array $blocks = array())
    {
        // line 106
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAZlBMVEX///////////////////////////////////////////////////////////////////////////////////////////+ZmZmZmZlISEhJSUmdnZ1HR0fR0dFZWVlpaWlfX18/Pz+puygPAAAAIXRSTlMACwwlJygpLzIzNjs8QEtMUmd6e32AucDBw8fIydTm6u5l8MjvAAAAo0lEQVR42r2P2Q6CMBBFL6XsZRGRfZv//0nbDBNEE19MnJeTc5ILKf58ahiUwzy/AJpIWwREwQnEXRdbGCLjrO+djWRvVMiJcigxB7viGogxDdJpSmHEmCVPS7YczJvgUu+CS30IvtbNYZMvsGVo2mVpG/kbm4auiCpdcC3YPCAhSpAdUzaAn6qPKZtUT6ZSzb4bi2hdo9MQ1nX4ASjfV+/4/Z40pyCHrNTbIgAAAABJRU5ErkJggg==\" alt=\"Configuration\"></span>
    <strong>Config</strong>
</span>
";
    }

    // line 112
    public function block_panel($context, array $blocks = array())
    {
        // line 113
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            ";
        // line 120
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname")) {
            // line 121
            echo "                <th>Application</th>
                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion"), "html", null, true);
            echo " (on Symfony ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
            echo ")</td>
            ";
        } else {
            // line 124
            echo "                <th>Symfony version</th>
                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
            echo "</td>
            ";
        }
        // line 127
        echo "        </tr>
        ";
        // line 128
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"))) {
            // line 129
            echo "            <tr>
                <th>Application name</th>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 134
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"))) {
            // line 135
            echo "            <tr>
                <th>Environment</th>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 140
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug"))) {
            // line 141
            echo "            <tr>
                <th>Debug</th>
                <td>";
            // line 143
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug")) ? ("enabled") : ("disabled"));
            echo "</td>
            </tr>
        ";
        }
        // line 146
        echo "    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 160
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 164
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 168
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxcache")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 172
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasapc")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Zend OPcache</th>
            <td>";
        // line 176
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haszendopcache")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 180
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haseaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Full PHP configuration</th>
            <td><a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\"><code>phpinfo</code></a></td>
        </tr>
    </table>

    ";
        // line 188
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles")) {
            // line 189
            echo "        <h2>Active bundles</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
            ";
            // line 195
            $context["bundles"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles");
            // line 196
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 197
                echo "            <tr>
                <th>";
                // line 198
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "</th>
                <td>";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 189,  408 => 176,  351 => 141,  323 => 128,  370 => 100,  343 => 91,  330 => 87,  327 => 86,  310 => 81,  262 => 98,  180 => 104,  12 => 34,  553 => 176,  545 => 173,  532 => 168,  517 => 161,  513 => 160,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 198,  419 => 98,  395 => 84,  392 => 83,  386 => 95,  382 => 93,  380 => 160,  367 => 99,  302 => 78,  296 => 76,  205 => 59,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 187,  717 => 186,  708 => 183,  703 => 182,  698 => 181,  695 => 180,  687 => 178,  683 => 272,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 225,  651 => 222,  645 => 219,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  620 => 209,  606 => 208,  600 => 206,  589 => 201,  579 => 198,  576 => 197,  555 => 195,  552 => 194,  546 => 191,  544 => 190,  540 => 171,  537 => 178,  534 => 169,  521 => 163,  515 => 161,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 141,  448 => 139,  441 => 196,  438 => 137,  432 => 135,  426 => 102,  417 => 130,  410 => 96,  401 => 172,  390 => 124,  375 => 168,  373 => 156,  369 => 136,  363 => 123,  354 => 119,  333 => 117,  320 => 127,  313 => 82,  287 => 72,  271 => 66,  226 => 84,  198 => 22,  172 => 62,  225 => 89,  207 => 75,  690 => 179,  676 => 262,  674 => 232,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 210,  595 => 203,  588 => 350,  581 => 199,  577 => 344,  575 => 341,  573 => 196,  567 => 337,  557 => 177,  550 => 193,  538 => 319,  531 => 312,  526 => 164,  518 => 307,  514 => 306,  509 => 159,  504 => 158,  481 => 290,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 195,  429 => 188,  424 => 254,  422 => 184,  420 => 132,  415 => 180,  346 => 92,  331 => 187,  304 => 79,  257 => 61,  213 => 78,  399 => 158,  396 => 234,  383 => 224,  366 => 156,  359 => 140,  357 => 125,  352 => 94,  348 => 140,  345 => 135,  325 => 129,  308 => 118,  276 => 102,  270 => 102,  267 => 101,  245 => 49,  239 => 94,  234 => 84,  218 => 77,  202 => 73,  167 => 60,  194 => 70,  186 => 54,  316 => 74,  299 => 112,  293 => 75,  284 => 106,  281 => 61,  279 => 104,  275 => 105,  253 => 148,  237 => 85,  232 => 136,  222 => 81,  210 => 30,  174 => 60,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  613 => 366,  608 => 187,  605 => 361,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 173,  542 => 321,  539 => 171,  536 => 170,  533 => 169,  530 => 167,  528 => 167,  525 => 166,  516 => 161,  512 => 160,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  492 => 295,  486 => 292,  483 => 129,  473 => 150,  467 => 134,  465 => 147,  462 => 202,  456 => 142,  451 => 140,  446 => 197,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 168,  388 => 107,  377 => 82,  371 => 144,  361 => 146,  358 => 106,  349 => 103,  347 => 118,  342 => 137,  339 => 100,  336 => 113,  332 => 88,  329 => 131,  326 => 76,  324 => 116,  319 => 90,  311 => 89,  307 => 115,  297 => 84,  291 => 109,  289 => 113,  272 => 76,  250 => 93,  233 => 87,  228 => 83,  223 => 27,  200 => 72,  191 => 69,  318 => 122,  306 => 140,  303 => 122,  300 => 121,  286 => 112,  274 => 77,  265 => 64,  263 => 57,  260 => 62,  256 => 96,  248 => 94,  242 => 140,  236 => 93,  216 => 79,  197 => 71,  192 => 23,  165 => 60,  160 => 59,  70 => 19,  344 => 97,  340 => 90,  338 => 135,  335 => 134,  321 => 183,  315 => 125,  295 => 66,  292 => 134,  288 => 108,  282 => 80,  280 => 69,  277 => 68,  259 => 55,  249 => 55,  215 => 32,  190 => 50,  184 => 47,  181 => 65,  178 => 64,  161 => 63,  124 => 52,  146 => 63,  118 => 49,  104 => 40,  100 => 39,  170 => 61,  152 => 63,  137 => 47,  153 => 56,  155 => 66,  129 => 56,  97 => 41,  58 => 17,  90 => 27,  134 => 47,  126 => 45,  114 => 50,  110 => 22,  77 => 13,  113 => 38,  20 => 11,  53 => 12,  34 => 18,  195 => 72,  188 => 21,  185 => 66,  175 => 65,  150 => 55,  148 => 44,  127 => 28,  81 => 23,  23 => 11,  84 => 24,  76 => 25,  65 => 26,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 136,  430 => 103,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 126,  393 => 125,  387 => 164,  384 => 116,  381 => 122,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 143,  341 => 114,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 117,  305 => 70,  298 => 120,  294 => 111,  285 => 81,  283 => 70,  278 => 106,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 61,  177 => 119,  169 => 69,  140 => 58,  132 => 47,  128 => 47,  107 => 44,  61 => 17,  273 => 101,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 134,  224 => 35,  221 => 88,  219 => 33,  217 => 87,  208 => 60,  204 => 28,  179 => 72,  159 => 49,  143 => 48,  135 => 62,  119 => 40,  102 => 33,  71 => 29,  67 => 18,  63 => 18,  59 => 14,  93 => 39,  88 => 32,  78 => 26,  87 => 34,  46 => 13,  38 => 6,  44 => 21,  21 => 11,  25 => 35,  94 => 34,  89 => 37,  85 => 32,  75 => 30,  68 => 30,  56 => 11,  27 => 3,  31 => 3,  26 => 9,  201 => 57,  196 => 71,  183 => 74,  171 => 102,  166 => 57,  163 => 68,  158 => 62,  156 => 58,  151 => 59,  142 => 58,  138 => 94,  136 => 39,  121 => 50,  117 => 19,  105 => 34,  91 => 33,  62 => 25,  49 => 14,  28 => 3,  24 => 3,  19 => 1,  79 => 34,  72 => 30,  69 => 32,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 93,  157 => 64,  145 => 59,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 47,  111 => 47,  108 => 19,  101 => 43,  98 => 38,  96 => 30,  83 => 33,  74 => 27,  66 => 32,  55 => 13,  52 => 12,  50 => 22,  43 => 9,  41 => 10,  35 => 5,  32 => 5,  29 => 3,  209 => 24,  203 => 73,  199 => 80,  193 => 70,  189 => 177,  187 => 75,  182 => 172,  176 => 63,  173 => 71,  168 => 61,  164 => 54,  162 => 59,  154 => 60,  149 => 62,  147 => 54,  144 => 45,  141 => 51,  133 => 51,  130 => 46,  125 => 51,  122 => 45,  116 => 39,  112 => 47,  109 => 45,  106 => 45,  103 => 44,  99 => 31,  95 => 19,  92 => 43,  86 => 33,  82 => 28,  80 => 27,  73 => 20,  64 => 17,  60 => 24,  57 => 12,  54 => 26,  51 => 23,  48 => 9,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}

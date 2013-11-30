<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_0eb0ada34385ea2277bd2f26a94e019e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  706 => 472,  694 => 468,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  630 => 455,  625 => 453,  621 => 452,  616 => 450,  565 => 414,  527 => 409,  520 => 406,  244 => 136,  389 => 160,  378 => 157,  334 => 141,  328 => 139,  290 => 119,  353 => 149,  255 => 101,  231 => 83,  212 => 78,  431 => 189,  408 => 176,  351 => 120,  323 => 128,  370 => 100,  343 => 146,  330 => 87,  327 => 114,  310 => 81,  262 => 98,  180 => 104,  12 => 34,  553 => 176,  545 => 173,  532 => 168,  517 => 161,  513 => 160,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  463 => 133,  460 => 132,  449 => 198,  419 => 98,  395 => 84,  392 => 83,  386 => 159,  382 => 93,  380 => 158,  367 => 155,  302 => 125,  296 => 121,  205 => 59,  804 => 266,  801 => 265,  796 => 260,  789 => 256,  783 => 253,  779 => 251,  777 => 250,  774 => 249,  768 => 247,  766 => 246,  763 => 245,  757 => 243,  755 => 242,  752 => 241,  746 => 239,  744 => 238,  741 => 237,  735 => 235,  733 => 234,  730 => 233,  727 => 232,  723 => 473,  717 => 186,  708 => 183,  703 => 182,  698 => 469,  695 => 180,  687 => 178,  683 => 272,  670 => 231,  667 => 230,  661 => 227,  658 => 226,  656 => 461,  651 => 222,  645 => 460,  642 => 218,  640 => 217,  637 => 216,  632 => 213,  626 => 211,  620 => 209,  606 => 208,  600 => 206,  589 => 201,  579 => 198,  576 => 197,  555 => 195,  552 => 194,  546 => 191,  544 => 190,  540 => 171,  537 => 178,  534 => 169,  521 => 163,  515 => 404,  503 => 156,  499 => 155,  496 => 154,  490 => 153,  485 => 150,  479 => 149,  471 => 147,  468 => 146,  464 => 145,  459 => 143,  454 => 141,  448 => 139,  441 => 196,  438 => 137,  432 => 135,  426 => 102,  417 => 130,  410 => 96,  401 => 172,  390 => 124,  375 => 168,  373 => 156,  369 => 136,  363 => 153,  354 => 119,  333 => 117,  320 => 127,  313 => 82,  287 => 72,  271 => 66,  226 => 84,  198 => 22,  172 => 57,  225 => 89,  207 => 75,  690 => 467,  676 => 262,  674 => 232,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 210,  595 => 203,  588 => 350,  581 => 199,  577 => 344,  575 => 341,  573 => 196,  567 => 337,  557 => 177,  550 => 193,  538 => 319,  531 => 312,  526 => 164,  518 => 307,  514 => 306,  509 => 159,  504 => 158,  481 => 290,  466 => 280,  452 => 272,  445 => 267,  443 => 261,  439 => 195,  429 => 188,  424 => 254,  422 => 184,  420 => 132,  415 => 180,  346 => 92,  331 => 140,  304 => 79,  257 => 61,  213 => 78,  399 => 158,  396 => 234,  383 => 224,  366 => 156,  359 => 140,  357 => 123,  352 => 94,  348 => 140,  345 => 147,  325 => 129,  308 => 118,  276 => 111,  270 => 102,  267 => 101,  245 => 49,  239 => 94,  234 => 84,  218 => 77,  202 => 77,  167 => 60,  194 => 68,  186 => 54,  316 => 74,  299 => 112,  293 => 120,  284 => 106,  281 => 114,  279 => 104,  275 => 105,  253 => 100,  237 => 85,  232 => 88,  222 => 83,  210 => 77,  174 => 65,  713 => 214,  707 => 211,  704 => 210,  702 => 470,  696 => 206,  686 => 466,  681 => 265,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 451,  613 => 366,  608 => 187,  605 => 361,  602 => 449,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 411,  542 => 321,  539 => 171,  536 => 170,  533 => 169,  530 => 410,  528 => 167,  525 => 408,  516 => 161,  512 => 160,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 134,  492 => 295,  486 => 292,  483 => 129,  473 => 150,  467 => 134,  465 => 147,  462 => 202,  456 => 142,  451 => 140,  446 => 197,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  394 => 168,  388 => 107,  377 => 82,  371 => 156,  361 => 152,  358 => 151,  349 => 103,  347 => 118,  342 => 137,  339 => 100,  336 => 113,  332 => 116,  329 => 131,  326 => 138,  324 => 113,  319 => 90,  311 => 89,  307 => 128,  297 => 104,  291 => 102,  289 => 113,  272 => 76,  250 => 93,  233 => 87,  228 => 83,  223 => 27,  200 => 72,  191 => 67,  318 => 111,  306 => 107,  303 => 106,  300 => 105,  286 => 112,  274 => 110,  265 => 105,  263 => 95,  260 => 62,  256 => 96,  248 => 97,  242 => 140,  236 => 93,  216 => 79,  197 => 69,  192 => 23,  165 => 83,  160 => 59,  70 => 26,  344 => 119,  340 => 145,  338 => 135,  335 => 134,  321 => 135,  315 => 131,  295 => 66,  292 => 134,  288 => 118,  282 => 80,  280 => 69,  277 => 68,  259 => 103,  249 => 55,  215 => 32,  190 => 76,  184 => 63,  181 => 65,  178 => 59,  161 => 63,  124 => 52,  146 => 63,  118 => 49,  104 => 37,  100 => 36,  170 => 84,  152 => 46,  137 => 47,  153 => 77,  155 => 47,  129 => 56,  97 => 41,  58 => 25,  90 => 37,  134 => 39,  126 => 45,  114 => 50,  110 => 22,  77 => 25,  113 => 40,  20 => 11,  53 => 17,  34 => 5,  195 => 72,  188 => 90,  185 => 74,  175 => 58,  150 => 55,  148 => 44,  127 => 35,  81 => 23,  23 => 11,  84 => 27,  76 => 28,  65 => 22,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 136,  430 => 103,  427 => 143,  423 => 133,  413 => 134,  409 => 124,  407 => 95,  402 => 130,  398 => 126,  393 => 125,  387 => 164,  384 => 116,  381 => 122,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 70,  298 => 120,  294 => 111,  285 => 81,  283 => 115,  278 => 98,  268 => 126,  264 => 72,  258 => 94,  252 => 68,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 61,  177 => 119,  169 => 69,  140 => 58,  132 => 47,  128 => 47,  107 => 44,  61 => 23,  273 => 101,  269 => 107,  254 => 60,  243 => 92,  240 => 86,  238 => 139,  235 => 89,  230 => 105,  227 => 86,  224 => 81,  221 => 88,  219 => 33,  217 => 87,  208 => 76,  204 => 28,  179 => 72,  159 => 49,  143 => 51,  135 => 62,  119 => 40,  102 => 24,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  93 => 38,  88 => 25,  78 => 26,  87 => 33,  46 => 12,  38 => 7,  44 => 10,  21 => 2,  25 => 35,  94 => 21,  89 => 30,  85 => 24,  75 => 28,  68 => 30,  56 => 11,  27 => 7,  31 => 8,  26 => 3,  201 => 57,  196 => 92,  183 => 74,  171 => 102,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 58,  138 => 94,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 35,  62 => 24,  49 => 14,  28 => 3,  24 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 15,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 64,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 47,  111 => 47,  108 => 47,  101 => 43,  98 => 45,  96 => 35,  83 => 35,  74 => 27,  66 => 25,  55 => 24,  52 => 12,  50 => 15,  43 => 9,  41 => 19,  35 => 6,  32 => 7,  29 => 3,  209 => 24,  203 => 73,  199 => 93,  193 => 70,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 54,  162 => 59,  154 => 60,  149 => 62,  147 => 75,  144 => 42,  141 => 73,  133 => 51,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 44,  99 => 23,  95 => 39,  92 => 43,  86 => 33,  82 => 19,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 20,  54 => 19,  51 => 13,  48 => 16,  45 => 14,  42 => 11,  39 => 6,  36 => 8,  33 => 6,  30 => 5,);
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/danland/templates/page.html.twig */
class __TwigTemplate_10fac80e6fb8fccbc1e47bfcdc05692d8cc4a326c5d8da47b591ae64519f3495 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 9];
        $filters = ["escape" => 2];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["danland_layout"] ?? null)), "html", null, true);
        echo ">

  <div id=\"header\">
    <div id=\"header-wrapper\">

      ";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "

      ";
        // line 9
        if ($this->getAttribute(($context["page"] ?? null), "search_box", [])) {
            // line 10
            echo "        <div id=\"search-box\">
          ";
            // line 11
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search_box", [])), "html", null, true);
            echo "
        </div><!-- /search-box -->
      ";
        }
        // line 14
        echo "
      ";
        // line 15
        if (($context["feed_icons"] ?? null)) {
            // line 16
            echo "        <div class=\"feed-wrapper\">
          ";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 20
        echo "
    </div><!-- end header-wrapper -->
  </div> <!-- /header -->

  <div style=\"clear:both\"></div>

  <div id=\"menu\" class=\"clearfix\">
      ";
        // line 27
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 28
            echo "        <div id=\"nav\">
          ";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 32
        echo "  </div> <!-- end menu -->

  <div style=\"clear:both\"></div>

  ";
        // line 36
        if (($context["is_front"] ?? null)) {
            // line 37
            echo "    <div id=\"slideshow-wrapper\">
      <div class=\"slideshow-inner\">
        ";
            // line 39
            if ($this->getAttribute(($context["page"] ?? null), "preface", [])) {
                // line 40
                echo "          <div id=\"slideshow-preface\">
            <div id=\"preface\">
              ";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface", [])), "html", null, true);
                echo "
            </div><!-- end preface -->
          </div>
        ";
            }
            // line 46
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
                // line 47
                echo "          <div id=\"slideshow-bottom\">
            <div id=\"mission\">";
                // line 48
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
                echo "</div>
          </div>
        ";
            }
            // line 51
            echo "        ";
            if ($this->getAttribute(($context["page"] ?? null), "slideshow", [])) {
                // line 52
                echo "          <div class=\"custom-slideshow\">
            ";
                // line 53
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
                echo "
          </div>
\t\t";
            } else {
                // line 56
                echo "          <div class=\"slideshow\">
            <img src=\"";
                // line 57
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide1_image"] ?? null)), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" />
            <img src=\"";
                // line 58
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide2_image"] ?? null)), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" />
            <img src=\"";
                // line 59
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slide3_image"] ?? null)), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" />
          </div>
        ";
            }
            // line 62
            echo "      </div>
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if ((($this->getAttribute(($context["page"] ?? null), "preface_first", []) || $this->getAttribute(($context["page"] ?? null), "preface_middle", [])) || $this->getAttribute(($context["page"] ?? null), "preface_last", []))) {
            // line 67
            echo "    <div style=\"clear:both\"></div>
    <div id=\"preface-wrapper\" ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["danland_preface"] ?? null)), "html", null, true);
            echo ">
      ";
            // line 69
            if ($this->getAttribute(($context["page"] ?? null), "preface_first", [])) {
                // line 70
                echo "        <div class=\"column A\">
          ";
                // line 71
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_first", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 74
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "preface_middle", [])) {
                // line 75
                echo "        <div class=\"column B\">
          ";
                // line 76
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_middle", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 79
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "preface_last", [])) {
                // line 80
                echo "        <div class=\"column C\">
          ";
                // line 81
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "preface_last", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 84
            echo "      <div style=\"clear:both\"></div>
    </div>
  ";
        }
        // line 87
        echo "
  <div style=\"clear:both\"></div>

  <div id=\"wrapper\">

    <div id=\"content\">

      <a id=\"main-content\"></a>
      ";
        // line 95
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 96
            echo "        <div class=\"content-top\">
          ";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 100
        echo "
      ";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "

      ";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "messages", [])), "html", null, true);
        echo "

      ";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "

      ";
        // line 107
        if (($context["title"] ?? null)) {
            // line 108
            echo "        <h1 class=\"title\" id=\"page-title\">
          ";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
        </h1>
      ";
        }
        // line 112
        echo "
      ";
        // line 113
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

      ";
        // line 115
        if (($context["tabs"] ?? null)) {
            // line 116
            echo "        <div class=\"tabs\">
          ";
            // line 117
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 120
        echo "
      ";
        // line 121
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

      ";
        // line 123
        if (($context["action_links"] ?? null)) {
            // line 124
            echo "        <ul class=\"action-links\">
          ";
            // line 125
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
            echo "
        </ul>
      ";
        }
        // line 128
        echo "
      ";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 130
            echo "        <div class=\"content-middle\">
          ";
            // line 131
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 134
        echo "
      ";
        // line 135
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 136
            echo "        <div class=\"content-bottom\">
          ";
            // line 137
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 140
        echo "
    </div> <!-- end content -->

    ";
        // line 143
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 144
            echo "      <div id=\"sidebar-left\" class=\"column sidebar\">
        <div class=\"section\">
          ";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </div>
      </div> <!-- end sidebar-first -->
    ";
        }
        // line 150
        echo "
    ";
        // line 151
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 152
            echo "      <div id=\"sidebar-right\" class=\"column sidebar\">
        <div class=\"section\">
          ";
            // line 154
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </div>
      </div> <!-- end sidebar-second -->
    ";
        }
        // line 158
        echo "
    <div style=\"clear:both\"></div>

  </div> <!-- end wrapper -->


  ";
        // line 164
        if ((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_middle", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_last", []))) {
            // line 165
            echo "    <div style=\"clear:both\"></div>
    <div id=\"bottom-teaser\" ";
            // line 166
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["danland_bottom_a"] ?? null)), "html", null, true);
            echo ">
      ";
            // line 167
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 168
                echo "        <div class=\"column A\">
          ";
                // line 169
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 172
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_middle", [])) {
                // line 173
                echo "        <div class=\"column B\">
          ";
                // line 174
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_middle", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 177
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_last", [])) {
                // line 178
                echo "        <div class=\"column C\">
          ";
                // line 179
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_last", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 182
            echo "      <div style=\"clear:both\"></div>
    </div> <!-- end bottom first etc. -->
  ";
        }
        // line 185
        echo "

  ";
        // line 187
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_1", []) || $this->getAttribute(($context["page"] ?? null), "bottom_2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_4", []))) {
            // line 188
            echo "    <div style=\"clear:both\"></div><!-- Do not touch -->
    <div id=\"bottom-wrapper\" ";
            // line 189
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["danland_bottom_b"] ?? null)), "html", null, true);
            echo ">
      ";
            // line 190
            if ($this->getAttribute(($context["page"] ?? null), "bottom_1", [])) {
                // line 191
                echo "        <div class=\"column A\">
          ";
                // line 192
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_1", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 195
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_2", [])) {
                // line 196
                echo "        <div class=\"column B\">
          ";
                // line 197
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_2", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 200
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_3", [])) {
                // line 201
                echo "        <div class=\"column C\">
          ";
                // line 202
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_3", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 205
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "bottom_4", [])) {
                // line 206
                echo "        <div class=\"column D\">
          ";
                // line 207
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_4", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 210
            echo "      <div style=\"clear:both\"></div>
    </div><!-- end bottom -->
  ";
        }
        // line 213
        echo "
  <div style=\"clear:both\"></div>

  <div id=\"footer-wrapper\">
    ";
        // line 217
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 218
            echo "      <div id=\"footer\">
        ";
            // line 219
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 222
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])) {
            // line 223
            echo "      <div id=\"secondary-menu\">
        ";
            // line 224
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 227
        echo "  </div> <!-- end footer wrapper -->

  <div style=\"clear:both\"></div>

  <div id=\"notice\">
    <p>Site deigned by John Cordova</p>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/danland/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 227,  532 => 224,  529 => 223,  526 => 222,  520 => 219,  517 => 218,  515 => 217,  509 => 213,  504 => 210,  498 => 207,  495 => 206,  492 => 205,  486 => 202,  483 => 201,  480 => 200,  474 => 197,  471 => 196,  468 => 195,  462 => 192,  459 => 191,  457 => 190,  453 => 189,  450 => 188,  448 => 187,  444 => 185,  439 => 182,  433 => 179,  430 => 178,  427 => 177,  421 => 174,  418 => 173,  415 => 172,  409 => 169,  406 => 168,  404 => 167,  400 => 166,  397 => 165,  395 => 164,  387 => 158,  380 => 154,  376 => 152,  374 => 151,  371 => 150,  364 => 146,  360 => 144,  358 => 143,  353 => 140,  347 => 137,  344 => 136,  342 => 135,  339 => 134,  333 => 131,  330 => 130,  328 => 129,  325 => 128,  319 => 125,  316 => 124,  314 => 123,  309 => 121,  306 => 120,  300 => 117,  297 => 116,  295 => 115,  290 => 113,  287 => 112,  281 => 109,  278 => 108,  276 => 107,  271 => 105,  266 => 103,  261 => 101,  258 => 100,  252 => 97,  249 => 96,  247 => 95,  237 => 87,  232 => 84,  226 => 81,  223 => 80,  220 => 79,  214 => 76,  211 => 75,  208 => 74,  202 => 71,  199 => 70,  197 => 69,  193 => 68,  190 => 67,  188 => 66,  185 => 65,  180 => 62,  174 => 59,  170 => 58,  166 => 57,  163 => 56,  157 => 53,  154 => 52,  151 => 51,  145 => 48,  142 => 47,  139 => 46,  132 => 42,  128 => 40,  126 => 39,  122 => 37,  120 => 36,  114 => 32,  108 => 29,  105 => 28,  103 => 27,  94 => 20,  88 => 17,  85 => 16,  83 => 15,  80 => 14,  74 => 11,  71 => 10,  69 => 9,  64 => 7,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/danland/templates/page.html.twig", "/var/www/killerpanoramas.com/htdocs/themes/danland/templates/page.html.twig");
    }
}

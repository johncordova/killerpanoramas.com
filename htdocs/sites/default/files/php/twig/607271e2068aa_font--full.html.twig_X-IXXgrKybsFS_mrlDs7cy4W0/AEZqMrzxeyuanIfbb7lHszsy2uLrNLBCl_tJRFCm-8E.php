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

/* modules/fontyourface/templates/font--full.html.twig */
class __TwigTemplate_86e726428820bd4bc9eb9c0b9a32869ac74261ce8bfe390c9d21144d57fd69eb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 19];
        $filters = ["escape" => 18];
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
        // line 18
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "font"], "method")), "html", null, true);
        echo ">
  ";
        // line 19
        if (($context["font_style"] ?? null)) {
            // line 20
            echo "    <div>If you wish to use the font in your theme / css file, use:</div>
    <code style=\"white-space: pre;\">";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["font_style"] ?? null)), "html", null, true);
            echo "
    </code>
  ";
        }
        // line 25
        echo "  <details open>
    <summary>Details</summary>
    <div class=\"details-wrapper\">
      ";
        // line 28
        if (($context["content"] ?? null)) {
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        }
        // line 31
        echo "    </div>
  </details>
  <detail open>
    <summary>Preview</summary>
    <div class=\"fontyourface-preview\" style=\"";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["font_style_inline"] ?? null)), "html", null, true);
        echo "\">
      ";
        // line 36
        if (($context["font_preview"] ?? null)) {
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["font_preview"] ?? null)), "html", null, true);
            echo "
      ";
        } else {
            // line 39
            echo "        <h1>h1. This is a very large header.</h1>
        <h2>h2. This is a large header.</h2>
        <h3>h3. This is a medium header.</h3>
        <h4>h4. This is a moderate header.</h4>
        <h5>h5. This is a small header.</h5>
        <h6>h6. This is a tiny header.</h6>
        
        <br>
        
        <h1 class=\"subheader\">h1. subheader</h1>
        <h2 class=\"subheader\">h2. subheader</h2>
        <h3 class=\"subheader\">h3. subheader</h3>
        <h4 class=\"subheader\">h4. subheader</h4>
        <h5 class=\"subheader\">h5. subheader</h5>
        <h6 class=\"subheader\">h6. subheader</h6>
        
        <hr>
        
        <h3>Definition List</h3>
        <h5>Definition lists are great for small block of copy that describe the header</h5>
        <dl>
        <dt>Lower cost</dt>
          <dd>The new version of this product costs significantly less than the previous one!</dd>
        <dt>Easier to use</dt>
          <dd>We've changed the product so that it's much easier to use!</dd>
        <dt>Safe for kids</dt>
          <dd>You can leave your kids alone in a room with this product and they won't get hurt (not a guarantee).</dd>
        </dl>
        <hr>
        
        <h5>Un-ordered lists are great for making quick outlines bulleted.</h5>
        <ul class=\"disc\">
          <li>List item with a much longer description or more content.</li>
          <li>List item</li>
          <li>List item
            <ul>
              <li>Nested List Item</li>
              <li>Nested List Item</li>
              <li>Nested List Item</li>
            </ul>
          </li>
          <li>List item</li>
          <li>List item</li>
          <li>List item</li>
        </ul>
        
        <h5>Ordered lists are great for lists that need order, duh.</h5>
        <ol>
          <li>List Item 1</li>
          <li>List Item 2</li>
          <li>List Item 3</li>
        </ol>
        
        
        
        <br>
        <h5>Blockquote</h5>
        <blockquote>I do not fear computers. I fear the lack of them. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur.<cite>Isaac Asimov</cite></blockquote>
        
        <br>
        <h5>Vcard</h5>
        <ul class=\"vcard\">
          <li class=\"fn\">Gaius Baltar</li>
          <li class=\"street-address\">123 Colonial Ave.</li>
          <li class=\"locality\">Caprica City</li>
          <li><span class=\"state\">Caprica</span>, <span class=\"zip\">12345</span></li>
          <li class=\"email\"><a href=\"#\">g.baltar@example.com</a></li>
        </ul>
      ";
        }
        // line 108
        echo "    </div>
  </detail>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/fontyourface/templates/font--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 108,  98 => 39,  93 => 37,  91 => 36,  87 => 35,  81 => 31,  78 => 29,  76 => 28,  71 => 25,  65 => 22,  62 => 20,  60 => 19,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/fontyourface/templates/font--full.html.twig", "/var/www/killerpanoramas.com/htdocs/modules/fontyourface/templates/font--full.html.twig");
    }
}

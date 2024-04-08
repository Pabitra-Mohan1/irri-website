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

/* themes/irri/templates/page.html.twig */
class __TwigTemplate_2970fb4a84cf781bc9fcd8fc84cd790c2d518ac2414172d669c348e2796a5a5d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 56, "block" => 57];
        $filters = ["escape" => 135, "clean_class" => 62, "t" => 110];
        $functions = ["active_theme_path" => 78];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class', 't'],
                ['active_theme_path']
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
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 133
        echo "
";
        // line 134
        if ($this->getAttribute(($context["page"] ?? null), "fullwidth", [])) {
            // line 135
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "fullwidth", [])), "html", null, true);
            echo "
";
        }
        // line 137
        echo "
";
        // line 139
        $this->displayBlock('main', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        if ($this->getAttribute(($context["page"] ?? null), "fullwidth_bottom", [])) {
            // line 201
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "fullwidth_bottom", [])), "html", null, true);
            echo "
";
        }
        // line 203
        echo "
";
        // line 204
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 205
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 65
        echo "    <header>
      <div class=\"container-fluid mtb20 mtb2\">
      <div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 mtb-10\">
\t\t\t\t\t\t";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
        echo "
\t\t\t</div>
      <div class=\"col-md-5 col-sm-6\">
        <div class=\"pull-left\">
            ";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "lang", [])), "html", null, true);
        echo "
          <!--ul class=\"language\">
            <li><input type=\"button\" class=\"btn btn-rice\" value=\"English\"></li>
            <li><button class=\"btn btn-rice\"><img src=\"";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/odia.png\" alt=\"\"/> </button></li>
          </ul-->
          <div class=\"clearfix\"></div>
        </div>
        <div class=\"pull-left text-center top-social\">
          <ul>
            <li><a href=\"https://www.facebook.com/irrieducation/\" target=\"_blank\" ><i class=\"fa fa-facebook\" id=\"fb\" aria-hidden=\"true\"></i></a> </li>
            <li><a href=\"https://twitter.com/irrieducation\" target=\"_blank\"><i class=\"fa fa-twitter\" id=\"tw\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-instagram\" id=\"linked\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"tel:9716214152\"><i class=\"fa fa-whatsapp\" id=\"wapp\"  aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-envelope\" id=\"gm\" aria-hidden=\"true\"></i></a></li>
            <li><a href=\"#\"><img src=\"";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getActiveThemePath(), "html", null, true);
        echo "/images/paly.png\" id=\"play\" class=\"top-icon\" /> </a></li>
            <li><a><i class=\"fa fa-youtube-play\" id=\"yt\" aria-hidden=\"true\"></i></a></li>
          </ul>
          <div class=\"clearfix\"></div>
        </div>
      </div>
      </div>
    ";
        // line 100
        echo " 
     <div>
         ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
\t\t\t\t\t

\t</div>
      <div class=\"navbar-header\">
        ";
        // line 108
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 109
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 110
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 116
        echo "      </div>

      ";
        // line 119
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 120
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 121
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 124
        echo "      ";
        // line 129
        echo "
    </header>
  ";
    }

    // line 139
    public function block_main($context, array $blocks = [])
    {
        // line 140
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 144
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 145
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 150
            echo "      ";
        }
        // line 151
        echo "
      ";
        // line 153
        echo "      ";
        // line 154
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 155
($context["page"] ?? null), "sidebar", []) || $this->getAttribute(($context["page"] ?? null), "ltsidebar", []))) ? ("col-md-9 col-sm-9 col-xs-12") : ("")), 1 => ((($this->getAttribute(        // line 156
($context["page"] ?? null), "sidebar", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "ltsidebar", [])))) ? ("") : (""))];
        // line 159
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "ltsidebar", [])) {
            // line 160
            echo "        <div class=\"col-md-3 col-sm-3 col-xs-12\">
            ";
            // line 161
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "ltsidebar", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 164
        echo "      
      <section ";
        // line 165
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 168
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 169
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 172
            echo "        ";
        }
        // line 173
        echo "
        ";
        // line 175
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 176
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 179
            echo "        ";
        }
        // line 180
        echo "
        ";
        // line 182
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 188
        echo "      </section>
      
      ";
        // line 190
        if ($this->getAttribute(($context["page"] ?? null), "sidebar", [])) {
            // line 191
            echo "        <div class=\"col-md-3 col-sm-3 col-xs-12\">
            ";
            // line 192
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 195
        echo "      
    </div>
  </div>
";
    }

    // line 145
    public function block_header($context, array $blocks = [])
    {
        // line 146
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 147
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 169
    public function block_highlighted($context, array $blocks = [])
    {
        // line 170
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 176
    public function block_help($context, array $blocks = [])
    {
        // line 177
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 182
    public function block_content($context, array $blocks = [])
    {
        // line 183
        echo "          <a id=\"main-content\"></a>
          ";
        // line 184
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "acontent", [])), "html", null, true);
        echo "
          ";
        // line 185
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
          ";
        // line 186
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bcontent", [])), "html", null, true);
        echo "
        ";
    }

    // line 205
    public function block_footer($context, array $blocks = [])
    {
        // line 206
        echo "    <footer class=\"p10\" role=\"contentinfo\">
      ";
        // line 207
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/irri/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 207,  371 => 206,  368 => 205,  362 => 186,  358 => 185,  354 => 184,  351 => 183,  348 => 182,  341 => 177,  338 => 176,  331 => 170,  328 => 169,  321 => 147,  318 => 146,  315 => 145,  308 => 195,  302 => 192,  299 => 191,  297 => 190,  293 => 188,  290 => 182,  287 => 180,  284 => 179,  281 => 176,  278 => 175,  275 => 173,  272 => 172,  269 => 169,  266 => 168,  261 => 165,  258 => 164,  252 => 161,  249 => 160,  246 => 159,  244 => 156,  243 => 155,  242 => 154,  240 => 153,  237 => 151,  234 => 150,  231 => 145,  228 => 144,  221 => 140,  218 => 139,  212 => 129,  210 => 124,  204 => 121,  201 => 120,  198 => 119,  194 => 116,  185 => 110,  182 => 109,  179 => 108,  171 => 102,  167 => 100,  156 => 89,  141 => 78,  135 => 75,  128 => 71,  122 => 68,  117 => 65,  115 => 62,  114 => 61,  113 => 59,  111 => 58,  108 => 57,  102 => 205,  100 => 204,  97 => 203,  91 => 201,  89 => 200,  86 => 199,  84 => 139,  81 => 137,  75 => 135,  73 => 134,  70 => 133,  66 => 57,  64 => 56,  62 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/irri/templates/page.html.twig", "/home2/webctdn1/public_html/rkbs.webctsl.in/themes/irri/templates/page.html.twig");
    }
}

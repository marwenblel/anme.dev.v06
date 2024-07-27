<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/anme/templates/layout/page--front.html.twig */
class __TwigTemplate_dbf109ab84da6044eee5eb4c2d22c02d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"page-wrapper\">
    <div id=\"page\">
        <div id=\"header\">
            <div class=\"content\">
                <!-- Begin Top header first-->
                ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_first", [], "any", false, false, true, 6)) {
            // line 7
            echo "                    <button id=\"toggle-button\"></button>
                    <div id=\"top-header-first\">
                        <div class=\"container\">
                            ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_first", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        // line 14
        echo "                <!--End Top header first-->

                <!-- Begin Top header second-->
                ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_second", [], "any", false, false, true, 17)) {
            // line 18
            echo "                    <div id=\"top-header-second\">
                        <div class=\"container\">
                            ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_second", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        // line 24
        echo "                <!--End Top header second-->

                <!-- Begin Highlighted header first-->
                ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_first", [], "any", false, false, true, 27)) {
            // line 28
            echo "                    <div id=\"highlighted-header-first\" class=\"container\">
                        <div class=\"row justify-content-md-center\">
                            ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_first", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        // line 34
        echo "                <!--End Highlighted header first-->

                <!-- Begin Highlighted header second-->
                ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_second", [], "any", false, false, true, 37)) {
            // line 38
            echo "                    <div id=\"highlighted-header-second\" class=\"container\">
                        <div class=\"row\">
                            ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_second", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        // line 44
        echo "                <!--End Highlighted header second-->


                <!-- Begin Highlighted header last-->
                ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_last", [], "any", false, false, true, 48)) {
            // line 49
            echo "                    <div id=\"highlighted-header-last\" class=\"container\">
                        <div class=\"content\">
                            ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted_header_last", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        // line 55
        echo "                <!--End Highlighted header last-->


                <!-- Begin Highlighted-->
                ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 59)) {
            // line 60
            echo "                    <div id=\"highlighted\" class=\"container\">
                        <div class=\"content\">
                            ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        // line 66
        echo "                <!--End Highlighted-->

            </div>
        </div> <!--End Header-->
        <div id=\"main-wrapper\" class=\"container\">
            <div id=\"main\" class=\"row\">

                <!-- Begin Content-->
                ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 74)) {
            // line 75
            echo "                    <div id=\"content\" class=\"col-8\">
                        <div class=\"content\">
                            ";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        // line 81
        echo "                <!--End Content-->


                <!-- Begin Sidebar second-->
                ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 85)) {
            // line 86
            echo "                    <div id=\"sidebar-second\" class=\"col-4\">
                        <div class=\"content\">
                            ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        // line 92
        echo "                <!--End Sidebar second-->

                <!-- Begin Content bottom-->
                ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 95)) {
            // line 96
            echo "                    <div id=\"content-bottom\">
                        <div class=\"content\">
                            ";
            // line 98
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        // line 102
        echo "                <!--End Content bottom-->

            </div>
        </div>
        <div id=\"footer-wrapper\">


            <!-- Begin Footer top-->
            ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 110)) {
            // line 111
            echo "                <div id=\"footer-top\" class=\"container\">
                    <div class=\"row justify-content-md-center\">
                        ";
            // line 113
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        // line 117
        echo "            <!--End Footer top-->


            <!-- Begin Footer content -->
            ";
        // line 121
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_content", [], "any", false, false, true, 121)) {
            // line 122
            echo "                <div id=\"footer-content\" class=\"container\">
                    ";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_content", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 126
        echo "            <!--End Footer content -->


            <!-- Begin Footer -->
            ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 130)) {
            // line 131
            echo "                <div id=\"footer\" class=\"container\">
                    ";
            // line 132
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 135
        echo "            <!--End Footer -->
        </div>
    </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/anme/templates/layout/page--front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  269 => 135,  263 => 132,  260 => 131,  258 => 130,  252 => 126,  246 => 123,  243 => 122,  241 => 121,  235 => 117,  228 => 113,  224 => 111,  222 => 110,  212 => 102,  205 => 98,  201 => 96,  199 => 95,  194 => 92,  187 => 88,  183 => 86,  181 => 85,  175 => 81,  168 => 77,  164 => 75,  162 => 74,  152 => 66,  145 => 62,  141 => 60,  139 => 59,  133 => 55,  126 => 51,  122 => 49,  120 => 48,  114 => 44,  107 => 40,  103 => 38,  101 => 37,  96 => 34,  89 => 30,  85 => 28,  83 => 27,  78 => 24,  71 => 20,  67 => 18,  65 => 17,  60 => 14,  53 => 10,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/anme/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\anme.dev.v06\\web\\themes\\custom\\anme\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}

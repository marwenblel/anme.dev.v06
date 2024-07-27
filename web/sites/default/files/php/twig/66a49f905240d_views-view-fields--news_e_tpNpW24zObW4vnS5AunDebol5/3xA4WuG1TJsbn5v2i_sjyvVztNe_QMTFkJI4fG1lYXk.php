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

/* themes/custom/anme/templates/views/views-view-fields--news_events--block_1.html.twig */
class __TwigTemplate_1eb3f7bbe916fce367d2667230014cdf extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 2
            if ((($context["key"] == "field_news_events_featured_image") || ($context["key"] == "created"))) {
                // line 3
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "separator", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
                // line 4
                if (twig_get_attribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 4)) {
                    // line 5
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "wrapper_attributes", [], "any", false, false, true, 5), "addClass", ["col"], "method", false, false, true, 5), 5, $this->source), "html", null, true);
                    echo ">";
                }
                // line 7
                if (twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 7)) {
                    // line 8
                    if (twig_get_attribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 8)) {
                        // line 9
                        echo "<";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_attributes", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_suffix", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                        echo "</";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_element", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                        echo ">";
                    } else {
                        // line 11
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "label_suffix", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                    }
                }
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 14)) {
                    // line 15
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "element_attributes", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "element_type", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 17
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                }
                // line 19
                if (twig_get_attribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 19)) {
                    // line 20
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["field"], "wrapper_element", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo ">";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/anme/templates/views/views-view-fields--news_events--block_1.html.twig";
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
        return array (  92 => 20,  90 => 19,  87 => 17,  77 => 15,  75 => 14,  70 => 11,  59 => 9,  57 => 8,  55 => 7,  49 => 5,  47 => 4,  45 => 3,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/anme/templates/views/views-view-fields--news_events--block_1.html.twig", "C:\\xampp\\htdocs\\anme.dev.v06\\web\\themes\\custom\\anme\\templates\\views\\views-view-fields--news_events--block_1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 1, "if" => 2);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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

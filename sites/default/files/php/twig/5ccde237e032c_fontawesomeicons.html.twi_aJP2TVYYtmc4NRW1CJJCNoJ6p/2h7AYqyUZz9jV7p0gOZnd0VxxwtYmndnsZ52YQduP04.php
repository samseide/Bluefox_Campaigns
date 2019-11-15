<?php

/* modules/contrib/fontawesome/templates/fontawesomeicons.html.twig */
class __TwigTemplate_6094164c48370c3ff66bb0fc88c7f1e9b1711eb401a6454d580555f0d2208b84 extends Twig_Template
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
        $tags = array("if" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 13
        echo "<div class=\"fontawesome-icons\">
  ";
        // line 14
        if ((($context["layers"] ?? null) == "1")) {
            // line 15
            echo "    <span class=\"fa-layers fa-fw\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["icons"] ?? null), "html", null, true));
            echo "</span>
  ";
        } else {
            // line 17
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["icons"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/fontawesome/templates/fontawesomeicons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  48 => 15,  46 => 14,  43 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default implementation for Font Awesome icons.
 *
 * Available variables:
 * - icons: a list of Font Awesome icons to be rendered.
 * - layers: flag indicating if icons are printing as layers.
 *
 * @ingroup themeable
 */
#}
<div class=\"fontawesome-icons\">
  {% if layers == '1' %}
    <span class=\"fa-layers fa-fw\">{{ icons }}</span>
  {% else %}
    {{ icons }}
  {% endif %}
</div>
", "modules/contrib/fontawesome/templates/fontawesomeicons.html.twig", "/var/www/html/modules/contrib/fontawesome/templates/fontawesomeicons.html.twig");
    }
}

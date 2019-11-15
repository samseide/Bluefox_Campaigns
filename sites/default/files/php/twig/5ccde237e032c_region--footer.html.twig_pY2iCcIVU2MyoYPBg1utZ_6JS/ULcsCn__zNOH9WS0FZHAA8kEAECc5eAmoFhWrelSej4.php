<?php

/* themes/bluefox/templates/region/region--footer.html.twig */
class __TwigTemplate_4957dfb7adfabf61b4bfed0b287d97d82fd5134d8a6dcdd506535e7a77f8da19 extends Twig_Template
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
        $tags = array("set" => 16, "if" => 21);
        $filters = array("clean_class" => 18);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 16
        $context["classes"] = array(0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 18
($context["region"] ?? null))));
        // line 21
        if (($context["content"] ?? null)) {
            // line 22
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    <div class=\"footer--social\">
      <ul>
        <li>
          <a href=\"http://www.twitter.com\" aria-label=\"Twitter Link\"><i class=\"fab fa-twitter-square fa-3x\"></i></a>
        </li>
        <li>
          <a href=\"http://www.facebook.com\" aria-label=\"Facebook Link\"><i class=\"fab fa-facebook-square fa-3x\"></i></a>
        </li>
        <li>
          <a href=\"http://www.youtube.com\" aria-label=\"Youtube Link\"><i class=\"fab fa-youtube-square fa-3x\"></i></a>
        </li>
      </ul>
    </div>
    ";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
    <div class=\"footer--contact-info\">
      <div class=\"footer-address\">
        1721 Sweetbriar Ave, Nashville, TN 37212
      </div>
      <div class=\"footer--attribution\">
        Website Design by <a href=\"http://www.samuelseide.com\"> Samuel Seide</a>
      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bluefox/templates/region/region--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 36,  48 => 22,  46 => 21,  44 => 18,  43 => 16,);
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
 * Theme override to display a region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region <div>.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}
{%
  set classes = [
    'region',
    'region-' ~ region|clean_class,
  ]
%}
{% if content %}
  <div{{ attributes.addClass(classes) }}>
    <div class=\"footer--social\">
      <ul>
        <li>
          <a href=\"http://www.twitter.com\" aria-label=\"Twitter Link\"><i class=\"fab fa-twitter-square fa-3x\"></i></a>
        </li>
        <li>
          <a href=\"http://www.facebook.com\" aria-label=\"Facebook Link\"><i class=\"fab fa-facebook-square fa-3x\"></i></a>
        </li>
        <li>
          <a href=\"http://www.youtube.com\" aria-label=\"Youtube Link\"><i class=\"fab fa-youtube-square fa-3x\"></i></a>
        </li>
      </ul>
    </div>
    {{ content }}
    <div class=\"footer--contact-info\">
      <div class=\"footer-address\">
        1721 Sweetbriar Ave, Nashville, TN 37212
      </div>
      <div class=\"footer--attribution\">
        Website Design by <a href=\"http://www.samuelseide.com\"> Samuel Seide</a>
      </div>
    </div>
  </div>
{% endif %}
", "themes/bluefox/templates/region/region--footer.html.twig", "/var/www/html/themes/bluefox/templates/region/region--footer.html.twig");
    }
}

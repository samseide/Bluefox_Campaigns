<?php

/* themes/campaign_base/templates/paragraph/paragraph--full-width-image-with-copy.html.twig */
class __TwigTemplate_b3a8e82571a2a60449f5b6cfe69d19ad20cb9d69576077b2d65b10fdfea7b52f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'paragraph' => array($this, 'block_paragraph'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 42, "block" => 49, "if" => 54);
        $filters = array("clean_class" => 44, "trim" => 54, "striptags" => 54, "render" => 54);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_class', 'trim', 'striptags', 'render'),
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

        // line 42
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", array()))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 3 => (( !$this->getAttribute(        // line 46
($context["paragraph"] ?? null), "isPublished", array(), "method")) ? ("paragraph--unpublished") : ("")));
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = array())
    {
        // line 50
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "  </div>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_image", array()), "html", null, true));
        echo "
      ";
        // line 53
        $context["text_alignment"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_text_alignment", array()), "#items", array(), "array"), "getString", array(), "method");
        // line 54
        echo "      <div class=\"full-width-text full-width-text--";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["text_alignment"] ?? null), "html", null, true));
        echo " ";
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_text_drop_shadow", array())))) == "True")) {
            echo "full-width-text--drop-shadow";
        }
        echo "\">
        <div class=\"full-width-text--inner\">
          <div class=\"full-width-text--copy\">
            <h1 class=\"full-width-headline\">";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_text", array()), 0, array()), "html", null, true));
        echo "</h1>
            ";
        // line 58
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_subheadline", array()))))) {
            // line 59
            echo "              <div class=\"full-width-spacer\"></div>
              <div class=\"full-width-subheadline\">";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_subheadline", array()), 0, array()), "html", null, true));
            echo "</div>
            ";
        }
        // line 62
        echo "            ";
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cta", array()), 0, array(), "array"))) {
            // line 63
            echo "            <button class=\"cta\">
              ";
            // line 64
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_cta", array()), "html", null, true));
            echo "
            </button>
            ";
        }
        // line 67
        echo "          </div>
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/campaign_base/templates/paragraph/paragraph--full-width-image-with-copy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 67,  109 => 64,  106 => 63,  103 => 62,  98 => 60,  95 => 59,  93 => 58,  89 => 57,  78 => 54,  76 => 53,  71 => 52,  68 => 51,  63 => 71,  61 => 51,  56 => 50,  50 => 49,  48 => 46,  47 => 45,  46 => 44,  45 => 42,);
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
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
      {{ content.field_image }}
      {% set text_alignment = content.field_text_alignment['#items'].getString() %}
      <div class=\"full-width-text full-width-text--{{ text_alignment }} {% if content.field_text_drop_shadow|render|striptags|trim == 'True' %}full-width-text--drop-shadow{% endif %}\">
        <div class=\"full-width-text--inner\">
          <div class=\"full-width-text--copy\">
            <h1 class=\"full-width-headline\">{{ content.field_text.0 }}</h1>
            {% if content.field_subheadline|render|striptags|trim %}
              <div class=\"full-width-spacer\"></div>
              <div class=\"full-width-subheadline\">{{ content.field_subheadline.0 }}</div>
            {% endif %}
            {% if content.field_cta[0] is not empty %}
            <button class=\"cta\">
              {{ content.field_cta }}
            </button>
            {% endif %}
          </div>
        </div>
      </div>
    {% endblock %}
  </div>
{% endblock paragraph %}
", "themes/campaign_base/templates/paragraph/paragraph--full-width-image-with-copy.html.twig", "/var/www/html/themes/campaign_base/templates/paragraph/paragraph--full-width-image-with-copy.html.twig");
    }
}

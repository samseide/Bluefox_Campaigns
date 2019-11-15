<?php

/* themes/campaign_base/templates/paragraph/paragraph--body-copy-with-image.html.twig */
class __TwigTemplate_772421c318a9a4947cd5f70d5575ccd87ddca3daa426d12254b49279fd51a5af extends Twig_Template
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
        $tags = array("set" => 42, "block" => 49, "if" => 55);
        $filters = array("clean_class" => 44);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
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
        // line 83
        echo "  </div>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "      ";
        $context["image_alignment"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_body_copy_image_position", array()), "#items", array(), "array"), "getString", array(), "method");
        // line 53
        echo "      <div class=\"body-copy body-copy--";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image_alignment"] ?? null), "html", null, true));
        echo "\">
        <div class=\"body-copy--inner\">
        ";
        // line 55
        if ($this->getAttribute(($context["content"] ?? null), "field_body_copy_image", array())) {
            // line 56
            echo "          ";
            if ((($context["image_alignment"] ?? null) == "right")) {
                // line 57
                echo "            <div class=\"body-copy--image\">
              ";
                // line 58
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_body_copy_image", array()), "html", null, true));
                echo "
            </div>
            <div class=\"body-copy--text\">
              ";
                // line 61
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_body_copy_text", array()), "html", null, true));
                echo "
            </div>
          ";
            } elseif ((            // line 63
($context["image_alignment"] ?? null) == "left")) {
                // line 64
                echo "            <div class=\"body-copy--image\">
              ";
                // line 65
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_body_copy_image", array()), "html", null, true));
                echo "
            </div>
            <div class=\"body-copy--text\">
              ";
                // line 68
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_body_copy_text", array()), "html", null, true));
                echo "
            </div>
          ";
            } else {
                // line 71
                echo "            <div class=\"body-copy--text body-copy--text-full\">
              ";
                // line 72
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_body_copy_text", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 75
            echo "        ";
        } else {
            // line 76
            echo "          <div class=\"body-copy--text body-copy--text-full\">
            ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_body_copy_text", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 80
        echo "        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/campaign_base/templates/paragraph/paragraph--body-copy-with-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 80,  131 => 77,  128 => 76,  125 => 75,  119 => 72,  116 => 71,  110 => 68,  104 => 65,  101 => 64,  99 => 63,  94 => 61,  88 => 58,  85 => 57,  82 => 56,  80 => 55,  74 => 53,  71 => 52,  68 => 51,  63 => 83,  61 => 51,  56 => 50,  50 => 49,  48 => 46,  47 => 45,  46 => 44,  45 => 42,);
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
      {% set image_alignment = content.field_body_copy_image_position['#items'].getString() %}
      <div class=\"body-copy body-copy--{{ image_alignment }}\">
        <div class=\"body-copy--inner\">
        {% if content.field_body_copy_image %}
          {% if image_alignment == 'right' %}
            <div class=\"body-copy--image\">
              {{ content.field_body_copy_image }}
            </div>
            <div class=\"body-copy--text\">
              {{ content.field_body_copy_text }}
            </div>
          {% elseif image_alignment == 'left' %}
            <div class=\"body-copy--image\">
              {{ content.field_body_copy_image }}
            </div>
            <div class=\"body-copy--text\">
              {{ content.field_body_copy_text }}
            </div>
          {% else %}
            <div class=\"body-copy--text body-copy--text-full\">
              {{ content.field_body_copy_text }}
            </div>
          {% endif %}
        {% else %}
          <div class=\"body-copy--text body-copy--text-full\">
            {{ content.field_body_copy_text }}
          </div>
        {% endif %}
        </div>
      </div>
    {% endblock content %}
  </div>
{% endblock paragraph %}
", "themes/campaign_base/templates/paragraph/paragraph--body-copy-with-image.html.twig", "/var/www/html/themes/campaign_base/templates/paragraph/paragraph--body-copy-with-image.html.twig");
    }
}

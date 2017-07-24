<?php

/* AliDatatableBundle:Main:index.html.twig */
class __TwigTemplate_7139a734a43dc9c6685588330465e625c899ddf08b5e042db4dc5ab89f9dbe88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0747ae44c2da1b0f3f4ce79e3e04179ccfaf2d6f272ef94ae7cef3cb14a85b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0747ae44c2da1b0f3f4ce79e3e04179ccfaf2d6f272ef94ae7cef3cb14a85b65->enter($__internal_0747ae44c2da1b0f3f4ce79e3e04179ccfaf2d6f272ef94ae7cef3cb14a85b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AliDatatableBundle:Main:index.html.twig"));

        $__internal_e7580b635a88d6281585f9956d76cd5c6fd900b712c7214dd9ae14f45a862037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7580b635a88d6281585f9956d76cd5c6fd900b712c7214dd9ae14f45a862037->enter($__internal_e7580b635a88d6281585f9956d76cd5c6fd900b712c7214dd9ae14f45a862037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AliDatatableBundle:Main:index.html.twig"));

        // line 1
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_0747ae44c2da1b0f3f4ce79e3e04179ccfaf2d6f272ef94ae7cef3cb14a85b65->leave($__internal_0747ae44c2da1b0f3f4ce79e3e04179ccfaf2d6f272ef94ae7cef3cb14a85b65_prof);

        
        $__internal_e7580b635a88d6281585f9956d76cd5c6fd900b712c7214dd9ae14f45a862037->leave($__internal_e7580b635a88d6281585f9956d76cd5c6fd900b712c7214dd9ae14f45a862037_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_8ecd9c8fa10cd46d0a84c112c10c7810a3fac39084df5269e28410d0aa43613a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ecd9c8fa10cd46d0a84c112c10c7810a3fac39084df5269e28410d0aa43613a->enter($__internal_8ecd9c8fa10cd46d0a84c112c10c7810a3fac39084df5269e28410d0aa43613a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_2e5deae1fc96ea5d2106f908ca7f2ca05e3525dda1277c47da4779a09566d21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5deae1fc96ea5d2106f908ca7f2ca05e3525dda1277c47da4779a09566d21e->enter($__internal_2e5deae1fc96ea5d2106f908ca7f2ca05e3525dda1277c47da4779a09566d21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 2
        echo "    ";
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 3
            echo "    <form name=\"frm-";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\">
    ";
        }
        // line 5
        echo "        <table class=\"display table table table-striped table-bordered\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\"> 
            <thead> 
                <tr> 
                ";
        // line 8
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 9
            echo "                    <th width=\"1%\" ><input type=\"checkbox\" name=\"datatable_action_all\" /></th>
                ";
        }
        // line 11
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["label"] => $context["key"]) {
            // line 12
            echo "                    ";
            if (($context["label"] != "_identifier_")) {
                // line 13
                echo "                        <th>";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</th>
                    ";
            }
            // line 15
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                ";
        if (($context["action"] ?? $this->getContext($context, "action"))) {
            // line 17
            echo "                    <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.action"), "html", null, true);
            echo "</th>
                ";
        }
        // line 19
        echo "                </tr> 
            </thead>
            ";
        // line 21
        if (($context["search"] ?? $this->getContext($context, "search"))) {
            // line 22
            echo "            ";
            $context["i"] = 0;
            // line 23
            echo "            <tfoot>
                <tr>
                    ";
            // line 25
            if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
                // line 26
                echo "                    <th></th>
                    ";
            }
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["label"] => $context["key"]) {
                // line 29
                echo "                        ";
                if (($context["label"] != "_identifier_")) {
                    // line 30
                    echo "                            ";
                    if ( !twig_test_empty(($context["search_fields"] ?? $this->getContext($context, "search_fields")))) {
                        // line 31
                        echo "                                ";
                        if (twig_in_filter(($context["i"] ?? $this->getContext($context, "i")), ($context["search_fields"] ?? $this->getContext($context, "search_fields")))) {
                            // line 32
                            echo "                                <td><input index=\"";
                            echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                            echo "\" searchable=\"true\" type=\"text\" placeholder=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.search"), "html", null, true);
                            echo "\" class=\"search_init form-control input-sm\" /></td>
                                ";
                        } else {
                            // line 34
                            echo "                                <td></td>
                                ";
                        }
                        // line 36
                        echo "                            ";
                    } else {
                        // line 37
                        echo "                            <td><input index=\"";
                        echo twig_escape_filter($this->env, ($context["i"] ?? $this->getContext($context, "i")), "html", null, true);
                        echo "\" searchable=\"true\" type=\"text\" placeholder=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.search"), "html", null, true);
                        echo "\" class=\"search_init form-control input-sm\" /></td>
                            ";
                    }
                    // line 39
                    echo "                        ";
                } elseif (((($context["label"] == "_identifier_") && ($context["action"] ?? $this->getContext($context, "action"))) &&  !($context["action_twig"] ?? $this->getContext($context, "action_twig")))) {
                    // line 40
                    echo "                            <td></td>
                        ";
                }
                // line 42
                echo "                        ";
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 43
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                </tr>
            </tfoot>
            ";
        }
        // line 47
        echo "        </table>
    ";
        // line 48
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 49
            echo "    </form>
    ";
        }
        
        $__internal_2e5deae1fc96ea5d2106f908ca7f2ca05e3525dda1277c47da4779a09566d21e->leave($__internal_2e5deae1fc96ea5d2106f908ca7f2ca05e3525dda1277c47da4779a09566d21e_prof);

        
        $__internal_8ecd9c8fa10cd46d0a84c112c10c7810a3fac39084df5269e28410d0aa43613a->leave($__internal_8ecd9c8fa10cd46d0a84c112c10c7810a3fac39084df5269e28410d0aa43613a_prof);

    }

    public function getTemplateName()
    {
        return "AliDatatableBundle:Main:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 49,  175 => 48,  172 => 47,  167 => 44,  161 => 43,  158 => 42,  154 => 40,  151 => 39,  143 => 37,  140 => 36,  136 => 34,  128 => 32,  125 => 31,  122 => 30,  119 => 29,  114 => 28,  110 => 26,  108 => 25,  104 => 23,  101 => 22,  99 => 21,  95 => 19,  89 => 17,  86 => 16,  80 => 15,  74 => 13,  71 => 12,  66 => 11,  62 => 9,  60 => 8,  53 => 5,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block main %}
    {% if multiple %}
    <form name=\"frm-{{id}}\">
    {% endif %}
        <table class=\"display table table table-striped table-bordered\" id=\"{{id}}\"> 
            <thead> 
                <tr> 
                {% if multiple %}
                    <th width=\"1%\" ><input type=\"checkbox\" name=\"datatable_action_all\" /></th>
                {% endif %}
                {% for label,key in fields %}
                    {% if label != '_identifier_' %}
                        <th>{{ label }}</th>
                    {% endif %}
                {% endfor %}
                {% if action %}
                    <th>{{ 'ali.common.action'|dta_trans()  }}</th>
                {% endif %}
                </tr> 
            </thead>
            {% if search %}
            {% set i = 0 %}
            <tfoot>
                <tr>
                    {% if multiple %}
                    <th></th>
                    {% endif %}
                    {% for label,key in fields %}
                        {% if label != '_identifier_' %}
                            {% if search_fields is not empty %}
                                {% if i in search_fields %}
                                <td><input index=\"{{i}}\" searchable=\"true\" type=\"text\" placeholder=\"{{ 'ali.common.search'|dta_trans() }}\" class=\"search_init form-control input-sm\" /></td>
                                {% else %}
                                <td></td>
                                {% endif %}
                            {% else %}
                            <td><input index=\"{{i}}\" searchable=\"true\" type=\"text\" placeholder=\"{{ 'ali.common.search'|dta_trans() }}\" class=\"search_init form-control input-sm\" /></td>
                            {% endif %}
                        {% elseif label == '_identifier_'and action and not action_twig %}
                            <td></td>
                        {% endif %}
                        {% set i = i+1 %}
                    {% endfor %}
                </tr>
            </tfoot>
            {% endif %}
        </table>
    {% if multiple %}
    </form>
    {% endif %}
{% endblock main %}
", "AliDatatableBundle:Main:index.html.twig", "/Applications/MAMP/htdocs/nuse/vendor/ali/datatable/Ali/DatatableBundle/Resources/views/Main/index.html.twig");
    }
}

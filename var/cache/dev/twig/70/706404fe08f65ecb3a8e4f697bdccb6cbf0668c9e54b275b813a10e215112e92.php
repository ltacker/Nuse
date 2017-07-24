<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_55da330df21a68cd4f52dd7a3ec95322f9eb497c1e1dbca8d2e5520f072c39d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fc33f910716fb9c2b259009e16e76a5fc507510defa6e785f5da52cd85d529c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc33f910716fb9c2b259009e16e76a5fc507510defa6e785f5da52cd85d529c->enter($__internal_0fc33f910716fb9c2b259009e16e76a5fc507510defa6e785f5da52cd85d529c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d71e61def7282d72ba6dbd628513caead4c3f0980f2cad4a93fa03778e55cda8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71e61def7282d72ba6dbd628513caead4c3f0980f2cad4a93fa03778e55cda8->enter($__internal_d71e61def7282d72ba6dbd628513caead4c3f0980f2cad4a93fa03778e55cda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc33f910716fb9c2b259009e16e76a5fc507510defa6e785f5da52cd85d529c->leave($__internal_0fc33f910716fb9c2b259009e16e76a5fc507510defa6e785f5da52cd85d529c_prof);

        
        $__internal_d71e61def7282d72ba6dbd628513caead4c3f0980f2cad4a93fa03778e55cda8->leave($__internal_d71e61def7282d72ba6dbd628513caead4c3f0980f2cad4a93fa03778e55cda8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0a99f4503f9bcc2211b9a7d53705fde05ccae87f079506834d93f8d01a163471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a99f4503f9bcc2211b9a7d53705fde05ccae87f079506834d93f8d01a163471->enter($__internal_0a99f4503f9bcc2211b9a7d53705fde05ccae87f079506834d93f8d01a163471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_97f39ec7c7c72f20293cb0fc8b53eba918569b5fb663303666e850a5ac04804a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f39ec7c7c72f20293cb0fc8b53eba918569b5fb663303666e850a5ac04804a->enter($__internal_97f39ec7c7c72f20293cb0fc8b53eba918569b5fb663303666e850a5ac04804a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_97f39ec7c7c72f20293cb0fc8b53eba918569b5fb663303666e850a5ac04804a->leave($__internal_97f39ec7c7c72f20293cb0fc8b53eba918569b5fb663303666e850a5ac04804a_prof);

        
        $__internal_0a99f4503f9bcc2211b9a7d53705fde05ccae87f079506834d93f8d01a163471->leave($__internal_0a99f4503f9bcc2211b9a7d53705fde05ccae87f079506834d93f8d01a163471_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/nuse/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

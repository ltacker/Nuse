<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_6465bea2c916a43eef63efcfedeeaf1f5d1db684e87dc69b09fae94e03a4c7f8 extends Twig_Template
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
        $__internal_050007b3b911c3430e36003c0cf3aed55286a97acdaed05a16894594dd6c6ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050007b3b911c3430e36003c0cf3aed55286a97acdaed05a16894594dd6c6ce5->enter($__internal_050007b3b911c3430e36003c0cf3aed55286a97acdaed05a16894594dd6c6ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_6e48484371828fb613f126070f243df1ce3992d2cf552e10a1a6d85eaac480dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e48484371828fb613f126070f243df1ce3992d2cf552e10a1a6d85eaac480dc->enter($__internal_6e48484371828fb613f126070f243df1ce3992d2cf552e10a1a6d85eaac480dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_050007b3b911c3430e36003c0cf3aed55286a97acdaed05a16894594dd6c6ce5->leave($__internal_050007b3b911c3430e36003c0cf3aed55286a97acdaed05a16894594dd6c6ce5_prof);

        
        $__internal_6e48484371828fb613f126070f243df1ce3992d2cf552e10a1a6d85eaac480dc->leave($__internal_6e48484371828fb613f126070f243df1ce3992d2cf552e10a1a6d85eaac480dc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/MAMP/htdocs/nuse/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}

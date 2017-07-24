<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_aef26673dcd4e206dfeb9e81b7ac345d9406f7480de0ff51e910650858a54c34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7acb18a46a13fc9f1513debc93a60f4e432e4b01ef261bc1daf3a647a2438db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7acb18a46a13fc9f1513debc93a60f4e432e4b01ef261bc1daf3a647a2438db->enter($__internal_f7acb18a46a13fc9f1513debc93a60f4e432e4b01ef261bc1daf3a647a2438db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f237b8780be1239ab31d3a1acdd27ee4873627df98665c621904518fe90f0c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f237b8780be1239ab31d3a1acdd27ee4873627df98665c621904518fe90f0c82->enter($__internal_f237b8780be1239ab31d3a1acdd27ee4873627df98665c621904518fe90f0c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7acb18a46a13fc9f1513debc93a60f4e432e4b01ef261bc1daf3a647a2438db->leave($__internal_f7acb18a46a13fc9f1513debc93a60f4e432e4b01ef261bc1daf3a647a2438db_prof);

        
        $__internal_f237b8780be1239ab31d3a1acdd27ee4873627df98665c621904518fe90f0c82->leave($__internal_f237b8780be1239ab31d3a1acdd27ee4873627df98665c621904518fe90f0c82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2308b5e41edba13bd3207d83d650a3bb7553d8020068c81133c28a4422062c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2308b5e41edba13bd3207d83d650a3bb7553d8020068c81133c28a4422062c45->enter($__internal_2308b5e41edba13bd3207d83d650a3bb7553d8020068c81133c28a4422062c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b47577fd6c4f9ac405b4cb3fd9c1f073834c79d9fce8395b4a903cec75bc598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b47577fd6c4f9ac405b4cb3fd9c1f073834c79d9fce8395b4a903cec75bc598->enter($__internal_7b47577fd6c4f9ac405b4cb3fd9c1f073834c79d9fce8395b4a903cec75bc598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7b47577fd6c4f9ac405b4cb3fd9c1f073834c79d9fce8395b4a903cec75bc598->leave($__internal_7b47577fd6c4f9ac405b4cb3fd9c1f073834c79d9fce8395b4a903cec75bc598_prof);

        
        $__internal_2308b5e41edba13bd3207d83d650a3bb7553d8020068c81133c28a4422062c45->leave($__internal_2308b5e41edba13bd3207d83d650a3bb7553d8020068c81133c28a4422062c45_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d91913e2b3fff2af13f6cde47992be2dd63b1dfd0eac60ee22a496551609c112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91913e2b3fff2af13f6cde47992be2dd63b1dfd0eac60ee22a496551609c112->enter($__internal_d91913e2b3fff2af13f6cde47992be2dd63b1dfd0eac60ee22a496551609c112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6a3cac3d5fe3d1713c6d562ee7b7d6a2ac0d675db4070bf649fd2ba7bec01ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3cac3d5fe3d1713c6d562ee7b7d6a2ac0d675db4070bf649fd2ba7bec01ef6->enter($__internal_6a3cac3d5fe3d1713c6d562ee7b7d6a2ac0d675db4070bf649fd2ba7bec01ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6a3cac3d5fe3d1713c6d562ee7b7d6a2ac0d675db4070bf649fd2ba7bec01ef6->leave($__internal_6a3cac3d5fe3d1713c6d562ee7b7d6a2ac0d675db4070bf649fd2ba7bec01ef6_prof);

        
        $__internal_d91913e2b3fff2af13f6cde47992be2dd63b1dfd0eac60ee22a496551609c112->leave($__internal_d91913e2b3fff2af13f6cde47992be2dd63b1dfd0eac60ee22a496551609c112_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7128b21f38c5755b2e0ab8ec3c7cf9fc789193e079467a47d44d65ee3db3eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7128b21f38c5755b2e0ab8ec3c7cf9fc789193e079467a47d44d65ee3db3eaf->enter($__internal_b7128b21f38c5755b2e0ab8ec3c7cf9fc789193e079467a47d44d65ee3db3eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e168e72ebb34f06545c272efe79af941908c4a291a540bffad12e16e66e74ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e168e72ebb34f06545c272efe79af941908c4a291a540bffad12e16e66e74ea->enter($__internal_1e168e72ebb34f06545c272efe79af941908c4a291a540bffad12e16e66e74ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1e168e72ebb34f06545c272efe79af941908c4a291a540bffad12e16e66e74ea->leave($__internal_1e168e72ebb34f06545c272efe79af941908c4a291a540bffad12e16e66e74ea_prof);

        
        $__internal_b7128b21f38c5755b2e0ab8ec3c7cf9fc789193e079467a47d44d65ee3db3eaf->leave($__internal_b7128b21f38c5755b2e0ab8ec3c7cf9fc789193e079467a47d44d65ee3db3eaf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/nuse/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

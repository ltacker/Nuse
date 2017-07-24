<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_159b97f8124651aff800bcbb9d06280c1695c7000e420722bbe6cda6e891a98c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_51f53c5adb6aeea5a84e6b4fe39bde39b00d3bd043209019bc46fddf147dd3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f53c5adb6aeea5a84e6b4fe39bde39b00d3bd043209019bc46fddf147dd3cb->enter($__internal_51f53c5adb6aeea5a84e6b4fe39bde39b00d3bd043209019bc46fddf147dd3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8a10f27bfd56dfb0be6f45e13b7761f4eb0e0e9f61a1bbc3713fedf425e1595b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a10f27bfd56dfb0be6f45e13b7761f4eb0e0e9f61a1bbc3713fedf425e1595b->enter($__internal_8a10f27bfd56dfb0be6f45e13b7761f4eb0e0e9f61a1bbc3713fedf425e1595b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51f53c5adb6aeea5a84e6b4fe39bde39b00d3bd043209019bc46fddf147dd3cb->leave($__internal_51f53c5adb6aeea5a84e6b4fe39bde39b00d3bd043209019bc46fddf147dd3cb_prof);

        
        $__internal_8a10f27bfd56dfb0be6f45e13b7761f4eb0e0e9f61a1bbc3713fedf425e1595b->leave($__internal_8a10f27bfd56dfb0be6f45e13b7761f4eb0e0e9f61a1bbc3713fedf425e1595b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d2c2cba34ec46929000ad234d717bfca77e2f2017c0133afd5b6daf128129dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2c2cba34ec46929000ad234d717bfca77e2f2017c0133afd5b6daf128129dd->enter($__internal_2d2c2cba34ec46929000ad234d717bfca77e2f2017c0133afd5b6daf128129dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_814ae63dc5264584a8f0ca34c106b6e626546f96ac8c6de71a9bae06284fa4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814ae63dc5264584a8f0ca34c106b6e626546f96ac8c6de71a9bae06284fa4b7->enter($__internal_814ae63dc5264584a8f0ca34c106b6e626546f96ac8c6de71a9bae06284fa4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_814ae63dc5264584a8f0ca34c106b6e626546f96ac8c6de71a9bae06284fa4b7->leave($__internal_814ae63dc5264584a8f0ca34c106b6e626546f96ac8c6de71a9bae06284fa4b7_prof);

        
        $__internal_2d2c2cba34ec46929000ad234d717bfca77e2f2017c0133afd5b6daf128129dd->leave($__internal_2d2c2cba34ec46929000ad234d717bfca77e2f2017c0133afd5b6daf128129dd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95d0dadfb2a51afec901978fb18702e92ec9b9f99e006380da10632d0de84a80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d0dadfb2a51afec901978fb18702e92ec9b9f99e006380da10632d0de84a80->enter($__internal_95d0dadfb2a51afec901978fb18702e92ec9b9f99e006380da10632d0de84a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_09941d1b17d993052f34538ad17dea8b03a3550fe59100dd1f28e5399be76d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09941d1b17d993052f34538ad17dea8b03a3550fe59100dd1f28e5399be76d26->enter($__internal_09941d1b17d993052f34538ad17dea8b03a3550fe59100dd1f28e5399be76d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09941d1b17d993052f34538ad17dea8b03a3550fe59100dd1f28e5399be76d26->leave($__internal_09941d1b17d993052f34538ad17dea8b03a3550fe59100dd1f28e5399be76d26_prof);

        
        $__internal_95d0dadfb2a51afec901978fb18702e92ec9b9f99e006380da10632d0de84a80->leave($__internal_95d0dadfb2a51afec901978fb18702e92ec9b9f99e006380da10632d0de84a80_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58dab9f31b3c8bd00289dc330f16d75390cd043befdce393c2448c59ba4dab55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58dab9f31b3c8bd00289dc330f16d75390cd043befdce393c2448c59ba4dab55->enter($__internal_58dab9f31b3c8bd00289dc330f16d75390cd043befdce393c2448c59ba4dab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bc7a065e142f607b6476bbab7329f3e5becc2831c78a0acd1077f0e330fece44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7a065e142f607b6476bbab7329f3e5becc2831c78a0acd1077f0e330fece44->enter($__internal_bc7a065e142f607b6476bbab7329f3e5becc2831c78a0acd1077f0e330fece44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc7a065e142f607b6476bbab7329f3e5becc2831c78a0acd1077f0e330fece44->leave($__internal_bc7a065e142f607b6476bbab7329f3e5becc2831c78a0acd1077f0e330fece44_prof);

        
        $__internal_58dab9f31b3c8bd00289dc330f16d75390cd043befdce393c2448c59ba4dab55->leave($__internal_58dab9f31b3c8bd00289dc330f16d75390cd043befdce393c2448c59ba4dab55_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/nuse/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

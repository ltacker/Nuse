<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_9042825db8057b769f3af7462c3eb1c717a1a768c5b973e4c7998b19925ce1c3 extends Twig_Template
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
        $__internal_ba5d83064341e9ec3e24af965692bdb62211bb6432bf4ad0cc11fa28d075a4fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5d83064341e9ec3e24af965692bdb62211bb6432bf4ad0cc11fa28d075a4fa->enter($__internal_ba5d83064341e9ec3e24af965692bdb62211bb6432bf4ad0cc11fa28d075a4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_805ae0eca7317b215cbb8dff26f793c333ceb3806f90cd11fad7009eb0138a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805ae0eca7317b215cbb8dff26f793c333ceb3806f90cd11fad7009eb0138a5f->enter($__internal_805ae0eca7317b215cbb8dff26f793c333ceb3806f90cd11fad7009eb0138a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_ba5d83064341e9ec3e24af965692bdb62211bb6432bf4ad0cc11fa28d075a4fa->leave($__internal_ba5d83064341e9ec3e24af965692bdb62211bb6432bf4ad0cc11fa28d075a4fa_prof);

        
        $__internal_805ae0eca7317b215cbb8dff26f793c333ceb3806f90cd11fad7009eb0138a5f->leave($__internal_805ae0eca7317b215cbb8dff26f793c333ceb3806f90cd11fad7009eb0138a5f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Applications/MAMP/htdocs/nuse/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_93fa6ad9c7fcf935c4bc671eeabd2f9eee25d272a48ca492c4ddb3b7892fe974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecc229f47b7628b847e0d13f550abab05e405e5740371b24ae0ff331ddedcd31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc229f47b7628b847e0d13f550abab05e405e5740371b24ae0ff331ddedcd31->enter($__internal_ecc229f47b7628b847e0d13f550abab05e405e5740371b24ae0ff331ddedcd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_dc2bfdb2819fcf27119d41df4eb04e79fd9f1ebeaea5b4e1ef061d3d441e1fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2bfdb2819fcf27119d41df4eb04e79fd9f1ebeaea5b4e1ef061d3d441e1fb1->enter($__internal_dc2bfdb2819fcf27119d41df4eb04e79fd9f1ebeaea5b4e1ef061d3d441e1fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ecc229f47b7628b847e0d13f550abab05e405e5740371b24ae0ff331ddedcd31->leave($__internal_ecc229f47b7628b847e0d13f550abab05e405e5740371b24ae0ff331ddedcd31_prof);

        
        $__internal_dc2bfdb2819fcf27119d41df4eb04e79fd9f1ebeaea5b4e1ef061d3d441e1fb1->leave($__internal_dc2bfdb2819fcf27119d41df4eb04e79fd9f1ebeaea5b4e1ef061d3d441e1fb1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c5ec5025a3b1447b144b30690d24168f47494d541d2b7aecf8a2e5944f4cb9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5ec5025a3b1447b144b30690d24168f47494d541d2b7aecf8a2e5944f4cb9d->enter($__internal_5c5ec5025a3b1447b144b30690d24168f47494d541d2b7aecf8a2e5944f4cb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7246b86dc9ce0e2e168de33a5e095fc9d64fd825570b8aef34fd5f54247141c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7246b86dc9ce0e2e168de33a5e095fc9d64fd825570b8aef34fd5f54247141c3->enter($__internal_7246b86dc9ce0e2e168de33a5e095fc9d64fd825570b8aef34fd5f54247141c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7246b86dc9ce0e2e168de33a5e095fc9d64fd825570b8aef34fd5f54247141c3->leave($__internal_7246b86dc9ce0e2e168de33a5e095fc9d64fd825570b8aef34fd5f54247141c3_prof);

        
        $__internal_5c5ec5025a3b1447b144b30690d24168f47494d541d2b7aecf8a2e5944f4cb9d->leave($__internal_5c5ec5025a3b1447b144b30690d24168f47494d541d2b7aecf8a2e5944f4cb9d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91a795328de2f065ee395c224a8b62e310d8f12667980921f41f313390015a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a795328de2f065ee395c224a8b62e310d8f12667980921f41f313390015a6f->enter($__internal_91a795328de2f065ee395c224a8b62e310d8f12667980921f41f313390015a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_57b36e0e432aa8d341e0df725b6e774b55e4b723554df558b5e40b6bd4cb4e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b36e0e432aa8d341e0df725b6e774b55e4b723554df558b5e40b6bd4cb4e1c->enter($__internal_57b36e0e432aa8d341e0df725b6e774b55e4b723554df558b5e40b6bd4cb4e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_57b36e0e432aa8d341e0df725b6e774b55e4b723554df558b5e40b6bd4cb4e1c->leave($__internal_57b36e0e432aa8d341e0df725b6e774b55e4b723554df558b5e40b6bd4cb4e1c_prof);

        
        $__internal_91a795328de2f065ee395c224a8b62e310d8f12667980921f41f313390015a6f->leave($__internal_91a795328de2f065ee395c224a8b62e310d8f12667980921f41f313390015a6f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8888fe5637703f1a4a5679f31965992adda363b8753e2054806f4180bd13e824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8888fe5637703f1a4a5679f31965992adda363b8753e2054806f4180bd13e824->enter($__internal_8888fe5637703f1a4a5679f31965992adda363b8753e2054806f4180bd13e824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67c0ef2f1689c91fe6d0f27631fe6f3c2f9290aa990b40fbcba25dcc52147d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c0ef2f1689c91fe6d0f27631fe6f3c2f9290aa990b40fbcba25dcc52147d5a->enter($__internal_67c0ef2f1689c91fe6d0f27631fe6f3c2f9290aa990b40fbcba25dcc52147d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67c0ef2f1689c91fe6d0f27631fe6f3c2f9290aa990b40fbcba25dcc52147d5a->leave($__internal_67c0ef2f1689c91fe6d0f27631fe6f3c2f9290aa990b40fbcba25dcc52147d5a_prof);

        
        $__internal_8888fe5637703f1a4a5679f31965992adda363b8753e2054806f4180bd13e824->leave($__internal_8888fe5637703f1a4a5679f31965992adda363b8753e2054806f4180bd13e824_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_682fbf4812c6354f20802f6d5339338f5961948d503d796871d048591b2791d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682fbf4812c6354f20802f6d5339338f5961948d503d796871d048591b2791d0->enter($__internal_682fbf4812c6354f20802f6d5339338f5961948d503d796871d048591b2791d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c00319c576226fb98b66b32d6750be7419968683a33c9ca9fe98f370e18e77cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00319c576226fb98b66b32d6750be7419968683a33c9ca9fe98f370e18e77cd->enter($__internal_c00319c576226fb98b66b32d6750be7419968683a33c9ca9fe98f370e18e77cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c00319c576226fb98b66b32d6750be7419968683a33c9ca9fe98f370e18e77cd->leave($__internal_c00319c576226fb98b66b32d6750be7419968683a33c9ca9fe98f370e18e77cd_prof);

        
        $__internal_682fbf4812c6354f20802f6d5339338f5961948d503d796871d048591b2791d0->leave($__internal_682fbf4812c6354f20802f6d5339338f5961948d503d796871d048591b2791d0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/nuse/app/Resources/views/base.html.twig");
    }
}

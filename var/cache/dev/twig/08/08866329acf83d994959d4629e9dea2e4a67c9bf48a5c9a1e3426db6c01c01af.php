<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_26c56b6bebde5223cc5bc10d5e84235e091ff6133c4aa58e6d4051f7015426c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef32e5f6603a03ddd6eb16a0ccd3efff7e59b903e068ac20fd1fe5abdb7b422d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef32e5f6603a03ddd6eb16a0ccd3efff7e59b903e068ac20fd1fe5abdb7b422d->enter($__internal_ef32e5f6603a03ddd6eb16a0ccd3efff7e59b903e068ac20fd1fe5abdb7b422d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bb2e25348c48aa7ea7b01602652ec32c70711430259da153ba2a08ce7a52a8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2e25348c48aa7ea7b01602652ec32c70711430259da153ba2a08ce7a52a8b7->enter($__internal_bb2e25348c48aa7ea7b01602652ec32c70711430259da153ba2a08ce7a52a8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef32e5f6603a03ddd6eb16a0ccd3efff7e59b903e068ac20fd1fe5abdb7b422d->leave($__internal_ef32e5f6603a03ddd6eb16a0ccd3efff7e59b903e068ac20fd1fe5abdb7b422d_prof);

        
        $__internal_bb2e25348c48aa7ea7b01602652ec32c70711430259da153ba2a08ce7a52a8b7->leave($__internal_bb2e25348c48aa7ea7b01602652ec32c70711430259da153ba2a08ce7a52a8b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7432c1fbef66b502883a0cf7c81325e910dfe61773cd0032e1253c81657aa13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7432c1fbef66b502883a0cf7c81325e910dfe61773cd0032e1253c81657aa13->enter($__internal_d7432c1fbef66b502883a0cf7c81325e910dfe61773cd0032e1253c81657aa13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_35277c941903cf3789f4d83452c9e4b6003f11bcdd4d4a431f916ebb07d9d1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35277c941903cf3789f4d83452c9e4b6003f11bcdd4d4a431f916ebb07d9d1eb->enter($__internal_35277c941903cf3789f4d83452c9e4b6003f11bcdd4d4a431f916ebb07d9d1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_35277c941903cf3789f4d83452c9e4b6003f11bcdd4d4a431f916ebb07d9d1eb->leave($__internal_35277c941903cf3789f4d83452c9e4b6003f11bcdd4d4a431f916ebb07d9d1eb_prof);

        
        $__internal_d7432c1fbef66b502883a0cf7c81325e910dfe61773cd0032e1253c81657aa13->leave($__internal_d7432c1fbef66b502883a0cf7c81325e910dfe61773cd0032e1253c81657aa13_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f8da77b140e6bf34445c2c091613a94b1122dfee57d46d2c3acbca091c9d899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8da77b140e6bf34445c2c091613a94b1122dfee57d46d2c3acbca091c9d899->enter($__internal_8f8da77b140e6bf34445c2c091613a94b1122dfee57d46d2c3acbca091c9d899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab3244de4efb6f9649402643329e9ebca71d51b960450956e5e93110aa901483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3244de4efb6f9649402643329e9ebca71d51b960450956e5e93110aa901483->enter($__internal_ab3244de4efb6f9649402643329e9ebca71d51b960450956e5e93110aa901483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ab3244de4efb6f9649402643329e9ebca71d51b960450956e5e93110aa901483->leave($__internal_ab3244de4efb6f9649402643329e9ebca71d51b960450956e5e93110aa901483_prof);

        
        $__internal_8f8da77b140e6bf34445c2c091613a94b1122dfee57d46d2c3acbca091c9d899->leave($__internal_8f8da77b140e6bf34445c2c091613a94b1122dfee57d46d2c3acbca091c9d899_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_77e0bf8c0111b0c151859d5b30c3bf78a4ce5daff05a42d5418fd691b907275b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e0bf8c0111b0c151859d5b30c3bf78a4ce5daff05a42d5418fd691b907275b->enter($__internal_77e0bf8c0111b0c151859d5b30c3bf78a4ce5daff05a42d5418fd691b907275b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4699b68a08bb48bfcc698e5fd6897deda0fa365765550fda55ac81a1a90172c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4699b68a08bb48bfcc698e5fd6897deda0fa365765550fda55ac81a1a90172c1->enter($__internal_4699b68a08bb48bfcc698e5fd6897deda0fa365765550fda55ac81a1a90172c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_4699b68a08bb48bfcc698e5fd6897deda0fa365765550fda55ac81a1a90172c1->leave($__internal_4699b68a08bb48bfcc698e5fd6897deda0fa365765550fda55ac81a1a90172c1_prof);

        
        $__internal_77e0bf8c0111b0c151859d5b30c3bf78a4ce5daff05a42d5418fd691b907275b->leave($__internal_77e0bf8c0111b0c151859d5b30c3bf78a4ce5daff05a42d5418fd691b907275b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/nuse/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

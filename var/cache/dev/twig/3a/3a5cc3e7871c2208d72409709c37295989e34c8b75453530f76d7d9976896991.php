<?php

/* default/page.html.twig */
class __TwigTemplate_32f5fe0ec16a7ed055ecd2268497b5d7bc4ff2d67a8e0b464e5d32b29e612daa extends Twig_Template
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
        $__internal_f49b46ff3446893578bd96343ed0a57fc6808e8bbec7215702053831aa41c2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49b46ff3446893578bd96343ed0a57fc6808e8bbec7215702053831aa41c2f3->enter($__internal_f49b46ff3446893578bd96343ed0a57fc6808e8bbec7215702053831aa41c2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/page.html.twig"));

        $__internal_7fbf430c8a9c258a8dc16f21429144f42385e3490b6f5dbf9f64cc36ba401730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbf430c8a9c258a8dc16f21429144f42385e3490b6f5dbf9f64cc36ba401730->enter($__internal_7fbf430c8a9c258a8dc16f21429144f42385e3490b6f5dbf9f64cc36ba401730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/page.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      Nuse
    </title>
    <link href=\"http://fonts.googleapis.com/css?family=Lato:100,300,400,700\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/se7en-font.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/isotope.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/jquery.fancybox.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/wizard.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/select2.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/morris.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/datatables.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/datepicker.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/timepicker.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/colorpicker.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-switch.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-editable.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/daterange-picker.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/typeahead.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/summernote.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/ladda-themeless.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/social-buttons.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pygments.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/color/green.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"alternate stylesheet\" title=\"green-theme\" type=\"text/css\" />
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/color/orange.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"alternate stylesheet\" title=\"orange-theme\" type=\"text/css\" />
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/color/magenta.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"alternate stylesheet\" title=\"magenta-theme\" type=\"text/css\" />
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/color/gray.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"alternate stylesheet\" title=\"gray-theme\" type=\"text/css\" />
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/jquery.fileupload-ui.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/dropzone.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />

    <script src=\"http://code.jquery.com/jquery-1.10.2.min.js\" type=\"text/javascript\"></script>
    <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\" type=\"text/javascript\"></script>

    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/raphael.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/selectivizr-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.mousewheel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.vmap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.vmap.world.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.bootstrap.wizard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/excanvas.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.isotope.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/isotope_extras.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.fancybox.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/select2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/styleswitcher.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wysiwyg.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/typeahead.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/summernote.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.inputmask.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.validate.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-fileupload.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-timepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-colorpicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/typeahead.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/spin.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/ladda.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/mockjax.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-editable.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/xeditable-demo-mock.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/xeditable-demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/address.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/daterange-picker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/date.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/skycons.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fitvids.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/dropzone.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/respond.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- <script src=\"{a{ asset('assets/js/like.min.js') }}\" type=\"text/javascript\"></script> -->


    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

    <link href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/alidatatable/third-party/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/alidatatable/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />

    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/alidatatable/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/alidatatable/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/alidatatable/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


    <meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
  </head>
  <body class=\"page-header-fixed bg-1\">
    <div class=\"modal-shiftfix\">
      <div class=\"container-fluid main-content\">

        <div class=\"row\" style=\"margin-top:20px;margin-bottom:20px;\">
          <center><img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/logoNuse.png"), "html", null, true);
        echo "\" style=\"width:72px;height:72px;\"></img></center>
        </div>

        <div class=\"row\">

          <!--<div class=\"col-lg-2\">
            <img src=\"{a{ asset('assets/logoNuse.png') }}\" style=\"max-width:100%;max-height:100%;text-align:center;vertical-align:middle;\"></img>
          </div>-->

          <div class=\"col-lg-6\">
            <div class=\"widget-container fluid-height clearfix\">
              <div class=\"heading\">
                Themes
              </div>
              <div class=\"widget-content padded clearfix\">
                ";
        // line 119
        echo $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->datatable(array("edit_route" => "like_edit", "delete_route" => "like_delete", "js" => array("bLengthChange" => false, "bInfo" => false, "sAjaxSource" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("likegrid"))));
        // line 127
        echo "

                <form id=\"preferenceForm\" action=\"#\" class=\"form-horizontal\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-1\">Theme</label>
                    <div class=\"col-md-3\">
                      <input name=\"name\" class=\"form-control\" placeholder=\"Text\" type=\"text\">
                    </div>
                    <div class=\"col-md-3\">
                      <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <div class=\"col-lg-4\">
            <div class=\"widget-container fluid-height\">
              <div class=\"heading\">
                <i class=\"fa fa-long-arrow-right\"></i>Recherche
              </div>
              <div class=\"widget-content padded\">
                <form id=\"goForm\" action=\"#\" class=\"form-horizontal\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-2\">Temps:</label>
                    <div class=\"col-md-4\">
                      <input name=\"time\" class=\"form-control\" placeholder=\"minutes\" type=\"text\">
                    </div>
                    <div class=\"col-md-3\">
                      <button class=\"btn btn-primary\" type=\"submit\">GO !</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

      </div>
    </div>

    <script type=\"text/javascript\">
      \$(document).ready(function() {
          // Lorsque je soumets le formulaire
          \$('#preferenceForm').on('submit', function(e) {
              e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
              var \$this = \$(this); // L'objet jQuery du formulaire

              // Je récupère les valeurs
              var name = \$('#name').val();
              // Je vérifie une première fois pour ne pas lancer la requête HTTP
              // si je sais que mon PHP renverra une erreur
              if(name === '') {
                  alert('Les champs doivent êtres remplis');
              } else {
                  // Envoi de la requête HTTP en mode asynchrone
                  \$.ajax({
                      url: Routing.generate('addlike'),
                      type: 'POST',
                      data: \$this.serialize(),
                      dataType: 'json',
                      //success: function(html) {
                      //    alert(html);
                      //}
                  });
              }
          });
      });
    </script>

    <script type=\"text/javascript\">
      \$(document).ready(function() {
          // Lorsque je soumets le formulaire
          \$('#goForm').on('submit', function(e) {
              e.preventDefault();
              var \$this = \$(this);

              // Je récupère les valeurs
              var time = \$('#time').val();

              \$.ajax({
                  url: Routing.generate('go'),
                  type: 'POST',
                  data: \$this.serialize(),
                  dataType: 'json',
              });
          });
      });
    </script>

  </body>
</html>
";
        
        $__internal_f49b46ff3446893578bd96343ed0a57fc6808e8bbec7215702053831aa41c2f3->leave($__internal_f49b46ff3446893578bd96343ed0a57fc6808e8bbec7215702053831aa41c2f3_prof);

        
        $__internal_7fbf430c8a9c258a8dc16f21429144f42385e3490b6f5dbf9f64cc36ba401730->leave($__internal_7fbf430c8a9c258a8dc16f21429144f42385e3490b6f5dbf9f64cc36ba401730_prof);

    }

    public function getTemplateName()
    {
        return "default/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 127,  376 => 119,  358 => 104,  345 => 94,  341 => 93,  337 => 92,  332 => 90,  328 => 89,  323 => 87,  319 => 86,  311 => 81,  307 => 80,  303 => 79,  299 => 78,  295 => 77,  291 => 76,  287 => 75,  283 => 74,  279 => 73,  275 => 72,  271 => 71,  267 => 70,  263 => 69,  259 => 68,  255 => 67,  251 => 66,  247 => 65,  243 => 64,  239 => 63,  235 => 62,  231 => 61,  227 => 60,  223 => 59,  219 => 58,  215 => 57,  211 => 56,  207 => 55,  203 => 54,  199 => 53,  195 => 52,  191 => 51,  187 => 50,  183 => 49,  179 => 48,  175 => 47,  171 => 46,  167 => 45,  163 => 44,  159 => 43,  155 => 42,  151 => 41,  147 => 40,  143 => 39,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  25 => 1,);
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
    <title>
      Nuse
    </title>
    <link href=\"http://fonts.googleapis.com/css?family=Lato:100,300,400,700\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"{{ asset('assets/css/font-awesome.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/se7en-font.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/isotope.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/jquery.fancybox.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/wizard.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/select2.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/morris.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/datatables.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/datepicker.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/timepicker.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/colorpicker.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/bootstrap-switch.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/bootstrap-editable.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/daterange-picker.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/typeahead.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/summernote.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/ladda-themeless.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/social-buttons.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/pygments.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/style.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/color/green.css') }}\" media=\"all\" rel=\"alternate stylesheet\" title=\"green-theme\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/color/orange.css') }}\" media=\"all\" rel=\"alternate stylesheet\" title=\"orange-theme\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/color/magenta.css') }}\" media=\"all\" rel=\"alternate stylesheet\" title=\"magenta-theme\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/color/gray.css') }}\" media=\"all\" rel=\"alternate stylesheet\" title=\"gray-theme\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/jquery.fileupload-ui.css') }}\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('assets/css/dropzone.css') }}\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />

    <script src=\"http://code.jquery.com/jquery-1.10.2.min.js\" type=\"text/javascript\"></script>
    <script src=\"http://code.jquery.com/ui/1.10.3/jquery-ui.js\" type=\"text/javascript\"></script>

    <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/raphael.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/selectivizr-min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/jquery.mousewheel.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/jquery.vmap.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/jquery.vmap.sampledata.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/jquery.vmap.world.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/jquery.bootstrap.wizard.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/jquery.easy-pie-chart.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/excanvas.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/jquery.isotope.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/isotope_extras.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/modernizr.custom.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/jquery.fancybox.pack.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/select2.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/styleswitcher.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/wysiwyg.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/typeahead.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/summernote.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/jquery.inputmask.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/jquery.validate.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/bootstrap-fileupload.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/bootstrap-datepicker.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/bootstrap-timepicker.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/bootstrap-colorpicker.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/bootstrap-switch.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/typeahead.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/spin.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/ladda.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/mockjax.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/bootstrap-editable.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/xeditable-demo-mock.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/xeditable-demo.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/address.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/daterange-picker.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/date.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/morris.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/skycons.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/fitvids.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/jquery.sparkline.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/dropzone.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/main.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/respond.js') }}\" type=\"text/javascript\"></script>

    <!-- <script src=\"{a{ asset('assets/js/like.min.js') }}\" type=\"text/javascript\"></script> -->


    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>

    <link href=\"{{ asset('bundles/alidatatable/third-party/bootstrap/css/bootstrap.min.css') }}\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ asset('bundles/alidatatable/css/dataTables.bootstrap.min.css') }}\" media=\"screen\" rel=\"stylesheet\" type=\"text/css\" />

    <script src=\"{{ asset('bundles/alidatatable/js/jquery.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/alidatatable/js/jquery.dataTables.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/alidatatable/js/dataTables.bootstrap.min.js') }}\" type=\"text/javascript\"></script>


    <meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">
  </head>
  <body class=\"page-header-fixed bg-1\">
    <div class=\"modal-shiftfix\">
      <div class=\"container-fluid main-content\">

        <div class=\"row\" style=\"margin-top:20px;margin-bottom:20px;\">
          <center><img src=\"{{ asset('assets/logoNuse.png') }}\" style=\"width:72px;height:72px;\"></img></center>
        </div>

        <div class=\"row\">

          <!--<div class=\"col-lg-2\">
            <img src=\"{a{ asset('assets/logoNuse.png') }}\" style=\"max-width:100%;max-height:100%;text-align:center;vertical-align:middle;\"></img>
          </div>-->

          <div class=\"col-lg-6\">
            <div class=\"widget-container fluid-height clearfix\">
              <div class=\"heading\">
                Themes
              </div>
              <div class=\"widget-content padded clearfix\">
                {{ datatable({
                    'edit_route' : 'like_edit',
                    'delete_route' : 'like_delete',
                    'js' : {
                            \"bLengthChange\": false,
                            \"bInfo\":false,
                            'sAjaxSource' : path('likegrid')
                        }
                }) }}

                <form id=\"preferenceForm\" action=\"#\" class=\"form-horizontal\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-1\">Theme</label>
                    <div class=\"col-md-3\">
                      <input name=\"name\" class=\"form-control\" placeholder=\"Text\" type=\"text\">
                    </div>
                    <div class=\"col-md-3\">
                      <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <div class=\"col-lg-4\">
            <div class=\"widget-container fluid-height\">
              <div class=\"heading\">
                <i class=\"fa fa-long-arrow-right\"></i>Recherche
              </div>
              <div class=\"widget-content padded\">
                <form id=\"goForm\" action=\"#\" class=\"form-horizontal\">
                  <div class=\"form-group\">
                    <label class=\"control-label col-md-2\">Temps:</label>
                    <div class=\"col-md-4\">
                      <input name=\"time\" class=\"form-control\" placeholder=\"minutes\" type=\"text\">
                    </div>
                    <div class=\"col-md-3\">
                      <button class=\"btn btn-primary\" type=\"submit\">GO !</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

      </div>
    </div>

    <script type=\"text/javascript\">
      \$(document).ready(function() {
          // Lorsque je soumets le formulaire
          \$('#preferenceForm').on('submit', function(e) {
              e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
              var \$this = \$(this); // L'objet jQuery du formulaire

              // Je récupère les valeurs
              var name = \$('#name').val();
              // Je vérifie une première fois pour ne pas lancer la requête HTTP
              // si je sais que mon PHP renverra une erreur
              if(name === '') {
                  alert('Les champs doivent êtres remplis');
              } else {
                  // Envoi de la requête HTTP en mode asynchrone
                  \$.ajax({
                      url: Routing.generate('addlike'),
                      type: 'POST',
                      data: \$this.serialize(),
                      dataType: 'json',
                      //success: function(html) {
                      //    alert(html);
                      //}
                  });
              }
          });
      });
    </script>

    <script type=\"text/javascript\">
      \$(document).ready(function() {
          // Lorsque je soumets le formulaire
          \$('#goForm').on('submit', function(e) {
              e.preventDefault();
              var \$this = \$(this);

              // Je récupère les valeurs
              var time = \$('#time').val();

              \$.ajax({
                  url: Routing.generate('go'),
                  type: 'POST',
                  data: \$this.serialize(),
                  dataType: 'json',
              });
          });
      });
    </script>

  </body>
</html>
", "default/page.html.twig", "/Applications/MAMP/htdocs/nuse/app/Resources/views/default/page.html.twig");
    }
}

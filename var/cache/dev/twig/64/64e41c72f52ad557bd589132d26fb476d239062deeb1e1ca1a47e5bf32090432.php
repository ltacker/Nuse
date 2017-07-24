<?php

/* AliDatatableBundle:Internal:script.html.twig */
class __TwigTemplate_6eb6010b1d6f32462ebb4b7f0de88cb063fe264fe7aec76056d3d4bc79db7b60 extends Twig_Template
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
        $__internal_ab2a9b3abd3a9641c97f220090f1511d561c641a38ffed75bda1489242909fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab2a9b3abd3a9641c97f220090f1511d561c641a38ffed75bda1489242909fbb->enter($__internal_ab2a9b3abd3a9641c97f220090f1511d561c641a38ffed75bda1489242909fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AliDatatableBundle:Internal:script.html.twig"));

        $__internal_dc2f305e5aeeb391c6476ecbe138b8304a8f312ff49d2db2b1e0f7e22c0bc1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2f305e5aeeb391c6476ecbe138b8304a8f312ff49d2db2b1e0f7e22c0bc1bc->enter($__internal_dc2f305e5aeeb391c6476ecbe138b8304a8f312ff49d2db2b1e0f7e22c0bc1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AliDatatableBundle:Internal:script.html.twig"));

        // line 1
        echo "/*** datatable[";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "]: ***/
\$(document).ready(function(){
    function getId() { return \"";
        // line 3
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\"; };
    function getWrapper() { return  \"#";
        // line 4
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_wrapper\"; };
    var s = getWrapper();
    var multiple = ";
        // line 6
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ";
    var multiple_rawhtml = '';
    ";
        // line 8
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 9
            echo "        var multiple_rawhtml = '\\
                <label class=\"dataTables_multiple\">\\
                <span style=\"margin:0 40px 0 0px;\">\\
                    Execute\\
                    <select name=\"dataTables[select]\" class=\"form-control input-sm\">\\
                        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["multiple"] ?? $this->getContext($context, "multiple")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                echo "\\
                        <option value=\"";
                // line 15
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["item"], "route", array()));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "</option>\\
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\\
                    </select>\\
                    <button class=\"btn-datatable-multiple  btn btn-default btn-sm\">OK</button>\\
                <span>\\
                </label>';
    ";
        }
        // line 22
        echo "    var \$js_conf = ";
        echo ($context["js_conf"] ?? $this->getContext($context, "js_conf"));
        echo ";
    var \$js = {};
    for(key in \$js_conf) {
        if (\$js_conf.hasOwnProperty(key)) {
            eval ( ' \$js[\"'+key+'\"] = ' + \$js_conf[key]+ ' ; ' );
        }
    }
    var \$options = ";
        // line 29
        echo ($context["js"] ?? $this->getContext($context, "js"));
        echo ";
    var \$opts = {};
    for(key in \$options) {
        if (\$options.hasOwnProperty(key)) {
            \$opts[key] = \$options[key];
            try{
                var type = typeof (eval (' tmp = ' + \$options[key] + ' ; '));
                if (type == 'object' || type == 'function'){
                    eval (' \$opts[\"' + key + '\"] = ' + \$options[key] + ' ; ');
                }
            }catch (e){ }
        }
    }
    \$options = \$opts;
    var \$aoColumnDefs = new Array();
    ";
        // line 44
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 45
            echo "    \$aoColumnDefs.push({ 'bSortable': false, 'aTargets': [ 0 ] });
    ";
        }
        // line 47
        echo "    ";
        if ((($context["action"] ?? $this->getContext($context, "action")) &&  !($context["action_twig"] ?? $this->getContext($context, "action_twig")))) {
            // line 48
            echo "    \$aoColumnDefs.push({
        \"mRender\": function ( data, type, full ) {
            var \$edit_url = \"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["edit_route"] ?? $this->getContext($context, "edit_route")), array("id" => "xx"));
            echo "\".replace(\"xx\", data);
            var \$link_edit = \"<a  style='float:right; margin-right:10px' class='dialog' title='edit' \";
            \$link_edit += \"href='\"+\$edit_url+\"'>\";
            \$link_edit += '<span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a>';
            var \$delete_url = \"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["delete_route"] ?? $this->getContext($context, "delete_route")), array("id" => "xx"));
            echo "\".replace(\"xx\", data);
            var \$link_delete = \"<form style='float:right' class='form' action='\"+\$delete_url+\"' method='post'>\";
            \$link_delete += '";
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'widget');
            echo "'.replace(\"_id_\", data);
            \$link_delete += \"<a class='button-delete' title='delete' href='#' type='submit'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>\";
            \$link_delete += \" </form>\";
            var \$out = \$link_delete+ \" \" + \$link_edit ;
            if (data == null )
            {
                \$out = \"<div style='float:right'>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.no_action"), "html", null, true);
            echo "</div>\";
            }
            return \$out
        },
        \"aTargets\": [ multiple ? ";
            // line 66
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["fields"] ?? $this->getContext($context, "fields"))), "html", null, true);
            echo " : (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["fields"] ?? $this->getContext($context, "fields"))), "html", null, true);
            echo " -1)  ]
    });
    ";
        }
        // line 69
        echo "    var \$defaults = {
        \"bJQueryUI\": false,
        \"sPaginationType\": \"full_numbers\",
        \"aLengthMenu\": [[5,10, 25, 50, -1], [5,10, 25, 50, \"All\"]],
        \"iDisplayLength\": 10,
        \"bServerSide\": true,
        \"bProcessing\": true,
        \"sAjaxSource\": null,
        \"bPaginate\": true,
        ";
        // line 78
        if (($context["sort"] ?? $this->getContext($context, "sort"))) {
            // line 79
            echo "        \"aaSorting\": [[ ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sort"] ?? $this->getContext($context, "sort")), 0, array(), "array"), "html", null, true);
            echo ", \"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["sort"] ?? $this->getContext($context, "sort")), 1, array(), "array"), "html", null, true);
            echo "\" ]],
        ";
        }
        // line 81
        echo "        \"bLengthChange\": true,
        \"aoColumnDefs\": \$aoColumnDefs,
        \"fnDrawCallback\": function(oSettings) {
            var s = getWrapper();
            if( multiple && \$('.dataTables_multiple',\$(s)).length==0){
                \$(s+' .dataTables_length').prepend(multiple_rawhtml);
            }
        },
        \"bSort\": true,
        \"bFilter\": ";
        // line 90
        if (($context["search"] ?? $this->getContext($context, "search"))) {
            echo " true ";
        } else {
            echo " false ";
        }
        echo ",
        \"oLanguage\": {
            \"sProcessing\":     '";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sProcessing"), "html", null, true);
        echo "',
            \"sLengthMenu\":     '";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sLengthMenu"), "html", null, true);
        echo "',
            \"sZeroRecords\":    '";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sZeroRecords"), "html", null, true);
        echo "',
            \"sInfo\":           '";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sInfo"), "html", null, true);
        echo "',
            \"sInfoEmpty\":      '";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sInfoEmpty"), "html", null, true);
        echo "',
            \"sInfoFiltered\":   '";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sInfoFiltered"), "html", null, true);
        echo "',
            \"sInfoPostFix\":    '";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sInfoPostFix"), "html", null, true);
        echo "',
            \"sSearch\":         '";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sSearch"), "html", null, true);
        echo "',
            \"sLoadingRecords\": '";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sLoadingRecords"), "html", null, true);
        echo "',
            \"sUrl\":            \"\",
            \"oPaginate\": {
                \"sFirst\":    '";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sFirst"), "html", null, true);
        echo "',
                \"sPrevious\": '";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sPrevious"), "html", null, true);
        echo "',
                \"sNext\":     '";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sNext"), "html", null, true);
        echo "',
                \"sLast\":     '";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.sLast"), "html", null, true);
        echo "'
            }
        },
        \"bAutoWidth\" : false
    };
    \$.extend(\$defaults,\$js);
    \$.extend(\$defaults,\$options);
    \$('#";
        // line 113
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "').trigger('datatables_init', \$defaults );
    eval(\"var \"+ \"oTable_\"+'";
        // line 114
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "'.split('-').join('_') + \"  = \$('#";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "').dataTable(\$defaults)\");
    \$(s).on('click','.button-delete:parent',function(e){
        if (!confirm('";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Ali\DatatableBundle\Twig\Extension\AliDatatableExtension')->dtatransFilter("ali.common.confirm_delete"), "html", null, true);
        echo "')) {
            return false;
        }
        \$(this).parents('form:eq(0)').submit();
    });

    if (multiple===true) {
        var chbox =  'input:checkbox[name=\"dataTables[actions][]\"]';
        var chbox_all = 'input:checkbox[name=\"datatable_action_all\"]';
        \$(s).on('click','.btn-datatable-multiple:not(.search_init)',function(e){
            if(\$('input:focus',\$(s)).length > 0){
                return false;
            }
            e.preventDefault();
            if(\$(chbox+':checked').length > 0){
                if (!confirm('Are you sure ?')) {
                    return false;
                }
                var form = \$(this).parents('form:eq(0)');
                var action = \$('select[name=\"dataTables[select]\"]',\$(s)).val();
                \$.ajax({
                    type: \"POST\",
                    url: action,
                    data: form.serialize(),
                    success: function(msg) {
                        \$('#'+getId()).dataTable().fnDraw();
                        if (\$.isFunction(\$.fn.unblockpage)){
                            \$.unblockpage();
                        }
                    },
                    beforeSend: function() {
                        if (\$.isFunction(\$.fn.blockpage)){
                            \$.blockpage({
                                msg: 'saving data'
                            });
                        }
                    }
                });
            } else {
                alert('You need to select at least one element.');
            }
        });
        \$(s).on('click',chbox_all,function(e){
            if(\$(this).is(':checked')) {
                \$(chbox,\$(s)).attr(\"checked\",false).click();
            } else {
                \$(chbox,\$(s)).attr(\"checked\",true).click();
            }
        });
    }

    ";
        // line 167
        if (($context["search"] ?? $this->getContext($context, "search"))) {
            // line 168
            echo "    \$(\".dataTables_filter\").remove();
    var search_selector = \"#";
            // line 169
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo " input[searchable=true]\";
    var timeout;
    \$(search_selector).keyup( function (e) {
        if (\$.inArray(e.which, [9, 16]) == -1) {
            var index = \$(this).attr('index');
            var self = this;
            clearTimeout(timeout);
            timeout = setTimeout(function () {
                var oTable = eval('oTable_";
            // line 177
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "'.split('-').join('_'));
                oTable.fnFilter(
                    self.value,
                    oTable.oApi._fnVisibleToColumnIndex(
                        oTable.fnSettings(),
                        index
                    )
                );
            }, 700);
        }
    }).each( function (i) {
        this.initVal = this.value;
    }).focus( function () {
        if ( this.className.match(/\\bsearch_init\\b/) ){
            this.className.replace(/\\bsearch_init\\b/g, '').trim();
        }
    }).blur( function (i) {
        if ( this.value == \"\" ){
            this.className = (this.className.match(/\\bsearch_init\\b/)) ? this.className : this.className.trim() + \" search_init\";
            this.value = this.initVal;
        }
    });
    ";
        }
        // line 200
        echo "});
";
        
        $__internal_ab2a9b3abd3a9641c97f220090f1511d561c641a38ffed75bda1489242909fbb->leave($__internal_ab2a9b3abd3a9641c97f220090f1511d561c641a38ffed75bda1489242909fbb_prof);

        
        $__internal_dc2f305e5aeeb391c6476ecbe138b8304a8f312ff49d2db2b1e0f7e22c0bc1bc->leave($__internal_dc2f305e5aeeb391c6476ecbe138b8304a8f312ff49d2db2b1e0f7e22c0bc1bc_prof);

    }

    public function getTemplateName()
    {
        return "AliDatatableBundle:Internal:script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 200,  342 => 177,  331 => 169,  328 => 168,  326 => 167,  272 => 116,  265 => 114,  261 => 113,  251 => 106,  247 => 105,  243 => 104,  239 => 103,  233 => 100,  229 => 99,  225 => 98,  221 => 97,  217 => 96,  213 => 95,  209 => 94,  205 => 93,  201 => 92,  192 => 90,  181 => 81,  173 => 79,  171 => 78,  160 => 69,  152 => 66,  145 => 62,  136 => 56,  131 => 54,  124 => 50,  120 => 48,  117 => 47,  113 => 45,  111 => 44,  93 => 29,  82 => 22,  74 => 16,  64 => 15,  58 => 14,  51 => 9,  49 => 8,  40 => 6,  35 => 4,  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*** datatable[{{id}}]: ***/
\$(document).ready(function(){
    function getId() { return \"{{id}}\"; };
    function getWrapper() { return  \"#{{id}}_wrapper\"; };
    var s = getWrapper();
    var multiple = {% if multiple %} true {% else %} false {% endif %};
    var multiple_rawhtml = '';
    {% if multiple %}
        var multiple_rawhtml = '\\
                <label class=\"dataTables_multiple\">\\
                <span style=\"margin:0 40px 0 0px;\">\\
                    Execute\\
                    <select name=\"dataTables[select]\" class=\"form-control input-sm\">\\
                        {% for key,item in multiple %}\\
                        <option value=\"{{ path(item.route) }}\">{{item.title}}</option>\\
                        {% endfor %}\\
                    </select>\\
                    <button class=\"btn-datatable-multiple  btn btn-default btn-sm\">OK</button>\\
                <span>\\
                </label>';
    {% endif %}
    var \$js_conf = {{ js_conf | raw }};
    var \$js = {};
    for(key in \$js_conf) {
        if (\$js_conf.hasOwnProperty(key)) {
            eval ( ' \$js[\"'+key+'\"] = ' + \$js_conf[key]+ ' ; ' );
        }
    }
    var \$options = {{ js | raw }};
    var \$opts = {};
    for(key in \$options) {
        if (\$options.hasOwnProperty(key)) {
            \$opts[key] = \$options[key];
            try{
                var type = typeof (eval (' tmp = ' + \$options[key] + ' ; '));
                if (type == 'object' || type == 'function'){
                    eval (' \$opts[\"' + key + '\"] = ' + \$options[key] + ' ; ');
                }
            }catch (e){ }
        }
    }
    \$options = \$opts;
    var \$aoColumnDefs = new Array();
    {% if multiple %}
    \$aoColumnDefs.push({ 'bSortable': false, 'aTargets': [ 0 ] });
    {% endif %}
    {% if action and not action_twig %}
    \$aoColumnDefs.push({
        \"mRender\": function ( data, type, full ) {
            var \$edit_url = \"{{ path(edit_route , { 'id': \"xx\" }) }}\".replace(\"xx\", data);
            var \$link_edit = \"<a  style='float:right; margin-right:10px' class='dialog' title='edit' \";
            \$link_edit += \"href='\"+\$edit_url+\"'>\";
            \$link_edit += '<span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a>';
            var \$delete_url = \"{{ path(delete_route, { 'id': \"xx\" }) }}\".replace(\"xx\", data);
            var \$link_delete = \"<form style='float:right' class='form' action='\"+\$delete_url+\"' method='post'>\";
            \$link_delete += '{{ form_widget(delete_form) }}'.replace(\"_id_\", data);
            \$link_delete += \"<a class='button-delete' title='delete' href='#' type='submit'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>\";
            \$link_delete += \" </form>\";
            var \$out = \$link_delete+ \" \" + \$link_edit ;
            if (data == null )
            {
                \$out = \"<div style='float:right'>{{ 'ali.common.no_action'|dta_trans() }}</div>\";
            }
            return \$out
        },
        \"aTargets\": [ multiple ? {{fields|length}} : ({{fields|length}} -1)  ]
    });
    {% endif %}
    var \$defaults = {
        \"bJQueryUI\": false,
        \"sPaginationType\": \"full_numbers\",
        \"aLengthMenu\": [[5,10, 25, 50, -1], [5,10, 25, 50, \"All\"]],
        \"iDisplayLength\": 10,
        \"bServerSide\": true,
        \"bProcessing\": true,
        \"sAjaxSource\": null,
        \"bPaginate\": true,
        {% if sort %}
        \"aaSorting\": [[ {{sort[0]}}, \"{{sort[1]}}\" ]],
        {% endif %}
        \"bLengthChange\": true,
        \"aoColumnDefs\": \$aoColumnDefs,
        \"fnDrawCallback\": function(oSettings) {
            var s = getWrapper();
            if( multiple && \$('.dataTables_multiple',\$(s)).length==0){
                \$(s+' .dataTables_length').prepend(multiple_rawhtml);
            }
        },
        \"bSort\": true,
        \"bFilter\": {% if search %} true {% else %} false {% endif %},
        \"oLanguage\": {
            \"sProcessing\":     '{{ 'ali.common.sProcessing' | dta_trans() }}',
            \"sLengthMenu\":     '{{ 'ali.common.sLengthMenu' | dta_trans() }}',
            \"sZeroRecords\":    '{{ 'ali.common.sZeroRecords' | dta_trans() }}',
            \"sInfo\":           '{{ 'ali.common.sInfo' | dta_trans() }}',
            \"sInfoEmpty\":      '{{ 'ali.common.sInfoEmpty' | dta_trans() }}',
            \"sInfoFiltered\":   '{{ 'ali.common.sInfoFiltered' | dta_trans() }}',
            \"sInfoPostFix\":    '{{ 'ali.common.sInfoPostFix' | dta_trans() }}',
            \"sSearch\":         '{{ 'ali.common.sSearch' | dta_trans() }}',
            \"sLoadingRecords\": '{{ 'ali.common.sLoadingRecords' | dta_trans() }}',
            \"sUrl\":            \"\",
            \"oPaginate\": {
                \"sFirst\":    '{{ 'ali.common.sFirst' | dta_trans() }}',
                \"sPrevious\": '{{ 'ali.common.sPrevious' | dta_trans() }}',
                \"sNext\":     '{{ 'ali.common.sNext' | dta_trans() }}',
                \"sLast\":     '{{ 'ali.common.sLast' | dta_trans() }}'
            }
        },
        \"bAutoWidth\" : false
    };
    \$.extend(\$defaults,\$js);
    \$.extend(\$defaults,\$options);
    \$('#{{id}}').trigger('datatables_init', \$defaults );
    eval(\"var \"+ \"oTable_\"+'{{id}}'.split('-').join('_') + \"  = \$('#{{id}}').dataTable(\$defaults)\");
    \$(s).on('click','.button-delete:parent',function(e){
        if (!confirm('{{ 'ali.common.confirm_delete'|dta_trans()  }}')) {
            return false;
        }
        \$(this).parents('form:eq(0)').submit();
    });

    if (multiple===true) {
        var chbox =  'input:checkbox[name=\"dataTables[actions][]\"]';
        var chbox_all = 'input:checkbox[name=\"datatable_action_all\"]';
        \$(s).on('click','.btn-datatable-multiple:not(.search_init)',function(e){
            if(\$('input:focus',\$(s)).length > 0){
                return false;
            }
            e.preventDefault();
            if(\$(chbox+':checked').length > 0){
                if (!confirm('Are you sure ?')) {
                    return false;
                }
                var form = \$(this).parents('form:eq(0)');
                var action = \$('select[name=\"dataTables[select]\"]',\$(s)).val();
                \$.ajax({
                    type: \"POST\",
                    url: action,
                    data: form.serialize(),
                    success: function(msg) {
                        \$('#'+getId()).dataTable().fnDraw();
                        if (\$.isFunction(\$.fn.unblockpage)){
                            \$.unblockpage();
                        }
                    },
                    beforeSend: function() {
                        if (\$.isFunction(\$.fn.blockpage)){
                            \$.blockpage({
                                msg: 'saving data'
                            });
                        }
                    }
                });
            } else {
                alert('You need to select at least one element.');
            }
        });
        \$(s).on('click',chbox_all,function(e){
            if(\$(this).is(':checked')) {
                \$(chbox,\$(s)).attr(\"checked\",false).click();
            } else {
                \$(chbox,\$(s)).attr(\"checked\",true).click();
            }
        });
    }

    {% if search %}
    \$(\".dataTables_filter\").remove();
    var search_selector = \"#{{id}} input[searchable=true]\";
    var timeout;
    \$(search_selector).keyup( function (e) {
        if (\$.inArray(e.which, [9, 16]) == -1) {
            var index = \$(this).attr('index');
            var self = this;
            clearTimeout(timeout);
            timeout = setTimeout(function () {
                var oTable = eval('oTable_{{id}}'.split('-').join('_'));
                oTable.fnFilter(
                    self.value,
                    oTable.oApi._fnVisibleToColumnIndex(
                        oTable.fnSettings(),
                        index
                    )
                );
            }, 700);
        }
    }).each( function (i) {
        this.initVal = this.value;
    }).focus( function () {
        if ( this.className.match(/\\bsearch_init\\b/) ){
            this.className.replace(/\\bsearch_init\\b/g, '').trim();
        }
    }).blur( function (i) {
        if ( this.value == \"\" ){
            this.className = (this.className.match(/\\bsearch_init\\b/)) ? this.className : this.className.trim() + \" search_init\";
            this.value = this.initVal;
        }
    });
    {% endif %}
});
", "AliDatatableBundle:Internal:script.html.twig", "/Applications/MAMP/htdocs/nuse/vendor/ali/datatable/Ali/DatatableBundle/Resources/views/Internal/script.html.twig");
    }
}

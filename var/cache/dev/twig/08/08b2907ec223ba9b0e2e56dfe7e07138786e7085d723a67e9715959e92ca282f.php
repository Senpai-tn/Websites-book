<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* template.html.twig */
class __TwigTemplate_313cb996974d48079c346cffd68e5d5b29624cc54a057487d949c56aa2e9362d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<!-- app/Resources/views/template.html.twig -->

<head>
    <title></title>
</head>
<body>
<div class=\"sidebar-search\">
    <div class=\"input-group custom-search-form\">
        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
    </div>
    <!-- /input-group -->
</div>
<ul class=\"nav\" id=\"side-menu\">
    <li>
        <a href=\"#\"> Entities<span class=\"fa arrow\"></span></a>
        <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
        </ul>
    </li>
</ul>
</body>
</html>

<!-- jQuery is necessary -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function() {
        var searchRequest = null;
        \$(\"#search\").keyup(function() {
            var minlength = 1;
            var that = this;
            var value = \$(this).val();
            var entitySelector = \$(\"#entitiesNav\").html('');
            if (value.length >= minlength ) {
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"GET\",
                    url: \"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_search");
        echo "\",
                    data: {
                        'q' : value
                    },
                    dataType: \"text\",
                    success: function(msg){
                        //we need to check if the value is the same
                        if (value==\$(that).val()) {
                            var result = JSON.parse(msg);
                            \$.each(result, function(key, arr) {
                                \$.each(arr, function(id, value) {
                                    if (key == 'entities') {
                                        if (id != 'error') {
                                            entitySelector.append('<li><a href=\"/daten/'+id+'\">'+value+'</a></li>');
                                        } else {
                                            entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                        }
                                    }
                                });
                            });
                        }
                    }
                });
            }
        });
    });
</script>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 41,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<!-- app/Resources/views/template.html.twig -->

<head>
    <title></title>
</head>
<body>
<div class=\"sidebar-search\">
    <div class=\"input-group custom-search-form\">
        <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
    </div>
    <!-- /input-group -->
</div>
<ul class=\"nav\" id=\"side-menu\">
    <li>
        <a href=\"#\"> Entities<span class=\"fa arrow\"></span></a>
        <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
        </ul>
    </li>
</ul>
</body>
</html>

<!-- jQuery is necessary -->
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function() {
        var searchRequest = null;
        \$(\"#search\").keyup(function() {
            var minlength = 1;
            var that = this;
            var value = \$(this).val();
            var entitySelector = \$(\"#entitiesNav\").html('');
            if (value.length >= minlength ) {
                if (searchRequest != null)
                    searchRequest.abort();
                searchRequest = \$.ajax({
                    type: \"GET\",
                    url: \"{{ path('ajax_search') }}\",
                    data: {
                        'q' : value
                    },
                    dataType: \"text\",
                    success: function(msg){
                        //we need to check if the value is the same
                        if (value==\$(that).val()) {
                            var result = JSON.parse(msg);
                            \$.each(result, function(key, arr) {
                                \$.each(arr, function(id, value) {
                                    if (key == 'entities') {
                                        if (id != 'error') {
                                            entitySelector.append('<li><a href=\"/daten/'+id+'\">'+value+'</a></li>');
                                        } else {
                                            entitySelector.append('<li class=\"errorLi\">'+value+'</li>');
                                        }
                                    }
                                });
                            });
                        }
                    }
                });
            }
        });
    });
</script>


", "template.html.twig", "C:\\wamp64\\www\\PFE\\templates\\template.html.twig");
    }
}

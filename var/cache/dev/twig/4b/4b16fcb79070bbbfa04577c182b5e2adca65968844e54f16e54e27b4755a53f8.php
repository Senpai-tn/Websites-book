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

/* admin/index.html.twig */
class __TwigTemplate_e10eb3003b329ee4f988e8ff85408892946b9587cef32da7c095cdefc1d0578f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js\"></script>
    <style>
        /* Sortable tables */
        table.sortable thead {
            background-color:#eee;
            color:#666666;
            font-weight: bold;
            cursor: default;
        }
    </style>

    <section id=\"container\">

        <section id=\"main-content\">
            <section class=\"wrapper\">
                <div class=\"row\">
                    <div class=\"col-lg-9 main-chart\">
                        <!--CUSTOM CHART START -->
                        <div class=\"border-head\">
                            <h3>Websites created this year at :</h3>
                        </div>
                        <div class=\"custom-bar-chart\">
                            <div class=\"bar\">
                                <div class=\"title\">JAN</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 27, $this->source); })()), 0, [], "array", false, false, false, 27)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 27, $this->source); })()), 0, [], "array", false, false, false, 27)), "html", null, true);
        echo "W%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">FEB</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 31, $this->source); })()), 1, [], "array", false, false, false, 31)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 31, $this->source); })()), 1, [], "array", false, false, false, 31)), "html", null, true);
        echo "%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">MAR</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 35, $this->source); })()), 2, [], "array", false, false, false, 35)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 35, $this->source); })()), 2, [], "array", false, false, false, 35)), "html", null, true);
        echo "%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">APR</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 39, $this->source); })()), 3, [], "array", false, false, false, 39)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 39, $this->source); })()), 3, [], "array", false, false, false, 39)), "html", null, true);
        echo "%</div>
                            </div>
                            <div class=\"bar\">
                                <div class=\"title\">MAY</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 43, $this->source); })()), 4, [], "array", false, false, false, 43)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 43, $this->source); })()), 4, [], "array", false, false, false, 43)), "html", null, true);
        echo "%</div>
                            </div>
                            <div class=\"bar\">
                                <div class=\"title\">JUIN</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 47, $this->source); })()), 5, [], "array", false, false, false, 47)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 47, $this->source); })()), 5, [], "array", false, false, false, 47)), "html", null, true);
        echo "%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">JUIL</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 51, $this->source); })()), 6, [], "array", false, false, false, 51)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 51, $this->source); })()), 6, [], "array", false, false, false, 51)), "html", null, true);
        echo "%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">AOUT</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 55, $this->source); })()), 7, [], "array", false, false, false, 55)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 55, $this->source); })()), 7, [], "array", false, false, false, 55)), "html", null, true);
        echo "%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">SEP</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 59, $this->source); })()), 8, [], "array", false, false, false, 59)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 59, $this->source); })()), 8, [], "array", false, false, false, 59)), "html", null, true);
        echo "%</div>
                            </div>
                            <div class=\"bar\">
                                <div class=\"title\">OCT</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 63, $this->source); })()), 9, [], "array", false, false, false, 63)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 63, $this->source); })()), 9, [], "array", false, false, false, 63)), "html", null, true);
        echo "%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">NOV</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 67, $this->source); })()), 10, [], "array", false, false, false, 67)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 67, $this->source); })()), 10, [], "array", false, false, false, 67)), "html", null, true);
        echo "%</div>
                            </div>
                            <div class=\"bar\">
                                <div class=\"title\">DEC</div>
                                <div class=\"value tooltips\" data-original-title=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 71, $this->source); })()), 11, [], "array", false, false, false, 71)), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mounths"]) || array_key_exists("mounths", $context) ? $context["mounths"] : (function () { throw new RuntimeError('Variable "mounths" does not exist.', 71, $this->source); })()), 11, [], "array", false, false, false, 71)), "html", null, true);
        echo "%</div>
                            </div>

                        </div>
                        <!--custom chart end-->
                        <br>
                        <hr>
                        <!-- /row -->
                    </div>

                    <!-- /col-lg-9 END SECTION MIDDLE -->
                    <!-- **********************************************************************************************************************************************************
                        RIGHT SIDEBAR CONTENT
                        *********************************************************************************************************************************************************** -->

                    <!-- /col-lg-3 -->
                </div>



                <!-- /row -->
            </section>
            <canvas id=\"myChart\" style=\"width: 5%\"></canvas>
        </section>

        <script>
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo " '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 101), "html", null, true);
            echo "', ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                    datasets: [{
                        label: '# of Votes',
                        data: [";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["nbrvisites"]) || array_key_exists("nbrvisites", $context) ? $context["nbrvisites"] : (function () { throw new RuntimeError('Variable "nbrvisites" does not exist.', 104, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 104), [], "array", false, false, false, 104), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                        backgroundColor: [
                            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 107
            echo "                            'rgba(";
            echo twig_escape_filter($this->env, twig_random($this->env, 0, 256), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_random($this->env, 0, 256), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_random($this->env, 0, 256), "html", null, true);
            echo ", 1)',
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
                        ],
                        borderColor: [
                            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 113
            echo "                            'rgba(0, 0, 0, 1)',
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
                        ],
                        borderWidth: 1.5
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>

    </section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 115,  283 => 113,  279 => 112,  274 => 109,  261 => 107,  257 => 106,  243 => 104,  228 => 101,  193 => 71,  184 => 67,  175 => 63,  166 => 59,  157 => 55,  148 => 51,  139 => 47,  130 => 43,  121 => 39,  112 => 35,  103 => 31,  94 => 27,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block body %}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js\"></script>
    <style>
        /* Sortable tables */
        table.sortable thead {
            background-color:#eee;
            color:#666666;
            font-weight: bold;
            cursor: default;
        }
    </style>

    <section id=\"container\">

        <section id=\"main-content\">
            <section class=\"wrapper\">
                <div class=\"row\">
                    <div class=\"col-lg-9 main-chart\">
                        <!--CUSTOM CHART START -->
                        <div class=\"border-head\">
                            <h3>Websites created this year at :</h3>
                        </div>
                        <div class=\"custom-bar-chart\">
                            <div class=\"bar\">
                                <div class=\"title\">JAN</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[0]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[0]|length }}W%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">FEB</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[1]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[1]|length }}%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">MAR</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[2]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[2]|length }}%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">APR</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[3]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[3]|length }}%</div>
                            </div>
                            <div class=\"bar\">
                                <div class=\"title\">MAY</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[4]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[4]|length }}%</div>
                            </div>
                            <div class=\"bar\">
                                <div class=\"title\">JUIN</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[5]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[5]|length }}%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">JUIL</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[6]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[6]|length }}%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">AOUT</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[7]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[7]|length }}%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">SEP</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[8]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[8]|length }}%</div>
                            </div>
                            <div class=\"bar\">
                                <div class=\"title\">OCT</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[9]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[9]|length }}%</div>
                            </div>
                            <div class=\"bar \">
                                <div class=\"title\">NOV</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[10]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[10]|length }}%</div>
                            </div>
                            <div class=\"bar\">
                                <div class=\"title\">DEC</div>
                                <div class=\"value tooltips\" data-original-title=\"{{ mounths[11]|length }}\" data-toggle=\"tooltip\" data-placement=\"top\">{{ mounths[11]|length }}%</div>
                            </div>

                        </div>
                        <!--custom chart end-->
                        <br>
                        <hr>
                        <!-- /row -->
                    </div>

                    <!-- /col-lg-9 END SECTION MIDDLE -->
                    <!-- **********************************************************************************************************************************************************
                        RIGHT SIDEBAR CONTENT
                        *********************************************************************************************************************************************************** -->

                    <!-- /col-lg-3 -->
                </div>



                <!-- /row -->
            </section>
            <canvas id=\"myChart\" style=\"width: 5%\"></canvas>
        </section>

        <script>
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [{% for c in categories %} '{{c.name}}', {% endfor %}],
                    datasets: [{
                        label: '# of Votes',
                        data: [{% for c in categories %} {{ nbrvisites[c.id] }}, {% endfor %}],
                        backgroundColor: [
                            {% for c in categories %}
                            'rgba({{random(0,256)}}, {{random(0,256)}}, {{random(0,256)}}, 1)',
                            {% endfor %}

                        ],
                        borderColor: [
                            {% for c in categories %}
                            'rgba(0, 0, 0, 1)',
                            {% endfor %}

                        ],
                        borderWidth: 1.5
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>

    </section>


{% endblock %}", "admin/index.html.twig", "C:\\wamp64\\www\\PFE\\templates\\admin\\index.html.twig");
    }
}

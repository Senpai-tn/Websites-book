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

/* admin/listWebsites.html.twig */
class __TwigTemplate_0a7727f79dd11c870bbd53d89e45a39ac72ebf009feeea665d18fb03a1f06330 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listWebsites.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listWebsites.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/listWebsites.html.twig", 1);
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
        echo "    <section id=\"main-content\">
        <section class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-8 main-chart\">
                    <table class=\"table table-dark sortable\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Logo</th>
                            <th scope=\"col\">Name</th>
                            <th scope=\"col\">Url</th>
                            <th>State</th>
                            <th>Number of vistites</th>
                            <th scope=\"col\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["websites"]) || array_key_exists("websites", $context) ? $context["websites"] : (function () { throw new RuntimeError('Variable "websites" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 20
            echo "                            <tr >
                                <th scope=\"row\"><img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/websites_logo/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "logo", [], "any", false, false, false, 21), "html", null, true);
            echo "\" width=\"50px\" height=\"50px\" alt=\"\"></th>
                                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "url", [], "any", false, false, false, 23), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "url", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></td>

                                    ";
            // line 25
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["w"], "state", [], "any", false, false, false, 25), 2)) {
                // line 26
                echo "                                        <td> new</td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "nbVisites", [], "any", false, false, false, 26), "html", null, true);
                echo "</td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accept", ["id" => twig_get_attribute($this->env, $this->source, $context["w"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\">accept</a>  <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("refuse", ["id" => twig_get_attribute($this->env, $this->source, $context["w"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\">refuse</a> </td>
                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 27
$context["w"], "state", [], "any", false, false, false, 27), 1)) {
                // line 28
                echo "                                        <td> accepted</td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "nbVisites", [], "any", false, false, false, 28), "html", null, true);
                echo "</td><td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_website", ["id" => twig_get_attribute($this->env, $this->source, $context["w"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">delete</a></td>
                                    ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 29
$context["w"], "state", [], "any", false, false, false, 29), 0)) {
                // line 30
                echo "                                        <td> refused</td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "nbVisites", [], "any", false, false, false, 30), "html", null, true);
                echo "</td><td></td>
                                    ";
            }
            // line 32
            echo "                                </td>


                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                        </tbody>
                    </table>
                </div>

                <div class=\"col-lg-4 main-chart\">
                    <table class=\"table table-dark sortable\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Name</th>



                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 53
            echo "                            <tr >
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        </tbody>
                    </table>
                </div>

            </div>
        </section>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/listWebsites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 57,  171 => 54,  168 => 53,  164 => 52,  147 => 37,  137 => 32,  131 => 30,  129 => 29,  122 => 28,  120 => 27,  111 => 26,  109 => 25,  102 => 23,  98 => 22,  93 => 21,  90 => 20,  86 => 19,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block body %}
    <section id=\"main-content\">
        <section class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-8 main-chart\">
                    <table class=\"table table-dark sortable\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Logo</th>
                            <th scope=\"col\">Name</th>
                            <th scope=\"col\">Url</th>
                            <th>State</th>
                            <th>Number of vistites</th>
                            <th scope=\"col\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for w in websites %}
                            <tr >
                                <th scope=\"row\"><img src=\"{{ asset(\"img/websites_logo/\") }}{{ w.logo }}\" width=\"50px\" height=\"50px\" alt=\"\"></th>
                                <td>{{ w.name }}</td>
                                <td><a href=\"{{ w.url }}\" target=\"_blank\">{{ w.url }}</a></td>

                                    {% if w.state == 2  %}
                                        <td> new</td><td>{{ w.nbVisites }}</td><td><a href=\"{{ path(\"accept\",{\"id\":w.id}) }}\">accept</a>  <a href=\"{{ path(\"refuse\",{\"id\":w.id}) }}\">refuse</a> </td>
                                    {% elseif w.state ==1  %}
                                        <td> accepted</td><td>{{ w.nbVisites }}</td><td><a href=\"{{ path(\"delete_website\",{\"id\":w.id}) }}\">delete</a></td>
                                    {% elseif w.state == 0 %}
                                        <td> refused</td><td>{{ w.nbVisites }}</td><td></td>
                                    {% endif %}
                                </td>


                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>

                <div class=\"col-lg-4 main-chart\">
                    <table class=\"table table-dark sortable\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Name</th>



                        </tr>
                        </thead>
                        <tbody>
                        {% for c in categories %}
                            <tr >
                                <td>{{ c.name }}</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>

            </div>
        </section>
    </section>
{% endblock %}", "admin/listWebsites.html.twig", "C:\\wamp64\\www\\PFE\\templates\\admin\\listWebsites.html.twig");
    }
}

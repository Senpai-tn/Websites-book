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

/* admin\list_users.html.twig */
class __TwigTemplate_7d44c795da68ce6dcf9b2b785281b02c8f5affa584e28c341d532c3e521daefc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin\\list_users.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin\\list_users.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin\\list_users.html.twig", 1);
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
        echo "
<style>
    /* Sortable tables */
    table.sortable thead {
        background-color:#eee;
        color:#666666;
        font-weight: bold;
        cursor: default;
    }
</style>
<section id=\"main-content\">
    <section class=\"wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-8 main-chart\">

                <table class=\"table table-dark sortable\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Name</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">Role</th>

                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 30
            echo "                            <tr>
                                <td>
                                    ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 32), "html", null, true);
            echo "
                                </td>
                                <td>
                                    ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 35), "html", null, true);
            echo "
                                </td>

                            ";
            // line 38
            $context["isAdmin"] = false;
            // line 39
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["u"], "roles", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 40
                echo "                                ";
                if (0 === twig_compare($context["role"], "ROLE_ADMIN")) {
                    // line 41
                    echo "                                    ";
                    $context["isAdmin"] = true;
                    // line 42
                    echo "                                ";
                }
                // line 43
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                            ";
            if ((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 44, $this->source); })())) {
                // line 45
                echo "                                <td>Admin</td>
                                <td><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dispromote", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">Dispromote</a>  </td>
                            ";
            } else {
                // line 48
                echo "                                <td>Vendeur</td>
                                <td><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">Delete</a> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promote", ["id" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\">promote</a> </td>

                            ";
            }
            // line 52
            echo "
                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </tbody>
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
        return "admin\\list_users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 56,  160 => 52,  152 => 49,  149 => 48,  144 => 46,  141 => 45,  138 => 44,  132 => 43,  129 => 42,  126 => 41,  123 => 40,  118 => 39,  116 => 38,  110 => 35,  104 => 32,  100 => 30,  96 => 29,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block body %}

<style>
    /* Sortable tables */
    table.sortable thead {
        background-color:#eee;
        color:#666666;
        font-weight: bold;
        cursor: default;
    }
</style>
<section id=\"main-content\">
    <section class=\"wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-8 main-chart\">

                <table class=\"table table-dark sortable\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Name</th>
                        <th scope=\"col\">Email</th>
                        <th scope=\"col\">Role</th>

                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        {% for u in users %}
                            <tr>
                                <td>
                                    {{ u.username }}
                                </td>
                                <td>
                                    {{ u.email }}
                                </td>

                            {% set isAdmin = false %}
                            {% for role in u.roles %}
                                {% if role == \"ROLE_ADMIN\" %}
                                    {% set isAdmin=true %}
                                {% endif %}
                            {% endfor %}
                            {% if isAdmin  %}
                                <td>Admin</td>
                                <td><a href=\"{{ path(\"dispromote\",{\"id\":u.id}) }}\">Dispromote</a>  </td>
                            {% else %}
                                <td>Vendeur</td>
                                <td><a href=\"{{ path(\"delete_user\",{\"id\":u.id}) }}\">Delete</a> <a href=\"{{ path(\"promote\",{\"id\":u.id}) }}\">promote</a> </td>

                            {% endif %}

                            </tr>

                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>

{% endblock %}
", "admin\\list_users.html.twig", "C:\\wamp64\\www\\PFE\\templates\\admin\\list_users.html.twig");
    }
}

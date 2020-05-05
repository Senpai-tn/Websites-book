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

/* admin/deleted.html.twig */
class __TwigTemplate_4db0a96f54c4209410597e5ec9d280ad0e7eb9dbc7f9dd190e4bef483320b77d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/deleted.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/deleted.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/deleted.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section id=\"main-content\">
    <section class=\"wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-8 main-chart\">
                <table class=\"table table-dark sortable\">
                    <thead>
                    <tr>
                        <th scope=\"col\">Logo</th>
                        <th scope=\"col\">Name</th>
                        <th scope=\"col\">Url</th>
                        <th scope=\"col\">Nombre of visits</th>

                        <th>Deleted at</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["websites"]) || array_key_exists("websites", $context) ? $context["websites"] : (function () { throw new RuntimeError('Variable "websites" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 21
            echo "                        <tr >
                            <th scope=\"row\"><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/websites_logo/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "logo", [], "any", false, false, false, 22), "html", null, true);
            echo "\" width=\"50px\" height=\"50px\" alt=\"\"></th>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "url", [], "any", false, false, false, 24), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "url", [], "any", false, false, false, 24), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "nbVisites", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "deletedAt", [], "any", false, false, false, 26)), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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
        return "admin/deleted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  112 => 26,  108 => 25,  102 => 24,  98 => 23,  93 => 22,  90 => 21,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
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
                        <th scope=\"col\">Nombre of visits</th>

                        <th>Deleted at</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for w in websites %}
                        <tr >
                            <th scope=\"row\"><img src=\"{{ asset(\"img/websites_logo/\") }}{{ w.logo }}\" width=\"50px\" height=\"50px\" alt=\"\"></th>
                            <td>{{ w.name }}</td>
                            <td><a href=\"{{ w.url }}\" target=\"_blank\">{{ w.url }}</a></td>
                            <td>{{ w.nbVisites }}</td>
                            <td>{{ w.deletedAt|date }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>
{% endblock %}", "admin/deleted.html.twig", "C:\\wamp64\\www\\PFE\\templates\\admin\\deleted.html.twig");
    }
}

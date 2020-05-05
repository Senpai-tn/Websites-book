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

/* user/owner/index.html.twig */
class __TwigTemplate_53e8376e13574ef20a6fb8c83a03c80c8246c1d71ee414d70c154c8baf8f6e12 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/owner/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/owner/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/owner/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <style>

    </style>

    <div class=\"inner\" id=\"inner\" >

        <!-- Boxes -->
        <div class=\"thumbnails\" id=\"entitiesNav\" style=\"position:relative; margin-top: 150px\">
            ";
        // line 15
        if (0 === twig_compare(twig_length_filter($this->env, (isset($context["websites"]) || array_key_exists("websites", $context) ? $context["websites"] : (function () { throw new RuntimeError('Variable "websites" does not exist.', 15, $this->source); })())), 0)) {
            // line 16
            echo "                <div class=\"alert alert-danger\" style=\"position:fixed; top: 20%\">You haven't any website yet</div>
            ";
        } else {
            // line 18
            echo "
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["websites"]) || array_key_exists("websites", $context) ? $context["websites"] : (function () { throw new RuntimeError('Variable "websites" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 20
                echo "                    <div class=\"box\" >
                            <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["w"], "id", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\" >
                            <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/websites_logo/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "logo", [], "any", false, false, false, 22), "html", null, true);
                echo "\"  width=\"100%\" height=\"80%\">
                            <h3>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "</h3>
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            ";
        }
        // line 28
        echo "        </div>
    </div>
    <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_website");
        echo "\">
        <i class=\"fa fa-plus-circle fa-3x\" aria-hidden=\"true\" style=\"position:fixed; top: 20%;left: 3%;color: greenyellow\"></i>
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/owner/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 30,  139 => 28,  136 => 27,  125 => 23,  120 => 22,  116 => 21,  113 => 20,  109 => 19,  106 => 18,  102 => 16,  100 => 15,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block nav %}

{% endblock %}

{% block body %}
    <style>

    </style>

    <div class=\"inner\" id=\"inner\" >

        <!-- Boxes -->
        <div class=\"thumbnails\" id=\"entitiesNav\" style=\"position:relative; margin-top: 150px\">
            {% if websites|length == 0 %}
                <div class=\"alert alert-danger\" style=\"position:fixed; top: 20%\">You haven't any website yet</div>
            {% else %}

                {% for w in websites %}
                    <div class=\"box\" >
                            <a href=\"{{ path(\"show\",{\"id\":w.id})  }}\" >
                            <img src=\"{{  asset('img/websites_logo/')}}{{ w.logo}}\"  width=\"100%\" height=\"80%\">
                            <h3>{{ w.name }}{{ w.id }}</h3>
                        </a>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    <a href=\"{{ path(\"add_website\") }}\">
        <i class=\"fa fa-plus-circle fa-3x\" aria-hidden=\"true\" style=\"position:fixed; top: 20%;left: 3%;color: greenyellow\"></i>
    </a>
{% endblock %}", "user/owner/index.html.twig", "C:\\wamp64\\www\\PFE\\templates\\user\\owner\\index.html.twig");
    }
}

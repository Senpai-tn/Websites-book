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

/* websites/show.html.twig */
class __TwigTemplate_2e601126afc4174595e070ecc0ce08a447c00f6edf985787f22b75315344280b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "websites/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "websites/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "websites/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"inner\" id=\"inner\" >
    <div class=\"thumbnails\" id=\"entitiesNav\" style=\"position:relative; margin-top: 100px\">
    <div class=\"best-features\" style=\"top: 10%;left:10%; \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                            <h1 style=\"font-size: 25px\"> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"left-content\">
                        <h4>Looking for the best products?</h4>
                        <p><a rel=\"nofollow\" href=\"https://templatemo.com/tm-546-sixteen-clothing\" target=\"_parent\">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel=\"nofollow\" href=\"https://templatemo.com/contact\">Contact us</a> for more info.</p>
                        ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "
                        <br>
                        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 22, $this->source); })()), "url", [], "any", false, false, false, 22), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-warning\">Visit Website</a>
                        ";
        // line 23
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 23, $this->source); })()), "iduser", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 23, $this->source); })()), "deletedAt", [], "any", false, false, false, 23), null)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 23, $this->source); })()), "state", [], "any", false, false, false, 23), 2))) {
            // line 24
            echo "
                            <div class=\"alert alert-danger\" style=\"background-color: red;border-color: black\" role=\"alert\">
                                this website isn't accepted by the admin yet
                            </div>

                        ";
        } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 29, $this->source); })()), "iduser", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 29, $this->source); })()), "deletedAt", [], "any", false, false, false, 29), null)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 29, $this->source); })()), "state", [], "any", false, false, false, 29), 1))) {
            // line 30
            echo "                            <a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_website", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">Delete this website</a>

                        ";
        } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 32, $this->source); })()), "iduser", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 32, $this->source); })()), "deletedAt", [], "any", false, false, false, 32), null)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 32, $this->source); })()), "state", [], "any", false, false, false, 32), 0))) {
            // line 33
            echo "                            <div class=\"alert alert-danger\" style=\"background-color: red;border-color: black\" role=\"alert\">
                                this website is refused by the admin
                            </div>
                        ";
        } elseif (0 !== twig_compare(twig_get_attribute($this->env, $this->source,         // line 36
(isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 36, $this->source); })()), "deletedAt", [], "any", false, false, false, 36), null)) {
            // line 37
            echo "                                <div class=\"alert alert-danger\" style=\"background-color: red;border-color: black\" role=\"alert\">
                                    this website is deleted
                                </div>
                        ";
        }
        // line 41
        echo "
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"right-image\">
                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/websites_logo/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 46, $this->source); })()), "logo", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "websites/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 46,  150 => 41,  144 => 37,  142 => 36,  137 => 33,  135 => 32,  129 => 30,  127 => 29,  120 => 24,  118 => 23,  114 => 22,  109 => 20,  99 => 13,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{ website.name}} {% endblock %}

{% block body %}
<div class=\"inner\" id=\"inner\" >
    <div class=\"thumbnails\" id=\"entitiesNav\" style=\"position:relative; margin-top: 100px\">
    <div class=\"best-features\" style=\"top: 10%;left:10%; \">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"section-heading\">
                            <h1 style=\"font-size: 25px\"> {{ website.name }}</h1>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"left-content\">
                        <h4>Looking for the best products?</h4>
                        <p><a rel=\"nofollow\" href=\"https://templatemo.com/tm-546-sixteen-clothing\" target=\"_parent\">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel=\"nofollow\" href=\"https://templatemo.com/contact\">Contact us</a> for more info.</p>
                        {{ website.description }}
                        <br>
                        <a href=\"{{ website.url }}\" target=\"_blank\" class=\"btn btn-warning\">Visit Website</a>
                        {% if website.iduser.id == app.user.id  and website.deletedAt == null and website.state == 2 %}

                            <div class=\"alert alert-danger\" style=\"background-color: red;border-color: black\" role=\"alert\">
                                this website isn't accepted by the admin yet
                            </div>

                        {% elseif website.iduser.id == app.user.id  and website.deletedAt == null and website.state == 1 %}
                            <a class=\"btn btn-danger\" href=\"{{ path(\"delete_website\",{\"id\":website.id}) }}\">Delete this website</a>

                        {% elseif website.iduser.id == app.user.id  and website.deletedAt == null and website.state == 0 %}
                            <div class=\"alert alert-danger\" style=\"background-color: red;border-color: black\" role=\"alert\">
                                this website is refused by the admin
                            </div>
                        {%  elseif website.deletedAt != null %}
                                <div class=\"alert alert-danger\" style=\"background-color: red;border-color: black\" role=\"alert\">
                                    this website is deleted
                                </div>
                        {% endif %}

                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"right-image\">
                        <img src=\"{{  asset('img/websites_logo/')}}{{ website.logo}}\">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>




{% endblock %}
", "websites/show.html.twig", "C:\\wamp64\\www\\PFE\\templates\\Websites\\show.html.twig");
    }
}

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

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_58d7190bdbcbbccf77f04b29e6c0ac93077d5770a5137439ad58915f3cfa10ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<center>






    <div id=\"second\">
        <div class=\"myform form \">
            <div class=\"logo mb-3\">
                <div class=\"col-md-12 text-center\">
                    <h1 >Signup</h1>
                </div>
            </div>
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "login100-form validate-form"]]);
        echo "
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">First Name</label>
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    <label >Password</label>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "plainPassword", [], "any", false, false, false, 29), "first", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                </div>
                <div class=\"form-group\">
                    <label >Confirm Password</label>
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "plainPassword", [], "any", false, false, false, 34), "second", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>

                <div class=\"col-md-12 \">
                    <div class=\"form-group\">
                        <p class=\"text-center\"><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\" id=\"signin\">Already have an account?</a></p>
                    </div>
                </div>

                <div>
                    <input type=\"submit\" value=\"Register\" class=\"btn btn-success\" />
                </div>

            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
    </div>
</div>

</center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 47,  120 => 39,  112 => 34,  104 => 29,  97 => 25,  90 => 21,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
<center>






    <div id=\"second\">
        <div class=\"myform form \">
            <div class=\"logo mb-3\">
                <div class=\"col-md-12 text-center\">
                    <h1 >Signup</h1>
                </div>
            </div>
            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'login100-form validate-form'}}) }}
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">First Name</label>
                    {{ form_widget(form.username,{'attr':{'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    {{ form_widget(form.email,{'attr':{'class':'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    <label >Password</label>
                    {{ form_widget(form.plainPassword.first,{'attr':{'class':'form-control'}}) }}

                </div>
                <div class=\"form-group\">
                    <label >Confirm Password</label>
                    {{ form_widget(form.plainPassword.second,{'attr':{'class':'form-control'}}) }}
                </div>

                <div class=\"col-md-12 \">
                    <div class=\"form-group\">
                        <p class=\"text-center\"><a href=\"{{ path('fos_user_security_login') }}\" id=\"signin\">Already have an account?</a></p>
                    </div>
                </div>

                <div>
                    <input type=\"submit\" value=\"Register\" class=\"btn btn-success\" />
                </div>

            {{ form_end(form) }}
    </div>
</div>

</center>
{% endblock %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\PFE\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}

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

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_1ed8c65dfb23e7a2e5298a2dde6855994c75514bc2e5e7e280ea25e94201042b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        echo "    ";
        // line 5
        echo "
    ";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageKey", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageData", [], "any", false, false, false, 7), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <center>
        <div id=\"first\">


            <div class=\"myform form \">
                <div class=\"logo mb-3\">
                    <div class=\"col-md-12 text-center\">
                        <h1>Login</h1>
                    </div>
                </div>
                <form action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    ";
        // line 20
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\" />
                    ";
        }
        // line 23
        echo "                    <div class=\"form-group\">
                        <label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                    </div>



                    <div class=\"col-md-12 text-center \">
                        <button type=\"submit\" class=\" btn btn-block mybtn btn-primary tx-tfm\">Login</button>
                    </div>
                    <div class=\"col-md-12 \">
                        <div class=\"login-or\">
                            <hr class=\"hr-or\">
                            <span class=\"span-or\">or</span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <p class=\"text-center\">Don't have account? <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" id=\"signup\">Sign up here</a></p>
                    </div>
                </form>

            </div>
        </div>

    </center>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 45,  118 => 28,  112 => 25,  108 => 24,  105 => 23,  99 => 21,  97 => 20,  93 => 19,  81 => 9,  75 => 7,  73 => 6,  70 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {% trans_default_domain 'FOSUserBundle' %}

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <center>
        <div id=\"first\">


            <div class=\"myform form \">
                <div class=\"logo mb-3\">
                    <div class=\"col-md-12 text-center\">
                        <h1>Login</h1>
                    </div>
                </div>
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}
                    <div class=\"form-group\">
                        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                        <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                    </div>



                    <div class=\"col-md-12 text-center \">
                        <button type=\"submit\" class=\" btn btn-block mybtn btn-primary tx-tfm\">Login</button>
                    </div>
                    <div class=\"col-md-12 \">
                        <div class=\"login-or\">
                            <hr class=\"hr-or\">
                            <span class=\"span-or\">or</span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <p class=\"text-center\">Don't have account? <a href=\"{{ path('fos_user_registration_register') }}\" id=\"signup\">Sign up here</a></p>
                    </div>
                </form>

            </div>
        </div>

    </center>

{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\PFE\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}

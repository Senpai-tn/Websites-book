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

/* @FOSUser/layout.html.twig */
class __TwigTemplate_5d2665c4026cb6f142596842e1f2358b1b3ad7248c399fe19e70eae5c6df6b5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!------ Include the above in your HEAD tag ---------->

        <script src=\"https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Kaushan+Script\" rel=\"stylesheet\">
        <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">


        <style>
        body{
        padding-top:4.2rem;
        padding-bottom:4.2rem;
        background-color: #1a6692;

        }
        a{
        text-decoration:none !important;
        }
        h1,h2,h3{
        font-family: 'Kaushan Script', cursive;
        }
        .myform{
        position: relative;
        display: -ms-flexbox;
        display: flex;
        padding: 1rem;
        -ms-flex-direction: column;
        flex-direction: column;

        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 13px solid rgba(0,0,0,0.1);
        border-radius: 1.1rem;
        outline: 0;
        max-width: 500px;
        }
        .tx-tfm{
        text-transform:uppercase;
        }
        .mybtn{
        border-radius:50px;
        }

        .login-or {
        position: relative;
        color: #aaa;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
        }
        .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
        }
        .hr-or {
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
        }
        .google {
        color:#666;
        width:100%;
        height:40px;
        text-align:center;
        outline:none;
        border: 1px solid lightgrey;
        }
        form .error {
        color: #ff0000;
        }

        </style>
    </head>
    <body>
        <div>
            ";
        // line 90
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 91
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logged_in_as", ["%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "username", [], "any", false, false, false, 91)], "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.logout", [], "FOSUserBundle"), "html", null, true);
            echo "

                </a>
            ";
        }
        // line 97
        echo "        </div>

        ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "request", [], "any", false, false, false, 99), "hasPreviousSession", [], "any", false, false, false, 99)) {
            // line 100
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "session", [], "any", false, false, false, 100), "flashbag", [], "any", false, false, false, 100), "all", [], "method", false, false, false, 100));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 101
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 102
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 103
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "        ";
        }
        // line 108
        echo "

            ";
        // line 110
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 112
        echo "



    </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 110
    public function block_fos_user_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 111
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 111,  215 => 110,  198 => 112,  196 => 110,  192 => 108,  189 => 107,  183 => 106,  174 => 103,  169 => 102,  164 => 101,  159 => 100,  157 => 99,  153 => 97,  146 => 93,  142 => 92,  137 => 91,  135 => 90,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <!------ Include the above in your HEAD tag ---------->

        <script src=\"https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Kaushan+Script\" rel=\"stylesheet\">
        <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">


        <style>
        body{
        padding-top:4.2rem;
        padding-bottom:4.2rem;
        background-color: #1a6692;

        }
        a{
        text-decoration:none !important;
        }
        h1,h2,h3{
        font-family: 'Kaushan Script', cursive;
        }
        .myform{
        position: relative;
        display: -ms-flexbox;
        display: flex;
        padding: 1rem;
        -ms-flex-direction: column;
        flex-direction: column;

        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 13px solid rgba(0,0,0,0.1);
        border-radius: 1.1rem;
        outline: 0;
        max-width: 500px;
        }
        .tx-tfm{
        text-transform:uppercase;
        }
        .mybtn{
        border-radius:50px;
        }

        .login-or {
        position: relative;
        color: #aaa;
        margin-top: 10px;
        margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
        }
        .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
        }
        .hr-or {
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
        }
        .google {
        color:#666;
        width:100%;
        height:40px;
        text-align:center;
        outline:none;
        border: 1px solid lightgrey;
        }
        form .error {
        color: #ff0000;
        }

        </style>
    </head>
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}

                </a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}


            {% block fos_user_content %}
            {% endblock fos_user_content %}




    </body>

</html>
", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\PFE\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\layout.html.twig");
    }
}

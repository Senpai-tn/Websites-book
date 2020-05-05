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

/* search.html.twig */
class __TwigTemplate_a376806fc4e1eed7bb7a751ac83f945680237972477e4567fb83be0aa05f79ed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search.html.twig"));

        // line 1
        echo "<form id=\"search-form\" class=\"example-wrapper\" role=\"search\" method=\"get\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
    <div>
        <input type=\"text\" class=\"form-control\" name=\"search\">
        <button type=\"submit\" class=\"btn btn-success\" name=\"sub\">search</button>
    </div>
</form>

<div id=\"search-results\" class=\"example-wrapper\"></div>

<script type=\"text/javascript\"><!--

    jQuery(document).ready(function(\$){

        \$('#search-form').submit(function(e){

            e.preventDefault();
            \$('#search-results').html(\"\");

            \$.get(\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "/\" + input, function(data, textStatus, xhr){

                if (\"object\" !== typeof data || null === data) {
                    alert(\"Unexpected response from server.\");
                    return;
                }

                if (!data.hasOwnProperty(\"html\") || typeof data.html != \"string\" || (data.html = data.html.trim()).length < 1) {
                    alert(\"Empty response from server.\");
                    return;
                }

                \$('#search-results').html(data.html);

            }).fail(function(xhr, textStatus, errorThrown){

                var error = \"Unknown error occurred.\";
                if (\"object\" === typeof xhr && null !== xhr && xhr.hasOwnProperty(\"responseJSON\") && \"object\" === typeof xhr.responseJSON && xhr.responseJSON.hasOwnProperty(\"error\") && \"string\" === typeof xhr.responseJSON.error && xhr.responseJSON.error.trim().length >= 1) {
                    error = xhr.responseJSON.error.trim();
                } else if (\"string\" === typeof errorThrown && errorThrown.trim().length >= 1) {
                    error = errorThrown.trim();
                }

                alert(error);

            });

        });

    });

    --></script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form id=\"search-form\" class=\"example-wrapper\" role=\"search\" method=\"get\" action=\"{{ path('search') }}\">
    <div>
        <input type=\"text\" class=\"form-control\" name=\"search\">
        <button type=\"submit\" class=\"btn btn-success\" name=\"sub\">search</button>
    </div>
</form>

<div id=\"search-results\" class=\"example-wrapper\"></div>

<script type=\"text/javascript\"><!--

    jQuery(document).ready(function(\$){

        \$('#search-form').submit(function(e){

            e.preventDefault();
            \$('#search-results').html(\"\");

            \$.get(\"{{ path('search') }}/\" + input, function(data, textStatus, xhr){

                if (\"object\" !== typeof data || null === data) {
                    alert(\"Unexpected response from server.\");
                    return;
                }

                if (!data.hasOwnProperty(\"html\") || typeof data.html != \"string\" || (data.html = data.html.trim()).length < 1) {
                    alert(\"Empty response from server.\");
                    return;
                }

                \$('#search-results').html(data.html);

            }).fail(function(xhr, textStatus, errorThrown){

                var error = \"Unknown error occurred.\";
                if (\"object\" === typeof xhr && null !== xhr && xhr.hasOwnProperty(\"responseJSON\") && \"object\" === typeof xhr.responseJSON && xhr.responseJSON.hasOwnProperty(\"error\") && \"string\" === typeof xhr.responseJSON.error && xhr.responseJSON.error.trim().length >= 1) {
                    error = xhr.responseJSON.error.trim();
                } else if (\"string\" === typeof errorThrown && errorThrown.trim().length >= 1) {
                    error = errorThrown.trim();
                }

                alert(error);

            });

        });

    });

    --></script>", "search.html.twig", "C:\\wamp64\\www\\PFE\\templates\\search.html.twig");
    }
}

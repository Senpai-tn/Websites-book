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

/* baseAdmin.html.twig */
class __TwigTemplate_c2765a6b52aebaea8e1f2a156db01023b8157089368fd358b05d29a3bdb4cf0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <title>Admin</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" integrity=\"sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

    <!-- Favicons -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/css/zabuto_calendar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>
</head>

<body>
<section id=\"container\">

    <header class=\"header black-bg\">
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
        </div>

        <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"logo\"><b><span>";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " </span></b></a>


        <div class=\"top-menu\">
            <ul class=\"nav pull-right top-menu\">
                <li><a class=\"logout\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                <li><a href=\"\"><span class=\"label label-theme fa fa-envelope\" style=\"background-color: red\">";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["new"]) || array_key_exists("new", $context) ? $context["new"] : (function () { throw new RuntimeError('Variable "new" does not exist.', 43, $this->source); })())), "html", null, true);
        echo "</span></a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id=\"sidebar\" class=\"nav-collapse \">
            <!-- sidebar menu start-->
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                <p class=\"centered\"><a href=\"profile.html\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/img/ui-sam.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" width=\"80\"></a></p>
                <h5 class=\"centered\">Sam Soffes</h5>
                <li class=\"mt\">
                    <a class=\"active\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Websites</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_website");
        echo "\">Add Website</a></li>
                        <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_websites");
        echo "\">List of Websites</a></li>
                        <li>
                            <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleted");
        echo "\">
                                Websites Deleted
                            </a>

                        </li>

                    </ul>

                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Categories</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCategory");
        echo "\">Add Category</a></li>
                        <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listCategories");
        echo "\">List of Categories</a></li>

                    </ul>

                </li>
                <li class=\"sub-menu\">
                    <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
        echo "\">
                        <i class=\"fa fa-user\"></i>
                        <span>List of Users</span>
                    </a>
                </li>
                <li>




                </li>






            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>

    ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "


</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
<!--common script for all pages-->
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/common-scripts.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/gritter/js/jquery.gritter.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/gritter-conf.js"), "html", null, true);
        echo "\"></script>
<!--script for this page-->
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/lib/zabuto_calendar.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        var unique_id = \$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashio!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
            // (string | optional) the image to display on the left
            image: 'img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
<script type=\"application/javascript\">
    \$(document).ready(function() {
        \$(\"#date-popover\").popover({
            html: true,
            trigger: \"manual\"
        });
        \$(\"#date-popover\").hide();
        \$(\"#date-popover\").click(function(e) {
            \$(this).hide();
        });

        \$(\"#my-calendar\").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: \"show_data.php?action=1\",
                modal: true
            },
            legend: [{
                type: \"text\",
                label: \"Special event\",
                badge: \"00\"
            },
                {
                    type: \"block\",
                    label: \"Regular event\",
                }
            ]
        });
    });

    function myNavFunction(id) {
        \$(\"#date-popover\").hide();
        var nav = \$(\"#\" + id).data(\"navigation\");
        var to = \$(\"#\" + id).data(\"to\");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/sorttable.js"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 117,  343 => 200,  277 => 137,  273 => 136,  268 => 134,  264 => 133,  260 => 132,  255 => 130,  251 => 129,  247 => 128,  243 => 127,  239 => 126,  234 => 124,  226 => 118,  224 => 117,  199 => 95,  190 => 89,  186 => 88,  168 => 73,  163 => 71,  159 => 70,  145 => 59,  139 => 56,  123 => 43,  119 => 42,  109 => 37,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  70 => 19,  64 => 16,  60 => 15,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <title>Admin</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" integrity=\"sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

    <!-- Favicons -->
    <link href=\"{{ asset(\"Admin/img/favicon.png\") }}\" rel=\"icon\">
    <link href=\"{{ asset(\"Admin/img/apple-touch-icon.png\") }}\" rel=\"apple-touch-icon\">

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset(\"Admin/lib/bootstrap/css/bootstrap.min.css\") }}\" rel=\"stylesheet\">
    <!--external css-->
    <link href=\"{{ asset(\"Admin/lib/font-awesome/css/font-awesome.css\") }}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"Admin/css/zabuto_calendar.css\") }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"Admin/lib/gritter/css/jquery.gritter.css\") }}\" />
    <link href=\"{{ asset(\"Admin/css/style.css\") }}\" rel=\"stylesheet\">
    <link href=\"{{ asset(\"Admin/css/style-responsive.css\") }}\" rel=\"stylesheet\">
    <script src=\"{{ asset(\"Admin/lib/chart-master/Chart.js\") }}\"></script>
</head>

<body>
<section id=\"container\">

    <header class=\"header black-bg\">
        <div class=\"sidebar-toggle-box\">
            <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
        </div>

        <a href=\"{{ path('index') }}\" class=\"logo\"><b><span>{{ title }} </span></b></a>


        <div class=\"top-menu\">
            <ul class=\"nav pull-right top-menu\">
                <li><a class=\"logout\" href=\"{{ path(\"fos_user_security_logout\") }}\">Logout</a></li>
                <li><a href=\"\"><span class=\"label label-theme fa fa-envelope\" style=\"background-color: red\">{{ new|length }}</span></a></li>
            </ul>
        </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id=\"sidebar\" class=\"nav-collapse \">
            <!-- sidebar menu start-->
            <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                <p class=\"centered\"><a href=\"profile.html\"><img src=\"{{ asset(\"Admin/img/ui-sam.jpg\") }}\" class=\"img-circle\" width=\"80\"></a></p>
                <h5 class=\"centered\">Sam Soffes</h5>
                <li class=\"mt\">
                    <a class=\"active\" href=\"{{ path(\"admin\") }}\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Websites</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"{{ path(\"add_website\") }}\">Add Website</a></li>
                        <li><a href=\"{{ path(\"list_websites\") }}\">List of Websites</a></li>
                        <li>
                            <a href=\"{{ path(\"deleted\") }}\">
                                Websites Deleted
                            </a>

                        </li>

                    </ul>

                </li>
                <li class=\"sub-menu\">
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-desktop\"></i>
                        <span>Categories</span>
                    </a>
                    <ul class=\"sub\">
                        <li><a href=\"{{ path(\"addCategory\") }}\">Add Category</a></li>
                        <li><a href=\"{{ path(\"listCategories\") }}\">List of Categories</a></li>

                    </ul>

                </li>
                <li class=\"sub-menu\">
                    <a href=\"{{ path(\"users\") }}\">
                        <i class=\"fa fa-user\"></i>
                        <span>List of Users</span>
                    </a>
                </li>
                <li>




                </li>






            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>

    {% block body %}   {% endblock %}



</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src=\"{{ asset(\"Admin/lib/jquery/jquery.min.js\") }}\"></script>

<script src=\"{{ asset(\"Admin/lib/bootstrap/js/bootstrap.min.js\") }}\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"{{ asset(\"Admin/lib/jquery.dcjqaccordion.2.7.js\") }}\"></script>
<script src=\"{{ asset(\"Admin/lib/jquery.scrollTo.min.js\") }}\"></script>
<script src=\"{{ asset(\"Admin/lib/jquery.nicescroll.js\") }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset(\"Admin/lib/jquery.sparkline.js\") }}\"></script>
<!--common script for all pages-->
<script src=\"{{ asset(\"Admin/lib/common-scripts.js\") }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset(\"Admin/lib/gritter/js/jquery.gritter.js\") }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset(\"Admin/lib/gritter-conf.js\") }}\"></script>
<!--script for this page-->
<script src=\"{{ asset(\"Admin/lib/sparkline-chart.js\") }}\"></script>
<script src=\"{{ asset(\"Admin/lib/zabuto_calendar.js\") }}\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        var unique_id = \$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashio!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
            // (string | optional) the image to display on the left
            image: 'img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
<script type=\"application/javascript\">
    \$(document).ready(function() {
        \$(\"#date-popover\").popover({
            html: true,
            trigger: \"manual\"
        });
        \$(\"#date-popover\").hide();
        \$(\"#date-popover\").click(function(e) {
            \$(this).hide();
        });

        \$(\"#my-calendar\").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: \"show_data.php?action=1\",
                modal: true
            },
            legend: [{
                type: \"text\",
                label: \"Special event\",
                badge: \"00\"
            },
                {
                    type: \"block\",
                    label: \"Regular event\",
                }
            ]
        });
    });

    function myNavFunction(id) {
        \$(\"#date-popover\").hide();
        var nav = \$(\"#\" + id).data(\"navigation\");
        var to = \$(\"#\" + id).data(\"to\");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
<script src=\"{{ asset('js/sorttable.js') }}\"></script>
</body>

</html>
", "baseAdmin.html.twig", "C:\\wamp64\\www\\PFE\\templates\\baseAdmin.html.twig");
    }
}

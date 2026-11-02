<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* includes/header.html.twig */
class __TwigTemplate_a46a13b36e1359ba4c6a9dfe45d23aca extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<head>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe\" crossorigin=\"anonymous\">
    <script type=\"module\" src=\"https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL\" crossorigin=\"anonymous\"></script>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Bagel+Fat+One&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700\" rel=\"stylesheet\">
</head>

<header>
    <div class=\"container navigation-bar\">
        <div class=\"col profile-avatar-container\">
            <a href=\" ";
        // line 13
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user");
        yield " \">
                ";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "                    <img src=\"";
            yield (string) $this->escaper->escape(("/uploads/profiles/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "image", [], "any", false, false, false, 15)), "html", null, true);
            yield "\" alt=\"profile\">
                ";
        } else {
            // line 17
            yield "                    <img src=\"https://img.magnific.com/vecteurs-premium/illustration-vectorielle-plate-echelle-gris-avatar-profil-utilisateur-icone-personne-image-profil-silhouette-neutre-genre-convient-pour-profils-medias-sociaux-icones-economiseurs-ecran-comme-modelex9_719432-3434.jpg?semt=ais_hybrid&w=740&q=80\">
                ";
        }
        // line 19
        yield "            </a>
        </div>
        <div class=\"col nav-buttons\">
            ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 22), "attributes", [], "any", false, false, false, 22), "get", ["_route"], "method", false, false, false, 22) != "app_home")) {
            // line 23
            yield "                <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\"><button>Home</button></a>
            ";
        }
        // line 25
        yield "
            ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", ["_route"], "method", false, false, false, 26) != "app_spinner")) {
            // line 27
            yield "                <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_spinner");
            yield "\"><button>Roulette</button></a>
            ";
        }
        // line 29
        yield "
            ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 30), "attributes", [], "any", false, false, false, 30), "get", ["_route"], "method", false, false, false, 30) != "app_duck_duck_jump")) {
            // line 31
            yield "                <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump");
            yield "\" data-turbo=\"false\"><button>Duck Duck Jump</button></a>
            ";
        }
        // line 33
        yield "
            ";
        // line 34
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "                <a class=\"link\" href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"><button>Se déconnecter</button></a>
            ";
        } else {
            // line 37
            yield "                <a class=\"link\" href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\"><button>Se connecter</button></a>
            ";
        }
        // line 39
        yield "
            ";
        // line 40
        if ( !(($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                <a class=\"link\" href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\"><button>S\x27inscire</button></a>
            ";
        }
        // line 43
        yield "        </div>
        <div class=\"col balance\">
                ";
        // line 45
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "                   <span>Argent : <span id=\"nav-user-balance\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 46), "balance", [], "any", false, false, false, 46), "html", null, true);
            yield "</span> €</span>
                ";
        }
        // line 48
        yield "        </div>
    </div>
</header>";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "includes/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  152 => 48,  146 => 46,  144 => 45,  140 => 43,  134 => 41,  132 => 40,  129 => 39,  123 => 37,  117 => 35,  115 => 34,  112 => 33,  106 => 31,  104 => 30,  101 => 29,  95 => 27,  93 => 26,  90 => 25,  84 => 23,  82 => 22,  77 => 19,  73 => 17,  67 => 15,  65 => 14,  61 => 13,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "includes/header.html.twig", "C:\\Users\\lefra\\Documents\\gambling\\templates\\includes\\header.html.twig");
    }
}

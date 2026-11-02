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

/* home/index.html.twig */
class __TwigTemplate_2b34809d79726693eb9ecc1b4174c2c6 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Gambling";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield from $this->load("includes/header.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "<head>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/home.css"), "html", null, true);
        yield "\">
</head>

<body>
    <div id=\"home-container\">
        <h1 class=\"home\">Bonjour ";
        // line 13
        if ((($tmp = (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ";
            yield (string) $this->escaper->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 13, $this->source); })()), "html", null, true);
            yield " ";
        } else {
            yield " le nouveau/la nouvelle ";
        }
        yield "</h1>
        <h2 class=\"home\">Prêt à parier ?</h2>
        <p class=\"home\">Ce site te permet de parier sans utiliser d\x27argent pour t\x27éviter d\x27utiliser de l\x27argent réel, parie, deviens riche (virtuellement) et montre à tes amis qui est le roi des As (ou plutôt qui a une addiction en fonction des gens).</p>

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["fail"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "            <div class=\"flash-fail\">
                <h5 style=\"text-align:center;\">(PS : ";
            // line 19
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::join($context["message"], ". <br>"), "html", null, true);
            yield ")</h5>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 22
        yield "
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["success"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            yield "            <div class=\"flash-success\">
                <h5 style=\"text-align:center;\">(PS : ";
            // line 25
            yield (string) $this->escaper->escape(Twig\Extension\CoreExtension::join($context["message"], ". <br>"), "html", null, true);
            yield ")</h5>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 28
        yield "    </div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  168 => 28,  158 => 25,  155 => 24,  151 => 23,  148 => 22,  138 => 19,  135 => 18,  131 => 17,  118 => 13,  110 => 8,  107 => 7,  105 => 6,  92 => 5,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}Gambling{% endblock %}

{% block body %}
{% include \x27includes/header.html.twig\x27 %}
<head>
    <link rel=\"stylesheet\" href=\"{{ asset(\x27styles/home.css\x27) }}\">
</head>

<body>
    <div id=\"home-container\">
        <h1 class=\"home\">Bonjour {% if username %} {{ username }} {% else %} le nouveau/la nouvelle {% endif %}</h1>
        <h2 class=\"home\">Prêt à parier ?</h2>
        <p class=\"home\">Ce site te permet de parier sans utiliser d\x27argent pour t\x27éviter d\x27utiliser de l\x27argent réel, parie, deviens riche (virtuellement) et montre à tes amis qui est le roi des As (ou plutôt qui a une addiction en fonction des gens).</p>

        {% for message in app.flashes(\x27fail\x27) %}
            <div class=\"flash-fail\">
                <h5 style=\"text-align:center;\">(PS : {{ message|join(\x27. <br>\x27) }})</h5>
            </div>
        {% endfor %}

        {% for message in app.flashes(\x27success\x27) %}
            <div class=\"flash-success\">
                <h5 style=\"text-align:center;\">(PS : {{ message|join(\x27. <br>\x27) }})</h5>
            </div>
        {% endfor %}
    </div>
</body>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\lefra\\Documents\\gambling\\templates\\home\\index.html.twig");
    }
}

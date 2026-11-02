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
class __TwigTemplate_e51b909c80fcf692b8c72f4574767dcb extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Gambling";
        return; yield;
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        if ((($tmp = ($context["username"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " ";
            yield (string) $this->escaper->escape(($context["username"] ?? null), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["fail"], "method", false, false, false, 17));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 23));
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
        return array (  138 => 28,  128 => 25,  125 => 24,  121 => 23,  118 => 22,  108 => 19,  105 => 18,  101 => 17,  88 => 13,  80 => 8,  77 => 7,  75 => 6,  68 => 5,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.html.twig", "C:\\Users\\lefra\\Documents\\gambling\\templates\\home\\index.html.twig");
    }
}

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

/* duck_duck_jump/index.html.twig */
class __TwigTemplate_a89b5be3f263d39aca1375b6cec2ec72 extends Template
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
        yield "Hello DuckDuckJumpController!";
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
        yield "    <div class=\"container game-container py-3\">
        <head>
            <link rel=\"stylesheet\" href=\"";
        // line 9
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/duck_duck_jump.css"), "html", null, true);
        yield "\"></link>
        </head>

        <header class=\"d-flex justify-content-between align-items-center mb-4\">
            <div>
                <h1 class=\"font-bagel text-warning m-0 fs-2\">Duck Duck Jump</h1>
            </div>
            <a href=\"";
        // line 16
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_duck_duck_jump_leaderboard");
        yield "\">
                <button>Voir le classement</button>
            </a>
        </header>

        <div class=\"row g-4\">
        <div class=\"canvas-wrapper col-lg-8\">
            <div class=\"p-3 text-start multiplier-container\">
                <div class=\"mb-2\">
                    Multiplieur de gain : <span id=\"multiplier\" class=\"multiplier-badge\">X0</span>
                </div>

                <canvas id=\"canvas\" width=\"500\" height=\"400\" data-rive-url=\"";
        // line 28
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("rive/duck_animations.riv"), "html", null, true);
        yield "\"></canvas>
            </div>
        </div>
        
        
        <p>Votre solde actuelle est de <span id=\"balance\">";
        // line 33
        yield (string) $this->escaper->escape(($context["userBalance"] ?? null), "html", null, true);
        yield "</span>€</p>
        <p>Miser une somme : <input type=\"number\" label=\"betAmount\" id=\"betAmount\"></p>

        <div id=\"controls\">
            <button id=\"play\">Commencer une partie</button>
        </div>
    </div>
    <script src=\"https://unpkg.com/@rive-app/webgl2@latest\"></script>
    <script src=\" ";
        // line 41
        yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("script/duckduckjump.js"), "html", null, true);
        yield " \"></script>
";
        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "duck_duck_jump/index.html.twig";
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
        return array (  125 => 41,  114 => 33,  106 => 28,  91 => 16,  81 => 9,  77 => 7,  75 => 6,  68 => 5,  57 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "duck_duck_jump/index.html.twig", "C:\\Users\\lefra\\Documents\\gambling\\templates\\duck_duck_jump\\index.html.twig");
    }
}
